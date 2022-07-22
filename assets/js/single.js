// 記事ページ(固定ページ&投稿ページ)用 JS

// Strongタグ置き換え(SEO観点でstrongの評価が良くないため)
function replaceStrong() {
  try {
    // 置換対象の<strong>を取得
    let targets = document.querySelectorAll("strong");

    for (let i = 0; i < targets.length; i++) {
      // <strong>の中の文字を保持
      let targetString = targets[i].innerHTML;
      // 置換用の<span>生成
      let replaceSpan = document.createElement("span");
      // スタイル用のクラスを付与
      replaceSpan.setAttribute("class", "emphasize");
      // 保持していた文字を入れる
      replaceSpan.innerHTML = targetString;

      targets[i].replaceWith(replaceSpan);
    }
  } catch (e) {}
}

// h2 自動id付与(目次のアンカー設置のため)
function autoAnchor() {
  try {
    let targets = document.querySelectorAll("h2");
    // for文の i をid名に使用すると数字が飛び飛びになるので、専用の変数を用意
    let anchorCounter = 0;

    for (let i = 0; i < targets.length; i++) {
      // Wordpressから出力されるh2があるようなので、それを除外するためidの有無チェック
      if (!targets[i].id) {
        // 目次のタイトルに使われてるh2は対象外にしたいのでinnerHTMLをチェック
        if (
          targets[i].innerHTML != "目次" &&
          targets[i].className != "header-logo"
        ) {
          // アンカー付与の処理
          let idName = "anchor_" + anchorCounter;
          targets[i].id = idName;
          anchorCounter += 1;
        }
      }
    }
  } catch (e) {}
}

// 目次自動作成
function autoIndexCreation() {
  try {
    // 目次を入れたい場所から見た親要素を取得
    const PARENT = document.querySelector(
      ".single-article-content-description"
    );
    // 目次となる<ul>を生成
    let indexUl = document.createElement("ul");

    //　autoAnchor()によってidを"anchor_*"で割り振られたh2を全て取得
    let indexItems = document.querySelectorAll('[id^="anchor_"]');

    // html上のh2の数だけ目次の項目を生成する
    for (let i = 0; i < indexItems.length; i++) {
      // 目次（<ul>)の要素となる<li>を生成
      let indexItem = document.createElement("li");
      // <li>の中に入れ込む<a>タグを生成
      let indexItemAnchor = document.createElement("a");
      // <a>タグのテキストにhtml上にあるh2のテキストと同じものを指定する
      indexItemAnchor.innerText = i + 1 + ". " + indexItems[i].innerText;
      // <a>タグのhref(遷移先)としてh2のidを指定する
      indexItemAnchor.setAttribute("href", "#" + indexItems[i].id);
      // <li>の中に<a>を子要素として追加
      indexItem.appendChild(indexItemAnchor);
      // <ul>の中に<li>を子要素として追加
      indexUl.appendChild(indexItem);
    }

    // 目次を挟む横線として<hr>を生成
    let startHr = document.createElement("hr");
    // <ul>の直後にまず最初の<hr>を入れる
    indexUl.prepend(startHr);
    let endHr = document.createElement("hr");
    endHr.className = "hr-reverse";
    indexUl.appendChild(endHr);

    // 親要素の先頭要素として<ul>を追加
    PARENT.prepend(indexUl);
  } catch (e) {}
}

// 呼び出し
replaceStrong();
autoAnchor();
autoIndexCreation();
// ヘッダーに背景色をつけて固定したので呼び出しをコメントアウト(2022/7/22)
// headerLogoMobileControl();

// 未使用
// ヘッダーロゴ非表示制御(記事を読む際に邪魔になるため)
function headerLogoMobileControl() {
  try {
    let target = document.querySelector(".header-logo");
    let target_nav = document.querySelector(".header-nav");

    window.addEventListener("scroll", function () {
      let currentScrollY = window.scrollY;
      if (currentScrollY > 300) {
        target.style.display = "none";
        target_nav.style.display = "none";
      } else {
        target.style.display = "block";
        target_nav.style.display = "block";
      }
    });
  } catch (e) {}
}
