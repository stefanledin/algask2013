<?php get_header(); ?>

<div role="main">
	<div class="col2-border"></div>
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col8 first-col">
			<div class="inner">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<?php the_post_thumbnail(); ?>
						<h2><?php the_title();?></h2>
                        <div class="post-meta">
                            <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
                            <?php the_category(', '); ?>
                        </div>
						<?php the_content('Läs mer »');?>
                        <span class="byline"><?php _e('Skrivet av: '); the_author();?></span>
					</article>
				<?php endwhile; endif;?>
                <a href="<?php echo get_permalink(2608);?>"><?php _e('Nyhetsarkiv');?></a>
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