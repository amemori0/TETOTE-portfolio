<?php
/**
 * ヒーローセクション
 * * @param array $args {
 * @type string $img_src    画像のパス
 * @type string $img_alt    画像のalt
 * @type string $img_width  画像の幅
 * @type string $img_height 画像の高さ
 * @type string $en_title   英語タイトル
 * @type string $ja_title   日本語タイトル
 * @type string $lead       リードテキスト
 * }
 */

$img_src = $args["img_src"] ?? "";
$img_alt = $args["img_alt"] ?? "";
$img_width = $args["img_width"] ?? "1440";
$img_height = $args["img_height"] ?? "339";
$en_title = $args["en_title"] ?? "";
$ja_title = $args["ja_title"] ?? "";
$lead = $args["lead"] ?? "";
?>

<section class="p-hero">
  <div class="p-hero__inner">
    <div class="p-hero__img">
      <img
        src="<?php echo esc_url($img_src); ?>"
        alt="<?php echo esc_attr($img_alt); ?>"
        width="<?php echo esc_attr($img_width); ?>"
        height="<?php echo esc_attr($img_height); ?>"
        fetchpriority="high"
      >
    </div>
    <div class="p-hero__content">
      <?php if ($en_title): ?>
        <h1 class="p-hero__en-title"><?php echo esc_html($en_title); ?></h1>
      <?php endif; ?>

      <?php if ($ja_title): ?>
        <p class="p-hero__ja-title"><?php echo esc_html($ja_title); ?></p>
      <?php endif; ?>

      <?php if ($lead): ?>
        <p class="p-hero__lead"><?php echo esc_html($lead); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>