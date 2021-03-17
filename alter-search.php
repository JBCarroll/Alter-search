<?php
/**
 * Plugin Name: Alter Search
 * Description: Custom search form designed with ACF | Use shortcode: [alter_search]
 * Plugin URI: https://jbcarroll.com/
 * Author: jbcarroll.com
 * Version: 1.0
 * Author URI: https://jbcarroll.com/
 *
 * Text Domain: jonathan
 **/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require("plugin.php");

function alter_intialize(){
    require(dirname( __FILE__ ). "/classes/class-alter-initilize.php");
}

function alter_form_function() {
    require(dirname( __FILE__ ). "/classes/class-alter-form.php");
}

function alter_search_form_custom() {
    ob_start();
    alter_form_function();
    alter_intialize();
    return ob_get_clean();
}
add_shortcode('alter_search', 'alter_search_form_custom');

?>