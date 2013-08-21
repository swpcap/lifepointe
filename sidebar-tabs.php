<?php
  /**
  * @package WordPress
  * @subpackage LifePointe
  */
?>

<div id="tabs" class="widget-area" role="complementary">
  
  <aside id="tab1">
    <?php $settings = get_option('lifepointe_sidetabs');
          $tab1_value = $settings['tab1'];
          echo '<a class="lbpModal" href="' . get_permalink( $tab1_value ) . '" title="' . esc_attr( $tab1_value->post_title ) . '"><img src="' . get_template_directory_uri() . '/images/resourcestab.png"></a>'; ?>
  </aside>
  
  <aside id="tab2">
    <?php $settings = get_option('lifepointe_sidetabs');
          $tab2_value = $settings['tab2'];
          echo '<a class="lbpModal" href="' . get_permalink( $tab2_value ) . '" title="' . esc_attr( $tab2_value->post_title ) . '"><img src="' . get_template_directory_uri() . '/images/prayertab.png"></a>'; ?>
  </aside>
  
  <aside id="tab3">
    <?php $settings = get_option('lifepointe_sidetabs');
          $tab3_value = $settings['tab3'];
          echo '<a class="lbpModal" href="' . get_permalink( $tab3_value ) . '" title="' . esc_attr( $tab3_value->post_title ) . '"><img src="' . get_template_directory_uri() . '/images/contacttab.png"></a>'; ?>
  </aside>            

</div><!-- #tabs .widget-area -->
