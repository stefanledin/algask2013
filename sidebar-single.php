<?php 
$gameQuery = new WP_Query( array(
	'connected_type' => 'games_to_posts',
  	'connected_items' => get_queried_object()
) );
if ( $gameQuery->have_posts() ) {
	p2p_type( 'players_to_games' )->each_connected( $gameQuery );
	while ( $gameQuery->have_posts() ) {
		$gameQuery->the_post();
		$scorers = get_field('goals', $post->ID);
		$cards = get_field('cards', $post->ID);
		$stars = get_field('tre_stjarnor', $post->ID);
		$team = '';
		foreach( $post->connected as $post) {
			setup_postdata( $post );
			$team .= '<a href="'.get_permalink().'">' . get_the_title() . '</a><br>';
			wp_reset_postdata();
		}
	}
	wp_reset_postdata();
}
?>
<?php if ( isset($scorers) ) : ?>
	<div class="infobox">
		<header>
			<h3>Målskyttar</h3>
		</header>
		<div class="inner">
			<?php
			foreach ($scorers as $scorer) {
				$player = get_post($scorer['player'][0]);
				$output = ($scorer['goal']) ? $scorer['goal'] . ' ' : '';
				$output .= '<a href="'.get_permalink($player->ID).'">' . $player->post_title . '</a>';
				$output .= ($scorer['matchminut']) ? ' (' . $scorer['matchminut'] . ')' : '';
				echo $output . '<br>';
			}
			?>
		</div>
	</div>
<?php endif; ?>
<?php if ( isset($stars) ) : ?>
	<div class="infobox">
		<header>
			<h3>Tre stjärnor</h3>
		</header>
		<div class="inner">
			<?php
			foreach ($stars as $star) {
				$player = get_post($star['player'][0]);
				echo ($star['stars'] == '1') ? $star['stars'] . ' stjärna: ' : $star['stars'] . ' stjärnor: ';
				echo '<a href="'.get_permalink($player->ID).'">' . $player->post_title . '</a><br>';
			}
			?>
		</div>
	</div>
<?php endif; ?>
<?php if ( isset($cards) ) : ?>
	<div class="infobox">
		<header>
			<h3>Kort</h3>
		</header>
		<div class="inner">
			<?php
			foreach ($cards as $card) {
				$player = get_post($card['player'][0]);
				echo (($card['color'] == 'yellow') ? 'Gult: ' : 'Rött: ') . ' <a href="'.get_permalink($player->ID).'">' . $player->post_title . '</a><br>';
			}
			?>
		</div>
	</div>
<?php endif; ?>
<?php if ( isset($team) ) : ?>
	<div class="infobox">
		<header>
			<h3>Laguppställning</h3>
		</header>
		<div class="inner">
			<?php echo $team; ?>
		</div>
	</div>
<?php endif; ?>

<?php if ( get_field('malskyttar') ) : ?>
	<div class="infobox">
		<header>
			<h3>Målskyttar</h3>
		</header>
		<div class="inner">
			<?php the_field('malskyttar'); ?>
		</div>
	</div>
<?php endif; ?>

<?php if ( get_field('uppstallning') ) : ?>
	<div class="infobox">
		<header>
			<h3>Laguppställning</h3>
		</header>
		<div class="inner">
			<?php the_field('uppstallning') ?>
		</div>
	</div>
<?php endif; ?>