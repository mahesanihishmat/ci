<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VT Blogging
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="http://ci.lan/css/bootstrap.min.css">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">




<div class="header-top">
		<div class="container">
			<div class="row">
				<!-- Header Top -->
				<div class="header-top-wrapper fix">
					<div class="header-top-left text-center col-md-2 col-sm-12">
						<p><i class="icofont icofont-envelope"></i><span>info@civil.ae &nbsp;&nbsp;&nbsp;&nbsp;</span></p>
						<p style="margin-left: 0px;"><i class="icofont icofont-ui-call"></i><span>+971 42276330</span></p>
						<p style="margin-left: 0px;"><i class="icofont icofont-ui-cell-phone"></i><span>+971502596523</span></p>
						
					</div>

					<div class="header-top-left text-center col-md-8 col-sm-12  hidden-xs">
						<h2 style="text-align: center;    color: #2c2e94;
					    font-size: 40px;
					    font-weight: 900;">CIVIL GROUP OF INSTITUTES</h2>
						<p></p><ul class="text-center" style="margin-top: -32px;
							    margin-bottom: 5px;
							    font-size: 20px;
							    padding-left: 0px;
							    color: #2c2e94;">
			                  <span>Civil Vocational Training Institute</span>
			                  <span>- Civil Training Institute</span>
			                  <span>- Civil Driving Institute</span>
			              </ul>
			          <ul class="header-top-emirates text-center">
			                  <span>DUBAI</span>
			                  <span>-</span>
			                  <span>SHARJAH</span>
			                  <span>-</span>
			                  <span>AJMAN</span>
			                  <span>-</span>
			                  <span>UMM AL QUWAIN</span>
			                  <span>-</span>
			                  <span>ABU DHABI</span>  
			              </ul>
			          <p></p>
					</div>
					<div class="header-top-right text-center col-md-2 col-sm-12">
						
							

													<p class="btn-header-login">
								
							<a style="" href="/login">Login</a> /
							<a style="" href="/register">Register</a>
								
							</p>

							


					</div>
				</div>
			</div>
		</div>
	</div>


	<header id="masthead" class="site-header clear">

		<div class="container">

			<div class="site-branding">
			
				<?php if ( has_custom_logo() ) { ?>
					<div id="logo">
						<span class="helper"></span>
						<?php the_custom_logo(); ?>
					</div><!-- #logo -->
				<?php } else { ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php } ?>

			</div><!-- .site-branding -->

			<nav id="primary-nav" class="main-navigation">

				<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

				<ul class="sf-menu">
				  <?php if ( current_user_can( 'edit_theme_options' ) ) { ?>
					<li><?php printf( __( '<a href="%s">Add menu for theme location: Primary Menu.</a>', 'vt-blogging' ), esc_url( admin_url( 'nav-menus.php' ) ) ); ?></li>
				<?php } ?>
				</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #primary-nav -->

			<?php if ( get_theme_mod('header-search-on', true) ) : ?>
				<span class="search-icon">
					<span class="genericon genericon-search"></span>
					<span class="genericon genericon-close"></span>			
				</span>
			<?php endif; ?>	

			<div id="slick-mobile-menu"></div>
		
		</div><!-- .container -->

	</header><!-- #masthead -->

	<?php if ( get_theme_mod('header-search-on', true) ) : ?>
		<div class="header-search">
			<div class="container">
				<?php get_search_form(); ?>
			</div>
		</div><!-- .header-search -->
	<?php endif; ?>

	<div id="content" class="site-content container clear">