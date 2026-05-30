document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".p-header");
  const drawerIcon = document.querySelector(".p-header__drawer-icon");
  const drawer = document.querySelector(".p-header__drawer");
  const drawerNavItems = document.querySelectorAll(".p-header__drawer-nav a[href^='#']");
  const breakpoint = 768;
  let isMenuOpen = false;
  let isMenuOpenAtBreakpoint = false;

  // メニューを開く
  const openMenu = () => {
    header.classList.add("js-open");
    drawer.classList.add("js-open");
    drawerIcon.classList.add("js-open");
    drawerIcon.setAttribute("aria-expanded", "true");
    drawerIcon.setAttribute("aria-label", "メニューを閉じる");
  };

  // メニューを閉じる
  const closeMenu = () => {
    header.classList.remove("js-open");
    drawer.classList.remove("js-open");
    drawerIcon.classList.remove("js-open");
    drawerIcon.setAttribute("aria-expanded", "false");
    drawerIcon.setAttribute("aria-label", "メニューを開く");
    isMenuOpen = false;
  };

  // 開閉トグル
  const toggleMenu = () => {
    if (!drawer.classList.contains("js-open")) {
      openMenu();
    } else {
      closeMenu();
    }
  };

  // リサイズ処理
  const handleResize = () => {
    const windowWidth = window.innerWidth;
    if (windowWidth > breakpoint && isMenuOpenAtBreakpoint) {
      closeMenu();
    } else if (windowWidth <= breakpoint && drawer.classList.contains("js-open")) {
      isMenuOpenAtBreakpoint = true;
    }
  };

  // メニュー外クリック処理
  const clickOuter = (event) => {
    if (
      drawer.classList.contains("js-open") &&
      !drawer.contains(event.target) &&
      !drawerIcon.contains(event.target) &&
      isMenuOpen
    ) {
      closeMenu();
    } else if (
      drawer.classList.contains("js-open") &&
      !drawer.contains(event.target)
    ) {
      isMenuOpen = true;
    }
  };

  // ページ内スクロール
  const linkScroll = (target) => {
    if (target) {
      const headerHeight = document.querySelector("header").offsetHeight;
      const offsetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight;
      window.scrollTo({ top: offsetPosition, behavior: "smooth" });
    }
  };

  drawerIcon.addEventListener("click", toggleMenu);
  window.addEventListener("resize", handleResize);
  document.addEventListener("click", clickOuter);

  drawerNavItems.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      closeMenu();
      const target = document.querySelector(item.getAttribute("href"));
      linkScroll(target);
    });
  });
});