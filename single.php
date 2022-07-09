<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ヘッダー読み込み -->
  <?php get_header(); ?>
  <!-- 各投稿記事のPVカウント用 -->
  <?php
  // 記事のビュー数を更新(ログイン中・クローラーは除外)
  if (!is_user_logged_in() && !is_robots()) {
    set_pv_count(get_the_ID());
  }
  ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css">


<body>
  <?php get_template_part('sub_parts/page_header'); ?>

  <!-- hero -->
  <div class="hero">
    <div id="hero_animation">
      <h1 class="single-article-title"><?php the_title(); ?></h1>
    </div>
  </div>

  <hr />

  <div class="mobile-single-bar">
    <!-- モバイル用の投稿情報は別パーツから読み込み(内容はsidebarとほぼ同じ) -->
    <?php get_template_part('sub_parts/mobile-single-bar'); ?>
  </div>

  <hr class="mobile-single-hr">

  <section class="single-article-container">
    <div class="single-article-content">
      <!-- サムネイル画像 -->
      <?php $img = thumbnail_check(get_the_ID()); ?>
      <img src="<?php echo $img[0]; ?>" alt="" class="single-article-thumbnail">
      <!-- 記事の内容 -->
      <div class="single-article-content-description">
        <?php the_content(); ?>
      </div>
    </div>
    <!-- サイドバー読み込み -->
    <?php get_sidebar(); ?>
  </section>

  <!-- ページフッター読み込み -->
  <?php get_template_part('sub_parts/page_footer'); ?>

  <!-- JS読み込み -->
  <?php get_template_part('sub_parts/footer_globe_green'); ?>
  <?php get_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/single.js"></script>
</body>

</html>