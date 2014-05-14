<?php
/**
 * The Template for displaying all single posts.
 *
 * @package LifePointe
 * @since 0.9.1
 */

get_header(); ?>

    <div id="primary">
      <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'type', 'profile' ); ?>

      <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<!-- ?php get_sidebar(); ?  -->
<?php get_footer(); ?>
