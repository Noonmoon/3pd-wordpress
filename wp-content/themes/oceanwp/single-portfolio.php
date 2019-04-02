<?php get_header(); ?>

  <?php do_action( 'ocean_before_content_wrap' ); ?>

  <div id="content-wrap" class="container clr">

    <?php do_action( 'ocean_before_primary' ); ?>

    <div id="primary" class="content-area clr">

      <?php do_action( 'ocean_before_content' ); ?>

      <div id="content" class="site-content clr">

        <?php do_action( 'ocean_before_content_inner' ); ?>

        <?php
        // Elementor `single` location
        if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

          // Start loop
          while ( have_posts() ) : the_post();

              // EDD Page
              if ( is_singular( 'download') ) {
                get_template_part( 'partials/edd/single' );
              }


              // All other post types.
              else { ?>


                  <?php

                  get_template_part( 'partials/single/layout-portfolio', get_post_type() );

              }

        endwhile;

        } ?>



        <?php do_action( 'ocean_after_content_inner' ); ?>


      </div><!-- #content -->

      <?php do_action( 'ocean_after_content' ); ?>

    </div><!-- #primary -->

    <?php do_action( 'ocean_after_primary' ); ?>

  </div><!-- #content-wrap -->

  <?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>
