<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://www.nathanwritescode.com
 * @since             1.0.0
 * @package           Wordpress_Mpgs
 *
 * @wordpress-plugin
 * Plugin Name:        Mastercard Payment Gateway Services for WordPress
 * Plugin URI:        https://www.nathanwritescode.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nathan Writes Code
 * Author URI:        https://www.nathanwritescode.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-mpgs
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define('WORDPRESS_MPGS_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wordpress-mpgs-activator.php
 */
function activate_wordpress_mpgs()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-wordpress-mpgs-activator.php';
    Wordpress_Mpgs_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wordpress-mpgs-deactivator.php
 */
function deactivate_wordpress_mpgs()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-wordpress-mpgs-deactivator.php';
    Wordpress_Mpgs_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_wordpress_mpgs');
register_deactivation_hook(__FILE__, 'deactivate_wordpress_mpgs');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wordpress-mpgs.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wordpress_mpgs()
{
    $plugin = new Wordpress_Mpgs();
    $plugin->run();
}

run_wordpress_mpgs();