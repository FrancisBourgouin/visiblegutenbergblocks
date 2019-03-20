<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/**
 * @package gutenbergvisible
 */
/*
Plugin Name: Make Gutenberg Blocks Visible
Plugin URI: https://francisbourgouin.com
Description: Truc pour voir les blocs sans hover maudit !
Version: 1.0.0
Author: Francis Bourgouin
Author URI: https://francisbourgouin.com
License: GPLv2 or later
Text Domain: wordpress gutenberg
*/

function francis_add_css_gutenberg() {
	  // Add support for editor styles.
	  //add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	wp_enqueue_style( 'francis-guten-style', plugin_dir_url( __FILE__ ) . 'makeitfancy.css' , false );
}
add_action( 'enqueue_block_editor_assets', 'francis_add_css_gutenberg' );