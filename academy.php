<?php
/**
 * Template Name: Academy Audio
 *
 * @package LifePointe
 */

get_header(); ?>

    <section id="primary">
      <div id="content" role="main">
      <?php $args = array( 'post_type' => 'sermon', 'posts_per_page' => 99, 'orderby' => 'date', 'order' => 'DESC', 'sermon-topics' => 'academy' );
            $academy = new WP_Query( $args ); ?>
            
      <?php if ( $academy->have_posts() ) : ?>
        <header>
          <h1 class="page-title">LifePointe Academy</h1>
        </header>
        
        <?php while ( $academy->have_posts() ) : $academy->the_post(); ?>

          <?php get_template_part( 'type', 'sermon' ); ?>

        <?php endwhile; ?>

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

<?php /* Load Sidebar */ ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>

        <aside id="ns1">
          <?php
            $settings = get_option('lifepointe_sermons');
            $ns1_slug = $settings['sermonns1'];
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
          ?>  
        </aside>

        <aside id="ns2" class="widget">
          <?php
            $settings = get_option('lifepointe_sermons');
            $ns2_slug = $settings['sermonns2'];
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
          ?>
        </aside>

        <aside id="ns3" class="widget">
          <?php
            $settings = get_option('lifepointe_sermons');
            $ns3_slug = $settings['sermonns3'];
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
          ?>
        </aside>

      <?php endif; // end sidebar widget area ?>
    </div><!-- #secondary .widget-area -->

    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div id="tertiary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- #tertiary .widget-area -->
    <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
