<?php get_header(); ?>

<main class="l-main">
  <?php get_template_part('template-parts/hero', null, [
  'img_src'    => get_theme_file_uri('/assets/images/image_hero_about-us.webp'),
  'img_alt'    => '',
  'img_width'  => '1440',
  'img_height' => '339',
  'en_title'   => 'ABOUT US',
  'ja_title'   => 'TETOTEについて',
  'lead'       => '私たちの理念を紹介をします。',
]); ?>
<?php get_template_part("template-parts/breadcrumb"); ?>
</main>

<?php get_footer(); ?>