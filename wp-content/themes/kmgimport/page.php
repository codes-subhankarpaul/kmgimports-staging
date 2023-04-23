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
?>

<section class="custom-term-condition cus-all-css">
	<div class="container">
    
            
                <?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						if(get_the_content() != '')
						{
							the_content();
						}
						else
						{
							echo '<h3 class="product-section-heading"><span>Content Coming Soon ...!!</h3>';
						}
					endwhile; ?>
                <?php endif; ?>
            </div>
</section>



<?php 
get_footer();