<?php
/**
 * Template Name: Middle School
 *
 * @package WordPress
 * @subpackage LifePointe
 */

get_header(); ?>

    <div id="primary">
      <img class="program-logo" id="flipside" src="<?php echo get_template_directory_uri(); ?>/images/ignite-logo.png" />
      <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'middleschool' ); ?>

          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
