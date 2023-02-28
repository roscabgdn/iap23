<?php
/**
 * IAP23 functions and definitions
 */


 /**
 * IAP23 setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * IAP23 supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.

 */
function iap23_setup() {

    wp_enqueue_style( 'iap23-reset', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css', array(), false );
    wp_enqueue_style( 'iap23', get_template_directory_uri() . '/style.css', array(), false );

    wp_enqueue_script( 'iap23-scrips', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), null , true );

    // Menu register
    register_nav_menu( 'primary', __( 'Header Menu', 'iap23' ) );
    register_nav_menu( 'secondary', __( 'Footer Menu', 'iap23' ) );
    

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'articol-lista', '972', '607', false );
    add_image_size( 'articol-related', '80', '80', false );
    
    // add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
    // add_theme_support( 'title-tag' );
    // add_theme_support( 'custom-logo', array(
    //     'height' => 480,
    //     'width'  => 720,
    // ) );
    
}
add_action( 'after_setup_theme', 'iap23_setup' );