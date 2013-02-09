<?php 
    wp_reset_query();
    $args = array(
        'post_type' => 'blocks'
    );
    $loop = new WP_Query($args);
            
    while ($loop->have_posts() ) : $loop->the_post();
    ?>
        <?php
            $bg = get_field('bakgrund');
            switch ($bg) {
                case 'Blå':
                    $class = 'blue-block';
                    break;
                
                case 'Grå':
                    $class = 'grey-block';
                    break;

                default :
                    $class = null;
                    break;
            }
        ?>
        <section class="block clearfix <?php if ($class) echo $class; ?>">
            <div class="inner">
                <?php the_content(); ?>
            </div>
        </section>
    <?php
    endwhile;
?>  