<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('sub_parts/page_header'); ?>

  <!-- hero -->
  <div class="hero">
    <div id="hero_animation">
      <h1 class="hero-title">
        Kentaro<span class="hero-titile orange">Gram</span>
      </h1>
    </div>
  </div>

  <hr />

  <?php get_template_part('sub_parts/mobile-top-nav'); ?>

  <hr class="mobile-hr">

  <!-- Article New -->
  <?php
  $args = array(
    'post_type' => array('post', 'tech', 'book', 'work'),
    'post_status' => 'publish'
  );
  $query = new WP_Query($args);
  ?>
  <?php if ($query->have_posts()) : ?>

    <section class="article-new">
      <h2 class="article-new-title">新着</h2>
      <div class="article-new-row">
        <?php for ($i = 0; $i < 3; $i++) : ?>
          <?php $query->the_post(); ?>
          <a class="article-new-block" href="<?php the_permalink() ?>" target="_blank">
            <div class="article-new-img-container">
              <?php $img = thumbnail_check(get_the_ID()); ?>
              <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="article-new-thumbnail" />
            </div>
            <p class="article-post-day"><?php the_time('Y年m月d日'); ?></p>
            <div class="article-new-description"><?php the_title(); ?></div>
          </a>
        <? endfor; ?>
      </div>
      <div class="article-new-row">
        <?php for ($i = 0; $i < 3; $i++) : ?>
          <?php $query->the_post(); ?>
          <a class="article-new-block" href="<?php the_permalink() ?>" target="_blank">
            <div class="article-new-img-container">
              <?php $img = thumbnail_check(get_the_ID()); ?>
              <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="article-new-thumbnail" />
            </div>
            <p class="article-post-day"><?php the_time('Y年m月d日'); ?></p>
            <div class="article-new-description"><?php the_title(); ?></div>
          </a>
        <? endfor; ?>
      </div>
      <div class="article-new-list-container">
        <a class="article-new-list" href="/all">
          <button class="button-greenback">もっと見る</button>
        </a>
      </div>
    </section>
  <?php endif; ?>

  <hr class="hr-reverse" />

  <!-- about-blog -->
  <section class="about-blog" id="about-blog">
    <h2 class="about-blog-title">このブログについて</h2>
    <div class="about-blog-description">
      <div class="about-blog-welcome">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome.png" alt="">
      </div>
      <p>みなさん、KentaroGramへようこそ！</p>
      <p>
        このブログは僕が文系出身のエンジニアで開発を目指している身として同じような立場の人に有益な情報を発信できないかと思い、
        <br>
        2021年4月に公開したブログです！
      </p>
      <p>
        僕自身、大学の専攻が文系(英語専攻)でありながら、IT業界で開発エンジニアとして活躍したいと思い、IT業界に就職しましたが、
        <br>
        やはりそうそう上手くは行かず、苦労の連続です、、(今も苦労してます🤣ww)
      </p>
      <p>
        具体的な数は把握していませんが、おそらく僕と同じように文系出身の方でIT業界で活躍したい！という人が多い今日この頃、
        <br>
        僕が失敗したことや学んだことをこのブログで発信してぜひ僕と同じような境遇の人の助けになればと思っています😆
      </p>
      <span class="about-blog-emphasize">
        と！ここまでが去年までの僕がこのブログでやろうとしていたことですww
      </span>
      <p>
        2022年になり、ちょっと思いました、、<br>
        ブログのトピックをIT関連に固定した影響で良いトピックが見つからず記事のモチベがない、、
      </p>
      <p>
        何よりも、お堅い感じのブログは自分のキャラとか性格に合っていない、、と<br>
        (お前のやる気の問題だろ、、と思ったそこのあなた！正しいけれど心にしまってください🙄ww)
      </p>
      <span class="about-blog-emphasize">
        というわけで！
      </span>
      <p>
        これからはトピックはあまり縛らずに自分の書きたい記事を書いていこうと思います〜<br>
        ビジネスの本とか、動物に関する話題、筋トレなどなど好きなことはごちゃ混ぜで！
      </p>
      <p>
        もちろん今まで投稿してきたIT系の記事もちょこちょこ投稿します！<br>
        ただ、僕が勉強したいと思うITの内容なのでどちらかというとインフラではなくて、Webやアプリ開発の内容になると思います
      </p>
      <p>
        なかなか適当な感じのブログになってしまいますが、気になる記事だけ時間があるときに読んでもらえると記事を書いた身としては嬉しいです☺️
      </p>
      <p>
        何卒、よろしくお願いしま〜す
      </p>
    </div>
  </section>

  <hr />

  <!-- Article Pickup & Ranking-->
  <div class="article-area-container">

    <!-- Pickup -->
    <section class="article-pickup">
      <h2 class="article-title">個人的おすすめ</h2>
      <div class="article-block-container">
        <!-- ピックアップ記事の投稿IDリストを受け取り -->
        <?php $pickup_list = get_pickup_array(); ?>
        <!-- 受け取った配列の要素数を変数に入れる(基本的には3つのはず！) -->
        <?php $count = count($pickup_list); ?>
        <!-- forループで投稿IDによる記事取得を$countの回数だけ繰り返す -->
        <?php
        for ($i = 0; $i < $count; $i++) :
          // new WP_Queryが記事情報のオブジェクト(=投稿IDによって取得された特定の記事情報)
          $query = new WP_Query(array('p' => $pickup_list[$i]));
          if ($query->have_posts()) :
        ?>
            <?php $query->the_post() ?>
            <a class="article-pickup-block" href="<?php echo get_the_permalink(); ?>" target="_blank">
              <div class="article-img-container">
                <?php $img = thumbnail_check(get_the_ID()); ?>
                <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="article-thumbnail" />
              </div>
              <p class="article-post-day">投稿日: <?php the_time('Y年m月d日'); ?></p>
              <div class="article-description"><?php the_title(); ?></div>
            </a>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        <?php endfor; ?>
      </div>
      <a class="article-list-button" href="/all"><button class="button-greenback">記事一覧へ</button></a>
    </section>

    <!-- Ranking -->
    <section class="article-ranking">
      <h2 class="article-title">ランキング</h2>
      <div class="article-block-container">
        <?php
        $args = array(
          array('post', 'tech', 'book', 'work'),
          'post_status' => 'publish',
          'meta_key' => 'post_views_count',
          'orderby' => 'meta_value_num',
          'post_per_page' => 3,
          'order' => 'DESC',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          // ランキングとして表示する記事は3つなので$i<3を条件とする
          for ($i = 0; $i < 3; $i++) :
            $query->the_post();
        ?>
            <a class="article-ranking-block" href="<?php echo get_the_permalink(); ?>" target="_blank">
              <div class="article-img-container">
                <?php $img = thumbnail_check(get_the_ID()); ?>
                <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="article-thumbnail" />
              </div>
              <p class="article-post-day"><?php the_time('Y年m月d日'); ?></p>
              <div class="article-description"><?php the_title(); ?></div>
            </a>
            <?php wp_reset_postdata(); ?>
          <?php endfor; ?>
        <?php endif; ?>
      </div>
      <a class="article-list-button" href="/all"><button class="button-greenback">記事一覧へ</button></a>
    </section>
  </div>

  <hr class="hr-reverse" />

  <!-- Category -->
  <section class="category" id="category">
    <h2 class="category-title">カテゴリー</h2>
    <div class="category-container">
      <a class="category-card" href="/tech">
        <div class="category-card-img-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/computing.png');"></div>
        <div class="category-card-name">技術</div>
      </a>
      <a class="category-card" href="/work">
        <div class="category-card-img-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/stay-at-home.png');"></div>
        <div class="category-card-name even">仕事</div>
      </a>
      <a class="category-card" href="/book">
        <div class="category-card-img-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/read.png');"></div>
        <div class="category-card-name">本</div>
      </a>
      <a class="category-card" href="/post">
        <div class="category-card-img-4" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/machine.png');"></div>
        <div class="category-card-name even">その他</div>
      </a>
    </div>
    <!-- モバイル表示 -->
    <div class="category-mobile-container">
      <div class="category-mobile-row_1">
        <a class="category-card" href="/tech">
          <div class="category-card-img-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/computing.png');"></div>
          <div class="category-card-name">技術</div>
        </a>
        <a class="category-card" href="/work">
          <div class="category-card-img-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/stay-at-home.png');"></div>
          <div class="category-card-name even">仕事</div>
        </a>
      </div>

      <div class="category-mobile-row_2">
        <a class="category-card" href="/book">
          <div class="category-card-img-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/read.png');"></div>
          <div class="category-card-name">本</div>
        </a>
        <a class="category-card" href="/post">
          <div class="category-card-img-4" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/category-icon/machine.png');"></div>
          <div class="category-card-name even">その他</div>
        </a>
      </div>
    </div>
  </section>

  <hr />

  <section class="about-author" id="about-author">
    <h2 class="about-author-title">筆者について</h2>
    <div class="about-author-description">
      <div class="about-author-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face.jpg" alt="Kentaro顔写真">
        <p class="about-author-name">
          Kentaro
        </p>
      </div>
      <div class="about-author-profile">
        <p>
          <span class="profile-item">年齢:&nbsp;</span> <?php echo date('Y') - 1996; ?>
        </p>
        <p>
          <span class="profile-item">名前:&nbsp;</span>ケンタロウ
        </p>
        <p>
          <span class="profile-item">出身:&nbsp;</span>愛知県
        </p>
        <p>
          <span class="profile-item">職業:&nbsp;</span>システムエンジニア(社会人<?php echo date('Y') - 2017 ?>年目)
        </p>
        <p>
          <span class="profile-item">大学の専攻:&nbsp;</span>英語専攻
        </p>
        <p>
          <span class="profile-item">好きなもの:&nbsp;</span><br>
          筋トレ、長風呂、ディズニー、StarWars、Marvelなどなど
        </p>
      </div>

    </div>
    <div class="about-author-button-container">
      <a class="about-author-more" href="/about_me">
        <button class="button-greenback">もっと見る</button>
      </a>
    </div>
  </section>

  <!-- ページフッター読み込み -->
  <?php get_template_part('sub_parts/page_footer'); ?>

  <!-- JS読み込み -->
  <?php get_template_part('sub_parts/footer_bird'); ?>
  <?php get_footer(); ?>

</body>

</html>