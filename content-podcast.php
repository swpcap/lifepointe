<?php
/**
* The template used for displaying sermons
*
* @package WordPress
* @subpackage LifePointe
*/
?>
<?php if ( has_post_thumbnail() ) {
  $id = get_post_thumbnail_id();
  $series_img = wp_get_attachment_image_src( $id, 'podcast' );
} ?>
<?php //Define keys
  if ( get_post_meta($post->ID, 'week12_date', true) ) {
    $dateMeta12 = get_post_meta($post->ID, 'week12_date', true);
    $week12_date = date('D, j M Y', $dateMeta12);
  }
  if ( get_post_meta($post->ID, 'week11_date', true) ) {
    $dateMeta11 = get_post_meta($post->ID, 'week11_date', true);
    $week11_date = date('D, j M Y', $dateMeta11);
  }
  if ( get_post_meta($post->ID, 'week10_date', true) ) {
    $dateMeta10 = get_post_meta($post->ID, 'week10_date', true);
    $week10_date = date('D, j M Y', $dateMeta10);
  }
  if ( get_post_meta($post->ID, 'week9_date', true) ) {
    $dateMeta9 = get_post_meta($post->ID, 'week9_date', true);
    $week9_date = date('D, j M Y', $dateMeta9);
  }
  if ( get_post_meta($post->ID, 'week8_date', true) ) {
    $dateMeta8 = get_post_meta($post->ID, 'week8_date', true);
    $week8_date = date('D, j M Y', $dateMeta8);
  }
  if ( get_post_meta($post->ID, 'week7_date', true) ) {
    $dateMeta7 = get_post_meta($post->ID, 'week7_date', true);
    $week7_date = date('D, j M Y', $dateMeta7);
  }
  if ( get_post_meta($post->ID, 'week6_date', true) ) {
    $dateMeta6 = get_post_meta($post->ID, 'week6_date', true);
    $week6_date = date('D, j M Y', $dateMeta6);
  }
  if ( get_post_meta($post->ID, 'week5_date', true) ) {
    $dateMeta5 = get_post_meta($post->ID, 'week5_date', true);
    $week5_date = date('D, j M Y', $dateMeta5);
  }
  if ( get_post_meta($post->ID, 'week4_date', true) ) {
    $dateMeta4 = get_post_meta($post->ID, 'week4_date', true);
    $week4_date = date('D, j M Y', $dateMeta4);
  }
  if ( get_post_meta($post->ID, 'week3_date', true) ) {
    $dateMeta3 = get_post_meta($post->ID, 'week3_date', true);
    $week3_date = date('D, j M Y', $dateMeta3);
  }
  if ( get_post_meta($post->ID, 'week2_date', true) ) {
    $dateMeta2 = get_post_meta($post->ID, 'week2_date', true);
    $week2_date = date('D, j M Y', $dateMeta2);
  }
  if ( get_post_meta($post->ID, 'week1_date', true) ) {
    $dateMeta1 = get_post_meta($post->ID, 'week1_date', true);
    $week1_date = date('D, j M Y', $dateMeta1);
  }
?>
<?php if ( get_post_meta($post->ID, 'week12_audio', true) ) : ?>
<item>
  <?php $audioMeta12 = get_post_meta($post->ID, 'week12_audio', true);
        $week12_id = url_to_postid( $audioMeta12 );
        $week12_file = wp_get_attachment_url( $week12_id );
        $week12_length = filesize( get_attached_file( $week12_id ) );
        $week12_duration = get_post_meta( $week12_id , '_duration', true);
        $week12_keywords = get_post_meta( $week12_id , '_keywords', true);
        $week12_post = get_post($week12_id);
        $week12_content = $week12_post->post_content;
        $week12_content = apply_filters('the_content', $week12_content);
        $week12_content = str_replace(']]>', ']]>', $week12_content);
        $week12_summary = strip_tags($week12_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week12_title') ?></title>
  
  <itunes:author><?php meta('week12_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week12_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week12_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week12_file; ?>" length="<?php echo $week12_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week12_file; ?></guid>
  
  <pubDate><?php echo $week12_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week12_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week12_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week11_audio', true) ) : ?>
<item>
  <?php $audioMeta11 = get_post_meta($post->ID, 'week11_audio', true);
        $week11_id = url_to_postid( $audioMeta11 );
        $week11_file = wp_get_attachment_url( $week11_id );
        $week11_length = filesize( get_attached_file( $week11_id ) );
        $week11_duration = get_post_meta( $week11_id , '_duration', true);
        $week11_keywords = get_post_meta( $week11_id , '_keywords', true);
        $week11_post = get_post($week11_id);
        $week11_content = $week11_post->post_content;
        $week11_content = apply_filters('the_content', $week11_content);
        $week11_content = str_replace(']]>', ']]>', $week11_content);
        $week11_summary = strip_tags($week11_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week11_title') ?></title>
  
  <itunes:author><?php meta('week11_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week11_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week11_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week11_file; ?>" length="<?php echo $week11_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week11_file; ?></guid>
  
  <pubDate><?php echo $week11_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week11_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week11_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week10_audio', true) ) : ?>
<item>
  <?php $audioMeta10 = get_post_meta($post->ID, 'week10_audio', true);
        $week10_id = url_to_postid( $audioMeta10 );
        $week10_file = wp_get_attachment_url( $week10_id );
        $week10_length = filesize( get_attached_file( $week10_id ) );
        $week10_duration = get_post_meta( $week10_id , '_duration', true);
        $week10_keywords = get_post_meta( $week10_id , '_keywords', true);
        $week10_post = get_post($week10_id);
        $week10_content = $week10_post->post_content;
        $week10_content = apply_filters('the_content', $week10_content);
        $week10_content = str_replace(']]>', ']]>', $week10_content);
        $week10_summary = strip_tags($week10_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week10_title') ?></title>
  
  <itunes:author><?php meta('week10_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week10_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week10_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week10_file; ?>" length="<?php echo $week10_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week10_file; ?></guid>
  
  <pubDate><?php echo $week10_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week10_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week10_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week9_audio', true) ) : ?>
<item>
  <?php $audioMeta9 = get_post_meta($post->ID, 'week9_audio', true);
        $week9_id = url_to_postid( $audioMeta9 );
        $week9_file = wp_get_attachment_url( $week9_id );
        $week9_length = filesize( get_attached_file( $week9_id ) );
        $week9_duration = get_post_meta( $week9_id , '_duration', true);
        $week9_keywords = get_post_meta( $week9_id , '_keywords', true);
        $week9_post = get_post($week9_id);
        $week9_content = $week9_post->post_content;
        $week9_content = apply_filters('the_content', $week9_content);
        $week9_content = str_replace(']]>', ']]>', $week9_content);
        $week9_summary = strip_tags($week9_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week9_title') ?></title>
  
  <itunes:author><?php meta('week9_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week9_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week9_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week9_file; ?>" length="<?php echo $week9_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week9_file; ?></guid>
  
  <pubDate><?php echo $week9_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week9_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week9_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week8_audio', true) ) : ?>
<item>
  <?php $audioMeta8 = get_post_meta($post->ID, 'week8_audio', true);
        $week8_id = url_to_postid( $audioMeta8 );
        $week8_file = wp_get_attachment_url( $week8_id );
        $week8_length = filesize( get_attached_file( $week8_id ) );
        $week8_duration = get_post_meta( $week8_id , '_duration', true);
        $week8_keywords = get_post_meta( $week8_id , '_keywords', true);
        $week8_post = get_post($week8_id);
        $week8_content = $week8_post->post_content;
        $week8_content = apply_filters('the_content', $week8_content);
        $week8_content = str_replace(']]>', ']]>', $week8_content);
        $week8_summary = strip_tags($week8_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week8_title') ?></title>
  
  <itunes:author><?php meta('week8_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week8_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week8_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week8_file; ?>" length="<?php echo $week8_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week8_file; ?></guid>
  
  <pubDate><?php echo $week8_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week8_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week8_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week7_audio', true) ) : ?>
<item>
  <?php $audioMeta7 = get_post_meta($post->ID, 'week7_audio', true);
        $week7_id = url_to_postid( $audioMeta7 );
        $week7_file = wp_get_attachment_url( $week7_id );
        $week7_length = filesize( get_attached_file( $week7_id ) );
        $week7_duration = get_post_meta( $week7_id , '_duration', true);
        $week7_keywords = get_post_meta( $week7_id , '_keywords', true);
        $week7_post = get_post($week7_id);
        $week7_content = $week7_post->post_content;
        $week7_content = apply_filters('the_content', $week7_content);
        $week7_content = str_replace(']]>', ']]>', $week7_content);
        $week7_summary = strip_tags($week7_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week7_title') ?></title>
  
  <itunes:author><?php meta('week7_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week7_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week7_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week7_file; ?>" length="<?php echo $week7_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week7_file; ?></guid>
  
  <pubDate><?php echo $week7_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week7_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week7_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week6_audio', true) ) : ?>
<item>
  <?php $audioMeta6 = get_post_meta($post->ID, 'week6_audio', true);
        $week6_id = url_to_postid( $audioMeta6 );
        $week6_file = wp_get_attachment_url( $week6_id );
        $week6_length = filesize( get_attached_file( $week6_id ) );
        $week6_duration = get_post_meta( $week6_id , '_duration', true);
        $week6_keywords = get_post_meta( $week6_id , '_keywords', true);
        $week6_post = get_post($week6_id);
        $week6_content = $week6_post->post_content;
        $week6_content = apply_filters('the_content', $week6_content);
        $week6_content = str_replace(']]>', ']]>', $week6_content);
        $week6_summary = strip_tags($week6_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week6_title') ?></title>
  
  <itunes:author><?php meta('week6_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week6_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week6_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week6_file; ?>" length="<?php echo $week6_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week6_file; ?></guid>
  
  <pubDate><?php echo $week6_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week6_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week6_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week5_audio', true) ) : ?>
<item>
  <?php  $audioMeta5 = get_post_meta($post->ID, 'week5_audio', true);
        $week5_id = url_to_postid( $audioMeta5 );
        $week5_file = wp_get_attachment_url( $week5_id );
        $week5_length = filesize( get_attached_file( $week5_id ) );
        $week5_duration = get_post_meta( $week5_id , '_duration', true);
        $week5_keywords = get_post_meta( $week5_id , '_keywords', true);
        $week5_post = get_post($week5_id);
        $week5_content = $week5_post->post_content;
        $week5_content = apply_filters('the_content', $week5_content);
        $week5_content = str_replace(']]>', ']]>', $week5_content);
        $week5_summary = strip_tags($week5_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week5_title') ?></title>
  
  <itunes:author><?php meta('week5_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week5_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week5_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week5_file; ?>" length="<?php echo $week5_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week5_file; ?></guid>
  
  <pubDate><?php echo $week5_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week5_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week5_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week4_audio', true) ) : ?>
<item>
  <?php  $audioMeta4 = get_post_meta($post->ID, 'week4_audio', true);
        $week4_id = url_to_postid( $audioMeta4 );
        $week4_file = wp_get_attachment_url( $week4_id );
        $week4_length = filesize( get_attached_file( $week4_id ) );
        $week4_duration = get_post_meta( $week4_id , '_duration', true);
        $week4_keywords = get_post_meta( $week4_id , '_keywords', true);
        $week4_post = get_post($week4_id);
        $week4_content = $week4_post->post_content;
        $week4_content = apply_filters('the_content', $week4_content);
        $week4_content = str_replace(']]>', ']]>', $week4_content);
        $week4_summary = strip_tags($week4_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week4_title') ?></title>
  
  <itunes:author><?php meta('week4_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week4_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week4_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week4_file; ?>" length="<?php echo $week4_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week4_file; ?></guid>
  
  <pubDate><?php echo $week4_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week4_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week4_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week3_audio', true) ) : ?>
<item>
  <?php  $audioMeta3 = get_post_meta($post->ID, 'week3_audio', true);
        $week3_id = url_to_postid( $audioMeta3 );
        $week3_file = wp_get_attachment_url( $week3_id );
        $week3_length = filesize( get_attached_file( $week3_id ) );
        $week3_duration = get_post_meta( $week3_id , '_duration', true);
        $week3_keywords = get_post_meta( $week3_id , '_keywords', true);
        $week3_post = get_post($week3_id);
        $week3_content = $week3_post->post_content;
        $week3_content = apply_filters('the_content', $week3_content);
        $week3_content = str_replace(']]>', ']]>', $week3_content);
        $week3_summary = strip_tags($week3_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week3_title') ?></title>
  
  <itunes:author><?php meta('week3_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week3_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week3_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week3_file; ?>" length="<?php echo $week3_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week3_file; ?></guid>
  
  <pubDate><?php echo $week3_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week3_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week3_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week2_audio', true) ) : ?>
<item>
  <?php  $audioMeta2 = get_post_meta($post->ID, 'week2_audio', true);
        $week2_id = url_to_postid( $audioMeta2 );
        $week2_file = wp_get_attachment_url( $week2_id );
        $week2_length = filesize( get_attached_file( $week2_id ) );
        $week2_duration = get_post_meta( $week2_id , '_duration', true);
        $week2_keywords = get_post_meta( $week2_id , '_keywords', true);
        $week2_post = get_post($week2_id);
        $week2_content = $week2_post->post_content;
        $week2_content = apply_filters('the_content', $week2_content);
        $week2_content = str_replace(']]>', ']]>', $week2_content);
        $week2_summary = strip_tags($week2_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week2_title') ?></title>
  
  <itunes:author><?php meta('week2_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week2_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week2_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week2_file; ?>" length="<?php echo $week2_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week2_file; ?></guid>
  
  <pubDate><?php echo $week2_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week2_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week2_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'week1_audio', true) ) : ?>
<item>
  <?php  $audioMeta1 = get_post_meta($post->ID, 'week1_audio', true);
        $week1_id = url_to_postid( $audioMeta1 );
        $week1_file = wp_get_attachment_url( $week1_id );
        $week1_length = filesize( get_attached_file( $week1_id ) );
        $week1_duration = get_post_meta( $week1_id , '_duration', true);
        $week1_keywords = get_post_meta( $week1_id , '_keywords', true);
        $week1_post = get_post($week1_id);
        $week1_content = $week1_post->post_content;
        $week1_content = apply_filters('the_content', $week1_content);
        $week1_content = str_replace(']]>', ']]>', $week1_content);
        $week1_summary = strip_tags($week1_content);
  ?>
  <title><?php the_title(); ?> - <?php meta('week1_title') ?></title>
  
  <itunes:author><?php meta('week1_speaker') ?></itunes:author>
  
  <itunes:subtitle>Scripture: <?php meta('week1_passage') ?></itunes:subtitle>
  
  <itunes:summary><?php echo $week1_summary; ?></itunes:summary>
  
  <itunes:image href="<?php echo $series_img[0]; ?>" />
  
  <enclosure url="<?php echo $week1_file; ?>" length="<?php echo $week1_length; ?>" type="audio/mpeg" />
  
  <guid><?php echo $week1_file; ?></guid>
  
  <pubDate><?php echo $week1_date; ?> 11:00:00 MDT</pubDate>
  
  <itunes:duration><?php echo $week1_duration; ?></itunes:duration>
  
  <itunes:keywords><?php echo $week1_keywords; ?></itunes:keywords>

</item>
<?php endif; ?>
