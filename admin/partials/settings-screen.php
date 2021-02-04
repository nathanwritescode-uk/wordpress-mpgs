<?php

/**
 * Provides the view for the settings screen.
 *
 * @link       https://www.nathanwritescode.com
 * @since      1.0.0
 *
 * @package    Wordpress_Mpgs
 * @subpackage Wordpress_Mpgs/admin/partials
 */

?>

<div class="wrap dhqc">
    <h2>MPGS Transactions</h2>
    <p>Here, you'll insert your gateway as provided by your merchant processor.</p>
    <p>Need help with these settings? Be sure to read the <a href="https://raw.githubusercontent.com/nathanwritescode-uk/wordpress-mpgs/master/README.txt" target="_blank">README.txt</a> file.</p>
    <br>
    <form method="post" action="options.php">
        <?php
        settings_fields('mpgs_options');
        do_settings_sections('mpgs_options');
        $args = array(
            'post_type' => 'page',
            'post_status' => 'publish'
        );
        $pages = get_pages($args);
        ?>
        <table>
            <tr>
                <th class="mgps-admin-label" scope="row">Merchant ID:</th>
                <td>
                    <input type="text" name="mpgs_merchant_id" value="<?php
                    echo get_option('mpgs_merchant_id'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Secure hash:</th>
                <td>
                    <input type="text" name="mpgs_securehash" value="<?php
                    echo get_option('mpgs_securehash'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Payment URL:</th>
                <td>
                    <input type="text" name="mpgs_url" value="<?php
                    echo get_option('mpgs_url', 'https://migs.mastercard.com.au/vpcpay'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Access code:</th>
                <td>
                    <input type="text" name="mpgs_accesscode" value="<?php
                    echo get_option('mpgs_accesscode'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Version:</th>
                <td>
                    <input type="text" name="mpgs_version" value="<?php
                    echo get_option('mpgs_version', '1'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Command:</th>
                <td>
                    <input type="text" name="mpgs_command" value="<?php
                    echo get_option('mpgs_command', 'pay'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Location:</th>
                <td>
                    <input type="text" name="mpgs_location" value="<?php
                    echo get_option('mpgs_location', 'en'); ?>"/>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Payment Page:</th>
                <td>
                    <select name="mpgs_payment_page">

                        <?php
                        if ($pages) {
                            foreach ($pages as $page) { ?>
                                <option value="<?php
                                echo $page->ID; ?>" <?php
                                if (get_option('mpgs_payment_page') == $page->ID) {
                                    echo 'selected=true';
                                } ?> ><?php
                                    echo $page->post_title; ?></option>
                                <?php
                            }
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="mgps-admin-label" scope="row">Thank you page:</th>
                <td>
                    <select name="mpgs_thankyou_page">

                        <?php
                        if ($pages) {
                            foreach ($pages as $page) { ?>
                                <option value="<?php
                                echo $page->ID; ?>"
                                    <?php
                                    if (get_option('mpgs_thankyou_page') == $page->ID) {
                                        echo 'selected=true';
                                    } ?> ><?php
                                    echo $page->post_title; ?></option>
                                <?php
                            }
                        } ?>
                    </select>
                </td>
            </tr>
        </table>
        <?php
        submit_button(); ?>
    </form>
</div>