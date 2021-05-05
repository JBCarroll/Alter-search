<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function alter_fancy_js(){
    wp_enqueue_script( 'custom-script', plugin_dir_url( __FILE__ ) . '/js/results.js' , array( 'jquery'));
    wp_enqueue_script( 'custom-script' );
}
add_action('wp_enqueue_scripts','alter_fancy_js');

function alter_fancy_css(){
    wp_register_style( 'custom-css', plugin_dir_url( __FILE__ ) . '/style/style.css');
    wp_enqueue_style( 'custom-css' );
}
add_action('wp_enqueue_scripts','alter_fancy_css');

?>