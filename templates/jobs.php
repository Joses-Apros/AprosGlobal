<?php
/**
 * Template Name: Jobs
 */
add_action('wp_head', static function () {
    ?>
    <!-- [Attributes by Finsweet] CMS Filter -->
<script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsfilter@1/cmsfilter.js"></script>
<!-- [Attributes by Finsweet] CMS Load -->
<script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsload@1/cmsload.js"></script>
<!-- [Attributes by Finsweet] CMS Select -->
<script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsselect@1/cmsselect.js"></script>

<?php
}, 20);
get_header();
get_template_part('partials/jobs');
get_footer();
