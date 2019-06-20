<?php
/*
Template Name: Dorian Special Page
*/
use \CCC\Data\Dorian;
use \CCC\Services\PostQuery;
get_header(); ?>
<style>
	h1 { color: #144b7d;}
</style>
	<div id="primary" class="content-area">
		<div id="content" class="site-content dorian-special-content container">
		   <div class="row">
		   		<div class="col-lg-12">
		   			<h1> Dorian Warren </h1>
		   			<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
		   			<div class="row">
		   				<div class="col-lg-4 col-xs-12">
		   					<div class="row">
		   						<div class="col-lg-12">
		   							<?php  $dimg = get_field('dorian_img'); ?>
		   							<?php echo '<img class="img-responsive" src="'. $dimg .'">'; ?>
		   						</div>
		   						<div class="col-lg-12">
		   							<h4> Follow Dorian on Social </h4>
		   							<a href="https://www.facebook.com/doriantwarren"><em>Facebook</em></a>
		   							<a href="https://twitter.com/dorianwarren"><em>Twitter</em></a>
		   							<a href="https://www.linkedin.com/in/dorian-warren-98520a6/"><em>LinkedIn</em></a>
		   						</div>
		   					</div>		   					
		   				</div>
		   				<div class="col-lg-7 col-xs-12">
		   					<?php the_field('dorian_intro') ?>
		   				</div>
		   			</div><!-- nested row -->
		   		</div>
		   </div><!-- row -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<section id="event-updates">
	    <div class="container">  
	        <h2 class="text-center">Latest Updates </h2>        
	        <?= new Dorian('dorian-warren'); ?>
	        </div>
	    </div>
	</section>
<?php get_footer(); ?>
