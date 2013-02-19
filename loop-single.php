<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if (get_the_post_thumbnail()) : ?>
	<figure>
		<?php the_post_thumbnail(); ?>
	</figure>
	<?php endif; ?>
	<div class="row-fluid">
		<article id="<?php the_ID();?>" <?php post_class('span9');?>>
			<h2><?php the_title();?></h2>
			<div class="post-meta">
		        <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
		        <?php the_category(', '); ?>
		    </div>
		    <?php 
	    	if (!strcmp(get_field('resultat'), 'Division X: ()') ) : ?>
	        	<div class="infobox">
	        		<div class="inner">
	        			<?php echo the_field('resultat'); ?>
	        		</div>
	        	</div>
	    	<?php endif; ?>
			<?php the_content();?>
			<span class="byline"><?php _e('Skrivet av: '); the_author();?></span>
		</article>
		<aside class="span3" role="complementary">
			<?php get_sidebar('single'); ?>
		</aside>
	</div>
<?php endwhile; endif;?>