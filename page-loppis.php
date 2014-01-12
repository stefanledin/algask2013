<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
			<?php get_sidebar('loppis'); ?>

			<section class="span6">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						
						<h1 class="page-title"><?php the_title();?></h1>
						<?php the_content(); ?>
						
					</article>
				<?php endwhile; endif; wp_reset_query();?>

				<hr>
				<?php global $paged; ?>
				<?php global $query_string; ?>
				<?php query_posts(array(
					'post_type' => 'loppisen',
					'posts_per_page' => 10,
					'paged' => $paged
				)) ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>

						<?php the_post_thumbnail('medium'); ?>
						<h2><?php the_title();?></h2>
						<?php the_content(); ?>

					</article>
				<?php
					endwhile;
					previous_posts_link('<span class="btn pull-left">« Föregående sida</span>');
					next_posts_link('<span class="btn pull-right">Nästa sida »</span>');
					endif;
					wp_reset_query();
				?>
			</section>

			<aside class="span4" role="complementary">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>