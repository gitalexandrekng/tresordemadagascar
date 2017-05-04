<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans|PT+Sans+Narrow" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/animate.css/animate.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/stylesheets/materialize.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<nav class="nav-top">
	    <div class="in_navigation">
            <div class="logo"><div>Trésors de</div><div class="madagascar">Madagascar</div></div>
            <div class="navboutique">
                <a href="#" class="li_item">F.A.Q</a>
                <a class="li_item" href="#">Qui sommes nous ?</a>
                <a class="li_item" href="#">Professionnels</a>
                <a class="btn"><i class="fa fa-shopping-basket"></i>Panier (0)</a>
            </div>
	        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	    </div>
	</nav>

	<header class="top_header parallax-container">
	    <div class="content_header">
	        <div class="title">Trésors de Madagascar</div>
            <div class="subtitle">Découvez un monde de désir et de fascination</div>
            <a href="" class="custombutton">Visitez la boutique</a>
            <div class="find_you">
                Trouvez votre bonheur
                <i class="fa fa-angle-down"></i>
            </div>
	    </div>
		<div class="parallax"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/madagascar.jpg"></div>
	</header>

	<header id="masthead" class="site-header" role="banner" style="display:none">
		<div class="title-bar" data-responsive-toggle="mobile-menu">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
