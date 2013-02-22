<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="<?php the_ID();?>" <?php post_class('clearfix');?>>
		<?php if (get_the_post_thumbnail()) : ?>
			<figure class="post-image thumbnail pull-left">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('thumbnail'); ?>
				</a>
			</figure>
		<?php endif; ?>
		<h2><?php the_title();?></h2>
        <div class="post-meta">
            <time pubdate><?php _e('Publicerat: '); the_time('Y-m-d H:i');?></time>
            <?php _e('Kategori: ');?><?php the_category(', '); ?>
        </div>
		<?php the_content('Läs mer »');?>
        <span class="byline"><?php _e('Skrivet av: '); the_author();?></span>
	</article>
<?php endwhile; endif;?>