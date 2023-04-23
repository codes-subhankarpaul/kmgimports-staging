<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage kmgimport
 */

get_header(); ?>

    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-sidebar">
                        <div class="sidebar-box">
                            <h4 class="box-heading">Recent Posts</h4>
                            <ul class="recent-posts">
                            	<?php
					                    $args = array(
					                     'numberposts' => 4,
					                     'offset' => 0,
					                     'orderby' => 'post_date',
					                     'order' => 'DESC',
					                     'post_type' => 'post',
					                     'post_status' => 'publish',
					                     'suppress_filters' => true
					                    );
					                    $all_posts = wp_get_recent_posts( $args, ARRAY_A );
					                    foreach ( $all_posts as $each_post ) {
					                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $each_post[ 'ID' ] ), 'single-post-thumbnail' );
					                        //print_r($each_post);

					               ?>
                                <li><a href="<?php echo get_the_permalink($each_post['ID']); ?>">
                                    <div class="post-content">
                                        <div class="post-content-img">
                                            <img src="<?php echo $image[0]; ?>" alt="blog-img-1">
                                        </div>
                                        <div class="post-text align-self-center">
                                            <h5><?php echo get_the_date( 'jS F Y' ); ?></h5>
                                            <p><?php echo wp_trim_words( $each_post[ 'post_title' ], 7); ?></p>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <?php
					                 }
					            ?>
                            </ul>
                        </div>

                        <div class="sidebar-box">
                            <h4 class="box-heading">Popular Posts</h4>
                            <ul class="popular-posts">
                            	<?php
								   global $post;
								   $args = array( 'numberposts' => 4, 'offset'=> 1, 'category' => 1 );
								   $myposts = get_posts( $args );
								   foreach( $myposts as $post ) : setup_postdata($post); ?>
                                <li><a href="<?php echo get_the_permalink($each_post['ID']); ?>">
                                    <div class="popular-content">
                                        <div class="popular-content-date">
                                            <span><?php echo get_the_date( 'jS F' ); ?></span>
                                            <!-- <span>May</span> -->
                                        </div>
                                        <div class="popular-text align-self-center">
                                            <h5><?php echo get_the_title(); ?></h5>
                                           
                                        </div>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_content(), 10); ?>
                                    </p>
                                    </a>
                                </li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-6 col-sm-12">

                	<?php
                	    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			            $blog_query = new WP_Query(        
			                array(
			                    'post_type' => 'post',
			                    'order' => 'DESC',
			                    'paged' => $paged,
                                'posts_per_page' => 4
			                )
			            );
			           if ( have_posts() ) : while ( $blog_query->have_posts() ) : $blog_query->the_post();
			            	 
			        ?>
                    <div class="big-box">
                        <div class="col-lg-6 col-md-12 align-self-center">
                            <div class="big-box-left">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                <div class="img-date">
                                    <h3><?php echo get_the_date( 'jS F' ); ?></h3>
                                   <!--  <h4>April</h4> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 align-self-center">
                            <div class="big-box-right">
                                <div class="box-right-text">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <h5>posted by:<?php the_author(); ?></h5>
                                    <ul class="comment">
                                        <li><span><i class="fa fa-comments" aria-hidden="true"></i> </span></li>
                                        <li><a href="#">Comments</a></li>
                                    </ul>
                                    <p class="paragraph"><?php echo wp_trim_words( get_the_content(), 18); ?></p>
                                    <a class="custom-button" href="<?php echo get_the_permalink(); ?>">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                          
			            endwhile;
			            wp_reset_query(); ?>
			            <div class="pagination">
					        <nav aria-label="Page navigation example">
					            <ul class="pagination cus-page">
					                <?php post_pagination();  ?>
					            </ul>
					        </nav>
					    </div>
								                
					<?php  endif;
			        ?>
                </div>
            </div>
        </div>
        </div>
    </section>


<?php
get_footer();
