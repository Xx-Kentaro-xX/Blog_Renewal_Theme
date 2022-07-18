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