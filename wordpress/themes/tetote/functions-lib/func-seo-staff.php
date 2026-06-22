<?php
/**
 * staff（個別ページ）のSEOタイトル・ディスクリプション
 *
 * 【重要】SEOプラグイン側でもstaff投稿タイプのタイトル/ディスクリプションを
 * 設定する場合は、この関数を無効化してください。両方有効だと
 * titleタグやmeta descriptionが重複・競合する原因になります。
 * プラグインを使わない、またはプラグイン側が未入力の場合のフォールバックとして使う想定です。
 */

add_filter("pre_get_document_title", "tetote_staff_seo_title");
function tetote_staff_seo_title($title)
{
  if (!is_singular("staff")) {
    return $title;
  }

  $name = get_the_title();
  $job_type = get_field("staff_category");

  return $job_type ? "{$name}（{$job_type}）｜株式会社TETOTE" : "{$name}の社員紹介｜株式会社TETOTE";
}

add_action("wp_head", "tetote_staff_seo_description");
function tetote_staff_seo_description()
{
  if (!is_singular("staff")) {
    return;
  }

  $name = get_the_title();
  $job_type = get_field("staff_category");
  $comment = get_field("staff_message_01");
  $profile = get_field("staff_profile_summary");

  $intro = "株式会社TETOTEで{$job_type}として働く{$name}の紹介ページです。";
  $extra = $comment ?: ($profile ? wp_strip_all_tags($profile) : "");

  $description = $extra ? mb_substr($intro . $extra, 0, 120) : $intro;

  echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
}
