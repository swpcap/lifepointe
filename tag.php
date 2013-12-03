<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package LifePointe
 * @since 0.8.0
 */

get_header(); ?>

    <section id="primary">
      <div id="content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php
            printf( __( 'Tag Archives: %s', 'lifepointe' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>

          <?php
            $tag_description = tag_description();
            if ( ! empty( $tag_description ) )
              echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' ); ?>
        </header>

        <?php rewind_posts(); ?>

        <?php lifepointe_content_nav( 'nav-above' ); ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'format', get_post_format() ); ?>

        <?php endwhile; ?>

        <?php lifepointe_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'lifepointe' ); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lifepointe' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->

      <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
