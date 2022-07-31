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
      $args = array(
        'post_type' => array('post', 'tech', 'book', 'work'),
        'p' => $pickup_list[$i],
        'post_status' => 'publish'
      );
      $query = new WP_Query($args);
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