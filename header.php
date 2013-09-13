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

        <meta name="description" content="Den officiella hemsidan för Älgå Sportklubb.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/img/touch-icon.png" />
        <link rel="icon" type="image/ico" href="<?php bloginfo('template_directory');?>/img/favicon.ico">
        
        <!--<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>-->
        
        <script src="<?php bloginfo('template_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="open-mobile-navigation">
            <div class="genericon genericon-menu pull-left"></div>
            <span class="pull-right">&nbsp;&nbsp;Meny</span>
        </div>
        <nav id="mobile-navigation">
            <ul>
                <li <?php if(is_home() || is_front_page()) echo 'class="current_page_item"'; ?>><a href="<?php bloginfo('url');?>">Förstasidan</a></li>
                <?php wp_list_pages('title_li=&sort_column=menu_order'); ?>
            </ul>
        </nav>

        <nav class="topnav">
        	<div class="container-fluid">
	        	<div class="pull-left">
	        		<?php wp_nav_menu(array('theme_location' => 'topmenu', 'container' => '')); ?>
	        	</div>
	        	<div class="pull-right">
	        		<ul class="topnav-icons">
                        <li>
                            <a href="<?php bloginfo('rss2_url'); ?>" title="RSS" target="_blank">
                                <i class="icon icon-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/algasportklubb" title="Älgå på Twitter" target="_blank">
                                <i class="icon icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.facebook.com/pages/%C3%84lg%C3%A5-SK/172334356137430" title="Älgå på Facebook" target="_blank">
                                <i class="icon icon-facebook"></i>
                            </a>
                        </li>
                    </ul>
	        	</div>
	        </div><!-- e.o .container -->
        </nav>

        <div id="wrapper" class="container-fluid">

        	<header class="banner">
        		<div class="logo">
                    <a href="<?php bloginfo('url');?>">
        			    <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Älgå Sportklubb" title="Älgå Sportklubb">
                    </a>
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
                        <div class="genericon genericon-search"></div>
                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <label class="visuallyhidden screen-reader-text" for="s">Sök efter:</label>
                            <input type="text" placeholder="Sök" value="" name="s" id="s" />
                        </form>
        			</div>
        		</nav>
        	</header>