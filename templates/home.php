<?php
/**
 * Template Name: Home
 *
 * 
 *
 * @package insurance
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div id="landing" style="background-image: url(<?php the_field('landing_bg'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h1><?php the_field('home_header'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-6">
				<div class="home_box">
					<h2 class="center">Request Information</h2>
					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact Form Home"]'); ?>
				</div>	
			</div>
		</div>
	</div>
</div>

<div id="providers">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<div class="main_header">
					<h1><?php the_field('provider_header'); ?></h1>
					<p><?php the_field('provider_intro'); ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h2>Personal</h2>
				
<!-- personal insurance logo repeater	 -->
<?php

// check if the repeater field has rows of data
if( have_rows('providers') ):
 	// loop through the rows of data
    while ( have_rows('providers') ) : the_row(); ?>
        <img src="<?php the_sub_field('provider-logo'); ?>" style="padding-left: 1em"/>
    <?php endwhile;
else :
    // no rows found
endif;
?>
<!-- end of personal insurance logo repeater -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h2>Business</h2>

<!-- personal insurance logo repeater	 -->
<?php
// check if the repeater field has rows of data
if( have_rows('providers-biz') ):
 	// loop through the rows of data
    while ( have_rows('providers-biz') ) : the_row(); ?>
        <img src="<?php the_sub_field('provider-logo'); ?>" style="padding-left: 1em"/>
    <?php endwhile;
else :
    // no rows found
endif;
?>
<!-- end of personal insurance logo repeater -->

			</div>
		</div>
	</div>
</div>


<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<img src="<?php the_field('about_image'); ?>" class="image_full">
			</div>
			<div class="col-xs-12 col-sm-6">
				<p><?php the_field('about_text'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="break">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12 center">
	      <h1>General Inquiries</h1>
	    </div>
	  </div>
	</div>
</div>

<!-- start =header_standard -->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-sm-offset-1">
		    	<?php echo do_shortcode( '[contact-form-7 id="15" title="Contact Section"]' ); ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-sm-offset-1">
		    	<br>
		    	<a href="tel:13039106171"><i class="fa fa-phone"></i> <b>Office:</b> (303) 910-6171</a>
		    	<hr>
			    <p><b>Parsons Insurance</b>
			    <br>
			    200 West Cross Drive
			    <br>
			    Littleton, CO 80123
			    </p>
			    <hr>
			    <p><i class="fa fa-envelope-o"></i> emilyparsonsinsurance@gmail.com</p>
			</div>
		</div>
	</div>
</div>  <!-- end of =contact id -->



				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
