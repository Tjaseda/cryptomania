<?php
/**
 * Template Name: Landing Page
 *
 * @package Cryptomania
 */

get_header( 'front' );
?>

		<!--WHAT IS CRYPTOMANIA PAGE SECTION:
		* page section with withe background and large padding
		-->
		<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
			<!-- top coin background image-->
			<div class="c-bg-coin c-bg-coin--top">
				<img class="lazyload c-bg-coin__img c-bg-coin__img--top" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																												data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
																																<?php echo get_template_directory_uri() . '/assets/images/coin-medium.png'; ?> 600w,
																																<?php echo get_template_directory_uri() . '/assets/images/coin-big.png'; ?> 810w,
																																<?php echo get_template_directory_uri() . '/assets/images/coin-large.png'; ?> 1000w,
																																<?php echo get_template_directory_uri() . '/assets/images/coin-hi-dpi.png'; ?> 1536w"
																												sizes="(min-width: 1550px) 40vw, (min-width: 970px) 50vw, 20vw" />
			</div>
			<!-- bottom coin background image-->
			<div class="c-bg-coin c-bg-coin--bottom">
				<img class="lazyload c-bg-coin__img c-bg-coin__img--bottom" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																													data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
																																	<?php echo get_template_directory_uri() . '/assets/images/coin-medium.png'; ?> 600w,
																																	<?php echo get_template_directory_uri() . '/assets/images/coin-big.png'; ?> 810w,
																																	<?php echo get_template_directory_uri() . '/assets/images/coin-large.png'; ?> 1000w,
																																	<?php echo get_template_directory_uri() . '/assets/images/coin-hi-dpi.png'; ?> 1536w"
																													sizes="(min-width: 1550px) 40vw, (min-width: 970px) 50vw, 20vw" />

				<!-- <img class="c-bg-coin__img c-bg-coin__img--bottom" src="<?php echo get_template_directory_uri() . '/assets/images/coin-bg.png'; ?>" alt="bitcoin bg" /> -->
			</div>

			<div class="l-container">
				<!--
				* flexbox row:
				* on small screen displays column with reverse order,
				* from desktop screen on displays ordered row
				-->
				<div class="l-row l-row-sm--col-r l-row-ds--row-o">
					<!-- first column - text:
					* flexbox column with verticaly centered content:
					* on small screen is 100% width with centered text,
					* from desktop screen is 50% width, with text positioned left
					-->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pd-t--7 l-pd-t--sm-8">
							<div class="l-wrap"> <!-- takes care of padding on small screen - content does not touch the screen -->
								<h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">What is Cryptomania?</h2><br />
								<p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left">Wild, Educational, Fun & Unpredictable</p><br />
								<p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
								<a class="o-a o-txt--green o-txt--ps-left" href="#">Learn More</a>
							</div>
					</div>

					<!-- second column - empty:
					* flexbox column with verticaly centered content:
					* on small screen is 100% width with centered text,
					* from desktop screen is 50% width
					-->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
					</div>

				</div><!-- /row -->
			</div><!-- /container -->

		</div><!-- /page section -->

		<!--HOW TO PLAY PAGE SECTION:
		* page section with purple background and medium padding
		-->
		<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
			<div class="l-container">
				<!--
				* flexbox row:
				* on small screen displays ordered column,
				* from desktop screen on displays ordered row
				-->
				<div class="l-row l-row-sm--col-o l-row-ds--row-o">
					<!-- first column - image:
					* flexbox column with verticaly centered content:
					* on small screen is 100% width with centered text,
					* from desktop screen is 50% width
					-->
						<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
							<!-- full city background that gets displayed from desktop width on-->
							<div class="c-bg-cityfull l-pos--abs">
								<img class="lazyload c-bg-cityfull__img" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																								data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
																												<?php echo get_template_directory_uri() . '/assets/images/cityfull-small.png'; ?> 868w,
																												<?php echo get_template_directory_uri() . '/assets/images/cityfull-medium.png'; ?> 1076w,
																												<?php echo get_template_directory_uri() . '/assets/images/cityfull-big.png'; ?> 1120w,
																												<?php echo get_template_directory_uri() . '/assets/images/cityfull-large.png'; ?> 1400w,
																												<?php echo get_template_directory_uri() . '/assets/images/cityfull-hi-dpi.png'; ?> 2150w"
																								sizes="(min-width: 970px) 56vw, 20vw" />
							</div>
							<!-- image of how to play page section that is always displayed-->
							<div class="c-bg-cityfull__img-top">
								<img class="lazyload c-bg-cityfull__image" data-src="<?php echo get_template_directory_uri() . '/assets/images/circle-small.png'; ?>"
																									data-srcset="<?php echo get_template_directory_uri() . '/assets/images/circle-small.png'; ?> 380w,
																													<?php echo get_template_directory_uri() . '/assets/images/circle-medium.png'; ?> 480w,
																													<?php echo get_template_directory_uri() . '/assets/images/circle-large.png'; ?> 600w,
																													<?php echo get_template_directory_uri() . '/assets/images/circle-hi-dpi.png'; ?> 920w"
																									sizes="(min-width: 1550px) 50vw, (min-width: 740px) 60vw, (min-width: 500px) 55vw, 75vw" />
							</div>
						</div>
						<!-- second column - text:
						* flexbox column with verticaly centered content:
						* on small screen is 100% width with centered text,
						* from desktop screen is 50% width, with text positioned right
						-->
						<div class="l-cl l-cl-sm--10 l-cl-ds--5">
								<div class="l-wrap">
									<h2 class="o-h o-h__2 o-txt--white o-txt--ps-right">How to play?</h2><br />
									<p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right">Simple for everyone!</p><br />
									<p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
									<a class="o-a o-txt--green o-txt--ps-right" href="#">Learn More</a>
								</div>
						</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--ABOUT US PAGE SECTION:
		* page section with white background and large padding
		-->
		<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
			<div class="l-container">
				<!--
				* flexbox row:
				* on small screen displays column with reverse order,
				* from desktop screen on displays ordered row
				-->
				<div class="l-row l-row-sm--col-r l-row-ds--row-o">
					<!-- first column - text:
					* flexbox column with verticaly centered content:
					* on small screen is 100% width with centered text,
					* from desktop screen is 50% width, with text positioned left
					-->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
						<div class="l-wrap">
							<h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">About us</h2><br />
							<p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left">Creators of Cryptomania</p><br />
							<p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
							<a class="o-a o-txt--green o-txt--ps-left" href="#">Learn More</a>
						</div>
					</div>
					<!-- second column - image:
					* flexbox column with verticaly centered content:
					* on small screen is 100% width with centered text,
					* from desktop screen is 50% width
					-->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
						<!-- about us section image -->
						<div class="c-img-sec__img-wrap">
							<img class="lazyload c-img-sec__img c-img-sec__img--char" data-src="<?php echo get_template_directory_uri() . '/assets/images/characters-small.png'; ?>"
																																data-srcset="<?php echo get_template_directory_uri() . '/assets/images/characters-small.png'; ?> 340w,
																																				<?php echo get_template_directory_uri() . '/assets/images/characters-medium.png'; ?> 650w,
																																				<?php echo get_template_directory_uri() . '/assets/images/characters-big.png'; ?> 800w,
																																				<?php echo get_template_directory_uri() . '/assets/images/characters-large.png'; ?> 1000w,
																																				<?php echo get_template_directory_uri() . '/assets/images/characters-hi-dpi.png'; ?> 1383w"
																																sizes="(min-width: 1920px) 36vw, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />
						</div>
					</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--VIDEO PAGE SECTION:
		* page section with purple background and small padding
		-->
		<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-sm">
			<div class="l-container">
				<div class="l-wrap">

					<h2 class="o-h o-h__2 o-txt--white o-txt--center">Watch the video!</h2><br />

					<!-- embeded video: must have container and wrap as it helps set the right height for the video -->
					<div class="c-video__container">
						<div class="c-video__wrap">
							<iframe class="c-video__iframe" src="https://www.youtube.com/embed/dmo_u2zMd7o?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>

					<p class="o-h o-h__4 o-txt--orange-light o-txt--center">Share it with your Friends!</p>

					<!-- share component -->
					<div class="c-share">
						<div class="c-share__icon-wrap">
							<a id="share" href="https://twitter.com/intent/tweet?text=https://www.youtube.com/watch?v=dmo_u2zMd7o" target="_blenk"><img class="c-share__icon c-share__icon--twitter" src="<?php echo get_template_directory_uri() . '/assets/images/icon_twitter.svg'; ?>" alt="twitter" /></a>
							<a id="share" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=dmo_u2zMd7o" target="_blank"><img class="c-share__icon c-share__icon--facebook" src="<?php echo get_template_directory_uri() . '/assets/images/icon_facebook.svg'; ?>" alt="facebook" /></a>
						</div>
					</div>

				</div><!-- /wrap -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--WHATS IN THE BOX PAGE SECTION:
		* page section with white background and small padding
		-->
		<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-sm">
			<div class="l-container">
				<!--
				* first flexbox row:
				* on small screen displays ordered column,
				* from desktop screen on displays ordered row
				-->
				<div class="l-row l-row-sm--col-o l-row-ds--row-o">
					<!-- first column - image:
					* flexbox column with verticaly centered content:
					* on small screen is 100%,
					* from desktop screen is 50% width
					-->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
						<!-- whats in the box page section image -->
						<div class="c-img-sec__img-wrap c-img-sec__img-wrap--box">
							<img class="lazyload c-img-sec__img c-img-sec__img--box" data-src="<?php echo get_template_directory_uri() . '/assets/images/box-small.jpg'; ?>"
																															data-srcset="<?php echo get_template_directory_uri() . '/assets/images/box-small.jpg'; ?> 300w,
																																			<?php echo get_template_directory_uri() . '/assets/images/box-medium.jpg'; ?> 500w,
																																			<?php echo get_template_directory_uri() . '/assets/images/box-big.jpg'; ?> 900w,
																																			<?php echo get_template_directory_uri() . '/assets/images/box-large.jpg'; ?> 1300w,
																																			<?php echo get_template_directory_uri() . '/assets/images/box-hi-dpi.jpg'; ?> 2305w"
																															sizes="(min-width: 740px) 60vw, (min-width: 500px) 70vw, 80vw" />
						</div>
					</div>

					<!-- second column - text:
					* flexbox column with verticaly centered content:
					* on small screen is 100% with centered text,
					* from desktop screen is 50% width with text align right
					-->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
						<div class="l-wrap">
							<h2 class="o-h o-h__2 o-txt--purple o-txt--ps-right">What's in the box?</h2><br />
							<p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-right">Choose your version</p><br />
							<p class="o-s o-s__1 o-txt--gray o-txt--ps-t-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
							<a class="o-a o-txt--green o-txt--ps-right" href="#">Learn More</a>
						</div>
					</div>
				</div><!-- /row -->

				<!--
				* second flexbox row:
				* just displays flexbox
				-->
				<div class="l-row table">
					<!-- first column - tables:
					* flexbox column with verticaly centered content:
					* always has 100% width
					-->
					<div class="l-cl l-cl-sm--10">
						<!-- adds top margin to this div -->
						<div class="l-wrap l-mg-t--10">
							<table class="c-table c-table--box">
								<tr>
							    <th>Includes</th>
							    <th>Regular</th>
							    <th>Premium</th>
							  </tr>
							  <tr>
							    <td>Lorem ipsum dolor sit amet.</td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>Dolor sit amet.</td>
							    <td></td>
							    <td></td>
							  </tr>
								<tr>
							    <td>Consectetur.</td>
							    <td></td>
							    <td></td>
							  </tr>
								<tr>
							    <td>Lorem ipsum dolor sit amet.</td>
							    <td></td>
							    <td></td>
							  </tr>
							  <tr>
							    <td>Dolor sit amet.</td>
							    <td></td>
							    <td></td>
							  </tr>
								<tr>
							    <td>Consectetur.</td>
							    <td></td>
							    <td></td>
							  </tr>
							</table><!-- /box comparisone table -->

							<table class="c-table c-table--price l-pd-t--2">
								<tr>
									<th></th>
									<th>$ 16,90</th>
									<th>$ 24,90</th>
								</tr>
							</table><!-- /price table -->

						</div><!-- /wrap -->
					</div><!-- /column -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--TESEMONIALS PAGE SECTION:
		* page section with light purple background and small padding
		-->
		<div class="o-pg-sec o-pg-sec--purple-lg o-pg-sec--pd-xs">
			<div class="l-container l-pos--rel">
				<!-- first column - arrow:
				* flexbox column with verticaly centered content:
				* on small screen is 100% with centered text,
				* from desktop screen is 50% width with text align right
				-->
				<div class="l-cl l-cl-sm--10">
					<div class="l-wrap">

						<a href="#"><p id="prev" class="c-slider__cour c-slider__cour--prev">&#8249;</p></a>
						<a href="#"><p id="next" class="c-slider__cour c-slider__cour--next">&#8250;</p></a>

						<p class="c-slider__blockquote">&#8221;</p>

						<div id="slider" class="c-slider">

							<div id="sliderWrap" class="c-slider__wrap">

								<div id="slide" class="l-row l-row-sm--col-o l-row-md--row-o c-slider__slide">
									<div class="l-cl l-cl-sm--10 l-cl-md--5">
										<img class="lazyload c-slider__image" data-src="https://content-static.upwork.com/uploads/2014/10/01073427/profilephoto1.jpg" />
									</div>
									<div class="l-cl l-cl-sm--10 l-cl-md--5">
										<div class="c-slider__text">
											<p class=" c-slider__text--txt">Cryptomania is like Monopoly upgraded! So much fun!</p>
											<p class="c-slider__text--name">Ana Ban</p>
										</div>
									</div>
								</div>

								<div id="slide" class="l-row l-row-sm--col-o l-row-md--row-o c-slider__slide">
									<div class="l-cl l-cl-sm--10 l-cl-md--5">
										<img class="lazyload c-slider__image" data-src="https://content-static.upwork.com/uploads/2014/10/01073427/profilephoto1.jpg" />
									</div>
									<div class="l-cl l-cl-sm--10 l-cl-md--5">
										<div class="c-slider__text">
											<p class=" c-slider__text--txt">Cryptomania is like Monopoly upgraded! So much fun!</p>
											<p class="c-slider__text--name">Ana Ban</p>
										</div>
									</div>
								</div>

								<div id="slide" class="l-row l-row-sm--col-o l-row-md--row-o c-slider__slide">
									<div class="l-cl l-cl-sm--10 l-cl-md--5">
										<img class="lazyload c-slider__image" data-src="https://content-static.upwork.com/uploads/2014/10/01073427/profilephoto1.jpg" />
									</div>
									<div class="l-cl l-cl-sm--10 l-cl-md--5">
										<div class="c-slider__text">
											<p class=" c-slider__text--txt">Cryptomania is like Monopoly upgraded! So much fun!</p>
											<p class="c-slider__text--name">Ana Ban</p>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				</div>
			</div>
		</div>

<?php
get_footer();
