<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pushy.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/pushy/1.3.0/js/pushy.js" integrity="sha512-R92vJK0ne5HPKpeiO5ri/HYDEvsxDyRbUP6dIUGmg/CgKjIdccfH3lAlrInp6MVxipwDKrgXmvXZrSSwqJcxFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pushy/1.3.0/js/pushy.min.js" integrity="sha512-+YLFvWFpPgQOV1/PoGgIinfvZEsUpfO5YEoxH4MlBAW5lf2WAVK5F4HtWA1BvZEYqK+AWW0fb/C797ttp1fL7g==" crossorigin="anonymous"></script>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/demo.css" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>
<nav class="pushy pushy-left">
    <div class="pushy-content">
        <ul>
            <!-- Submenu -->
            <li class="pushy-submenu">
                <button>Submenu</button>
                <ul>
                    <li class="pushy-link"><a href="#">Item 1</a></li>
                    <li class="pushy-link"><a href="#">Item 2</a></li>
                    <li class="pushy-link"><a href="#">Item 3</a></li>
                </ul>
            </li>
            <li class="pushy-link"><a href="#">Item 1</a></li>
            <li class="pushy-link"><a href="#">Item 2</a></li>
        </ul>
    </div>
</nav>
<div class="site-overlay"></div>

<div id="container">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
</div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="<?php echo esc_attr( sydney_menu_container() ); ?>">
                <div class="row">
					<div class="col-md-4 col-sm-8 col-xs-12">
					<?php if ( get_theme_mod('site_logo') ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
						<?php if ( is_home() && !is_front_page() ) : ?>
							<h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
						<?php endif; ?>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
					<?php endif; ?>
					</div>
					<div class="col-md-8 col-sm-4 col-xs-12">
						<div class="btn-menu"><i class="sydney-svg-icon"><?php sydney_get_svg_icon( 'icon-menu', true ); ?></i></div>
						<nav id="mainnav" class="mainnav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<?php if ( ( get_theme_mod('front_header_type','nothing') == 'image' && is_front_page() ) || (get_theme_mod('site_header_type') == 'image' && !is_front_page() ) ) : ?>
				<?php $shop_thumb = get_the_post_thumbnail_url( get_option( 'woocommerce_shop_page_id' )); ?>
				<?php if ( class_exists( 'Woocommerce' ) && is_shop() && !$shop_thumb  ) : ?>
					<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	