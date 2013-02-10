<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<nav class="col col2 first-col">
			<ul class="submenu">
			<?php
				wp_list_pages('title_li=&child_of=5')
			?>
			</ul>
		</nav>

		<section class="col col6">
			<div class="breadcrumbs">
				Fotboll » Herrlaget » <?php the_title(); ?>
			</div>
			<div class="inner">
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
			</div>
		</section>

		<aside class="col col4 last-col" role="complementary">
			<?php get_sidebar(); ?>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>