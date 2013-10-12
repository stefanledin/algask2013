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
					$loppiskategorier = get_terms('loppiskategori');
					foreach ($loppiskategorier as $cat) {
						echo '<li><a href="'.get_term_link($cat).'">'.$cat->name.'</a></li>';
					}
				?>
				</ul>
			</nav>

			<section class="span6">
				<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );  ?>
				<h1 class="page-title"><?php echo $term->name;?></h1>

				<hr>
				<?php global $query_string; ?>
				<?php query_posts($query_string.'&posts_per_page=-1&post_type=loppisen'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>

						<?php the_post_thumbnail('medium'); ?>
						<h2><?php the_title();?></h2>
						<?php the_content(); ?>

					</article>
				<?php endwhile; endif; wp_reset_query();?>
			</section>

			<aside class="span4" role="complementary">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>