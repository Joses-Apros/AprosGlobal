<?php
$theme_uri = get_stylesheet_directory_uri();
ob_start();
?>
<div class="global-styles w-embed w-script"><!--  Start of HubSpot Embed Code  -->
  <script type="text/javascript" id="hs-script-loader" async="" defer=""
    src="https://js-na1.hs-scripts.com/42790384.js"></script>
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
    .w-richtext> :not(div):first-child,
    .w-richtext>div:first-child> :first-child {
      margin-top: 0 !important;
    }

    /*Reset buttons, and links styles*/
    a {
      color: inherit;
      text-decoration: inherit;
      font-size: inherit;
    }

    /* Get rid of bottom margin on last element in any rich text element */
    .w-richtext>:last-child,
    .w-richtext ol li:last-child,
    .w-richtext ul li:last-child {
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
    .container-medium,
    .container-small,
    .container-large {
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
    @media screen and (max-width: 479px) {
      .hide,
      .hide-tablet {
        display: none !important;
      }
    }

    @media screen and (max-width: 767px) .hide-mobile-landscape {
      display: none !important;
    }
    }

    @media screen and (max-width: 479px) .hide-mobile {
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

    .outline {
      -webkit-text-stroke: 1.5px white;
      -webkit-text-fill-color: transparent;
    }

    /* Noise */
    .noise {
      overflow: hidden;
    }

    @keyframes noiseAnimation {
      0% {
        transform: translate(0)
      }

      10% {
        transform: translate(-5%, -5%)
      }

      20% {
        transform: translate(-10%, 5%)
      }

      30% {
        transform: translate(5%, -10%)
      }

      40% {
        transform: translate(-5%, 15%)
      }

      50% {
        transform: translate(-10%, 5%)
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
        transform: translate(10%, 5%)
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

    .cursor_wrapper {
      pointer-events: none;
    }
  </style>
</div>
<main class="main-wrapper">
  <div data-w-id="b9464cc7-fede-95b1-ba59-509d3c48c118" class="home-header_component">
    <div data-w-id="1b682546-2eae-66a0-3831-369e4a96e6ae" class="home-header_carrusel">
      <div data-w-id="88ef29c3-08f5-72fd-768f-ca3bf87d2d08" class="home-header_carrusel-move">
        <div class="home-header_carrusel-wrapper"><img src="images/img-rezise-17.webp" loading="lazy"
            alt="Custom web development" class="home-header_carrusel-item"><img src="images/img-rezise-19.webp"
            loading="lazy" alt="" class="home-header_carrusel-item"><img src="images/img-rezise-16.webp" loading="lazy"
            alt="" class="home-header_carrusel-item"><img src="images/img-rezise-14.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-08.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-15.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-02.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-04.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-12.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-07.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-12.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-03.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-01.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-18.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-09.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-13.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-10.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-05.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"></div>
      </div>
    </div>
    <div data-w-id="e8905133-aab2-c90f-5ff0-5651a5ae1b21" class="home-header_carrusel is-second-row">
      <div class="home-header_carrusel-move">
        <div class="home-header_carrusel-wrapper"><img src="images/img-rezise-05.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-10.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-13.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-09.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-18.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-01.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-03.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-12.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-07.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-12.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-04.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-02.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-15.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-08.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-14.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-16.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-19.webp" loading="lazy" alt=""
            class="home-header_carrusel-item"><img src="images/img-rezise-17.webp" loading="lazy"
            alt="Custom web development" class="home-header_carrusel-item"></div>
      </div>
    </div>
    <div data-w-id="fdbd29d8-daa0-1d20-3036-039df3690c19" class="home-header_carrusel hide-all">
      <div class="home-header_carrusel-move">
        <div class="home-header_carrusel-wrapper"><img src="images/item-carrusel-03.webp" loading="lazy" sizes="100vw"
            srcset="images/item-carrusel-03-p-500.png 500w, images/item-carrusel-03-p-800.png 800w, images/item-carrusel-03.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-04.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-04-p-500.png 500w, images/item-carrusel-04-p-800.png 800w, images/item-carrusel-04-p-1080.png 1080w, images/item-carrusel-04.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-02.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-02-p-500.png 500w, images/item-carrusel-02-p-800.png 800w, images/item-carrusel-02.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-01.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-01-p-500.png 500w, images/item-carrusel-01-p-800.png 800w, images/item-carrusel-01-p-1080.png 1080w, images/item-carrusel-01.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-05.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-05-p-500.png 500w, images/item-carrusel-05-p-800.png 800w, images/item-carrusel-05-p-1080.png 1080w, images/item-carrusel-05.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-03.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-03-p-500.png 500w, images/item-carrusel-03-p-800.png 800w, images/item-carrusel-03.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-04.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-04-p-500.png 500w, images/item-carrusel-04-p-800.png 800w, images/item-carrusel-04-p-1080.png 1080w, images/item-carrusel-04.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-02.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-02-p-500.png 500w, images/item-carrusel-02-p-800.png 800w, images/item-carrusel-02.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-01.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-01-p-500.png 500w, images/item-carrusel-01-p-800.png 800w, images/item-carrusel-01-p-1080.png 1080w, images/item-carrusel-01.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-02.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-02-p-500.png 500w, images/item-carrusel-02-p-800.png 800w, images/item-carrusel-02.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-05.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-05-p-500.png 500w, images/item-carrusel-05-p-800.png 800w, images/item-carrusel-05-p-1080.png 1080w, images/item-carrusel-05.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-04.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-04-p-500.png 500w, images/item-carrusel-04-p-800.png 800w, images/item-carrusel-04-p-1080.png 1080w, images/item-carrusel-04.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-01.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-01-p-500.png 500w, images/item-carrusel-01-p-800.png 800w, images/item-carrusel-01-p-1080.png 1080w, images/item-carrusel-01.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-04.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-04-p-500.png 500w, images/item-carrusel-04-p-800.png 800w, images/item-carrusel-04-p-1080.png 1080w, images/item-carrusel-04.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-02.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-02-p-500.png 500w, images/item-carrusel-02-p-800.png 800w, images/item-carrusel-02.webp 1111w"
            alt="" class="home-header_carrusel-item"><img src="images/item-carrusel-04.webp" loading="lazy"
            sizes="100vw"
            srcset="images/item-carrusel-04-p-500.png 500w, images/item-carrusel-04-p-800.png 800w, images/item-carrusel-04-p-1080.png 1080w, images/item-carrusel-04.webp 1111w"
            alt="" class="home-header_carrusel-item"></div>
      </div>
    </div>
    <div class="home-header_titles-wrapper">
      <div data-w-id="5aa01402-6e72-9d36-9341-2cf147aed9fc" class="home-header_title-wrapper is-top-right">
        <div class="home-header_title-style">Discover</div>
        <div class="home-header_title-style is-absolute outline">Discover</div>
        <div data-w-id="5aa01402-6e72-9d36-9341-2cf147aeda01" class="home-header_title-mask"></div>
      </div>
      <div data-w-id="32ee7e4f-4f59-cea6-b6b0-c216edb3373e" class="home-header_title-wrapper is-center">
        <div class="home-header_title-style">implement</div>
        <div class="home-header_title-mask is-color-green"></div>
      </div>
      <div class="home-header_title-wrapper is-bottom-right">
        <div data-w-id="26e85ff7-7089-b870-3075-1123acaa59cf" class="home-header_title-style">and grow</div>
        <div class="home-header_title-style is-absolute outline">and grow</div>
        <div class="home-header_title-mask is-color-blue"></div>
      </div>
      <div class="home-header_devices-wrapper"><img src="images/img-devices-desktop.webp" loading="eager"
          data-w-id="aa53bdc6-fb77-c663-4e45-eb69039d4cdc" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/img-devices-desktop-p-500.png 500w, images/img-devices-desktop-p-800.png 800w, images/img-devices-desktop-p-1080.png 1080w, images/img-devices-desktop.webp 1330w"
          class="home-header_device-laptop"><img src="images/img-devices-desktop.webp" loading="lazy"
          data-w-id="1486544e-f80d-250c-fd4b-79b763465901" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/img-devices-desktop-p-500.png 500w, images/img-devices-desktop-p-800.png 800w, images/img-devices-desktop-p-1080.png 1080w, images/img-devices-desktop.webp 1330w"
          class="home-header_device-laptop-mobile"><img src="images/img-devices-tablet.webp" loading="eager"
          data-w-id="ea58ec49-00f4-1ee7-8546-186181f580cc" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/img-devices-tablet-p-500.png 500w, images/img-devices-tablet-p-800.png 800w, images/img-devices-tablet-p-1080.png 1080w, images/img-devices-tablet.webp 1330w"
          class="home-header_device-tablet"><img src="images/img-devices-tablet.webp" loading="lazy"
          data-w-id="c352b74c-9a75-a194-c48e-c815e247921e" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/img-devices-tablet-p-500.png 500w, images/img-devices-tablet-p-800.png 800w, images/img-devices-tablet-p-1080.png 1080w, images/img-devices-tablet.webp 1330w"
          class="home-header_device-tablet-mobile"><img src="images/mobile-2-vf-2.webp" loading="eager"
          data-w-id="e62cc2be-cb9d-fa43-c67b-bcc77015dce6" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/mobile-2-vf-2-p-500.png 500w, images/mobile-2-vf-2-p-800.png 800w, images/mobile-2-vf-2-p-1080.png 1080w, images/mobile-2-vf-2.webp 1330w"
          class="home-header_device-mobile"><img src="images/mobile-2-vf-2.webp" loading="lazy"
          data-w-id="3b71c6f3-8d1c-e64d-04e3-eff4b2365376" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/mobile-2-vf-2-p-500.png 500w, images/mobile-2-vf-2-p-800.png 800w, images/mobile-2-vf-2-p-1080.png 1080w, images/mobile-2-vf-2.webp 1330w"
          class="home-header_device-mobile-mobile"><img src="images/imac-vf-apros.webp"
          srcset="images/imac-vf-apros-p-500.png 500w, images/imac-vf-apros-p-800.png 800w, images/imac-vf-apros.webp 1330w"
          data-w-id="8632f031-88be-2d03-d3e6-67b829c7d421" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          class="home-header_device-imac"><img src="images/imac-vf-apros.webp" loading="eager"
          data-w-id="ff92fefb-8e4e-2429-0765-b5aa36dbe8b2" sizes="(max-width: 1330px) 100vw, 1330px" alt=""
          srcset="images/imac-vf-apros-p-500.png 500w, images/imac-vf-apros-p-800.png 800w, images/imac-vf-apros.webp 1330w"
          class="home-header_device-imac-mobile"></div>
    </div>
    <div class="home-header_titles-wrapper show-dekstop-only">
      <div class="home-header_title-wrapper is-top-right">
        <div class="home-header_title-style outline">Discover</div>
        <div class="home-header_title-mask"></div>
      </div>
      <div class="home-header_title-wrapper is-center">
        <div class="home-header_title-style outline">implement</div>
        <div class="home-header_title-mask is-color-green"></div>
      </div>
      <div class="home-header_title-wrapper is-bottom-right">
        <div class="home-header_title-style outline">and grow</div>
        <div class="home-header_title-mask is-color-blue"></div>
      </div>
    </div>
  </div>
  <div id="work" class="recent-work_component">
    <div class="container-large">
      <div class="padding-top padding-xhuge"></div>
      <div class="recent-work_wrapper">
        <div class="padding-global">
          <div class="title-section_component">
            <div class="title-section_content">
              <h2>Just <span class="text-color-degrade-light">Out</span></h2>
            </div>
            <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt=""
                class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt=""
                class="circle-chek_img-check"></div>
          </div>
          <div class="max-width-large">
            <p class="text-size-medium">Explore our ready-to-use products and custom software development services.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="recent-work_slider-wrapper">
      <div class="padding-section-medium">
        <div data-delay="2500" data-animation="slide" class="recent-work_slider w-slider" data-autoplay="true"
          data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
          data-nav-spacing="15" data-duration="500" data-infinite="true" fs-cmsslider-element="slider">
          <div class="recent-work_mask w-slider-mask">
            <div class="recent-work_slide w-slide"></div>
          </div>
          <div class="recent-work_arrow w-slider-arrow-left"><img src="images/apros-left.svg" loading="lazy" alt=""
              class="recent-work_arrow-icon"></div>
          <div class="recent-work_arrow is-right w-slider-arrow-right"><img src="images/icon-btn.svg" loading="lazy"
              alt="" class="recent-work_arrow-icon"></div>
          <div class="recent-work_nav w-slider-nav w-round"></div>
        </div>
        <div class="w-dyn-list">
          <div fs-cmsslider-element="list" role="list" class="recent-work_main-grid w-dyn-items">
            <?php
            $solutions_query = new WP_Query([
              'post_type' => 'solution',
              'post_status' => 'publish',
              'posts_per_page' => 6,
            ]);
            ?>
            <?php if ($solutions_query->have_posts()): ?>
              <?php while ($solutions_query->have_posts()):
                $solutions_query->the_post(); ?>
                <div role="listitem" class="w-dyn-item">
                  <div data-w-id="a0126b2e-7c71-6dcf-6287-589d86511c92" class="recent-work_item">
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="recent-work_item-cover w-inline-block">
                      <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large', ['class' => 'recent-work_item-cover-img']); ?>
                      <?php else: ?>
                        <img loading="lazy" alt="<?php echo esc_attr(get_the_title()); ?>"
                          src="<?php echo esc_url($theme_uri . '/src/images/cover-img.png'); ?>"
                          class="recent-work_item-cover-img">
                      <?php endif; ?>
                    </a>
                    <div class="recent-work_item-content">
                      <a href="<?php echo esc_url(get_permalink()); ?>" class="recent-work_item-title w-inline-block">
                        <h3><?php the_title(); ?></h3>
                      </a>
                      <div class="recent-work_item-info">
                        <p class="text-color-grey"><?php echo esc_html(get_the_excerpt()); ?></p>
                      </div>
                      <div class="recent-work_item-content-btn">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="button is-secondary w-inline-block">
                          <div>View solution</div><img src="images/icon-btn.svg" loading="lazy" alt=""
                            class="icon-1x1-small">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php else: ?>
              <div class="w-dyn-empty">
                <div>No items found.</div>
              </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="recent-work_btn">
      <a href="https://apros.pe/en/proyectos/" class="button w-inline-block btnStyle">
        <div>View more</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
      </a>
    </div>
  </div>
  <div class="about_component">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-small">
          <div class="about_wrapper">
            <div class="about_numbers-wrapper">
              <div class="about_numbers-item">
                <div class="about_numbers-text">
                  <div class="about_numbers-big-text text-color-degrade">%</div>
                  <div class="about_numbers-big-text text-color-degrade counterup">100</div>
                </div>
                <p class="text-letter">CUSTOM SOLUTIONS</p>
              </div>
              <div class="about_numbers-item">
                <div class="about_numbers-text">
                  <div class="about_numbers-big-text text-color-degrade">+</div>
                  <div class="about_numbers-big-text text-color-degrade counterup">2 </div>
                  <div class="about_numbers-big-text text-color-degrade">M</div>
                </div>
                <p class="text-letter">USERS <strong>ReaCHED</strong></p>
              </div>
              <div class="about_numbers-item">
                <div class="about_numbers-text">
                  <div class="about_numbers-big-text text-color-degrade">+</div>
                  <div class="about_numbers-big-text text-color-degrade counterup">30</div>
                </div>
                <p class="text-letter">INDUSTRIES SERVED</p>
              </div>
              <div class="about_numbers-item">
                <div class="about_numbers-text">
                  <div class="about_numbers-big-text text-color-degrade"></div>
                  <div class="about_numbers-big-text text-color-degrade counterup">24</div>
                  <div class="about_numbers-big-text text-color-degrade">hrs</div>
                </div>
                <p class="text-letter">SUPPORT COVERAGE<br></p>
              </div>
              <div class="about_numbers-item hide-all">
                <div class="about_numbers-text">
                  <div class="about_numbers-big-text text-color-degrade">+</div>
                  <div class="about_numbers-big-text text-color-degrade counterup">30</div>
                </div>
                <p class="text-letter">Mastered web design technologies</p>
              </div>
            </div>
            <div class="about_top">
              <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt=""
                  class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt=""
                  class="circle-chek_img-check"></div>
              <h2 class="heading-style-h3">Ready for a <span class="text-color-degrade-light">digital</span> presence
                across<span class="text-color-degrade-light">LATAM and THE USA since 2011.</span></h2>
            </div>
            <div class="about_story"><img src="images/gif-apros-slow.gif" loading="lazy" width="Auto"
                id="w-node-_65166f0a-19af-2dcf-8cd7-8668d8e4bdc1-d8e4bdb1" alt="" class="about_story-img is-home">
              <div id="w-node-_65166f0a-19af-2dcf-8cd7-8668d8e4bdc2-d8e4bdb1" class="about_story-content">
                <p class="text-size-medium">At Apros Global, we have a proven track record of supporting businesses in
                  achieving their digital goals.<br>‍<br>Since 2011, we have collaborated with various industries across
                  LATAM and the USA, driven by our purpose of making our clients&#x27; digital presence memorable. We
                  specialize in creating impactful software products and digital solutions that connect people in more
                  meaningful ways through technology.</p>
                <a href="about-us.html" class="button w-inline-block btnStyle">
                  <div>More about us</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
                </a>
              </div><img src="images/pointer-green-small.webp" loading="lazy"
                id="w-node-_65166f0a-19af-2dcf-8cd7-8668d8e4bdc9-d8e4bdb1" alt="" class="about_story-pointer-left"><img
                src="images/pointer-blue-medium.webp" loading="lazy"
                id="w-node-_65166f0a-19af-2dcf-8cd7-8668d8e4bdca-d8e4bdb1" alt="" class="about_story-pointer-right">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="we-do" class="what-we-do_component">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-large">
          <div class="what-we-do_wrapper">
            <div id="w-node-_7cebf91b-91fb-592e-f20e-b631743c1829-743c1824" class="what-we-do_info-left">
              <div class="title-section_component flex-vertical">
                <div class="title-section_content">
                  <h2>Solutions<span class="text-color-degrade-light"> lab</span></h2>
                </div>
                <p class="text-size-medium">Our process for delivering proven digital solutions</p>
              </div>
              <div class="what-we-do_circle-wrapper">
                <div class="circle-chek_component is-center"><img src="images/text-circle-vf.svg" loading="lazy" alt=""
                    class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt=""
                    class="circle-chek_img-check"></div><img src="images/w-wedo-grid-vf.webp" loading="lazy"
                  sizes="100vw" srcset="images/w-wedo-grid-vf-p-500.png 500w, images/w-wedo-grid-vf.webp 716w" alt=""
                  class="what-we-do_img-grid">
              </div>
            </div>
            <div class="cta_component">
              <?php
              $solutions_lab_rows = get_field('solutions_lab');
              if (is_array($solutions_lab_rows) && !empty($solutions_lab_rows)) {
                usort($solutions_lab_rows, static function ($a, $b) {
                  return ((int) ($a['order'] ?? 0)) <=> ((int) ($b['order'] ?? 0));
                });

                foreach ($solutions_lab_rows as $index => $row) {
                  $title = trim((string) ($row['title'] ?? ''));
                  $description = trim((string) ($row['description'] ?? ''));
                  $poster_url = trim((string) ($row['poster_url'] ?? ''));
                  $video_mp4 = trim((string) ($row['video_mp4'] ?? ''));
                  $video_webm = trim((string) ($row['video_webm'] ?? ''));

                  if ($title === '' || $description === '' || $poster_url === '' || $video_mp4 === '') {
                    continue;
                  }

                  $video_urls = $video_mp4;
                  if ($video_webm !== '') {
                    $video_urls .= ',' . $video_webm;
                  }
                  $video_id = 'solutions-lab-video-' . ($index + 1);
                  ?>
                  <div class="cta_link-block">
                    <div class="what-we-do_acordeon-trigger">
                      <div class="what-we-do_acordeon-title">
                        <h3 class="cta_link-text"><?php echo esc_html($title); ?></h3>
                      </div><img src="images/icon-trigger.svg" loading="lazy" alt="" class="what-we-do_acordeon-icon">
                    </div>
                    <div class="what-we-do_acordeon-content">
                      <div class="what-we-do_acordeon-content-wrapper">
                        <p class="text-color-grey"><?php echo esc_html($description); ?></p>
                      </div>
                    </div>
                    <div class="cta_link-image-wrapper clickable-off">
                      <div data-poster-url="<?php echo esc_url($poster_url); ?>"
                        data-video-urls="<?php echo esc_attr($video_urls); ?>" data-autoplay="true" data-loop="true"
                        data-wf-ignore="true" class="cta_link-image w-background-video w-background-video-atom"><video
                          id="<?php echo esc_attr($video_id); ?>" autoplay="" loop=""
                          style="background-image:url('<?php echo esc_url($poster_url); ?>')" muted="" playsinline=""
                          data-wf-ignore="true" data-object-fit="cover">
                          <source src="<?php echo esc_url($video_mp4); ?>" data-wf-ignore="true">
                          <?php if ($video_webm !== '') { ?>
                            <source src="<?php echo esc_url($video_webm); ?>" data-wf-ignore="true">
                          <?php } ?>
                        </video>
                        <div aria-live="polite"><button type="button" data-w-bg-video-control="true"
                            aria-controls="<?php echo esc_attr($video_id); ?>"
                            class="w-backgroundvideo-backgroundvideoplaypausebutton w-background-video--control"><span><img
                                src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628299f8aa233b83918e24fd_Pause.svg"
                                alt="Pause video"></span><span hidden=""><img
                                src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628298b20ae0236682d4b87f_Play-24.svg"
                                alt="Play video"></span></button></div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
              ?>
              <div class="cta_hover-css w-embed">
                <style>
                  /* Prevents hover states from being used on Tablet & Mobile */
                  @media only screen and (min-width: 992px) {

                    /* Makes all text inside component black. 
Change the color of the text here, instead of on Webflow for this to work */
                    .cta_component a {
                      color: #ffffff;
                    }

                    /* Makes all text inside component grey on hover.
Change the color of the text here, instead of on Webflow for this to work */
                    .cta_component:hover a {
                      color: #c4c4c4;
                    }

                    /* Makes text inside link block black on hover.
Change the color of the text here, instead of on Webflow for this to work */
                    .cta_component:hover a:hover {
                      color: #ffffff;
                    }
                  }
                </style>
              </div>
              <div class="w-embed">
                <style>
                  .cta_component .what-we-do_acordeon-content {
                    overflow: hidden;
                    max-height: 0;
                    transition: max-height 0.35s ease;
                  }

                  .cta_component .cta_link-image-wrapper {
                    display: none;
                    opacity: 0;
                    pointer-events: none;
                    transition: opacity 0.35s ease;
                  }

                  .cta_component .cta_link-block.is-active .cta_link-image-wrapper {
                    display: flex;
                    opacity: 1;
                    pointer-events: auto;
                  }
                </style>
              </div>
              <script>
                document.addEventListener("DOMContentLoaded", function () {
                  const ctaComponent = document.querySelector(".cta_component");
                  if (!ctaComponent) return;
                  const blocks = Array.from(
                    ctaComponent.querySelectorAll(".cta_link-block"),
                  );
                  if (!blocks.length) return;

                  const setActive = (activeBlock) => {
                    blocks.forEach((block) => {
                      const isActive = block === activeBlock;
                      block.classList.toggle("is-active", isActive);

                      const content = block.querySelector(".what-we-do_acordeon-content");
                      if (content) {
                        content.style.maxHeight = isActive ? content.scrollHeight + "px" : "0px";
                      }

                      const video = block.querySelector(".cta_link-image video");
                      if (video) {
                        if (isActive) {
                          const playPromise = video.play();
                          if (playPromise && typeof playPromise.catch === "function") {
                            playPromise.catch(function () { });
                          }
                        } else {
                          video.pause();
                        }
                      }
                    });
                  };

                  blocks.forEach((block) => {
                    const trigger = block.querySelector(".what-we-do_acordeon-trigger");
                    if (!trigger) return;

                    block.addEventListener("mouseenter", function () {
                      setActive(block);
                    });

                    trigger.addEventListener("mouseenter", function () {
                      setActive(block);
                    });

                    trigger.addEventListener("click", function (event) {
                      event.preventDefault();
                      setActive(block);
                    });
                  });

                  ctaComponent.addEventListener("mouseleave", function () {
                    setActive(null);
                  });

                  setActive(null);
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="blog_component">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-large">
          <div class="blog_wrapper">
            <div class="title-section_component">
              <div class="title-section_content is-2-col">
                <h2>Digital <span class="text-color-degrade-light">Insights</span></h2>
                <div class="max-width-large">
                  <p class="text-size-medium">Stay up-to-date with the latest in cybersecurity, digital marketing, SEO,
                    conversion rate optimization, web design practices, AI in business, and more with our informative
                    blog</p>
                </div>
              </div>
            </div>
            <div data-delay="4000" data-animation="slide" class="blog_slider w-slider" data-autoplay="false"
              data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
              data-nav-spacing="3" data-duration="500" data-infinite="true" fs-cmsslider-element="slider-2">
              <div class="blog_slider-mask w-slider-mask">
                <div class="blog_slide w-slide"></div>
              </div>
              <div class="blog_slider-arrow w-slider-arrow-left"><img src="images/apros-left.svg" loading="lazy" alt=""
                  class="recent-work_arrow-icon"></div>
              <div class="blog_slider-arrow is-right w-slider-arrow-right"><img src="images/icon-btn.svg" loading="lazy"
                  alt="" class="recent-work_arrow-icon"></div>
              <div class="blog_slider-nav w-slider-nav w-round"></div>
            </div>
            <div class="blog_footer-btn">
              <a href="<?php echo esc_url(home_url('/insights')); ?>" class="button w-inline-block btnStyle">
                <div>View more</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
              </a>
            </div>
            <div class="blog_cl-wrapper w-dyn-list">
              <div fs-cmsslider-element="list-2" role="list" class="blog_cl-list w-dyn-items">
                <?php
                $insights_query = new WP_Query([
                  'post_type' => 'insight',
                  'post_status' => 'publish',
                  'posts_per_page' => 6,
                ]);
                $has_insights = $insights_query->have_posts();
                ?>
                <?php if ($has_insights): ?>
                  <?php while ($insights_query->have_posts()):
                    $insights_query->the_post(); ?>
                    <div id="w-node-_179a9d84-3c1e-58de-1df1-47d15bd8ac66-674b7325" role="listitem"
                      class="blog_cl-item w-dyn-item">
                      <a data-w-id="5c9befd4-44dc-d4cf-677e-a89c226bbf47" href="<?php echo esc_url(get_permalink()); ?>"
                        class="blog_item w-inline-block">
                        <div class="blog_item-cover">
                          <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', ['class' => 'blog_item-cover-img']); ?>
                          <?php else: ?>
                            <img loading="lazy" alt="<?php echo esc_attr(get_the_title()); ?>"
                              src="<?php echo esc_url($theme_uri . '/src/images/cover-img.png'); ?>"
                              class="blog_item-cover-img">
                          <?php endif; ?>
                        </div>
                        <div class="blog_item-info">
                          <div class="blog_item-category-wrapper">
                            <div class="tag-item is-blog">
                              <div class="tag-item_text">Insight</div>
                            </div>
                          </div>
                          <div class="blog_item-title">
                            <h3 class="heading-style-h4"><?php the_title(); ?></h3>
                          </div>
                          <div class="blog_item-footer">
                            <div class="blog_item-date-wrapper">
                              <div class="blog_item-date"><?php echo esc_html(get_the_date()); ?></div>
                            </div>
                            <div class="button is-secondary is-small is-dark">
                              <div>Read more</div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </div>
              <?php if (!$has_insights): ?>
                <div class="w-dyn-empty">
                  <div>No items found.</div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div data-w-id="4aaf2b9d-4f8e-14b6-fe2c-e9308936df6a" class="clients_component">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-large">
          <div class="title-section_component">
            <div class="title-section_content is-2-col">
              <h2>Client  <span class="text-color-degrade-light">Experience</span></h2>
              <div class="max-width-large">
                <p class="text-size-medium">We are grateful for the years of dedicated service to our customers. They
                  made us who we are: a knowledgeable and experienced agency.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clients_row">
      <div class="clients_row-wrapper"><img src="images/logo-img-08.webp" loading="lazy" alt=""
          class="clients_logo-img medium"><img src="images/logo-img-07.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-06.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-05.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-04.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-03.webp" loading="lazy" alt=""
          class="clients_logo-img medium"><img src="images/logo-img-02.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-01.webp" loading="lazy" alt="" class="clients_logo-img">
        <div class="clients_row-wrapper"><img src="images/logo-img-08.webp" loading="lazy" alt=""
            class="clients_logo-img medium"><img src="images/logo-img-07.webp" loading="lazy" alt=""
            class="clients_logo-img"><img src="images/logo-img-06.webp" loading="lazy" alt=""
            class="clients_logo-img"><img src="images/logo-img-05.webp" loading="lazy" alt=""
            class="clients_logo-img"><img src="images/logo-img-04.webp" loading="lazy" alt=""
            class="clients_logo-img"><img src="images/logo-img-03.webp" loading="lazy" alt=""
            class="clients_logo-img medium"><img src="images/logo-img-02.webp" loading="lazy" alt=""
            class="clients_logo-img"><img src="images/logo-img-01.webp" loading="lazy" alt="" class="clients_logo-img">
        </div>
      </div>
      <div class="clients_row-wrapper hide-all"><img src="images/logo-img-01.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-02.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-03.webp" loading="lazy" alt=""
          class="clients_logo-img medium"><img src="images/logo-img-04.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-05.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-06.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-07.webp" loading="lazy" alt=""
          class="clients_logo-img"><img src="images/logo-img-08.webp" loading="lazy" alt=""
          class="clients_logo-img medium"></div>
    </div>
    <div class="padding-bottom padding-xhuge"></div>
  </div>
  <div id="contact" class="start-project_component">
    <div class="padding-global">
      <div class="container-large">
        <div class="padding-section-large">
          <div class="start-project_wrapper">
            <div class="title-section_component is-start-project">
              <div class="title-section_content">
                <h2 class="heading-style-h1-big">Do you want to <span class="text-color-degrade">scale your
                    business?</span></h2>
                <div class="title-section_prf">
                  <div class="heading-style-h4">Select one of the three boxes below</div>
                </div>
              </div>
              <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt=""
                  class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt=""
                  class="circle-chek_img-check"></div><img src="images/pinter-center-left.webp" loading="lazy" alt=""
                class="start-project_pointer-left"><img src="images/pointer-blue-medium.webp" loading="lazy" alt=""
                class="start-project_pointer-right">
            </div>
            <div class="form-wrapper">
              <div class="start-project_form-wrapper w-form">
                <form method="get" data-form="multistep" name="email-form" data-name="Email Form" data-enter="true"
                  id="email-form" class="start-project_form" data-wf-page-id="65b4453c9e0f05c6674b7325"
                  data-wf-element-id="1bb21479-b3fd-6123-9361-dece65ec47e6">
                  <div class="form-step-wrapper">
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <div class="form-field-letter">a.</div><label for="Color">What challenge can I assist you
                              with?</label>
                          </div>
                        </div>
                        <div class="form-input-wrapper">
                          <div class="form-description">(I&#x27;ll try send you materials that may aid you.)</div>
                        </div>
                        <div class="form-checkbox-wrapper"><label class="w-checkbox checkbox-field"><img loading="lazy"
                              src="images/icon-form-04.svg" alt="" class="icon-1x1-large">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">A</div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input
                              id="Generate-leads" type="checkbox" name="Generate-leads" data-name="Generate leads"
                              style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label w-form-label"
                              for="Generate-leads">Streamlined task and project management</span>
                          </label><label class="w-checkbox checkbox-field">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">B</div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input
                              id="Making-sales" type="checkbox" name="Making-sales" data-name="Making sales"
                              style="opacity:0;position:absolute;z-index:-1"><img loading="lazy"
                              src="images/icon-form-02.svg" alt="" class="icon-1x1-large"><span
                              class="checkbox-label w-form-label" for="Making-sales">Real-time data analysis and
                              automation</span>
                          </label><label class="w-checkbox checkbox-field">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">C</div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input
                              id="Improve-your-ROI" type="checkbox" name="Improve-your-ROI" data-name="Improve your ROI"
                              style="opacity:0;position:absolute;z-index:-1"><img loading="lazy"
                              src="images/icon-form-03.svg" alt="" class="icon-1x1-large"><span
                              class="checkbox-label w-form-label" for="Improve-your-ROI">Enhanced user engagement</span>
                          </label><label class="w-checkbox checkbox-field">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">D</div>
                            </div>
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input
                              id="Other" type="checkbox" name="Other" data-name="Other"
                              style="opacity:0;position:absolute;z-index:-1"><img loading="lazy"
                              src="images/icon-form-01.svg" alt="" class="icon-1x1-large"><span
                              class="checkbox-label w-form-label" for="Other">Other</span>
                          </label></div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">Next step ✓ </a>
                          <div class="press-enter-text">press <strong>Enter ↵</strong></div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <div class="form-field-letter">b.</div><label for="Color">Where is your business
                              located?</label>
                          </div>
                        </div>
                        <div class="form-input-wrapper">
                          <div class="form-description">Just a rough estimate would help us scope out the size of the
                            project</div>
                        </div>
                        <div data-radio-delay="250" data-radio-skip="true" class="form-checkbox-wrapper is-3-col"><label
                            class="checkbox-field w-radio">
                            <div
                              class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input">
                            </div><input id="USA" type="radio" name="Where-is-your-business-located"
                              data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1"
                              value="USA"><img loading="lazy" src="images/icon-flag-03.svg" alt=""
                              class="icon-1x1-large">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">A</div>
                            </div><span class="checkbox-label w-form-label" for="USA">USA</span>
                          </label><label class="checkbox-field w-radio">
                            <div
                              class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input">
                            </div><input id="LATAM" type="radio" name="Where-is-your-business-located"
                              data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1"
                              value="LATAM"><img loading="lazy" src="images/icon-latam.svg" alt=""
                              class="icon-1x1-large">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">B</div>
                            </div><span class="checkbox-label w-form-label" for="LATAM">LATAM</span>
                          </label><label class="checkbox-field w-radio">
                            <div
                              class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input">
                            </div><input id="OTHER-2" type="radio" name="Where-is-your-business-located"
                              data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1"
                              value="OTHER"><img loading="lazy" src="images/icon-flag-01.svg" alt=""
                              class="icon-1x1-large">
                            <div class="form-field-icon is-test">
                              <div class="form-field-letter">C</div>
                            </div><span class="checkbox-label w-form-label" for="OTHER-2">OTHER</span>
                          </label></div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">Next step ✓ </a>
                          <div class="press-enter-text">press <strong>Enter ↵</strong></div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top">
                            <div class="form-field-letter">c.</div><label for="Color">Describe your business needs in
                              1-3 sentences.</label>
                          </div>
                        </div>
                        <div class="form-input-wrapper">
                          <div class="form-description">EX: I work at a Miami real estate agency, aiming to boost
                            marketing for properties ranging from $500k to $5m.</div>
                        </div>
                        <div class="form-field-group">
                          <div class="form-input-wrapper"></div>
                          <div class="form-input-wrapper"><textarea id="Describe-your-business-needs-in-1-3-sentences"
                              name="Describe-your-business-needs-in-1-3-sentences" maxlength="5000"
                              data-name="Describe your business needs in 1-3 sentences."
                              placeholder=" Type here... What you offer, target market, your average price"
                              class="form-input is-text-area w-input"></textarea></div>
                        </div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">Next step ✓ </a>
                          <div class="press-enter-text">press <strong>Enter ↵</strong></div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="form-field-wrapper">
                          <div class="form-field-top"><label for="Color">Finally, how do we contact you?</label></div>
                        </div>
                        <div class="form-field-group">
                          <div class="form-input-wrapper"><input class="form-input w-input" maxlength="256" name="Name"
                              data-name="Name" placeholder="First name..." type="text" id="Name-4" required=""></div>
                          <div class="form-input-wrapper"><input class="form-input w-input" maxlength="256" name="Email"
                              data-name="Email" placeholder="mail@domain.com" type="email" id="Email-5" required="">
                          </div>
                        </div>
                        <div class="form-button-wrapper">
                          <a data-form="next-btn" href="#" class="form-button w-button">Next step ✓ </a>
                          <div class="press-enter-text">press <strong>Enter ↵</strong></div>
                        </div>
                      </div>
                    </div>
                    <div data-form="step" class="form-step-item">
                      <div class="step-wrapper">
                        <div class="step-content-only">
                          <h2>Ready <span class="text-color-degrade-form">to submit</span>?</h2>
                          <div class="form-button-wrapper"><input type="submit" data-wait="Please wait..."
                              data-form="submit-btn" class="form-button w-button" value="Send it away!"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fixed-button-wrapper">
                    <div class="steps-text">Step<span data-text="current-step" class="current-step">0</span> / <span
                        data-text="total-steps" class="total-steps">5</span></div>
                    <a data-form="back-btn" href="#" class="next-button w-button">↑</a>
                    <a data-form="next-btn" href="#" class="back-button w-button">↓</a>
                  </div>
                  <div data-form="progress" class="progress-wrapper">
                    <div data-form="progress-indicator" class="progress-indicator"></div>
                    <div class="progress-indicator current"></div>
                  </div>
                </form>
                <div class="start-project_form-success w-form-done"><img src="images/s.gif" loading="lazy" alt=""
                    class="start-project_form-success-img">
                  <div class="start-project_form-text"><br><span class="heading-style-h3 text-color-degrade-light">Thank
                      you! <br></span>Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="start-project_contact">
            <div class="heading-style-h4 text-color-degrade-light">Start a conversation</div>
            <div class="start-project_contact-btn">
              <a href="mailto:hello@apros.pe?subject=Start%20a%20conversation"
                class="button is-secondary is-large w-inline-block">
                <div class="text-size-medium">hello@apros.pe</div><img src="images/icon-btn.svg" loading="lazy" alt=""
                  class="icon-1x1-small">
              </a>
              <a href="https://api.whatsapp.com/send/?phone=51906459245&text=Hola%2C+tengo+una+consulta+sobre+los+servicios+que+ofrecen.&type=phone_number&app_absent=0"
                target="_blank" class="button is-secondary is-large w-inline-block">
                <div class="text-size-medium">Whatsapp</div><img src="images/icon-btn.svg" loading="lazy" alt=""
                  class="icon-1x1-small">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><img src="images/bg-light-blue-vf.webp" loading="lazy" sizes="100vw"
      srcset="images/bg-light-blue-vf-p-500.png 500w, images/bg-light-blue-vf-p-800.png 800w, images/bg-light-blue-vf.webp 1533w"
      alt="" class="start-project_light-img"><img src="images/bg-star-project-grid.webp" loading="lazy" sizes="100vw"
      srcset="images/bg-star-project-grid-p-500.png 500w, images/bg-star-project-grid-p-800.png 800w, images/bg-star-project-grid.webp 994w"
      alt="" class="start-project_grid-right">
  </div>
</main>



<?php
$home_markup = ob_get_clean();
$home_markup = preg_replace_callback(
  '/\b(src|href|data-src|poster)\s*=\s*"((images|documents|fonts)\/[^"]+)"/',
  static function ($matches) use ($theme_uri) {
    $attribute = $matches[1];
    $relative_path = $matches[2];

    return $attribute . '="' . esc_url($theme_uri . '/src/' . $relative_path) . '"';
  },
  $home_markup
);

$home_markup = preg_replace_callback(
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
  $home_markup
);

echo $home_markup;
?>