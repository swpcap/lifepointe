<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package LifePointe
 * @since 0.8.0
 */

get_header(); ?>

  <div id="primary">
    <div id="content" role="main">

      <article id="post-0" class="post error404 not-found">
        <header class="entry-header">
          <h1 class="entry-title"><?php _e( 'Page not found', 'lifepointe' ); ?></h1>
        </header>

        <div class="entry-content">
          <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'lifepointe' ); ?></p>

          <?php get_search_form(); ?>

          <div class="error404-menu">
            <?php wp_nav_menu( array('menu' => 'Left' )); ?>
            <?php wp_nav_menu( array('menu' => 'Right' )); ?>
          </div>

        </div><!-- .entry-content -->
      </article><!-- #post-0 -->

    </div><!-- #content -->
  </div><!-- #primary -->
<?php /* Load Sidebar */ ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

        <aside id="search" class="widget widget_search">
          <?php get_search_form(); ?>
        </aside>

        <aside id="ns1">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns1_value = $settings['searchns1'];
            if ( has_post_thumbnail($ns1_value)) {
              echo '<a href="' . get_permalink( $ns1_value ) . '" title="' . esc_attr( $ns1_value->post_title ) . '">';
              echo get_the_post_thumbnail($ns1_value, 'nextstep');
              echo '</a>';
              echo '<a href="' . get_permalink( $ns1_value ) . '" title="' . esc_attr( $ns1_value->post_title ) . '"><div class="ns-title">';
              echo get_the_title($ns1_value);
              echo '</div></a>';
            }
          ?>  
        </aside>

        <aside id="ns2" class="widget">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns2_value = $settings['searchns2'];
            if ( has_post_thumbnail($ns2_value)) {
              echo '<a href="' . get_permalink( $ns2_value ) . '" title="' . esc_attr( $ns2_value->post_title ) . '">';
              echo get_the_post_thumbnail($ns2_value, 'nextstep');
              echo '</a>';
              echo '<a href="' . get_permalink( $ns2_value ) . '" title="' . esc_attr( $ns2_value->post_title ) . '"><div class="ns-title">';
              echo get_the_title($ns2_value);
              echo '</div></a>';
            }
          ?>
        </aside>

        <aside id="ns3" class="widget">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns3_value = $settings['searchns3'];
            if ( has_post_thumbnail($ns3_value)) {
              echo '<a href="' . get_permalink( $ns3_value ) . '" title="' . esc_attr( $ns3_value->post_title ) . '">';
              echo get_the_post_thumbnail($ns3_value, 'nextstep');
              echo '</a>';
              echo '<a href="' . get_permalink( $ns3_value ) . '" title="' . esc_attr( $ns3_value->post_title ) . '"><div class="ns-title">';
              echo get_the_title($ns3_value);
              echo '</div></a>';
            }
          ?>
        </aside>

        <aside id="ns4" class="widget">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns4_value = $settings['searchns4'];
            if ( has_post_thumbnail($ns4_value)) {
              echo '<a href="' . get_permalink( $ns4_value ) . '" title="' . esc_attr( $ns4_value->post_title ) . '">';
              echo get_the_post_thumbnail($ns4_value, 'nextstep');
              echo '</a>';
              echo '<a href="' . get_permalink( $ns4_value ) . '" title="' . esc_attr( $ns4_value->post_title ) . '"><div class="ns-title">';
              echo get_the_title($ns4_value);
              echo '</div></a>';
            }
          ?>
        </aside>

        <aside id="ns5" class="widget">
          <?php
            $settings = get_option('lifepointe_search_results');
            $ns5_value = $settings['searchns5'];
            if ( has_post_thumbnail($ns4_value)) {
              echo '<a href="' . get_permalink( $ns5_value ) . '" title="' . esc_attr( $ns5_value->post_title ) . '">';
              echo get_the_post_thumbnail($ns5_value, 'nextstep');
              echo '</a>';
              echo '<a href="' . get_permalink( $ns5_value ) . '" title="' . esc_attr( $ns5_value->post_title ) . '"><div class="ns-title">';
              echo get_the_title($ns5_value);
              echo '</div></a>';
            }
          ?>
        </aside>

      <?php endif; // end sidebar widget area ?>
    </div><!-- #secondary .widget-area -->

    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div id="tertiary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- #tertiary .widget-area -->
    <?php endif; ?>
<?php get_footer(); ?>
