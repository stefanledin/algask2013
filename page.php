<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<nav class="col col2 first-col">
			<div class="inner">
				<ul class="submenu">
				<?php
					wp_list_pages(array(
						'title_li' => '',
						'child_of' => $post->ID,
						'depth' => 1
					));
				?>
				</ul>
			</div>
		</nav>

		<section class="col col6">
			<div class="inner">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<?php the_post_thumbnail(); ?>
						<h2><?php the_title();?></h2>
						<?php the_content();?>
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