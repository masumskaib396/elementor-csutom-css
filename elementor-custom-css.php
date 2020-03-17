<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       Elementor Custom Css
 * Plugin URI:        
 * Description:       Elementor Custom Css 
 * Version:           1.0.0
 * Author:            Masum Sakib
 * Author URI:       
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ecs
 */


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}


function ecs_load_textdomain(){
	load_plugin_textdomain('doop',false,dirname(__FILE__)."/languages");
}
add_action('plugins_loaded','ecs_load_textdomain');

/*
Constants
------------------------------------------ */

/* Set plugin version constant. */
define( 'ECS_VERSION', '0.1');

/* Set constant path to the plugin directory. */
define( 'ECS_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

// Assets Folder URL
define( 'ECS_ASSETS_PUBLIC', plugins_url( 'assets', __FILE__ ) );


require_once(ECS_PATH. 'init.php' );

//include custom css file with the plugin or theme
require_once(ECS_PATH.  '/inc/custom-css.php'); 
