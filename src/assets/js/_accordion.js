const defaultOptions = {
  duration: 300,
  easing: "ease-in-out",
  printAll: false
};

const initializeDetailsAccordion = (
  details,
  options = {}
) => {
  if (!details) {
    console.error("initializeDetailsAccordion: Details element is not found.");
    return;
  }

  const summary = details.querySelector("summary");
  const panel = details.querySelector("summary + *");

  if (!summary || !panel) {
    console.error(
      "initializeDetailsAccordion: Elements required for initializeDetailsAccordion are not found."
    );
    return;
  }

  const mergedOptions = { ...defaultOptions, ...options };
  const detailsName = details.getAttribute("name") || null;

  summary.addEventListener(
    "click",
    (event) =>
      handleClick(event, details, panel, mergedOptions, detailsName),
    false
  );

  if (mergedOptions.printAll) {
    window.addEventListener("beforeprint", () =>
      handleBeforePrint(details, detailsName)
    );
    window.addEventListener("afterprint", () =>
      handleAfterPrint(details, detailsName)
    );
  }
};

let isAnimating = false;

const toggleAccordion = (
  details,
  panel,
  options,
  detailsName,
  show
) => {
  if (details.open === show) return;

  isAnimating = true;

  if (detailsName) details.removeAttribute("name");
  if (show) details.open = true;

  panel.style.overflow = "clip";

  const { blockSize } = window.getComputedStyle(panel);

  const keyframes = show
    ? [{ maxBlockSize: "0" }, { maxBlockSize: blockSize }]
    : [{ maxBlockSize: blockSize }, { maxBlockSize: "0" }];

  const isPrefersReduced = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  const animationOptions = {
    duration: isPrefersReduced ? 0 : Math.max(0, options.duration || 0),
    easing: options.easing
  };

  const onAnimationEnd = () => {
    requestAnimationFrame(() => {
      panel.style.overflow = "";

      if (!show) details.open = false;

      if (detailsName) details.setAttribute("name", detailsName);

      isAnimating = false;
    });
  };

  requestAnimationFrame(() => {
    const animation = panel.animate(keyframes, animationOptions);

    animation.addEventListener("finish", onAnimationEnd);
  });
};

const hideOtherAccordions = (
  details,
  options,
  detailsName
) => {
  if (!detailsName) return;

  const otherDetails = document.querySelector(
    `details[name="${detailsName}"][open]`
  );

  if (!otherDetails || otherDetails === details) return;

  const otherPanel = otherDetails.querySelector("summary + *");

  if (!otherPanel) return;

  toggleAccordion(otherDetails, otherPanel, options, detailsName, false);
};

const handleClick = (
  event,
  details,
  panel,
  options,
  detailsName
) => {
  event.preventDefault();

  if (isAnimating) return;

  toggleAccordion(details, panel, options, detailsName, !details.open);

  if (details.open) {
    hideOtherAccordions(details, options, detailsName);
  }
};

const openStatusAttribute = "data-open-status";

const handleBeforePrint = (
  details,
  detailsName
) => {
  if (!details) return;

  details.setAttribute(openStatusAttribute, String(details.open));

  if (detailsName) details.removeAttribute("name");

  details.open = true;
};

const handleAfterPrint = (
  details,
  detailsName
) => {
  if (!details) return;

  if (detailsName) details.setAttribute("name", detailsName);

  details.open = details.getAttribute(openStatusAttribute) === "true";

  details.removeAttribute(openStatusAttribute);
};

document.addEventListener("DOMContentLoaded", () => {
  // アコーディオンの要素を取得し、initializeDetailsAccordion関数を呼び出す
  const accordions = document.querySelectorAll("details");

  if (accordions.length === 0) return;

  accordions.forEach((accordion) => {
    initializeDetailsAccordion(accordion, {
      duration: 300,
      printAll: true
    });
  });
});