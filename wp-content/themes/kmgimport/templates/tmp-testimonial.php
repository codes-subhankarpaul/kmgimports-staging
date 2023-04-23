<?php
/**

 * Template Name: Testimonials

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>
    
   <section class="testimonial">
        <div class="container">    
             <?php echo do_shortcode('[ajaxloadmoreblogdemo post_type="all_testimonial" initial_posts="4" loadmore_posts="4"]'); ?>
        </div>
    </section>

<?php
get_footer();