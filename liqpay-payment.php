<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              lionline.agency
 * @since             1.0.0
 * @package           Liqpay_Payment
 *
 * @wordpress-plugin
 * Plugin Name:       Liqpay Payment
 * Plugin URI:        lionline.agency/liqpay-payment/
 * Description:       Simple liqpay payment plugin
 * Version:           0.0.1
 * Author:            LionLine agency
 * Author URI:        lionline.agency
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       liqpay-payment
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-liqpay-payment-activator.php
 */
function activate_liqpay_payment() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-liqpay-payment-activator.php';
	Liqpay_Payment_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-liqpay-payment-deactivator.php
 */
function deactivate_liqpay_payment() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-liqpay-payment-deactivator.php';
	Liqpay_Payment_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_liqpay_payment' );
register_deactivation_hook( __FILE__, 'deactivate_liqpay_payment' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-liqpay-payment.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_liqpay_payment() {

	$plugin = new Liqpay_Payment();
	$plugin->run();

}
run_liqpay_payment();
