<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col8 first-col">
			<div class="inner">
				<?php get_template_part('loop','index') ?>
                <span class="btn">
                	<a href="<?php echo get_permalink(2608);?>"><?php _e('Nyhetsarkiv »');?></a>
                </span>
			</div>
		</section>

		<aside class="col col4 last-col" role="complementary">
			<?php 
                get_sidebar();
            ?>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>