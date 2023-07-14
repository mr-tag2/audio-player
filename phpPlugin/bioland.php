<?php
/**
 * Plugin Name: Bioland Podcast
 * Plugin URI:  https://bioland-podcast.com
 * Description: Customize of Bioland Podcast website
 * Author:      Seramo
 * Author URI:  https://seramo.ir
 * Version:     0.0.1
 */

defined( 'ABSPATH' ) || exit;

/**
 * Define Constants
 */
define( 'BLP_NAME', plugin_basename( __FILE__ ) );
define( 'BLP_DIR', plugin_dir_path( __FILE__ ) );
define( 'BLP_URI', plugin_dir_url( __FILE__ ) );
define( 'BLP_ASSETS', trailingslashit( BLP_URI . 'assets' ) );
define( 'BLP_INCS', trailingslashit( BLP_DIR . 'includes' ) );
define( 'BLP_TEMPLATE', trailingslashit( BLP_DIR . 'template-parts' ) );

/**
 * Include Files
 */
$includes = array(
    'scripts',
    'post-types',
    'taxonomies',
    'shortcodes',
    'custom-functions',
);

foreach ( $includes as $file ) {
    $ext = '.php';
    $file = BLP_INCS . $file . $ext;
    if ( file_exists( $file ) ) {
        require_once wp_normalize_path( $file );
    }
}