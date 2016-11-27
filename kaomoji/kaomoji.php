<?php
/*
Plugin Name: Japanese Kaomoji
Plugin URI:  https://developer.wordpress.org/plugins/ash-creative/
Description: Use Kaomoji as you want
Version:     1.00
Author:      Antoine Saint-Hilaire
Author URI:  https://github.com/Ash-creative
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
Text Domain: size
*/


defined( 'ABSPATH' )
or die ( 'No direct load !' );

define( 'EEMI_OP_DIR', plugin_dir_path( __FILE__ ) );
define( 'EEMI_OP_URL', plugin_dir_url( __FILE__ ) );

if ( is_admin() ) {
    require_once( EEMI_OP_DIR . 'library/class.settings-api.php' );
    require_once( EEMI_OP_DIR . 'inc/admin.php' );
}

// Translate file loading
    function kaomoji_oop_init() {
        load_plugin_textdomain( 'size-op', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }

add_action( 'plugins_loaded', 'kaomoji_oop_init' );

// New media button: Kaomoji
    add_action('media_buttons', 'kaomojibutton');
    function kaomojibutton() {
        echo "<a href='#' id='kaomojibutton' class='button kaomojibutton' name='kaomojibutton' onclick='openkaomoji()'>Kaomoji</a>";
    }

// Main array
    function box () {
        include('view/kao-array.php');
    }

    add_filter('edit_form_after_title', 'box', 10, 1);



// Back office custom CSS
    function admincss() {
    $admin_handle = 'admin_css';
    $admin_stylesheet = '/wp-content/plugins/kaomoji/css/admin-plugin.css';
        wp_enqueue_style( $admin_handle, $admin_stylesheet );
    }
    add_action('admin_print_styles', 'admincss', 11);


// Back office JS loading
    function wpdocs_selectively_enqueue_admin_script( $hook ) {
        if ( 'edit.php' == $hook ) {
            return;
        }
        wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'js/admin-script.js', array(), '1.0' );
    }
    add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );




//load_plugin_textdomain( string $traduction, string $deprecated = false, string $plugin_rel_path = false );