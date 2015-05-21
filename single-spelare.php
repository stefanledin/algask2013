<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
			<nav class="span2 submenu-container">
				<ul class="submenu">
				<?php
					wp_list_pages('title_li=&child_of=5')
				?>
				</ul>
			</nav>

			<section class="span6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<h1><?php the_title();?></h1>
						<figure>
							<?php the_post_thumbnail('thumbnail'); ?>
						</figure>
						<h3>Fakta</h3>
						<table class="responsive">
							<tbody>
								<tr><td>Position:</td><td><?php echo array_shift(get_the_terms( $post->ID, 'position' ))->name; ?></td></tr>
								<tr><td>Född:</td><td><?php the_field('fodelsear'); ?></td></tr>
								<tr><td>Moderklubb:</td><td><?php the_field('moderklubb'); ?></td></tr>
								<tr><td>Säsonger i Älgå:</td><td><?php the_field('sasonger'); ?></td></tr>
							</tbody>
						</table>
						<?php if ( array_shift(get_the_terms( $post->ID, 'position' ))->slug != 'ledare' ) : ?>
						<h3>Statistik</h3>
						<table class="responsive">
							<tbody>
								<?php $playerData = get_player_info( $post ); ?>
								<tr><td>Antal mål:</td><td><?php echo $playerData['goals'] ?></td></tr>
								<tr><td>Antal gula kort:</td><td><?php echo $playerData['cards']['yellow']; ?></td></tr>
								<tr><td>Antal röda kort:</td><td><?php echo $playerData['cards']['red']; ?></td></tr>
							</tbody>
						</table>
						<?php endif; ?>
						<?php
						$playerInfo = get_field('information');
						if ($playerInfo[0]['fraga']) :
						?>
						<h3>Personligt</h3>
						<table class="responsive">
							<tbody>
								<?php
								$output = '';
								foreach ($playerInfo as $info) {
									$output .= '<tr><td>'.$info['fraga'].':</td><td>'.$info['svar'].'</td></tr>';
								}
								echo $output;
								?>
							</tbody>
						</table>
						<?php endif; ?>
					</article>
				<?php endwhile; endif;?>
			</section>

			<aside class="span4" role="complementary">
				<?php get_sidebar(); ?>
			</aside>

		</div>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>