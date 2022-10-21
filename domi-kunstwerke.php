<?php

/**
* Plugin Name: Partner
* Plugin URI: 
* Description: Funktionalität für Partner. Darstellung im Theme via template-sponsors.php
* Version: 1.0
* Author: Dominique Müller
* Author URI: 
**/







$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

/* include Scripts*/
function domi_custom_customcss() {
    wp_enqueue_style( 'customcss',  plugin_dir_url( __FILE__ ) . '/css/custom.css' );                      
}
add_action( 'wp_enqueue_scripts', 'domi_custom_customcss');


/* INCLUDE FILES */
include $plugin_url . '/includes/customPostType.php';
include $plugin_url . '/includes/advancedCustomFields.php';

?>