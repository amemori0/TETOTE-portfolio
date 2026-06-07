<?php
$slide_items = [["src" => "image_slide_01.webp", "alt" => "PCの前で電話対応をするスーツ姿の男性社員"], ["src" => "image_slide_02.webp", "alt" => "ノートPCを開いたカフェ風のオフィスで、笑顔で作業をする女性社員"], ["src" => "image_slide_03.webp", "alt" => "オフィスで資料を見せながら笑顔で面談を行う2人の女性"]];

$img_count = count($slide_items);
?>

<section class="p-top-slide">
  <h2 class="p-top-slide__title">
    <span class="p-top-slide__title-box">後悔しないキャリアを作る、</span>
    <span class="p-top-slide__title-box">それこそが、我々の使命だ</span>
  </h2>
  <div class="p-top-slide__inner" style="--_img-count: <?php echo esc_attr($img_count); ?>;">
    <?php for ($i = 0; $i < 2; $i++):
      foreach ($slide_items as $index => $item):

        $is_clone = $i === 1;
        $alt_text = $is_clone ? "" : esc_attr($item["alt"]);
        $aria_hidden = $is_clone ? ' aria-hidden="true"' : "";
        $global_index = $i * $img_count + $index;
        $is_offset = $global_index % 2 === 1;
        ?>
        <img
          src="<?php echo esc_url(get_theme_file_uri("/assets/images/" . $item["src"])); ?>"
          alt="<?php echo $alt_text; ?>"
          width="506"
          height="393"
          loading="lazy"
          <?php echo $aria_hidden; ?>
          <?php echo $is_offset ? 'data-offset="true"' : ""; ?>
        />
      <?php
      endforeach;
    endfor; ?>
  </div>
</section>