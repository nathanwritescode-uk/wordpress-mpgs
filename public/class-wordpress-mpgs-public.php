<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.nathanwritescode.com
 * @since      1.0.0
 *
 * @package    Wordpress_Mpgs
 * @subpackage Wordpress_Mpgs/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * @package    Wordpress_Mpgs
 * @subpackage Wordpress_Mpgs/public
 * @author     Nathan Writes Code <nathan@nathanwritescode.com>
 */
class Wordpress_Mpgs_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $plugin_name The name of the plugin.
     * @param string $version The version of this plugin.
     * @since    1.0.0
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        /**
         * This function is provided for demonstration purposes only.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/wordpress-mpgs-public.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        /**
         * This function is provided for demonstration purposes only.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/wordpress-mpgs-public.js', array('jquery'), $this->version, false);
    }
}
