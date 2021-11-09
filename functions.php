<?php
    //テーマサポート
    // add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title' );

function hamburger_script() {
    wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array() );
    // wp_enqueue_style( 'style', get_theme_file_uri('style.css'), array(), '1.0.0' );
    wp_enqueue_style( 'hamburger', get_theme_file_uri('/_static/dist/css/style.css'), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', '', '',true );
    wp_enqueue_script( 'main.js', get_theme_file_uri('/js/main.js'), array('jquery'),'1.0.0',true );
    // wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.0.0',true);
}
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );


    // サイドバーとフッターにメニュー追加
function register_hamburger_menus_init(){
    register_nav_menus( array(
        'side-menu' => 'SideMenu',
        'footer-menu' => 'FooterMenu',
    ));
}
add_action( 'after_setup_theme', 'register_hamburger_menus_init');


    // 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

    // ｐタグを除去
remove_filter('pre_term_description', 'wp_filter_kses' );

    // カテゴリーの説明分にhtmlを使えるようにする
remove_filter('term_description', 'wpautop');


    // wp-block-imageのサイズを「幅広」と「全幅」に対応
function gutenberg_support_setup() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'gutenberg_support_setup' );

    // ウィジェット
    // function hamburger_widgets_init() {
    //     register_sidebar (
    //         array(
    //             'name'          => 'All Menu',
    //             'id'            => 'menu_widget',
    //             'description'   => 'メニューの一覧です',
    //             'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //             'after_widget'  => '</div>',
    //             'before_title'  => '<h2 class="c-category-title">',
    //             'after_title'   => "</h2>\n",
    //         )
    //     );
    // }
    // add_action( 'widgets_init', 'hamburger_widgets_init' );
