<?php
$wf_site_id = '634ecebdb4ffd446e52e6f19';
$wf_page_id = '';

if (is_page_template('templates/home.php')) {
  $wf_page_id = '65b4453c9e0f05c6674b7325';
} elseif (is_page_template('templates/about_us.php')) {
  $wf_page_id = '65b4453c9e0f05c6674b732d';
} elseif (is_page_template('templates/book-a-call.php')) {
  $wf_page_id = '65b4453c9e0f05c6674b732e';
} elseif (is_page_template('templates/insights.php')) {
  $wf_page_id = '65b4453c9e0f05c6674b733e';
} elseif (is_page_template('templates/jobs.php')) {
  $wf_page_id = '65b4453c9e0f05c6674b733f';
} elseif (is_page_template('templates/cases.php')) {
  $wf_page_id = '65b4453c9e0f05c6674b7348';
}
?>
<!DOCTYPE html>
<html lang="es"<?php echo $wf_page_id ? ' data-wf-page="' . esc_attr($wf_page_id) . '" data-wf-site="' . esc_attr($wf_site_id) . '"' : ''; ?>>

<head>
  <?php
  wp_head();
  ?>
</head>

<body class="">

  <?php $theme_uri = get_stylesheet_directory_uri(); ?>

  <div class="w-embed w-iframe"><!--  Google Tag Manager (noscript)  -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQZCF6N" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!--  End Google Tag Manager (noscript)  -->
  </div>
  <div id="lenis" data-w-id="3f1e8c66-dc14-e31c-04fc-9dd7679fff78" class="page-wrapper">
    <div class="noise"></div>
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
  <header class="">
   <div class="nav_component">
      <div class="padding-global">
        <div class="container-large">
          <div class="nav_wrapper">
            <div class="nav_info-left">
              <a href="<?php echo esc_url(home_url('/')); ?>" aria-current="page" class="nav_logo-link w-inline-block w--current"><img src="<?php echo esc_url($theme_uri . '/src/images/logo-isotipo.svg'); ?>" loading="lazy" alt="" class="nav_logo-icon">
                <h1 class="nav_logotipo">apros</h1>
              </a>
              <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown-toggle w-dropdown-toggle">
                  <div>GLOBAL</div><img src="<?php echo esc_url($theme_uri . '/src/images/icon-btn.svg'); ?>" loading="lazy" alt="" class="icon-1x1-small is-global">
                </div>
                <nav class="dropdown-list w-dropdown-list">
                  <a href="https://apros.pe/" target="_blank" class="dropdown-link w-dropdown-link">LATAM</a>
                </nav>
              </div>
            </div>
            <div class="nav_menu">
              <div class="nav_menu-links-wrapper">
                <a href="<?php echo esc_url(home_url('/#we-do')); ?>" class="nav_menu-link">What we do</a>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="nav_menu-link">About us</a>
                <a href="<?php echo esc_url(home_url('/cases/')); ?>" class="nav_menu-link">Case studies</a>
                <a href="<?php echo esc_url(home_url('/insights/')); ?>" class="nav_menu-link">Insights</a>
                <a href="<?php echo esc_url(home_url('/jobs/')); ?>" class="nav_menu-link">Jobs</a>
              </div>
              <div class="w-embed">
                <a href="<?php echo esc_url(home_url('/book-a-call/')); ?>" onclick="dataLayer.push({'event': 'start_a_project_menu'});" class="button is-secondary is-nav w-inline-block">
                  <div class="text-size-small">Book a call</div><img src="<?php echo esc_url($theme_uri . '/src/images/icon-btn.svg'); ?>" loading="lazy" alt="" class="icon-1x1-small">
                </a>
              </div>
              <div class="nav_menu-btn">
                <div data-w-id="90dca486-c3b7-b7c4-8655-e219fc268f22" data-is-ix2-target="1" class="nav_menu-icon" data-animation-type="lottie" data-src="<?php echo esc_url($theme_uri . '/src/documents/lf30_editor_wr4kugob.json'); ?>" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="0.6666666666666666" data-duration="0" data-ix2-initial-state="0"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav_menu-mobile">
        <div class="padding-global">
          <div class="container-large">
            <div class="nav_menu-mobile-wrapper">
              <div id="w-node-_90dca486-c3b7-b7c4-8655-e219fc268f2b-fc268f13" class="nav_menu-mobile-links-wrapper">
                <a href="<?php echo esc_url(home_url('/#we-do')); ?>" class="nav_menu-mobile-link w-inline-block">
                  <div class="nav_menu-mobile-link-text">What we do</div>
                </a>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="nav_menu-mobile-link w-inline-block">
                  <div class="nav_menu-mobile-link-text">About us</div>
                </a>
                <a href="<?php echo esc_url(home_url('/cases/')); ?>" class="nav_menu-mobile-link w-inline-block">
                  <div class="nav_menu-mobile-link-text">Work</div>
                </a>
                <a href="<?php echo esc_url(home_url('/insights/')); ?>" class="nav_menu-mobile-link w-inline-block">
                  <div class="nav_menu-mobile-link-text"><strong>Insights</strong></div>
                </a>
                <a href="<?php echo esc_url(home_url('/jobs/')); ?>" class="nav_menu-mobile-link w-inline-block">
                  <div class="nav_menu-mobile-link-text"><strong>Jobs</strong></div>
                </a>
              </div>
              <div id="w-node-_90dca486-c3b7-b7c4-8655-e219fc268f38-fc268f13" class="nav_menu-mobile-sidebar">
                <div class="nav_menu-mobile-links-small">
                  <div>Follow me</div>
                  <div class="nav_links-small-wrapper">
                    <a href="https://www.linkedin.com/company/2606973/" target="_blank" class="nav_link-small">LinkeIn</a>
                  </div>
                </div>
                <div class="flex-v-space-xlarge">
                  <a href="<?php echo esc_url(home_url('/book-a-call/')); ?>" class="button is-secondary is-large w-inline-block">
                    <div class="text-size-large">Start a Project</div><img src="<?php echo esc_url($theme_uri . '/src/images/icon-btn.svg'); ?>" loading="lazy" alt="" class="icon-1x1-medium">
                  </a>
                  <div class="flex-v-space-small">
                    <div class="text-color-grey">Start a conversation</div>
                    <a href="mailto:hello@apros.global" class="nav_link-mail">hello@apros.global</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cursor_wrapper">
        <div class="cursor_pointer"></div>
      </div>
    </div>

  </header>