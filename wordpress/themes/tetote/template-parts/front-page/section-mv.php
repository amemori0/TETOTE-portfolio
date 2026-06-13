<?php
/**
 * フロントページ: MV セクション
 */
?>
<section class="p-mv">
  <div class="p-mv__inner">
  <div class="p-mv__img">
    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/image_mv_01.webp")); ?>" alt="" width="1440" height="823" fetchpriority="high">
    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/image_mv_02.webp")); ?>" alt="" width="1440" height="823">
  </div>
  <h1 class="p-mv__title">
    <span class="u-text__block">Become a</span>
    <span>Challenger.</span>
  </h1>
  <h2 class="p-mv__sub-title">君の挑戦が、意思が、未来を変える</h2>
  
  <div class="p-mv__news-banner">
    <?php
    // 最新の投稿を1件だけ取得するサブループ
    $mv_news_args = [
      "post_type" => "post",
      "posts_per_page" => 1,
    ];
    $mv_news_query = new WP_Query($mv_news_args);
    ?>

    <?php if ($mv_news_query->have_posts()): ?>
      <?php while ($mv_news_query->have_posts()):
        $mv_news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="c-news-banner">
          <span class="c-news-banner__label">News</span>
          <span class="c-news-banner__text">
            <p class="c-news-banner__text-inner"><?php the_title(); ?></p>
          </span>
          <span class="c-news-banner__action">
            View more
            <span class="u-sr-only">採用ブログへ</span>
            <svg aria-hidden="true" focusable="false" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.20149 0L1.79852 1.40277L5.39567 4.99992L1.79852 8.59723L3.20149 10L8.20149 4.99992L3.20149 0Z" fill="#222222"/>
            </svg>
          </span>
        </a>
      <?php
      endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
  </div>
</section>