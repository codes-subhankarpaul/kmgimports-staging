<?php
/**

 * Template Name: Pioneer4you IPV VELAS

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>
    
  <!-- Limited Edition Image Section Start -->
  <?php $feature_product = get_field('product_section'); ?>
  <section class="le-products-image-section le-overlay" style="background-image: url(<?php echo $feature_product['product_image']; ?>);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-products-image-content">
            <h4 class="le-products-image-heading"><?php echo $feature_product['product_detail']; ?></h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Limited Edition Image Section End -->
  <!-- Limited Edition Product Section Start -->
  <section class="le-products-section le-products-pioneer custom-pad"> 
    <div class="container">
      <div class="le-product-top">
      <div class="row">
          <div class="col-12">
            <div class="custom-heading">
              <h3 class="product-section-heading">SXmini G Class – Urban Titanium Camo Limited</h3>
            </div>
            <div class="le-product-short-desc">
              <p class="demo">
                COMING SOON! The new SXmini G Class - Camouflage Ltd Edition
              </p>
            </div>
            <ul class="le-product-socials d-flex align-items-center justify-content-center">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fas fa-envelope"></i></a></li>
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
              <?php $product_variations = get_field('product_variation'); 
              for ($i=1; $i <= 6 ; $i++) {
              ?>
              <div class="le-product-box le-product-pioneer-box">
                <a href="javascript:void(0)" class="le-product-box-image">
                  <img src="<?php echo $product_variations['a_image_'.$i]; ?>" alt="Limited Edition product image">
                </a>
                <div class="le-product-box-text text-center">
                  <h4 class="le-product-box-heading">Ocean Black Chrome</h4>
                  <h6 class="le-product-box-short-desc">Camouflage Limited Edition</h6>
                  <p class="price">$219.99 + Free Shipping</p>
                  <a href="<?php echo $product_variations['a_link_'.$i]; ?>" target="_self" class="custom-button">
                    <?php echo $product_variations['a_color_'.$i]; ?>
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
  <!-- Limited Edition Image Section Start -->
  <?php $limited_edition = get_field('limited_edition'); ?>
  <section class="le-products-image-section le-overlay" style="background-image: url(<?php echo $limited_edition['limited_edition_image']; ?>);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-products-image-content">
            <h4 class="le-products-image-heading"><?php echo $limited_edition['limited_edition_title']; ?> </h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Limited Edition Image Section End -->
    <!-- Banner-Bottom-text-start-->
    <?php $product_feature = get_field('ipv_velas'); ?>
    <section class="le-content-section custom-pad pb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="le-content-wrap">
              <div class="le-content-text">
                <div class="le-content-text-heading">
                  <h3 class="heading"><?php echo $product_feature['velas_title']; ?></h3>
                </div>
                <div class="le-content-para">
                  <p class="le-para"><?php echo $product_feature['velas_details']; ?></p>
                </div>
              </div>
              <div class="le-content-text">
                <div class="le-content-text-heading">
                  <h3 class="heading"><?php echo $product_feature['features_title']; ?> :</h3>
                </div>
                <div class="le-list-content">
                  <?php echo $product_feature['velas_features']; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner-Bottom-text-end-->
  <!-- Limited Edition Image Section Start -->
  <section class="le-products-image-section" style="background-image: url(<?php echo $limited_edition['after_feature_image']; ?>);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-products-image-content d-none">
            <h4 class="le-products-image-heading"><?php echo $limited_edition['limited_edition_title']; ?> </h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Limited Edition Image Section End -->

<?php
get_footer();