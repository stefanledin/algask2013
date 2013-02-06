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
	Create the post type Blocks
	 */
	function register_post_type_blocks()
	{
		register_post_type('blocks', array(
			'label' => 'Blocks',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array(
				'slug' => ''
			),
			'query_var' => true,
			'exclude_from_search' => false,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'author',
				'page-attributes'
			),
			'labels' => array (
				'name' => 'Blocks',
				'singular_name' => 'Block',
				'menu_name' => 'Blocks',
				'add_new' => 'Add Block',
				'add_new_item' => 'Add New Block',
				'edit' => 'Edit',
				'edit_item' => 'Edit Block',
				'new_item' => 'New Block',
				'view' => 'View Block',
				'view_item' => 'View Block',
				'search_items' => 'Search Blocks',
				'not_found' => 'No Blocks Found',
				'not_found_in_trash' => 'No Blocks Found in Trash',
				'parent' => 'Parent Block',
				),
			)
		);	
	}

	add_action('init', 'register_post_type_blocks');
	

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