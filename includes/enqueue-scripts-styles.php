<?php
function load_scripts () {
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/css';
	$assetsPath = get_stylesheet_directory() . '/css';
	/*
	Ladda stylesheet 
	 */
	if ( ($_SERVER['SERVER_NAME'] == 'www.algask.dev') AND !isset($_GET['production']) ) {
		wp_enqueue_style( 'normalize', $assetsDir.'/normalize.css', null, null, null );
		wp_enqueue_style( 'boilerplate', $assetsDir.'/boilerplate.css', null, null, null );
		wp_enqueue_style( 'bootstrap', $assetsDir.'/bootstrap.css', null, null, null );
		wp_enqueue_style( 'genericons', $assetsDir.'/genericons.css', null, null, null );
		wp_enqueue_style( 'responsive_tables', $assetsDir.'/responsive-tables.css', null, null, null );
		wp_enqueue_style( 'stylesheet', $assetsDir.'/style.css', null, null, null );
	} else {
		#wp_enqueue_style( 'stylesheet', $assetsDir.'/style-min.css', null, filemtime($assetsPath.'/style-min.css'), null );
	}

	/*
	Ladda scripts
	 */
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-1.11.0.min.js', null, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'modernizr', $themeDir.'/js/vendor/modernizr-2.6.2.min.js', null, null, true );
	
	if ( ($_SERVER['SERVER_NAME'] == 'www.algask.dev') AND !isset($_GET['production']) ) {
		wp_enqueue_script( 'plugins', $themeDir.'/js/plugins.js', array('jquery'), null, true );
		wp_enqueue_script( 'main', $themeDir.'/js/main.js', array('jquery', 'plugins'), null, true );
	} else {
		wp_enqueue_script( 'scripts', $themeDir.'/js/script-min.js', array('jquery'), null, true );
	}
	


}
add_action( 'wp_enqueue_scripts', 'load_scripts' );