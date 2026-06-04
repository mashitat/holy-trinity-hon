<?php

// ショートコード実行
add_filter('widget_text', 'do_shortcode');

// title
function my_theme_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'my_theme_setup');

// ページタイトルを取得
function get_page_title() {
  $page_title = wp_get_document_title();

  return $page_title;
}

//
function title_separator_change( $sep ){
    $sep = '|';
    return $sep;
}
add_filter('document_title_separator', 'title_separator_change');

//
function my_document_title_parts( $title ) {
	if ( is_single() || is_page() ) {
		$catName = get_the_category();
		$catName = $catName[0];
        $title['title'] .= ' | '.get_cat_name($catName->term_id);
	}
	return $title;
}
add_filter( 'document_title_parts', 'my_document_title_parts' );

// add category nicenames in body and post class
function category_id_class( $classes ) {
	global $post;
	foreach ( get_the_category( $post->ID ) as $category ) {
		$classes[] = $category->category_nicename;
	}
	return $classes;
}
add_filter( 'post_class', 'category_id_class' );
add_filter( 'body_class', 'category_id_class' );


//カテゴリーメタディスクリプション用の説明文を取得
function get_meta_description_from_category(){
  $cate_desc = trim( strip_tags( category_description() ) );
  if ( $cate_desc ) {//カテゴリ設定に説明がある場合はそれを返す
    return $cate_desc;
  }
  $cate_desc = '「' . single_cat_title('', false) . '」の記事一覧です。' . get_bloginfo('description');
  return $cate_desc;
}

//カテゴリメタキーワード用のキーワードを取得
function get_meta_keyword_from_category(){
  return single_cat_title('', false) . ',記事一覧,聖三一幼稚園';
}



/*==============================
固定ページカテゴリ追加用コード
==============================*/

add_action( 'init', 'my_add_pages_categories' ) ; 
function my_add_pages_categories()
{
    register_taxonomy_for_object_type( 'category', 'page' ) ;
}
add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
function my_set_page_categories( $query )
{
    if ( $query->is_category== true && $query->is_main_query()){
        $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
    }
}

//タグを一覧表示かつチェックボックスで選べるようにする
function re_register_post_tag_taxonomy() {
  $tag_slug_args = get_taxonomy('post_tag');
  $tag_slug_args->hierarchical = true;
  $tag_slug_args->meta_box_cb = 'post_categories_meta_box';
  register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action( 'init', 're_register_post_tag_taxonomy', 1 );


//投稿記事のスラッグをID番号で採番
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if (preg_match( '/(%[0-9a-f]{2})+/', $slug )) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

//投稿一覧画面にカスタムフィールドの表示カラムを追加
function my_custom_posts_columns( $defaults ) {
  $defaults['event_date'] = '開催日時';
return $defaults;
}
add_filter( 'manage_events_posts_columns', 'my_custom_posts_columns' );

//追加したカラムに値を表示させる
function my_custom_posts_custom_column( $column, $post_id ) {
  switch ( $column ) {
    case 'event_date': // ID
      $post_meta = get_post_meta( $post_id, 'event_date', true );
      if ( $post_meta ) {
          echo $post_meta;
      } else {
          echo ''; // 値が無いとき
      }
    break;

  }
}
add_action( 'manage_events_posts_custom_column' , 'my_custom_posts_custom_column', 10, 2 );

?>