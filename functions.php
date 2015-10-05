<?php

add_action( 'after_setup_theme', 'invibed_setup' );
function invibed_setup()
{
load_theme_textdomain( 'invibed', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'invibed' ) )
);
}
add_action( 'wp_enqueue_scripts', 'invibed_load_scripts' );
function invibed_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'invibed_enqueue_comment_reply_script' );
function invibed_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'invibed_title' );
function invibed_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'invibed_filter_wp_title' );
function invibed_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'invibed_widgets_init' );
function invibed_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'invibed' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}