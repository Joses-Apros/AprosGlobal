<?php
// TODO: pegar aqui el body de apros.webflow2/about-us.html
$theme_uri = get_stylesheet_directory_uri();
ob_start();
?>
    <style>
/* Max Font Size */
@media screen and (min-width:1920px) {
 body {font-size: 1rem;}
}
/* Main Variables */
:root {
  --main-dark: #1e1927;
  --main-light: #FAF5EA;
  --main-yellow: #E9AE23;
  --main-red: #00ceff;
}
/* Global Styles */
::selection {
	background: var(--main-yellow);
  color: var(--main-dark);
  text-shadow: none;
}
img::selection, svg::selection {
	background: transparent;
}
/* Link color inherits from parent font color  */
a {
	color: inherit;
}
body::-webkit-scrollbar {
  display: none;
}
/* Hide scrollbar for IE, Edge and Firefox */
body {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
/* Loader */
.loader,
.nav,
.cursor {
	pointer-events: none;
}
/* Team Slider */
.swiper-slide.is-team:nth-child(3n+1) {
	width: 34.11%;
}
.swiper-slide.is-team:nth-child(3n+2) {
	width: 19.96%;
}
.swiper-slide.is-team:nth-child(3n+3) {
	width: 27.01%;
}
@media screen and (max-width:767px) {
  .swiper-slide.is-team:nth-child(3n+1) {
    width: 50%;
  }
  .swiper-slide.is-team:nth-child(3n+2) {
    width: 38%;
  }
  .swiper-slide.is-team:nth-child(3n+3) {
    width: 43%;
  }
}
@media screen and (max-width:479px) {
  .swiper-slide.is-team:nth-child(3n+1) {
    width: 80%;
  }
  .swiper-slide.is-team:nth-child(3n+2) {
    width: 68%;
  }
  .swiper-slide.is-team:nth-child(3n+3) {
    width: 73%;
  }
}
.swiper.is-team {
	overflow: visible;
}
.team_link:hover .image {
	filter: saturate(0%);
}
.swiper-wrapper.is-team * {
	user-select: none;
}
.team_photo-height {
	clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
	transition: all 0.6s;
}
.team_link:hover .team_color {
	opacity: 1;
}
/* Cursor */
.cursor {
	display: none;
}
@media (pointer: fine) {
	.cursor {
		display: flex;
	}
  .team_photo-height.scaled {
    clip-path: polygon(4% 4%, 96% 4%, 96% 96%, 4% 96%);
    transition: all 0.6s;
  }
}
body:hover .cursor {
	opacity: 1;
}
.cursor_dot.show {
	opacity: 1;
}
.cursor_dot.small .cursor_svg {
	opacity: 0;
}
.cursor_dot.small {
	width: 2em;
  height: 2em;
  padding: 0px;
}
.cursor_dot.small .cursor_dot-fill {
	background-color: var(--main-red);
}
.cursor_dot.pressed .cursor_svg {
	opacity: 0;
}
.cursor_dot.hide {
	transform: scale(0.6);
  opacity: 0;
}
/* Popup */
.popup_gradient {
	pointer-events: none;
}
</style>
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
          <div class="container-large">
            <div class="padding-section-medium">
              <div class="title-page_wrapper">
                <div class="title-page_title">
                  <h1 class="heading-style-h1-big">About <span class="text-color-degrade-light">us</span></h1>
                  <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
                </div>
                <div class="title-page_info is-large">
                  <p text-split="words-slide-from-right">At Apros Global, we bring over a decade of experience helping businesses thrive in the digital space. Since 2011, we have partnered with industries across Latin America and the United States, driven by a mission to transform users into loyal customers. Our expertise lies in developing innovative software solutions designed to deliver impactful results, creating memorable digital experiences, and fostering stronger connections through technology.<br></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-page_bg"><img src="images/bg-star-project-grid.webp" loading="lazy" sizes="(max-width: 994px) 100vw, 994px" srcset="images/bg-star-project-grid-p-500.png 500w, images/bg-star-project-grid-p-800.png 800w, images/bg-star-project-grid.webp 994w" alt="" class="title-page_bg-img"></div>
      </div>
      <div class="about_interna-header">
        <div class="padding-global">
          <div class="container-large">
            <div class="padding-section-medium">
              <div class="about_wrapper">
                <div class="about_top">
                  <h2 words-slide-from-right="" text-split="" class="heading-style-h3">We love developing digital solutions that drive growth. From optimizing conversion to creating tailored experiences, we transform ideas into innovative tools to help your business thrive.</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about_title">
        <div class="padding-global">
          <div class="padding-section-large">
            <div class="container-large">
              <div class="title-section_component is-start-project">
                <div class="title-section_content">
                  <h2 data-w-id="6b542c45-7b87-0faa-05a0-a0c1076867f4" style="-webkit-transform:translate3d(3rem, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(3rem, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(3rem, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(3rem, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0">Why <span class="text-color-degrade-light">Us</span></h2>
                </div>
              </div>
              <div class="max-width-large align-center">
                <p text-split="" words-slide-from-right="" class="text-size-medium">What you should expect from us</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-wrapper">
        <div data-w-id="452149a3-e02f-0646-4e00-a34181ad0fa8" class="section-height">
          <div class="sticky-element disable-overflow">
            <div class="track-wrapper">
              <div class="track">
                <div class="track-flex">
                  <div class="panel1">
                    <div class="about_expect-item">
                      <div id="w-node-_801c1709-12bd-783b-80e5-9b18582a2ffa-674b732d" class="about_expect-video">
                        <div id="w-node-ecb82eef-8726-3e01-70fc-b1f8f637b28b-674b732d" class="about_circle-bg">
                          <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
                        </div>
                        <div data-poster-url="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fe50860562a6dc31f29d_young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fe50860562a6dc31f29d_young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc-transcode.mp4,https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fe50860562a6dc31f29d_young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="about_expect-video w-background-video w-background-video-atom"><video id="345187dc-f18f-7fb7-3abd-8c673b9affe1-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fe50860562a6dc31f29d_young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fe50860562a6dc31f29d_young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc-transcode.mp4" data-wf-ignore="true">
                            <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fe50860562a6dc31f29d_young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc-transcode.webm" data-wf-ignore="true">
                          </video><noscript>
                            <style>
  [data-wf-bgvideo-fallback-img] {
    display: none;
  }
  @media (prefers-reduced-motion: reduce) {
    [data-wf-bgvideo-fallback-img] {
      position: absolute;
      z-index: -100;
      display: inline-block;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }
  }</style><img data-wf-bgvideo-fallback-img="true" src="documents/young-men-wrestlers-practice-pain-techniques-in-ju-2021-10-21-02-57-52-utc.mp4" alt="">
                          </noscript>
                          <div aria-live="polite"><button type="button" data-w-bg-video-control="true" aria-controls="345187dc-f18f-7fb7-3abd-8c673b9affe1-video" class="w-backgroundvideo-backgroundvideoplaypausebutton w-background-video--control"><span><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628299f8aa233b83918e24fd_Pause.svg" alt="Pause video"></span><span hidden=""><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628298b20ae0236682d4b87f_Play-24.svg" alt="Play video"></span></button></div>
                        </div>
                      </div>
                      <div id="w-node-_89e2e20f-26f5-d118-1f1c-955ab6cb3030-674b732d" class="about_expect-info">
                        <div class="about_expect-title">
                          <h2 data-w-id="74f1621d-b929-7c81-6cbe-773a2a7e4777" class="text-color-degrade"><strong> Judo inspired</strong></h2>
                          <h3 text-split="" words-slide-from-right="">efficiency approach</h3>
                        </div>
                        <div class="about_expect-prf">
                          <p words-slide-from-right="" text-split="">We face every challenge with a martial art’s perspective; with a calm and open mind, always ready to act, aware of whats at stake. Our framework aims to deliver high-quality solutions with accurate and low-complexity technical execution. We want to make your problems go. away, and go away fast.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel1">
                    <div class="about_expect-item">
                      <div id="w-node-_2033f7b8-91e4-0800-827f-a2cf8b8829f1-674b732d" class="about_expect-video">
                        <div id="w-node-_2033f7b8-91e4-0800-827f-a2cf8b8829f2-674b732d" class="about_circle-bg">
                          <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
                        </div>
                        <div data-poster-url="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fd700fc2731fc33a73f9_multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fd700fc2731fc33a73f9_multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc-transcode.mp4,https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fd700fc2731fc33a73f9_multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="about_expect-video w-background-video w-background-video-atom"><video id="2033f7b8-91e4-0800-827f-a2cf8b8829f4-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fd700fc2731fc33a73f9_multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fd700fc2731fc33a73f9_multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc-transcode.mp4" data-wf-ignore="true">
                            <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9fd700fc2731fc33a73f9_multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc-transcode.webm" data-wf-ignore="true">
                          </video><noscript>
                            <style>
  [data-wf-bgvideo-fallback-img] {
    display: none;
  }
  @media (prefers-reduced-motion: reduce) {
    [data-wf-bgvideo-fallback-img] {
      position: absolute;
      z-index: -100;
      display: inline-block;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }
  }</style><img data-wf-bgvideo-fallback-img="true" src="documents/multinational-team-working-on-project-in-office-2022-08-04-23-29-49-utc.mp4" alt="">
                          </noscript>
                          <div aria-live="polite"><button type="button" data-w-bg-video-control="true" aria-controls="2033f7b8-91e4-0800-827f-a2cf8b8829f4-video" class="w-backgroundvideo-backgroundvideoplaypausebutton w-background-video--control"><span><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628299f8aa233b83918e24fd_Pause.svg" alt="Pause video"></span><span hidden=""><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628298b20ae0236682d4b87f_Play-24.svg" alt="Play video"></span></button></div>
                        </div>
                      </div>
                      <div id="w-node-e54d831a-e087-0a23-36bd-2fbc50e6bf6d-674b732d" class="about_expect-info">
                        <div class="about_expect-title">
                          <h2 class="text-color-degrade"><strong>Friendly</strong></h2>
                          <h3 words-slide-from-right="" text-split="">experienced consultants</h3>
                        </div>
                        <div class="about_expect-prf">
                          <p words-slide-from-right="" text-split="">Every new client is a new relationship we take seriously. Our consultants take great pride in understanding your business and your customers. As a plus, a senior project manager will guide you every step of the way.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel1">
                    <div class="about_expect-item">
                      <div id="w-node-_74e872ad-152d-70df-c8f8-dc97d6a1cfde-674b732d" class="about_expect-video">
                        <div id="w-node-_74e872ad-152d-70df-c8f8-dc97d6a1cfdf-674b732d" class="about_circle-bg">
                          <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
                        </div>
                        <div data-poster-url="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9ff6ff1c7f66960f341cf_creative-human-brain-hd-2022-08-04-15-50-26-utc-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9ff6ff1c7f66960f341cf_creative-human-brain-hd-2022-08-04-15-50-26-utc-transcode.mp4,https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9ff6ff1c7f66960f341cf_creative-human-brain-hd-2022-08-04-15-50-26-utc-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="about_expect-video w-background-video w-background-video-atom"><video id="74e872ad-152d-70df-c8f8-dc97d6a1cfe1-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9ff6ff1c7f66960f341cf_creative-human-brain-hd-2022-08-04-15-50-26-utc-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9ff6ff1c7f66960f341cf_creative-human-brain-hd-2022-08-04-15-50-26-utc-transcode.mp4" data-wf-ignore="true">
                            <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/63a9ff6ff1c7f66960f341cf_creative-human-brain-hd-2022-08-04-15-50-26-utc-transcode.webm" data-wf-ignore="true">
                          </video><noscript>
                            <style>
  [data-wf-bgvideo-fallback-img] {
    display: none;
  }
  @media (prefers-reduced-motion: reduce) {
    [data-wf-bgvideo-fallback-img] {
      position: absolute;
      z-index: -100;
      display: inline-block;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }
  }</style><img data-wf-bgvideo-fallback-img="true" src="documents/creative-human-brain-hd-2022-08-04-15-50-26-utc.mp4" alt="">
                          </noscript>
                          <div aria-live="polite"><button type="button" data-w-bg-video-control="true" aria-controls="74e872ad-152d-70df-c8f8-dc97d6a1cfe1-video" class="w-backgroundvideo-backgroundvideoplaypausebutton w-background-video--control"><span><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628299f8aa233b83918e24fd_Pause.svg" alt="Pause video"></span><span hidden=""><img src="https://uploads-ssl.webflow.com/6022af993a6b2191db3ed10c/628298b20ae0236682d4b87f_Play-24.svg" alt="Play video"></span></button></div>
                        </div>
                      </div>
                      <div id="w-node-_30e30d22-39f6-0755-7df8-602bef072d7d-674b732d" class="about_expect-info">
                        <div class="about_expect-title">
                          <h2 class="text-color-degrade"><strong>Diverse and creative team</strong></h2>
                        </div>
                        <div class="about_expect-prf">
                          <p text-split="" words-slide-from-right="">We come from different backgrounds and we love thinking outside the box. A new challenge is the perfect opportunity to experiment and tailor a solution for your business. We know you want to stand out.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel1-space"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section data-w-id="22e1c2fc-a167-30f4-8053-f129c69d5196" class="our-tem_section">
        <div class="cursor">
          <div class="cursor_move">
            <div class="cursor_dot">
              <div class="cursor_dot-fill"><img src="images/svg-drag-icon.svg" loading="lazy" alt="" class="cursor_svg"></div>
            </div>
          </div>
        </div>
        <div class="padding-global">
          <div class="container-large">
            <div class="padding-section-medium">
              <div class="our-tem_wrapper">
                <div class="our-tem_header">
                  <div class="title-section_component">
                    <div class="title-section_content">
                      <h2>Our <span class="text-color-degrade-light">team</span></h2>
                    </div>
                    <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
                  </div>
                  <div class="max-width-xlarge">
                    <p words-slide-from-right="" text-split="" class="text-size-medium">Great products are built by great teams. Ours is made up of extremely talented developers, product managers, designers and marketers. Work with one of us and you’ll work with all of us. Meet some of the folks here at Apros.</p>
                  </div>
                </div>
                <div class="swiper is-team w-dyn-list">
                  <div role="list" class="swiper-wrapper is-team w-dyn-items">
                    <div role="listitem" class="swiper-slide is-team w-dyn-item">
                      <div class="team_link">
                        <div class="team_photo-height"><img src="" loading="eager" alt="" class="image w-dyn-bind-empty"></div>
                        <div class="team_name-info">
                          <p class="heading-style-h4 w-dyn-bind-empty"></p>
                          <p class="text-color-degrade-light w-dyn-bind-empty"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-dyn-empty">
                    <div>No items found.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="popup">
          <div class="popup_bg"></div>
          <div class="popup_wrapper w-dyn-list">
            <div role="list" class="popup_list w-dyn-items">
              <div role="listitem" class="popup_item w-dyn-item">
                <div class="popup_flex">
                  <div class="popup_visual">
                    <div class="popup_img-height">
                      <div class="popup_img"><img src="" loading="lazy" alt="" class="image w-dyn-bind-empty"></div>
                    </div>
                  </div>
                  <div class="popup_content">
                    <div class="popup_content-contain">
                      <div class="popup_name-wrap">
                        <div class="popup_name-title">
                          <p class="heading-style-h1 text-color-white w-dyn-bind-empty"></p>
                          <div class="popup_name-cargo">
                            <p class="text-size-medium w-dyn-bind-empty"></p>
                          </div>
                        </div>
                        <div class="popup_name-info">
                          <div class="rich-about hide-all w-richtext">
                            <h2>What’s a Rich Text element?</h2>
                            <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
                            <h4>Static and dynamic content editing</h4>
                            <p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>
                            <h4>How to customize formatting for each rich text</h4>
                            <p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the &quot;When inside of&quot; nested selector system.</p>
                          </div>
                          <div class="rich-about w-dyn-bind-empty w-richtext"></div>
                        </div>
                      </div>
                    </div>
                    <div class="popup_gradient"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-dyn-empty">
              <div>No items found.</div>
            </div>
          </div>
          <a href="#" class="popup_close w-inline-block">
            <div class="popup_close-x w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 94.149 94.15">
                <path id="Path_92" data-name="Path 92" d="M-3344.443-15445.694h130.149" transform="translate(-8555.816 13287.694) rotate(45)" fill="none" stroke="currentColor" stroke-width="8"></path>
                <path id="Path_93" data-name="Path 93" d="M0,0H130.148" transform="translate(93.089 1.061) rotate(135)" fill="none" stroke="currentColor" stroke-width="8"></path>
              </svg></div>
          </a>
        </div>
      </section>
      <div class="equipo_component">
        <div class="padding-section-large">
          <div class="padding-global">
            <div class="container cc-flex-h">
              <div class="col-left">
                <div class="learn_wrapper">
                  <div class="partners_title">
                    <div class="title-section_component">
                      <div class="title-section_content">
                        <h2>ISO 9001 <span class="text-color-degrade-light">Certification</span></h2>
                      </div>
                      <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
                    </div>
                    <div class="max-width-xlarge">
                      <p words-slide-from-right="" text-split="" class="text-size-medium">APROS operates under ISO-certified processes, ensuring compliance with internationally recognized standards for quality, efficiency, and continuous improvement.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-right">
                <div data-w-id="e929075a-02d0-feb5-290c-d6e26475d5fd" class="block-wrapper">
                  <div tabindex="0" class="block _1">
                    <div class="equipo_item">
                      <h3 class="heading-style-h4">Corporate governance</h3>
                      <div class="partners_item-prf">
                        <div class="text-size-medium">At APROS, we are committed to building a culture of transparency, integrity, and trust in all our operations. Our corporate governance model ensures the proper management and supervision of the company, guaranteeing compliance with the highest standards of ethical behavior and decision-making aligned with our strategic objectives.</div>
                      </div>
                    </div>
                  </div>
                  <div tabindex="0" class="block _2">
                    <div class="equipo_item">
                      <h3 class="heading-style-h4">Quality policy</h3>
                      <div class="partners_item-prf">
                        <div class="text-size-medium">We focus on delivering digital products and services that meet high-quality standards, exceeding our clients&#x27; expectations.</div>
                      </div>
                    </div>
                  </div>
                  <div tabindex="0" class="block _3">
                    <div class="equipo_item">
                      <h3 class="heading-style-h4">Privacy policy</h3>
                      <div class="partners_item-prf">
                        <div class="text-size-medium">We protect our clients’ personal and confidential information through strict privacy standards, offering them confidence and peace of mind in every interaction.</div>
                      </div>
                    </div>
                  </div>
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
                    <h2 class="heading-style-h1-big">Do you want to <span class="text-color-degrade">scale your business?</span></h2>
                    <div class="title-section_prf">
                      <div class="heading-style-h4">Select one of the three boxes below</div>
                    </div>
                  </div>
                  <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div><img src="images/pinter-center-left.webp" loading="lazy" alt="" class="start-project_pointer-left"><img src="images/pointer-blue-medium.webp" loading="lazy" alt="" class="start-project_pointer-right">
                </div>
                <div class="form-wrapper">
                  <div class="start-project_form-wrapper w-form">
                    <form method="get" data-form="multistep" name="email-form" data-name="Email Form" data-enter="true" id="email-form" class="start-project_form" data-wf-page-id="65b4453c9e0f05c6674b732d" data-wf-element-id="1bb21479-b3fd-6123-9361-dece65ec47e6">
                      <div class="form-step-wrapper">
                        <div data-form="step" class="form-step-item">
                          <div class="step-wrapper">
                            <div class="form-field-wrapper">
                              <div class="form-field-top">
                                <div class="form-field-letter">a.</div><label for="Color">What challenge can I assist you with?</label>
                              </div>
                            </div>
                            <div class="form-input-wrapper">
                              <div class="form-description">(I&#x27;ll try send you materials that may aid you.)</div>
                            </div>
                            <div class="form-checkbox-wrapper"><label class="w-checkbox checkbox-field"><img loading="lazy" src="images/icon-form-04.svg" alt="" class="icon-1x1-large">
                                <div class="form-field-icon is-test">
                                  <div class="form-field-letter">A</div>
                                </div>
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input id="Generate-leads" type="checkbox" name="Generate-leads" data-name="Generate leads" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label w-form-label" for="Generate-leads">Streamlined task and project management</span>
                              </label><label class="w-checkbox checkbox-field">
                                <div class="form-field-icon is-test">
                                  <div class="form-field-letter">B</div>
                                </div>
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input id="Making-sales" type="checkbox" name="Making-sales" data-name="Making sales" style="opacity:0;position:absolute;z-index:-1"><img loading="lazy" src="images/icon-form-02.svg" alt="" class="icon-1x1-large"><span class="checkbox-label w-form-label" for="Making-sales">Real-time data analysis and automation</span>
                              </label><label class="w-checkbox checkbox-field">
                                <div class="form-field-icon is-test">
                                  <div class="form-field-letter">C</div>
                                </div>
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input id="Improve-your-ROI" type="checkbox" name="Improve-your-ROI" data-name="Improve your ROI" style="opacity:0;position:absolute;z-index:-1"><img loading="lazy" src="images/icon-form-03.svg" alt="" class="icon-1x1-large"><span class="checkbox-label w-form-label" for="Improve-your-ROI">Enhanced user engagement</span>
                              </label><label class="w-checkbox checkbox-field">
                                <div class="form-field-icon is-test">
                                  <div class="form-field-letter">D</div>
                                </div>
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom check-box"></div><input id="Other" type="checkbox" name="Other" data-name="Other" style="opacity:0;position:absolute;z-index:-1"><img loading="lazy" src="images/icon-form-01.svg" alt="" class="icon-1x1-large"><span class="checkbox-label w-form-label" for="Other">Other</span>
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
                                <div class="form-field-letter">b.</div><label for="Color">Where is your business located?</label>
                              </div>
                            </div>
                            <div class="form-input-wrapper">
                              <div class="form-description">Just a rough estimate would help us scope out the size of the project</div>
                            </div>
                            <div data-radio-delay="250" data-radio-skip="true" class="form-checkbox-wrapper is-3-col"><label class="checkbox-field w-radio">
                                <div class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input"></div><input id="USA" type="radio" name="Where-is-your-business-located" data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1" value="USA"><img loading="lazy" src="images/icon-flag-03.svg" alt="" class="icon-1x1-large">
                                <div class="form-field-icon is-test">
                                  <div class="form-field-letter">A</div>
                                </div><span class="checkbox-label w-form-label" for="USA">USA</span>
                              </label><label class="checkbox-field w-radio">
                                <div class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input"></div><input id="LATAM" type="radio" name="Where-is-your-business-located" data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1" value="LATAM"><img loading="lazy" src="images/icon-latam.svg" alt="" class="icon-1x1-large">
                                <div class="form-field-icon is-test">
                                  <div class="form-field-letter">B</div>
                                </div><span class="checkbox-label w-form-label" for="LATAM">LATAM</span>
                              </label><label class="checkbox-field w-radio">
                                <div class="w-form-formradioinput w-form-formradioinput--inputType-custom check-box w-radio-input"></div><input id="OTHER-2" type="radio" name="Where-is-your-business-located" data-name="Where is your business located?" style="opacity:0;position:absolute;z-index:-1" value="OTHER"><img loading="lazy" src="images/icon-flag-01.svg" alt="" class="icon-1x1-large">
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
                                <div class="form-field-letter">c.</div><label for="Color">Describe your business needs in 1-3 sentences.</label>
                              </div>
                            </div>
                            <div class="form-input-wrapper">
                              <div class="form-description">EX: I work at a Miami real estate agency, aiming to boost marketing for properties ranging from $500k to $5m.</div>
                            </div>
                            <div class="form-field-group">
                              <div class="form-input-wrapper"></div>
                              <div class="form-input-wrapper"><textarea id="Describe-your-business-needs-in-1-3-sentences" name="Describe-your-business-needs-in-1-3-sentences" maxlength="5000" data-name="Describe your business needs in 1-3 sentences." placeholder=" Type here... What you offer, target market, your average price" class="form-input is-text-area w-input"></textarea></div>
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
                              <div class="form-input-wrapper"><input class="form-input w-input" maxlength="256" name="Name" data-name="Name" placeholder="First name..." type="text" id="Name-4" required=""></div>
                              <div class="form-input-wrapper"><input class="form-input w-input" maxlength="256" name="Email" data-name="Email" placeholder="mail@domain.com" type="email" id="Email-5" required=""></div>
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
                              <div class="form-button-wrapper"><input type="submit" data-wait="Please wait..." data-form="submit-btn" class="form-button w-button" value="Send it away!"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="fixed-button-wrapper">
                        <div class="steps-text">Step<span data-text="current-step" class="current-step">0</span> / <span data-text="total-steps" class="total-steps">5</span></div>
                        <a data-form="back-btn" href="#" class="next-button w-button">↑</a>
                        <a data-form="next-btn" href="#" class="back-button w-button">↓</a>
                      </div>
                      <div data-form="progress" class="progress-wrapper">
                        <div data-form="progress-indicator" class="progress-indicator"></div>
                        <div class="progress-indicator current"></div>
                      </div>
                    </form>
                    <div class="start-project_form-success w-form-done"><img src="images/s.gif" loading="lazy" alt="" class="start-project_form-success-img">
                      <div class="start-project_form-text"><br><span class="heading-style-h3 text-color-degrade-light">Thank you! <br></span>Your submission has been received!</div>
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
                  <a href="mailto:hello@apros.global?subject=Start%20a%20conversation" class="button is-secondary is-large w-inline-block">
                    <div class="text-size-medium">hello@apros.global</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
                  </a>
                  <a href="https://wa.me/message/YI4NHTF5YXGOA1" target="_blank" class="button is-secondary is-large w-inline-block">
                    <div class="text-size-medium">Whatsapp</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div><img src="images/bg-light-blue-vf.webp" loading="lazy" sizes="100vw" srcset="images/bg-light-blue-vf-p-500.png 500w, images/bg-light-blue-vf-p-800.png 800w, images/bg-light-blue-vf.webp 1533w" alt="" class="start-project_light-img">
      </div>
    </div>

<?php
$about_markup = ob_get_clean();
$about_markup = preg_replace_callback(
    '/\b(src|href|data-src|poster)\s*=\s*"((images|documents|fonts)\/[^"]+)"/',
    static function ($matches) use ($theme_uri) {
        $attribute = $matches[1];
        $relative_path = $matches[2];

        return $attribute . '="' . esc_url($theme_uri . '/src/' . $relative_path) . '"';
    },
    $about_markup
);

$about_markup = preg_replace_callback(
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
    $about_markup
);

echo $about_markup;
?>