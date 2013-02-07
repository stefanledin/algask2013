<?php 
    wp_reset_query();
    $args = array(
        'post_type' => 'blocks'
    );
    $loop = new WP_Query($args);
            
    while ($loop->have_posts() ) : $loop->the_post();
    ?>
        <section class="block clearfix">
            <div class="inner">
                <?php the_content(); ?>
            </div>
        </section>
    <?php
    endwhile;
?>  