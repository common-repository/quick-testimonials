<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://themeregion.com
 * @since             1.0.0
 * @package           Quick_Testimonials
 *
 * @wordpress-plugin
 * Plugin Name:       Quick Testimonials
 * Plugin URI:        https://plugins.themeregion.com/quick-testimonials/
 * Description:       Best testimonial plugin for WordPress. It's an easy to use plugin by which you can easily build & customize your desired testimonials with ease.
 * Version:           2.1
 * Author:            ThemeRegion
 * Author URI:        https://themeregion.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quick-testimonials
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'QUICK_TESTIMONIALS', '2.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-quick-testimonials-activator.php
 */
function activate_quick_testimonials() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quick-testimonials-activator.php';
	Quick_Testimonials_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-quick-testimonials-deactivator.php
 */
function deactivate_quick_testimonials() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quick-testimonials-deactivator.php';
	Quick_Testimonials_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_quick_testimonials' );
register_deactivation_hook( __FILE__, 'deactivate_quick_testimonials' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-quick-testimonials.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_quick_testimonials() {

	$plugin = new Quick_Testimonials();
	$plugin->run();

}
run_quick_testimonials();
