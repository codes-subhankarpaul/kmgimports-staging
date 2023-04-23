<?php
/**

 * Template Name: SXmini G Class – Urban Titanium Camo Limited

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>

  <!-- Banner Start -->

  <!-- Limited Edition Product Section Start -->
  <?php $sxmini_vars = get_field('sxmini_variation'); ?>
  <section class="le-products-section custom-pad">
    <div class="container">
      <div class="le-product-top">
      <div class="row">
          <div class="col-12">
            <div class="custom-heading">
              <h3 class="product-section-heading"><?php echo $sxmini_vars['variation_title']; ?></h3>
            </div>
            <div class="le-product-short-desc">
              <p class="demo">
                <?php echo $sxmini_vars['variation_sub_title']; ?>
              </p>
            </div>
            <ul class="le-product-socials d-flex align-items-center justify-content-center">
              <li><a href="<?php echo get_theme_mod('facebook_url'); ?>"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="<?php echo get_theme_mod('twitter_url'); ?>"><i class="fab fa-twitter"></i></a></li>
              <li><a href="mailto:<?php echo get_theme_mod('email_address'); ?>"><i class="fas fa-envelope"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="le-product-bottom">
        <div class="row">
          <div class="col-12">
            <div class="le-product-box-wrap">
              <?php for ($i=1; $i<=3 ; $i++) { ?>        
              <div class="le-product-box ">
                <a href="javascript:void(0)" class="le-product-box-image">
                  <img src="<?php echo $sxmini_vars['sx_image_'.$i]; ?>" alt="<?php echo $sxmini_vars['sx_name_'.$i]; ?>">
                </a>
                <div class="le-product-box-text text-center">
                  <h4 class="le-product-box-heading"><?php echo $sxmini_vars['sx_name_'.$i]; ?></h4>
                  <h6 class="le-product-box-short-desc"><?php echo $sxmini_vars['sx_sub_name_'.$i]; ?></h6>
                  <p class="price"><?php echo $sxmini_vars['sx_price_'.$i]; ?></p>
                  <a href="<?php echo $sxmini_vars['sx_link_'.$i]; ?>" target="_self" class="custom-button">
                    Pre-Order
                  </a>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Limited Edition Product Section End -->
  <!-- Banner-Bottom-text-start-->
  <?php $sxmini_details = get_field('sxmini_section'); ?>
  <section class="le-content-section custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-content-wrap">
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $sxmini_details['sxmini_title']; ?></h3>
              </div>
              <div class="le-content-para">
                <?php echo $sxmini_details['sxmini_details']; ?>
              </div>
            </div>
            <?php $sxmini_highlights = get_field('sxmini_highlights'); ?>
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $sxmini_highlights['sxmini_highlights_title']; ?></h3>
              </div>
              <div class="le-list-content">
                <?php echo $sxmini_highlights['sxmini_highlights_details']; ?>
              </div>
            </div>
            <?php $sxmini_technical = get_field('sxmini_technical_specifications'); ?>
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $sxmini_technical[' sxmini_technical_title']; ?></h3>
              </div>
              <div class="le-list-content">
                <?php echo $sxmini_technical['sxmini_technical_details']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();