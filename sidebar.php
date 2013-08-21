<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage LifePointe
 */
?>
    <div id="secondary" class="widget-area" role="complementary">

        <aside id="ns1">
          <?php $ns1_slug = get_post_meta($post->ID, 'ns1', true);
                $ns1_page = get_page_by_path($ns1_slug);
                $ns1_value = $ns1_page->ID;
                if ( has_post_thumbnail($ns1_value)) {
                  echo '<a href="' . get_permalink( $ns1_value ) . '" title="' . esc_attr( $ns1_value->post_title ) . '">' . get_the_post_thumbnail($ns1_value, 'next-steps') . '</a>';
                  echo '<a href="' . get_permalink( $ns1_value ) . '" title="' . esc_attr( $ns1_value->post_title ) . '"><div class="ns-title">' . get_the_title($ns1_value) . '</div></a>';
                } ?>  
        </aside>
        
        <aside id="ns2">
          <?php $ns2_slug = get_post_meta($post->ID, 'ns2', true);
                $ns2_page = get_page_by_path($ns2_slug);
                $ns2_value = $ns2_page->ID;
                if ( has_post_thumbnail($ns2_value)) {
                  echo '<a href="' . get_permalink( $ns2_value ) . '" title="' . esc_attr( $ns2_value->post_title ) . '">' . get_the_post_thumbnail($ns2_value, 'next-steps') . '</a>';
                  echo '<a href="' . get_permalink( $ns2_value ) . '" title="' . esc_attr( $ns2_value->post_title ) . '"><div class="ns-title">' . get_the_title($ns2_value) . '</div></a>';
                } ?>  
        </aside>
        
        <aside id="ns3">
          <?php $ns3_slug = get_post_meta($post->ID, 'ns3', true);
                $ns3_page = get_page_by_path($ns3_slug);
                $ns3_value = $ns3_page->ID;
                if ( has_post_thumbnail($ns3_value)) {
                  echo '<a href="' . get_permalink( $ns3_value ) . '" title="' . esc_attr( $ns3_value->post_title ) . '">' . get_the_post_thumbnail($ns3_value, 'next-steps') . '</a>';
                  echo '<a href="' . get_permalink( $ns3_value ) . '" title="' . esc_attr( $ns3_value->post_title ) . '"><div class="ns-title">' . get_the_title($ns3_value) . '</div></a>';
                } ?>  
        </aside>

    <?php /* if ( is_active_sidebar( 'next-steps' ) ) :  */?>
    <?php dynamic_sidebar( 'next-steps' ); ?>
    <?php /* endif; // end sidebar widget area */ ?>
    </div><!-- #secondary .widget-area -->
    
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div id="tertiary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div><!-- #tertiary .widget-area -->
    <?php endif; ?>
