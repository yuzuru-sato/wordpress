<?php
//アイキャッチ画像を出力
add_theme_support('post-thumbnails');

//カスタム投稿タイプを追加(exapless)
add_action( 'init', 'post_type_apps' );
function post_type_apps() {
	$labels = array(
    	'name' => _x('example記事'),
    	'singular_name' => _x('example記事'),
    	'add_new' => _x('新しくexample記事を書く', 'apps'),
    	'add_new_item' => __('example記事を書く'),
    	'edit_item' => __('example記事を編集'),
    	'new_item' => __('新しいexample記事'),
    	'view_item' => __('example記事を見る'),
    	'search_items' => __('example記事を探す'),
    	'not_found' =>  __('example記事はありません'),
    	'not_found_in_trash' => __('ゴミ箱にexample記事はありません'),
    	'parent_item_colon' => ''
	);
	$args = array(
    	'labels' => $labels,
    	'public' => true,
    	'publicly_queryable' => true,
    	'show_ui' => true,
    	'query_var' => true,
    	'rewrite' => true,
    	'capability_type' => 'post',
    	'hierarchical' => true,
    	'menu_position' => 5,
    	'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','comments','revisions','page-attributes'),
    	'has_archive' => true
    );
  register_post_type('examples',$args);
}

?>