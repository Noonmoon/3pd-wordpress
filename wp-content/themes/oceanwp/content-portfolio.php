<?php

  $num_posts = ( is_front_page() ) ? 4: -1;

  $args = array(
    'post_type' => 'Portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
?>

    <div class="flex-container">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

      <div class="card">
        <div class="cont">
          <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'img']); ?>
            </a>
          </div>
          <div class="card-title">
            <h5><?php the_title(); ?></h5>
          </div>
        </div>
      </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>

<?php get_footer(); ?>