<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package insurance
 */
?>

	</div><!-- #content -->

<footer id="colophon" class="footer" role="contentinfo">
	<div class="container">
		<div class="footer_top">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-3">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="image_logo">
					<br>
					<span class="fa-stack fa-lg">
						<a href="https://www.facebook.com/emilyparsonsinsurance?ref=hl" target="_blank">
  							<i class="fa fa-circle fa-stack-2x"></i>
  							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</a>
					</span>
					<span class="fa-stack fa-lg">
						<a href="https://www.linkedin.com/pub/emily-parsons/1b/870/178" target="_blank">
			  				<i class="fa fa-circle fa-stack-2x"></i>
			  				<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
						</a>
					</span>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3">
					<h4>Get In Touch</h4>
					<p>Connect to our team of experts to find out how we can be the solution for your insurance needs. We are dedicated to providing nothing but excellent service.</p>
					<hr>
					<a href="tel:13039106171" style="font-size: 14px"><i class="fa fa-phone"></i> (303) 910-6171</a>
					<a href="#contact" style="font-size: 14px"><i class="fa fa-envelope-o"></i> Contact Us</a>
					<hr>
					<p>Parsons Insurance
					<br>
					200 W. Cross Drive
					<br>
					Littleton, CO 80123
					</p>
				</div>
			</div>
		</div>  <!-- end of =footer_top -->
	</div>

	<div class="footer_bottom">  <!-- start of =bottom_footer -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 center">
					<p><i class="fa fa-copyright"></i> Parsons Insurance <?php echo date("Y"); ?></p>
				</div>
			</div>
		</div>
	</div>	<!-- end of =bottom_footer -->

</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
