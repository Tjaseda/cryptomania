<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cryptomania
 */
$siteName = get_bloginfo( 'name' );
$siteDescription = get_bloginfo( 'description' );

$tagmanagerCodeOne = get_option( 'tagmanager_code_1' );
$tagmanagerCodeTwo = get_option( 'tagmanager_code_2' );
$analyticCode = get_option( 'analytic_code' );
$fbPixelCode = get_option( 'fb_pixel_code' );
$metaCode = get_option( 'meta_code' );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
	<?php if($tagmanagerCodeOne) : ?>
		<?php echo $tagmanagerCodeOne; ?>
	<?php endif; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php echo $metaCode; ?>
	<?php echo $analyticCode; ?>
</head>

<body <?php body_class(); ?>>
	<?php if($tagmanagerCodeTwo) : ?>
		<?php echo $tagmanagerCodeTwo; ?>
	<?php endif; ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cryptomania' ); ?></a>

	<header id="masthead" class="site-header">
		<?php if($fbPixelCode) : ?>
			<?php echo $fbPixelCode; ?>
		<?php endif; ?>

		<div class="l-pos--rel c-nav--white c-nav--mg l-row l-row-sm--row-o">
			<div class="l-c l-c-lf l-cl-sm--2 l-pos--rel ">
				<a class="toggle-nav" href="#">
					<div class="toggle-nav__line"></div>
				</a><!-- /toggle nav -->

				<a href="<?php echo home_url(); ?>"><img class="c-nav__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo-2.png'; ?>" alt="<?php echo $siteName .  ' - '  . $siteDescription; ?>" title="<?php echo $siteName .  ' - '  . $siteDescription; ?>" /></a>
			</div><!-- /logo -->

			<nav id="site-navigation" class="js-main-nav c-nav__nav c-nav__nav--page l-cl l-cl-sm--6">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<nav id="site-navigation" class="c-nav--to-front c-nav__nav--lang-page l-c l-c-rg l-cl-sm--2 l-pos--rel">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'language-menu',
					) );
					?>
			</nav><!-- /#site-navigation -->

		</div><!-- /navigation -->

		<div class="c-bg-city c-bg-city--sm">

			<div class="c-bg-city__img-wrap hero-city__img-wrap--trans">

				<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																		sizes="100vw" alt="<?php echo $siteName; ?>" />

				<div class="c-bg-city__overlay"></div>
			</div><!-- /c-bg-city image wrap-->

			<div class="c-hero__title-wrap">
				<h1 class="o-h o-h__1 o-txt--white o-txt--center"><?php echo the_title(); ?></h1>
			</div><!-- /hero__title-wrap -->

		</div><!-- /c-bg-city -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
