<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ヘッダー読み込み -->
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css">
  <style>
    section {
      font-size: 20px;
      padding: 0px;
      text-align: start;
      width: 100%;
    }

    ol {
      padding-left: 0px;
    }

    .page-topics {
      font-size: 36px;
      color: #00a99d;
    }

    .page-topic {
      font-size: 24px;
    }

    .item-name {
      color: #00a99d;
      font-weight: bold;
    }

    .single-article-content-description li {
      padding: 20px;
    }

    .career-block {
      margin: 50px 0px;
      display: none;
    }

    .career-block .--show {
      display: block;
    }

    span.emphasize {
      position: relative;
      display: block;
    }

    .emphasize::after {
      content: "+";
      position: absolute;
      color: #00a99d;
      font-size: 26px;
      font-weight: bold;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-left: 50px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
    }

    .emphasize.--show::after {
      content: "-";
    }

    @media screen and (max-width:768px) {
      h2 {
        font-size: 22px;
      }

      section {
        font-size: 18px;
      }

      section>p {
        font-size: 18px;
      }

      .page-topics {
        font-size: 28px;
      }

      .page-topic {
        font-size: 20px;
      }

      .emphasize {
        font-size: 20px;
      }

      .emphasize::after {
        font-size: 22px;
        margin-left: 25px;
      }
    }
  </style>
</head>

<body>
  <!-- ページヘッダー読み込み -->
  <?php get_template_part('sub_parts/page_header'); ?>

  <!-- hero -->
  <div class="hero">
    <div id="hero_animation">
      <h1 class="single-article-title">ケンタロウ(筆者)について</h1>
    </div>
  </div>

  <hr />

  <section class="single-article-container">
    <div class="single-article-content">
      <!-- 記事の内容 -->
      <div class="single-article-content-description">
        <p>
          皆さん初めまして〜<br>
          ブログを見ていただきありがとうございます！<br>
          このブログを書いているケンタロウという者です<br>
        </p>
        <p>
          少し顔が濃いめで、毛の濃さに悩んで1年前から脱毛を始めた<?php echo (date('Y') - 1996); ?>歳のエンジニアです<br>
          (2年後くらいには毛がだいぶなくなってツルツルになる予定🤣ww)
        </p>
        <p>
          このページでは僕の経歴や今までどんなことを考えてきて、これから何をしたいのか<br>
          などを紹介させていただきます！<br>
        </p>
        <p>
          ぜひ、最後まで読んだいただけると嬉しいです☺️
        </p>

        <hr>

        <h3 class="page-topics">このページのトピック</h3>
        <p class="page-topic">
          <a href="#my-profile">
            1. ケンタロウのプロフィール
          </a>
        </p>
        <p class="page-topic">
          <a href="#my-job-experience">
            2. 今まで経験した仕事
          </a>
        </p>
        <p class="page-topic">
          <a href="#reasons-to-choose-it">
            3. IT業界での就職を選んだ理由
          </a>
        </p>
        <p class="page-topic">
          <a href="#about-my-future">
            4. 今後どうしていきたいのか
          </a>
        </p>
        <p class="page-topic">
          <a href="#summary">
            5. まとめ
          </a>
        </p>

        <!-- プロフィール -->
        <h2 id="my-profile">1. ケンタロウのプロフィール</h2>
        <section>
          まずは、手っ取り早く僕のプロフィール紹介です！
          <p>
            <span class="item-name">年齢:&nbsp;</span> <?php echo date('Y') - 1996; ?>
          </p>
          <p>
            <span class="item-name">名前:&nbsp;</span>ケンタロウ
          </p>
          <p>
            <span class="item-name">出身:&nbsp;</span>愛知県
          </p>
          <p>
            <span class="item-name">職業:&nbsp;</span>システムエンジニア
          </p>
          <p>
            <span class="item-name">大学の専攻:&nbsp;</span>英語
          </p>
          <p>
            <span class="item-name">好きなもの:&nbsp;</span><br>
            筋トレ、長風呂、ディズニー、StarWars、Marvelなどなど
          </p>
          <p>
            <span class="item-name">今まで取得した資格:&nbsp;</span><br>
          <ol>
            <li>TOEIC 910点(2018年9月)</li>
            <li>Python3 認定試験(2019年3月)</li>
            <li>HTML5プロフェッショナル Lev1(2019年5月)</li>
            <li>AWS クラウドプラクティショナー(2020年6月)</li>
            <li>AWS ソリューションアーキテクト(2020年7月)</li>
            <li>PHP7技術者認定試験 初級(2020年8月）</li>
            <li>Oracle Certificated Java Programing Silver SE11 認定資格(2021年2月)</li>
          </ol>
          </p>
          <p>
            我ながら資格取得はかなり頑張っていると言って良いと思う😤ww<br>
            (これからも3ヶ月に1つくらいは資格取りたいな〜)<br>
          </p>
          <p>
            出身は愛知県の岡崎市ということろです！<br>
            最近は東海オンエアの人気で岡崎市が盛り上がっているとか、、<br>
            実家に帰っても外で遊ばず東京に戻ってきてしまうので、一回ゆっくり岡崎観光してみたい
          </p>
          <p>
            中学生の頃に見たアベンジャーズで、キャプテン・アメリカに衝撃を受けて筋トレをやるようになりました！<br>
            コロナもだいぶ減ってきて、今年からジム再開したのでちょっとずキャプテン・アメリカに近づいている気がする、、🇺🇸<br>
          </p>
        </section>

        <!-- 職歴 -->
        <h2 id="my-job-experience">2. 今まで経験した仕事</h2>
        <section>
          <p>
            続いては、僕が今まで経験してきたお仕事についてです〜<br>
            僕が就職した会社はSlerと呼ばれる会社で、簡単にいうとITに特化した人材を派遣するような会社です。
          </p>
          <p>
            なので、僕が実際に働いている場所は自分の会社ではなく、<br>
            自分の会社と契約のあるお客さんのオフィスで働いています。<br>
            それを意識しながら、以下の経験した仕事を読んでいただけるとわかりやすいと思います✨
          </p>
          <p>
            僕が今まで経験した仕事は大きく分けて以下の3つです。<br>
            (文章が長くなってしまったので折りたたみ式にしました！
            "+"をクリックすると開きます)
          </p>

          <!-- Block 1 -->
          <p>
            <span class="emphasize">1. 製造系(ロボット)会社の運用・保守業務</span>
          </p>
          <div class='career-block'>
            <p>
              <span class="item-name">メイン業務:</span><br>
              ・ロボット開発元企業(海外)との英語でのやりとり<br>
              ・ロボットの仕様書翻訳業務<br>
              ・問い合わせチャットボットの質問と回答の設定<br>
              ・コールセンター担当者との打ち合わせ<br>
              ・コールセンター担当者用のフローチャート作成
            </p>
            <p>
              <span class="item-name">期間: </span>9ヶ月
            </p>
            <p>
              <span class="item-name">必要スキル: </span><br>
              ・ある程度の英会話能力<br>
              ・基本的な報連相のスキル<br>
            </p>
            <p>
              ロボット系の会社での運用・保守業務は僕が社会人になってから初めての仕事でした。
            </p>
            <p>
              実際に働くお客さんを決める際に、どんな業務の職場に行きたいか自分の会社が希望を聞いてくれるのですが、そこで僕は「できれば英語を使いたいです！」と言いました。<br>
              (IT企業に来ておいていきなり英語使いたいとは我ながらわがままだった気がしますww)
            </p>
            <p>
              幸いにも英語を使うことができるお客さん先があり、入れてもらったのがロボット系の会社の運用・保守でした。
            </p>
            <p>
              次のトピックの中でも記載していますが、もともと開発がしたくてIT業界に入ったというのもあり、運用・保守の業務は僕の中であまりモチベーションが保てずに9ヶ月でやめることにしました、、
            </p>
            <p>
              しかしながら、初めての現場ということもあり、<br>
              報連相のスキルや仕事の進め方、偉い人との話し方など仕事をする上でのベースとなるスキルをこの現場で磨くことができました！<br>
            </p>
            <p>
              また、学生時代に留学で成長させていた英語力も、実際に仕事で使うことでより磨くことができたので、僕の初の現場としては何も文句のない現場で、色々と学ばせていただきました
            </p>
          </div>

          <!-- Block 2 -->
          <p>
            <span class="emphasize">2. 外資系保険会社の要件定義・ブリッジエンジニア</span>
          </p>
          <div class='career-block'>
            <p>
              <span class="item-name">メイン業務:</span><br>
              ・保険申込Webアプリの画面要件定義<br>
              ・海外の開発チームへの要件説明(英語)<br>
              ・保険の営業さんからの申込みアプリ使用に関する問い合わせ対応<br>
              ・開発チームと他チームを繋ぐ連携役(日本語と英語を併用)<br>
              ・本番障害の対応状況とりまとめと、その報告<br>
              ・開発チーム新メンバーへの既存機能説明(英語)
            </p>
            <p>
              <span class="item-name">期間: </span>2年9ヶ月
            </p>
            <p>
              <span class="item-name">必要スキル: </span><br>
              ・ビジネスレベルに近い英会話能力<br>
              ・要件定義のための論理的思考能力<br>
              ・開発に対する多少の理解<br>
              ・基本的な報連相のスキル
            </p>
            <p>
              このお客さん先では比較的長く仕事をさせていただきました。<br>
              というもの、ここではお客さん先で仕事を始めて1年半くらいったったときに、一度チームの移動があったため、期間は2年9ヶ月働いていましたが、その間に2つのチームで異なる仕事をさせていただきました。
            </p>
            <p>
              ここの仕事で得られたスキルとして最も大きかったのが英語力です。
            </p>
            <p>
              最初は要件定義(どんなアプリを作るのか細かい資料を作ること)の要員でお客さん先に入り、いきなり海外の開発チームにあまり理解していない保険申込みアプリの要件を英語で説明する必要があったので嫌でも英語力が上がりました🤣
            </p>
            <p>
              チーム移動があってからは、開発チームの中で他のチームと連携するための窓口担当のようなポジションについたのですが、開発チームメンバーの8割がインドの方々で英語でのコミュニケーションになるため、チーム移動してからも英語力を爆上げさせることができましたww
            </p>
            <p>
              また、現場とは別ですがこのお客さん先にいる期間にかなりの資格を取得したので、
              それらの資格勉強を通して得た知識が今の仕事や自己学習の役に立っています。
            </p>
          </div>

          <!-- Block 3 -->
          <p>
            <span class="emphasize">3. クレカ会社の保守・運用</span>
          </p>
          <div class='career-block'>
            <p>
              <span class="item-name">メイン業務: </span><br>
              ・Webページへのバナー表示<br>
              ・広告タグの設置や削除<br>
              ・別部署からのWebページ施策実施可否を確かめるためのPoC実施
            </p>
            <p>
              <span class="item-name">期間: </span>6ヶ月経過(現在もここで仕事中)
            </p>
            <p>
              <span class="item-name">必要スキル: </span><br>
              ・HTMLタグの理解とコーディング<br>
              ・CSSの理解とコーディング<br>
              ・JavaScriptの理解とコーディング<br>
              ・基本的な報連相のスキル<br>
            </p>
            <p>
              このお客さん先は僕が初めて任された業務としてプログラムを組むことができた記念すべきお客さん先なのです✨
            </p>
            <p>
              もともと、プログラミングを組むような業務がやりたくてIT業界に入ってから4年目でようやく目標を達成することができました〜
              (現在もここに所属していて、毎日コードを書いています)
            </p>
            <p>
              ガッツリ開発という現場ではないですが、JavaScriptをメインにあれこれ考えながらプログラミングを組んでいます!
            </p>
          </div>
        </section>

        <h2 id="reasons-to-choose-it">3. IT業界での就職を選んだ理由</h2>
        <section>
          さて、3つ目のトピックは僕がIT業界を選んだ理由についてです。
          <p>
            理由は色々あるんですが、特に大きなのは次の2つです。
          </p>
          <ol>
            <li>自分が素直にやってみたいと思えることがプログラミングだった</li>
            <li>IT分野に将来性があると思った</li>
          </ol>
          <p>
            まず一つ目の理由ですが、僕が素直にプログラミングをやれるようになりたいと強く思ったことです！
          </p>
          <p>
            僕は昔から飽き性でして、、ww<br>
            おそらく中途半端な気持ちで始めた仕事は途中で手放してしまうと思ったんです<br>
            (最近はよく営業とかコンサルに向いていると言ってもらえるのですが、おそらく自分がその気にならない限りはすぐやめてしまう気がします🤣)
          </p>
          <p>
            なので、就職活動を始める前に僕が子供の頃に野球選手に憧れたみたいなものすごくやってみたいこと、目指したいものを探したときにプログラミングができる人！だったわけです<br>
            (おそらくアイアンマンへの憧れが強かったからこの結果になった気がしていますww)
          </p>
          <p>
            二つ目の理由は、シンプルですが将来性です。
          </p>
          <p>
            僕が就活を始める頃は”AI"や”IoT"、"5G"なんかが話題になっていたので、僕は大学生ながらにきっとこの先の社会ではITの技術がいろんな分野と混ざり合うからITのスキルがあればどの分野でも活躍できて、お金の心配はあんまりないかなと考えていた記憶があります。
          </p>

        </section>

        <h2 id="about-my-future">4. 今後どうしていきたいのか</h2>
        <section>
          最後に今後どうしていきたいかについてです。
          <p>
            まだまだ不透明な部分はありますが、現時点では今後について以下のように考えています！
          </p>
          <ol>
            <li>27 ~ 30歳 : とにかく技術を伸ばすためにいろんなことにチャレンジ</li>
            <li>30 ~ 35歳 : 技術の方向性(AIやデータ分析など)を変えるか、マネジメントをやるかの２択から方向性を決める</li>
            <li>35 ~ 40歳 : 決めた方向性に向けて進みながらできれば人脈を広げるww</li>
            <li>40 ~ : まだ未定(でもこの頃には奥さんと子供はいてほしいな〜)</li>
          </ol>
          <p>
            まだまだぼんやりした部分は多いですが、僕自身の考えとしては最後までITに関わる仕事をしたいと思っています。
          </p>
          <p>
            ITに関する仕事をする中でいろんな選択肢があると思うのですが、個人的に20代のうちに技術力を伸ばしておかなければ30代で選べる選択肢が狭くなってしまう気がしているので、20代のうちは勉強に使う時間をしっかりととって、技術面を飛躍させます！
          </p>
        </section>

        <!-- まとめ -->
        <h2 id="summary">5. まとめ</h2>
        <p>
          僕の自己紹介ページはいかがだったでしょうか？
        </p>
        <p>
          僕の性格や目指しているものなど少しでも読んでくれたみなさんに伝わっていると嬉しいです☺️
        </p>
        <p>
          まだまだ未熟者ですが、記事投稿を頑張っていきますのでよろしくお願いします！
        </p>

      </div>
    </div>
  </section>

  <!-- ページフッター読み込み -->
  <?php get_template_part('sub_parts/page_footer'); ?>

  <!-- JS読み込み -->
  <?php get_template_part('sub_parts/footer_globe_brown'); ?>
  <?php get_footer(); ?>

  <script>
    const targets = document.querySelectorAll('.emphasize');

    function toggle_acordion() {
      const result = this.classList.toggle('--show');
      const parent = this.parentElement;

      const sibiling = parent.nextElementSibling;
      if (result) {
        sibiling.style.display = "block";
      } else {
        sibiling.style.display = "none";
      }

    }

    for (let i = 0; i < targets.length; i++) {
      targets[i].addEventListener('click', toggle_acordion);
    }
  </script>

</body>

</html>