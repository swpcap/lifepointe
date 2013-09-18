<?php
/**
 * Template Name: Modal
 *
 * @package LifePointe
 * @since 0.8.0
 */

//Load Header ?>
<!DOCTYPE html>
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
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<?php if ( is_single('76') ): 
  echo '<meta http-equiv="refresh" content="0; url=http://www.churchteams.com/Login.asp?oID=8895&amp;secID=bktxaTN1aWJhSXA5OFd4d3JSbmg3MlExMjZmUmEwam0%3D&amp;page=GroupBrowseNew.asp?filter=y~q34726=164211~Title=" />';
  endif ?>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

      <div id="primary" class="full-width">
        <div id="content">

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'type', 'page' ); ?>

            <?php comments_template( '', true ); ?>

          <?php endwhile; // end of the loop. ?>
        </div>
      </div>

<?php //Load footer ?>

<?php wp_footer(); ?>

</body>
</html>
