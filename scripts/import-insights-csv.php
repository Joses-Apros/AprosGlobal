<?php
/**
 * One-off importer for Insight CPT from Webflow CSV.
 *
 * Usage:
 * wp --path="D:/LocalWP-Projects/apros-global/app/public" eval-file "D:/LocalWP-Projects/apros-global/app/public/wp-content/themes/apros-global-theme/scripts/import-insights-csv.php"
 */

if (!function_exists('apros_import_insights_from_csv')) {
  function apros_import_insights_from_csv(string $csv_path): array {
    if (!file_exists($csv_path)) {
      return ['created' => 0, 'updated' => 0, 'skipped' => 0, 'errors' => 1, 'messages' => ["CSV not found: {$csv_path}"]];
    }

    $fh = fopen($csv_path, 'r');
    if (!$fh) {
      return ['created' => 0, 'updated' => 0, 'skipped' => 0, 'errors' => 1, 'messages' => ['Unable to open CSV.']];
    }

    $headers = fgetcsv($fh);
    if (!$headers) {
      fclose($fh);
      return ['created' => 0, 'updated' => 0, 'skipped' => 0, 'errors' => 1, 'messages' => ['CSV header row is empty.']];
    }

    $headers = array_map('trim', $headers);
    $stats = ['created' => 0, 'updated' => 0, 'skipped' => 0, 'errors' => 0, 'messages' => []];

    $read = static function (array $row, string $key): string {
      return isset($row[$key]) ? trim((string) $row[$key]) : '';
    };

    $to_bool = static function (string $value): bool {
      return in_array(strtolower(trim($value)), ['1', 'true', 'yes'], true);
    };

    $normalize_date = static function (string $value): string {
      if ($value === '') {
        return '';
      }
      $ts = strtotime($value);
      return $ts ? gmdate('Y-m-d H:i:s', $ts) : '';
    };

    while (($data = fgetcsv($fh)) !== false) {
      if (!$data || count($data) === 0) {
        continue;
      }

      $row = [];
      foreach ($headers as $i => $header) {
        $row[$header] = isset($data[$i]) ? $data[$i] : '';
      }

      $title = $read($row, 'Name');
      $slug = sanitize_title($read($row, 'Slug'));
      if ($title === '' || $slug === '') {
        $stats['skipped']++;
        continue;
      }

      $draft = $to_bool($read($row, 'Draft'));
      $archived = $to_bool($read($row, 'Archived'));
      $post_status = ($draft || $archived) ? 'draft' : 'publish';

      $main_post_html = $read($row, 'Main post');
      $publish_date_text = $read($row, 'Fecha de publicación');
      $publish_date = $normalize_date($publish_date_text);

      $postarr = [
        'post_type' => 'insight',
        'post_title' => $title,
        'post_name' => $slug,
        'post_status' => $post_status,
        'post_content' => $main_post_html,
      ];

      if ($publish_date !== '') {
        $postarr['post_date_gmt'] = $publish_date;
        $postarr['post_date'] = get_date_from_gmt($publish_date);
      }

      $existing = get_page_by_path($slug, OBJECT, 'insight');
      $post_id = $existing
        ? wp_update_post($postarr + ['ID' => $existing->ID], true)
        : wp_insert_post($postarr, true);

      if (is_wp_error($post_id)) {
        $stats['errors']++;
        $stats['messages'][] = "Error with {$slug}: " . $post_id->get_error_message();
        continue;
      }

      $existing ? $stats['updated']++ : $stats['created']++;

      update_field('insight_category', $read($row, 'Categorias'), $post_id);
      update_field('insight_cover_image', $read($row, 'Cover'), $post_id);
      update_field('insight_body_html', $main_post_html, $post_id);
      update_field('insight_publish_label', $publish_date_text, $post_id);
      update_field('insight_publish_date_text', $publish_date_text, $post_id);
      update_field('insight_webflow_published_on', $read($row, 'Published On'), $post_id);
      update_field('insight_spanish_url', $read($row, 'Read in spanish'), $post_id);
    }

    fclose($fh);
    return $stats;
  }
}

if (defined('ABSPATH') && php_sapi_name() === 'cli') {
  $csv_path = 'd:/Usuario/Descargas/Apros Global - Insights - 65b4453c9e0f05c6674b73b3.csv';
  $stats = apros_import_insights_from_csv($csv_path);
  foreach ($stats['messages'] as $message) {
    echo $message . "\n";
  }
  echo "Import completed.\n";
  echo "Created: {$stats['created']}\n";
  echo "Updated: {$stats['updated']}\n";
  echo "Skipped: {$stats['skipped']}\n";
  echo "Errors: {$stats['errors']}\n";
}
