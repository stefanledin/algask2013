<?php 
    wp_reset_query();
    if (is_home() || is_front_page()) {        
        $visas_pa_startsidan_value = '1';
    } else {
        $visas_pa_startsidan_value = '0';
    }
    $args = array(
        'post_type' => 'blocks',
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'alla_sidor',
                'value' => '1',
                'compare' => '=='
            ),
            array(
                'key' => 'visas_pa_dessa_sidor',
                'value' => $post->ID,
                'compare' => 'LIKE'
            ),
            array(
                'key' => 'visas_pa_startsidan',
                'value' => $visas_pa_startsidan_value,
                'compare' => '=='
            )
        )
    );
    $loop = new WP_Query($args);
    
    while ($loop->have_posts() ) : $loop->the_post();
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
            <?php if ($img) :  ?>
            <div class="inner">
            <?php endif; ?>
                <?php the_content(); ?>
            <?php if ($img) : ?>
            </div>
            <?php endif; ?>
        </section>
    <?php
    endwhile;
?>  