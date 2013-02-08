<?php get_header(); ?>

<div role="main">
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col12">
			<div class="inner">
				<?php get_template_part('loop','single'); ?>
			</div>
		</section>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>