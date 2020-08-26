<?php
/**
 * Plugin Name: ratheRRandom User Tour Plugin
 * Plugin URI: https://www.ratherrandom.website/
 * Description: This plugin is to allow new users have a quick tour of WordPress.
 * Version: 1.0
 * Author: ratheRRandom
 * Author URI: https://www.ratherrandom.website/
 * GitHub Plugin URI: RatherRandom-Dave/ratherrandom-user-tour
 */

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}
