<?php 
// 各種ファイルの読み込み
function my_enqueue_scripts() {
    $uri = esc_url( get_template_directory_uri() );
    wp_enqueue_script('jquery');
    wp_enqueue_script('js', $uri . '/js/script.js', array(), gmdate( 'Ymd/Hi', filemtime( get_theme_file_path( '/js/script.js' ) ) ) );
    wp_enqueue_style('my_styles', $uri . '/css/style.css', [] ,gmdate( 'Ymd/Hi', filemtime( get_theme_file_path( '/css/style.css' ) ) ) );

}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');

add_action('init', function() {
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'header_menu' => 'ヘッダーメニュー'
       
        
    ]);
});

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバー',
        'id' => 'sidebar', 
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );


function get_post_category() {
    $categories = get_the_category();

    if ( $categories ) {
        echo '<ul class="p-post__category">';
        foreach ( $categories as $category ) {
            echo '<li class="p-post__category_list">'.$category->name.'</li>';
        }
        echo '</ul>';
    }
}

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

;?>