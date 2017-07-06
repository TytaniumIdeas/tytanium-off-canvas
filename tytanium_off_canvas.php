<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.tytaniumideas.com
 * @since             1.0.0
 * @package           Tytanium_off_canvas
 *
 * @wordpress-plugin
 * Plugin Name:       Tytanium Off Canvas
 * Plugin URI:        https://github.com/TytaniumIdeas/tytanium-off-canvas
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Tytanium Ideas
 * Author URI:        https://www.tytaniumideas.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tytanium_off_canvas
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tytanium_off_canvas-activator.php
 */
function activate_tytanium_off_canvas() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tytanium_off_canvas-activator.php';
	Tytanium_off_canvas_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tytanium_off_canvas-deactivator.php
 */
function deactivate_tytanium_off_canvas() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tytanium_off_canvas-deactivator.php';
	Tytanium_off_canvas_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tytanium_off_canvas' );
register_deactivation_hook( __FILE__, 'deactivate_tytanium_off_canvas' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tytanium_off_canvas.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_tytanium_off_canvas() {

	$plugin = new Tytanium_off_canvas();
	$plugin->run();

}
run_tytanium_off_canvas();
