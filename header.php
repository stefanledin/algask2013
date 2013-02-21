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
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/responsive-tables.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <script src="<?php bloginfo('template_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <span id="open-mobile-navigation" class="btn">Meny</span>

        <nav class="topnav">
        	<div class="container-fluid">
	        	<div class="pull-left">
	        		<?php wp_nav_menu(array('theme_location' => 'topmenu', 'container' => '')); ?>
	        	</div>
	        	<div class="pull-right">
	        		ijgdfsp
	        	</div>
	        </div><!-- e.o .container -->
        </nav>

        <div id="wrapper" class="container-fluid">

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
        			<div class="search closed pull-right">
        				<i class="icon icon-search"></i>
                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <label class="visuallyhidden screen-reader-text" for="s">Sök efter:</label>
                            <input type="text" placeholder="Sök" value="" name="s" id="s" />
                        </form>
        			</div>
        		</nav>
        	</header>