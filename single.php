<?php get_header(); ?>

<div role="main">
	<div class="topborder"></div>
	<div class="row clearfix">

		<section class="col col12">
			<div class="inner">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php if (get_the_post_thumbnail()) : ?>
					<figure>
						<?php the_post_thumbnail(); ?>
					</figure>
					<?php endif; ?>
					<article id="<?php the_ID();?>" <?php post_class('col col9');?>>
						<h2><?php the_title();?></h2>
						<?php the_content();?>
					</article>
					<aside class="col col3 last-col" role="complementary">
						<?php if (get_field('malskyttar')) : ?>
							<div class="infobox">
								<div class="inner">
									<h3>Målskyttar</h3>
									<?php the_field('malskyttar') ?>
								</div>
							</div>
						<?php endif; ?>
						
						<?php if (get_field('uppstallning')) : ?>
							<div class="infobox">
								<div class="inner">
									<h3>Laguppställning</h3>
									<?php the_field('uppstallning') ?>
								</div>
							</div>
						<?php endif; ?>
					</aside>
				<?php endwhile; endif;?>
			</div>
		</section>

	</div><!-- eo row -->

</div><!-- e.o main -->

<?php get_footer(); ?>