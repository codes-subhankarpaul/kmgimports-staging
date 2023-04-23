<?php
/**

 * Template Name: GeekVape Athena Squonk Kit

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>

  <!-- Limited Edition Product Section Start -->
  <?php $product_vars = get_field('variation_section'); ?>
  <section class="le-products-section custom-pad">
    <div class="container">
      <div class="le-product-top">
        <div class="row">
          <div class="col-12">
            <div class="custom-heading">
              <h3 class="product-section-heading"><?php echo $product_vars['variation_title']; ?></h3>
            </div>
            <div class="le-product-short-desc">
              <p class="demo">
                <?php echo $product_vars['variation_sub_title']; ?>
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
              <?php for ($i=1; $i<=4 ; $i++) { ?>
              <div class="le-product-box ">
                <a href="<?php echo $product_vars['d_link_'.$i]; ?>" class="le-product-box-image">
                  <img src="<?php echo $product_vars['d_image_'.$i]; ?>"
                    alt="Limited Edition product image">
                </a>
                <div class="le-product-box-text text-center">
                  <h4 class="le-product-box-heading">BLUE</h4>
                  <h6 class="le-product-box-short-desc">GeeKVape Athena Squonk Kit with Athena BF RDA</h6>
                  <p class="price">$64.95 + Free Shipping</p>
                  <a href="<?php echo $product_vars['d_link_'.$i]; ?>" target="_self" class="custom-button">
                    Order <?php echo $product_vars['d_color_'.$i]; ?>
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
  <?php $product_details = get_field('details_section'); ?>
  <section class="le-content-section custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="le-content-wrap">
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_details['product_title']; ?></h3>
              </div>
              <div class="le-content-para">
                <p class="le-para"><?php echo $product_details['product_details']; ?></p>
              </div>
            </div>
            <?php $product_features = get_field('feature_section'); ?>
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_features['feature_title']; ?>:</h3>
              </div>
              <div class="le-list-content">
                <?php echo $product_features['feature_detail']; ?>
              </div>
            </div>
            <?php $product_addons = get_field('add-ons'); ?>
            <div class="le-content-text add-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_addons['add_ons_title']; ?>:</h3>
              </div>
              <div class="le-list-content">
                <ul class="list-items">
                  <?php for ($i=1; $i<=3 ; $i++) { ?>
                  <li class="items"><a href="<?php echo $product_addons['add_link_'.$i]; ?>"><?php echo $product_addons['add_name_'.$i]; ?></a></li>
                <?php } ?>
                </ul>
              </div>
            </div>
             <?php $product_technicals = get_field('technical_section'); ?>
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_technicals['technical_title']; ?></h3>
              </div>
              <div class="le-list-content">
                <?php echo $product_technicals['technical_content']; ?>
              </div>
            </div>
            <?php $product_kits = get_field('kit_contents'); ?>
            <div class="le-content-text">
              <div class="le-content-text-heading">
                <h3 class="heading"><?php echo $product_kits['kit_contents_title']; ?>:</h3>
              </div>
              <div class="le-list-content">
                <?php echo $product_kits['kit_contents_contents']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
get_footer();