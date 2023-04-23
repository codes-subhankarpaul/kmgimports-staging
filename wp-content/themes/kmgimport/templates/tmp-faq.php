<?php
/**

 * Template Name: FAQ

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>

<section class="faq custom-pad-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading">
                    <h3 class="product-section-heading">
                        <?php echo get_field('faq_title'); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="faq-accordion">
                    <div class="accordion" id="accordionExample">
                    	<?php 

			                  $args = array(
			                    'post_type' => 'all_faqs',
			                    'order' => 'ASC',
			                 );
			                $the_query = new WP_Query( $args );
			                if ($the_query->have_posts()) {
			                $i=1;
			                while ($the_query->have_posts()) {
			                    
			                $the_query->the_post();
			             ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button <?php 
                            if($i!= 1){ echo 'collapsed';}?>" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                   <?php echo get_the_title(); ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php  if($i == 1){ echo 'show';} ?>" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span>

                                        <?php echo get_the_content();?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i=$i+1;
		                        }
		                    }
		                    wp_reset_postdata();
		                ?>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="faq-bottom">
                    <ul class="bottom-text">
                    	<?php $page_links = get_field('page_links'); ?>
                    	<?php for($j=1; $j<=4; $j++) { ?>
                        <li><a href="<?php echo $page_links['b_link_'. $j]; ?>"><?php echo $page_links['b_title_'. $j]; ?></a></li>
                        <?php } ?>
                       <!--  <li><a href="#"> Vaping Supplies Vaping Products</a></li>
                        <li><a href="#"> Pod Mods System Wholesale </a></li>
                        <li><a href="#"> Vape Juice Wholesale E Liquid</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();