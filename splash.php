<?php
/**
 * Template Name: Splash
 *
 * @package LifePointe
 * @since 0.9.5
 */

get_header(); ?>

    <div id="primary">
      <div id="content" role="main" <?php post_class(); ?>>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php echo do_shortcode('[steel_slideshow name="splash"]'); ?>

          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
