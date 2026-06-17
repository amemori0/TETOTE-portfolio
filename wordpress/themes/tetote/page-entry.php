<?php

/**
 * 
 * 固定ページ(entry)
 */
get_header(); ?>
<main class="l-main">
    <?php get_template_part("template-parts/breadcrumb"); ?>
    <?php echo do_shortcode('[contact-form-7 id="5ed3fb6" title="新卒・中途採用エントリーフォーム"]'); ?>
    <?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>