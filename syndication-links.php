<?php
/**
 * Plugin Name: Syndication Links
 * Plugin URI: http://wordpress.org/plugins/syndication-links
 * Description: Add Syndication Links to Your Content
 * Version: 3.2.1
 * Author: David Shanske
 * Author URI: http://david.shanske.com
 * Text Domain: syndication-links
 * Domain Path:  /languages
 */

define( 'SYNDICATION_LINKS_VERSION', '3.2.1' );

require_once( plugin_dir_path( __FILE__ ) . '/includes/class-syn-meta.php' );
require_once( plugin_dir_path( __FILE__ ) . '/includes/class-syn-config.php' );
// Social Plugin Add-Ons
require_once( plugin_dir_path( __FILE__ ) . '/includes/class-social-plugins.php' );

// User/H-Card Functions
require_once( plugin_dir_path( __FILE__ ) . '/includes/class-hcard-widget.php' );

function syndication_links_load_plugin_textdomain() {
	    load_plugin_textdomain( 'syndication-links', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'syndication_links_load_plugin_textdomain' );

?>
