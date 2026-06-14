<?php

/**
 * 
 * 固定ページ(benefits)
 */
get_header(); ?>
<main l-main>
      <?php get_template_part('template-parts/hero', null, [
  'img_src'    => get_theme_file_uri('/assets/images/image_hero_benefits.webp'),
  'img_alt'    => '',
  'img_width'  => '1440',
  'img_height' => '339',
  'en_title'   => 'Benefits',
  'ja_title'   => '福利厚生について',
  'lead'       => '充実した福利厚生制度を設けています。',
]); ?>
<?php get_template_part("template-parts/breadcrumb"); ?>
<?php get_template_part("template-parts/benefits"); ?>
<?php get_template_part("template-parts/voice"); ?>
<?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>