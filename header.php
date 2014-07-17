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

        <style type="text/css">
        html { font-size: 100%; }
button, html, input, select, textarea { font-family: sans-serif; color: rgb(34, 34, 34); }
body { margin: 0px; font-size: 1em; line-height: 1.4; background: url(http://www.algask.se/wp-content/themes/algask13/img/background.jpg) repeat-x rgb(255, 255, 255); }
#open-mobile-navigation { padding: 5px 10px; cursor: pointer; position: relative; color: rgb(255, 255, 255); float: right; background: rgb(45, 104, 178); display: none; }
.genericon { display: inline-block; width: 16px; height: 16px; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1; font-family: Genericons; text-decoration: inherit; font-weight: 400; font-style: normal; vertical-align: top; }
.pull-left { float: left; }
.pull-right { float: right; }
article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary { display: block; }
#mobile-navigation { display: none; z-index: 1; width: 100%; }
dl, menu, ol, ul { margin: 1em 0px; }
menu, ol, ul { padding: 0px 0px 0px 40px; }
nav ol, nav ul { list-style: none; }
#mobile-navigation ul { margin: 0px; padding: 0px; width: 100%; overflow: auto; background: rgb(43, 48, 135); }
#mobile-navigation li { list-style: none; }
a, a:visited { color: rgb(45, 104, 178); }
#mobile-navigation a, #mobile-navigation a:visited { color: rgb(255, 255, 255); text-decoration: none; }
#mobile-navigation a { padding: 10px 0px 10px 15px; display: block; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgba(255, 255, 255, 0.298039); }
#mobile-navigation .current_page_item > a { background: rgb(45, 104, 178); }
ul.children { margin-left: 15px; display: none; }
#mobile-navigation .children { padding: 0px; width: 100%; display: block; }
#mobile-navigation .children a { padding-left: 30px; }
#mobile-navigation .children .children a { padding-left: 60px; }
.topnav { height: 30px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(255, 255, 255); background: rgb(43, 48, 135); }
.container-fluid { padding-right: 20px; padding-left: 20px; }
#wrapper, .container-fluid { margin: 0px auto; max-width: 1280px; }
.menu { margin: 0px; padding: 0px; }
.menu li { display: inline; }
.menu a { color: rgb(255, 255, 255); text-decoration: none; font-weight: 100; display: block; }
.topnav a { display: block; float: left; padding: 6px 10px 5px; border-left-width: 1px; border-left-style: solid; border-left-color: rgba(255, 255, 255, 0.2); font-size: 0.875em; }
.topnav a:last-child { border-right-width: 1px; border-right-style: solid; border-right-color: rgba(255, 255, 255, 0.2); }
.topnav .current-menu-item a, .topnav a:hover { background: rgb(45, 104, 178); }
.topnav-icons { margin: 0px; }
.topnav-icons li { margin: 3px 0px 0px 10px; display: block; float: left; }
.topnav-icons a { padding: 0px; border: none; }
.topnav-icons a:last-child { border: none; }
[class*=" icon-"], [class^="icon-"] { display: inline-block; width: 14px; height: 14px; line-height: 14px; vertical-align: text-top; margin-top: 1px; background-image: url(http://www.algask.se/wp-content/themes/algask13/img/glyphicons-halflings.png); background-position: 14px 14px; background-repeat: no-repeat; }
.icon { display: block; background: url(http://www.algask.se/wp-content/themes/algask13/img/sprite.png) no-repeat; }
.icon-rss { background-position: 0px -38px; }
.topnav-icons .icon { width: 20px; height: 20px; }
.icon-twitter { background-position: 0px -64px; }
.icon-facebook { background-position: 0px -88px; }
.banner { margin-bottom: 25px; }
.logo { margin: 10px 0px; width: 45.31914893617%; }
img { border: 0px; vertical-align: middle; margin: 10px 0px; max-width: 100%; height: auto; }
.main-navigation { overflow: hidden; border: 1px solid rgb(255, 255, 255); background-image: linear-gradient(rgb(45, 104, 178), rgb(43, 48, 135)); background-color: rgb(45, 104, 178); }
.main-navigation li { display: block; float: left; border-right-width: 1px; border-right-style: solid; border-right-color: rgb(255, 255, 255); }
.main-navigation .current-menu-item, .main-navigation .current-page-ancestor, .main-navigation li:hover, .single-spelare .main-navigation #menu-item-14 { background-image: linear-gradient(rgb(255, 255, 255), rgb(229, 229, 229)); background-color: rgb(229, 229, 229); }
.main-navigation a { padding: 8px 13px; font-size: 1em; font-weight: 400; display: block; }
.main-navigation .current-menu-item a, .main-navigation .current-page-ancestor a, .main-navigation li:hover a, .single-spelare .main-navigation #menu-item-14 a { color: rgb(43, 48, 135); text-shadow: rgb(255, 255, 255) 0px 1px 1px; }
.main-navigation .search { position: relative; padding: 1px 13px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(255, 255, 255); transition: all 0.2s ease-out; -webkit-transition: all 0.2s ease-out; }
.main-navigation .search.closed { right: -230px; }
.genericon-search { margin: 2px 0px; float: left; width: 32px; height: 32px; font-size: 32px; color: rgb(255, 255, 255); cursor: pointer; background-size: 210px; background-position: 0px 0px; }
figure, form { margin: 0px; }
form { margin: 0px 0px 20px; }
.main-navigation form { margin: 4px 0px 0px 13px; float: left; width: 215px; }
button, input, label, select, textarea { font-size: 14px; font-weight: 400; line-height: 20px; }
label { display: block; margin-bottom: 5px; }
.visuallyhidden { border: 0px; clip: rect(0px 0px 0px 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; }
button, input, select, textarea { font-size: 100%; margin: 0px; vertical-align: baseline; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; }
.uneditable-input, input, textarea { width: 206px; margin-left: 0px; }
.uneditable-input, input[type="color"], input[type="date"], input[type="datetime-local"], input[type="datetime"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], select, textarea { display: inline-block; height: 20px; padding: 4px 6px; margin-bottom: 10px; font-size: 14px; line-height: 20px; color: rgb(85, 85, 85); border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; vertical-align: middle; }
.uneditable-input, input[type="color"], input[type="date"], input[type="datetime-local"], input[type="datetime"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], textarea { border: 1px solid rgb(204, 204, 204); -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px inset; box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px inset; transition: border 0.2s linear, box-shadow 0.2s linear; -webkit-transition: border 0.2s linear, box-shadow 0.2s linear; background-color: rgb(255, 255, 255); }
.main-navigation input { margin: 0px; }
div[role="main"] { position: relative; margin: 0px 0px 25px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(229, 229, 229); background: rgb(255, 255, 255); }
.col2-border { left: 66.158536585366%; width: 1px; height: 100%; position: absolute; background: rgb(204, 204, 204); }
.topborder { position: relative; height: 15px; background-image: linear-gradient(rgb(45, 104, 178), rgb(43, 48, 135)); background-color: rgb(45, 104, 178); }
.row-fluid { width: 100%; }
.inner { padding: 10px; overflow: hidden; }
[class*="span"] { float: left; min-height: 1px; margin-left: 20px; }
.span8 { width: 476px; }
.row-fluid [class*="span"] { display: block; width: 100%; min-height: 30px; box-sizing: border-box; float: left; margin-left: 2.7624309392265194%; }
.row-fluid .span8 { width: 65.74585635359117%; }
.row-fluid [class*="span"]:first-child { margin-left: 0px; }
.post { margin: 0px 0px 20px; padding: 0px 0px 10px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(229, 229, 229); }
h2 { margin: 0px; font-size: 2em; line-height: 1.1em; }
.post h2 { font-size: 2.3em; }
.post-meta { margin: 10px 0px; font-size: 0.8em; color: rgb(102, 102, 102); }
p, pre { margin: 1em 0px; }
p { margin: 0.8em 0px 0px; line-height: 1.5em; }
.byline { font-size: 0.8em; font-weight: 700; color: rgb(102, 102, 102); }
.span4 { width: 228px; }
aside[role="complementary"] { padding-top: 10px; }
.row-fluid .span4 { width: 31.491712707182323%; }
.block { margin-bottom: 20px; position: relative; }
.grey-block { border: 1px solid rgb(204, 204, 204); background: rgb(252, 252, 252); }
.block header, .infobox header { background-image: linear-gradient(rgb(45, 104, 178), rgb(43, 48, 135)); background-color: rgb(45, 104, 178); }
h3 { font-size: 1.17em; margin: 1em 0px; }
.block h3, .infobox h3 { margin-top: 0px; padding: 5px 10px; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(204, 204, 204); font-size: 1em; font-weight: 400; color: rgb(255, 255, 255); }
.block h1, .block h2, .block h3 { margin: 0px; }
.gameinfo-box { text-align: center; }
.block .inner { padding-top: 10px; padding-bottom: 10px; }
.span5 { width: 290px; }
.row-fluid .span5 { width: 40.05524861878453%; }
.gameinfo-box .span5 { border: 1px solid rgb(204, 204, 204); border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background: rgb(255, 255, 255); }
.row-fluid [class*="span"].pull-right, [class*="span"].pull-right { float: right; }
.container, .navbar-fixed-bottom .container, .navbar-fixed-top .container, .navbar-static-top .container, .span12 { width: 724px; }
.row-fluid .span12 { width: 100%; }
.block p { margin: 5px 0px 0px; font-size: 0.875em; }
div.windowsize-size { position: fixed; bottom: 10px; right: 10px; color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; font-size: 11px; line-height: normal; font-family: monospace; padding: 3px; display: none; border: 1px solid rgb(153, 153, 153); z-index: 9999; background: rgba(255, 255, 0, 0.8); }
        </style>
        <script type="text/javascript">
        /*!
        loadCSS: load a CSS file asynchronously.
        [c]2014 @scottjehl, Filament Group, Inc.
        Licensed MIT
        */
        function loadCSS( href, before, media ){
            "use strict";
            // Arguments explained:
            // `href` is the URL for your CSS file.
            // `before` optionally defines the element we'll use as a reference for injecting our <link>
            // By default, `before` uses the first <script> element in the page.
            // However, since the order in which stylesheets are referenced matters, you might need a more specific location in your document.
            // If so, pass a different reference element to the `before` argument and it'll insert before that instead
            // note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
            var ss = window.document.createElement( "link" );
            var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
            ss.rel = "stylesheet";
            ss.href = href;
            // temporarily, set media to something non-matching to ensure it'll fetch without blocking render
            ss.media = "only x";
            // inject link
            ref.parentNode.insertBefore( ss, ref );
            // set media back to `all` so that the styleshet applies once it loads
            setTimeout( function(){
                ss.media = media || "all";
            } );
            return ss;
         }
         loadCSS('<?php echo get_bloginfo( 'template_directory' ).'/css/style-min.css';?>');
        </script>
                
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