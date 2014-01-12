<?php 
    wp_reset_query();
    
    // Om det finns valda block för den här sidan
    $pageSpecificBlocks = get_field('valj_blocks');
    if ($pageSpecificBlocks) {
    
        foreach ($pageSpecificBlocks as $post) {
            setup_postdata($post);
            printBlock($post);
        }
    
    } 
        
    if (is_home() || is_front_page()) {        
        $visas_pa_startsidan_value = '1';
    } else {
        $visas_pa_startsidan_value = '2';
    }
    $args = array(
        'post_type' => 'blocks',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'alla_sidor',
                'value' => '1',
                'compare' => '=='
            ),
            array(
                'key' => 'visas_pa_startsidan',
                'value' => $visas_pa_startsidan_value,
                'compare' => '=='
            )
        )
    );
    // Skapa en loop
    $loop = new WP_Query($args);
    while ($loop->have_posts() ) : $loop->the_post();
        printBlock($post);
    endwhile;

    function printBlock($post) {
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
        </section><?php        
    }

    wp_reset_query();?>
    <a href="http://clk.tradedoubler.com/click?p=23365&a=2176386&g=20751670&EPI=7891&url=https://svenskaspel.se/svea/forening?id=7891"target="_blank"><img src="http://impse.tradedoubler.com/imp?type(img)g(20751670)a(2176386)" border=0></a>