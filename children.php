<?php
/**
 * Template Name: Children's
 *
 * @package LifePointe
 * @since 0.8.0
 */

get_header(); ?>

    <div id="primary">
      <img class="program-logo" id="kidconnection" src="<?php echo get_template_directory_uri(); ?>/images/kidconnection-logo.png" />
      <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'lifepointe' ), 'after' => '</div>' ) ); ?>
              <?php edit_post_link( __( 'Edit', 'lifepointe' ), '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .entry-content -->
          </article><!-- #post-<?php the_ID(); ?> -->

          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
