// 静的書き出し版(Cloudflare Pages)ではCF7のPHPが動かないため、送信先をFormspreeに切り替える
// CF7のsubmit処理より先に止めるため、documentのキャプチャ段階で受け取る
const FORMSPREE_ENDPOINT = "https://formspree.io/f/mjyybqyo";
const THANKS_URL = "/entry/entry-thanks/";

const showMessage = (form, message) => {
  const output = form.querySelector(".wpcf7-response-output");
  if (!output) return;
  output.removeAttribute("aria-hidden");
  output.setAttribute("role", "alert");
  output.textContent = message;
};

const findInvalidControls = form => {
  const invalid = [...form.querySelectorAll("[aria-required='true']")].filter(control => !control.value.trim());
  const acceptance = form.querySelector("input[name='acceptance']");
  if (acceptance && !acceptance.checked) invalid.push(acceptance);
  return invalid;
};

document.addEventListener(
  "submit",
  async event => {
    const form = event.target;
    if (!(form instanceof HTMLFormElement) || !form.classList.contains("wpcf7-form")) return;

    event.preventDefault();
    event.stopPropagation();

    form.querySelectorAll("[aria-invalid='true']").forEach(control => control.setAttribute("aria-invalid", "false"));
    const invalid = findInvalidControls(form);
    if (invalid.length > 0) {
      invalid.forEach(control => control.setAttribute("aria-invalid", "true"));
      showMessage(form, "未入力の必須項目があります。※の付いた項目と、個人情報保護方針への同意を確認してください。");
      invalid[0].focus();
      return;
    }

    const formData = new FormData(form);
    // CF7用の隠しフィールドは送らない
    [...formData.keys()].filter(key => key.startsWith("_wpcf7")).forEach(key => formData.delete(key));
    // Formspreeは email という名前の項目を返信先として扱う
    formData.set("email", formData.get("your-email"));
    formData.set("_subject", "TETOTE エントリーフォーム");

    const submitButton = form.querySelector("[type='submit']");
    submitButton.disabled = true;

    try {
      const response = await fetch(FORMSPREE_ENDPOINT, {
        method: "POST",
        body: formData,
        headers: { Accept: "application/json" },
      });
      if (!response.ok) throw new Error(`Formspree responded ${response.status}`);
      location.href = THANKS_URL;
    } catch (error) {
      console.error(error);
      showMessage(form, "送信に失敗しました。時間をおいて再度お試しください。");
      submitButton.disabled = false;
    }
  },
  true,
);
