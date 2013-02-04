<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php
	    /*
	     * Print the <title> tag based on what is being viewed.
	     */
	    global $page,
	    $paged;

	    wp_title( '|', true, 'right' );

	    // Add the blog name.
	    bloginfo( 'name' );

	    // Add the blog description for the home/front page.
	    $site_description = get_bloginfo( 'description', 'display' );
	    if ( $site_description && ( is_home() || is_front_page() ) )
	        echo " | $site_description";

	    ?></title>
        <meta name="description" content="<?php bloginfo('description')?>">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <script src="<?php bloginfo('template_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <nav class="topnav">
        	<div class="container">
	        	<div class="pull-left">
	        		<?php wp_nav_menu(array('theme_location' => 'topmenu', 'container' => '')); ?>
	        	</div>
	        	<div class="pull-right">
	        		ijgdfsp
	        	</div>
	        </div><!-- e.o .container -->
        </nav>

        <div id="wrapper">

        	<header class="banner">
        		<div class="logo">
        			<img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Älgå Sportklubb" title="Älgå Sportklubb">
        		</div>
        		<nav class="main-navigation clearfix">
        			<?php
        				wp_nav_menu(array(
        					'theme_location' => 'mainmenu',
        					'container' => '',
        					'menu_class' => 'menu pull-left'
    					));
					?> 
        			<div class="search pull-right">
        				Sök
        			</div>
        		</nav>
        	</header>

        	<div role="main">
        		<div class="col2-border"></div>
        		<div class="topborder"></div>
        		<div class="row clearfix">

	        		<section class="col col8 first-col">
	        			<div class="inner">
	        				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<article id="<?php the_ID();?>" <?php post_class();?>>
									<?php the_post_thumbnail(); ?>
									<h2><?php the_title();?></h2>
									<?php the_content('Läs mer »');?>
								</article>
							<?php endwhile; endif;?>
	        			</div>
	        		</section>

	        		<aside class="col col4 last-col" role="complementary">
	        			<div class="inner">
	        				<p>Aside</p>
	        			</div>
	        		</aside>

	        	</div>
        	
        	</div><!-- e.o main -->
        
        </div><!-- e.o wrapper -->

        <footer role="contentinfo">
        	<div class="container">
        		<div class="inner">
        			<span>© Älgå Sportklubb 2013</span>
        		</div>
        	</div>
        </footer>

        <script src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
