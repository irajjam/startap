<?php
include('constants.php');
include('app/autoloader.php');
include('inc/wp_bootstrap_navwalker.php');

$theme_version = '';
$theme = wp_get_theme();
if (is_child_theme()) {
    $theme = wp_get_theme($theme->template);
}
$theme_version = $theme->version;
define('porto_version',               $theme_version);                    // set current version
/**
 * Wordpress theme check
 */
// set content width
if ( ! isset( $content_width ) ) $content_width = 900;

add_action('after_setup_theme', 'Initializer::setup');
add_action('init', 'Initializer::start_session');
add_action( 'after_setup_theme', 'Initializer::theme_prefix_setup' );

//بخش ادمین را برای مدیر نشان می دهد
add_filter('show_admin_bar', '__return_false');
add_action('init', 'PostTypes::make_product_post_type');


add_action('add_meta_boxes', 'MetaBoxes::register_product_price_meta_box');
add_action('save_post', 'MetaBoxes::save_product_price');

//این به صورت manage_{$post_type}_posts_columns هست
// که برای اضافه کردن فیلد به ستون محصولات استفاده می شود
add_filter('manage_product_posts_columns', 'PostTypes::add_price_column');
//این 2 یعنی دو آرگومان می گیرد
add_action('manage_product_posts_custom_column', 'PostTypes::show_price_value_column', 10, 2);

add_action('add_meta_boxes', 'SliderMetaBox::register_product_slider_meta_box');
add_action('save_post', 'SliderMetaBox::save_product_slider');

add_action('widgets_init','NavMenu::register_nav_menu');

add_action('widgets_init', 'Widgets::startap_register_sidebars');
add_filter('dynamic_sidebar_params', 'Widgets::startap_add_classes_to_widget');






