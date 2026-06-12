<?php if (have_posts()): ?>
  <ul class="p-blog__list">
    <?php while (have_posts()):
      the_post(); ?>
      <li class="p-blog__item">
        <a href="<?php the_permalink(); ?>" class="p-blog__item-link">
          
          <?php if (has_post_thumbnail()): ?>
            <div class="p-blog__img-wrap">
              <?php the_post_thumbnail("full", ["class" => "p-blog__img"]); ?>
            </div>
          <?php else: ?>
            <div class="p-blog__img-wrap">
              <img class="p-blog__img" src="<?php echo esc_url(get_theme_file_uri("/assets/images/image_dummy.webp")); ?>" alt="" loading="lazy" />
            </div>
          <?php endif; ?>

          <div class="p-blog__content">
            
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
              $limit = 3;
              $count = 0;
              foreach ($categories as $category) {
                if ($count < $limit) {
                  echo '<div class="c-category">';
                  include get_theme_file_path("/assets/images/image_category.svg");
                  echo '<span class="c-category__text">' . esc_html($category->name) . "</span>";
                  echo "</div>";
                  $count++;
                } else {
                  break;
                }
              }
            }
            ?>
            
            <h3 class="p-blog__title"><?php the_title(); ?></h3>
            
            <time class="p-blog__date" datetime="<?php echo get_the_date("Y-m-d"); ?>">
              <?php echo get_the_date("Y.m.d"); ?>
            </time>
            
          </div>
        </a>
      </li>
    <?php
    endwhile; ?>
  </ul>
<?php else: ?>
  <p>記事が投稿されていません</p>
<?php endif; ?>
