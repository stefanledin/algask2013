        </div><!-- e.o wrapper -->

        <footer role="contentinfo">
        	<div class="container-fluid">
        		<div class="inner">
                    <div class="row-fluid">
                        
                        <div class="span3">
                            <h3><a href="<?php echo get_permalink(5);?>">Fotboll</a></h3>
                            <ul>
                                <?php wp_list_pages('title_li=&child_of=5'); ?>
                            </ul>
                        </div>
                        <div class="span3">
                            <h3><a href="<?php echo get_permalink(7);?>">Skidor</a></h3>
                            <ul>
                                <?php wp_list_pages('title_li=&child_of=7'); ?>
                            </ul>
                        </div>
                        <div class="span3">
                            <h3><a href="<?php echo get_permalink(9);?>">Klubben</a></h3>
                            <ul>
                                <?php wp_list_pages('title_li=&child_of=9'); ?>
                            </ul>
                        </div>
                        <div class="span3">
                            <h3>Kontakt</h3>
                            <p>Älgå SK c/o Jessica Adolfsson<br>
                            Norra Fröbol Karlslund<br>
                            67193 Arvika</p>
                        </div>
                    </div>
                </div>
        	</div>
            <section class="sponsors container-fluid">
                <div class="inner">
                    <h3>Sponsorer</h3>
                    <?php 
                        $args = array(
                            'post_type' => 'Sponsorer',
                            'posts_per_page' => -1
                        );
                        $loop = new WP_Query($args);
                        $i = 1;
                        while ($loop->have_posts() ) : $loop->the_post();
                            
                            if ($i == 1) {
                                echo '<div class="row-fluid">';
                            }
                            $url = get_field('link');
                            $logo = get_field('logo');
                            ?>
                                <div class="span2 sponsor">
                                    <?php
                                        if ($logo) {
                                            echo '<a href="'.$url.'"><img src="'.$logo.'"></a>';
                                        } elseif ($url) {
                                            echo '<a href="'.$url.'">'.get_the_title().'</a>';
                                        } else {
                                            the_title();
                                        }
                                    ?>
                                </div>
                            <?php
                            if ($i == 6) {
                                echo '</div>';
                                $i = 0;
                            }
                        $i++;
                        endwhile;
                    ?>
                </div>
            </section>
            <div class="row-fluid">
                <div class="span12 center">
                    <span class="center">© Älgå Sportklubb <?php echo date('Y') ?></span>
                </div>
            </div>
        </footer>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-30098036-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
