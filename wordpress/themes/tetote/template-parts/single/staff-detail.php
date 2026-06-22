<article class="p-staff-detail">
  <div class="p-staff-detail__inner l-inner">
    <div class="p-staff-detail__content">
      <h2 class="p-staff-detail__catch">
        <span class="p-staff-detail__catch-box"><?php the_field("staff_message_01"); ?></span>
        <span class="p-staff-detail__catch-box"><?php the_field("staff_message_02"); ?></span>
      </h2>

      <div class="p-staff-detail__meta">
        <p class="p-staff-detail__occupation"><?php the_field("staff_category"); ?></p>
        <div class="p-staff-detail__name-wrap">
          <span class="p-staff-detail__name"><?php the_title(); ?></span>
          <span class="p-staff-detail__year"><?php the_field("staff_joining_year"); ?></span>
        </div>
      </div>
      
      <div class="p-staff-detail__profile">
        <p class="p-staff-detail__text"><?php the_field("staff_profile_summary"); ?></p>
      </div>
    </div>

    <div class="p-staff-detail__wrap">
      <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail("full", ["class" => "p-staff-detail__img"]); ?>
      <?php else: ?>
        <img class="p-staff-detail__img" src="<?php echo esc_url(get_theme_file_uri("/images/assets/image_dummy.webp")); ?>" alt="" />
      <?php endif; ?>
    </div>
  </div>
</article>