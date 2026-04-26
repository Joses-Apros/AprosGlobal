<?php
get_header();
?>
<?php $page_404 = get_field('error_404', 'option'); ?>
<section class="bg-blue relative w-full h-full overflow-hidden">
  <div class="container w-full md:h-760 h-auto flex md:flex-row flex-col ">
    <div class="md:h-full h-auto md:w-50% w-full flex flex-col justify-center md:pt-0 pt-100">
      <?php if (isset($page_404['title'])): ?>
        <h1 class="font-galano_alt font-700 md:text-42 text-26 leading-104% textDegradado"> <?= $page_404['title'] ?></h1>
      <?php endif; ?>
      <p class="font-400 md:text-16 text-14 leading-126% text-white">
        <?php if (isset($page_404['text'])): ?>
          <?= $page_404['text'] ?>
        <?php endif; ?>
      </p>
      <a href="<?= home_url() ?>"
        class="w-153 h-46 rounded-full flex justify-center items-center bg-white font-700 text-16 leading-140% text-black mt-24">
        Ir al home
      </a>
    </div>
    <div class="md:h-full h-auto md:w-50% w-full flex items-center justify-center relative">
      <?php if (isset($page_404['image'])): ?>
        <div class="[&_img]:w-435 [&_img]:h-435 [&_img]:object-contain">
          <?= wp_get_attachment_image($page_404['image'], 'full') ?>
        </div>
      <?php endif; ?>
      <div class="md:w-78 md:h-75 w-53 h-50 bg-cover absolute top-130 left-50"
        style="background-image:url('https://apros-qa.net.pe/apros/wp-content/uploads/2024/09/apros-1.webp')"></div>
    </div>

  </div>
  <div class="w-461 h-361 bg-contain bg-no-repeat absolute left-0  top-0 mix-blend-soft-light hidden md:block"
    style="background-image:url('https://apros-qa.net.pe/apros/wp-content/uploads/2024/11/bg-light-blue-ul.webp')">
  </div>
  <div class="w-561 h-561 bg-contain bg-no-repeat absolute right-122 bottom--37 mix-blend-soft-light"
    style="background-image:url('https://apros-qa.net.pe/apros/wp-content/uploads/2024/11/bg-light-blue-d.webp')">
  </div>
  <div
    class="w-561 h-561 bg-contain bg-no-repeat absolute  left-122 top--37 mix-blend-soft-light rotate-180 block md:hidden"
    style="background-image:url('https://apros-qa.net.pe/apros/wp-content/uploads/2024/11/bg-light-blue-d.webp')">
  </div>
</section>

<?php get_footer();