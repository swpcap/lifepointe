<?php
/**
 * The template for displaying podcast feed
 *
 * @package LifePointe
 * @since 0.8.3
 */

header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true);
$more = 1;
$settings = get_option('lifepointe_podcast');
?>

<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">

<channel>

  <title><?php if (!empty($settings['pod_title'])) { echo $settings['pod_title']; } ?></title>

  <link>http://www.sharethelife.org/series/</link>

  <language>en-us</language>

  <copyright><?php       if (!empty($settings['pod_copy']))        { echo $settings['pod_copy'];        } ?></copyright>

  <itunes:subtitle><?php if (!empty($settings['pod_subtitle']))    { echo $settings['pod_subtitle'];    } ?></itunes:subtitle>

  <itunes:author><?php   if (!empty($settings['pod_author']))      { echo $settings['pod_author'];      } ?></itunes:author>

  <itunes:summary><?php  if (!empty($settings['pod_summary']))     { echo $settings['pod_summary'];     } ?></itunes:summary>

  <description><?php     if (!empty($settings['pod_desc']))        { echo $settings['pod_desc'];        } ?></description>

  <itunes:owner>

    <itunes:name><?php   if (!empty($settings['pod_owner']))       { echo $settings['pod_owner'];       } ?></itunes:name>

    <itunes:email><?php  if (!empty($settings['pod_owner_email'])) { echo $settings['pod_owner_email']; } ?></itunes:email>

  </itunes:owner>

  <itunes:image href="http://sharethelife.org/podcast-icon.jpg"></itunes:image>

  <itunes:category text="Religion &amp; Spirituality">

  <itunes:category text="Christianity"></itunes:category>

  </itunes:category>

  <?php if ( have_posts() ) : ?>

    <?php global $wp_query; $args = array_merge( $wp_query->query, array( 'post_type' => 'sermon', 'posts_per_page' => 999, 'orderby' => 'date', 'order' => 'DESC' ) ); query_posts( $args ); ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <?php if ( has_post_thumbnail() ) {
              $id = get_post_thumbnail_id();
              $series_img = wp_get_attachment_image_src( $id, 'podcast' );
            } ?>
            <?php //Define keys
              if ( get_post_meta($post->ID, 'week21_date', true) ) {
                $dateMeta21 = get_post_meta($post->ID, 'week21_date', true);
                $week21_date = date('D, j M Y', $dateMeta21);
              }
              if ( get_post_meta($post->ID, 'week20_date', true) ) {
                $dateMeta20 = get_post_meta($post->ID, 'week20_date', true);
                $week20_date = date('D, j M Y', $dateMeta20);
              }
              if ( get_post_meta($post->ID, 'week19_date', true) ) {
                $dateMeta19 = get_post_meta($post->ID, 'week19_date', true);
                $week19_date = date('D, j M Y', $dateMeta19);
              }
              if ( get_post_meta($post->ID, 'week18_date', true) ) {
                $dateMeta18 = get_post_meta($post->ID, 'week18_date', true);
                $week18_date = date('D, j M Y', $dateMeta18);
              }
              if ( get_post_meta($post->ID, 'week17_date', true) ) {
                $dateMeta17 = get_post_meta($post->ID, 'week17_date', true);
                $week17_date = date('D, j M Y', $dateMeta17);
              }
              if ( get_post_meta($post->ID, 'week16_date', true) ) {
                $dateMeta16 = get_post_meta($post->ID, 'week16_date', true);
                $week16_date = date('D, j M Y', $dateMeta16);
              }
              if ( get_post_meta($post->ID, 'week15_date', true) ) {
                $dateMeta15 = get_post_meta($post->ID, 'week15_date', true);
                $week15_date = date('D, j M Y', $dateMeta15);
              }
              if ( get_post_meta($post->ID, 'week14_date', true) ) {
                $dateMeta14 = get_post_meta($post->ID, 'week14_date', true);
                $week14_date = date('D, j M Y', $dateMeta14);
              }
              if ( get_post_meta($post->ID, 'week13_date', true) ) {
                $dateMeta13 = get_post_meta($post->ID, 'week13_date', true);
                $week13_date = date('D, j M Y', $dateMeta13);
              }
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
            <?php if ( get_post_meta($post->ID, 'week21_audio', true) ) : ?>
            <item>
              <?php $audioMeta21 = get_post_meta($post->ID, 'week21_audio', true);
                    $week21_id = url_to_postid( $audioMeta21 );
                    $week21_file = wp_get_attachment_url( $week21_id );
                    $week21_length = filesize( get_attached_file( $week21_id ) );
                    $week21_duration = get_post_meta( $week21_id , '_duration', true);
                    $week21_keywords = get_post_meta( $week21_id , '_keywords', true);
                    $week21_post = get_post($week21_id);
                    $week21_content = $week21_post->post_content;
                    $week21_content = apply_filters('the_content', $week21_content);
                    $week21_content = str_replace(']]>', ']]>', $week21_content);
                    $week21_summary = strip_tags($week21_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week21_title') ?></title>

              <itunes:author><?php meta('week21_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week21_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week21_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week21_file; ?>" length="<?php echo $week21_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week21_file; ?></guid>

              <pubDate><?php echo $week21_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week21_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week21_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week20_audio', true) ) : ?>
            <item>
              <?php $audioMeta20 = get_post_meta($post->ID, 'week20_audio', true);
                    $week20_id = url_to_postid( $audioMeta20 );
                    $week20_file = wp_get_attachment_url( $week20_id );
                    $week20_length = filesize( get_attached_file( $week20_id ) );
                    $week20_duration = get_post_meta( $week20_id , '_duration', true);
                    $week20_keywords = get_post_meta( $week20_id , '_keywords', true);
                    $week20_post = get_post($week20_id);
                    $week20_content = $week20_post->post_content;
                    $week20_content = apply_filters('the_content', $week20_content);
                    $week20_content = str_replace(']]>', ']]>', $week20_content);
                    $week20_summary = strip_tags($week20_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week20_title') ?></title>

              <itunes:author><?php meta('week20_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week20_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week20_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week20_file; ?>" length="<?php echo $week20_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week20_file; ?></guid>

              <pubDate><?php echo $week20_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week20_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week20_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week19_audio', true) ) : ?>
            <item>
              <?php $audioMeta19 = get_post_meta($post->ID, 'week19_audio', true);
                    $week19_id = url_to_postid( $audioMeta19 );
                    $week19_file = wp_get_attachment_url( $week19_id );
                    $week19_length = filesize( get_attached_file( $week19_id ) );
                    $week19_duration = get_post_meta( $week19_id , '_duration', true);
                    $week19_keywords = get_post_meta( $week19_id , '_keywords', true);
                    $week19_post = get_post($week19_id);
                    $week19_content = $week19_post->post_content;
                    $week19_content = apply_filters('the_content', $week19_content);
                    $week19_content = str_replace(']]>', ']]>', $week19_content);
                    $week19_summary = strip_tags($week19_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week19_title') ?></title>

              <itunes:author><?php meta('week19_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week19_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week19_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week19_file; ?>" length="<?php echo $week19_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week19_file; ?></guid>

              <pubDate><?php echo $week19_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week19_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week19_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week18_audio', true) ) : ?>
            <item>
              <?php $audioMeta18 = get_post_meta($post->ID, 'week18_audio', true);
                    $week18_id = url_to_postid( $audioMeta18 );
                    $week18_file = wp_get_attachment_url( $week18_id );
                    $week18_length = filesize( get_attached_file( $week18_id ) );
                    $week18_duration = get_post_meta( $week18_id , '_duration', true);
                    $week18_keywords = get_post_meta( $week18_id , '_keywords', true);
                    $week18_post = get_post($week18_id);
                    $week18_content = $week18_post->post_content;
                    $week18_content = apply_filters('the_content', $week18_content);
                    $week18_content = str_replace(']]>', ']]>', $week18_content);
                    $week18_summary = strip_tags($week18_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week18_title') ?></title>

              <itunes:author><?php meta('week18_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week18_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week18_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week18_file; ?>" length="<?php echo $week18_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week18_file; ?></guid>

              <pubDate><?php echo $week18_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week18_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week18_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week17_audio', true) ) : ?>
            <item>
              <?php $audioMeta17 = get_post_meta($post->ID, 'week17_audio', true);
                    $week17_id = url_to_postid( $audioMeta17 );
                    $week17_file = wp_get_attachment_url( $week17_id );
                    $week17_length = filesize( get_attached_file( $week17_id ) );
                    $week17_duration = get_post_meta( $week17_id , '_duration', true);
                    $week17_keywords = get_post_meta( $week17_id , '_keywords', true);
                    $week17_post = get_post($week17_id);
                    $week17_content = $week17_post->post_content;
                    $week17_content = apply_filters('the_content', $week17_content);
                    $week17_content = str_replace(']]>', ']]>', $week17_content);
                    $week17_summary = strip_tags($week17_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week17_title') ?></title>

              <itunes:author><?php meta('week17_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week17_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week17_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week17_file; ?>" length="<?php echo $week17_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week17_file; ?></guid>

              <pubDate><?php echo $week17_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week17_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week17_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week16_audio', true) ) : ?>
            <item>
              <?php $audioMeta16 = get_post_meta($post->ID, 'week16_audio', true);
                    $week16_id = url_to_postid( $audioMeta16 );
                    $week16_file = wp_get_attachment_url( $week16_id );
                    $week16_length = filesize( get_attached_file( $week16_id ) );
                    $week16_duration = get_post_meta( $week16_id , '_duration', true);
                    $week16_keywords = get_post_meta( $week16_id , '_keywords', true);
                    $week16_post = get_post($week16_id);
                    $week16_content = $week16_post->post_content;
                    $week16_content = apply_filters('the_content', $week16_content);
                    $week16_content = str_replace(']]>', ']]>', $week16_content);
                    $week16_summary = strip_tags($week16_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week16_title') ?></title>

              <itunes:author><?php meta('week16_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week16_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week16_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week16_file; ?>" length="<?php echo $week16_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week16_file; ?></guid>

              <pubDate><?php echo $week16_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week16_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week16_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week15_audio', true) ) : ?>
            <item>
              <?php $audioMeta15 = get_post_meta($post->ID, 'week15_audio', true);
                    $week15_id = url_to_postid( $audioMeta15 );
                    $week15_file = wp_get_attachment_url( $week15_id );
                    $week15_length = filesize( get_attached_file( $week15_id ) );
                    $week15_duration = get_post_meta( $week15_id , '_duration', true);
                    $week15_keywords = get_post_meta( $week15_id , '_keywords', true);
                    $week15_post = get_post($week15_id);
                    $week15_content = $week15_post->post_content;
                    $week15_content = apply_filters('the_content', $week15_content);
                    $week15_content = str_replace(']]>', ']]>', $week15_content);
                    $week15_summary = strip_tags($week15_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week15_title') ?></title>

              <itunes:author><?php meta('week15_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week15_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week15_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week15_file; ?>" length="<?php echo $week15_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week15_file; ?></guid>

              <pubDate><?php echo $week15_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week15_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week15_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week14_audio', true) ) : ?>
            <item>
              <?php $audioMeta14 = get_post_meta($post->ID, 'week14_audio', true);
                    $week14_id = url_to_postid( $audioMeta14 );
                    $week14_file = wp_get_attachment_url( $week14_id );
                    $week14_length = filesize( get_attached_file( $week14_id ) );
                    $week14_duration = get_post_meta( $week14_id , '_duration', true);
                    $week14_keywords = get_post_meta( $week14_id , '_keywords', true);
                    $week14_post = get_post($week14_id);
                    $week14_content = $week14_post->post_content;
                    $week14_content = apply_filters('the_content', $week14_content);
                    $week14_content = str_replace(']]>', ']]>', $week14_content);
                    $week14_summary = strip_tags($week14_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week14_title') ?></title>

              <itunes:author><?php meta('week14_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week14_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week14_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week14_file; ?>" length="<?php echo $week14_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week14_file; ?></guid>

              <pubDate><?php echo $week14_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week14_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week14_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
            <?php if ( get_post_meta($post->ID, 'week13_audio', true) ) : ?>
            <item>
              <?php $audioMeta13 = get_post_meta($post->ID, 'week13_audio', true);
                    $week13_id = url_to_postid( $audioMeta13 );
                    $week13_file = wp_get_attachment_url( $week13_id );
                    $week13_length = filesize( get_attached_file( $week13_id ) );
                    $week13_duration = get_post_meta( $week13_id , '_duration', true);
                    $week13_keywords = get_post_meta( $week13_id , '_keywords', true);
                    $week13_post = get_post($week13_id);
                    $week13_content = $week13_post->post_content;
                    $week13_content = apply_filters('the_content', $week13_content);
                    $week13_content = str_replace(']]>', ']]>', $week13_content);
                    $week13_summary = strip_tags($week13_content);
              ?>
              <title><?php the_title(); ?> - <?php meta('week13_title') ?></title>

              <itunes:author><?php meta('week13_speaker') ?></itunes:author>

              <itunes:subtitle>Scripture: <?php meta('week13_passage') ?></itunes:subtitle>

              <itunes:summary><?php echo $week13_summary; ?></itunes:summary>

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week13_file; ?>" length="<?php echo $week13_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week13_file; ?></guid>

              <pubDate><?php echo $week13_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week13_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week13_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>
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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

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

              <itunes:image href="<?php if (!empty($series_img[0])) { echo $series_img[0]; } ?>" />

              <enclosure url="<?php echo $week1_file; ?>" length="<?php echo $week1_length; ?>" type="audio/mpeg" />

              <guid><?php echo $week1_file; ?></guid>

              <pubDate><?php echo $week1_date; ?> 11:00:00 MDT</pubDate>

              <itunes:duration><?php echo $week1_duration; ?></itunes:duration>

              <itunes:keywords><?php echo $week1_keywords; ?></itunes:keywords>

            </item>
            <?php endif; ?>

    <?php endwhile; ?>

  <?php endif; ?>

</channel>

</rss>
