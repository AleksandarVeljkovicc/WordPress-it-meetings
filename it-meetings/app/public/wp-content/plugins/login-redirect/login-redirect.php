<?php
/**
 * Plugin Name: Login Redirect
 * Description: Custom plugin to redirect user to a custom login page when clicking on the "Log in" button.
 * Version: 1.0
 * Author: Aleksandar Veljkovic
 */

// Prevent direct access to the file
defined( 'ABSPATH' ) or die( 'Access restricted for bots.' );

// Enqueue the JavaScript file
function login_redirect_enqueue_js() {
    wp_enqueue_script( 'login-redirect', plugin_dir_url( __FILE__ ) . 'js/login-redirect.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'login_redirect_enqueue_js' );

?>
