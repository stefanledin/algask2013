<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<nav class="col col2 first-col">
			<ul class="submenu">
			<?php
				if (!empty($post->ancestors[1])) {
					wp_list_pages('title_li=&child_of='.$post->ancestors[1]);
				} elseif($post->post_parent !== $post->ancestors[0]) {
					wp_list_pages('title_li=&child_of='.$post->ID);
				} else {
					wp_list_pages('title_li=&child_of='.$post->post_parent);
				}
				echo $subpage;

			?>
			</ul>
		</nav>

		<section class="col col6">
			<div class="breadcrumbs">
				<?php if(function_exists('bcn_display')) bcn_display();?>
			</div>
			<div class="inner">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title();?></h1>
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