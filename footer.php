<?php
wp_footer();
$theme_uri = get_stylesheet_directory_uri();

?>

<footer class="footer_component">
  <div class="padding-global">
    <div class="container-large">
      <div class="footer_wrapper">
        <div class="footer_content-left"><img src="<?php echo esc_url($theme_uri . '/src/images/logo-footer-2.svg'); ?>"
            loading="lazy" alt="" class="footer_logo-img">
          <div class="text-size-small text-color-grey">All rights reserved <strong>©</strong> 2024</div>
        </div>
        <div class="footer_content-right">
          <div class="footer_content-links-wrapper">
            <div>Navigation</div>
            <div class="footer_links-wrapper">
              <a href="<?php echo home_url(); ?>" aria-current="page" class="footer_link w-inline-block w--current">
                <div class="text-size-small">Home</div>
              </a>
              <a href="<?php echo home_url(); ?>/about-us" class="footer_link w-inline-block">
                <div class="text-size-small">About us</div>
              </a>
              <a href="<?php echo home_url(); ?>/insights" class="footer_link w-inline-block">
                <div class="text-size-small">Insights</div>
              </a>
              <a href="<?php echo home_url(); ?>/jobs" class="footer_link w-inline-block">
                <div class="text-size-small">Jobs</div>
              </a>
              <a href="<?php echo home_url(); ?>/privacy-policy" class="footer_link w-inline-block">
                <div class="text-size-small">Privacy policy<br></div>
              </a>
              <a href="<?php echo home_url(); ?>/terms-and-conditions" class="footer_link w-inline-block">
                <div class="text-size-small">Terms and conditions<br></div>
              </a>
            </div>
          </div>
          <div class="footer_content-links-wrapper">
            <div>Social</div>
            <div class="footer_links-wrapper">
              <a href="https://www.linkedin.com/company/2606973/" target="_blank" class="footer_link w-inline-block">
                <div class="text-size-small">LinkedIn</div>
              </a>
              <a href="https://www.instagram.com/apros_global/" target="_blank" class="footer_link w-inline-block">
                <div class="text-size-small">Instagram</div>
              </a>
              <a href="https://www.facebook.com/apros" target="_blank" class="footer_link w-inline-block">
                <div class="text-size-small">Facebook</div>
              </a>
              <a href="https://api.whatsapp.com/send/?phone=51906459245&text=Hola%2C+tengo+una+consulta+sobre+los+servicios+que+ofrecen.&type=phone_number&app_absent=0"
                target="_blank" class="footer_link w-inline-block">
                <div class="text-size-small">WhatsApp</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=634ecebdb4ffd446e52e6f19"
  type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="<?php echo esc_url($theme_uri . '/src/scripts/webflow.js'); ?>" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/videsigns/webflow-tools@latest/multi-step.js"> </script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
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
<script>
  /*!
  * jquery.counterup.js 1.0
  *
  * Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
  * Released under the GPL v2 License
  *
  * Date: Nov 26, 2013
  */
  (function ($) {
    "use strict";
    $.fn.counterUp = function (options) {
      // Defaults
      var settings = $.extend({
        'time': 400,
        'delay': 10
      }, options);
      return this.each(function () {
        // Store the object
        var $this = $(this);
        var $settings = settings;
        var origValue = $this.text();
        var counterUpper = function () {
          var nums = [];
          var divisions = $settings.time / $settings.delay;
          var num = origValue;
          var isComma = /[0-9]+,[0-9]+/.test(num);
          num = num.replace(/,/g, '');
          var isInt = /^[0-9]+$/.test(num);
          var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
          var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;
          // Generate list of incremental numbers to display
          for (var i = divisions; i >= 1; i--) {
            // Preserve as int if input was int
            var newNum = parseInt(num / divisions * i);
            // Preserve float if input was float
            if (isFloat) {
              newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
            }
            // Preserve commas if input had commas
            if (isComma) {
              while (/(\d+)(\d{3})/.test(newNum.toString())) {
                newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
              }
            }
            nums.unshift(newNum);
          }
          $this.data('counterup-nums', nums);
          $this.text('0');
          // Updates the number until we're done
          var f = function () {
            $this.text($this.data('counterup-nums').shift());
            if ($this.data('counterup-nums').length) {
              setTimeout($this.data('counterup-func'), $settings.delay);
            } else {
              delete $this.data('counterup-nums');
              $this.data('counterup-nums', null);
              $this.data('counterup-func', null);
            }
          };
          $this.data('counterup-func', f);
          // Start the count up
          setTimeout($this.data('counterup-func'), $settings.delay);
        };
        // Perform counts when the element gets into view
        $this.waypoint(counterUpper, { offset: '100%', triggerOnce: true });
      });
    };
  })(jQuery);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script>
  jQuery(document).ready(function ($) {
    $('.counterup').counterUp({
      delay: 100, // the delay time in ms
      time: 2000 // the speed time in ms
    });
  });
</script>
</body>