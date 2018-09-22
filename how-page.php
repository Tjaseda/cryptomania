<?php
/**
 * Template Name: How To Play Page
 *
 * @package Cryptomania
 */

get_header( 'child' );
?>

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
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">How to play?</h2><br />
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat tristique velit eu commodo. Suspendisse condimentum quis nisi vel tristique. Aenean mollis, tortor eu aliquet maximus, felis velit ullamcorper nunc, id consectetur augue dui sed ligula. Aenean ut commodo metus, vitae lobortis quam.<br /><br/>
            Praesent pharetra urna ligula. Aenean et tincidunt ipsum, sed porta justo. Mauris ac tortor nec erat efficitur iaculis. Fusce ligula ligula, sollicitudin at arcu non, feugiat pellentesque risus. Ut hendrerit ligula ac ligula suscipit fermentum. Duis laoreet iaculis congue. Vivamus blandit lorem sed scelerisque hendrerit. Pellentesque hendrerit nulla malesuada, vestibulum nisi non, tempor turpis.</p>
          </div>
      </div>

      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <div class="c-img-sec__img-wrap">
          <img class="lazyload c-img-sec__img c-img-sec__img--char" data-src="<?php echo get_template_directory_uri() . '/assets/images/characters-small.png'; ?>"
          data-srcset="<?php echo get_template_directory_uri() . '/assets/images/characters-small.png'; ?> 340w,
            <?php echo get_template_directory_uri() . '/assets/images/characters-medium.png'; ?> 650w,
            <?php echo get_template_directory_uri() . '/assets/images/characters-big.png'; ?> 800w,
            <?php echo get_template_directory_uri() . '/assets/images/characters-large.png'; ?> 1000w,
            <?php echo get_template_directory_uri() . '/assets/images/characters-hi-dpi.png'; ?> 1383w"
          sizes="(min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->

</div><!-- /page section -->

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
              <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right">Start</h2><br />
              <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right">Lorem ipsum dolor</p><br />
              <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->




<?php
get_footer();
?>
