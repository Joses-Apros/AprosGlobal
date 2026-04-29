<?php
if (!defined('ABSPATH')) {
  exit;
}

get_header();

while (have_posts()) :
  the_post();

  $post_id = get_the_ID();
  $category = (string) get_field('insight_category', $post_id);
  $cover_image = (string) get_field('insight_cover_image', $post_id);
  $body_html = (string) get_field('insight_body_html', $post_id);
  $publish_text = (string) get_field('insight_publish_date_text', $post_id);
  $spanish_url = (string) get_field('insight_spanish_url', $post_id);
  $sidebar_cta_text = (string) get_field('insight_sidebar_cta_text', $post_id);
  $sidebar_cta_url = (string) get_field('insight_sidebar_cta_url', $post_id);
  $webflow_published_on = (string) get_field('insight_webflow_published_on', $post_id);

  if ($publish_text === '') {
    $publish_text = (string) get_field('insight_publish_label', $post_id);
  }
  if ($publish_text === '') {
    $publish_text = get_the_date();
  }
  if ($body_html === '') {
    $body_html = apply_filters('the_content', get_the_content());
  }
  if ($sidebar_cta_text === '') {
    $sidebar_cta_text = 'Transform Your Website into a Sales-Generating Machine';
  }
  if ($sidebar_cta_url === '') {
    $sidebar_cta_url = home_url('/#contact');
  }

  $related_query = new WP_Query([
    'post_type' => 'insight',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'post__not_in' => [$post_id],
    'orderby' => 'date',
    'order' => 'DESC',
  ]);
  ?>

  <div class="main-wrapper">
    <div class="blog_header">
      <div class="padding-global">
        <div class="container-large">
          <div class="padding-section-medium">
            <div class="blog_wrapper">
              <div class="blog_title-cover">
                <div class="title-page_wrapper is-blog">
                  <div class="title-page_title">
                    <h1 class="title-blog text-color-degrade-light"><?php the_title(); ?></h1>
                  </div>
                  <?php if ($category !== '') : ?>
                    <div class="blog_item-category-wrapper is-interna">
                      <div class="tag-item is-white">
                        <div class="tag-item_text"><?php echo esc_html($category); ?></div>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
                <?php if ($cover_image !== '') : ?>
                  <img src="<?php echo esc_url($cover_image); ?>" loading="lazy" alt="<?php the_title_attribute(); ?>" class="blog_cover" />
                <?php endif; ?>
              </div>

              <div class="blog_main">
                <div class="blog_info">
                  <div class="text-rich-blog w-richtext"><?php echo wp_kses_post($body_html); ?></div>
                  <div class="blog_footer-btn is-content">
                    <div class="blog_info-header">
                      <div class="blog_item-date-wrapper">
                        <div class="blog_item-date"><?php echo esc_html($publish_text); ?></div>
                      </div>
                    </div>
                    <?php if ($spanish_url !== '') : ?>
                      <a href="<?php echo esc_url($spanish_url); ?>" class="button is-dark is-small w-button">Read in spanish</a>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="blog_sidebar">
                  <?php if ($related_query->have_posts()) : ?>
                    <div class="blog_related">
                      <div class="blog_sidebar-title">
                        <div class="heading-style-h5 is-related">Related Posts</div>
                        <div class="blog_related-wrapper">
                          <div class="w-dyn-list">
                            <div role="list" class="collection-list w-dyn-items">
                              <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                <div role="listitem" class="collection-item w-dyn-item">
                                  <a href="<?php the_permalink(); ?>" class="blog_related-item w-inline-block">
                                    <?php $related_cover = (string) get_field('insight_cover_image', get_the_ID()); ?>
                                    <?php if ($related_cover !== '') : ?>
                                      <img src="<?php echo esc_url($related_cover); ?>" loading="lazy" alt="<?php the_title_attribute(); ?>" class="blog_related-cover" />
                                    <?php endif; ?>
                                    <div class="blog_related-info">
                                      <div class="text-size-small"><?php the_title(); ?></div>
                                      <div class="blog_related-date-wrapper">
                                        <div class="blog_related-date"><?php echo esc_html(get_the_date()); ?></div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              <?php endwhile; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

                  <div class="blog_cta">
                    <img src="https://cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/634ed0dafc477ada004efe8e_check-circle%20(3).svg" loading="lazy" alt="" class="blog_cta-icon" />
                    <div class="text-size-medium"><?php echo esc_html($sidebar_cta_text); ?></div>
                    <a href="<?php echo esc_url($sidebar_cta_url); ?>" class="button is-secondary is-small w-button">Let's Talk Strategy</a>
                  </div>

                  <?php if ($webflow_published_on !== '') : ?>
                    <div style="margin-top: 12px; opacity: .7; font-size: 12px;">
                      <?php echo esc_html__('Webflow published on:', 'apros-global-theme') . ' ' . esc_html($webflow_published_on); ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
endwhile;

get_footer();
