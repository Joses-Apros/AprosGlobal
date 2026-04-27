<?php
// TODO: pegar aqui el body de apros.webflow2/book-a-call.html
$theme_uri = get_stylesheet_directory_uri();
ob_start();
?>
<div class="main-wrapper">
<section class="solutions-header is-book">
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-large">
        <div class="solutions-header_wrapper">
          <div class="padding-top padding-medium"></div>
          <div class="title-page_wrapper is-center">
            <div class="title-page_title is-center is-medium">
              <h1 class="text-color-degrade text-align-center"><strong>The digital revolution is here. Are you ready to be part of it?</strong></h1>
            </div>
            <div class="padding-top padding-medium"></div>
            <div class="title-page_info">
              <p class="text-align-center">Use the calendar below to schedule a free discovery call. We appreciate your interest in pursuing your online success and look forward to the opportunity to learn about your product, address any questions you may have, and help your business achieve its goals.<br></p>
            </div>
          </div>
          <div class="calendly-wrapper">
            <div class="w-embed w-iframe">
              <div class="calendly-inline-widget" style="min-width: 320px; height: 700px;"><iframe width="100%" height="100%" frameborder="0" title="Calendly Scheduling Page" src="https://calendly.com/apros-global/30min?hide_event_type_details=1&hide_gdpr_banner=1?utm_source=tdp_contact_page&amp;embed_type=Inline&amp;embed_domain=1"></iframe></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div data-poster-url="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/6489fc61df7d7e183513f353_6-poster-00001.jpg" data-video-urls="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/6489fc61df7d7e183513f353_6-transcode.mp4,https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/6489fc61df7d7e183513f353_6-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="solutions-header_bg w-background-video w-background-video-atom"><video id="0fb01f8e-c661-72ab-fd58-b5595345fc04-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/6489fc61df7d7e183513f353_6-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
      <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/6489fc61df7d7e183513f353_6-transcode.mp4" data-wf-ignore="true">
      <source src="https://uploads-ssl.webflow.com/634ecebdb4ffd446e52e6f19/6489fc61df7d7e183513f353_6-transcode.webm" data-wf-ignore="true">
    </video></div>
</section>
</div>

<?php
$book_a_call_markup = ob_get_clean();
$book_a_call_markup = preg_replace_callback(
    '/\b(src|href|data-src|poster)\s*=\s*"((images|documents|fonts)\/[^"]+)"/',
    static function ($matches) use ($theme_uri) {
        $attribute = $matches[1];
        $relative_path = $matches[2];

        return $attribute . '="' . esc_url($theme_uri . '/src/' . $relative_path) . '"';
    },
    $book_a_call_markup
);

$book_a_call_markup = preg_replace_callback(
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
    $book_a_call_markup
);

echo $book_a_call_markup;
?>