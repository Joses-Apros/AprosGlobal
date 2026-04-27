<?php
// TODO: pegar aqui el body de apros.webflow2/cases.html
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
<div fs-cmsfilter-element="scroll-anchor" class="main-wrapper">
<div class="title-page_component">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-medium">
        <div class="title-page_wrapper solutions-detail_left-side">
          <div class="title-page_title">
            <h1 class="heading-style-h1-big">Recent <span class="text-color-degrade-light">Work</span></h1>
            <div class="circle-chek_component"><img src="images/text-circle-vf.svg" loading="lazy" alt="" class="circle-chek_text-circle-img"><img src="images/check-circle-3.svg" loading="lazy" alt="" class="circle-chek_img-check"></div>
          </div>
          <div class="title-page_info">
            <p>Check out some of our recent projects to get a taste of our work.<br></p>
          </div>
          <div class="padding-bottom padding-medium"></div>
          <a href="#contact" class="button w-inline-block">
            <div>I need a website</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="recent-work_main overflow-visible">
  <div class="padding-global">
    <div class="container-large">
      <div class="recent-work_main-wrapper">
        <div class="recent-work_form-filter">
          <div data-animation="default" data-collapse="tiny" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="recent-work_nav-filter w-nav">
            <div class="recent-work_nav-title">
              <div class="recent-work_nav-title-filter">Filter by</div>
              <nav role="navigation" class="recent-work_nav-menu w-nav-menu">
                <div class="recent-work_form w-form">
                  <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" fs-cmsfilter-element="filters" class="recent-work_form-wrapper" data-wf-page-id="65b4453c9e0f05c6674b7348" data-wf-element-id="31b1934b-527a-746f-a120-9a9664498579"><input type="submit" data-wait="Please wait..." class="button hide-all w-button" value="Submit">
                    <div class="recent-work_form-overflow">
                      <a fs-cmsfilter-element="clear" href="#" class="recent-work_form-check-field is-all w-inline-block">
                        <div class="recent-work_form-check-text">All</div>
                      </a>
                      <div class="recent-work_form-cl w-dyn-list">
                        <div role="list" class="recent-work_form-cl-list w-dyn-items">
                          <div role="listitem" class="recent-work_form-cl-item w-dyn-item"><label class="recent-work_form-check-field w-radio"><input type="radio" data-name="Radio" id="radio" name="radio" class="w-form-formradioinput recent-work_form-check-icon w-radio-input" value="Radio"><span fs-cmsfilter-active="is-active" fs-cmsfilter-field="categoria" class="recent-work_form-check-text w-dyn-bind-empty w-form-label" for="radio"></span></label></div>
                        </div>
                        <div class="w-dyn-empty">
                          <div>No items found.</div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </nav>
              <div class="recent-work_nav-btn w-nav-button"><img src="images/icon-filter.svg" loading="lazy" alt="" class="recent-work_nav-icon"></div>
            </div>
          </div>
        </div>
        <div class="recent-work_form-tag">
          <div fs-cmsfilter-element="tag-template" class="recent-work_form-tag-item">
            <div fs-cmsfilter-element="tag-text" class="recent-work_form-tag-text">Filter: All</div><img src="images/icon-trigger.svg" loading="lazy" fs-cmsfilter-element="tag-remove" alt="" class="recent-work_form-tag-close">
          </div>
        </div>
        <div class="collection-list-wrapper w-dyn-list">
          <div fs-cmsfilter-element="list" fs-cmsload-element="list" fs-cmsload-mode="infinite" fs-cmsload-duration="800" fs-cmsload-stagger="200" role="list" class="recent-work_main-grid w-dyn-items">
            <div role="listitem" class="recent-work_item-cl w-dyn-item">
              <div data-w-id="487be787-fe28-33c4-5695-116dbd0dc9a3" class="recent-work_item">
                <a href="#" class="recent-work_item-cover w-inline-block"><img src="" alt="" class="recent-work_item-cover-img w-dyn-bind-empty"></a>
                <div class="recent-work_item-content">
                  <a href="#" class="recent-work_item-title w-inline-block">
                    <h3 class="w-dyn-bind-empty"></h3>
                  </a>
                  <div class="w-dyn-list">
                    <div role="list" class="recent-work_tag-wrapper w-dyn-items">
                      <div role="listitem" class="w-dyn-item">
                        <div class="tag-item">
                          <div fs-cmsfilter-field="categoria" class="tag-item_text w-dyn-bind-empty"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="recent-work_item-info">
                    <p class="text-color-grey w-dyn-bind-empty"></p>
                  </div>
                  <div class="recent-work_btns">
                    <a href="#" class="button is-secondary is-small w-inline-block">
                      <div>Visit the website</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
                    </a>
                    <a href="https://apros.global/book-a-call" target="_blank" class="button is-small w-inline-block">
                      <div>Request case study</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
                    </a>
                    <link rel="prefetch" href="https://apros.global/book-a-call">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-dyn-empty">
            <div>No items found.</div>
          </div>
          <div role="navigation" aria-label="List" class="w-pagination-wrapper recent-work_pagination">
            <a href="#" aria-label="Previous Page" class="w-pagination-previous"><svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 12" transform="translate(0, 1)">
                <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
              </svg>
              <div class="w-inline-block">Previous</div>
            </a>
            <a href="#" aria-label="Next Page" class="w-pagination-next button">
              <div class="w-inline-block">Load more</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
            </a>
          </div>
        </div>
        <div class="recent-work_main-bottom">
          <div class="heading-style-h4"><span class="text-color-degrade">Are you looking for</span> something more specific? Drop as a line at </div>
          <a href="mailto:hello@apros.global?subject=Start%20a%20conversation" class="button is-secondary is-small w-inline-block">
            <div class="text-size-medium">hello@apros.global</div><img src="images/icon-btn.svg" loading="lazy" alt="" class="icon-1x1-small">
          </a>
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
              <form method="get" data-form="multistep" name="email-form" data-name="Email Form" data-enter="true" id="email-form" class="start-project_form" data-wf-page-id="65b4453c9e0f05c6674b7348" data-wf-element-id="1bb21479-b3fd-6123-9361-dece65ec47e6">
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
  </div><img src="images/bg-light-blue-vf.webp" loading="lazy" sizes="100vw" srcset="images/bg-light-blue-vf-p-500.png 500w, images/bg-light-blue-vf-p-800.png 800w, images/bg-light-blue-vf.webp 1533w" alt="" class="start-project_light-img"><img src="images/bg-star-project-grid.webp" loading="lazy" sizes="100vw" srcset="images/bg-star-project-grid-p-500.png 500w, images/bg-star-project-grid-p-800.png 800w, images/bg-star-project-grid.webp 994w" alt="" class="start-project_grid-right">
</div>
</div>

<?php
$case_studies_markup = ob_get_clean();
$case_studies_markup = preg_replace_callback(
    '/\b(src|href|data-src|poster)\s*=\s*"((images|documents|fonts)\/[^"]+)"/',
    static function ($matches) use ($theme_uri) {
        $attribute = $matches[1];
        $relative_path = $matches[2];

        return $attribute . '="' . esc_url($theme_uri . '/src/' . $relative_path) . '"';
    },
    $case_studies_markup
);

$case_studies_markup = preg_replace_callback(
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
    $case_studies_markup
);

echo $case_studies_markup;
?>