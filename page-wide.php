<?php
/*
Template name: Bred
*/
?>
<?php get_header(); ?>

<div role="main">
	<div class="col1-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
			<nav class="submenu-container span2">
				<ul class="submenu">
				<?php
					get_template_part('menu','submenu');
				?>
				</ul>
			</nav>

			<section class="span10">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<h1 class="page-title"><?php the_title();?></h1>
						<?php the_content();?>
					</article>
				<?php endwhile; endif;?>
			</section>

		</div>
	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>