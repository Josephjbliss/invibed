<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="copyright" content="2015 Joe Bliss">
        <meta name="author" content="Danielle Pascarella">
        <meta name="keywords" content="">
        <meta name="description" content="">

		<title><?php wp_title( ' | ', true, 'right' ); ?></title>

        <link rel="canonical" href="http://invibed.com/">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-76x76.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16">

		<style>
			html {
				height: 100%;
			}
			body {
				font-family: "Raleway", Arial, sans-serif;
				background-color: #06d49e;
				background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/screenshot.png");
				background-repeat: no-repeat;
				background-position: center center;
				background-attachment: fixed;
				background-size: 80%;
				height: 100%;
				font-size: 20px;
			}
			@font-face {
			    font-family: 'Raleway';
			    src: url(<?php echo get_stylesheet_directory_uri(); ?>/fonts/Raleway-Regular.ttf);
			    font-style: normal;
			    font-weight: 300;
			}

			@font-face {
			    font-family: 'Raleway';
			    src: url(<?php echo get_stylesheet_directory_uri(); ?>/fonts/Raleway-Italic.ttf);
			    font-style: italic;
			    font-weight: 300;
			}

			@font-face {
			    font-family: 'Raleway';
			    src: url(<?php echo get_stylesheet_directory_uri(); ?>/fonts/Raleway-SemiBold.ttf);
			    font-style: normal;
			    font-weight: 500;
			}

			@font-face {
			    font-family: 'Raleway';
			    src: url(<?php echo get_stylesheet_directory_uri(); ?>/fonts/Raleway-SemiBoldItalic.ttf);
			    font-style: italic;
			    font-weight: 500;
			}
			h1 {
				font-size: 2em;
				color: #ffffff;
				font-weight: 300;
				text-align: center;
			}
			p {
				font-size: .5em;
				color: #fff;
				position: fixed;
				bottom:.5em;
				right:.5em;
			}
		</style>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	    <!--[if lte IE 8]>
	        <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->

	    <h1>Invibed is getting a facelift. Check back soon.</h1>

	    <p>new</p>

		<?php wp_footer(); ?>
	</body>
</html>