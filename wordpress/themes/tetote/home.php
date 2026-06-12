<?php
/**
 * ブログ一覧ページ
 */
get_header(); ?>

<main class="l-main">
  <?php get_template_part("template-parts/hero", null, [
    "img_src" => get_theme_file_uri("/assets/images/image_hero_blog.webp"),
    "img_alt" => "",
    "img_width" => "1440",
    "img_height" => "339",
    "en_title" => "Blog",
    "ja_title" => "採用ブログ",
    "lead" => "採用情報やイベント情報などをご紹介します。",
  ]); ?>

  <?php get_template_part("template-parts/breadcrumb"); ?>

  <div class="p-archive-blog">
    <div class="l-inner">
      <?php get_template_part("template-parts/archive/blog-list"); ?> 

      <div class="p-archive-blog-button-wrap">
        <?php get_template_part("template-parts/pagination"); ?>
      </div>
    </div>
  </div>

  <?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>
