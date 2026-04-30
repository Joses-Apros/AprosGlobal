<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

require_once(__DIR__ . '/vendor/autoload.php');

use Oswaldo\WpDevKit\core\WpDevKit;

// Initialize WpDevKit.
WpDevKit::init();

/**
 * Register Solutions custom post type.
 */
add_action('init', static function () {
  $labels = [
    'name' => __('Solutions', 'apros-global-theme'),
    'singular_name' => __('Solution', 'apros-global-theme'),
    'menu_name' => __('Solutions', 'apros-global-theme'),
    'name_admin_bar' => __('Solution', 'apros-global-theme'),
    'add_new' => __('Add New', 'apros-global-theme'),
    'add_new_item' => __('Add New Solution', 'apros-global-theme'),
    'new_item' => __('New Solution', 'apros-global-theme'),
    'edit_item' => __('Edit Solution', 'apros-global-theme'),
    'view_item' => __('View Solution', 'apros-global-theme'),
    'all_items' => __('All Solutions', 'apros-global-theme'),
    'search_items' => __('Search Solutions', 'apros-global-theme'),
    'not_found' => __('No solutions found.', 'apros-global-theme'),
    'not_found_in_trash' => __('No solutions found in Trash.', 'apros-global-theme'),
  ];

  register_post_type('solution', [
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => 'solutions',
    'rewrite' => [
      'slug' => 'solutions',
      'with_front' => false,
    ],
    'menu_icon' => 'dashicons-lightbulb',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
  ]);

  $insight_labels = [
    'name' => __('Insights', 'apros-global-theme'),
    'singular_name' => __('Insight', 'apros-global-theme'),
    'menu_name' => __('Insights', 'apros-global-theme'),
    'name_admin_bar' => __('Insight', 'apros-global-theme'),
    'add_new' => __('Add New', 'apros-global-theme'),
    'add_new_item' => __('Add New Insight', 'apros-global-theme'),
    'new_item' => __('New Insight', 'apros-global-theme'),
    'edit_item' => __('Edit Insight', 'apros-global-theme'),
    'view_item' => __('View Insight', 'apros-global-theme'),
    'all_items' => __('All Insights', 'apros-global-theme'),
    'search_items' => __('Search Insights', 'apros-global-theme'),
    'not_found' => __('No insights found.', 'apros-global-theme'),
    'not_found_in_trash' => __('No insights found in Trash.', 'apros-global-theme'),
  ];

  register_post_type('insight', [
    'labels' => $insight_labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => false,
    'rewrite' => [
      'slug' => 'insights',
      'with_front' => false,
    ],
    'menu_icon' => 'dashicons-media-document',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
  ]);

  $insight_category_labels = [
    'name' => __('Categorias', 'apros-global-theme'),
    'singular_name' => __('Categoria', 'apros-global-theme'),
    'search_items' => __('Buscar categorias', 'apros-global-theme'),
    'all_items' => __('Todas las categorias', 'apros-global-theme'),
    'edit_item' => __('Editar categoria', 'apros-global-theme'),
    'update_item' => __('Actualizar categoria', 'apros-global-theme'),
    'add_new_item' => __('Agregar nueva categoria', 'apros-global-theme'),
    'new_item_name' => __('Nombre de nueva categoria', 'apros-global-theme'),
    'menu_name' => __('Categorias', 'apros-global-theme'),
  ];

  register_taxonomy('categorias', ['insight'], [
    'hierarchical' => true,
    'labels' => $insight_category_labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => [
      'slug' => 'categorias',
      'with_front' => false,
    ],
  ]);
});

/**
 * ACF field groups are managed via Local JSON in /acf-json.
 */

/**
 * Flush rewrite rules once after CPT registration changes.
 */
add_action('admin_init', static function () {
  if (get_option('apros_rewrite_flushed_v3') === '1') {
    return;
  }

  flush_rewrite_rules(false);
  update_option('apros_rewrite_flushed_v3', '1');
});

/**
 * Seed insight categorias terms once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_insight_categorias_seeded_v1') === '1') {
    return;
  }

  $terms = [
    ['name' => 'Beauty & Health', 'slug' => 'beauty-health'],
    ['name' => 'Finance / Fintech', 'slug' => 'finance-fintech'],
    ['name' => 'Real Estate', 'slug' => 'real-estate'],
    ['name' => 'Retail', 'slug' => 'retail'],
    ['name' => 'B2B / Corporate', 'slug' => 'b2b-corporate'],
    ['name' => 'Agencies & Consultancies', 'slug' => 'agencies-consultancies'],
    ['name' => 'Cultural & Non profit', 'slug' => 'cultural-non-profit'],
    ['name' => 'Business Technology', 'slug' => 'business-technology'],
    ['name' => 'Cybersecurity', 'slug' => 'cybersecurity'],
    ['name' => 'Digital Marketing', 'slug' => 'digital-marketing'],
    ['name' => 'Cloud Computing', 'slug' => 'cloud-computing'],
    ['name' => 'Methodologies', 'slug' => 'methodologies'],
    ['name' => 'Artificial Intelligence', 'slug' => 'artificial-intelligence'],
    ['name' => 'Restaurants', 'slug' => 'restaurants'],
    ['name' => 'Mindful tech consumption', 'slug' => 'mindful-tech-consumption'],
    ['name' => 'Miscellaneous', 'slug' => 'events-miscellaneous'],
  ];

  foreach ($terms as $term) {
    if (term_exists($term['slug'], 'categorias')) {
      continue;
    }

    wp_insert_term($term['name'], 'categorias', [
      'slug' => $term['slug'],
    ]);
  }

  update_option('apros_insight_categorias_seeded_v1', '1');
});

/**
 * Assign insight categorias from CSV once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_insight_categorias_assigned_v1') === '1') {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Insights - 65b4453c9e0f05c6674b73b3.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $slug_index = array_search('Slug', $header, true);
  $categoria_index = array_search('Categorias', $header, true);
  if ($slug_index === false || $categoria_index === false) {
    fclose($handle);
    return;
  }

  while (($row = fgetcsv($handle)) !== false) {
    $post_slug = isset($row[$slug_index]) ? trim((string) $row[$slug_index]) : '';
    $term_slug = isset($row[$categoria_index]) ? trim((string) $row[$categoria_index]) : '';

    if ($post_slug === '' || $term_slug === '') {
      continue;
    }

    $insight = get_page_by_path($post_slug, 'OBJECT', 'insight');
    if (!$insight instanceof WP_Post) {
      continue;
    }

    $term = get_term_by('slug', $term_slug, 'categorias');
    if (!$term || is_wp_error($term)) {
      continue;
    }

    wp_set_object_terms($insight->ID, [(int) $term->term_id], 'categorias', false);
  }

  fclose($handle);
  update_option('apros_insight_categorias_assigned_v1', '1');
});

/**
 * Import Jobs employment types from CSV once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_employment_type_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Times - 65b4453c9e0f05c6674b744a.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $column_map = [
    'Name' => 'name',
    'Slug' => 'slug',
    'Collection ID' => 'collection_id',
    'Locale ID' => 'locale_id',
    'Item ID' => 'item_id',
    'Archived' => 'archived',
    'Draft' => 'draft',
    'Created On' => 'created_on',
    'Updated On' => 'updated_on',
    'Published On' => 'published_on',
  ];

  $indexes = [];
  foreach ($column_map as $csv_column => $field_name) {
    $index = array_search($csv_column, $header, true);
    if ($index === false) {
      fclose($handle);
      return;
    }
    $indexes[$field_name] = $index;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $repeater_row = [];
    foreach ($indexes as $field_name => $index) {
      $repeater_row[$field_name] = isset($row[$index]) ? trim((string) $row[$index]) : '';
    }
    $rows[] = $repeater_row;
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f23557dd4e2', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_employment_type_imported_v1', '1');
});

/**
 * Import Jobs locations names into Talent Development repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_talent_development_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Locations - 65b4453c9e0f05c6674b7449.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $name_index = array_search('Name', $header, true);
  if ($name_index === false) {
    fclose($handle);
    return;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $name = isset($row[$name_index]) ? trim((string) $row[$name_index]) : '';
    if ($name === '') {
      continue;
    }
    $rows[] = [
      'name' => $name,
    ];
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f24a7a2c001', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_talent_development_imported_v1', '1');
});

/**
 * Import Jobs levels names into Specialist Level repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_specialist_level_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Levels - 65b4453c9e0f05c6674b7436.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $name_index = array_search('Name', $header, true);
  if ($name_index === false) {
    fclose($handle);
    return;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $name = isset($row[$name_index]) ? trim((string) $row[$name_index]) : '';
    if ($name === '') {
      continue;
    }
    $rows[] = [
      'name' => $name,
    ];
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f24f3e5a002', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_specialist_level_imported_v1', '1');
});

/**
 * Import Jobs locations names into Talent Departments repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_talent_departments_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Locations - 65b4453c9e0f05c6674b7449.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $name_index = array_search('Name', $header, true);
  if ($name_index === false) {
    fclose($handle);
    return;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $name = isset($row[$name_index]) ? trim((string) $row[$name_index]) : '';
    if ($name === '') {
      continue;
    }
    $rows[] = [
      'name' => $name,
    ];
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f2518d8b003', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_talent_departments_imported_v1', '1');
});

/**
 * Import Jobs levels names into Level repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_level_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Levels - 65b4453c9e0f05c6674b7436.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $name_index = array_search('Name', $header, true);
  if ($name_index === false) {
    fclose($handle);
    return;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $name = isset($row[$name_index]) ? trim((string) $row[$name_index]) : '';
    if ($name === '') {
      continue;
    }
    $rows[] = [
      'name' => $name,
    ];
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f253e07c004', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_level_imported_v1', '1');
});

/**
 * Import Jobs countries names into Status repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_status_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Countries - 65b4453c9e0f05c6674b741c.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $name_index = array_search('Name', $header, true);
  if ($name_index === false) {
    fclose($handle);
    return;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $name = isset($row[$name_index]) ? trim((string) $row[$name_index]) : '';
    if ($name === '') {
      continue;
    }
    $rows[] = [
      'name' => $name,
    ];
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f2562f9d005', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_status_imported_v1', '1');
});

/**
 * Import Jobs locations names into Departments repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_departments_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs Locations - 65b4453c9e0f05c6674b7449.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $name_index = array_search('Name', $header, true);
  if ($name_index === false) {
    fclose($handle);
    return;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $name = isset($row[$name_index]) ? trim((string) $row[$name_index]) : '';
    if ($name === '') {
      continue;
    }
    $rows[] = [
      'name' => $name,
    ];
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f258adbe006', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_departments_imported_v1', '1');
});

/**
 * Import Jobs rows into Jobs repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_jobs_rows_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Jobs - 65b4453c9e0f05c6674b7403.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $jobs_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/jobs.php',
    'fields' => 'ids',
  ]);

  if (empty($jobs_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $column_map = [
    'Name' => 'name',
    'Slug' => 'slug',
    'Collection ID' => 'collection_id',
    'Locale ID' => 'locale_id',
    'Item ID' => 'item_id',
    'Archived' => 'archived',
    'Draft' => 'draft',
    'Created On' => 'created_on',
    'Updated On' => 'updated_on',
    'Published On' => 'published_on',
    'Time' => 'time',
    'Location' => 'location',
    'Level' => 'level',
    'Country' => 'country',
    'Description' => 'description',
    'Link linkedin' => 'link_linkedin',
  ];

  $indexes = [];
  foreach ($column_map as $csv_column => $field_name) {
    $index = array_search($csv_column, $header, true);
    if ($index === false) {
      fclose($handle);
      return;
    }
    $indexes[$field_name] = $index;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $repeater_row = [];
    foreach ($indexes as $field_name => $index) {
      $repeater_row[$field_name] = isset($row[$index]) ? trim((string) $row[$index]) : '';
    }
    if ($repeater_row['name'] === '') {
      continue;
    }
    $rows[] = $repeater_row;
  }
  fclose($handle);

  foreach ($jobs_pages as $jobs_page_id) {
    update_field('field_69f25d11ac007', $rows, (int) $jobs_page_id);
  }

  update_option('apros_jobs_rows_imported_v1', '1');
});

/**
 * Import About Us team rows into Equipos repeater once.
 */
add_action('admin_init', static function () {
  if (get_option('apros_about_us_equipos_imported_v1') === '1') {
    return;
  }

  if (!function_exists('update_field')) {
    return;
  }

  $csv_path = 'd:\\Usuario\\Descargas\\Apros Global - Equipos - 65b4453c9e0f05c6674b7382.csv';
  if (!file_exists($csv_path)) {
    return;
  }

  $about_pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/about_us.php',
    'fields' => 'ids',
  ]);

  if (empty($about_pages)) {
    return;
  }

  $handle = fopen($csv_path, 'r');
  if ($handle === false) {
    return;
  }

  $header = fgetcsv($handle);
  if (!is_array($header)) {
    fclose($handle);
    return;
  }

  $column_map = [
    'Name' => 'name',
    'Slug' => 'slug',
    'Perfil' => 'perfil',
    'Descripción' => 'descripcion',
    'Cargo' => 'cargo',
    'linkedin' => 'linkedin',
    'Order' => 'order',
  ];

  $indexes = [];
  foreach ($column_map as $csv_column => $field_name) {
    $index = array_search($csv_column, $header, true);
    if ($index === false) {
      fclose($handle);
      return;
    }
    $indexes[$field_name] = $index;
  }

  $rows = [];
  while (($row = fgetcsv($handle)) !== false) {
    $repeater_row = [];
    foreach ($indexes as $field_name => $index) {
      $repeater_row[$field_name] = isset($row[$index]) ? trim((string) $row[$index]) : '';
    }

    if ($repeater_row['name'] === '') {
      continue;
    }

    $repeater_row['order'] = (int) $repeater_row['order'];
    $rows[] = $repeater_row;
  }
  fclose($handle);

  foreach ($about_pages as $about_page_id) {
    update_field('field_69f2c69bb6696', $rows, (int) $about_page_id);
  }

  update_option('apros_about_us_equipos_imported_v1', '1');
});



