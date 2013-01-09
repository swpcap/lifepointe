<?php
/**
 *
 * @package WordPress
 * @subpackage LifePointe
 */
header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true);
$more = 1;

echo '<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">';


//Define keys
$settings = get_option('lifepointe_podcast');
$pod_title = $settings['pod_title'];
$pod_copy = $settings['pod_copy'];
$pod_subtitle = $settings['pod_subtitle'];
$pod_author = $settings['pod_author'];
$pod_summary = $settings['pod_summary'];
$pod_desc = $settings['pod_desc'];
$pod_owner = $settings['pod_owner'];
$pod_owner_email = $settings['pod_owner_email']; 
?>

<channel>

    <title><?php echo $pod_title; ?></title>
    
    <link>http://www.sharethelife.org/series/</link>
    
    <language>en-us</language>
    
    <copyright><?php echo $pod_copy; ?></copyright>
    
    <itunes:subtitle><?php echo $pod_subtitle; ?></itunes:subtitle>
    
    <itunes:author><?php echo $pod_author; ?></itunes:author>
    
    <itunes:summary><?php echo $pod_summary; ?></itunes:summary>
    
    <description><?php echo $pod_desc; ?></description>
    
    <itunes:owner>
    
    <itunes:name><?php echo $pod_owner; ?></itunes:name>
    
    <itunes:email><?php echo $pod_owner_email; ?></itunes:email>
    
    </itunes:owner>
    
    <itunes:image href="http://sharethelife.org/podcast-icon.jpg"></itunes:image>
    
    <itunes:category text="Religion &amp; Spirituality">
    
    <itunes:category text="Christianity"></itunes:category>
    
    </itunes:category>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php global $wp_query;
		  $args = array_merge( $wp_query->query, array( 'post_type' => 'sermon', 'posts_per_page' => 999, 'orderby' => 'date', 'order' => 'DESC' ) );
		  query_posts( $args ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			/* Include the Post-Format-specific template for the content.
			 * If you want to overload this in a child theme then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', 'podcast' );
		?>

	<?php endwhile; ?>

<?php endif; ?>
</channel>

</rss>