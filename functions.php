<?php

	/*
	Scripts
	 */
	wp_enqueue_script('jquery');

	/*
	Thumbnails plz
	 */
	add_theme_support('post-thumbnails');
	
	/*
	Registrera menyer
	 */
	register_nav_menu( 'topmenu', 'Toppmeny' );
	register_nav_menu( 'mainmenu', 'Huvudmeny' );

	/*
	Ta bort width och height från bilder
	 */
	add_filter( 'the_content', 'filter_function_name' );
	function filter_function_name($html) {

		$greddan = preg_replace('#(<img.+?)height=(["\']?)\d*\2(.*?/?>)#i', '$1$3', $html);
	  
		return preg_replace('#(<img.+?)width=(["\']?)\d*\2(.*?/?>)#i', '$1$3', $greddan);
	  
	}

	/*
	Ta bort more-hoppet
	 */
	function remove_more_jump_link($link) { 
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}
	add_filter('the_content_more_link', 'remove_more_jump_link');