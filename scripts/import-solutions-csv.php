<?php
/**
 * One-off importer for Solution CPT from Webflow CSV.
 *
 * Usage:
 * wp --path="D:/LocalWP-Projects/apros-global/app/public" eval-file "D:/LocalWP-Projects/apros-global/app/public/wp-content/themes/apros-global-theme/scripts/import-solutions-csv.php"
 */

if (!function_exists('apros_import_solutions_from_csv')) {
  function apros_import_solutions_from_csv(string $csv_path): array {
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

      $existing = get_page_by_path($slug, OBJECT, 'solution');
      $postarr = [
        'post_type' => 'solution',
        'post_title' => $title,
        'post_name' => $slug,
        'post_status' => $post_status,
        'post_content' => $read($row, 'Content editable'),
        'post_excerpt' => $read($row, 'Header Copy bajada'),
      ];

      $post_id = $existing
        ? wp_update_post($postarr + ['ID' => $existing->ID], true)
        : wp_insert_post($postarr, true);

      if (is_wp_error($post_id)) {
        $stats['errors']++;
        $stats['messages'][] = "Error with {$slug}: " . $post_id->get_error_message();
        continue;
      }

      $existing ? $stats['updated']++ : $stats['created']++;

      update_field('solution_summary', $read($row, 'Header Copy bajada'), $post_id);
      update_field('solution_subtitle', $read($row, 'Service Text'), $post_id);
      update_field('solution_demo_url', $read($row, 'CTA - 1 - Link'), $post_id);
      update_field('solution_hero_video_mp4', $read($row, 'Link MP4'), $post_id);
      update_field('solution_hero_video_webm', $read($row, 'Link Webm'), $post_id);
      update_field('solution_icon', $read($row, 'Service icon'), $post_id);
      update_field('solution_cta_heading', $read($row, 'title seccion contacto'), $post_id);
      update_field('solution_problem_title', 'From this', $post_id);
      update_field('solution_problem_list', $read($row, 'From this'), $post_id);
      update_field('solution_success_title', 'To this', $post_id);
      update_field('solution_success_list', $read($row, 'To this'), $post_id);

      $features = [];
      for ($i = 1; $i <= 5; $i++) {
        $img = $read($row, "Service {$i} - Img");
        if ($img === '' && $i === 4) {
          $img = $read($row, 'Service img 4');
        }
        $f_title = $read($row, "Service {$i} - Title");
        $f_info = $read($row, "Service {$i} - Info");
        if ($img === '' && $f_title === '' && $f_info === '') {
          continue;
        }
        $features[] = ['title' => $f_title, 'description' => $f_info, 'image' => $img];
      }
      update_field('solution_features', $features, $post_id);

      $process = [];
      for ($i = 1; $i <= 4; $i++) {
        if ($i === 4) {
          $icon = $read($row, 'Proceso - 4 Icon');
          $p_title = $read($row, 'Proceso - 4 title');
          $p_info = $read($row, 'Proceso - 4 Info');
        } else {
          $icon = $read($row, "Proceso {$i} - Icon");
          $p_title = $read($row, "Proceso {$i} - Title");
          if ($p_title === '' && $i === 2) {
            $p_title = $read($row, 'Proceso 2 - title');
          }
          $p_info = $read($row, "Proceso {$i} - Info");
        }
        if ($icon === '' && $p_title === '' && $p_info === '') {
          continue;
        }
        $process[] = ['icon' => $icon, 'title' => $p_title, 'description' => $p_info];
      }
      update_field('solution_process_items', $process, $post_id);
    }

    fclose($fh);
    return $stats;
  }
}

if (defined('ABSPATH') && php_sapi_name() === 'cli') {
  $csv_path = 'd:/Usuario/Descargas/Apros Global - Solutions - 65b4453c9e0f05c6674b73d1.csv';
  $stats = apros_import_solutions_from_csv($csv_path);
  foreach ($stats['messages'] as $message) {
    echo $message . "\n";
  }
  echo "Import completed.\n";
  echo "Created: {$stats['created']}\n";
  echo "Updated: {$stats['updated']}\n";
  echo "Skipped: {$stats['skipped']}\n";
  echo "Errors: {$stats['errors']}\n";
}
