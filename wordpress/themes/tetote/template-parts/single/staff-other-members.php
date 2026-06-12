<?php
/*
 * スタッフ詳細ページ用：その他のメンバー（ランダム3件表示、自分自身は除外）
 */
$current_staff_id = get_the_ID();

$args = [
  "post_type" => "staff",
  "posts_per_page" => 3,
  "orderby" => "rand", //ランダムで取得
  "post__not_in" => [$current_staff_id], //現在のスタッフを除外
];
$the_query = new WP_Query($args);
?>

<?php if ($the_query->have_posts()): ?>
  <section class="p-staff-other-members">
    <div class="l-inner">
      <h2 class="p-staff-other-members__title">その他のメンバー</h2>
      
      <ul class="p-staff-other-members__list">
        <?php while ($the_query->have_posts()):
          $the_query->the_post(); ?>
          <?php $staff_id = get_the_ID(); ?>
          
          <li class="p-staff-other-members__item">
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
    </div>
  </section>
<?php endif; ?>
