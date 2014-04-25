<?php
function get_player_info ( $player ) {
	$games = get_player_games( $player );
	return array(
		'goals' => get_player_goals( $player, $games ),
		'stars' => get_player_stars( $player, $games ),
		'cards' => get_player_cards( $player, $games )
	);
}

function get_player_goals ( $player, $games = null ) {
	$games = ($games) ? $games : get_player_games( $player );
	$goals = 0;
	foreach ($games as $game) {
		$scorers = get_field('goals', $game->ID);
		foreach ($scorers as $scorer) {
			if ($scorer['player'][0] == $player->ID) {
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

function get_player_cards ($player, $games = null) {
	$games = ($games) ? $games : get_player_games( $player);
	$cardCount = array(
		'yellow' => 0,
		'red' => 0
	);
	foreach ($games as $game) {
		$cards = get_field('cards', $game->ID);
		foreach ($cards as $card) {
			if ($card['player'][0] == $player->ID) {
				$cardCount[$card['color']] = $cardCount[$card['color']] + 1;
			}
		}
	}
	return $cardCount;
}

function get_player_games ( $post ) {
	return get_posts( array(
		'connected_type' => 'players_to_games',
		'connected_items' => get_queried_object(),
		'nopaging' => true
	) );
}