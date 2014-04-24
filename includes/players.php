<?php
function get_player_info ( $id ) {
	
}

function get_player_goals ( $id, $games = null ) {
	$games = ($games) ? $games : get_player_games( $id );
	$goals = 0;
	foreach ($games as $game) {
		$scorers = get_field('goals', $game->ID);
		foreach ($scorers as $scorer) {
			if ($scorer['player'][0] == $id) {
				$goals++;				
			}
		}
	}
	return $goals;
}

function get_player_stars ( $player, $games = null ) {
	$games = ($games) ? $games : get_player_games( $player);
	$starCount = 0;
	foreach ($games as $game) {
		$stars = get_field('tre_stjarnor', $game->ID);
		foreach ($stars as $star) {
			if ($star['player'][0] == $player->ID) {
				$starCount = $starCount + (int) $star['stars'];
			}
		}
	}
	return $starCount;
}

function get_player_games ( $post ) {
	return get_posts( array(
		'connected_type' => 'players_to_games',
		'connected_items' => get_queried_object(),
		'nopaging' => true
	) );
}