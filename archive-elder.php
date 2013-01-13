<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage LifePointe
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header>
					<h1 class="page-title">Elder</h1>
				</header>

				<?php /* Start the Loop */ ?>
				<?php global $wp_query;
				      $args = array_merge( $wp_query->query, array( 'post_type' => 'elder', 'posts_per_page' => 99, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
				      query_posts( $args ); ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'elder' );
					?>

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
						$settings = get_option('lifepointe_staff');
						$ns1_slug = $settings['staffns1'];
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
						$settings = get_option('lifepointe_staff');
						$ns2_slug = $settings['staffns2'];
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
						$settings = get_option('lifepointe_staff');
						$ns3_slug = $settings['staffns3'];
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

<?php get_footer(); ?>
