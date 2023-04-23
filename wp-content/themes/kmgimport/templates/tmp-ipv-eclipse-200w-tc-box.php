<?php
/**

 * Template Name: Pioneer4you IPV Eclipse

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>

  <!-- Limited Edition Product Section Start -->
  <?php $product_variations = get_field('eclipse_variations'); ?>
  <section class="le-products-section custom-pad">
    <div class="container">
      <div class="le-product-top">
        <div class="row">
          <div class="col-12">
            <div class="custom-heading ">
              <h3 class="product-section-heading"><?php echo $product_variations['variation_title']; ?></h3>
            </div>
            <div class="le-product-short-desc d-none">
              <p class="demo">
                <?php echo $product_variations['variation_title']; ?>
              </p>
            </div>
            <ul class="le-product-socials d-flex align-items-center justify-content-center d-none">
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
            <div class="le-product-box-wrap btn-hvr">
              <?php for ($i=1; $i<=6 ; $i++) { ?>

              <div class="le-product-box le-product-pioneer-box">
                <a href="javascript:void(0)" class="le-product-box-image">
                  <img src="<?php echo $product_variations['b_image_'.$i]; ?>" alt="Limited Edition product image">
                </a>
                <div class="le-product-box-text text-center">
                  <h4 class="le-product-box-heading">Ocean Black Chrome</h4>
                  <h6 class="le-product-box-short-desc">Camouflage Limited Edition</h6>
                  <p class="price">$219.99 + Free Shipping</p>
                  <a href="<?php echo $product_variations['b_link_'.$i]; ?>" target="_self" class="custom-button">
                    Order <?php echo $product_variations['b_color_'.$i]; ?>
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
  <!-- Banner-Bottom-text-start-->
  <?php $product_detail = get_field('ipv_eclipse'); ?>
  <section class="le-content-section custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-content-wrap">
            <div class="le-content-text">
              <div class="le-content-text-heading text-heading-alt">
                <h3 class="heading"><?php echo $product_detail['eclipse_title']; ?></h3>
              </div>
              <div class="le-content-para content-para-alt">
                <p class="le-para"><?php echo $product_detail['eclipse_details']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-12">
          <div class="le-content-wrap">
            <div class="row">
              <?php for ($i=1; $i<=3 ; $i++) {  ?>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="le-content-text">
                  <div class="le-content-text-heading ">
                    <h4 class="heading-dc"><?php echo $product_detail['a_content_title_'.$i]; ?></h4>
                  </div>
                  <div class="le-content-para">
                    <p class="le-para"><?php echo $product_detail['a_content_details_'.$i]; ?></p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Limited Edition Image Section -->
  <section class="le-products-image-section" style="background-image: url(<?php echo $product_detail['eclipe_image']; ?>);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-products-image-content d-none">
            <h4 class="le-products-image-heading"><?php echo $product_detail['eclipse_title']; ?> </h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Black BG content -->
  <?php $product_features = get_field('features_specification'); ?>
  <section class="le-content-section le-content-section-bk custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-content-wrap">
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_features['feature_title']; ?></h3>
                <h4 class="sub-heading"><?php echo $product_features['feature_sub_title']; ?></h4>
              </div>
              <?php echo $product_features['feature_details']; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- youtube video -->
      <div class="row">
        <div class="col-12">
          <div class="le-video">
            <iframe width="1049" height="610" src="<?php echo $product_features['feature_video']; ?>" title="Pioneer4you iPV Eclipse Unboxing! - KMG Distribution" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- important warranty content -->
      <?php $product_warrenty = get_field('eclipse_warrenty'); ?>
      <div class="row">
        <div class="col-12">
          <div class="le-content-wrap">
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_warrenty['warrenty_title']; ?></h3>
              </div>
              <div class="le-content-para">
                <p class="le-para"><?php echo $product_warrenty['eclipse_sub_title']; ?></p>
              </div>
            </div>
            <?php echo $product_warrenty['warrenty_details']; ?>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
get_footer();