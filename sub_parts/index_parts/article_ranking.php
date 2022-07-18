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