<?php
/**
 * Template Name: Insights
 */
add_action('wp_head', static function () {
    ?>
<script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsfilter@1/cmsfilter.js"></script>
<script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsload@1/cmsload.js"></script>
<?php
}, 20);
get_header();
get_template_part('partials/insights');
get_footer();
