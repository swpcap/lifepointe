<?php
/**
 * Template Name: Article
 *
 * @package WordPress
 * @subpackage LifePointe
 */

get_header(); ?>

    <div id="primary">

      <?php
      $cat_slug = get_post_meta( $wp_query->post->ID , 'feed_term', true);
      $idObj = get_category_by_slug( $cat_slug ); 
        $feed_term = $idObj->term_id;

      global $post;
      global $more;
      $args = array( 'numberposts' => 1, 'category' => $feed_term );
      $myposts = get_posts( $args );

      foreach( $myposts as $post ) :  setup_postdata($post);
      $more = 0; ?>
        <div id="news">
          <a href="<?php the_permalink(); ?>">
<?php if ( has_post_video() )
  the_post_video(440,330);
elseif ( has_post_thumbnail() )
  the_post_thumbnail( array( 450,330 ) ); ?></a>
                <div id="article-teaser">
            <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
            <div class="entry-meta">
      <?php lifepointe_posted_on(); ?>
    </div><!-- .entry-meta -->
            <?php the_content('Read More'); ?>
          </div>
        </div>
      <?php endforeach; ?>

      <div class="clearfix"></div>

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

      </div><!-- #content -->

      <?php endwhile; // end of the loop. ?>


    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
