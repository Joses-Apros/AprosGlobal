<?php

/**
 * Template Name: Home
 */
add_action('wp_head', static function () {
    ?>
<script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsslider@1/cmsslider.js"></script>
<?php
}, 20);

get_header();
?>

<?php
get_template_part('partials/home');
?>

<?php
get_footer();
?>

