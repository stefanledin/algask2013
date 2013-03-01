<?php global $paged; ?>
<?php global $query_string; ?>
<?php query_posts($query_string.'&posts_per_page=15') ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="<?php the_ID();?>" <?php post_class();?>>
		<?php #the_post_thumbnail(); ?>
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <div class="post-meta">
            <div class="genericon genericon-time"></div><time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
            <div class="genericon genericon-tag"></div><?php _e('Kategori: ');?><?php the_category(', '); ?>
        </div>
	</article>
	<?php endwhile; ?>
	<?php previous_posts_link('<span class="btn pull-left">« Föregående sida</span>'); ?>
	<?php next_posts_link('<span class="btn pull-right">Nästa sida »</span>'); ?>
<?php endif;?>
<?php wp_reset_query(); ?>