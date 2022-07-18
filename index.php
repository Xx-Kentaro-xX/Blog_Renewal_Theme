<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <!-- Header -->
  <?php get_template_part('sub_parts/page_header'); ?>

  <!--Hero -->
  <div class="hero">
    <div id="hero_animation">
      <h1 class="hero-title">
        Kentaro<span class="hero-titile orange">Gram</span>
      </h1>
    </div>
  </div>

  <hr />

  <!-- Mobile nav -->
  <?php get_template_part('sub_parts/mobile-top-nav'); ?>

  <hr class="mobile-hr">

  <!-- Article new -->
  <!-- 新着記事パーツ読み込み -->
  <?php get_template_part('sub_parts/index_parts/article_new'); ?>

  <!-- About Blog -->
  <div class="anchor-adjust-div" id="about-blog"></div>
  <hr class="hr-reverse" />
  <!-- ブログについてパーツ読み込み -->
  <?php get_template_part('sub_parts/index_parts/about_blog'); ?>

  <hr />

  <!-- Article Pickup & Ranking-->
  <div class="article-area-container">
    <!-- ピックアップ記事パーツ読み込み -->
    <?php get_template_part('sub_parts/index_parts/article_pickup'); ?>
    <!-- 記事ランキングパーツ読み込み -->
    <?php get_template_part('sub_parts/index_parts/article_ranking'); ?>
  </div>

  <!-- Category -->
  <div class="anchor-adjust-div" id="category"></div>
  <hr class="hr-reverse" />
  <!-- カテゴリパーツ読み込み -->
  <?php get_template_part('sub_parts/index_parts/category'); ?>

  <!-- About author -->
  <div class="anchor-adjust-div" id="about-author"></div>
  <hr />
  <!-- 筆者についてパーツ読み込み -->
  <?php get_template_part('sub_parts/index_parts/about_author'); ?>

  <!-- ページフッター読み込み -->
  <?php get_template_part('sub_parts/page_footer'); ?>

  <!-- プライバシーポリシー・免責事項ポップアップ用パーツ読み込み -->
  <?php get_template_part('sub_parts/popup'); ?>

  <!-- JS読み込み -->
  <?php get_template_part('sub_parts/footer_bird'); ?>
  <?php get_footer(); ?>

</body>

</html>