<?php 
/* Template Name: Projects Page Template*/
    get_header();
    query_posts(array(
        'post_type' => 'Projects'
     ));


?>

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



    <!-- <div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<img src="/images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
						<div class="text">
							<span>Interior Design</span>
							<h3><a href="project.html">Office Interior Design</a></h3>
						</div>
						<a href="</images/work-1.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div> -->
<?php
    get_footer();
?>