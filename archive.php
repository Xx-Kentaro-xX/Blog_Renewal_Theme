<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/archive.css">
</head>

<body>
  <?php get_template_part('sub_parts/page_header'); ?>
  <?php
  $query = return_articles_query(get_post_type());
  if ($query->have_posts()) :
  ?>
    <!-- hero -->
    <div class="hero">
      <div id="hero_animation">
        <h1 class="hero-title">
          <?php echo return_archive_title(get_post_type());  ?>
        </h1>
      </div>
    </div>

    <hr />

    <!-- article list section -->
    <section class="articles-container">
      <div class="articles-area">

        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <a class="article-block" href="<?php the_permalink() ?>" target="_blank">
            <div class="article-img-container">
              <?php $img = thumbnail_check(get_the_ID()); ?>
              <img src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>" class="article-thumbnail" />
            </div>
            <p class="article-post-day">投稿日: <?php the_time('Y年m月d日'); ?></p>
            <h3 class="article-title"><?php the_title(); ?></h3>
            <div class="article-description"><?php the_excerpt(); ?></div>
          </a>
          <hr class="article-hr">
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </section>

    <!-- ページフッター読み込み -->
    <?php get_template_part('sub_parts/page_footer'); ?>

    <!-- JS読み込み -->
    <?php get_template_part('sub_parts/footer_bird_brown'); ?>
    <?php get_footer(); ?>

</body>

</html>