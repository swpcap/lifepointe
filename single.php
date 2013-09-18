<?php
/**
 * The Template for displaying all single posts.
 *
 * @package LifePointe
 * @since 0.8.0
 */

get_header(); ?>

    <div id="primary">
      <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title">
              <?php the_title(); ?>
            </h1>
        
            <div class="entry-meta">
              <?php lifepointe_posted_on(); ?>
              <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="true" data-layout="button_count" data-width="90" data-show-faces="false" data-font="arial"></div>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->
        
          <div class="entry-content">
            <div id="featured-pic"><?php if ( has_post_video() )
          the_post_video(400,225);
        elseif ( has_post_thumbnail() )
          the_post_thumbnail( 'small-title' );
        ?>
        </div>
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'lifepointe' ), 'after' => '</div>' ) ); ?>
          </div><!-- .entry-content -->
        
          <footer class="entry-meta">
            <?php
              /* translators: used between list items, there is a space after the comma */
              $category_list = get_the_category_list( __( ', ', 'lifepointe' ) );
        
              /* translators: used between list items, there is a space after the comma */
              $tag_list = get_the_tag_list( '', ', ' );
        
              if ( ! lifepointe_categorized_blog() ) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                  $meta_text = __( '', 'lifepointe' );
                } else {
                  $meta_text = __( '', 'lifepointe' );
                }
        
              } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                  $meta_text = __( 'This entry was posted in %1$s.', 'lifepointe' );
                } else {
                  $meta_text = __( 'This entry was posted in %1$s.', 'lifepointe' );
                }
        
              } // end check for categories on this blog
        
              printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
              );
            ?>
        
            <?php edit_post_link( __( 'Edit', 'lifepointe' ), '<span class="edit-link">', '</span>' ); ?>
            <?php comments_template( '', true ); ?>
          </footer><!-- .entry-meta -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php lifepointe_content_nav( 'nav-below' ); ?>

      <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
