<?php

/**
 * 
 * 固定ページ(faq)
 */
get_header(); ?>
<main class="l-main">
      <?php get_template_part('template-parts/hero', null, [
  'img_src'    => get_theme_file_uri('/assets/images/image_hero_faq.webp'),
  'img_alt'    => '',
  'img_width'  => '1440',
  'img_height' => '339',
  'en_title'   => 'Faq',
  'ja_title'   => 'よくある質問',
  'lead'       => '皆様からよく頂くご質問にお答えします。',
]); ?>
<?php get_template_part("template-parts/breadcrumb"); ?>
<?php get_template_part("template-parts/faq"); ?>
<?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>