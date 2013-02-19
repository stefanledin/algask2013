<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">

		<section class="span8">
			<div class="inner">
				<?php get_template_part('loop','index') ?>
                <span class="btn">
                	<a href="<?php echo get_permalink(2608);?>"><?php _e('Nyhetsarkiv »');?></a>
                </span>
			</div>
		</section>

		<aside class="span4" role="complementary">
			<div class="">
				<?php get_sidebar(); ?>
			</div>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>