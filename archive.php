<?php
/*
Template name: Arkiv
*/
?>
<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col8 first-col">
			<div class="inner">
				<h2>
				<?php 
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Nyhetsarkiv - %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Nyhetsarkiv -: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
				else :
					_e( 'Nyhetsarkiv', 'twentytwelve' );
				endif;
				?>
				</h2>
				<?php get_template_part('loop','archive'); ?>
			</div>
		</section>

		<aside class="col col4 last-col" role="complementary">
			<?php get_sidebar('archive'); ?>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>