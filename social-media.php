<?php
/**
 * Plugin Name: Social Media
 * Description: Social Media for WordPress.
 * Version: 1.0.0
 * Author: 
 * Author URI: https://github.com//wp-social-media
 * Text Domain: social-media
 *
 * @package SocialMedia
 */

namespace \SocialMedia;

// Support for site-level autoloading.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$router = new Router( new Plugin( __FILE__ ) );

add_action( 'plugins_loaded', [ $router, 'init' ] );
