<?php

/**
 * 
 * 固定ページ(detail)
 */
get_header(); ?>
<main l-main>
      <?php get_template_part('template-parts/hero', null, [
  'img_src'    => get_theme_file_uri('/assets/images/image_hero_detail.webp'),
  'img_alt'    => '',
  'img_width'  => '1440',
  'img_height' => '339',
  'en_title'   => 'Detail',
  'ja_title'   => '募集要項',
  'lead'       => 'TETOTEは幅広く仲間を募集しています。',
]); ?>
<?php get_template_part("template-parts/breadcrumb"); ?>
<?php get_template_part("template-parts/detail"); ?>
<?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>