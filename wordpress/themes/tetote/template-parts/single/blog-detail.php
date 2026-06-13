<article class="p-blog-detail">

  <div class="p-blog-detail__header">
    <div class="p-blog-detail__meta">
      <?php
      $categories = get_the_category();
      if (!empty($categories)):
        foreach ($categories as $category): ?>
          <div class="c-category">
            <?php include get_theme_file_path("/assets/images/image_category.svg"); ?>
            <span class="c-category__text"><?php echo esc_html($category->name); ?></span>
          </div>
        <?php endforeach;
      endif;
      ?>
      <time class="p-blog-detail__date" datetime="<?php echo get_the_date("Y-m-d"); ?>">
        <?php echo get_the_date("Y.m.d"); ?>
      </time>
    </div>
    <h1 class="p-blog-detail__title"><?php the_title(); ?></h1>
  </div>

  <?php if (has_post_thumbnail()): ?>
    <div class="p-blog-detail__thumbnail">
      <?php the_post_thumbnail("full", ["class" => "p-blog-detail__thumbnail-img"]); ?>
    </div>
  <?php endif; ?>

  <div class="p-blog-detail__content">
    <?php the_content(); ?>
  </div>
</article>