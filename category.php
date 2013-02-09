<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col8 first-col">
			<div class="inner">
				<h2>
				<?php printf( __( 'Nyhetsarkiv: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				</h2>
				<?php get_template_part('loop','category'); ?>
			</div>
		</section>

		<aside class="col col4 last-col" role="complementary">
			<?php get_sidebar('archive'); ?>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>