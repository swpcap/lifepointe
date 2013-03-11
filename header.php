<?php global  $post;
if  ($post->post_parent && post_password_required($post->post_parent))
	wp_redirect(get_permalink($post->post_parent));?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage LifePointe
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'lifepointe' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style-theme.php" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_single('192') ): 
	echo '<meta http-equiv="refresh" content="0; url=http://bit.ly/rFpQJi" />';
	endif ?>
<link rel="icon" 
      type="image/png" 
      href="<?php echo get_template_directory_uri(); ?>/images/icon-32.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/ios-icon-144.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/ios-icon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/ios-icon-72.png">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/ios-icon-57.png">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style-ie.css" />
<![endif]-->
<script language="javascript" type="text/javascript">
function popUp (c) {
	window.open(c,
		'window',
		'width=290,height=50,scrollbars=no,status=no');
}
</script>

<?php wp_enqueue_script('scriptaculous'); ?>
<?php wp_enqueue_script('scriptaculous-effects'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>
<?php if(post_type_exists('post')) : ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=296457183781895";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<?php endif; ?>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
		<hgroup>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
        
        <aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>

		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'lifepointe' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'lifepointe' ); ?>"><?php _e( 'Skip to content', 'lifepointe' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'left' ) ); ?>
		</nav><!-- #access -->

		<nav id="access2" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'lifepointe' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'lifepointe' ); ?>"><?php _e( 'Skip to content', 'lifepointe' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'right' ) ); ?>
		</nav><!-- #access2 -->
	</header><!-- #branding -->

	<div id="main">
