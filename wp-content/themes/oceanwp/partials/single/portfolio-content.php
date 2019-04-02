<?php
/**
 * Post single content
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
} ?>

<?php do_action( 'ocean_before_single_post_content' ); ?>

<div class="entry-content clr"<?php oceanwp_schema_markup( 'entry_content' ); ?>>

        <!-- Primary Column -->
      <div class="portfolio-gallery">

        <?php if( get_field('Image') ): ?>
          <?php the_field('Image'); ?>
        <?php endif; ?>



      </div>

      <!-- Secondary Column -->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">

          <p><?php the_field('description') ?></p>

        </div>
      </div>

  <?php

  wp_link_pages( array(
    'before'      => '<div class="page-links">' . __( 'Pages:', 'oceanwp' ),
    'after'       => '</div>',
    'link_before' => '<span class="page-number">',
    'link_after'  => '</span>',
  ) ); ?>
</div><!-- .entry -->

<?php do_action( 'ocean_after_single_post_content' ); ?>