<section class="p-top-staff">
  <div class="l-inner">
    <h2 class="c-section-title" data-align="left">
      <span class="c-section-title--ja"><span class="c-section-title__underline">人</span>を知る</span>
      <span lang="en" aria-hidden="true" class="c-section-title--en">Member</span>
    </h2>
    <p class="p-top-staff__text">
      TETOTEの社員がどういった信念を持って働いているのか、<br>
      一日のスケジュールや仕事内容などを紹介します。
    </p>

    <div class="p-top-staff__swiper-container">
      <div class="swiper p-top-staff__swiper">
        <?php
        $args = [
          "post_type" => "staff",
          "posts_per_page" => 6,
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()): ?>
          <ul class="swiper-wrapper p-top-staff__swiper-wrapper">
            <?php while ($the_query->have_posts()):
              $the_query->the_post(); ?>
              <li class="swiper-slide p-top-staff__swiper-slide">
                <article class="c-staff-card" aria-labelledby="staff-name-<?php echo $staff_id; ?>">
                  <a href="<?php the_permalink(); ?>" class="c-staff-card__link">
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail("full", ["class" => "c-staff-card__img"]); ?>
                    <?php else: ?>
                      <img class="c-staff-card__img" src="<?php echo esc_url(get_theme_file_uri("/images/assets/image_dummy.webp")); ?>" alt="" />
                    <?php endif; ?>
                    
                    <div class="c-staff-card__info">
                      <p class="c-staff-card__message">
                        <span class="c-staff-card__message-box"><?php the_field("staff_message_01"); ?></span>
                        <span class="c-staff-card__message-box"><?php the_field("staff_message_02"); ?></span>
                      </p>
                    </div>
                  </a>
                  
                  <div class="c-staff-card__meta">
                    <span class="c-staff-card__occupation"><?php the_field("staff_category"); ?></span>
                    <span class="c-staff-card__year"><?php the_field("staff_joining_year"); ?></span>
                  </div>
                  <h3 class="c-staff-card__name" id="staff-name-<?php echo $staff_id; ?>"><?php the_title(); ?></h3>
                </article>
              </li>
            <?php
            endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        <?php else: ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>
      </div>
    </div>

    <div class="p-top-staff__button-wrap">
      <a href="<?php echo esc_url(home_url("/")); ?>" class="c-button-more">
        <span class="c-button-more__text">View more</span>
        <span class="u-sr-only">スタッフ一覧ページへ</span>
        <svg class="c-button-more__icon" aria-hidden="true" focusable="false" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.40298 0L3.59705 2.80555L10.7913 9.99984L3.59705 17.1945L6.40298 20L16.403 9.99984L6.40298 0Z" fill="#222222"/>
        </svg>
      </a>
      <div class="p-top-staff__prev-next-wrap">
        <button class="swiper-button-prev" aria-label="前のスライドを表示">
          <svg class="swiper-button__icon" aria-hidden="true" focusable="false" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="29" cy="29" r="28.5" fill="white" stroke="#222222"/>
            <g transform="translate(20.5, 21.5)">
              <path d="M0.292892 6.65691C-0.0976315 7.04743 -0.0976315 7.6806 0.292892 8.07112L6.65685 14.4351C7.04738 14.8256 7.68054 14.8256 8.07107 14.4351C8.46159 14.0446 8.46159 13.4114 8.07107 13.0209L2.41421 7.36401L8.07107 1.70716C8.46159 1.31664 8.46159 0.68347 8.07107 0.292946C7.68054 -0.0975785 7.04738 -0.0975785 6.65685 0.292946L0.292892 6.65691ZM17 6.36401L1 6.36401L1 8.36401L17 8.36401L17 6.36401Z" fill="#222222"/>
            </g>
          </svg>
        </button>
        <button class="swiper-button-next" aria-label="次のスライドを表示">
          <svg class="swiper-button__icon" aria-hidden="true" focusable="false" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="29" cy="29" r="28.5" fill="white" stroke="#222222"/>
            <g transform="rotate(180 29 29) translate(20.5, 21.5)">
              <path d="M0.292892 6.65691C-0.0976315 7.04743 -0.0976315 7.6806 0.292892 8.07112L6.65685 14.4351C7.04738 14.8256 7.68054 14.8256 8.07107 14.4351C8.46159 14.0446 8.46159 13.4114 8.07107 13.0209L2.41421 7.36401L8.07107 1.70716C8.46159 1.31664 8.46159 0.68347 8.07107 0.292946C7.68054 -0.0975785 7.04738 -0.0975785 6.65685 0.292946L0.292892 6.65691ZM17 6.36401L1 6.36401L1 8.36401L17 8.36401L17 6.36401Z" fill="#222222"/>
            </g>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>