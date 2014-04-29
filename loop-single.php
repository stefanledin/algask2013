<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if (get_the_post_thumbnail()) : ?>
	<figure>
		<?php the_post_thumbnail('large'); ?>
	</figure>
	<?php endif; ?>
	<div class="row-fluid">
		<article id="<?php the_ID();?>" <?php post_class('span9 clearfix');?>>
			<h2><?php the_title();?></h2>
			<?php if (!strcmp(get_field('resultat'), 'Division X: ()') ) : ?>
			<div class="infobox">
				<div class="inner">
					<?php the_field('resultat');?>
				</div>
			</div>
			<?php endif; ?>
			<div class="post-meta">
	            <div class="genericon genericon-time"></div><time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
	            <div class="genericon genericon-tag"></div><?php _e('Kategori: ');?><?php the_category(', '); ?>
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