<?php
function load_scripts () {
	/*
	Ladda stylesheet 
	 */
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/style-min.css', null, null, null );

	/*
	Ladda scripts
	 */
	wp_enqueue_script('jquery');
	wp_enqueue_script('plugins', get_template_directory_uri().'/js/main-min.js', null, null, true);
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );