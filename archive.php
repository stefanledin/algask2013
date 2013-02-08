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
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="<?php the_ID();?>" <?php post_class();?>>
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title();?></h3>
                        <div class="post-meta">
                            <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
                            <?php the_category(', '); ?>
                        </div>
						<?php the_content('Läs mer »');?>
                        <span class="byline"><?php _e('Skrivet av: '); the_author();?></span>
					</article>
				<?php endwhile; endif;?>
			</div>
		</section>

		<aside class="col col4 last-col" role="complementary">
			<section class="infobox">
				<div class="inner">
					<header>
						<h3>Kategorier</h3>
					</header>
					<ul>
					<?php
						wp_list_categories(array(
							'title_li' => ''
						));
					?>
					</ul>
				</div>
			</section>
			<section class="infobox">
				<div class="inner">
					<header>
						<h3>Arkiv</h3>
					</header>
					<ul>
					<?php wp_get_archives();?>
					</ul>
				</div>
			</section>
		</aside>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>