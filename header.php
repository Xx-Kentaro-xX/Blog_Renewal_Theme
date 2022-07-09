<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width='device-width', initial-scale=1.0" />
<title>
  <?php
  global $page, $paged;
  if (is_front_page()) : //トップページ
    echo 'KentaroGram';
  // bloginfo('name');
  elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
    wp_title('|', true, 'right');
    bloginfo('name');
  elseif (is_page()) : //固定ページ
    wp_title('|', true, 'right');
    bloginfo('name');
  elseif (is_single()) : //投稿ページ
    wp_title('|', true, 'right');
    bloginfo('name');
  elseif (is_category()) : //カテゴリーページ
    single_term_title();
    echo '｜カテゴリーページ';
  elseif (is_tag()) : //タグページ
    single_term_title();
    echo '｜タグページ';
  elseif (is_404()) : //404ページ
    echo '404|';
    bloginfo('name');
  endif;
  ?>
</title>
<meta nama="description" content="....." />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WKDXLXHL04"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-WKDXLXHL04');
</script>
<!-- 全画面共通CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sanitize.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />

<?php wp_head(); ?>