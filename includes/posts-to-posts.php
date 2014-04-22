<?php
/**
 * Relationer mellan innehållstyper
 */
function setup_connection_types () {
	p2p_register_connection_type( array(
		'name' => 'blocks_to_pages',
		'from' => 'blocks',
		'to' => 'page',
		'sortable' => 'any'
	) );
	p2p_register_connection_type( array(
		'name' => 'players_to_games',
		'from' => 'spelare',
		'to' => 'matcher',
		'sortable' => 'any',
		'admin_box' => array(
			'show' => 'to'
		)
	) );
}
add_action( 'p2p_init', 'setup_connection_types' );

function connectable_results_per_page( $args, $ctype, $post_id ) {
    $args['p2p:per_page'] = 10;
    return $args;
}
add_filter( 'p2p_connectable_args', 'connectable_results_per_page', 10, 3 );