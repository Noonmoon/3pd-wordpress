<?php
/**
 * Template Name: Portfolio
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

    <?php get_template_part('content', 'portfolio') ?>

  <?php get_footer(); ?>

  </body>
</html>