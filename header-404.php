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

$siteName =  get_bloginfo( "name" );
$siteDescription = get_bloginfo( "description" );

$tagmanagerCodeOne = get_option( 'tagmanager_code_1' );
$tagmanagerCodeTwo = get_option( 'tagmanager_code_2' );
$analyticCode = get_option( 'analytic_code' );
$fbPixelCode = get_option( 'fb_pixel_code' );
$metaCode = get_option( 'meta_code' );

$fofTitle = get_option( '404_title' );
$fofBtnLink = get_option( '404_button_link' );
$fofBtnTitle = get_option( '404_button_title' );
$fofBtnText = get_option( '404_button_text' );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
	<?php if($tagmanagerCodeOne) : ?>
		<?php echo $tagmanagerCodeOne; ?>
	<?php endif; ?>

	<?php if($fbPixelCode) : ?>
		<?php echo $fbPixelCode; ?>
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

		<div class="c-bg-city c-bg-city--lg">

			<div>
				<div class="c-bg-city__img-wrap">

					<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																			srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																							<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																							<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																							<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																			sizes="100vw" alt="<?php echo $siteName; ?>"/>
					<div class="c-bg-city__overlay"></div>
				</div><!-- /c-bg-city background -->
			</div>

			<div class="c-hero__title-wrap">
				<h1 class="o-h o-h__1 o-txt--white o-txt--center"><?php echo $fofTitle; ?></h1>
				<?php if($fofBtnLink) : ?>
					<div class="o-btn__wrap">
						<a href="<?php echo $fofBtnLink; ?>" title="<?php echo $fofBtnTitle; ?>"><button class="c-form__button"><?php echo $fofBtnText ?></button></a>
					</div>
				<?php endif; ?>
			</div><!-- /hero__title-wrap -->

		</div><!-- /c-bg-city -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
