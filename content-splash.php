<?php
/**
 * The template used for displaying page content in splash.php
 *
 * @package WordPress
 * @subpackage LifePointe
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?include (ABSPATH . '/wp-content/plugins/coin-slider-4-wp/coinslider.php'); ?>

</article><!-- #post-<?php the_ID(); ?> -->