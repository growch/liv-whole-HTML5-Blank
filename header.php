<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--> 
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	
	<?php wp_head(); ?>
		
	<!-- CSS + jQuery + JavaScript -->
	
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/reset-fonts.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/base-min.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css" type="text/css" media="screen" charset="utf-8" />
	
	<style type="text/css">
				body.inside div.side {
/*					background: url(<?php bloginfo( 'template_directory' ); ?>/images/services/services-side-pic.jpg) no-repeat 0 0;*/
				}
/*				body.inside div#bd-inner {
					background-image: url(<?php bloginfo( 'template_directory' ); ?>/images/services/services-side-color.jpg);
				}*/
	</style>
	
	<!-- <?php wp_head(); ?> -->
	
</head>
<body <?php body_class("livwhole-inside inside"); ?>>
	<!-- head -->
	<div id="hd">
		<div id="hd-inner">
			<!-- logo -->
			<div id="logo">
				<a href="http://www.livwhole.com/">LivWhole</a>
			</div><!-- tagline -->
			<div id="tagline">
				<p>
					Be healthy. Be beautiful. Be you.
				</p>
			</div><!-- newsletter -->
			<div id="newsletter-signup">
				<a href="http://livwhole.namasteinteractive.com/light/subscribe.htm"><img src="<?php bloginfo( 'template_directory' ); ?>/images/newsletter-signup-btn.gif" alt="Newsletter Signup" width="129" height="29"></a>
			</div><!-- nav -->
			<div id="nav" class="clearfix">
				<ul class="globalRootMenu">
					<!-- <?php wp_nav_menu( array('menu' => 'MainNav', 'echo' => false) ); ?> -->
					<?php wp_nav_menu( array('menu' => 'MainNav') ); ?>
				</ul>
			</div>
		</div>
	</div><!-- /head -->