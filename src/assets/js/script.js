// リセットCSS（kiso.css）は style.scss で読み込み。二重読み込みを避けるためここでは import しない
import "./_drawer.js";
import "./_viewport.js";
import "./_scroll.js";
import "./_staff-swiper.js";
import "./_smoothscroll.js";
import "./_toc.js";
import "./_accordion.js";
import "./_cf7.js";

// 開発環境でのみCSSをインポート（JS経由でスタイルを注入）
if (import.meta.env.DEV) {
  import("../styles/style.scss");
}