<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row-fluid">
		<div class="inner">
			<section class="span8 clearfix">
				<?php if ( have_posts() ) : ?>
					<?php global $more; ?>
					<h2 class="page-title">
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
					<?php previous_posts_link('<span class="btn pull-left">« Föregående sida</span>'); ?>
					<?php next_posts_link('<span class="btn pull-left">Fler nyheter »</span>'); ?>
				<?php else : ?>
					<h2>
					<?php printf( __( 'Sökresultat för: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h2>
					<p>Tyvärr hittades inga inlägg som matchade din sökning.</p>
				<?php endif; ?>
			</section>

			<aside class="span4" role="complementary">
				<?php get_sidebar('archive'); ?>
			</aside>

		</div><!-- eo inner -->

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>