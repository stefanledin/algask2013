<?php global $paged; ?>
<?php global $more; $more = null; ?>
<?php query_posts('posts_per_page=15&paged='.$paged) ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="<?php the_ID();?>" <?php post_class('clearfix');?>>
		<?php if (get_the_post_thumbnail()) : ?>
			<figure class="post-image thumbnail pull-left">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('thumbnail'); ?>
				</a>
			</figure>
		<?php endif; ?>
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <div class="post-meta">
            <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
            <?php the_category(', '); ?>
        </div>
        <?php the_content('Läs mer »'); ?>
	</article>
	<?php endwhile; ?>
	<?php previous_posts_link('<span class="btn pull-left">« Föregående sida</span>'); ?>
	<?php next_posts_link('<span class="btn pull-right">Nästa sida »</span>'); ?>
<?php endif;?>
<?php wp_reset_query(); ?>