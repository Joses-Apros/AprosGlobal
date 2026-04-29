<?php
if (!defined('ABSPATH')) {
  exit;
}

get_header();
?>

<main class="insight-archive">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-large">
        <header style="margin-bottom: 2rem;">
          <h1><?php post_type_archive_title(); ?></h1>
        </header>

        <?php if (have_posts()) : ?>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.25rem;">
            <?php while (have_posts()) : the_post(); ?>
              <article <?php post_class(); ?> style="padding: 1rem; border: 1px solid #e5e7eb; border-radius: 0.5rem;">
                <h2 style="margin-top: 0;">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php if (has_excerpt()) : ?>
                  <p><?php echo esc_html(get_the_excerpt()); ?></p>
                <?php endif; ?>
              </article>
            <?php endwhile; ?>
          </div>

          <div style="margin-top: 1.5rem;">
            <?php the_posts_pagination(); ?>
          </div>
        <?php else : ?>
          <p><?php esc_html_e('No insights found.', 'apros-global-theme'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
