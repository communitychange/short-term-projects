<?php
/*
Template Name: Annual Report V2
*/
get_header('header-year2018'); ?>
	</div><!-- break out of .container from header -->

	<!-- Custom Styling for Annual Report Page -->
	<style>
		#menu-item-6665 a {
		    background-color: #852665;
		}
		.navbar-brand img {
		    height: 50px;
		}
		#primary .site-content .entry-header h1 {
		    color: #852665;
		    font-family: "Calibre", Helvetica, Arial, sans-serif;
		    text-align: left;
		    font-weight: 600;
		}

		.intro {
		    background: #f3f3f3;
    		color: #222;
		    padding: 0px 30px;
		    min-height: 350px;
		}

		section#annual-report-description h2, section#all-reports h2 {
			color: #852665;
			font-size: 2.5em;
		}

		section#annual-report-description h3 {
		    color: #a5227b;
		    opacity: 1;
		    padding: 30px 0 0;
		}

		section#annual-report-description h3, section#all-reports h3 {
			font-family: "Calibre", Arial, sans-serif;
		}

		section#all-reports h3.cpc-title, section#all-reports h3.cpc-title a {
			font-family: "Calibre", Arial, sans-serif;
		    text-transform: capitalize;
		    color: white;
		    opacity: 1;
		    font-size: 40px;
		} 

		.btn.btn-annual {
			border-radius: : 2px;
			border: 2px solid #a5227b;
			color: white;
			background: #a5227b;
		}
		.btn.btn-annual:hover, .btn.btn-annual:active {
			border: 2px solid #f79920;
			background: #f79920;
		}

		#annual-report-header  {
			background: url(https://communitychange.org/wp-content/uploads/2018/08/annual-banner-1-pink-gradient.jpg) no-repeat;
			min-height: 50vh;
			/*background-position: center center;*/
			background-size: cover;
			margin: 1em 0;
		}

		.cover-post .cp-container {
		    padding: 25px;
		}

	</style>

	<div id="immigrant" class="site-main container">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
						<div class="mobile-menu">
							<button class="mobile-activator" data-name="show" id="mobile-activator"><?php the_title(); ?></button>
							<?php wp_nav_menu( array(
									'menu' 			=> get_field('section_nav'),
									'menu_class' 	=> 'menu_dropdown',
								) 
							); ?>
						</div>
					  
					</div>
				<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

	</div>
</div>
<section id="annual-report-header">
	<div class="container">
		<div class="row">
		</div>
	</div>

</section>	

<section id="annual-report-description">
        <div class="container">
        	<div class="row">
        		<div class="col-xs-12">
        			<h2 class="text-center">About </h2>
        		</div>
        	</div>
             <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <!-- intro -->
                    <div class="intro">
                      <h3 class="text-center">Center</h3>
                      <p class="p1"><span class="s1">The Center for Community Change acts as a hub—a logistical partner, strategic ally, and physical location—where hundreds of grassroots organizations and national allies gather, learn, and act together. Grounded in the belief that social change blooms from social movements rooted in community organizing, we bring together groups doing the most promising, cutting-edge organizing and movement-building to maximize their collective impact. </span></p>
                      <p><a href="http://www.communitychange.org/wp-content/uploads/2016/04/CCC_Annual_Report_2015.pdf#page=7"><button type="button" class="btn btn-annual">Read More</button></a></p>
                    </div>
                </div> <!-- end intro -->
                <div class="col-lg-6 col-xs-12">
                    <!-- intro -->
                    <div class="intro">
                      <h3 class="text-center">Community</h3>
                      <p class="p1"><span class="s1">In 2015, we trained hundreds of volunteer leaders through our economic justice, immigration, retirement security, civic engagement and housing partners to grow their ranks and lead their movements forward. These multi-generational, multi-ethnic leaders emerge from a wide variety of backgrounds, bringing with them a diverse set of skills. We build the field of community organizing by identifying what these leaders need to become powerful advocates for their communities.</span></p>
                      <p><a href="http://www.communitychange.org/wp-content/uploads/2016/04/CCC_Annual_Report_2015.pdf#page=12"><button type="button" class="btn btn-annual">Read More</button></a></p>

                    </div>
                </div> <!-- end intro -->
                <div class="col-lg-6 col-xs-12">
                    <!-- intro -->
                    <div class="intro">
                      <h3 class="text-center">Change</h3>
                      <p class="p1"><span class="s1">At the core of our mission is a belief that low-income people and people of color have the power to change for the better the institutions and policies that impact their lives. We bring groups together and build community leadership for the sake of this change, and in 2015 we saw the impacts of this work ripple out in the shifting consciousness of the country around issues of income and wealth inequality, structural racism and sexism, and the ways the economy and political system are rigged against our communities.</span></p>
                      <p><a href="http://www.communitychange.org/wp-content/uploads/2016/04/CCC_Annual_Report_2015.pdf#page=21"><button type="button" class="btn btn-annual">Read More</button></a></p>
                    </div>
                </div> <!-- end intro -->
                <div class="col-lg-6 col-xs-12">
                    <!-- intro -->
                    <div class="intro">
                      <h3 class="text-center">Action</h3>
                      <p class="p1"><span class="s1">When we launched our mass incarceration work in 2013, we saw that people who had lived through the trauma of incarceration—both those coming home and their families—were not getting the support they needed to shape solutions to the nation’s mass incarceration problem. We understood that these uncompromising voices had to be amplified to address the crisis of mass criminalization at a national scale.</span></p>
                      <p><a href="http://www.communitychange.org/wp-content/uploads/2016/04/CCC_Annual_Report_2015.pdf#page=14"><button type="button" class="btn btn-annual">Read More</button></a></p>
                    </div>
                </div> <!-- end intro -->
              </div><!-- end row -->
            </div>
          </div>
</section>

<section id="all-reports">
	<div class="container">
	    <div class="row">
	     	<div class="col-xs-12">
	     		<h2 class="text-center"> All Reports </h2>
	     	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-4 col-sm-6 col-xs-12">
	    		<div class="cover-post cp-not-full" style="background-image: url(https://communitychange.org/wp-content/uploads/2017/09/onstrike_bw.jpg)">
	    			<div class="cp-container" style="background: linear-gradient(55deg, rgba(235,38,93, 1), rgba(242,119,33, 0.75), rgba(247,153,32, 1));">
	    				<h3 class="cpc-title">Coming Soon: 2017 Annual Reports</p>
	    			</div>
	    		</div>
	    	</div>
    	    <div class="col-md-4 col-sm-6 col-xs-12">
				<div class="cover-post cp-not-full" style="background-image: url(https://communitychange.org/wp-content/uploads/2016/09/8182445837_e40673a92a_o.jpg)">
					<div class="cp-container" style="background: linear-gradient(rgba(133,38,101,1), rgba(230,46,43,0.75));">
						<h3 class="cpc-title"><a href="http://communitychange.org/wp-content/uploads/2016/04/CCC_Annual_Report_2015.pdf">2016 Annual Report</a></h3>
					</div>
				</div>
    		</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="cover-post cp-not-full" style="background-image: url(https://communitychange.org/wp-content/uploads/2018/04/care-img.png)">
					<div class="cp-container" style="background: linear-gradient(rgba(235,38,93, 1), rgba(242,119,33, 0.85));">
						<h3 class="cpc-title"><a href="http://communitychange.org/wp-content/uploads/2016/04/CCC_Annual_Report_2015.pdf/"> 2015 Annual Report</a></h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="cover-post cp-not-full" style="background-image: url(https://communitychange.org/wp-content/uploads/2018/04/undervalued-img.png)">
					<div class="cp-container" style="background: linear-gradient(55deg, rgba(133,38,101,1), rgba(230,46,43,0.75));">
						<h3 class="cpc-title"><a href="http://communitychange.org/wp-content/uploads/2017/10/CCC-PUBLIC-990.pdf">2015 IRS Form 990</a></h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="cover-post cp-not-full" style="background-image: url(https://communitychange.org/wp-content/uploads/2018/03/unlocking-opportunities.png)">
					<div class="cp-container" style="background: linear-gradient(170deg, rgba(133,38,101,1), rgba(230,46,43,1));">
						<h3 class="cpc-title"><a href="http://communitychange.org/wp-content/uploads/2016/10/CCC-FCCC-2015-Combined-FS-final.pdf">2015 Financial Report</a></h3>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="cover-post cp-not-full" style="background-image: url(https://communitychange.org/wp-content/uploads/2017/09/onstrike_bw.jpg)">
					<div class="cp-container" style="background: linear-gradient(55deg, rgba(230,46,43, 1), rgba(242,119,33, 0.75), rgba(247,153,32,1))">
						<h3 class="cpc-title"><a href="http://communitychange.org/wp-content/uploads/2016/03/CCC-FCCC-2014-Combined-FS.pdf">2014 Audited Financial Reports</p>
					</div>
				</div>
			</div>
	    </div>
</section>
<?php get_footer(); ?>
