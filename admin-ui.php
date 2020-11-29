<?php
/**
 * Plugin Name: Admin UI
 * Plugin URI:  https://wordpress.org/plugins/admin-ui/
 * Description: WordPress custom admin UI. Turn your WordPress admin UI to be smoother and more beautiful.
 * Version:     0.1.0
 * Author:      Useful Team
 * Author URI:  https://usefulteam.com
 * License:     GPL-3.0
 * License URI: https://oss.ninja/gpl-3.0?organization=Useful%20Team&project=admin-ui
 * Text Domain: admin-ui
 * Domain Path: /languages
 *
 * @package admin-ui
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

// Helper constants.
define( 'AU_PLUGIN_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'AU_PLUGIN_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'AU_PLUGIN_VERSION', '0.1.0' );

// Require classes.
require __DIR__ . '/class-setup.php';

Au\Setup::init();
