<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	<script src="<?=get_template_directory_uri()?>/js/html5.js"></script>
	<script src="<?=get_stylesheet_directory_uri()?>/js/respond.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.placeholder.js"></script>
	<![endif]-->
	<?php if(in_array(get_current_user_id(), array(1, 2, 1838))){ ?>
	<style type="text/css">
		#page { background: url('http://apaconnect.fiat.chrysler.com/wp-content/uploads/2015/01/APAC-Portal-new-bg-2.jpg') 50% 100%; background-size: cover; }
		.description .worldtime .city { color: #A2073D; }
		.navbar-inner { border-top: #A2073D 2px solid; }
		.navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus { color: #A2073D; }
		.breadcrumb { background: rgba(255,255,255,0.9); }
		.breadcrumb a { text-shadow: none; }
		.box>header, .box>.header { color: rgb(98, 1, 1); background: #FFFFD1; }
		<?php if($_GET['style'] == 2){ ?>
		.box>header, .box>.header { color: #FFF; background: #FFFFD1; background-image: linear-gradient(to right, #960000, #FF8080); }
		<?php } ?>
		.site-footer { border-top: none; }
	</style>
	<?php } ?>
</head>

<body <?php body_class(); ?>>
	<div id="browser-upgrade-warning" class="alert alert-warning hidden">Please use Internet Explorer 8.0 or higher version and <strong>turn off the compatible mode</strong>.</div>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="banner" style="background-image: url('<?=get_stylesheet_directory_uri()?>/images/headerbg_<?=floor(rand(0,12))?>.jpg')">
				<div class="wrapper">
					<div class="main">
						<div class="description-top">
							<span class="share-price">&nbsp;</span>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<h1 class="site-title pull-left"><img src="<?=site_url()?>/wp-content/uploads/2014/10/FCA-logo-250x92.png" alt="<?php bloginfo( 'name' ); ?>"></h1>
						</a>
						<h1 class="logo-aside pull-right"><img src="<?=get_stylesheet_directory_uri()?>/images/logo-apacportal.png"></h1>
						<div class="description pull-left">
							<span class="worldtime">
								<?php get_template_part('world-time'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navbar-inner" role="navigation">
					<div class="wrapper">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav' ) ); ?>
						<span class="well well-small total-hits pull-right">
							<a href="<?=site_url()?>/stats/">
								Total Hits: <?=get_total_hits()?>
								<span class="icon-exclamation-sign" title="View Portal Statistics"></span>
							</a>
						</span>
						<?php get_search_form(); ?>
					</div>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main wrapper">
			<?php if (function_exists('HAG_Breadcrumbs') && !is_front_page()) { HAG_Breadcrumbs(array('wrapper_element'=>'ul','wrapper_class'=>'breadcrumb','prefix'=>'<li>','suffix'=>'</li>','crumb_link'=>false,'last_link'=>true,'post_types'=>array('post'=>array('last_show'=>false)),'taxonomy_excluded_terms'=>array('category'=>array('uncategorized')))); } ?>
