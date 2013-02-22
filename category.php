<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
			<section class="span8 clearfix">
				<h2 class="page-title">
				<?php printf( __( 'Nyhetsarkiv: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				</h2>
				<?php get_template_part('loop','category'); ?>
			</section>

			<aside class="span4" role="complementary">
				<?php get_sidebar('archive'); ?>
			</aside>

		</div>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>