<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
			<nav class="submenu-container span2">
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

			<section class="span6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<h1 class="page-title"><?php the_title();?></h1>
						<?php the_content();?>
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