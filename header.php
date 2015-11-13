<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="copyright" content="2015 invibed">
        
        <?php global $post; $author_id=$post->post_author; ?>
        <meta name="author" content="<?php if(is_single()) { the_author_meta( 'nickname', $author_id ); } else { echo 'Danielle Pascarella'; } ?>">

        <meta name="keywords" content="">
        <meta name="description" content="Know More. Spend Less. Live Better.">

		<title><?php wp_title( ' | ', true, 'right' ); ?></title>

        <link rel="canonical" href="http://invibed.com/">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-76x76.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16">

		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	    <!--[if lte IE 8]>
	        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->

        <header class="site-header clearfix wrap">
            <h1 class="logo"><a href="<?php echo get_site_url(); ?>">invibed</a></h1>

            <nav>
                <ul class="topnav">
                <li class="nav-links"><a href="#">Explore</a>
                    <ul class="subnav clearfix">
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/news/"><h4><span class="fa fa-newspaper-o"></span>News</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/motivation/"><h4><span class="fa fa-trophy"></span>Motivation</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/career/"><h4><span class="fa fa-briefcase"></span>Career</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/fun/"><h4><span class="fa fa-smile-o"></span>Fun</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/style/"><h4><span class="fa fa-diamond"></span>Style</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/health/"><h4><span class="fa fa-heartbeat"></span>Health</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/finance-101/"><h4><span class="fa fa-usd"></span>Finance 101</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/outvibed/"><h4><span class="fa fa-exclamation-triangle"></span>Outvibed</h4></a></li>
                        <li class="categories"><a href="<?php echo get_site_url(); ?>/category/videos/"><h4><span class="fa fa-video-camera"></span>Videos</h4></a></li>
                    </ul>
                </li>
                <div class="nav-abs">
                    <li class="nav-links"><a href="<?php echo get_site_url(); ?>/learn">Learn</a></li>
                    <li class="nav-links"><a href="<?php echo get_site_url(); ?>/ask">Ask</a></li>
                    <li class="nav-links"><a href="<?php echo get_site_url(); ?>/shop">Shop</a></li>
                </div>
            </ul>
            </nav>
            <div class="access clearfix">
                <div class="login">
                    <div class="not-logged-in fa fa-user">
                        <p>Sign in</p>
                    </div>
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatar.jpeg" alt="You" title="You"> -->
                </div>
                <div class="search-container">
					<?php get_search_form(); ?>                	
                </div>
            </div>
        </header>