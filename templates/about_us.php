<?php
/**
 * Template Name: About Us
 */
add_action('wp_head', static function () {
    ?>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=634ecebdb4ffd446e52e6f19" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CustomEase.min.js"></script>
<?php
}, 20);

add_action('wp_footer', static function () {
    ?>
<script>
window.addEventListener("DOMContentLoaded", function () {
  if (typeof SplitType !== "undefined" && typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    let typeSplit = new SplitType("[text-split]", { types: "words, chars", tagName: "span" });
    function createScrollTrigger(triggerElement, timeline) {
      ScrollTrigger.create({
        trigger: triggerElement,
        start: "top bottom",
        onLeaveBack: () => { timeline.progress(0); timeline.pause(); }
      });
      ScrollTrigger.create({
        trigger: triggerElement,
        start: "top 75%",
        onEnter: () => timeline.play()
      });
    }
    $("[words-slide-up]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.from($(this).find(".word"), { opacity: 0, yPercent: 100, duration: 0.5, ease: "back.out(2)", stagger: { amount: 0.5 } });
      createScrollTrigger($(this), tl);
    });
    $("[words-rotate-in]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.set($(this).find(".word"), { transformPerspective: 1000 });
      tl.from($(this).find(".word"), { rotationX: -90, duration: 0.6, ease: "power2.out", stagger: { amount: 0.6 } });
      createScrollTrigger($(this), tl);
    });
    $("[words-slide-from-right]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.from($(this).find(".word"), { opacity: 0, x: "1em", duration: 0.6, ease: "power2.out", stagger: { amount: 0.2 } });
      createScrollTrigger($(this), tl);
    });
    $("[letters-slide-up]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.from($(this).find(".char"), { yPercent: 100, duration: 0.2, ease: "power1.out", stagger: { amount: 0.6 } });
      createScrollTrigger($(this), tl);
    });
    $("[letters-slide-down]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.from($(this).find(".char"), { yPercent: -120, duration: 0.3, ease: "power1.out", stagger: { amount: 0.7 } });
      createScrollTrigger($(this), tl);
    });
    $("[letters-fade-in]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.from($(this).find(".char"), { opacity: 0, duration: 0.2, ease: "power1.out", stagger: { amount: 0.8 } });
      createScrollTrigger($(this), tl);
    });
    $("[letters-fade-in-random]").each(function () {
      let tl = gsap.timeline({ paused: true });
      tl.from($(this).find(".char"), { opacity: 0, duration: 0.05, ease: "power1.out", stagger: { amount: 0.4, from: "random" } });
      createScrollTrigger($(this), tl);
    });
    $("[scrub-each-word]").each(function () {
      let tl = gsap.timeline({
        scrollTrigger: { trigger: $(this), start: "top 90%", end: "top center", scrub: true }
      });
      tl.from($(this).find(".word"), { opacity: 0.2, duration: 0.2, ease: "power1.out", stagger: { each: 0.4 } });
    });
    gsap.set("[text-split]", { opacity: 1 });
  }

  if (typeof Swiper !== "undefined") {
    const teamSwiper = new Swiper(".swiper.is-team", {
      slidesPerView: "auto",
      keyboard: true,
      direction: "horizontal",
      loop: false,
      speed: 800,
      mousewheel: { forceToAxis: true },
      touchEventsTarget: "container",
      freeMode: true
    });

    let myTimeout;
    teamSwiper.on("progress", function () {
      clearTimeout(myTimeout);
      $(".team_photo-height").addClass("scaled");
      $(".cursor_dot").addClass("hide");
      myTimeout = setTimeout(function () {
        $(".team_photo-height").removeClass("scaled");
      }, 100);
    });
  }

  $(document).on("mousemove", function () {
    $(".cursor_dot").removeClass("hide");
  });
  $(".swiper.is-team")
    .on("mouseenter", function () { $(".cursor_dot").addClass("show"); })
    .on("mouseleave", function () { $(".cursor_dot").removeClass("show"); });
  $(".team_link")
    .on("mouseenter", function () { $(".cursor_dot").addClass("small"); })
    .on("mouseleave", function () { $(".cursor_dot").removeClass("small"); });

  function getDifference(cardImg, popupImg) {
    let cardWidth = cardImg.innerWidth();
    let cardHeight = cardImg.innerHeight();
    let offsetLeft = cardImg.offset().left - popupImg.offset().left;
    let offsetTop = cardImg.offset().top - popupImg.offset().top;
    return [offsetLeft, offsetTop, cardWidth, cardHeight];
  }

  $(".team_link").on("click", function () {
    $("html, body").css("overflow", "hidden");
    let myIndex = $(this).parent().index();
    let cardImg = $(this).find(".image");
    let popupImg = $(".popup_item").eq(myIndex).find(".image");
    $(".popup_item").removeClass("active");
    $(".popup_item").eq(myIndex).addClass("active");
    $(".popup").css("display", "block");
    cardImg.css("opacity", "0");
    $("body").addClass("no-scroll popup-open");
    let transformValue = getDifference(cardImg, popupImg);
    gsap.fromTo(
      popupImg,
      { x: transformValue[0], y: transformValue[1], width: transformValue[2], height: transformValue[3] },
      { x: 0, y: 0, width: "100%", height: "100%", duration: 0.6, ease: "power2.inOut" }
    );
    gsap.to(".popup_bg, .popup_close, .popup_content", {
      opacity: 1,
      duration: 0.3,
      delay: 0.3,
      ease: "power2.inOut"
    });
  });

  $(".popup_close").on("click", function () {
    let myIndex = $(".popup_item.active").index();
    let popupImg = $(".popup_item.active .image");
    let cardImg = $(".team_link").eq(myIndex).find(".image");
    let transformValue = getDifference(cardImg, popupImg);
    $("body").removeClass("popup-open");
    function closePopup() {
      $("html, body").css("overflow", "visible");
      cardImg.css("opacity", "1");
      $(".popup").css("display", "none");
      popupImg.removeAttr("style");
      $("body").removeClass("no-scroll");
    }
    gsap.fromTo(
      popupImg,
      { x: 0, y: 0, width: "100%", height: "100%" },
      {
        x: transformValue[0],
        y: transformValue[1],
        width: transformValue[2],
        height: transformValue[3],
        onComplete: closePopup,
        duration: 0.6,
        ease: "power3.inOut"
      }
    );
    gsap.to(".popup_bg, .popup_content, .popup_close", {
      opacity: 0,
      duration: 0.3,
      ease: "power3.inOut"
    });
  });
});
</script>
<?php
}, 20);

get_header();
get_template_part('partials/about_us');
get_footer();
