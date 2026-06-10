<?php
/**
 * 制作実績アーカイブページのテンプレート
 * カスタム投稿タイプ「staff」の一覧
 */
get_header(); ?>

<main class="l-main">
    <?php get_template_part("template-parts/hero", null, [
      "img_src" => get_theme_file_uri("/assets/images/image_hero_staff.webp"),
      "img_alt" => "",
      "img_width" => "1440",
      "img_height" => "339",
      "en_title" => "Staff",
      "ja_title" => "社員について",
      "lead" => "弊社社員のリアルな声を紹介しています。",
    ]); ?>
<?php get_template_part("template-parts/breadcrumb"); ?>
<?php get_template_part("template-parts/archive/staff-list"); ?>
<?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>
