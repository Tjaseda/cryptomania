<?php
/**
 * Template Name: Characters Page
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

  <div class="l-container l-pd-t--7 ">
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
      <div class="l-cl l-cl-sm--10 l-cl-ds--6 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">Get to know the characters</h2><br />
          <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat tristique velit eu commodo. Suspendisse condimentum quis nisi vel tristique. Aenean mollis, tortor eu aliquet maximus, felis velit ullamcorper nunc, id consectetur augue dui sed ligula. Aenean ut commodo metus, vitae lobortis quam.</p>
        </div>
      </div>
      <!-- second column - image:
      * flexbox column with verticaly centered content:
      * on small screen is 100% width with centered text,
      * from desktop screen is 50% width
      -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--4">
        <!-- about us section image -->
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
        <!-- second column - text:
        * flexbox column with verticaly centered content:
        * on small screen is 100% width with centered text,
        * from desktop screen is 50% width, with text positioned right
        -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right">Sky</h2><br />
              <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right">Lorem ipsum dolor</p><br />
              <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

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
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">Fudster</h2><br />
          <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left">Lorem ipsum dolor sit amet</p><br />
          <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
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
        <!-- second column - text:
        * flexbox column with verticaly centered content:
        * on small screen is 100% width with centered text,
        * from desktop screen is 50% width, with text positioned right
        -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right">Archie</h2><br />
              <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right">Lorem ipsum dolor</p><br />
              <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

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
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">A.D.18</h2><br />
          <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left">Lorem ipsum dolor sit amet</p><br />
          <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
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
        <!-- second column - text:
        * flexbox column with verticaly centered content:
        * on small screen is 100% width with centered text,
        * from desktop screen is 50% width, with text positioned right
        -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right">Mox</h2><br />
              <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right">Lorem ipsum dolor</p><br />
              <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

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
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left">Max</h2><br />
          <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left">Lorem ipsum dolor sit amet</p><br />
          <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet dolor ac risus mattis posuere ac id quam. Fusce id dolor scelerisque.</p><br />
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
          sizes="(min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<!-- NEXT AND PREV LINKS -->
<?php

  $pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
  $size = sizeof($pagelist);
  $pages = array();

  foreach ($pagelist as $page) {
     $pages[] += $page->ID;
  }

  $current = array_search($post->ID, $pages);
  $lastID = end($pagelist);
  $prevID;
  $nextID;

  if ($current > 0) {
    $prevID = $pages[$current-1];
  } else {
    $prevID = end($pagelist);
  }

  if ($current < ($size-1)) {
    $nextID = $pages[$current+1];
  } else {
    $nextID = $pages[0];
  }

?>

<div class="c-next">
  <div class="l-container l-pos--rel">
    <a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><i class="icon-arrow-left icon-25 c-next__cors c-next__cors--prev"></i></a>
    <a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>"><i class="icon-arrow-right icon-25 c-next__cors c-next__cors--next"></i></a>

    <div class="c-next l-row">
      <div class="c-next__item c-next__item--prev">
        <div class="c-next__content">
          <a class="o-a o-txt--green c-next__content--link" href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">Previous</a>
          <p class="c-next__content--title"><?php echo get_the_title($prevID); ?></a>
        </div>
      </div>

      <div class="c-next__item c-next__item--next">
        <div class="c-next__content">
          <a class="o-a o-txt--green c-next__content--link" href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">Next</a>
          <p class="c-next__content--title"><?php echo get_the_title($nextID); ?></p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
get_footer();
?>
