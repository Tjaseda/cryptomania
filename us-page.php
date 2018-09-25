<?php
/**
 * Template Name: About Us Page
 *
 * @package Cryptomania
 */

get_header();
?>

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-sm">
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
      <div class="l-cl l-cl-sm--10 l-cl-ds--6">
          <div class="l-wrap"> <!-- takes care of padding on small screen - content does not touch the screen -->
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">Get to know the team</h2><br />
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat tristique velit eu commodo. Suspendisse condimentum quis nisi vel tristique. Aenean mollis, tortor eu aliquet maximus, felis velit ullamcorper nunc, id consectetur augue dui sed ligula. Aenean ut commodo metus, vitae lobortis quam.
              <br /><br />Praesent pharetra urna ligula. Aenean et tincidunt ipsum, sed porta justo. Mauris ac tortor nec erat efficitur iaculis. Fusce ligula ligula, sollicitudin at arcu non, feugiat pellentesque risus. Ut hendrerit ligula ac ligula suscipit fermentum. Duis laoreet iaculis congue. Vivamus blandit lorem sed scelerisque hendrerit. Pellentesque hendrerit nulla malesuada, vestibulum nisi non, tempor turpis.</p><br />
          </div>
      </div>

      <!-- second column - empty:
      * flexbox column with verticaly centered content:
      * on small screen is 100% width with centered text,
      * from desktop screen is 50% width
      -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--4 l-mg-y--2">
        <img class="lazyload c-img-sec__img c-img-sec__img--logo" data-srcset="<?php echo get_template_directory_uri() . '/assets/images/wololo-dark.svg'; ?>" />
      </div>

    </div><!-- /row -->
  </div><!-- /container -->

</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple-lg o-pg-sec--pd-md">
  <div class="l-container">
    <div class="l-row l-row-sm--col-o l-row-md-lg--row-o">

      <div class="l-cl l-cl-sm--10">
        <div class="l-row l-row-sm--col-o l-row-md-sm--row-o l-row-ds-md--col-o c-team__wrap l-mg-y--4 l-mg-ds--0">

          <div class="l-cl l-cl-sm--10 l-cl-md-sm--4 l-cl-ds-lg--10 c-team__img-wrap">
            <img class="c-team__image" src="<?php echo get_template_directory_uri() . '/assets/images/feko.jpg'; ?>" />
          </div>
          <div class="l-cl l-cl-sm--10 l-cl-md-sm--6 l-cl-ds-lg--10 c-team__txt-wrap l-mg-t--3 l-mg-t-md-sm--0 l-mg-t-ds-lg--3">
            <p class="c-team__text c-team__name">Boštjan Fekonja</p>
            <p class="c-team__text c-team__position">CEO</p>
            <p class="c-team__text c-team__txt">Cryptomania is like Monopoly upgraded! So much fun!</p>
          </div>
        </div>
      </div>

      <div class="l-cl l-cl-sm--10">
        <div class="l-row l-row-sm--col-o l-row-md-sm--row-o l-row-ds-md--col-o c-team__wrap l-mg-y--4 l-mg-ds--0">

          <div class="l-cl l-cl-sm--10 l-cl-md-sm--4 l-cl-ds-lg--10 c-team__img-wrap">
            <img class="c-team__image" src="<?php echo get_template_directory_uri() . '/assets/images/kuko.jpg'; ?>" />
          </div>
          <div class="l-cl l-cl-sm--10 l-cl-md-sm--6 l-cl-ds-lg--10 c-team__txt-wrap l-mg-t--3 l-mg-t-md-sm--0 l-mg-t-ds-lg--3">
            <p class="c-team__text c-team__name">Jan Kukovič</p>
            <p class="c-team__text c-team__position">Strategist</p>
            <p class="c-team__text c-team__txt">Cryptomania is like Monopoly upgraded! So much fun!</p>
          </div>
        </div>
      </div>

      <div class="l-cl l-cl-sm--10">
        <div class="l-row l-row-sm--col-o l-row-md-sm--row-o l-row-ds-md--col-o c-team__wrap l-mg-y--4 l-mg-ds--0">
          <div class="l-cl l-cl-sm--10 l-cl-md-sm--4 l-cl-ds-lg--10 c-team__img-wrap">
            <img class="c-team__image" src="<?php echo get_template_directory_uri() . '/assets/images/baci.jpg'; ?>" />
          </div>
          <div class="l-cl l-cl-sm--10 l-cl-md-sm--6 l-cl-ds-lg--10 c-team__txt-wrap l-mg-t--3 l-mg-t-md-sm--0 l-mg-t-ds-lg--3">
            <p class="c-team__text c-team__name">Robert Fekonja</p>
            <p class="c-team__text c-team__position">Product</p>
            <p class="c-team__text c-team__txt">Cryptomania is like Monopoly upgraded! So much fun!</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>
