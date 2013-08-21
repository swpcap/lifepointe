<?php
/**
 * Template Name: Children's
 *
 * @package WordPress
 * @subpackage LifePointe
 */

get_header(); ?>

    <div id="primary">
      <img class="program-logo" id="kidconnection" src="<?php echo get_template_directory_uri(); ?>/images/kidconnection-logo.png" />
      <div id="content" role="main">
        
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'children' ); ?>

          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
