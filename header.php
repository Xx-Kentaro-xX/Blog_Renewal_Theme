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

<!-- Google AdSense-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7122845678164047" crossorigin="anonymous"></script>

<!-- favicon -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/android-touch-icon.png">
<!-- 全画面共通CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sanitize.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
<!-- プライバシーポリシー・免責事項ポップアップ用 css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/popup.css" />

<?php wp_head(); ?>