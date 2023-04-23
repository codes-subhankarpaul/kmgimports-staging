<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage kmgimport
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post(); ?>


<section class="blog-inner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-self-center">
				<div class="blog-inner-1">
					<div class="blog-inner-1-img"
						style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
					</div>
					<div id="toc_container" class="no_bullets">

						<div class="blog-inner-1-content">
							<h3>
								<?php echo get_the_title(); ?>
							</h3>
							<ul class="comments">
								<li><?php echo get_the_date( 'jS F' ); ?></li>
								<li>Posted By :
									<?php the_author(); ?>
								</li>
								<li><span><i class="fa fa-heart" aria-hidden="true"></i></span> 5 Hits</li>
								<li><span><i class="fa fa-comments" aria-hidden="true"></i></span> 10 Comment</li>
							</ul>
							<!-- <p class="toc_title">Contents <span class="toc_toggle">[<a href="#">hide</a>]</span></p>
							<ul class="toc_list">
								<ul>
									<li>
										<ul>
											<li><a href="#Best_Squonk_Mods_in_2019"><span
														class="toc_number toc_depth_3">0.0.1</span> Best
													Squonk Mods in 2019</a></li>
										</ul>
									</li>
								</ul>
								<li><a href="#2019_Squonking_Guide"><span class="toc_number toc_depth_1">1</span> 2019
										Squonking Guide</a>
									<ul>
										<li>
											<ul>
												<li><a href="#What_is_a_Squonk_Mod"><span
															class="toc_number toc_depth_3">1.0.1</span> What is a
														Squonk Mod?</a></li>
												<li><a href="#Who_Should_Get_a_Squonk_Mod"><span
															class="toc_number toc_depth_3">1.0.2</span> Who
														Should Get a Squonk Mod?</a></li>
												<li><a href="#Learning_the_Components_of_a_Squonk_Mod"><span
															class="toc_number toc_depth_3">1.0.3</span> Learning the
														Components of a Squonk
														Mod</a></li>
												<li><a href="#Advantages_of_Squonking"><span
															class="toc_number toc_depth_3">1.0.4</span>
														Advantages of Squonking</a></li>
												<li><a href="#Where_to_Buy_a_Squonker"><span
															class="toc_number toc_depth_3">1.0.5</span> Where
														to Buy a Squonker</a></li>
												<li><a href="#Related"><span class="toc_number toc_depth_3">1.0.6</span>
														Related</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul> -->
						</div>
						<p class="paragraph">
							<?php echo get_the_content(); ?>
						</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-6 col-sm-12">
                    <div class="blog-inner-2">
                        <div class="blog-inner-img">
                            <img src="images/blog-big-img-2.jpg">
                        </div>
                        <ul class="blog-inner-2-list">
                            <li>Lorem ipsum dolor, sit amet consectetur.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur loerm.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur.</li>
                            <li>Lorem ipsum dolor, sit amet.</li>
                            <li>Lorem ipsum dolor.</li>
                            <li>Lorem ipsum dolor, sit amet consec.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur lorem.</li>
                            <li>Lorem ipsum dolor, sit amet conse.</li>
                            <li>Lorem ipsum dolor, sit amet consectet.</li>
                            <li>Lorem ipsum dolor, sit amet cons.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="blog-inner-3">
                        <div class="blog-inner-img">
                            <img src="images/blog-big-img-3.jpg">
                        </div>
                        <p class="paragraph">Contents0.0.1 Best Squonk Mods in 20191 2019 Squonking Guide1.0.1 What is a Squonk Mod?1.0.2 Who Should Get a Squonk Mod?1.0.3 Learning the Components of a Squonk Mod1.0.4 Advantages of Squonking1.0.5 Where to Buy a Squonker Squonking is one of the most popular trends in the vaping world. These mods have been around for a while, […]  This is the first rebuildable nic salt device, making it a competitor to pod systems. Unlike most pod systems, this vape device is airflow and voltage adjustable. The e-juice bottle holds a fair amount of juice so that it’s not likely users will have to carry around their vape juice when they go out for the day. Like other squonkers, it’s also extremely lightweight and compact, making it ideal for those who are always on the go.</p>
                    </div>
                </div> -->
		</div>
	</div>
</section>

<?php
endwhile; // End of the loop.

get_footer();