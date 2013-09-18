<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package LifePointe
 * @since 0.8.0
 */

get_header(); ?>

    <section id="primary">
      <div id="content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'lifepointe' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <?php lifepointe_content_nav( 'nav-above' ); ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'type', 'search' ); ?>

        <?php endwhile; ?>

        <?php lifepointe_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'lifepointe' ); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lifepointe' ); ?></p>
            <?php get_search_form(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->

      <?php endif; ?>

      </div><!-- #content -->
    </section><!-- #primary -->

<?php /* Load Sidebar */ ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

        <aside id="ns1">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns1_slug = $settings['searchns1'];
            if (!empty($ns1_slug)) {
              $ns1_page = get_page_by_path($ns1_slug);
              $ns1_value = $ns1_page->ID;
              if ( has_post_thumbnail($ns1_value)) {
                echo '<a href="' . get_permalink( $ns1_value ) . '" title="' . esc_attr( $ns1_value->post_title ) . '">';
                echo get_the_post_thumbnail($ns1_value, 'next-steps');
                echo '</a>';
                echo '<a href="' . get_permalink( $ns1_value ) . '" title="' . esc_attr( $ns1_value->post_title ) . '"><div class="ns-title">';
                echo get_the_title($ns1_value);
                echo '</div></a>';
              }
            }
          ?>  
        </aside>

        <aside id="ns2">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns2_slug = $settings['searchns2'];
            if (!empty($ns2_slug)) {
              $ns2_page = get_page_by_path($ns2_slug);
              $ns2_value = $ns2_page->ID;
              if ( has_post_thumbnail($ns2_value)) {
                echo '<a href="' . get_permalink( $ns2_value ) . '" title="' . esc_attr( $ns2_value->post_title ) . '">';
                echo get_the_post_thumbnail($ns2_value, 'next-steps');
                echo '</a>';
                echo '<a href="' . get_permalink( $ns2_value ) . '" title="' . esc_attr( $ns2_value->post_title ) . '"><div class="ns-title">';
                echo get_the_title($ns2_value);
                echo '</div></a>';
              }
            }
          ?>  
        </aside>

        <aside id="ns3">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns3_slug = $settings['searchns3'];
            if (!empty($ns3_slug)) {
              $ns3_page = get_page_by_path($ns3_slug);
              $ns3_value = $ns3_page->ID;
              if ( has_post_thumbnail($ns3_value)) {
                echo '<a href="' . get_permalink( $ns3_value ) . '" title="' . esc_attr( $ns3_value->post_title ) . '">';
                echo get_the_post_thumbnail($ns3_value, 'next-steps');
                echo '</a>';
                echo '<a href="' . get_permalink( $ns3_value ) . '" title="' . esc_attr( $ns3_value->post_title ) . '"><div class="ns-title">';
                echo get_the_title($ns3_value);
                echo '</div></a>';
              }
            }
          ?>  
        </aside>
                
        <aside id="ns4">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns4_slug = $settings['searchns4'];
            if (!empty($ns4_slug)) {
              $ns4_page = get_page_by_path($ns4_slug);
              $ns4_value = $ns4_page->ID;
              if ( has_post_thumbnail($ns4_value)) {
                echo '<a href="' . get_permalink( $ns4_value ) . '" title="' . esc_attr( $ns4_value->post_title ) . '">';
                echo get_the_post_thumbnail($ns4_value, 'next-steps');
                echo '</a>';
                echo '<a href="' . get_permalink( $ns4_value ) . '" title="' . esc_attr( $ns4_value->post_title ) . '"><div class="ns-title">';
                echo get_the_title($ns4_value);
                echo '</div></a>';
              }
            }
          ?>  
        </aside>
                
        <aside id="ns5">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns5_slug = $settings['searchns5'];
            if (!empty($ns5_slug)) {
              $ns5_page = get_page_by_path($ns5_slug);
              $ns5_value = $ns5_page->ID;
              if ( has_post_thumbnail($ns5_value)) {
                echo '<a href="' . get_permalink( $ns5_value ) . '" title="' . esc_attr( $ns5_value->post_title ) . '">';
                echo get_the_post_thumbnail($ns5_value, 'next-steps');
                echo '</a>';
                echo '<a href="' . get_permalink( $ns5_value ) . '" title="' . esc_attr( $ns5_value->post_title ) . '"><div class="ns-title">';
                echo get_the_title($ns5_value);
                echo '</div></a>';
              }
            }
          ?>  
        </aside>

      <?php endif; // end sidebar widget area ?>
    </div><!-- #secondary .widget-area -->
<?php get_footer(); ?>
