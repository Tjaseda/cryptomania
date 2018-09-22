<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cryptomania
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="c-footer">

		<div class="l-cl c-bg-city c-bg-city--md">

			<div class="c-bg-city__img-wrap c-bg-city__img-wrap--trans">

				<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																		sizes="100vw" />

				<div class="c-bg-city__overlay"></div>
			</div>

			<div class="l-w--full">

				<div class="l-wrap--sm l-mg-b--3">
					<p class="o-h o-h__2 o-txt--white o-txt--center">Available soon on Kickstarter!</p>
				</div>

				<div class="c-form l-mg-b--2">
					<form class="c-form__wrap">
						<input type="email" name="email" placeholder="E-mail" class="c-form__input" />
						<input type="submit" value="Join the revolution" class="c-form__button" />
					</form>
				</div>

			</div>

		</div>

		<div class="c-nav--purple">
			<div class="l-container">
				<div class="c-nav__site-info">
					<img class="c-nav__site-info__logo" src="<?php echo get_template_directory_uri() . '/assets/images/wololo-logo.svg'; ?>" alt="wololo" />
					<p class="c-nav__site-info__text">© 2018 Wololo</p>
				</div>

				<nav id="site-navigation" class=" c-nav__nav c-nav__nav--footer c-nav--full-height">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer_menu',
					) );
					?>
				</nav><!-- #footer-navigation -->

				<div class="c-nav__social">
					<div>
						<img class="c-nav__social__icon c-nav__social__icon--twitter" src="<?php echo get_template_directory_uri() . '/assets/images/icon_twitter.svg'; ?>" alt="twitter" />
						<img class="c-nav__social__icon c-nav__social__icon--facebook" src="<?php echo get_template_directory_uri() . '/assets/images/icon_facebook.svg'; ?>" alt="facebook" />
					</div>
				</div>

			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
