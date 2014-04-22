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

						<?php $playerInfo = get_field('information');?>
						<?php if ($playerInfo) : ?>
						<table class="responsive">
							<tbody>
								<?php
									$output .= '<tr><td>Född:</td><td>'.get_field('fodelsear').'</td></tr>';
									$output .= '<tr><td>Moderklubb:</td><td>'.get_field('moderklubb').'</td></tr>';
									$output .= '<tr><td>Säsonger i Älgå:</td><td>'.get_field('sasonger').'</td></tr>';
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