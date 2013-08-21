<?php
  /**
  * The template used for displaying sermons
  *
  * @package WordPress
  * @subpackage LifePointe
  */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <a href="#" onclick="Effect.toggle('sermon-list-<?php the_ID(); ?>', 'slide'); return false;">
      <?php $disable_feature = get_post_meta( $post->ID, '_disable_feature', true );
            $link_class = "class=\"lbpModal\"";
            $link_target = "target=\"_blank\"";
            
            if ( 'on' == $disable_feature ) {
              $linkbehavior = $link_target;
            }
            elseif ( 'off' == $disable_feature ) {
              $linkbehavior = $link_class;
            } ?>
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('small-title'); } ?>
    </a>    
    
    <?php //Define keys
      if ( get_post_meta($post->ID, 'week1_date', true) ) {
        $dateMeta1 = get_post_meta($post->ID, 'week1_date', true);
        $week1_date = date('M. j', $dateMeta1);
      }
      if ( get_post_meta($post->ID, 'week2_date', true) ) {
        $dateMeta2 = get_post_meta($post->ID, 'week2_date', true);
        $week2_date = date('M. j', $dateMeta2);
      }
      if ( get_post_meta($post->ID, 'week3_date', true) ) {
        $dateMeta3 = get_post_meta($post->ID, 'week3_date', true);
        $week3_date = date('M. j', $dateMeta3);
      }
      if ( get_post_meta($post->ID, 'week4_date', true) ) {
        $dateMeta4 = get_post_meta($post->ID, 'week4_date', true);
        $week4_date = date('M. j', $dateMeta4);
      }
      if ( get_post_meta($post->ID, 'week5_date', true) ) {
        $dateMeta5 = get_post_meta($post->ID, 'week5_date', true);
        $week5_date = date('M. j', $dateMeta5);
      }
      if ( get_post_meta($post->ID, 'week6_date', true) ) {
        $dateMeta6 = get_post_meta($post->ID, 'week6_date', true);
        $week6_date = date('M. j', $dateMeta6);
      }
      if ( get_post_meta($post->ID, 'week7_date', true) ) {
        $dateMeta7 = get_post_meta($post->ID, 'week7_date', true);
        $week7_date = date('M. j', $dateMeta7);
      }
      if ( get_post_meta($post->ID, 'week8_date', true) ) {
        $dateMeta8 = get_post_meta($post->ID, 'week8_date', true);
        $week8_date = date('M. j', $dateMeta8);
      }
      if ( get_post_meta($post->ID, 'week9_date', true) ) {
        $dateMeta9 = get_post_meta($post->ID, 'week9_date', true);
        $week9_date = date('M. j', $dateMeta9);
      }
      if ( get_post_meta($post->ID, 'week10_date', true) ) {
        $dateMeta10 = get_post_meta($post->ID, 'week10_date', true);
        $week10_date = date('M. j', $dateMeta10);
      }
      if ( get_post_meta($post->ID, 'week11_date', true) ) {
        $dateMeta11 = get_post_meta($post->ID, 'week11_date', true);
        $week11_date = date('M. j', $dateMeta11);
      }
      if ( get_post_meta($post->ID, 'week12_date', true) ) {
        $dateMeta12 = get_post_meta($post->ID, 'week12_date', true);
        $week12_date = date('M. j', $dateMeta12);
      }
      if ( get_post_meta($post->ID, 'week13_date', true) ) {
        $dateMeta13 = get_post_meta($post->ID, 'week13_date', true);
        $week13_date = date('M. j', $dateMeta13);
      }
      if ( get_post_meta($post->ID, 'week14_date', true) ) {
        $dateMeta14 = get_post_meta($post->ID, 'week14_date', true);
        $week14_date = date('M. j', $dateMeta14);
      }
      if ( get_post_meta($post->ID, 'week15_date', true) ) {
        $dateMeta15 = get_post_meta($post->ID, 'week15_date', true);
        $week15_date = date('M. j', $dateMeta15);
      }
      if ( get_post_meta($post->ID, 'week16_date', true) ) {
        $dateMeta16 = get_post_meta($post->ID, 'week16_date', true);
        $week16_date = date('M. j', $dateMeta16);
      }
      if ( get_post_meta($post->ID, 'week17_date', true) ) {
        $dateMeta17 = get_post_meta($post->ID, 'week17_date', true);
        $week17_date = date('M. j', $dateMeta17);
      }
      if ( get_post_meta($post->ID, 'week18_date', true) ) {
        $dateMeta18 = get_post_meta($post->ID, 'week18_date', true);
        $week18_date = date('M. j', $dateMeta18);
      }
      if ( get_post_meta($post->ID, 'week19_date', true) ) {
        $dateMeta19 = get_post_meta($post->ID, 'week19_date', true);
        $week19_date = date('M. j', $dateMeta19);
      }
      if ( get_post_meta($post->ID, 'week20_date', true) ) {
        $dateMeta20 = get_post_meta($post->ID, 'week20_date', true);
        $week20_date = date('M. j', $dateMeta20);
      }
      if ( get_post_meta($post->ID, 'week21_date', true) ) {
        $dateMeta21 = get_post_meta($post->ID, 'week21_date', true);
        $week21_date = date('M. j', $dateMeta21);
      }
    ?>
    
    <h1 class="entry-title"><?php the_title(); ?></h1>
    
    <h2 class="series-date">
      <?php echo date('F j', $dateMeta1); ?>
      <?php if ( get_post_meta($post->ID, 'week21_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta21);
            }
            elseif ( get_post_meta($post->ID, 'week20_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta20);
            }
            elseif ( get_post_meta($post->ID, 'week19_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta19);
            }
            elseif ( get_post_meta($post->ID, 'week18_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta18);
            }
            elseif ( get_post_meta($post->ID, 'week17_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta17);
            }
            elseif ( get_post_meta($post->ID, 'week16_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta16);
            }
            elseif ( get_post_meta($post->ID, 'week15_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta15);
            }
            elseif ( get_post_meta($post->ID, 'week14_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta14);
            }
            elseif ( get_post_meta($post->ID, 'week13_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta13);
            }
            elseif ( get_post_meta($post->ID, 'week12_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta12);
            }
            elseif ( get_post_meta($post->ID, 'week11_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta11);
            }
            elseif ( get_post_meta($post->ID, 'week10_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta10);
            }
            elseif ( get_post_meta($post->ID, 'week9_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta9);
            }
            elseif ( get_post_meta($post->ID, 'week8_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta8);
            }
            elseif ( get_post_meta($post->ID, 'week7_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta7);
            }
            elseif ( get_post_meta($post->ID, 'week6_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta6);
            }
            elseif ( get_post_meta($post->ID, 'week5_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta5);
            }
            elseif ( get_post_meta($post->ID, 'week4_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta4);
            }
            elseif ( get_post_meta($post->ID, 'week3_date', true) ) {
              echo ' through ';
              echo date('F j, Y', $dateMeta3);
            }
            elseif ( get_post_meta($post->ID, 'week2_date', true) ) {
              echo ' and ';
              echo date('F j, Y', $dateMeta2);
            }
            elseif ( get_post_meta($post->ID, 'week1_date', true) ) {
              echo date(', Y', $dateMeta1);
            } ?>
    </h2>
  </header><!-- .entry-header -->
  
  <div class="entry-content">
    <?php echo the_content(); ?>
    <a class="lbutton gray" href="#" onclick="Effect.toggle('sermon-list-<?php the_ID(); ?>', 'slide'); return false;">Sermon List</a>
  </div><!-- .entry-content -->
  
  <div id="sermon-list-<?php the_ID(); ?>" class="sermon-list" style="display:none;">
  
    <?php if ( get_post_meta($post->ID, 'week1_audio', true) ) : ?>
    <div id="week1" class="sermons">
      <?php $audioMeta1 = get_post_meta($post->ID, 'week1_audio', true);
            $week1_audio_id = url_to_postid( $audioMeta1 );
            $week1_audio_file = wp_get_attachment_url( $week1_audio_id );
            $pdfMeta1 = get_post_meta($post->ID, 'week1_pdf', true);
            $week1_pdf_id = url_to_postid( $pdfMeta1 );
            $week1_pdf_file = wp_get_attachment_url( $week1_pdf_id );
            $week1_pdf_title = $week1_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week1_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week1_date; ?></span> | <span class="speaker"><?php meta('week1_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week1_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week1_title') ?>" href="<?php meta('week1_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week1_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week1_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week1_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week1_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week1_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week1_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week1_pdf_id); ?>" href="<?php echo $week1_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week1 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week2_audio', true) ) : ?>
    <div id="week2" class="sermons">
      <?php $audioMeta2 = get_post_meta($post->ID, 'week2_audio', true);
            $week2_audio_id = url_to_postid( $audioMeta2 );
            $week2_audio_file = wp_get_attachment_url( $week2_audio_id );
            $pdfMeta2 = get_post_meta($post->ID, 'week2_pdf', true);
            $week2_pdf_id = url_to_postid( $pdfMeta2 );
            $week2_pdf_file = wp_get_attachment_url( $week2_pdf_id );
            $week2_pdf_title = $week2_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week2_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week2_date; ?></span> | <span class="speaker"><?php meta('week2_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week2_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week2_title') ?>" href="<?php meta('week2_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week2_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week2_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week2_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week2_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week2_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week2_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week2_pdf_id); ?>" href="<?php echo $week2_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week2 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week3_audio', true) ) : ?>
    <div id="week3" class="sermons">
      <?php $audioMeta3 = get_post_meta($post->ID, 'week3_audio', true);
            $week3_audio_id = url_to_postid( $audioMeta3 );
            $week3_audio_file = wp_get_attachment_url( $week3_audio_id );
            $pdfMeta3 = get_post_meta($post->ID, 'week3_pdf', true);
            $week3_pdf_id = url_to_postid( $pdfMeta3 );
            $week3_pdf_file = wp_get_attachment_url( $week3_pdf_id );
            $week3_pdf_title = $week3_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week3_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week3_date; ?></span> | <span class="speaker"><?php meta('week3_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week3_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week3_title') ?>" href="<?php meta('week3_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week3_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week3_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week3_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week3_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week3_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week3_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week3_pdf_id); ?>" href="<?php echo $week3_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week3 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week4_audio', true) ) : ?>
    <div id="week4" class="sermons">
      <?php $audioMeta4 = get_post_meta($post->ID, 'week4_audio', true);
            $week4_audio_id = url_to_postid( $audioMeta4 );
            $week4_audio_file = wp_get_attachment_url( $week4_audio_id );
            $pdfMeta4 = get_post_meta($post->ID, 'week4_pdf', true);
            $week4_pdf_id = url_to_postid( $pdfMeta4 );
            $week4_pdf_file = wp_get_attachment_url( $week4_pdf_id );
            $week4_pdf_title = $week4_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week4_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week4_date; ?></span> | <span class="speaker"><?php meta('week4_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week4_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week4_title') ?>" href="<?php meta('week4_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week4_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week4_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week4_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week4_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week4_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week4_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week4_pdf_id); ?>" href="<?php echo $week4_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week4 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week5_audio', true) ) : ?>
    <div id="week5" class="sermons">
      <?php $audioMeta5 = get_post_meta($post->ID, 'week5_audio', true);
            $week5_audio_id = url_to_postid( $audioMeta5 );
            $week5_audio_file = wp_get_attachment_url( $week5_audio_id );
            $pdfMeta5 = get_post_meta($post->ID, 'week5_pdf', true);
            $week5_pdf_id = url_to_postid( $pdfMeta5 );
            $week5_pdf_file = wp_get_attachment_url( $week5_pdf_id );
            $week5_pdf_title = $week5_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week5_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week5_date; ?></span> | <span class="speaker"><?php meta('week5_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week5_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week5_title') ?>" href="<?php meta('week5_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week5_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week5_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week5_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week5_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week5_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week5_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week5_pdf_id); ?>" href="<?php echo $week5_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week5 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week6_audio', true) ) : ?>
    <div id="week6" class="sermons">
      <?php $audioMeta6 = get_post_meta($post->ID, 'week6_audio', true);
            $week6_audio_id = url_to_postid( $audioMeta6 );
            $week6_audio_file = wp_get_attachment_url( $week6_audio_id );
            $pdfMeta6 = get_post_meta($post->ID, 'week6_pdf', true);
            $week6_pdf_id = url_to_postid( $pdfMeta6 );
            $week6_pdf_file = wp_get_attachment_url( $week6_pdf_id );
            $week6_pdf_title = $week6_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week6_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week6_date; ?></span> | <span class="speaker"><?php meta('week6_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week6_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week6_title') ?>" href="<?php meta('week6_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week6_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week6_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week6_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week6_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week6_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week6_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week6_pdf_id); ?>" href="<?php echo $week6_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week6 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week7_audio', true) ) : ?>
    <div id="week7" class="sermons">
      <?php $audioMeta7 = get_post_meta($post->ID, 'week7_audio', true);
            $week7_audio_id = url_to_postid( $audioMeta7 );
            $week7_audio_file = wp_get_attachment_url( $week7_audio_id );
            $pdfMeta7 = get_post_meta($post->ID, 'week7_pdf', true);
            $week7_pdf_id = url_to_postid( $pdfMeta7 );
            $week7_pdf_file = wp_get_attachment_url( $week7_pdf_id );
            $week7_pdf_title = $week7_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week7_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week7_date; ?></span> | <span class="speaker"><?php meta('week7_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week7_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week7_title') ?>" href="<?php meta('week7_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week7_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week7_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week7_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week7_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week7_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week7_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week7_pdf_id); ?>" href="<?php echo $week7_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week7 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week8_audio', true) ) : ?>
    <div id="week8" class="sermons">
      <?php $audioMeta8 = get_post_meta($post->ID, 'week8_audio', true);
            $week8_audio_id = url_to_postid( $audioMeta8 );
            $week8_audio_file = wp_get_attachment_url( $week8_audio_id );
            $pdfMeta8 = get_post_meta($post->ID, 'week8_pdf', true);
            $week8_pdf_id = url_to_postid( $pdfMeta8 );
            $week8_pdf_file = wp_get_attachment_url( $week8_pdf_id );
            $week8_pdf_title = $week8_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week8_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week8_date; ?></span> | <span class="speaker"><?php meta('week8_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week8_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week8_title') ?>" href="<?php meta('week8_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week8_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week8_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week8_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week8_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week8_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week8_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week8_pdf_id); ?>" href="<?php echo $week8_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week8 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week9_audio', true) ) : ?>
    <div id="week9" class="sermons">
      <?php $audioMeta9 = get_post_meta($post->ID, 'week9_audio', true);
            $week9_audio_id = url_to_postid( $audioMeta9 );
            $week9_audio_file = wp_get_attachment_url( $week9_audio_id );
            $pdfMeta9 = get_post_meta($post->ID, 'week9_pdf', true);
            $week9_pdf_id = url_to_postid( $pdfMeta9 );
            $week9_pdf_file = wp_get_attachment_url( $week9_pdf_id );
            $week9_pdf_title = $week9_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week9_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week9_date; ?></span> | <span class="speaker"><?php meta('week9_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week9_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week9_title') ?>" href="<?php meta('week9_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week9_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week9_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week9_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week9_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week9_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week9_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week9_pdf_id); ?>" href="<?php echo $week9_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week9 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week10_audio', true) ) : ?>
    <div id="week10" class="sermons">
      <?php $audioMeta10 = get_post_meta($post->ID, 'week10_audio', true);
            $week10_audio_id = url_to_postid( $audioMeta10 );
            $week10_audio_file = wp_get_attachment_url( $week10_audio_id );
            $pdfMeta10 = get_post_meta($post->ID, 'week10_pdf', true);
            $week10_pdf_id = url_to_postid( $pdfMeta10 );
            $week10_pdf_file = wp_get_attachment_url( $week10_pdf_id );
            $week10_pdf_title = $week10_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week10_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week10_date; ?></span> | <span class="speaker"><?php meta('week10_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week10_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week10_title') ?>" href="<?php meta('week10_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week10_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week10_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week10_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week10_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week10_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week10_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week10_pdf_id); ?>" href="<?php echo $week10_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week10 -->
    <?php endif; ?>
  
    <?php if ( get_post_meta($post->ID, 'week11_audio', true) ) : ?>
    <div id="week11" class="sermons">
      <?php $audioMeta11 = get_post_meta($post->ID, 'week11_audio', true);
            $week11_audio_id = url_to_postid( $audioMeta11 );
            $week11_audio_file = wp_get_attachment_url( $week11_audio_id );
            $pdfMeta11 = get_post_meta($post->ID, 'week11_pdf', true);
            $week11_pdf_id = url_to_postid( $pdfMeta11 );
            $week11_pdf_file = wp_get_attachment_url( $week11_pdf_id );
            $week11_pdf_title = $week11_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week11_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week11_date; ?></span> | <span class="speaker"><?php meta('week11_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week11_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week11_title') ?>" href="<?php meta('week11_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week11_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week11_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week11_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week11_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week11_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week11_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week11_pdf_id); ?>" href="<?php echo $week11_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week11 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week12_audio', true) ) : ?>
    <div id="week12" class="sermons">
      <?php $audioMeta12 = get_post_meta($post->ID, 'week12_audio', true);
            $week12_audio_id = url_to_postid( $audioMeta12 );
            $week12_audio_file = wp_get_attachment_url( $week12_audio_id );
            $pdfMeta12 = get_post_meta($post->ID, 'week12_pdf', true);
            $week12_pdf_id = url_to_postid( $pdfMeta12 );
            $week12_pdf_file = wp_get_attachment_url( $week12_pdf_id );
            $week12_pdf_title = $week12_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week12_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week12_date; ?></span> | <span class="speaker"><?php meta('week12_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week12_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week12_title') ?>" href="<?php meta('week12_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week12_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week12_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week12_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week12_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week12_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week12_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week12_pdf_id); ?>" href="<?php echo $week12_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week12 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week13_audio', true) ) : ?>
    <div id="week13" class="sermons">
      <?php $audioMeta13 = get_post_meta($post->ID, 'week13_audio', true);
            $week13_audio_id = url_to_postid( $audioMeta13 );
            $week13_audio_file = wp_get_attachment_url( $week13_audio_id );
            $pdfMeta13 = get_post_meta($post->ID, 'week13_pdf', true);
            $week13_pdf_id = url_to_postid( $pdfMeta13 );
            $week13_pdf_file = wp_get_attachment_url( $week13_pdf_id );
            $week13_pdf_title = $week13_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week13_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week13_date; ?></span> | <span class="speaker"><?php meta('week13_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week13_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week13_title') ?>" href="<?php meta('week13_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week13_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week13_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week13_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week13_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week13_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week13_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week13_pdf_id); ?>" href="<?php echo $week13_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week13 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week14_audio', true) ) : ?>
    <div id="week14" class="sermons">
      <?php $audioMeta14 = get_post_meta($post->ID, 'week14_audio', true);
            $week14_audio_id = url_to_postid( $audioMeta14 );
            $week14_audio_file = wp_get_attachment_url( $week14_audio_id );
            $pdfMeta14 = get_post_meta($post->ID, 'week14_pdf', true);
            $week14_pdf_id = url_to_postid( $pdfMeta14 );
            $week14_pdf_file = wp_get_attachment_url( $week14_pdf_id );
            $week14_pdf_title = $week14_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week14_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week14_date; ?></span> | <span class="speaker"><?php meta('week14_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week14_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week14_title') ?>" href="<?php meta('week14_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week14_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week14_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week14_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week14_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week14_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week14_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week14_pdf_id); ?>" href="<?php echo $week14_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week14 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week15_audio', true) ) : ?>
    <div id="week15" class="sermons">
      <?php $audioMeta15 = get_post_meta($post->ID, 'week15_audio', true);
            $week15_audio_id = url_to_postid( $audioMeta15 );
            $week15_audio_file = wp_get_attachment_url( $week15_audio_id );
            $pdfMeta15 = get_post_meta($post->ID, 'week15_pdf', true);
            $week15_pdf_id = url_to_postid( $pdfMeta15 );
            $week15_pdf_file = wp_get_attachment_url( $week15_pdf_id );
            $week15_pdf_title = $week15_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week15_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week15_date; ?></span> | <span class="speaker"><?php meta('week15_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week15_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week15_title') ?>" href="<?php meta('week15_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week15_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week15_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week15_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week15_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week15_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week15_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week15_pdf_id); ?>" href="<?php echo $week15_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week15 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week16_audio', true) ) : ?>
    <div id="week16" class="sermons">
      <?php $audioMeta16 = get_post_meta($post->ID, 'week16_audio', true);
            $week16_audio_id = url_to_postid( $audioMeta16 );
            $week16_audio_file = wp_get_attachment_url( $week16_audio_id );
            $pdfMeta16 = get_post_meta($post->ID, 'week16_pdf', true);
            $week16_pdf_id = url_to_postid( $pdfMeta16 );
            $week16_pdf_file = wp_get_attachment_url( $week16_pdf_id );
            $week16_pdf_title = $week16_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week16_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week16_date; ?></span> | <span class="speaker"><?php meta('week16_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week16_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week16_title') ?>" href="<?php meta('week16_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week16_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week16_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week16_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week16_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week16_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week16_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week16_pdf_id); ?>" href="<?php echo $week16_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week16 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week17_audio', true) ) : ?>
    <div id="week17" class="sermons">
      <?php $audioMeta17 = get_post_meta($post->ID, 'week17_audio', true);
            $week17_audio_id = url_to_postid( $audioMeta17 );
            $week17_audio_file = wp_get_attachment_url( $week17_audio_id );
            $pdfMeta17 = get_post_meta($post->ID, 'week17_pdf', true);
            $week17_pdf_id = url_to_postid( $pdfMeta17 );
            $week17_pdf_file = wp_get_attachment_url( $week17_pdf_id );
            $week17_pdf_title = $week17_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week17_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week17_date; ?></span> | <span class="speaker"><?php meta('week17_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week17_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week17_title') ?>" href="<?php meta('week17_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week17_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week17_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week17_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week17_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week17_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week17_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week17_pdf_id); ?>" href="<?php echo $week17_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week17 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week18_audio', true) ) : ?>
    <div id="week18" class="sermons">
      <?php $audioMeta18 = get_post_meta($post->ID, 'week18_audio', true);
            $week18_audio_id = url_to_postid( $audioMeta18 );
            $week18_audio_file = wp_get_attachment_url( $week18_audio_id );
            $pdfMeta18 = get_post_meta($post->ID, 'week18_pdf', true);
            $week18_pdf_id = url_to_postid( $pdfMeta18 );
            $week18_pdf_file = wp_get_attachment_url( $week18_pdf_id );
            $week18_pdf_title = $week18_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week18_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week18_date; ?></span> | <span class="speaker"><?php meta('week18_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week18_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week18_title') ?>" href="<?php meta('week18_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week18_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week18_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week18_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week18_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week18_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week18_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week18_pdf_id); ?>" href="<?php echo $week18_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week18 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week19_audio', true) ) : ?>
    <div id="week19" class="sermons">
      <?php $audioMeta19 = get_post_meta($post->ID, 'week19_audio', true);
            $week19_audio_id = url_to_postid( $audioMeta19 );
            $week19_audio_file = wp_get_attachment_url( $week19_audio_id );
            $pdfMeta19 = get_post_meta($post->ID, 'week19_pdf', true);
            $week19_pdf_id = url_to_postid( $pdfMeta19 );
            $week19_pdf_file = wp_get_attachment_url( $week19_pdf_id );
            $week19_pdf_title = $week19_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week19_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week19_date; ?></span> | <span class="speaker"><?php meta('week19_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week19_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week19_title') ?>" href="<?php meta('week19_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week19_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week19_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week19_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week19_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week19_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week19_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week19_pdf_id); ?>" href="<?php echo $week19_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week19 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week20_audio', true) ) : ?>
    <div id="week20" class="sermons">
      <?php $audioMeta20 = get_post_meta($post->ID, 'week20_audio', true);
            $week20_audio_id = url_to_postid( $audioMeta20 );
            $week20_audio_file = wp_get_attachment_url( $week20_audio_id );
            $pdfMeta20 = get_post_meta($post->ID, 'week20_pdf', true);
            $week20_pdf_id = url_to_postid( $pdfMeta20 );
            $week20_pdf_file = wp_get_attachment_url( $week20_pdf_id );
            $week20_pdf_title = $week20_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week20_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week20_date; ?></span> | <span class="speaker"><?php meta('week20_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week20_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week20_title') ?>" href="<?php meta('week20_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week20_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week20_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week20_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week20_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week20_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week20_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week20_pdf_id); ?>" href="<?php echo $week20_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week20 -->
    <?php endif; ?>
    
    <?php if ( get_post_meta($post->ID, 'week21_audio', true) ) : ?>
    <div id="week21" class="sermons">
      <?php $audioMeta21 = get_post_meta($post->ID, 'week21_audio', true);
            $week21_audio_id = url_to_postid( $audioMeta21 );
            $week21_audio_file = wp_get_attachment_url( $week21_audio_id );
            $pdfMeta21 = get_post_meta($post->ID, 'week21_pdf', true);
            $week21_pdf_id = url_to_postid( $pdfMeta21 );
            $week21_pdf_file = wp_get_attachment_url( $week21_pdf_id );
            $week21_pdf_title = $week21_pdf_id->post_title; ?>
          
      <h4 class="title"><?php meta('week21_title') ?></h4>
      <p class="sermon-details"><span class="date"><?php echo $week21_date; ?></span> | <span class="speaker"><?php meta('week21_speaker') ?></span> | <span class="passage">Scripture: <?php meta('week21_passage') ?></span></p>
      
      <div class="sermon-media">
        <a title="Listen to <?php meta('week21_title') ?>" href="<?php meta('week21_audio') ?>" onclick="popUp(this.href); return false"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/music.png" /></a>
        <a title="Download <?php meta('week21_title') ?>" href="<?php echo get_template_directory_uri(); ?>/download.php?file=<?php echo $week21_audio_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/download.png" /></a>
        <?php if ( get_post_meta($post->ID, 'week21_vimeo_id', true) ) { ?><a <?php echo $linkbehavior; ?> title="<?php meta('week21_vimeo_title') ?>" href="http://player.vimeo.com/video/<?php meta('week21_vimeo_id') ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/video.png" /></a><?php } ?>
        <?php if ( get_post_meta($post->ID, 'week21_pdf', true) ) { ?> <a <?php echo $linkbehavior; ?> title="<?php echo get_the_title($week21_pdf_id); ?>" href="<?php echo $week21_pdf_file; ?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/images/presentation.png" /></a><?php } ?>
      </div><!-- .sermon-media -->
    </div><!-- #week21 -->
    <?php endif; ?>
  
  </div><!-- #sermon-list-<?php the_ID(); ?> -->
  
  <?php edit_post_link( __( 'Edit', 'lifepointe' ), '<span class="edit-link">', '</span>' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->