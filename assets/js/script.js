// 全画面共通JS

// ページトップ戻るボタン制御
function pageTopButtonControl() {
  try {
    let pageTopButton = document.querySelector(".page-top-button");
    pageTopButton.addEventListener("click", function () {
      scrollTo({ top: 0, left: 0, behavior: "smooth" });
    });

    window.addEventListener("scroll", function () {
      let currentScrollY = window.scrollY;

      if (currentScrollY > 300) {
        pageTopButton.style.display = "block";
      } else {
        pageTopButton.style.display = "none";
      }
    });
  } catch (e) {}
}

// 呼び出し
pageTopButtonControl();
