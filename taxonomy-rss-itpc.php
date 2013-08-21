<?php
/**
*
* @package WordPress
* @subpackage LifePointe
*/
header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true);
$more = 1; ?>

<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">

<channel>
<?php //Define keys
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
  
    <?php global $wp_query; $args = array_merge( $wp_query->query, array( 'post_type' => 'sermon', 'posts_per_page' => 999, 'orderby' => 'date', 'order' => 'DESC' ) ); query_posts( $args ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
      <?php get_template_part( 'content', 'podcast' ); ?>
    
    <?php endwhile; ?>
  
  <?php endif; ?>
  
</channel>

</rss>
