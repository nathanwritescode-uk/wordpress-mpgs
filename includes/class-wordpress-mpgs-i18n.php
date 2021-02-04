<?php

/**
 * Define the internationalization functionality
 *
 * @link       https://www.nathanwritescode.com
 * @since      1.0.0
 *
 * @package    Wordpress_Mpgs
 * @subpackage Wordpress_Mpgs/includes
 */

/**
 * Define the internationalization functionality.
 *
 * @since      1.0.0
 * @package    Wordpress_Mpgs
 * @subpackage Wordpress_Mpgs/includes
 * @author     Nathan Writes Code <nathan@nathanwritescode.com>
 */
class Wordpress_Mpgs_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {
        load_plugin_textdomain(
            'wordpress-mpgs',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }


}
