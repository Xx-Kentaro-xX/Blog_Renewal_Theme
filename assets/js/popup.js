function popupControl() {
  try {
    // プライバシーポリシー・免責事項ポップアップのを開くための要素を取得
    const privacy_poclicy_popup_display =
      document.querySelector(".privacy-policy");

    // ポップアップ表示する際の背景となる要素を取得
    const popup_background_element =
      document.querySelector(".popup-background");
    // ポップアップエリアの要素を取得
    const popup_area_element = document.querySelector(".popup-area");
    // ポップアップエリアの中の文章エリアを取得
    const popup_area_policy_sentence =
      document.querySelector(".policy-sentences");

    // bodyを取得(ポップアップ表示中に背後のbodyのスクロールを無効化するため)
    const main_body = document.querySelector("body");

    // ポップアップ表示処理
    privacy_poclicy_popup_display.addEventListener("click", function () {
      // ポップアップ背景に対して、トップページと同じサイズの高さ・幅を指定して、"hidden"クラスを取り除く
      const pageHeight = document.querySelector("body").scrollHeight;
      const pageWidth = document.querySelector("body").scrollWidth;
      popup_background_element.style.height = pageHeight + "px";
      popup_background_element.style.width = pageWidth + "px";
      popup_background_element.classList.remove("hidden");

      // ポップアップの表示位置を指定
      // ブラウザの高さと幅に対して80%でポップアップサイズを指定
      popup_area_element.style.height = window.innerHeight * 0.85 + "px";
      popup_area_element.style.width = window.innerWidth * 0.8 + "px";
      // ポップアップの表示開始する高さを現在のスクロールした量 + 画面の10%の高さ(ポップアップの上に余白を作るため)で指定
      popup_area_element.style.top =
        window.scrollY + window.innerHeight * 0.1 + "px";

      // bodyのスクロールを無効化後に、ポップアップの文章のエリアだけスクロールを有効化
      main_body.style.overflow = "hidden";
      popup_area_policy_sentence.style.overflow = "scroll";
    });

    // 画面幅が変わった際のポップアップのサイズ調整
    window.addEventListener("resize", function () {
      // ポップアップ背景に対して、トップページと同じサイズの幅を指定して、"hidden"クラスを取り除く
      const pageWidth = document.querySelector("body").scrollWidth;
      popup_background_element.style.width = pageWidth + "px";

      // ポップアップの表示位置を指定
      // ブラウザの幅に対して80%でポップアップサイズを指定
      popup_area_element.style.width = window.innerWidth * 0.8 + "px";
    });

    // ポップアップの閉じるボタン要素取得
    const popup_close_button = document.querySelector(".close-button");

    // 閉じるボタンとポップアップの背景部分をクリックした際にポップアップを閉じる処理を付与
    popup_close_button.addEventListener("click", turnOffPopUp);
    popup_background_element.addEventListener("click", turnOffPopUp);

    // ポップアップを非表示にする処理
    function turnOffPopUp() {
      // ポップアップを非表示にする
      popup_background_element.classList.add("hidden");
      // bodyのスクロールを有効化
      main_body.style.overflow = "auto";
    }
  } catch (e) {}
}

popupControl();
