<?php
if (!defined('ABSPATH')) {
  exit;
}

if (!have_posts()) {
  status_header(404);
  exit;
}

the_post();

$post_id = get_the_ID();
$template_path = __DIR__ . '/index copy.html';
$html = file_exists($template_path) ? file_get_contents($template_path) : '';

if (!$html) {
  get_header();
  echo '<main><h1>' . esc_html(get_the_title()) . '</h1></main>';
  get_footer();
  return;
}

$get_acf = static function (string $key, $default = '') {
  if (function_exists('get_field')) {
    $value = get_field($key);
    if ($value !== null && $value !== '') {
      return $value;
    }
  }
  return $default;
};

$title = get_the_title();
$excerpt = has_excerpt() ? get_the_excerpt() : wp_strip_all_tags(get_the_content());
$excerpt = wp_trim_words($excerpt, 45);
$permalink = get_permalink($post_id);
$slug = get_post_field('post_name', $post_id);

$summary = (string) $get_acf('solution_summary', $excerpt);
$subtitle = (string) $get_acf('solution_subtitle', $title);
$demo_url = (string) $get_acf('solution_demo_url', home_url('/book-a-call'));
$cta_heading = (string) $get_acf('solution_cta_heading', 'Start making smarter decisions today');
$features = $get_acf('solution_features', []);
$process_items = $get_acf('solution_process_items', []);
$problem_title = (string) $get_acf('solution_problem_title', '');
$problem_list_html = (string) $get_acf('solution_problem_list', '');
$success_title = (string) $get_acf('solution_success_title', '');
$success_list_html = (string) $get_acf('solution_success_list', '');
$icon_field = $get_acf('solution_icon', '');
$hero_mp4 = (string) $get_acf('solution_hero_video_mp4', '');
$hero_webm = (string) $get_acf('solution_hero_video_webm', '');

$icon_url = '';
if (is_array($icon_field) && !empty($icon_field['url'])) {
  $icon_url = (string) $icon_field['url'];
} elseif (is_string($icon_field)) {
  $icon_url = $icon_field;
}

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

$set_node_html = static function (DOMNode $node, string $html_fragment) use ($dom) {
  while ($node->firstChild) {
    $node->removeChild($node->firstChild);
  }
  $tmp = new DOMDocument();
  $tmp->loadHTML('<div>' . $html_fragment . '</div>');
  $container = $tmp->getElementsByTagName('div')->item(0);
  if (!$container) {
    return;
  }
  foreach ($container->childNodes as $child) {
    $node->appendChild($dom->importNode($child, true));
  }
};

// html root attrs
$html_nodes = $dom->getElementsByTagName('html');
if ($html_nodes->length > 0) {
  $html_nodes->item(0)->setAttribute('data-wf-item-slug', $slug);
}

// <title>
$title_nodes = $dom->getElementsByTagName('title');
if ($title_nodes->length > 0) {
  $title_nodes->item(0)->textContent = $title;
}

// canonical
$canonical = $xpath->query("//link[@rel='canonical']");
if ($canonical && $canonical->length > 0) {
  $canonical->item(0)->setAttribute('href', $permalink);
}

// H1
$h1 = $xpath->query("//*[contains(@class,'h1-solutions')]");
if ($h1 && $h1->length > 0) {
  $h1->item(0)->textContent = $title;
}

// Hero summary
$hero_p = $xpath->query("(//*[contains(@class,'title-page_info')]//p)[1]");
if ($hero_p && $hero_p->length > 0) {
  $hero_p->item(0)->textContent = $summary;
}

// Subtitle
$sub_nodes = $xpath->query("(//*[contains(@class,'heading-style-h5') and contains(@class,'is-solutions')])[1]");
if ($sub_nodes && $sub_nodes->length > 0) {
  $sub_nodes->item(0)->textContent = $subtitle;
}

// Icon
if ($icon_url !== '') {
  $icon_nodes = $xpath->query("(//img[contains(@class,'title-section_icon')])[1]");
  if ($icon_nodes && $icon_nodes->length > 0) {
    $icon_nodes->item(0)->setAttribute('src', $icon_url);
    $icon_nodes->item(0)->setAttribute('alt', $title);
  }
}

// CTA heading
$cta_nodes = $xpath->query("(//*[@id='contact']//h2[contains(@class,'heading-style-h1-big')])[1]");
if ($cta_nodes && $cta_nodes->length > 0) {
  $cta_nodes->item(0)->textContent = $cta_heading;
}

// Replace default demo links with ACF URL
if ($demo_url !== '') {
  $demo_links = $xpath->query("//a[contains(@href,'book-a-call')]");
  if ($demo_links) {
    foreach ($demo_links as $link) {
      $link->setAttribute('href', $demo_url);
    }
  }
}

// Hero video sources
if ($hero_mp4 !== '' || $hero_webm !== '') {
  $video_sources = $xpath->query("(//section[contains(@class,'solutions-header')]//video/source)");
  if ($video_sources && $video_sources->length > 0) {
    if ($hero_mp4 !== '' && $video_sources->length >= 1) {
      $video_sources->item(0)->setAttribute('src', $hero_mp4);
      $video_sources->item(0)->setAttribute('type', 'video/mp4');
    }
    if ($hero_webm !== '' && $video_sources->length >= 2) {
      $video_sources->item(1)->setAttribute('src', $hero_webm);
      $video_sources->item(1)->setAttribute('type', 'video/webm');
    }
  }
}

// Feature cards in services accordion
if (is_array($features) && !empty($features)) {
  $feature_nodes = $xpath->query("//*[@class and contains(concat(' ', normalize-space(@class), ' '), ' cta_link-block ') and not(contains(@class,'w-condition-invisible'))]");
  if ($feature_nodes) {
    $limit = min($feature_nodes->length, count($features));
    for ($i = 0; $i < $limit; $i++) {
      $row = $features[$i];
      $node = $feature_nodes->item($i);
      if (!$node) {
        continue;
      }

      $title_node = $xpath->query(".//*[contains(@class,'cta_link-text')][1]", $node);
      if ($title_node && $title_node->length > 0 && !empty($row['title'])) {
        $title_node->item(0)->textContent = (string) $row['title'];
      }

      $desc_node = $xpath->query(".//*[contains(@class,'text-color-grey')][1]", $node);
      if ($desc_node && $desc_node->length > 0 && !empty($row['description'])) {
        $desc_node->item(0)->textContent = (string) $row['description'];
      }

      if (!empty($row['image'])) {
        $img_url = is_array($row['image']) ? ($row['image']['url'] ?? '') : (string) $row['image'];
        $img_alt = is_array($row['image']) ? ($row['image']['alt'] ?? $title) : $title;
        $img_node = $xpath->query(".//*[contains(@class,'cta_link-image')][1]", $node);
        if ($img_node && $img_node->length > 0 && $img_url !== '') {
          $img_node->item(0)->setAttribute('src', $img_url);
          $img_node->item(0)->setAttribute('alt', $img_alt);
        }
      }
    }
  }
}

// Process items block
if (is_array($process_items) && !empty($process_items)) {
  $process_nodes = $xpath->query("//*[contains(@class,'process_item') and not(contains(@class,'w-condition-invisible'))]");
  if ($process_nodes) {
    $limit = min($process_nodes->length, count($process_items));
    for ($i = 0; $i < $limit; $i++) {
      $row = $process_items[$i];
      $node = $process_nodes->item($i);
      if (!$node) {
        continue;
      }
      $icon_node = $xpath->query(".//*[contains(@class,'process_item-icon')][1]", $node);
      if ($icon_node && $icon_node->length > 0 && !empty($row['icon'])) {
        $icon_url = is_array($row['icon']) ? ($row['icon']['url'] ?? '') : (string) $row['icon'];
        $icon_alt = is_array($row['icon']) ? ($row['icon']['alt'] ?? '') : '';
        if ($icon_url !== '') {
          $icon_node->item(0)->setAttribute('src', $icon_url);
          $icon_node->item(0)->setAttribute('alt', $icon_alt);
        }
      }
      $title_node = $xpath->query(".//*[contains(@class,'heading-style-h4')][1]", $node);
      if ($title_node && $title_node->length > 0 && !empty($row['title'])) {
        $title_node->item(0)->textContent = (string) $row['title'];
      }
      $desc_node = $xpath->query(".//*[contains(@class,'process_item-info')]//p[1]", $node);
      if ($desc_node && $desc_node->length > 0 && !empty($row['description'])) {
        $desc_node->item(0)->textContent = (string) $row['description'];
      }
    }
  }
}

// Problem/Success detail lists
$detail_items = $xpath->query("//*[contains(@class,'solutions-detail_list-item')]");
if ($detail_items && $detail_items->length >= 2) {
  $problem_item = $detail_items->item(0);
  $success_item = $detail_items->item(1);

  if ($problem_item) {
    if ($problem_title !== '') {
      $problem_title_node = $xpath->query(".//*[contains(@class,'text-color-degrade-light')][1]", $problem_item);
      if ($problem_title_node && $problem_title_node->length > 0) {
        $problem_title_node->item(0)->textContent = $problem_title;
      }
    }
    if ($problem_list_html !== '') {
      $problem_list_node = $xpath->query(".//*[contains(@class,'list-error') and not(contains(@class,'hide-all'))][1]", $problem_item);
      if ($problem_list_node && $problem_list_node->length > 0) {
        $set_node_html($problem_list_node->item(0), $problem_list_html);
      }
    }
  }

  if ($success_item) {
    if ($success_title !== '') {
      $success_title_node = $xpath->query(".//*[contains(@class,'text-color-degrade-light')][1]", $success_item);
      if ($success_title_node && $success_title_node->length > 0) {
        $success_title_node->item(0)->textContent = $success_title;
      }
    }
    if ($success_list_html !== '') {
      $success_list_node = $xpath->query(".//*[contains(@class,'list-succsess') and not(contains(@class,'hide-all'))][1]", $success_item);
      if ($success_list_node && $success_list_node->length > 0) {
        $set_node_html($success_list_node->item(0), $success_list_html);
      }
    }
  }
}

echo "<!DOCTYPE html>\n";
echo $dom->saveHTML();
