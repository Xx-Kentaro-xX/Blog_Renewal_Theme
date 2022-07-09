<?php
// カスタムタイプ - 技術
add_action('init', function () {
  register_post_type('tech', [
    'label' => '技術',
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => [
      'title',
      'editor',
      'author',
      'thumbnail',
      'custom-fields',
      'revision'
    ],
    'show_in_rest' => true,
  ]);
  // タクソノミー(=カテゴリ)追加
  register_taxonomy('tech_type', 'tech', [
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy('tech_tag', 'tech', [
    'label' => '技術 - タグ',
    'rewrite' => array('slug' => 'tech_tag'),
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});

// カスタムタイプ - 仕事
add_action('init', function () {
  register_post_type('work', [
    'label' => '仕事',
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => [
      'title',
      'editor',
      'author',
      'thumbnail',
      'custom-fields',
      'revision'
    ],
    'show_in_rest' => true,
  ]);
  // タクソノミー(=カテゴリ)追加
  register_taxonomy('work_type', 'work', [
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy('work_tag', 'work', [
    'label' => '仕事 - タグ',
    'rewrite' => array('slug' => 'work_tag'),
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});

// カスタムタイプ - 本
add_action('init', function () {
  register_post_type('book', [
    'label' => '本',
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => [
      'title',
      'editor',
      'author',
      'thumbnail',
      'custom-fields',
      'revision'
    ],
    'show_in_rest' => true,
  ]);
  // タクソノミー(=カテゴリ)追加
  register_taxonomy('book_type', 'book', [
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy('book_tag', 'book', [
    'label' => '本 - タグ',
    'rewrite' => array('slug' => 'book_tag'),
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});

// 全ての投稿(通常&カスタム)を一覧表示するためだけのタイプ(管理画面では非表示)
add_action('init', function () {
  register_post_type('all', [
    'public' => false,
    'publicly_queryable' => true,
    'has_archive' => true,
  ]);
});


// アイキャッチ画像設定有効化
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

// アイキャッチ有無チェック
function thumbnail_check($postID)
{
  // 対象ページに対してサムネイル(アイキャッチ)が設定されているかチェック
  if (has_post_thumbnail($postID)) {
    // 現在表示しているサムネの画像IDを取得
    $id = get_post_thumbnail_id();
    // 画像IDを引数として渡し、画像を引っ張ってくる
    $img = wp_get_attachment_image_src($id, array(600, 400));
  } else {
    if (is_single()) {
      // 投稿ページであればサムネイルのサイズを600*400にする
      $img = wp_get_attachment_image_src(23, array(600, 400));
    } else {
      // 投稿ページ以外(=ブログトップ)であればサムネイルのサイズを200*100にする
      $img = wp_get_attachment_image_src(23, array(200, 132));
    }
  }
  return $img;
}


// ピックアアップ記事(3つまで記事IDを指定！)
function get_pickup_array()
{
  $query = array(
    0 => 2830,
    1 => 2586,
    2 => 4088
  );

  return $query;
}

// カスタムフィールド(PV数)の値を更新
function set_pv_count($post_id)
{
  // pv数を表すカスタムフィールド名('post_views_count')を変数として用意
  $custom_field_key = 'post_views_count';
  // get_post_meta()で投稿記事に対して現時点で設定されているPV数('post_views_count')を取得する(第3引数をtrueにすると文字列で結果が返ってくる)
  $pv_number = get_post_meta($post_id, $custom_field_key, true);
  // pv数が取得できなかった場合
  if ($pv_number == "") {
    // 一度、pv数のカスタムフィールドを削除して、pv数が0の状態でセットする(カスタムフィールドの初期化も担う)
    delete_post_meta($post_id, $custom_field_key);
    add_post_meta($post_id, $custom_field_key, 0);
  } else {
    // pv数が取得できたらPV数をプラス１する
    $pv_number++;
    update_post_meta($post_id, $custom_field_key, $pv_number);
  }
}

// PV数を管理画面に表示
function manage_posts_columns($columns)
{
  $columns['post_views_count'] = "PV数";
  return $columns;
}
function add_column($column_name, $post_id)
{
  if ($column_name == 'post_views_count') {
    $stitle = get_post_meta($post_id, 'post_views_count', true);
  }
  if (isset($stitle) && $stitle) {
    $title_label =  attribute_escape($stitle);
  } else {
    $title_label =  __('None');
  }
}
add_filter('manage_posts_columns', 'manage_posts_columns');
add_action('manage_posts_custom_column', 'add_column', 10, 2);



// 投稿(post)のアーカイブページ用
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'post'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// アーカイブページ 表示投稿出しわけ処理
function return_articles_query($post_type)
{
  if ($post_type == 'tech') {
    $args = array(
      'post_type' => 'tech',
      'post_status' => 'publish'
    );
  } elseif ($post_type == 'book') {
    $args = array(
      'post_type' => 'book',
      'post_status' => 'publish'
    );
  } elseif ($post_type == 'work') {
    $args = array(
      'post_type' => 'work',
      'post_status' => 'publish'
    );
  } elseif ($post_type == 'post') {
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish'
    );
  } else {
    $args = array(
      'post_type' => array('post', 'tech', 'book', 'work'),
      'post_status' => 'publish'
    );
  }

  $query = new WP_Query($args);
  return $query;
}

// アーカイブページ タイトル出し分け
function return_archive_title($post_type)
{
  if ($post_type == 'tech') {
    $title_label =  "技術";
  } elseif ($post_type == 'book') {
    $title_label =  "本";
  } elseif ($post_type == 'work') {
    $title_label =  "仕事";
  } elseif ($post_type == 'post') {
    $title_label =  "その他";
  } else {
    $title_label =  "記事一覧";
  };

  return $title_label;
}
