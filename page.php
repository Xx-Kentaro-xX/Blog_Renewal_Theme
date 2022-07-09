<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ヘッダー読み込み -->
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css">

<body>
  <!-- ページヘッダー読み込み -->
  <?php get_template_part('sub_parts/page_header'); ?>

  <!-- hero -->
  <div class="hero">
    <div id="hero_animation">
      <h1 class="single-article-title"><?php the_title(); ?></h1>
    </div>
  </div>

  <hr />

  <section class="single-article-container">
    <div class="single-article-content">
      <!-- 記事の内容 -->
      <div class="single-article-content-description">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <!-- ページフッター読み込み -->
  <?php get_template_part('sub_parts/page_footer'); ?>

  <!-- JS読み込み -->
  <?php get_template_part('sub_parts/footer_globe_brown'); ?>
  <?php get_footer(); ?>

</body>

</html>