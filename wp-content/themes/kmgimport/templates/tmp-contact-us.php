<?php
/**

 * Template Name: Contact Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>

  <section class="contact-us-map">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 p-0">
          <div class="contact-map">
            <?php 
              echo $hero_map = get_field('contact_us_map');
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-details custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-lg-5 align-self-center">
          <div class="contact-content">
            <div class="custom-heading cus-no-border">
              <h3 class="product-section-heading">Connect With Us</h3>
            </div>
            <ul class="info">
              <li class="info-detail">
                <span><i class="fas fa-map-marker-alt"></i></span>
                <div class="info-content-wrap">
                  <h4>Location</h4>
                  <a href="<?php echo get_theme_mod('kmg_address_link'); ?>" target="_blank"><?php echo get_theme_mod('kmg_address'); ?></a>
                </div>
              </li>
              <li class="info-detail">
                <span><i class="fas fa-envelope"></i></span>
                <div class="info-content-wrap">
                  <h4>Email</h4>
                  <p><a href="mailto:<?php echo get_theme_mod('secondary_email'); ?>"><?php echo get_theme_mod('secondary_email'); ?></a></p>
                  <p><a href="mailto:<?php echo get_theme_mod('email_address'); ?>"><?php echo get_theme_mod('email_address'); ?></a></p>
                </div>
              </li>
              <li class="info-detail">
                <span><i class="fas fa-handshake"></i></span>
                <div class="info-content-wrap">
                  <h4>Social</h4>
                  <ul>
                    <li class="si"><a href="<?php echo get_theme_mod('facebook_url'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>&nbsp;&nbsp;
                    <li class="si"><a href="<?php echo get_theme_mod('instagram_url'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;</li>
                    <li class="si"><a href="<?php echo get_theme_mod('twitter_url'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;</li>
                    <li class="si"><a href="<?php echo get_theme_mod('youtube_url'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>&nbsp;&nbsp;</li>
                    <li class="si"><a href="<?php echo get_theme_mod('linkedin_url'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <?php $hero_form = get_field('send_us_form'); ?>
        <div class="col-xxl-6 col-lg-7 align-self-center">
          <div class="contact-form py-lg-5 px-lg-5 p-sm-4 p-3">
            <div class="custom-heading cus-no-border">
              <h3 class="product-section-heading"><?php echo $hero_form['form_title']; ?></h3>
            </div>
            <div class="contact-form-content">
              <?php 
                         $contact_form = $hero_form['form'];
                         echo do_shortcode($contact_form);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="newsletter-heading">
            <h4>Subscribe our newsletter for newest books updates</h4>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Your Email Address" aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">Subscribe</span>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
get_footer();