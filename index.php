<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
		<section class="span8">
			<?php get_template_part('loop','index') ?>
	        <span class="btn">
	        	<a href="<?php echo get_permalink(2608);?>"><?php _e('Nyhetsarkiv »');?></a>
	        </span>
		</section>

		<aside class="span4" role="complementary">
			<?php get_sidebar(); ?>
		</aside>
		</div>
	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>