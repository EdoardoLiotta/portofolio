<?php
/**
 * understrap enqueue scripts
 *
 * @package understrap
 */

function understrap_scripts() {

	 /* codyhouse style and scripts */
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/css/main.css', array(), '0.4.3');
    wp_enqueue_script( 'codyhouse-menu-scripts', get_template_directory_uri() . '/js/codyhouse_menu.js', array(), '0.3.8', true );
    wp_enqueue_style( 'codyhouse-menu-styles', get_stylesheet_directory_uri() . '/css/codyhouse_menu.css', array(), '0.3.8');


    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.3');


    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.3', true );
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.js', array(), '0.4.3', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

