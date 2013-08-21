<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage LifePointe
 */

get_header(); ?>

    <div id="primary">
      <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail('profile');
            }  
            ?>
            
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p><span class="staff-title"><?php meta('staff_title'); ?></span><br />
               <span class="staff-email"><a href="mailto:<?php meta('staff_email'); ?>"><?php meta('staff_email'); ?></a></span><br />
               <span class="staff-phone"><?php meta('staff_phone'); ?></span></p>
          </header><!-- .entry-header -->
        
          <div class="entry-content">
            
            <?php the_content('Read More'); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'lifepointe' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'lifepointe' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

      <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<!-- ?php get_sidebar(); ?  -->
<?php get_footer(); ?>
