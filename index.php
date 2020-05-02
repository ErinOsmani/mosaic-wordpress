<?php
/* Main template file */


get_header();

?>

    <section class="home-slider js-fullheight owl-carousel bg-white">
		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third order-md-last img js-fullheight"
						style="background-image:url(images/bg_1.jpg);">
						<h3 class="vr">Architecture Firm</h3>
					</div>
					<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<h1 class="mb-4">We Love <br>Modern Designs</h1>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
							<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">View our works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third order-md-last img js-fullheight"
						style="background-image:url(images/bg_2.jpg);">
						<h3 class="vr">Since - 2018</h3>
					</div>
					<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
						data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<h1 class="mb-4">We Create Amazing Architecture Designs</h1>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
							<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">View our works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftc-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/bg_3.jpg);">
				</div>
				<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section mb-5 pl-md-5">
						<div class="pl-md-5 ml-md-5">
							<span class="subheading subheading-with-line"><small
									class="pr-2 bg-white">About</small></span>
							<h2 class="mb-4">We are the best Interior, Exterior &amp; Architecture Firm</h2>
						</div>
					</div>
					<div class="pl-md-5 ml-md-5 mb-5">
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
							would have been rewritten a thousand times and everything that was left from its origin
							would be the word "and" and the Little Blind Text should turn around and return to its own,
							safe country. But nothing the copy said could convince her and so it didn’t take long until
							a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged
							her into their agency, where they abused her for their.</p>
						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the
							skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
							her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
							continued her way.</p>
						<p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-2">
				<div class="col-md-4 heading-section ftco-animate">
					<span class="subheading subheading-with-line"><small class="pr-2 bg-white">Projects</small></span>
					<h2 class="mb-4">Featured Projects</h2>
				</div>
				<div class="col-md-8 pl-md-5 heading-section ftco-animate">
					<div class="pl-md-4 border-line">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in. A small river named Duden flows by their
							place and supplies it with the necessary regelialia. It is a paradisematic country, in which
							roasted parts of sentences fly into your mouth.</p>
						<p class="category mt-5">
							<span class="active mr-2"><a href="#">All Work</a></span>
							<span class="mr-2"><a href="#">Interior</a></span>
							<span class="mr-2"><a href="#">Exterior</a></span>
							<span class="mr-2"><a href="#">Landscape</a></span>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row no-gutters">
				<?php
                    //start the loop 
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                                the_content();
                        endwhile;
                    endif;

                ?>
			</div>
		</div>
	</section>


<?php
    get_footer();
?>

<!-- 
<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
						<div class="text">
							<span>Interior Design</span>
							<h3><a href="project.html">Office Interior Design</a></h3>
						</div>
						<a href="images/work-1.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div> -->