<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage LifePointe
 */
?>

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
