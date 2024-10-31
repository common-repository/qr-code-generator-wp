<?php
/**
 * Plugin Name:           QR Code Generator WP
 * Description:           QR Code Generator WP with shortcode.
 * Version:               1.0.0
 * Author:                xohanniloy
 * Author URI:            https://profiles.wordpress.org/xohanniloy017/
 * Requires at least:     5.2
 * Requires PHP:          7.2
 * Text Domain:           qr-code-generator-wp
 * Domain Path:           /languages
 * License:               GPL-2.0+
 * license URI:            http://www.gnu.org/licenses/gpl-2.0.txt
 **/

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class WQRGP_Generate_QR_Code {

    const VERSION = '1.0.0';
    const ASSETS_PUBLIC_DIR = 'assets/public';
    const ASSETS_ADMIN_DIR = 'assets/admin';

    public function __construct() {
        // Define constants
        $this->define_constants();

        // Load includes files
        $this->load_includes();

        // Hooks
        add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
    }

    /**
     * Define plugin constants.
     */
    private function define_constants() {
        define( 'WQRGP_VERSION', self::VERSION );
        define( 'WQRGP_ASSETS_PUBLIC_DIR', plugin_dir_url( __FILE__ ) . self::ASSETS_PUBLIC_DIR );
        define( 'WQRGP_ASSETS_ADMIN_DIR', plugin_dir_url( __FILE__ ) . self::ASSETS_ADMIN_DIR );
    }

    /**
     * Include required files.
     */
    private function load_includes() {
        foreach ( glob( plugin_dir_path( __FILE__ ) . 'includes/*.php' ) as $filename ) {
            include $filename;
        }
    }

    /**
     * Load plugin textdomain.
     */
    public function load_textdomain() {
        load_plugin_textdomain( 'qr-code-generator-wp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }

}

// Initialize the plugin class
if ( class_exists( 'WQRGP_Generate_QR_Code' ) ) {
    new WQRGP_Generate_QR_Code();
}
