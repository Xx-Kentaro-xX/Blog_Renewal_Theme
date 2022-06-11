// header

// Hero

// article-new
function articleNew() {
  try {
    const BLOCKPOSITION_ORIGINAL_LEFT = ["100px", "150px", "200px"];
    const BLOCKPOSITION_MOVED_LEFT = ["100px", "450px", "800px"];
    const BLOCKS = document.querySelectorAll(".article-new-block");
    // 記事開くボタン動作
    document
      .querySelector(".article-new-open")
      .addEventListener("click", function () {
        for (let i = 0; i < BLOCKS.length; i++) {
          BLOCKS[i].animate(
            {
              left: BLOCKPOSITION_MOVED_LEFT[i],
            },
            {
              fill: "forwards",
              duration: 500,
            }
          );
          // hover時のスタイルのため、クラス追加
          BLOCKS[i].classList.toggle("toggle-on");
        }

        document.querySelector(".article-new-open").style.display = "none";
        setTimeout(() => {
          document.querySelector(".article-new-close").style.display = "block";
        }, 500);
      });

    // 記事閉じるボタン動作
    document
      .querySelector(".article-new-close")
      .addEventListener("click", function () {
        for (let i = 0; i < BLOCKS.length; i++) {
          BLOCKS[i].animate(
            {
              left: BLOCKPOSITION_ORIGINAL_LEFT[i],
            },
            {
              fill: "forwards",
              duration: 500,
            }
          );
          // hover時のスタイル削除のため、クラス追加
          BLOCKS[i].classList.toggle("toggle-on");
        }

        document.querySelector(".article-new-close").style.display = "none";
        setTimeout(() => {
          document.querySelector(".article-new-open").style.display = "block";
        }, 500);
      });

    const keyframes = [
      {
        left: "150px",
      },
    ];
  } catch (e) {}
}

// article-recommend
function articleRecommend() {
  try {
    const BLOCKPOSITION_ORIGINAL_TOP = ["100px", "150px", "200px"];
    const BLOCKPOSITION_MOVED_TOP = ["100px", "350px", "600px"];
    const BLOCKS = document.querySelectorAll(".article-recommend-block");
    const RECOMMENDSECTION = document.querySelector(".article-recommend");
    // Openボタンクリック処理
    document
      .querySelector(".article-recommend-open")
      .addEventListener("click", function () {
        // セクションの高さを伸ばす
        RECOMMENDSECTION.animate(
          {
            height: "1000px",
          },
          {
            fill: "forwards",
            duration: 500,
          }
        );
        // ブロックの移動
        for (let i = 0; i < BLOCKS.length; i++) {
          BLOCKS[i].animate(
            {
              top: BLOCKPOSITION_MOVED_TOP[i],
            },
            {
              fill: "forwards",
              duration: 500,
            }
          );

          // hover時のスタイルのため、クラス追加
          BLOCKS[i].classList.toggle("toggle-on");
        }
        // Openボタン非表示
        document.querySelector(".article-recommend-open").style.display =
          "none";
        // Closeボタン表示
        setTimeout(() => {
          document.querySelector(".article-recommend-close").style.display =
            "block";
        }, 500);
      });

    // Closeボタンクリック処理
    document
      .querySelector(".article-recommend-close")
      .addEventListener("click", function () {
        // セクションの高さを伸ばす
        RECOMMENDSECTION.animate(
          {
            height: "600px",
          },
          {
            fill: "forwards",
            duration: 500,
          }
        );
        // ブロックの移動
        for (let i = 0; i < BLOCKS.length; i++) {
          BLOCKS[i].animate(
            {
              top: BLOCKPOSITION_ORIGINAL_TOP[i],
            },
            {
              fill: "forwards",
              duration: 500,
            }
          );
          // hover時のスタイル削除のため、クラス追加
          BLOCKS[i].classList.toggle("toggle-on");
        }
        // Openボタン非表示
        document.querySelector(".article-recommend-close").style.display =
          "none";
        // Closeボタン表示
        setTimeout(() => {
          document.querySelector(".article-recommend-open").style.display =
            "block";
        }, 500);
      });
  } catch (e) {}
}

// 呼び出し
articleNew();
articleRecommend();
