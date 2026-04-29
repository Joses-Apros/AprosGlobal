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
 * Register ACF fields for solution post type.
 */
add_action('acf/init', static function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group([
    'key' => 'group_solution_fields',
    'title' => 'Solution Fields',
    'fields' => [
      [
        'key' => 'field_solution_subtitle',
        'label' => 'Solution Subtitle',
        'name' => 'solution_subtitle',
        'type' => 'text',
      ],
      [
        'key' => 'field_solution_summary',
        'label' => 'Solution Summary',
        'name' => 'solution_summary',
        'type' => 'textarea',
        'rows' => 4,
      ],
      [
        'key' => 'field_solution_icon',
        'label' => 'Solution Icon',
        'name' => 'solution_icon',
        'type' => 'url',
      ],
      [
        'key' => 'field_solution_demo_url',
        'label' => 'Demo URL',
        'name' => 'solution_demo_url',
        'type' => 'url',
      ],
      [
        'key' => 'field_solution_hero_video_mp4',
        'label' => 'Hero Video MP4 URL',
        'name' => 'solution_hero_video_mp4',
        'type' => 'url',
      ],
      [
        'key' => 'field_solution_hero_video_webm',
        'label' => 'Hero Video WEBM URL',
        'name' => 'solution_hero_video_webm',
        'type' => 'url',
      ],
      [
        'key' => 'field_solution_cta_heading',
        'label' => 'CTA Heading',
        'name' => 'solution_cta_heading',
        'type' => 'text',
      ],
      [
        'key' => 'field_solution_features',
        'label' => 'Solution Features',
        'name' => 'solution_features',
        'type' => 'repeater',
        'layout' => 'row',
        'button_label' => 'Add Feature',
        'sub_fields' => [
          [
            'key' => 'field_solution_feature_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
          ],
          [
            'key' => 'field_solution_feature_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 3,
          ],
          [
            'key' => 'field_solution_feature_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'url',
          ],
        ],
      ],
      [
        'key' => 'field_solution_process_items',
        'label' => 'Process Items',
        'name' => 'solution_process_items',
        'type' => 'repeater',
        'layout' => 'row',
        'button_label' => 'Add Process Item',
        'sub_fields' => [
          [
            'key' => 'field_solution_process_icon',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'url',
          ],
          [
            'key' => 'field_solution_process_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
          ],
          [
            'key' => 'field_solution_process_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 3,
          ],
        ],
      ],
      [
        'key' => 'field_solution_problem_title',
        'label' => 'Problem List Title',
        'name' => 'solution_problem_title',
        'type' => 'text',
      ],
      [
        'key' => 'field_solution_problem_list',
        'label' => 'Problem List (HTML)',
        'name' => 'solution_problem_list',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ],
      [
        'key' => 'field_solution_success_title',
        'label' => 'Success List Title',
        'name' => 'solution_success_title',
        'type' => 'text',
      ],
      [
        'key' => 'field_solution_success_list',
        'label' => 'Success List (HTML)',
        'name' => 'solution_success_list',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'basic',
        'media_upload' => 0,
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'solution',
        ],
      ],
    ],
    'position' => 'normal',
    'style' => 'default',
    'active' => true,
  ]);

  acf_add_local_field_group([
    'key' => 'group_insight_fields',
    'title' => 'Insight Fields',
    'fields' => [
      [
        'key' => 'field_insight_category',
        'label' => 'Insight Category',
        'name' => 'insight_category',
        'type' => 'text',
      ],
      [
        'key' => 'field_insight_cover_image',
        'label' => 'Insight Cover Image URL',
        'name' => 'insight_cover_image',
        'type' => 'url',
      ],
      [
        'key' => 'field_insight_body_html',
        'label' => 'Insight Body (HTML)',
        'name' => 'insight_body_html',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
      ],
      [
        'key' => 'field_insight_publish_label',
        'label' => 'Publish Label',
        'name' => 'insight_publish_label',
        'type' => 'text',
      ],
      [
        'key' => 'field_insight_publish_date_text',
        'label' => 'Publish Date Text',
        'name' => 'insight_publish_date_text',
        'type' => 'text',
      ],
      [
        'key' => 'field_insight_webflow_published_on',
        'label' => 'Webflow Published On',
        'name' => 'insight_webflow_published_on',
        'type' => 'text',
      ],
      [
        'key' => 'field_insight_spanish_url',
        'label' => 'Read in Spanish URL',
        'name' => 'insight_spanish_url',
        'type' => 'url',
      ],
      [
        'key' => 'field_insight_sidebar_cta_text',
        'label' => 'Sidebar CTA Text',
        'name' => 'insight_sidebar_cta_text',
        'type' => 'text',
      ],
      [
        'key' => 'field_insight_sidebar_cta_url',
        'label' => 'Sidebar CTA URL',
        'name' => 'insight_sidebar_cta_url',
        'type' => 'url',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'insight',
        ],
      ],
    ],
    'position' => 'normal',
    'style' => 'default',
    'active' => true,
  ]);
});

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

