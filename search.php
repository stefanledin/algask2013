<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col8 first-col">
			<div class="inner">
				<?php if ( have_posts() ) : ?>
					<?php global $more; ?>
					<h2>
					<?php printf( __( 'Sökresultat för: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h2>
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<h3><?php the_title();?></h3>
				        <div class="post-meta">
				            <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
				            <?php the_category(', '); ?>
				        </div>
						<?php the_content('Läs mer »');?>
				        <span class="byline"><?php _e('Skrivet av: '); the_author();?></span>
					</article>
				<?php endwhile; ?>
					<span class="pull-left"><?php previous_posts_link('« Föregående sida'); ?></span>
					<span class="pull-right"><?php next_posts_link('Nästa sida »'); ?></span>
				<?php endif; ?>
			</div>
		</section>

		<aside class="col col4 last-col" role="complementary">
			<?php get_sidebar('archive'); ?>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>