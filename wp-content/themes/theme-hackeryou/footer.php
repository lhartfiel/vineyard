<footer class="clearfix">
  <div class="footBorder">
    <div class="container footContain clearfix">
      	<div class="footSubhead clearfix">
      		<h5>Get in Touch</h5>
      	</div>
      	
      	<div class="foot-location">
      		<h5>Visit Us!</h5>
      		<p>The Vineyard</p>
      		<p>123 Vine Ave.</p>
      		<p>Napa, CA 12345</p>
      	</div>	

      	<div class="foot-hours">
      		<h5>Hours</h5>
      		<p>Monday – Friday: 10a.m. to 6p.m.</p>
      		<p>Saturday: 10a.m. to 8p.m.</p>
      		<p>Sunday 10a.m. to 5p.m.</p>	
      	</div>

      	<div class="foot-social">
      		<h5>Stay Connected <?php DISPLAY_ACURAX_ICONS(); ?></h5>
      		<p><a href="mailto:thevineyard@yoururl.com"></a></p>
      	</div>	
    </div>
    <div class="overlay">
      <div class="copyright .container">
      		<p>&copy; Vineyard <?php echo date('Y'); ?></p>
      </div> <!-- .copyright -->
    </div> <!-- .overlay -->  
  </div> <!-- .footBorder  -->	
</footer>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main.js"></script>
<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>