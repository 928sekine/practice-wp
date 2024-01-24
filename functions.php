<?php


function my_script()
{
    $version = wp_get_theme()->get('Version');
    //cssの読み込み
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('swiper-bundle-css', get_template_directory_uri() . '/lib/swiper-bundle.min.css', array('style-css'), '1.0.0');
    //javascriptの読み込み
    wp_enqueue_script('swiper-bundle-js', get_template_directory_uri() . '/lib/swiper-bundle.min.js', array(), '1.0.0', true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script');

// アイキャッチ有効
function setup_theme()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

// 検索対象は投稿のみとする
function search_filter($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'search_filter');

// singleページのCSS追加
function post_styles()
{
    global $post_type;
    if ('post' === $post_type) {
        wp_enqueue_style('post-style', get_theme_file_uri('css/post.css'), array(), wp_get_theme()->get('Version'));
    }
}
add_action('enqueue_block_editor_assets', 'post_styles');

function add_files()
{
    wp_enqueue_style('post-style', get_theme_file_uri('css/post.css'), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'add_files');