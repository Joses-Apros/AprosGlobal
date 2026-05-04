<?php
$banner = get_field('banner');
?>
<div fs-cmsfilter-element="scroll-anchor" class="main-wrapper">
  <?php if ($banner): ?>
    <div class="title-page_component">
      <div class="padding-global">
        <div class="container-large">
          <div class="padding-section-medium">
            <div class="title-page_wrapper">
              <div class="title-page_title">
                <h1 class="heading-style-h1-big">
                  <?php echo $banner['title_part_1']; ?>
                  <span class="text-color-degrade-light">
                    <?php echo $banner['title_part_2']; ?>
                  </span>
                </h1>
                <div class="circle-chek_component">
                  <img
                    src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6356c11143d2fe247c1f8719_text-circle-vf.svg"
                    loading="lazy" alt="" class="circle-chek_text-circle-img" />
                  <img
                    src="https://cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/634ed0dafc477ada004efe8e_check-circle%20(3).svg"
                    loading="lazy" alt="" class="circle-chek_img-check" />
                </div>
              </div>
              <div class="title-page_info">
                <p>
                  <?php echo $banner['description']; ?>
                  <br />
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="recent-work_main overflow-visible">
    <div class="padding-global">
      <div class="container-large">
        <div class="recent-work_main-wrapper">
          <div class="recent-work_form-filter">
            <?php
            $insight_terms = get_terms([
              'taxonomy' => 'categorias',
              'hide_empty' => false,
              'orderby' => 'name',
              'order' => 'ASC',
            ]);
            $selected_categoria = isset($_GET['categoria']) ? sanitize_title(wp_unslash($_GET['categoria'])) : '';
            ?>
            <div data-animation="default" data-collapse="tiny" data-duration="400" data-easing="ease"
              data-easing2="ease" role="banner" class="recent-work_nav-filter w-nav">
              <div class="recent-work_nav-title">
                <div class="recent-work_nav-title-filter">
                  Filter by
                </div>
                <nav role="navigation" class="recent-work_nav-menu w-nav-menu">
                  <div class="recent-work_form w-form">
                    <form id="email-form-2" method="get" class="recent-work_form-wrapper">
                      <input type="submit" class="hide-all" value="Submit" />
                      <div class="recent-work_form-overflow">
                        <a href="<?php echo esc_url(remove_query_arg('categoria')); ?>"
                          class="recent-work_form-check-field is-all w-inline-block">
                          <div class="recent-work_form-check-text">
                            All
                          </div>
                        </a>
                        <div class="recent-work_form-cl w-dyn-list">
                          <div role="list" class="recent-work_form-cl-list w-dyn-items">
                            <?php if (!is_wp_error($insight_terms) && !empty($insight_terms)): ?>
                              <?php foreach ($insight_terms as $term): ?>
                                <?php $radio_id = 'categoria-' . $term->term_id; ?>
                                <div role="listitem" class="recent-work_form-cl-item w-dyn-item">
                                  <label class="recent-work_form-check-field w-radio"
                                    for="<?php echo esc_attr($radio_id); ?>">
                                    <input type="radio" id="<?php echo esc_attr($radio_id); ?>" name="categoria"
                                      class="w-form-formradioinput recent-work_form-check-icon w-radio-input"
                                      value="<?php echo esc_attr($term->slug); ?>" <?php checked($selected_categoria, $term->slug); ?> />
                                    <span class="recent-work_form-check-text w-form-label">
                                      <?php echo esc_html($term->name); ?>
                                    </span>
                                  </label>
                                </div>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="w-form-done">
                      <div>
                        Thank you! Your submission has been received!
                      </div>
                    </div>
                    <div class="w-form-fail">
                      <div>
                        Oops! Something went wrong while submitting the form.
                      </div>
                    </div>
                  </div>
                </nav>
                <div class="recent-work_nav-btn w-nav-button">
                  <img
                    src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/640a15ddfe03d12c708639cf_icon-filter.svg"
                    loading="lazy" alt="" class="recent-work_nav-icon" />
                </div>
              </div>
            </div>
          </div>
          <div class="recent-work_form-tag" style="display:none;">
            <div class="recent-work_form-tag-item">
              <div class="recent-work_form-tag-text">
                Filter: All
              </div>
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/63506093376d59c86842884e_icon-trigger.svg"
                loading="lazy" alt="" class="recent-work_form-tag-close" />
            </div>
          </div>
          <?php
          $insights_query_args = [
            'post_type' => 'insight',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
          ];
          if ($selected_categoria !== '') {
            $insights_query_args['tax_query'] = [
              [
                'taxonomy' => 'categorias',
                'field' => 'slug',
                'terms' => [$selected_categoria],
              ],
            ];
          }
          $insights_query = new WP_Query($insights_query_args);
          ?>
          <script>
            document.addEventListener('DOMContentLoaded', function () {
              const filterForm = document.getElementById('email-form-2');
              if (!filterForm) return;

              const gridContainer = document.querySelector('.recent-work_main-grid');
              const radioFilters = filterForm.querySelectorAll('input[name="categoria"]');
              const allLink = filterForm.querySelector('.is-all');

              // Función para realizar la carga AJAX
              const fetchResults = (url) => {
                // Efecto de carga
                gridContainer.style.opacity = '0.4';
                gridContainer.style.transition = 'opacity 0.2s ease';

                fetch(url)
                  .then(response => response.text())
                  .then(html => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const newGrid = doc.querySelector('.recent-work_main-grid');

                    if (newGrid && gridContainer) {
                      gridContainer.innerHTML = newGrid.innerHTML;
                      gridContainer.style.opacity = '1';

                      // Actualizar la URL en el navegador sin recargar
                      window.history.pushState(null, '', url);

                      // Re-inicializar Webflow (IX2) para que las animaciones funcionen en los nuevos items
                      if (window.Webflow && window.Webflow.destroy) {
                        window.Webflow.destroy();
                        window.Webflow.ready();
                        if (window.Webflow.require('ix2')) window.Webflow.require('ix2').init();
                      }
                    }
                  })
                  .catch(error => {
                    console.error('Error en el filtro AJAX:', error);
                    gridContainer.style.opacity = '1';
                  });
              };

              // Evento para los radio buttons
              radioFilters.forEach(function (radio) {
                radio.addEventListener('change', function () {
                  const formData = new FormData(filterForm);
                  const params = new URLSearchParams(formData).toString();
                  const targetUrl = window.location.pathname + '?' + params;
                  fetchResults(targetUrl);
                });
              });

              // Evento para el botón "All"
              if (allLink) {
                allLink.addEventListener('click', function (e) {
                  e.preventDefault();
                  // Desmarcar todos los radios
                  radioFilters.forEach(r => r.checked = false);
                  const targetUrl = this.getAttribute('href');
                  fetchResults(targetUrl);
                });
              }
            });
          </script>
          <div class="collection-list-wrapper w-dyn-list">
            <div role="list" class="recent-work_main-grid w-dyn-items">
              <?php if ($insights_query->have_posts()): ?>
                <?php while ($insights_query->have_posts()):
                  $insights_query->the_post(); ?>
                  <?php
                  $card_id = get_the_ID();
                  $card_cover = (string) get_field('insight_cover_image', $card_id);
                  $card_terms = get_the_terms($card_id, 'categorias');
                  $card_category = '';

                  if (is_array($card_terms) && !empty($card_terms)) {
                    $first_term = reset($card_terms);
                    if ($first_term instanceof WP_Term) {
                      $card_category = $first_term->name;
                      $card_category_slug = $first_term->slug;
                    }
                  }
                  if ($card_category === '') {
                    $card_category = (string) get_field('insight_category', $card_id);
                  }
                  $card_date = (string) get_field('insight_publish_date_text', $card_id);
                  if ($card_date === '') {
                    $card_date = (string) get_field('insight_publish_label', $card_id);
                  }
                  if ($card_date === '') {
                    $card_date = get_the_date();
                  }
                  ?>
                  <div role="listitem" class="recent-work_item-cl w-dyn-item"
                    data-category="<?php echo esc_attr($card_category); ?>">
                    <a data-w-id="f60ce262-174f-1e3a-4caf-a21ba9cddc0b" href="<?php the_permalink(); ?>"
                      class="blog_item w-inline-block">
                      <div class="blog_item-cover">
                        <?php if ($card_cover !== ''): ?>
                          <img loading="lazy" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($card_cover); ?>"
                            class="blog_item-cover-img" />
                        <?php endif; ?>
                      </div>
                      <div class="blog_item-info">
                        <div class="blog_item-category-wrapper">
                          <div class="tag-item is-blog">
                            <div class="tag-item_text"><?php echo esc_html($card_category); ?></div>
                          </div>
                        </div>
                        <div class="blog_item-title">
                          <h3 class="heading-style-h4"><?php the_title(); ?></h3>
                        </div>
                        <div class="blog_item-footer">
                          <div class="blog_item-date-wrapper">
                            <div class="blog_item-date"><?php echo esc_html($card_date); ?></div>
                          </div>
                          <div class="button is-secondary is-small is-dark">
                            <div>Read more</div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else: ?>
                <div role="listitem" class="recent-work_item-cl w-dyn-item">
                  <p><?php esc_html_e('No insights found.', 'apros-global-theme'); ?></p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="start-project_component">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-large">
          <div class="start-project_wrapper">
            <div class="title-section_component is-start-project">
              <div class="title-section_content">
                <h2 class="heading-style-h1-big">
                  Do you want to
                  <span class="text-color-degrade">
                    scale your business?
                  </span>
                </h2>
                <div class="title-section_prf">
                  <div class="heading-style-h4">
                    Select one of the three boxes below
                  </div>
                </div>
              </div>
              <div class="circle-chek_component">
                <img
                  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6356c11143d2fe247c1f8719_text-circle-vf.svg"
                  loading="lazy" alt="" class="circle-chek_text-circle-img" />
                <img
                  src="https://cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/634ed0dafc477ada004efe8e_check-circle%20(3).svg"
                  loading="lazy" alt="" class="circle-chek_img-check" />
              </div>
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c13bc67ea35707ca3618_pinter-center-left.webp"
                loading="lazy" alt="" class="start-project_pointer-left" />
              <img
                src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/63502e202b328f0db4bc2bb9_pointer-blue-medium.webp"
                loading="lazy" alt="" class="start-project_pointer-right" />
            </div>
            <div class="form-wrapper">
              <div class="start-project_form-wrapper w-form">
                <form method="get" data-form="multistep" name="email-form" data-name="Email Form" data-enter="true"
                  id="email-form" class="start-project_form" data-wf-page-id="65b4453c9e0f05c6674b733e"
                  data-wf-element-id="1bb21479-b3fd-6123-9361-dece65ec47e6">
                  <div class="form-step-wrapper">
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <div class="form-field-letter">
                              a.
                            </div>
                            <label for="Color">
                              What challenge can I assist you with?
                            </label>
                          </div>
                        </div>
                        <div class="form-input-wrapper">
                          <div class="form-description">
                            (I&#x27;ll try send you materials that may aid you.)
                          </div>
                        </div>
                        <div class="form-checkbox-wrapper">
                          <label class="w-checkbox checkbox-field">
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/657899eb61cc8bbd33b3dd8e_icon-form-04.svg"
                              alt="" class="icon-1x1-large" />
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                A
                              </div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box">
                            </div>
                            <input id="Generate-leads" type="checkbox" name="Generate-leads" data-name="Generate leads"
                              style="opacity:0;position:absolute;z-index:-1" />
                            <span class="checkbox-label w-form-label" for="Generate-leads">
                              Streamlined task and project management
                            </span>
                          </label>
                          <label class="w-checkbox checkbox-field">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                B
                              </div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box">
                            </div>
                            <input id="Making-sales" type="checkbox" name="Making-sales" data-name="Making sales"
                              style="opacity:0;position:absolute;z-index:-1" />
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/657899ebff6b4e0e4aeb252b_icon-form-02.svg"
                              alt="" class="icon-1x1-large" />
                            <span class="checkbox-label w-form-label" for="Making-sales">
                              Real-time data analysis and automation
                            </span>
                          </label>
                          <label class="w-checkbox checkbox-field">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                C
                              </div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box">
                            </div>
                            <input id="Improve-your-ROI" type="checkbox" name="Improve-your-ROI"
                              data-name="Improve your ROI" style="opacity:0;position:absolute;z-index:-1" />
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/657899ec9c912d3cded4e352_icon-form-03.svg"
                              alt="" class="icon-1x1-large" />
                            <span class="checkbox-label w-form-label" for="Improve-your-ROI">
                              Enhanced user engagement
                            </span>
                          </label>
                          <label class="w-checkbox checkbox-field">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                D
                              </div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box">
                            </div>
                            <input id="Other" type="checkbox" name="Other" data-name="Other"
                              style="opacity:0;position:absolute;z-index:-1" />
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/657899eb7abedc68ea6602cd_icon-form-01.svg"
                              alt="" class="icon-1x1-large" />
                            <span class="checkbox-label w-form-label" for="Other">
                              Other
                            </span>
                          </label>
                        </div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">
                            Next step ✓
                          </a>
                          <div class="press-enter-text">
                            press
                            <strong>
                              Enter ↵
                            </strong>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <div class="form-field-letter">
                              b.
                            </div>
                            <label for="Color">
                              Where is your business located?
                            </label>
                          </div>
                        </div>
                        <div class="form-input-wrapper">
                          <div class="form-description">
                            Just a rough estimate would help us scope out the size of the project
                          </div>
                        </div>
                        <div data-radio-delay="250" data-radio-skip="true" class="form-checkbox-wrapper is-3-col">
                          <label class="checkbox-field w-radio">
                            <div
                              class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input">
                            </div>
                            <input id="USA" type="radio" name="Where-is-your-business-located"
                              data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1"
                              value="USA" />
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/657899ec1734bdf716b1bbcb_icon-flag-03.svg"
                              alt="" class="icon-1x1-large" />
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                A
                              </div>
                            </div>
                            <span class="checkbox-label w-form-label" for="USA">
                              USA
                            </span>
                          </label>
                          <label class="checkbox-field w-radio">
                            <div
                              class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input">
                            </div>
                            <input id="LATAM" type="radio" name="Where-is-your-business-located"
                              data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1"
                              value="LATAM" />
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6578a0220fc74ed333466bab_icon-latam.svg"
                              alt="" class="icon-1x1-large" />
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                B
                              </div>
                            </div>
                            <span class="checkbox-label w-form-label" for="LATAM">
                              LATAM
                            </span>
                          </label>
                          <label class="checkbox-field w-radio">
                            <div
                              class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input">
                            </div>
                            <input id="OTHER-2" type="radio" name="Where-is-your-business-located"
                              data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1"
                              value="OTHER" />
                            <img loading="lazy"
                              src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/657899ecb25fe4f94366890f_icon-flag-01.svg"
                              alt="" class="icon-1x1-large" />
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">
                                C
                              </div>
                            </div>
                            <span class="checkbox-label w-form-label" for="OTHER-2">
                              OTHER
                            </span>
                          </label>
                        </div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">
                            Next step ✓
                          </a>
                          <div class="press-enter-text">
                            press
                            <strong>
                              Enter ↵
                            </strong>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <div class="form-field-letter">
                              c.
                            </div>
                            <label for="Color">
                              Describe your business needs in 1-3 sentences.
                            </label>
                          </div>
                        </div>
                        <div class="form-input-wrapper">
                          <div class="form-description">
                            EX: I work at a Miami real estate agency, aiming to boost marketing for properties ranging
                            from $500k to $5m.
                          </div>
                        </div>
                        <div class="form-field-group">
                          <div class="form-input-wrapper">
                          </div>
                          <div class="form-input-wrapper">
                            <textarea id="Describe-your-business-needs-in-1-3-sentences"
                              name="Describe-your-business-needs-in-1-3-sentences" maxlength="5000"
                              data-name="Describe your business needs in 1-3 sentences."
                              placeholder=" Type here... What you offer, target market, your average price"
                              class="form-input is-text-area w-input">
                            </textarea>
                          </div>
                        </div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">
                            Next step ✓
                          </a>
                          <div class="press-enter-text">
                            press
                            <strong>
                              Enter ↵
                            </strong>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <label for="Color">
                              Finally, how do we contact you?
                            </label>
                          </div>
                        </div>
                        <div class="form-field-group">
                          <div class="form-input-wrapper">
                            <input class="form-input w-input" maxlength="256" name="Name" data-name="Name"
                              placeholder="First name..." type="text" id="Name-4" required="" />
                          </div>
                          <div class="form-input-wrapper">
                            <input class="form-input w-input" maxlength="256" name="Email" data-name="Email"
                              placeholder="mail@domain.com" type="email" id="Email-5" required="" />
                          </div>
                        </div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">
                            Next step ✓
                          </a>
                          <div class="press-enter-text">
                            press
                            <strong>
                              Enter ↵
                            </strong>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="step-content-only">
                          <h2>
                            Ready
                            <span class="text-color-degrade-form">
                              to submit
                            </span>
                            ?
                          </h2>
                          <div class="form-button-wrapper">
                            <input type="submit" data-wait="Please wait..." data-form="submit-btn"
                              class="form-button w-button" value="Send it away!" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fixed-button-wrapper">
                    <div class="steps-text">
                      Step
                      <span data-text="current-step" class="current-step">
                        0
                      </span>
                      /
                      <span data-text="total-steps" class="total-steps">
                        5
                      </span>
                    </div>
                    <a data-form="back-btn" href="#" class="next-button w-button">
                      ↑
                    </a>
                    <a data-form="next-btn" href="#" class="back-button w-button">
                      ↓
                    </a>
                  </div>
                  <div data-form="progress" class="progress-wrapper">
                    <div data-form="progress-indicator" class="progress-indicator">
                    </div>
                    <div class="progress-indicator current">
                    </div>
                  </div>
                </form>
                <div class="start-project_form-success w-form-done">
                  <img
                    src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352ce11c9635f2f09cc594a_s.gif"
                    loading="lazy" alt="" class="start-project_form-success-img" />
                  <div class="start-project_form-text">
                    <br />
                    <span class="heading-style-h3 text-color-degrade-light">
                      Thank you!
                      <br />
                    </span>
                    Your submission has been received!
                  </div>
                </div>
                <div class="w-form-fail">
                  <div>
                    Oops! Something went wrong while submitting the form.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="start-project_contact">
            <div class="heading-style-h4 text-color-degrade-light">
              Start a conversation
            </div>
            <div class="start-project_contact-btn">
              <a href="/cdn-cgi/l/email-protection#90f8f5fcfcffd0f1e0e2ffe3bef7fcfff2f1fcafe3e5f2faf5f3e4adc3e4f1e2e4b5a2a0f1b5a2a0f3fffee6f5e2e3f1e4f9fffe"
                class="button is-secondary is-large w-inline-block">
                <div class="text-size-medium">
                  <span class="__cf_email__" data-cfemail="e088858c8c8fa08190928f93ce878c8f82818c">
                    [email&#160;protected]
                  </span>
                </div>
                <img
                  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/634edabd05e56b610501f907_icon-btn.svg"
                  loading="lazy" alt="" class="icon-1x1-small" />
              </a>
              <a href="https://wa.me/message/YI4NHTF5YXGOA1" target="_blank"
                class="button is-secondary is-large w-inline-block">
                <div class="text-size-medium">
                  Whatsapp
                </div>
                <img
                  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/634edabd05e56b610501f907_icon-btn.svg"
                  loading="lazy" alt="" class="icon-1x1-small" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img
      src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c93735e7540ef4112f89_bg-light-blue-vf.webp"
      loading="lazy" sizes="(max-width: 1533px) 100vw, 1533px"
      srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c93735e7540ef4112f89_bg-light-blue-vf-p-500.webp 500w, <?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c93735e7540ef4112f89_bg-light-blue-vf-p-800.webp 800w, <?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c93735e7540ef4112f89_bg-light-blue-vf.webp 1533w"
      alt="" class="start-project_light-img" />
    <img
      src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c981fd0a0301dc9c6abc_bg-star-project-grid.webp"
      loading="lazy" sizes="50vw"
      srcset="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c981fd0a0301dc9c6abc_bg-star-project-grid-p-500.png 500w, <?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c981fd0a0301dc9c6abc_bg-star-project-grid-p-800.png 800w, <?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/6352c981fd0a0301dc9c6abc_bg-star-project-grid.webp 994w"
      alt="" class="start-project_grid-right" />
  </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
</script>
<script
  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js"
  type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
  </script>
<script
  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/js/webflow.schunk.b7cad701f94860c2.js"
  type="text/javascript">
  </script>
<script
  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/js/webflow.schunk.712216aa265cd9af.js"
  type="text/javascript">
  </script>
<script
  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.prod.website-files.com/634ecebdb4ffd446e52e6f19/js/webflow.9da2dfb5.369f27a81ce1a348.js"
  type="text/javascript">
  </script>
<script
  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.jsdelivr.net/gh/videsigns/webflow-tools@latest/multi-step.js">
  </script>
<script
  src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/src/assets/cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js">
  </script>
<script>
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
    direction: 'vertical', // vertical, horizontal
    gestureDirection: 'vertical', // vertical, horizontal, both
    smooth: true,
    mouseMultiplier: 1,
    smoothTouch: false,
    touchMultiplier: 2,
    infinite: false,
  })

  //get scroll value
  lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
    console.log({ scroll, limit, velocity, direction, progress })
  })

  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }

  requestAnimationFrame(raf)

  var btns_latam = document.querySelectorAll(".btn-latam");
  var arrows_btn_latam = document.querySelectorAll(".arrow-btn-latam")
  btns_latam.forEach(function (btn) {
    btn.addEventListener("click", function () {
      arrows_btn_latam.forEach(function (arrow) {
        arrow.classList.toggle("active");
      });
    });
  });
</script>
<!-- F’in sweet Webflow Hacks -->
<script>
  // Corrección de sintaxis para el chequeo de ancho de pantalla
  if (window.innerWidth <= 991) {
    jQuery(".w-form-formradioinput").click(function () {
      jQuery('.recent-work_nav-btn').click();
    });
  }

  // Función loadScriptFile corregida
  function loadScriptFile(src) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = src;
    document.getElementsByTagName('head')[0].appendChild(script);
  }
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516"
  integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg=="
  data-cf-beacon='{"version":"2024.11.0","token":"62b39089df424b0998c64f4a84ffe7c1","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
  crossorigin="anonymous">
  </script>