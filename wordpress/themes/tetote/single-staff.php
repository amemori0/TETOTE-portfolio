<?php
/**
 * スタッフ一覧個別ページ
 */
get_header(); ?>
<main class="l-main">
     <?php get_template_part("template-parts/single/staff-detail"); ?>
      <?php get_template_part("template-parts/breadcrumb"); ?>
       <div class="p-single-staff-detail">
        <div class="p-single-staff-detail__inner l-inner">
             <?php get_template_part("template-parts/single/staff-detail-content"); ?>
             <?php get_template_part("template-parts/sidebar-staff-toc"); ?>   
         </div>
        </div>
        <?php get_template_part("template-parts/single/staff-other-members"); ?>
        <?php get_template_part("template-parts/cta"); ?>
    </main>
<?php get_footer(); ?>
