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



