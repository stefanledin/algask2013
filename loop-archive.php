<?php global $paged; ?>
<?php query_posts('posts_per_page=15&paged='.$paged) ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="<?php the_ID();?>" <?php post_class();?>>
		<?php #the_post_thumbnail(); ?>
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <div class="post-meta">
            <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
            <?php the_category(', '); ?>
        </div>
	</article>
	<?php endwhile; ?>
	<span class="pull-left"><?php previous_posts_link('« Föregående sida'); ?></span>
	<span class="pull-right"><?php next_posts_link('Nästa sida »'); ?></span>
<?php endif;?>
<?php wp_reset_query(); ?>