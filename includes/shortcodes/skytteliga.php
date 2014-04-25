<?php
function orderGoals( $a, $b ) {
	if ($a['goals'] == $b['goals']) {
        return 0;
    }
    return ($a['goals'] > $b['goals']) ? -1 : 1;
}
function shortcode_skytteliga ($atts) {
	extract($atts);
	$games = get_posts( array(
		'post_type' => 'matcher',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'field' => 'slug',
				'taxonomy' => 'serie',
				'terms' => $serie
			),
			array(
				'field' => 'slug',
				'taxonomy' => 'sasong',
				'terms' => $sasong
			)
		)
	) );
	$playerData = array();
	foreach ($games as $game) {
		$scorers = get_field('goals', $game->ID);
		foreach ($scorers as $scorer) {
			if ( $playerData[$scorer['player'][0]] ) {
				$goals = $playerData[$scorer['player'][0]];
				$playerData[$scorer['player'][0]] = $goals + 1;
			} else {
				$playerData[$scorer['player'][0]] = 1;
			}			
		}
	}
	$players = array();
	foreach ($playerData as $id => $goals) {
		$player = get_post( $id );
		array_push($players, array(
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
					$output .= '<td>'.$player['name'].'</td>';
					$output .= '<td>'.$player['goals'].'</td>';
				$output .= '</tr>';
			endforeach;
		$output .= '</tbody>';
	$output .= '</table>';

	$output .= '';
	return $output;
}
add_shortcode( 'skytteliga', 'shortcode_skytteliga' );