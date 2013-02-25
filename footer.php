        </div><!-- e.o wrapper -->

        <footer role="contentinfo">
        	<div class="container-fluid">
        		<div class="inner">
                    <div class="row-fluid">
                        
                        <div class="span3">
                            <h3><a href="<?php echo get_permalink(5);?>">Fotboll</a></h3>
                            <?php wp_list_pages('title_li=&child_of=5'); ?>
                        </div>
                        <div class="span3">
                            <h3><a href="<?php echo get_permalink(7);?>">Skidor</a></h3>
                            <?php wp_list_pages('title_li=&child_of=7'); ?>
                        </div>
                        <div class="span3">
                            <h3><a href="<?php echo get_permalink(9);?>">Klubben</a></h3>
                            <?php wp_list_pages('title_li=&child_of=9'); ?>
                        </div>
                        <div class="span3">
                            <h3>Kontakt</h3>
                            <p>Älgå SK c/o Mikael Nilsson<br>
                            Spjutvägen 2B 671 93 Arvika</p>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 center">
            			<span class="center">© Älgå Sportklubb <?php echo date('Y') ?></span>
                        <br>
                        <small>Webmaster: Stefan Ledin</small>
                    </div>
        		</div>
        	</div>
        </footer>

        <div id="mobile-navigation">
            <ul>
            <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
            </ul>
            <div class="close"></div>
        </div>

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
