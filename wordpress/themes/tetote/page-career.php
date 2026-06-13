<?php

/**
 * 
 * 
 */
get_header(); ?>
<main l-main>
      <?php get_template_part('template-parts/hero', null, [
  'img_src'    => get_theme_file_uri('/assets/images/image_hero_career.webp'),
  'img_alt'    => '',
  'img_width'  => '1440',
  'img_height' => '339',
  'en_title'   => 'Career',
  'ja_title'   => '研修制度とキャリアパス',
  'lead'       => 'キャリアパスを支える充実した、研修制度',
]); ?>
<?php get_template_part("template-parts/breadcrumb"); ?>
<?php get_template_part("template-parts/training-system"); ?>
<?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>