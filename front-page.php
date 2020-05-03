<?php
/* front page template file */
	get_header();
	query_posts(array(
		'post_type' => 'Projects'
	 ));
?>



	<section class="home-slider js-fullheight owl-carousel bg-white">
		<div class="slider-item js-fullheight">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
					data-scrollax-parent="true">
					<div class="one-third order-md-last img js-fullheight"
						style="background-image:url(<?php bloginfo('template_url') ?>/images/bg_1.jpg);">
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
						style="background-image:url(<?php bloginfo('template_url') ?>/images/bg_2.jpg);">
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
			<div class="row no-gutters justify-content-center">
            <?php
                while (have_posts()) : the_post(); ?>
                    <div class="col-md-offset-6 col-md-6 col-lg-offset-3 col-lg-3 ftco-animate">
                        <div class="project">
                            <img src="<?php the_field('image');?>" class="img-fluid" alt="<?php the_title(); ?>">
                            <div class="text">
                                <span><?php the_title(); ?></span>
                                <h3><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></h3>
                            </div>
                            <a href="<?php the_field('image'); ?>"
                                class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                    </div>
                <?php endwhile; 
            ?>
			</div>
		</div>
	</section>

<?php
    get_footer();
?>