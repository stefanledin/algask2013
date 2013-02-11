        </div><!-- e.o wrapper -->

        <footer role="contentinfo">
        	<div class="container">
        		<div class="inner">
        			<span>© Älgå Sportklubb 2013</span>
        		</div>
        	</div>
        </footer>

        <div id="mobile-navigation">
            <ul>
            <?php wp_list_pages('title_li='); ?>
            </ul>
        </div>

        <script src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
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
