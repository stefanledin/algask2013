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
                            <p>Älgå SK c/o Mikael Nilsson<br>
                            Spjutvägen 2B 671 93 Arvika</p>
                        </div>
                    </div>
                </div>
        	</div>
            <section class="sponsors container-fluid">
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
                        ?>
                            <div class="span2 sponsor">
                                <?php the_title(); ?>
                            </div>
                        <?php
                        if ($i == 6) {
                            echo '</div>';
                            $i = 0;
                        }
                    $i++;
                    endwhile;
                ?>
            </section>
            <div class="row-fluid">
                <div class="span12 center">
                    <span class="center">© Älgå Sportklubb <?php echo date('Y') ?></span>
                </div>
            </div>
        </footer>

        <script src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
