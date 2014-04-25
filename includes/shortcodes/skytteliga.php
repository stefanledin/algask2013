<?php
function orderGoals( $a, $b ) {
	if ($a['goals'] == $b['goals']) {
        return 0;
    }
    return ($a['goals'] > $b['goals']) ? -1 : 1;
}
function shortcode_skytteliga ($atts) {
	extract($atts);
	$args = array(
		'post_type' => 'matcher',
		'posts_per_page' => -1,
		'tax_query' => array()
	);
	if ($serie && $sasong) {
		$args['tax_query']['relation'] = 'AND';
	}
	if ($serie) {
		$args['tax_query'][] = array(
			'field' => 'slug',
			'taxonomy' => 'serie',
			'terms' => $serie
		);
	}
	if ($sasong) {
		$args['tax_query'][] = array(
			'field' => 'slug',
			'taxonomy' => 'sasong',
			'terms' => $sasong
		);
	}
	$games = get_posts( $args );
	$playerData = array();
	foreach ($games as $game) {
		$scorers = get_field('goals', $game->ID);
		if ($scorers) {
			foreach ($scorers as $scorer) {
				if ( $playerData[$scorer['player'][0]] ) {
					$goals = $playerData[$scorer['player'][0]];
					$playerData[$scorer['player'][0]] = $goals + 1;
				} else {
					$playerData[$scorer['player'][0]] = 1;
				}			
			}
		}
	}
	$players = array();
	foreach ($playerData as $id => $goals) {
		$player = get_post( $id );
		array_push($players, array(
			'id' => $id,
			'name' => $player->post_title,
			'goals' => $goals
		));
	}
	usort($players, 'orderGoals');
	$output = '<table class="responsive">';
		$output .= '<thead>';
			$output .= '<tr>';
				$output .= '<th>Namn</th>';
				$output .= '<th>Mål</th>';
			$output .= '</tr>';
		$output .= '</thead>';
		$output .= '<tbody>';
			foreach ( $players as $player) :
				$output .= '<tr>';
					$output .= '<td><a href="'.get_permalink($player['id']).'">'.$player['name'].'</a></td>';
					$output .= '<td>'.$player['goals'].'</td>';
				$output .= '</tr>';
			endforeach;
		$output .= '</tbody>';
	$output .= '</table>';

	$output .= '';
	return $output;
}
add_shortcode( 'skytteliga', 'shortcode_skytteliga' );