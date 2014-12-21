<?php
function orderStars( $a, $b ) {
	if ($a['stars'] == $b['stars']) {
        return 0;
    }
    return ($a['stars'] > $b['stars']) ? -1 : 1;
}
function shortcode_stjarntoppen( $atts ) {
	$playerQuery = new WP_Query( array(
		'post_type' => 'spelare',
		'posts_per_page' => -1
	) );
	$data = array();
	if ( $playerQuery->have_posts() ) {
		p2p_type( 'players_to_games' )->each_connected( $playerQuery );
		while ( $playerQuery->have_posts() ) : $playerQuery->the_post();
			global $post;
			$playerData = array(
				'id' => get_the_id(),
				'name' => get_the_title(),
				'stars' => get_player_stars($post, $post->connected)
			);
			array_push($data, $playerData);
		endwhile;
	}
	usort($data, 'orderStars');
	$output = '<table class="responsive">';
		$output .= '<thead>';
			$output .= '<tr>';
				$output .= '<th>Namn</th>';
				$output .= '<th>Stjärnor</th>';
			$output .= '</tr>';
		$output .= '</thead>';
		$output .= '<tbody>';
			foreach( $data as $player ) :
				if ( $player['stars'] != 0 ) :
				$is_active = get_post_meta( $player['id'], 'aktiv', true );
				$output .= '<tr>';
					$output .= '<td>';
						if ( $is_active ) {
							$output .= '<a href="'.get_permalink($player['id']).'">';
						}
						$output .= $player['name'];
						if ( $is_active ) {
							$output .= '</a>';
						}
					$output .= '</td>';
					$output .= '<td>'.$player['stars'].'</td>';
				$output .= '</tr>';
				endif;
			endforeach;
			$output .= '';
		$output .= '</tbody>';
		$output .= '';
	$output .= '</table>';
	return $output;
}
add_shortcode( 'stjarntoppen', 'shortcode_stjarntoppen' );