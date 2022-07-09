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

// ヘッダーロゴ非表示制御[スマホの場合](アンカーリンクで飛んだ時にロゴが遷移先のタイトルとかぶるため)
function headerLogoMobileControl() {
  try {
    let target = document.querySelector(".header-logo");

    window.addEventListener("scroll", function () {
      let screenWidth = window.innerWidth;
      // 画面は幅が769未満(=768以内)の場合
      if (screenWidth < 769) {
        let currentScrollY = window.scrollY;
        if (currentScrollY > 300) {
          target.style.display = "none";
        } else {
          target.style.display = "block";
        }
      }
    });
  } catch (e) {}
}

// ヘッダーロゴがトップページを読むときに邪魔なので一定のスクロール量を超えたらhtmlを空にして、クリックできなくする
function headerLogoPageTopControl() {
  try {
    let target = document.querySelector(".header-logo > a");

    window.addEventListener("scroll", function () {
      let currentScrollY = window.scrollY;
      if (currentScrollY > 300) {
        target.innerHTML = "";
        target.style.pointerEvents = "none";
      } else {
        target.innerHTML = "KentaroGram";
        target.style.pointerEvents = "auto";
      }
    });
  } catch (e) {}
}

// ヘッダーロゴ非表示制御[スマホの場合](アンカーリンクで飛んだ時にロゴが遷移先のタイトルとかぶるため)
function headerLogoMobileControl() {
  try {
    let target = document.querySelector(".header-logo");

    window.addEventListener("scroll", function () {
      let screenWidth = window.innerWidth;
      // 画面は幅が769未満(=768以内)の場合
      if (screenWidth < 769) {
        let currentScrollY = window.scrollY;
        if (currentScrollY > 300) {
          target.style.display = "none";
        } else {
          target.style.display = "block";
        }
      }
    });
  } catch (e) {}
}

// 呼び出し
pageTopButtonControl();
headerLogoPageTopControl();
headerLogoMobileControl();
