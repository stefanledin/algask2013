<?php

	/*
	Scripts
	 */
	function load_scripts()
	{
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
	add_action('wp_enqueue_scripts', 'load_scripts');

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
				)
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

		// Post type sponsorer
		register_post_type('Sponsorer',
			array(
				'labels' => array(
					'name' => __('Sponsorer'),
					'singular_name' => __('Sponsor')
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 5,
				'supports' => array(
					'title','thumbnail'
				)
			)
		);

		// Post type Loppis
		register_post_type('loppisen',
			array(
				'labels' => array(
					'name' => __('Loppisen'),
					'singular_name' => __('Loppis')
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 6,
				'supports' => array(
					'title','thumbnail','editor'
				)
			)
		);

		// Taxonomy för loppis
		register_taxonomy(
			'loppiskategori',
			'loppisen',
			array(
				'hierarchical' => true,
				'labels' => array(
					'name' => _x('Loppiskategori'),
					'singular_name' => 'Loppiskategori'
				)
			)
		);
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
				'relation' => 'AND',
				array(
					'key' => 'datum',
					'value' => date('Y-m-d'),
					'compare' => '>='
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
		$output = null;
		if ($loop->have_posts()) :
			while ($loop->have_posts() ) : $loop->the_post();
				$klubbmarke_hemmalag = get_field('klubbmarke_hemmalag');
				$klubbmarke_bortalag = get_field('klubbmarke_bortalag');
				$output .= '
				<header>
					<h3>'.$text.'</h3>
				</header>
				<div class="inner gameinfo-box">
					<div class="row-fluid">
						<div class="span5 pull-left">
							<img src="'.$klubbmarke_hemmalag['url'].'">
							<span>'.get_field('hemmalag').'</span>
						</div>
						<div class="span5 pull-right">
							<img src="'.$klubbmarke_bortalag['url'].'">
							<span>'.get_field('bortalag').'</span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<p>'.get_field('datum') . ' ' . get_field('tid') .'</p>
						</div>
					</div>
				</div>
				'; // output
			endwhile;
		endif;

		return $output;
	}
	add_shortcode('nextgame', 'shortcode_nextgame');

	/*
	Shortcode prevgame
	 */
	function shortcode_prevgame($attr) {
		global $post;
		extract($attr);
		$args = array(
			'post_type' => 'matcher',
			'posts_per_page' => 1,
			'meta_key' => 'datum',
			'orderby' => 'meta_value_num',
			'order' => 'DESC',
			'meta_query' => array(
				array(
					'key' => 'datum',
					'value' => date('Y-m-d'),
					'compare' => '<='
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
		$output = null;
		if ($loop->have_posts()) :
			while ($loop->have_posts() ) : $loop->the_post();
				$klubbmarke_hemmalag = get_field('klubbmarke_hemmalag');
				$klubbmarke_bortalag = get_field('klubbmarke_bortalag');
				$resultat = explode('-', get_field('resultat'));
				$output .= '
				<header>
					<h3>'.$text.'</h3>
				</header>
				<div class="inner gameinfo-box">
					<div class="row-fluid">
						<div class="span5 pull-left">
							<img src="'.$klubbmarke_hemmalag['url'].'">
							<span>'.get_field('hemmalag').'</span>
							<h2>'.$resultat[0].'</h2>
						</div>
						<div class="span5 pull-right">
							<img src="'.$klubbmarke_bortalag['url'].'">
							<span>'.get_field('bortalag').'</span>
							<h2>'.$resultat[1].'</h2>
						</div>
					</div>
				</div>
				'; // output
			endwhile;
		endif;
		wp_reset_query();
		return $output;
	}
	add_shortcode('prevgame', 'shortcode_prevgame');

	/**
	 * Add shortcode, matchprogram
	 */
	function matchprogram_func($atts)
	{
		global $post;
		extract($atts);
		$args = array(
			'post_type' => 'matcher',
			'meta_key' => 'datum',
			'orderby' => 'meta_value',
			'order' => 'ASC',
			'posts_per_page' => -1,
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
		$output .= '<table class="matchprogram-'.$serie.' matchprogram responsive">';
			$output .= '<thead>';
				$output .= '<tr>';
					$output .= '<th>Datum</th>';
					$output .= '<th>Tid</th>';
					$output .= '<th>Plats</th>';
					$output .= '<th>Hemmalag</th>';
					$output .= '<th>Bortalag</th>';
					$output .= '<th>Resultat</th>';
				$output .= '</tr>';
			$output .= '</thead>';
			$output .= '<tbody>';
			while ($loop->have_posts() ) : $loop->the_post();
				$datum = get_post_meta($post->ID, 'datum', true);
				$tid = get_post_meta($post->ID, 'tid', true);
				$spelplats = get_post_meta($post->ID, 'spelplats', true);
				$hemmalag = get_post_meta($post->ID, 'hemmalag', true);
				$bortalag = get_post_meta($post->ID, 'bortalag', true);
				$resultat = get_post_meta($post->ID, 'resultat', true);
				
				$output .= '<tr class="matchprogram-match '.$serie.'">';
					$output .= '<td class="matchprogram-datum">'.$datum.'</td>';
					$output .= '<td class="matchprogram-tid">'.$tid.'</td>';
					$output .= '<td class="matchprogram-spelplats">'.$spelplats.'</td>';
					$output .= '<td class="matchprogram-hemmalag">'.$hemmalag.'</td>';
					$output .= '<td class="matchprogram-bortalag">'.$bortalag.'</td>';
					$output .= '<td class="matchprogram-resultat">'.$resultat.'</td>';
				$output .= '</tr>';	

			endwhile;
			$output .= '</tbody>';
		$output .= '</table>';

		return $output;
		wp_reset_query();
	}
	add_shortcode('matchprogram', 'matchprogram_func');

	/*
	Shortcode - laget
	 */
	function laget_func($atts)
	{
		global $post;
		extract($atts);
		$args = array(
			'post_type' => 'spelare',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'position',
					'field' => 'slug',
					'terms' => $position
				)
			)
		);
		$loop = new WP_Query($args);
		$output .= '<table class="laget">';
		while ($loop->have_posts() ) : $loop->the_post();

			$output .= '<tr class="laget-spelare">';
				$output .= '<td class="laget-spelare-namn">';
					$output .= '<a href="'.get_permalink().'">';
						$output .= get_field('trojnummer') . ' '.get_the_title();
					$output .= '</a>';
				$output .= '</td>';
			$output .= '</tr>';
		endwhile;
		$output .= '</table>';

		return $output;
		wp_reset_query();
	}
	add_shortcode('laget', 'laget_func');
	
	function nyheter_func($atts)
	{
		global $post;
		extract($atts);

		$loop = new WP_Query(array(
	        'post_type' => 'post',
	        'category_name' => $kategori,
	        'posts_per_page' => 5
	    ));
	    $output = '
	    <header>
            <h3>Relaterade nyheter</h3>
        </header>
        <div class="inner">
            <ul>';
            while ($loop->have_posts() ) : $loop->the_post();
                $output .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
            endwhile;
            $output .= '</ul>
        </div>';

        wp_reset_query();
		return $output;
	}
	add_shortcode('nyheter', 'nyheter_func');
	

	/*
	Ta bort width och height från bilder
	 */
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
	add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

	function remove_thumbnail_dimensions( $html ) {
	    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	    return $html;
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

