<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.robbertdekuiper.com
 * @since             0.1
 * @package           Ajax_Filter_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       Ajax Filter Posts Edu INAF ver
 * Plugin URI:        https://github.com/ulaulaman/eduinaf-ajax-filter-posts
 * Description:       Personalizzazione del plugin per i filtri ajax
 * Version:           0.2.2
 * Author:            Robbert de Kuiper, Gianluigi Filippelli
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ajax-filter-posts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'class-ajax-filter-posts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1
 */
function run_ajax_filter_posts() {

	$plugin = new Ajax_Filter_Posts();

}
run_ajax_filter_posts();
