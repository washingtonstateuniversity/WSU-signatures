<?php

add_action( 'wp_enqueue_scripts', 'signatures_wp_enqueue_scripts' );
	
function signatures_wp_enqueue_scripts() {
    wp_enqueue_script( 'signatures-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery') );
	}

?>
