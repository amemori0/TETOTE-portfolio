<?php
/*
 * カスタム投稿タイプ「staff」の一覧表示
 * ・アイキャッチ画像、メッセージ、職種、入社年、氏名を表示(カスタムフィールド)
 * ・各スタッフ詳細ページへのリンク付き
 */
$args = [
  "post_type" => "staff",
  "posts_per_page" => 20,
];
$the_query = new WP_Query($args);
?>

<section class="p-staff">
  <div class="l-inner">

    <?php if ($the_query->have_posts()): ?>
      <ul class="p-staff__list">
        <?php while ($the_query->have_posts()):
          $the_query->the_post(); ?>
          <?php $staff_id = get_the_ID();
          // ループごとに一意のIDを取得
          ?>
          
          <li class="p-staff__item">
            <article class="c-staff-card" aria-labelledby="staff-name-<?php echo $staff_id; ?>">
              <a href="<?php the_permalink(); ?>" class="c-staff-card__link">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail("full", ["class" => "c-staff-card__img"]); ?>
                <?php else: ?>
                  <img class="c-staff-card__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
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
</section>