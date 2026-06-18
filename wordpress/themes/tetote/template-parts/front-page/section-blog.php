<section class="p-top-blog">
  <div class="l-inner">
    <h2 class="c-section-title" data-align="left">
      <span class="c-section-title--ja">採用ブログ</span>
      <span lang="en" aria-hidden="true" class="c-section-title--en">Blog</span>
    </h2>
    <p class="p-top-blog__text">
      採用情報やイベント情報、社員の紹介など、<br>
      日々の現場の様子をご紹介します。
    </p>

    <?php
    $args = [
      "post_type"      => "post",
      "posts_per_page" => 4,
    ];
    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()): ?>
      <ul class="p-blog__list">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php else: ?>
      <p>記事が投稿されていません</p>
    <?php endif; ?>

    <div class="p-top-blog__button-wrap">
      <a href="<?php echo esc_url(home_url("/blog")); ?>" class="p-top-blog__link">
        <svg class="p-top-blog__link-icon" aria-hidden="true" focusable="false" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="29" cy="29" r="28.5" fill="white" stroke="#222222"/>
          <g transform="translate(20.5, 21.5)">
            <path d="M16.7071 8.07112C17.0976 7.6806 17.0976 7.04743 16.7071 6.65691L10.3431 0.292946C9.95262 -0.0975785 9.31946 -0.0975785 8.92893 0.292946C8.53841 0.68347 8.53841 1.31664 8.92893 1.70716L14.5858 7.36401L8.92893 13.0209C8.53841 13.4114 8.53841 14.0446 8.92893 14.4351C9.31946 14.8256 9.95262 14.8256 10.3431 14.4351L16.7071 8.07112ZM0 8.36401H16V6.36401H0V8.36401Z" fill="#222222"/>
          </g>
        </svg>
        <span class="p-top-blog__link-text">View more</span>
        <span class="u-sr-only">採用ブログページへ</span>
      </a>
    </div>
  </div>
</section>