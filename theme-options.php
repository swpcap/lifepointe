<?php
/* 
 * Theme Options Page
 * Source: http://digitalraindrops.net/2011/02/tabbed-options-page/
 */

// Default options values
$lifepointe_general = array(
  'footer_copyright' => '&copy; ' . date('Y') . ' ' . get_bloginfo('name'),
  'intro_text' => '',
  'featured_cat' => '',
);

$lifepointe_layout = array(
  'layout_view' => 'fixed'
);

$lifepointe_advanced = array(
  'author_credits' => true
);

if ( is_admin() ) : // Load only if we are viewing an admin page

function lifepointe_register_settings() {
  // Register settings
  register_setting( 'lifepointe_theme_general', 'lifepointe_general', 'lifepointe_validate_general');
  register_setting( 'lifepointe_theme_staff', 'lifepointe_staff', 'lifepointe_validate_staff');
  register_setting( 'lifepointe_theme_sermons', 'lifepointe_sermons', 'lifepointe_validate_sermons');
  register_setting( 'lifepointe_theme_search_results', 'lifepointe_search_results', 'lifepointe_validate_search_results');
  register_setting( 'lifepointe_theme_podcast', 'lifepointe_podcast', 'lifepointe_validate_podcast');
}

add_action( 'admin_init', 'lifepointe_register_settings' );

function lifepointe_theme_options() {
  // Add theme options page to the addmin menu
  add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'lifepointe_theme_home_page' );
}

add_action( 'admin_menu', 'lifepointe_theme_options' );

function lifepointe_admin_tabs( $current = 'general' ) { 
    $tabs = array( 'general' => 'General', 'staff' => 'Staff', 'sermons' => 'Sermon Archives', 'search_results' => 'Search Results', 'podcast' => 'Podcast' ); 
    $links = array(); 
    foreach( $tabs as $tab => $name ) : 
        $links[] = "<a class='nav-tab' href='?page=theme_options&tab=$tab'>$name</a>"; 
    endforeach; 
    echo '<h2>'; 
    foreach ( $links as $link ) 
        echo $link; 
    echo '</h2>'; 
}

// Function to generate options page
function lifepointe_theme_home_page() {
  global $pagenow;

  lifepointe_admin_tabs();
  
  if ( $pagenow == 'themes.php' && $_GET['page'] == 'theme_options' ) : 
    if ( isset ( $_GET['tab'] ) ) : 
        $tab = $_GET['tab']; 
    else: 
        $tab = 'general'; 
    endif; 
    switch ( $tab ) : 
        case 'general' : 
            theme_general_options(); 
            break; 
        case 'staff' : 
            theme_staff_options(); 
            break;
    case 'sermons' : 
            theme_sermons_options(); 
            break;  
        case 'search_results' : 
            theme_search_results_options(); 
            break;
    case 'podcast' : 
            theme_podcast_options(); 
            break; 
    endswitch; 
  endif;
}

// Function to generate options page
function theme_general_options() {
  global $lifepointe_general;

  if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

  <div class="wrap">
    
  <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>";
  // This shows the page's name and an icon if one has been provided ?>

  <?php if ( false !== $_REQUEST['updated'] ) : ?>
  <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; // If the form has just been submitted, this shows the notification ?>

  <form method="post" action="options.php">
    
  <?php $settings = get_option( 'lifepointe_general', $lifepointe_general ); ?>
  
  <?php settings_fields( 'lifepointe_theme_general' );
  /* This function outputs some hidden fields required by the form,
  including a nonce, a unique number used to ensure the form has been submitted from the admin page
  and not somewhere else, very important for security */ ?>

  <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

  <?php
  /**
   * Asks for text to display in Search box
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Text for search box', 'lifepointetheme' ); ?></th>
    <td>
      <input type="text" id="lifepointe_general[s_text]" class="regular-text" name="lifepointe_general[s_text]" value="<?php esc_attr_e( $settings['s_text'] ); ?>" value="<?php esc_attr_e( $settings['s_text'] ); ?>"  />
      <label class="description" for="lifepointe_general[s_text]"><?php _e( 'ex. Search', 'lifepointetheme' ); ?></label>
    </td>
  </tr>

  <?php
  /**
   * Asks for Facebook profile URL
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Facebook page', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_general[fb_url]" class="regular-text" type="text" name="lifepointe_general[fb_url]" value="<?php esc_attr_e( $settings['fb_url'] ); ?>" />
      <label class="description" for="lifepointe_general[fb_url]"><?php _e( 'ex. http://facebook.com/starverte', 'lifepointetheme' ); ?></label>
    </td>
  </tr>

  <?php
  /**
   * Asks for Podcast URL
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'iTunes Podcast', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_general[pod_url]" class="regular-text" type="text" name="lifepointe_general[pod_url]" value="<?php esc_attr_e( $settings['pod_url'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Asks for Contact Us Form slug
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Contact Us Form', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_general[contact_slug]" class="regular-text" type="text" name="lifepointe_general[contact_slug]" value="<?php esc_attr_e( $settings['contact_slug'] ); ?>" />
      <label class="description" for="lifepointe_general[contact_slug]"><?php _e( 'ex. http://mbeall.yelp.com', 'lifepointetheme' ); ?></label>
    </td>
  </tr>

  <?php
  /**
   * Asks for Prayer Form slug
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Prayer Form', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_general[prayer_slug]" class="regular-text" type="text" name="lifepointe_general[prayer_slug]" value="<?php esc_attr_e( $settings['prayer_slug'] ); ?>" />
      <label class="description" for="lifepointe_general[prayer_slug]"><?php _e( 'ex. &copy 2011 Star Verte LLC', 'lifepointetheme' ); ?></label>
    </td>
  </tr>
  
  <?php
  /**
   * Footer Heading
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Footer Heading', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_general[footer_heading]" class="regular-text" type="text" name="lifepointe_general[footer_heading]" value="<?php esc_attr_e( $settings['footer_heading'] ); ?>" />
    </td>
  </tr>
  
  <?php
  /**
   * Footer Text
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Footer Text', 'lifepointetheme' ); ?></th>
    <td>
      <textarea id="lifepointe_general[footer_text]" class="text-field" name="lifepointe_general[footer_text]" rows="8" style="width:80%;max-width:400px;"><?php echo stripslashes($settings['footer_text']); ?></textarea>
    </td>
  </tr>

  </table>

  <p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

  </form>

  </div>

  <?php
}

// Function to generate options page
function theme_staff_options() {
  global $lifepointe_staff;

  if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

  <div class="wrap">

  <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Staff Options' ) . "</h2>";
  // This shows the page's name and an icon if one has been provided ?>

  <?php if ( false !== $_REQUEST['updated'] ) : ?>
  <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; // If the form has just been submitted, this shows the notification ?>

  <form method="post" action="options.php">
    
    <?php $settings = get_option( 'lifepointe_staff', $lifepointe_staff ); ?>
  
  <?php settings_fields( 'lifepointe_theme_staff' );
  /* This function outputs some hidden fields required by the form,
  including a nonce, a unique number used to ensure the form has been submitted from the admin page
  and not somewhere else, very important for security */ ?>

  <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

  <?php
  /**
   * First Next Steps Post ID (staff page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'First Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_staff[staffns1]" class="regular-text" type="text" name="lifepointe_staff[staffns1]" value="<?php esc_attr_e( $settings['staffns1'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Second Next Steps Post ID (staff page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Second Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_staff[staffns2]" class="regular-text" type="text" name="lifepointe_staff[staffns2]" value="<?php esc_attr_e( $settings['staffns2'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Third Next Steps Post ID (staff page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Third Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_staff[staffns3]" class="regular-text" type="text" name="lifepointe_staff[staffns3]" value="<?php esc_attr_e( $settings['staffns3'] ); ?>" />
    </td>
  </tr>

  </table>

  <p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

  </form>

  </div>

  <?php
}

// Function to generate options page
function theme_sermons_options() {
  global $lifepointe_sermon;

  if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

  <div class="wrap">

  <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Sermon Archive Options' ) . "</h2>";
  // This shows the page's name and an icon if one has been provided ?>

  <?php if ( false !== $_REQUEST['updated'] ) : ?>
  <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; // If the form has just been submitted, this shows the notification ?>

  <form method="post" action="options.php">
    
    <?php $settings = get_option( 'lifepointe_sermons', $lifepointe_sermon ); ?>
  
  <?php settings_fields( 'lifepointe_theme_sermons' );
  /* This function outputs some hidden fields required by the form,
  including a nonce, a unique number used to ensure the form has been submitted from the admin page
  and not somewhere else, very important for security */ ?>

  <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

  <?php
  /**
   * First Next Steps Post ID (sermon page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'First Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_sermons[sermonns1]" class="regular-text" type="text" name="lifepointe_sermons[sermonns1]" value="<?php esc_attr_e( $settings['sermonns1'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Second Next Steps Post ID (sermon page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Second Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_sermons[sermonns2]" class="regular-text" type="text" name="lifepointe_sermons[sermonns2]" value="<?php esc_attr_e( $settings['sermonns2'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Third Next Steps Post ID (sermon page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Third Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_sermons[sermonns3]" class="regular-text" type="text" name="lifepointe_sermons[sermonns3]" value="<?php esc_attr_e( $settings['sermonns3'] ); ?>" />
    </td>
  </tr>

  </table>

  <p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

  </form>

  </div>

  <?php
}


// Function to generate options page
function theme_search_results_options() {
  global $lifepointe_search_results;

  if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

  <div class="wrap">

  <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Search Results Options' ) . "</h2>";
  // This shows the page's name and an icon if one has been provided ?>

  <?php if ( false !== $_REQUEST['updated'] ) : ?>
  <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; // If the form has just been submitted, this shows the notification ?>

  <form method="post" action="options.php">
    
    <?php $settings = get_option( 'lifepointe_search_results', $lifepointe_search_results ); ?>
  
  <?php settings_fields( 'lifepointe_theme_search_results' );
  /* This function outputs some hidden fields required by the form,
  including a nonce, a unique number used to ensure the form has been submitted from the admin page
  and not somewhere else, very important for security */ ?>

  <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

  <?php
  /**
   * First Next Steps Post ID (search results page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'First Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_search_results[searchns1]" class="regular-text" type="text" name="lifepointe_search_results[searchns1]" value="<?php esc_attr_e( $settings['searchns1'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Second Next Steps Post ID (search results page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Second Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_search_results[searchns2]" class="regular-text" type="text" name="lifepointe_search_results[searchns2]" value="<?php esc_attr_e( $settings['searchns2'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Third Next Steps Post ID (search results page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Third Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_search_results[searchns3]" class="regular-text" type="text" name="lifepointe_search_results[searchns3]" value="<?php esc_attr_e( $settings['searchns3'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Fourth Next Steps Post ID (search results page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Fourth Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_search_results[searchns4]" class="regular-text" type="text" name="lifepointe_search_results[searchns4]" value="<?php esc_attr_e( $settings['searchns4'] ); ?>" />
    </td>
  </tr>

  <?php
  /**
   * Fifth Next Steps Post ID (search results page)
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Fifth Box', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_search_results[searchns5]" class="regular-text" type="text" name="lifepointe_search_results[searchns5]" value="<?php esc_attr_e( $settings['searchns5'] ); ?>" />
    </td>
  </tr>

  </table>

  <p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

  </form>

  </div>

  <?php
}


// Function to generate options page
function theme_podcast_options() {
  global $lifepointe_podcast;

  if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

  <div class="wrap">

  <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Podcast Options' ) . "</h2>";
  // This shows the page's name and an icon if one has been provided ?>

  <?php if ( false !== $_REQUEST['updated'] ) : ?>
  <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; // If the form has just been submitted, this shows the notification ?>

  <form method="post" action="options.php">
    
    <?php $settings = get_option( 'lifepointe_podcast', $lifepointe_podcast ); ?>
  
  <?php settings_fields( 'lifepointe_theme_podcast' );
  /* This function outputs some hidden fields required by the form,
  including a nonce, a unique number used to ensure the form has been submitted from the admin page
  and not somewhere else, very important for security */ ?>

  <table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->

  <?php
  /**
   * Podcast Title
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Title', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_podcast[pod_title]" class="regular-text" type="text" name="lifepointe_podcast[pod_title]" value="<?php esc_attr_e( $settings['pod_title'] ); ?>" />
      <label class="description" for="lifepointe_podcast[pod_title]"><?php _e( 'i.e. LifePointe Sermon Podcast', 'lifepointetheme' ); ?></label>
    </td>
  </tr>
  
  <?php
  /**
   * Podcast Sub-Title
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Subtitle', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_podcast[pod_subtitle]" class="regular-text" type="text" name="lifepointe_podcast[pod_subtitle]" value="<?php esc_attr_e( $settings['pod_subtitle'] ); ?>" />
      <label class="description" for="lifepointe_podcast[pod_subtitle]"><?php _e( '(optional)', 'lifepointetheme' ); ?></label>
    </td>
  </tr>
    
    <?php
  /**
   * Podcast Copyright Notice
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Copyright Notice', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_podcast[pod_copy]" class="regular-text" type="text" name="lifepointe_podcast[pod_copy]" value="<?php esc_attr_e( $settings['pod_copy'] ); ?>" />
      <label class="description" for="lifepointe_podcast[pod_copy]"><?php _e( 'i.e. &#xA9;2012 LifePointe Church', 'lifepointetheme' ); ?></label>
    </td>
  </tr>
  
  <?php
  /**
   * Podcast Author
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Author', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_podcast[pod_author]" class="regular-text" type="text" name="lifepointe_podcast[pod_author]" value="<?php esc_attr_e( $settings['pod_author'] ); ?>" />
      <label class="description" for="lifepointe_podcast[pod_author]"><?php _e( 'i.e. LifePointe Church', 'lifepointetheme' ); ?></label>
    </td>
  </tr>
  
  <?php
  /**
   * Podcast Summary
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Summary', 'lifepointetheme' ); ?></th>
    <td>
      <textarea id="lifepointe_podcast[pod_summary]" class="text-field" name="lifepointe_podcast[pod_summary]" rows="2" style="width:80%;max-width:400px;"><?php echo stripslashes($settings['pod_summary']); ?></textarea>
    </td>
  </tr>
  
  <?php
  /**
   * Podcast Description
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Description', 'lifepointetheme' ); ?></th>
    <td>
      <textarea id="lifepointe_podcast[pod_desc]" class="text-field" name="lifepointe_podcast[pod_desc]" rows="5" style="width:80%;max-width:400px;"><?php echo stripslashes($settings['pod_desc']); ?></textarea>
    </td>
  </tr>
  
  <tr valign="top"><th scope="row"><h3>Podcast Owner</h3></th></tr>
  
  <?php
  /**
   * Podcast Owner
   */
  ?>
  <tr valign="top"><th scope="row"><?php _e( 'Name', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_podcast[pod_owner]" class="regular-text" type="text" name="lifepointe_podcast[pod_owner]" value="<?php esc_attr_e( $settings['pod_owner'] ); ?>" />
      <label class="description" for="lifepointe_podcast[pod_owner]"><?php _e( 'i.e. Steve Paxton', 'lifepointetheme' ); ?></label>
    </td>
  </tr>
  <tr valign="top"><th scope="row"><?php _e( 'Email', 'lifepointetheme' ); ?></th>
    <td>
      <input id="lifepointe_podcast[pod_owner_email]" class="regular-text" type="text" name="lifepointe_podcast[pod_owner_email]" value="<?php esc_attr_e( $settings['pod_owner_email'] ); ?>" />
      <label class="description" for="lifepointe_podcast[pod_owner_email]"><?php _e( 'i.e. stevepaxton@sharethelife.org', 'lifepointetheme' ); ?></label>
    </td>
  </tr>

  </table>

  <p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

  </form>

  </div>

  <?php
}

function lifepointe_validate_general( $input ) {
  global $lifepointe_general;

  $settings = get_option( 'lifepointe_general', $lifepointe_general );
	
	// Say our textarea option must be safe text with the allowed tags for posts
  $input['footer_text'] = wp_filter_post_kses( $input['footer_text'] );
  
  return $input;
}

function lifepointe_validate_staff( $input ) {
  global $lifepointe_staff;

  $settings = get_option( 'lifepointe_staff', $lifepointe_staff );
  
  return $input;
}

function lifepointe_validate_sermons( $input ) {
  global $lifepointe_sermons;

  $settings = get_option( 'lifepointe_sermons', $lifepointe_sermons );
  
  return $input;
}

function lifepointe_validate_search_results( $input ) {
  global $lifepointe_search_results;

  $settings = get_option( 'lifepointe_search_results', $lifepointe_search_results );
    
  return $input;
}

function lifepointe_validate_podcast( $input ) {
  global $lifepointe_podcast;

  $settings = get_option( 'lifepointe_podcast', $lifepointe_podcast );
  
  // Say our textarea option must be safe text with the allowed tags for posts
  $input['pod_summary'] = wp_filter_post_kses( $input['pod_summary'] );
  $input['pod_desc'] = wp_filter_post_kses( $input['pod_desc'] );
    
  return $input;
}

endif;  // EndIf is_admin()
