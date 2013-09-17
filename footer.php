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
  <?php $settings = get_option('lifepointe_general');?>
    <div id="contactinfo">
      <h2><?php echo $settings['footer_heading']; ?></h2>
      <?php echo stripslashes($settings['footer_text']); ?>
    </div>
  </footer><!-- #colophon -->
    
    <footer id="buttons">
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
