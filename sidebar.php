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
            $img = get_field('bild');
        ?>
        <section class="block row-fluid <?php if ($class) echo $class; ?>">
            <?php if (!$img) :  ?>
            <div class="inner">
            <?php endif; ?>
                <?php the_content(); ?>
            <?php if (!$img) : ?>
            </div>
            <?php endif; ?>
        </section>
    <?php
    endwhile;
?>  