<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.tytaniumideas.com
 * @since      1.0.0
 *
 * @package    Tytanium_off_canvas
 * @subpackage Tytanium_off_canvas/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Tytanium_off_canvas
 * @subpackage Tytanium_off_canvas/includes
 * @author     Tytanium Ideas <web@tytaniumideas.com>
 */
class Tytanium_off_canvas_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tytanium_off_canvas',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
