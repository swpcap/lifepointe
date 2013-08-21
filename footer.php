<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage LifePointe
 */
?>

  </div><!-- #main -->

  <footer id="colophon" role="contentinfo">
    <div id="contactinfo">
    <!-- Celebration Sunday October 28 Service Time 9:30am -->
    <h2>Service Times are 9:30am and 11:00am on Sundays</h2>
                LifePointe Church<span class="sep"> | </span>900 E Prospect Rd<span class="sep"> | </span>Fort Collins, CO 80524<span class="sep"> | </span>970.484.4053
    <div id="site-generator">
      <?php do_action( 'lifepointe_credits' ); ?>
      <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lifepointe' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'lifepointe' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'lifepointe' ), 'WordPress' ); ?></a>
    </div>
  </footer><!-- #colophon -->
    
    <footer id="buttons">
    <?php $settings = get_option('lifepointe_general');?>
  <div id="row1">
          <a class="lbpModal" id="contact" href="/<?php echo $settings['contact_slug']; ?>/" target="">Contact Us</a>
    <a href="<?php echo $settings['fb_url']; ?>/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook2.png" /></a>
        </div>
        <div id="row2">
          <a class="lbpModal" id="prayer" href="/<?php echo $settings['prayer_slug']; ?>/" target="">Prayer</a>
          <a class="lbpModal" href="<?php echo $settings['pod_url']; ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/itunes2.png" /></a>
        </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

        
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
  </script>
<!-- RefTagger from Logos. Visit http://www.logos.com/reftagger. This code should appear directly before the </body> tag. -->
<script src="http://bible.logos.com/jsapi/referencetagging.js" type="text/javascript"></script>
<script type="text/javascript">
    Logos.ReferenceTagging.lbsBibleVersion = "NIV";
    Logos.ReferenceTagging.lbsLinksOpenNewWindow = true;
    Logos.ReferenceTagging.lbsLogosLinkIcon = "light";
    Logos.ReferenceTagging.lbsNoSearchTagNames = [ ];
    Logos.ReferenceTagging.lbsTargetSite = "biblia";
    Logos.ReferenceTagging.tag();
    Logos.ReferenceTagging.lbsCssOverride = true;
</script>
<?php wp_footer(); ?>

</body>
</html>
