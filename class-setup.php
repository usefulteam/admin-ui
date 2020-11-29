<?php
/**
 * Setup the plugin.
 *
 * @package admin-ui
 */

namespace Au;

/**
 * Class to setup custom admin UI.
 */
class Setup {

	/**
	 * The class instance.
	 *
	 * @var object
	 */
	public static $instance;

	/**
	 * Class constructor.
	 */
	public function __construct() {
		
	}

	/**
	 * Get instance of the class.
	 */
	public static function get_instance() {

		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;

	}

	/**
	 * Init the setup.
	 */
	public static function init() {

		$instance = self::get_instance();
		$instance->setup();

	}

	/**
	 * Setup the class.
	 */
	public function setup() {

		add_action( 'admin_enqueue_scripts', array( self::get_instance(), 'admin_assets' ) );

	}

	/**
	 * Enqueue admin assets.
	 */
	public function admin_assets() {

		wp_enqueue_style( 'cui-admin.css', AU_PLUGIN_URL . '/assets/css/admin-styles.css', array(), AU_PLUGIN_VERSION );

	}

}
