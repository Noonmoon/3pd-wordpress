<?php
/**
 * Template Name: Landing Page
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <!-- Begin Body -->
  <?php get_header() ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="entry-content entry clr">
        <?php the_content(); ?>
      </div><!-- .entry-content -->

    <?php endwhile; ?>

  <?php get_footer(); ?>

  </body>
</html>