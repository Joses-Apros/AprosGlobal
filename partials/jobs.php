<?php
// TODO: pegar aqui el body de apros.webflow2/jobs.html
$theme_uri = get_stylesheet_directory_uri();
ob_start();
?>
<div class="global-styles w-embed w-script"><!--  Start of HubSpot Embed Code  -->
<script type="text/javascript" id="hs-script-loader" async="" defer="" src="https://js-na1.hs-scripts.com/42790384.js"></script>
<!--  End of HubSpot Embed Code  -->
<style>
/* Make text look crisper and more legible in all browsers */
body {
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-smoothing: antialiased;
text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
input[type="file"]:focus-visible {
outline: 0.125rem solid #4d65ff;
outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
margin-top: 0 !important;
}
/*Reset buttons, and links styles*/
a {
color: inherit;
text-decoration: inherit;
font-size: inherit;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
content: "";
display: block;
padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
margin-right: auto !important;
margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
/*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
color: inherit;
text-decoration: inherit;
font-size: inherit;
}
*/
/* Apply "..." after 3 lines of text */
.text-style-3lines {
display: -webkit-box;
overflow: hidden;
-webkit-line-clamp: 3;
-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
display: -webkit-box;
overflow: hidden;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
display: inline-flex;
}
/* These classes are never overwritten */
.hide {
display: none !important;
}
@media screen and (max-width: 991px), 
@media screen and (max-width: 767px), 
@media screen and (max-width: 479px){
.hide, .hide-tablet{
display: none !important;
}
}
@media screen and (max-width: 767px)
.hide-mobile-landscape{
display: none !important;
}
}
@media screen and (max-width: 479px)
.hide-mobile{
display: none !important;
}
}
.margin-0 {
margin: 0rem !important;
}
.padding-0 {
padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
margin-right: 0rem !important;
margin-bottom: 0rem !important;
margin-left: 0rem !important;
}
.padding-top {
padding-right: 0rem !important;
padding-bottom: 0rem !important;
padding-left: 0rem !important;
}
.margin-right {
margin-top: 0rem !important;
margin-bottom: 0rem !important;
margin-left: 0rem !important;
}
.padding-right {
padding-top: 0rem !important;
padding-bottom: 0rem !important;
padding-left: 0rem !important;
}
.margin-bottom {
margin-top: 0rem !important;
margin-right: 0rem !important;
margin-left: 0rem !important;
}
.padding-bottom {
padding-top: 0rem !important;
padding-right: 0rem !important;
padding-left: 0rem !important;
}
.margin-left {
margin-top: 0rem !important;
margin-right: 0rem !important;
margin-bottom: 0rem !important;
}
.padding-left {
padding-top: 0rem !important;
padding-right: 0rem !important;
padding-bottom: 0rem !important;
}
.margin-horizontal {
margin-top: 0rem !important;
margin-bottom: 0rem !important;
}
.padding-horizontal {
padding-top: 0rem !important;
padding-bottom: 0rem !important;
}
.margin-vertical {
margin-right: 0rem !important;
margin-left: 0rem !important;
}
.padding-vertical {
padding-right: 0rem !important;
padding-left: 0rem !important;
}
.outline{
-webkit-text-stroke: 1.5px white;
-webkit-text-fill-color: transparent;
}
/* Noise */
.noise{
overflow:hidden;
}  
@keyframes noiseAnimation {
0% {
  transform: translate(0)
}
10% {
  transform: translate(-5%,-5%)
}
20% {
  transform: translate(-10%,5%)
}
30% {
  transform: translate(5%,-10%)
}
40% {
  transform: translate(-5%,15%)
}
50% {
  transform: translate(-10%,5%)
}
60% {
  transform: translate(15%)
}
70% {
  transform: translateY(10%)
}
80% {
  transform: translate(-15%)
}
90% {
  transform: translate(10%,5%)
}
to {
  transform: translate(5%)
}
}
.noise:after {
content: "";
pointer-events: none;
will-change: transform;
animation: noiseAnimation 1s steps(3) infinite;
opacity: 0.8;
background-image: url("https://uploads-ssl.webflow.com/61951265d7110a723766c703/61951306d6dbb6562f844696_Noise.png");
width: 200vw;
height: 200vh;
display: block;
position: absolute;
top: -50%;
left: -50%;
}
.cursor_wrapper{
pointer-events:none;
}
</style>
</div>
<div class="main-wrapper">
<div class="title-page_component">
  <div class="padding-global">
    <div class="container-large is-jobs">
      <div class="padding-section-small">
        <div class="jobs_wrapper">
          <div class="title-page_wrapper is-job"><img src="images/banner-jobs.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, 93vw" srcset="images/banner-jobs-p-500.png 500w, images/banner-jobs-p-800.png 800w, images/banner-jobs-p-1080.png 1080w, images/banner-jobs.png 1642w" alt="" class="jobs_bg">
            <div class="title-page_title">
              <h1 class="heading-style-h1-big text-color-degrade-light">Jobs<span class="text-color-degrade-light"></span></h1>
              <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
            </div>
            <div class="title-page_info">
              <p>Welcome to our jobs page! Get to know our values and open job offers to join our crew. <br><br>Apros has transitioned to a fully remote model, demonstrating that with a positive attitude and good team coordination, we can all thrive in our roles.<br></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="about_component">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-medium">
        <div class="about_wrapper">
          <div class="process_wrapper">
            <div class="process_header">
              <div class="heading-style-h3">We love <span class="text-color-degrade-light">what we do</span></div>
              <div class="process_header-info">
                <p class="text-align-center">We are a dynamic and rapidly growing web development company that specializes in creating innovative and engaging websites. With a focus on delivering exceptional results, we leverage cutting-edge technologies and creative solutions to help businesses thrive in the digital landscape. As we expand our operations, we are seeking a highly motivated and detail-oriented specialists to join our team.</p>
              </div>
            </div>
            <div id="w-node-a65200c8-44d6-e3f3-f7c1-1008778251be-674b733f" class="process_item-wrapper">
              <div class="process_item">
                <div class="process_item-header"><img src="images/icon-beneficios-01.png" loading="lazy" alt="" class="process_item-icon">
                  <div class="process_item-header-title">
                    <h3 class="heading-style-h4">Collaboration</h3>
                  </div>
                </div>
                <div class="process_item-info">
                  <p>We believe in the power of collaboration, fostering unity, open communication, and mutual respect to achieve remarkable results together.</p>
                </div>
              </div>
              <div class="process_item">
                <div class="process_item-header"><img src="images/icon-beneficios-02.png" loading="lazy" alt="" class="process_item-icon">
                  <div class="process_item-header-title">
                    <h3 class="heading-style-h4">Innovation</h3>
                  </div>
                </div>
                <div class="process_item-info">
                  <p>Embracing innovation, we encourage creativity, out-of-the-box thinking, and a passion for exploring new ideas that drive continuous improvement.</p>
                </div>
              </div>
              <div class="process_item">
                <div class="process_item-header"><img src="images/icon-beneficios-03.png" loading="lazy" alt="" class="process_item-icon">
                  <div class="process_item-header-title">
                    <h3 class="heading-style-h4">Accountability</h3>
                  </div>
                </div>
                <div class="process_item-info">
                  <p>We value accountability, taking ownership of our work, meeting deadlines, and delivering exceptional results with pride and integrity.</p>
                </div>
              </div>
              <div class="process_item">
                <div class="process_item-header"><img src="images/icon-growth.svg" loading="lazy" alt="" class="process_item-icon">
                  <div class="process_item-header-title">
                    <h3 class="heading-style-h4">Growth Mindset</h3>
                  </div>
                </div>
                <div class="process_item-info">
                  <p>We nurture a growth mindset, embracing challenges, learning from failures, and continuously developing our skills for personal and collective growth.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="about_numbers-wrapper">
            <div class="about_numbers-item">
              <div class="about_numbers-text">
                <div class="about_numbers-big-text text-color-degrade">+</div>
                <div class="about_numbers-big-text text-color-degrade counterup">15</div>
              </div>
              <p class="text-letter">years of experience</p>
            </div>
            <div class="about_numbers-item">
              <div class="about_numbers-text">
                <div class="about_numbers-big-text text-color-degrade">+</div>
                <div class="about_numbers-big-text text-color-degrade counterup">500</div>
              </div>
              <p class="text-letter">Projects Completed</p>
            </div>
            <div class="about_numbers-item">
              <div class="about_numbers-text">
                <div class="about_numbers-big-text text-color-degrade">+</div>
                <div class="about_numbers-big-text text-color-degrade counterup">20</div>
              </div>
              <p class="text-letter">multidisciplinary experts</p>
            </div>
            <div class="about_numbers-item">
              <div class="about_numbers-text">
                <div class="about_numbers-big-text text-color-degrade">+</div>
                <div class="about_numbers-big-text text-color-degrade counterup">90</div>
                <div class="about_numbers-big-text text-color-degrade">%</div>
              </div>
              <p class="text-letter">Client Satisfaction Rate</p>
            </div>
            <div class="about_numbers-item hide-all">
              <div class="about_numbers-text">
                <div class="about_numbers-big-text text-color-degrade">+</div>
                <div class="about_numbers-big-text text-color-degrade counterup">30</div>
              </div>
              <p class="text-letter">Mastered web design technologies</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="position">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-large">
        <div class="position_wrapper">
          <div class="title-page_wrapper is-job">
            <div class="title-page_title is-center">
              <h2 class="heading-style-h1 text-weight-medium">Remote <span class="text-color-degrade-light">positions</span></h2>
              <div class="circle-chek_component"><img src="images/frame-dark-blue.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
            </div>
          </div>
          <div class="position_main w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="get" fs-cmsfilter-element="filters" class="position_filter-wrapper" data-wf-page-id="65b4453c9e0f05c6674b733f" data-wf-element-id="0c444f7a-f058-0766-09f4-b682aa2c33d1">
              <div class="position_cms-content">
                <div class="position_cms-wrapper">
                  <div class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                      <div role="listitem" class="w-dyn-item">
                        <div class="position_filter-item">
                          <div fs-cmsfilter-field="time" fs-cmsselect-element="text-value" class="w-dyn-bind-empty"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-dyn-empty">
                      <div>No items found.</div>
                    </div>
                  </div>
                </div>
                <div class="position_cms-wrapper">
                  <div class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                      <div role="listitem" class="w-dyn-item">
                        <div fs-cmsfilter-field="location" fs-cmsselect-element="text-value-2" class="w-dyn-bind-empty"></div>
                      </div>
                    </div>
                    <div class="w-dyn-empty">
                      <div>No items found.</div>
                    </div>
                  </div>
                </div>
                <div class="position_cms-wrapper">
                  <div class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                      <div role="listitem" class="w-dyn-item">
                        <div fs-cmsfilter-field="level" fs-cmsselect-element="text-value-3" class="w-dyn-bind-empty"></div>
                      </div>
                    </div>
                    <div class="w-dyn-empty">
                      <div>No items found.</div>
                    </div>
                  </div>
                </div>
                <div class="position_cms-wrapper">
                  <div class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                      <div role="listitem" class="w-dyn-item">
                        <div fs-cmsfilter-field="country" fs-cmsselect-element="text-value-4" class="w-dyn-bind-empty"></div>
                      </div>
                    </div>
                    <div class="w-dyn-empty">
                      <div>No items found.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="position_filter-header">
                <div>Filter by:</div>
                <div class="position_filter-checkbox">
                  <div class="position_filter-select"><select id="Job-Employment-type" name="Job-Employment-type" data-name="Job Employment type" fs-cmsselect-element="select" fs-cmsfilter-field="time" class="position_select w-select">
                      <option value="">Employment type</option>
                    </select></div>
                  <div class="position_filter-select"><select id="Job-Departments" name="Job-Departments" data-name="Job Departments" fs-cmsselect-element="select-2" fs-cmsfilter-field="location" class="position_select w-select">
                      <option value="">Departments</option>
                    </select></div>
                  <div class="position_filter-select"><select id="Job-Level" name="Job-Level" data-name="Job Level" fs-cmsselect-element="select-3" fs-cmsfilter-field="level" class="position_select w-select">
                      <option value="">Level</option>
                    </select></div>
                  <div class="position_filter-select"><select id="Status" name="Status" data-name="Status" fs-cmsselect-element="select-4" fs-cmsfilter-field="country" class="position_select w-select">
                      <option value="">Status</option>
                    </select></div>
                </div>
              </div>
              <div class="position_acordeon-wrapper">
                <div class="w-dyn-list">
                  <div fs-cmsfilter-element="list" role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                      <div class="position_acordeon-item">
                        <div data-w-id="74e09dd0-7b7e-7c1c-0ea6-315a3d17173b" class="position_acordeon-trigger">
                          <div class="position_acordeon-title">
                            <div class="position_acordeon-name">
                              <h3 class="w-dyn-bind-empty"></h3>
                            </div>
                            <div class="position_acordeon-detalles">
                              <div class="position_acordeon-detalles-item"><img src="images/countries-icon.svg" loading="lazy" alt="">
                                <div fs-cmsfilter-field="country" class="text-size-small w-dyn-bind-empty"></div>
                              </div>
                              <div class="position_acordeon-detalles-item"><img src="images/icon-work.svg" loading="lazy" alt="">
                                <div fs-cmsfilter-field="location" class="text-size-small w-dyn-bind-empty"></div>
                              </div>
                              <div class="position_acordeon-detalles-item"><img src="images/level-icon.svg" loading="lazy" alt="">
                                <div fs-cmsfilter-field="level" class="text-size-small w-dyn-bind-empty"></div>
                              </div>
                              <div class="position_acordeon-detalles-item"><img src="images/reloj-tres.svg" loading="lazy" alt="">
                                <div fs-cmsfilter-field="time" class="text-size-small w-dyn-bind-empty"></div>
                              </div>
                            </div>
                          </div><img src="images/icon-trigger-2.svg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0)" alt="" class="position_acordeon-icon">
                        </div>
                        <div style="height:0px" class="position_acordeon-content">
                          <div class="position_acordeon-info">
                            <div class="jobs_richt-text w-dyn-bind-empty w-richtext"></div>
                            <a href="#contact" class="button is-dark w-inline-block">
                              <div class="text-size-small">Apply</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-dyn-empty">
                    <div>No items found.</div>
                  </div>
                </div>
                <div class="position_acordeon-item hide-all">
                  <div class="position_acordeon-trigger">
                    <div class="position_acordeon-title">
                      <div class="position_acordeon-name">
                        <h2 class="heading-style-h2">Position Name</h2>
                      </div>
                      <div class="position_acordeon-detalles">
                        <div class="position_acordeon-detalles-item"><img src="images/marcador-1.svg" loading="lazy" alt="">
                          <div class="text-size-small">Colombia</div>
                        </div>
                        <div class="position_acordeon-detalles-item"><img src="images/reloj-tres.svg" loading="lazy" alt="">
                          <div class="text-size-small">Full time</div>
                        </div>
                      </div>
                    </div><img src="images/icon-trigger-2.svg" loading="lazy" alt="" class="position_acordeon-icon">
                  </div>
                  <div class="position_acordeon-content">
                    <div class="position_acordeon-info">
                      <div class="jobs_richt-text w-richtext">
                        <h2>What’s a Rich Text element?</h2>
                        <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
                        <h4>Static and dynamic content editing</h4>
                        <p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>
                        <p><sub>qwdqwdqwd</sub></p>
                        <ul role="list">
                          <li>dqwdqwdqwd</li>
                        </ul>
                        <h3>How to customize formatting for each rich text</h3>
                        <p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the &quot;When inside of&quot; nested selector system.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div><input type="submit" data-wait="Please wait..." class="hide-all w-button" value="Submit">
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="project_cta">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-small">
        <div class="project_cta-wrapper is-work">
          <div class="project_cta-info is-work"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="blog_cta-icon is-work">
            <div class="project_cta-content">
              <div class="heading-style-h3"><span class="text-color-degrade-light">Tell us</span> about <span class="text-color-degrade-light">yourself</span></div>
              <p>Send us your resume and tell us why you wouldlike to be a friend of Apros</p>
            </div>
          </div>
          <a href="mailto:talent@apros.global?subject=Job%20application%20-%20Apros%20Global" class="button is-secondary w-button">talent@apros.global</a>
        </div>
      </div>
      <div class="padding-bottom padding-medium"></div>
    </div>
  </div>
</div>
</div>

<?php
$jobs_markup = ob_get_clean();
$jobs_markup = preg_replace_callback(
    '/\b(src|href|data-src|poster)\s*=\s*"((images|documents|fonts)\/[^"]+)"/',
    static function ($matches) use ($theme_uri) {
        $attribute = $matches[1];
        $relative_path = $matches[2];

        return $attribute . '="' . esc_url($theme_uri . '/src/' . $relative_path) . '"';
    },
    $jobs_markup
);

$jobs_markup = preg_replace_callback(
    '/\bsrcset\s*=\s*"([^"]+)"/',
    static function ($matches) use ($theme_uri) {
        $srcset = preg_replace_callback(
            '/(^|,\s*)(images|documents|fonts)\/([^,\s]+)/',
            static function ($srcset_match) use ($theme_uri) {
                return $srcset_match[1] . esc_url($theme_uri . '/src/' . $srcset_match[2] . '/' . $srcset_match[3]);
            },
            $matches[1]
        );

        return 'srcset="' . $srcset . '"';
    },
    $jobs_markup
);

echo $jobs_markup;
?>