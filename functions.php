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
	Create custom post types
	 */
	function register_post_types()
	{
		// Blocks
		register_post_type('blocks', array(
			'label' => 'Blocks',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
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

		// Matcher
		register_post_type('Matcher',
			array(
				'labels' => array(
					'name' => __('Matcher'),
					'singular_name' => __('match')
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 5,
				'supports' => array(
					'title'
				),
				'taxonomies' => array('serie'),
			)
		);
		$labels_serie = array(
			'name' => _x( 'Serie', 'taxonomy general name' ),
			'singular_name' => _x( 'Serie', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Serie' ),
			'all_items' => __( 'All Serier' ),
			'parent_item' => __( 'Parent Serie' ),
			'parent_item_colon' => __( 'Parent Serie:' ),
			'edit_item' => __( 'Edit Serie' ), 
			'update_item' => __( 'Update Serie' ),
			'add_new_item' => __( 'Add New Serie' ),
			'new_item_name' => __( 'New Serie Name' ),
			'menu_name' => __( 'Serie' ),
		); 	

		register_taxonomy('serie',array('matcher'), array(
			'hierarchical' => true,
			'labels' => $labels_serie,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'serie' ),
		));

		$labels_sasong = array(
			'name' => _x( 'Säsong', 'taxonomy general name' ),
			'singular_name' => _x( 'Säsong', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Säsong' ),
			'all_items' => __( 'All Säsongr' ),
			'parent_item' => __( 'Parent Säsong' ),
			'parent_item_colon' => __( 'Parent Säsong:' ),
			'edit_item' => __( 'Edit Säsong' ), 
			'update_item' => __( 'Update Säsong' ),
			'add_new_item' => __( 'Add New Säsong' ),
			'new_item_name' => __( 'New Säsong Name' ),
			'menu_name' => __( 'Säsong' ),
		); 	

		register_taxonomy('sasong',array('matcher'), array(
			'hierarchical' => true,
			'labels' => $labels_sasong,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'sasong' ),
		));
		
		// Post type spelare
		register_post_type('Spelare',
			array(
				'labels' => array(
					'name' => __('Spelare'),
					'singular_name' => __('Spelare')
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 5,
				'supports' => array(
					'title','thumbnail','custom-fields'
				),
			)
		);
		$labels_positioner = array(
			'name' => _x( 'Position', 'taxonomy general name' ),
			'singular_name' => _x( 'Position', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Position' ),
			'all_items' => __( 'All Positionr' ),
			'parent_item' => __( 'Parent Position' ),
			'parent_item_colon' => __( 'Parent Position:' ),
			'edit_item' => __( 'Edit Position' ), 
			'update_item' => __( 'Update Position' ),
			'add_new_item' => __( 'Add New Position' ),
			'new_item_name' => __( 'New Position Name' ),
			'menu_name' => __( 'Position' ),
		); 	

		register_taxonomy('position',array('spelare'), array(
			'hierarchical' => true,
			'labels' => $labels_positioner,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'position' ),
		));
	}
	add_action('init', 'register_post_types');

	/*
	Filter - the_category
	Tar bort kategorier som inte ska skrivas ut
	 */
	add_filter('the_category', function ($categorys)
	{
		return $categorys;
	});

	/*
	Filter - body class
	 */
	add_filter('body_class', function ($classes)
	{
		if (is_page_template('archive.php')) {
			$classes[] = 'archive';
			return $classes;
		}
		return $classes;
	});

	/*
	Shortcode nextgame
	 */
	function shortcode_nextgame($attr) {
		global $post;
		extract($attr);
		$args = array(
			'post_type' => 'matcher',
			'posts_per_page' => 1,
			'meta_key' => 'datum',
			'orderby' => 'meta_value',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key' => 'datum',
					'value' => date('Y-m-d'),
					'compare' => '>'
				)
			),
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'serie',
					'field' => 'slug',
					'terms' => $serie
				),
				array(
					'taxonomy' => 'sasong',
					'field' => 'slug',
					'terms' => $sasong
				)
			),
		);
		$loop = new WP_Query($args);
				
		while ($loop->have_posts() ) : $loop->the_post();
		?>
			<div class="infobox row clearfix inner">
				<div class="col col12">
					<span><?php the_field('datum');?> <?the_field('tid');?></span>
				</div>
				<div class="col col6 first-col">
					<img src="<?php echo get_field('klubbmarke_hemmalag')['url'];?>">
					<span><?php the_field('hemmalag');?></span>
				</div>
				<div class="col col6 last-col">
					<img src="<?php echo get_field('klubbmarke_bortalag')['url'];?>">
					<span><?php the_field('bortalag');?></span>
				</div>
			</div>
		<?
		endwhile;


	}
	add_shortcode('nextgame', 'shortcode_nextgame');

	/*
	Shortcode matcher
	 */
	function shortcode_matcher($attr) {
		echo '<pre>';
			print_r($attr);
		echo '</pre>';
	}
	add_shortcode('matcher', 'shortcode_matcher');
	

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