<div class="c-pagination">
<?php
$args = [
  "mid_size" => 1,
  "prev_text" => false,
  "next_text" => false,
];
the_posts_pagination($args);
?>
</div>