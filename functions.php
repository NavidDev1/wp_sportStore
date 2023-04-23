<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

// Gör en template overrite på archive-product filen, hälsar kunden välkommen.
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// changing the letter k to m

function replace_k_with_m($var) {

	$letter = str_replace('k', 'm', $var);
	
	return $letter;
	
	}
	
	add_action('the_title', 'replace_k_with_m');


	// using the filter moce to remove someting, in this case the admin bar for logged in users.
	add_filter('show_admin_bar', '__return_false');