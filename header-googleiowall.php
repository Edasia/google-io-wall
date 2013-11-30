<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php wp_title('|', true, 'left'); ?> | Let's share digital literacies. Together.</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="http://locallibre.edasia.org/wp-content/themes/ilisa/demo.css" />
        <link rel="stylesheet" type="text/css" href="http://locallibre.edasia.org/wp-content/themes/ilisa/style3.css" />
		<!--[if lt IE 10]>
				<link rel="stylesheet" type="text/css" href="http://locallibre.edasia.org/wp-content/themes/ilisa/style3IE.css" />
		<![endif]-->
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41043866-1', 'edasia.org');
  ga('send', 'pageview');

</script>
<div id="page" class="clearfix">
	<header id="branding">
		<nav id="main-menu" class="clearfix">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav><!-- #main-menu -->
            <hgroup id="blog-title">
         
				<!--shows header-image if there is one -->
				<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
					<?php  // if ( ! empty( $header_image ) ) ?>

					<!--shows site-title and site-description if there is no header-image -->      
					<?php else: ?>
						<h1 id="site-title" style="position:relative;">
                        <img width="75px" style="float:left;position:relative;top:-.23em;" src="http://locallibre.edasia.org/static/locallibre.png">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif  ?> 		
			</hgroup>
	</header><!-- #branding -->
	
	</div><!-- END #page -->