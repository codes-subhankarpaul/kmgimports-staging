<?php
/**

 * Template Name: About Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>


  <?php $hero_content = get_field('about_us_content'); ?>
  <section class="about-us-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="about-us-content-image-wap">
            <img src="<?php echo $hero_content['about_us_content_banner']; ?>" alt="KMG-Banner">
            <div class="list-about-us-content">
              <h4><?php echo $hero_content['experience_year']; ?></h4>
              <p><?php echo $hero_content['experience_text']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="about-us-right-content-wap">
            <div class="custom-heading cus-no-border">
              <h3 class="product-section-heading"><?php echo $hero_content['content_title']; ?></h3>
            </div>
            <p><?php echo $hero_content['content_deatils']; ?></p>
            <blockquote>
              <p style="border-left:3px solid red ; padding-left: 10px;"><?php echo $hero_content['content_sub_title']; ?></p>
            </blockquote>
            <a class="custom-button" href="<?php echo $hero_content['content_button_link']; ?>"><?php echo $hero_content['content_button_text']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $hero_mission = get_field('our_mission'); ?>
  <section class="our-mission-section">
    <div class="container-fluid">
      <div class="our-mission-section-wrap">
        <div class="mission-heading-wrap">
          <div class="custom-heading">
            <h3 class="product-section-heading"><?php echo $hero_mission['our_mission_title']; ?></h3>
          </div>
          <p><?php echo $hero_mission['our_mission_sub_title']; ?></p>
        </div>
        <div class="mission-heading-bottom-wrap">
          <ul>
            <?php for($i=1; $i<=3; $i++) { ?>

            <li>
              <div class="mission-box-wrap">
                <div class="mission-box-image"><img src="<?php echo $hero_mission['a_image_'.$i] ?>" alt="Customer"></div>
                <div class="mission-box-heading">
                  <h5><?php echo $hero_mission['a_title_'.$i] ?></h5>
                </div>
                <div class="mission-box paragrapgh">
                  <p><?php echo $hero_mission['a_sub_title_'.$i] ?></p>
                </div>
                <a class="custom-button" href="<?php echo $hero_mission['a_button_link_'.$i] ?>"><?php echo $hero_mission['a_button_text_'.$i] ?></a>
              </div>
            </li>

          <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  </section>
  <?php $hero_counter = get_field('customer_counter'); ?>
  <section class="customer-counter">
    <div class="container-fluid">
      <div class="customer-counter-wap">
        <ul>
          <?php for($j=1; $j<=3; $j++) { ?>
          <li>
            <div class="counter-box-wrap">
              <div class="counter-box-image">
                <img class="img-fluid" src="<?php echo $hero_counter['a_count_logo_'.$j]; ?>" alt="Customer">
              </div>
              <div class="count-number-and-unit secondary-font">
                <span class="count-number"><?php echo $hero_counter['a_count_number_'.$j]; ?></span>
              </div>
              <div class="count-title">
                <p><?php echo $hero_counter['a_count_title_'.$j]; ?></p>
              </div>
            </div>
          </li>

        <?php } ?>

        </ul>
      </div>
    </div>
  </section>

  <?php $hero_services = get_field('our_service'); ?>
  <section class="our-service">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-lg-4 col-md-4">
          <div class="our-service-content-wrap">
            <span class="demo"><i class="fas fa-percentage"></i></span>
            <p><?php echo $hero_services['dicount']; ?></p>
          </div>
        </div>
      
        <div class="col-lg-4 col-md-4">
          <div class="our-service-content-wrap">
            <span class="demo"><i class="fas fa-truck"></i></span>
            <p><?php echo $hero_services['delivery']; ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="our-service-content-wrap">
            <span class="demo"><i class="fas fa-rupee-sign"></i></span>
            <p><?php echo $hero_services['best_price']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();