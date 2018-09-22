<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cryptomania
 */

get_header();
?>

	<div class="o-pg-sec o-pg-sec--pd-lg">
		<div class="c-bg-coin c-bg-coin--top">
			<img class="c-bg-coin__img c-bg-coin__img--top"src="<?php echo get_template_directory_uri() . '/assets/images/coin-bg.png'; ?>" alt="bitcoin bg" />
		</div>

		<div class="l-container">
			<div class="l-wrap">
					<?php echo get_post_field('post_content', $post->ID); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
