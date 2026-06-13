<div class="p-blog-nav">
  <div class="p-blog-nav__inner l-inner">
    <?php
    // --- SVGアイコンの定義 ---
    $svg_prev = '<svg aria-hidden="true" focusable="false" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="p-blog-nav__icon">
      <g clip-path="url(#clip0_214_1038)">
        <path d="M13.0272 6.23071L7.25781 12L13.0272 17.769L14.9319 15.8643L11.068 12L14.9319 8.13576L13.0272 6.23071Z" fill="#4B4B4B"/>
        <path d="M12.0004 0C5.37211 0.00075 0.00075 5.37216 0 12C0.000703125 18.6278 5.37211 23.9993 12.0004 24C18.6278 23.9993 23.9992 18.6278 24 12C23.9992 5.37216 18.6278 0.00075 12.0004 0ZM19.1524 19.1524C17.3191 20.9842 14.7963 22.1144 12.0004 22.1152C9.20405 22.1144 6.68086 20.9842 4.84753 19.1524C3.01538 17.3191 1.88517 14.796 1.88484 12C1.88517 9.20372 3.01538 6.68091 4.84753 4.84758C6.68086 3.01542 9.20405 1.88522 12.0004 1.88484C14.7963 1.88522 17.3191 3.01542 19.1524 4.84758C20.9842 6.68086 22.1148 9.20367 22.1152 12C22.1148 14.796 20.9842 17.3191 19.1524 19.1524Z" fill="#4B4B4B"/>
      </g>
      <defs>
        <clipPath id="clip0_214_1038"><rect width="24" height="24" fill="white"/></clipPath>
      </defs>
    </svg>';

    $svg_next = '<svg aria-hidden="true" focusable="false" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="p-blog-nav__icon" style="transform: rotate(180deg);">
      <g clip-path="url(#clip0_214_1038)">
        <path d="M13.0272 6.23071L7.25781 12L13.0272 17.769L14.9319 15.8643L11.068 12L14.9319 8.13576L13.0272 6.23071Z" fill="#4B4B4B"/>
        <path d="M12.0004 0C5.37211 0.00075 0.00075 5.37216 0 12C0.000703125 18.6278 5.37211 23.9993 12.0004 24C18.6278 23.9993 23.9992 18.6278 24 12C23.9992 5.37216 18.6278 0.00075 12.0004 0ZM19.1524 19.1524C17.3191 20.9842 14.7963 22.1144 12.0004 22.1152C9.20405 22.1144 6.68086 20.9842 4.84753 19.1524C3.01538 17.3191 1.88517 14.796 1.88484 12C1.88517 9.20372 3.01538 6.68091 4.84753 4.84758C6.68086 3.01542 9.20405 1.88522 12.0004 1.88484C14.7963 1.88522 17.3191 3.01542 19.1524 4.84758C20.9842 6.68086 22.1148 9.20367 22.1152 12C22.1148 14.796 20.9842 17.3191 19.1524 19.1524Z" fill="#4B4B4B"/>
      </g>
      <defs>
        <clipPath id="clip0_214_1038"><rect width="24" height="24" fill="white"/></clipPath>
      </defs>
    </svg>';

    $prev_post = get_previous_post();
    if (!empty($prev_post)): ?>
      <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="p-blog-nav__link p-blog-nav__link--prev">
        <?php echo $svg_prev; ?>
        <div class="p-blog-nav__content">
          <span class="p-blog-nav__title"><?php echo esc_html(get_the_title($prev_post->ID)); ?></span>
          <time class="p-blog-nav__date" datetime="<?php echo get_the_date("Y-m-d", $prev_post->ID); ?>">
            <?php echo get_the_date("Y.m.d", $prev_post->ID); ?>
          </time>
        </div>
      </a>
    <?php endif;
    ?>

    <?php
    $next_post = get_next_post();
    if (!empty($next_post)): ?>
      <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="p-blog-nav__link p-blog-nav__link--next">
        <div class="p-blog-nav__content">
          <span class="p-blog-nav__title"><?php echo esc_html(get_the_title($next_post->ID)); ?></span>
          <time class="p-blog-nav__date" datetime="<?php echo get_the_date("Y-m-d", $next_post->ID); ?>">
            <?php echo get_the_date("Y.m.d", $next_post->ID); ?>
          </time>
        </div>
        <?php echo $svg_next; ?>
      </a>
    <?php endif;
    ?>
  </div>
</div>