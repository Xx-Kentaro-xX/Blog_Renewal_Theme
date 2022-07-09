<div class="single-article-side-bar">
  <div class="single-article-side-bar-title">
    この記事の情報
  </div>
  <div class="single-article-side-bar-info">
    <p>投稿日: <?php the_time('Y年m月d日'); ?></p>
    <p>最終更新日: <?php the_modified_date('Y年m月d日'); ?></p>
    <br>
    <p>カテゴリー:<br>
      <?php
      // ポストタイプの判定()
      $post_type = get_post_type();
      if ($post_type ==  'tech') {
        $taxonomy_name = 'tech_type';
      } elseif ($post_type ==  'work') {
        $taxonomy_name = 'work_type';
      } elseif ($post_type ==  'book') {
        $taxonomy_name = 'book_type';
      } elseif ($post_type ==  'post') {
        $taxonomy_name = 'post';
      } else {
        $taxonomy_name = '';
      }
      // カテゴリー出力処理
      $terms = get_the_terms(get_the_ID(), $taxonomy_name);
      // カスタム投稿の場合
      if ($terms && $taxonomy_name != 'post') :
        foreach ($terms as $term) :
      ?>
          <a href="<?php echo get_term_link($term); ?>">
            ・<?php echo $term->name; ?>
          </a>
          <br>
        <? endforeach; ?>
        <!-- 通常投稿('post')の場合 -->
        <?php elseif ($taxonomy_name == 'post') :
        $categories = get_the_category(get_the_ID());
        // カテゴリがあった場合のみ、<a>タグ出力処理を実行
        // (投稿ではデフォルトでUncategorizedが設定されるが念の為)
        if ($categories) :
          foreach ($categories as $category) :
        ?>
            <a href="<?php echo get_category_link($category); ?>">
              ・<?php echo $category->name; ?>
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>
    </p>
    <p>タグ: <br>
      <?php
      // ポストタイプの判定
      $post_type = get_post_type();
      if ($post_type ==  'tech') {
        $taxonomy_name = 'tech_tag';
      } elseif ($post_type ==  'work') {
        $taxonomy_name = 'work_tag';
      } elseif ($post_type ==  'book') {
        $taxonomy_name = 'book_tag';
      } elseif ($post_type ==  'post') {
        $taxonomy_name = 'post';
      } else {
        $taxonomy_name = '';
      }
      // タグ出力処理
      $terms = get_the_terms(get_the_ID(), $taxonomy_name);
      // カスタム投稿の場合
      if ($terms && $taxonomy_name != 'post') :
        foreach ($terms as $term) :
      ?>
          <a href="<?php echo get_term_link($term); ?>">
            <?php echo $term->name; ?>
          </a>
          <span> / </span>
        <?php endforeach; ?>
        <!-- 通常投稿('post')の場合 -->
        <?php elseif ($taxonomy_name == 'post') :
        $tags = get_the_tags(get_the_ID());
        // タグがあった場合のみ、<a>タグ出力処理を実行
        if ($tags) :
          foreach ($tags as $tag) :
        ?>
            <a href="<?php echo get_category_link($tag); ?>">
              <?php echo $tag->name; ?>
            </a>
            <span> / </span>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>

    </p>
  </div>
</div>