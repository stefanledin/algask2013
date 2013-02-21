<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
		<section class="span8">
			<div id="content">
				<?php get_template_part('loop','index') ?>
			</div>
	        <nav id="pagination-nav" class="clearfix">
		        <?php #previous_posts_link('<span class="btn pull-left">« Föregående sida</span>'); ?>
				<?php next_posts_link('<span class="btn pull-left">Fler nyheter »</span>'); ?>
			</nav>
		</section>

		<aside class="span4" role="complementary">
			<?php get_sidebar(); ?>
		</aside>
		</div>
	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>