<?php

function theme_enqueue_styles(){
    wp_enqueue_style('my_style', get_template_directory_uri().'/css/mystyle.css');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// 管理画面の方でドロワーメニューの中身を設定させる
function register_baika_menu(){
    register_nav_menu('baika_menu', '梅花メニュー');
}
add_action('after_setup_theme', 'register_baika_menu');