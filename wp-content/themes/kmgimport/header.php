<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage kmgimport
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:wght@500;600;700&family=Audiowide&family=Montserrat:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<!--     <header>
        <div class="top-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 align-self-center justify-content-start">
                        <div class="top-left ms-0">
                            <?php if(is_user_logged_in()) { ?>
                            <div class="header-current-point">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/star-icon.png"
                                    class="points-icon">
                                <span>
                                    <?php echo do_shortcode('[MYCURRENTPOINT]'); ?>
                                </span>
                            </div>
                            <?php } else { ?>
                            <a href="<?php echo esc_url(home_url('my-account')); ?>">Login for Available Points</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 align-self-center justify-content-end">
                        <div class="top-right me-0">
                            <ul class="top-nav d-flex">
                                <li><a href="<?php echo esc_url(home_url('about-us')); ?>">About</a></li>
                                <li><a href="<?php echo esc_url(home_url('contact-us')); ?>">Contact</a></li>
                            </ul>
                            <ul class="top-social-icons d-flex align-items-center">
                                <li>
                                    <a href="<?php echo get_theme_mod('facebook_url'); ?>" target="_blank"><i
                                            class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod('instagram_url'); ?>" target="_blank"><i
                                            class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod('twitter_url'); ?>" target="_blank"><i
                                            class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo get_theme_mod('email_address'); ?>"><i
                                            class="fas fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?php echo get_theme_mod('primary_contact_number'); ?>"><i
                                            class="fas fa-phone"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-section">
            <div class="logo-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-lg-block col-sm-none align-self-center justify-content-start">
                            <div class="logo">
                                <a href="<?php echo site_url(); ?>">
                                    <?php the_custom_logo(); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="logo-search">
                                <form class="d-flex justify-content-center" role="search">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit"><span><i class="fa fa-search"
                                                aria-hidden="true"></i>
                                        </span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-block col-sm-none align-self-center justify-content-end">
                            <div class="logo-login">
                                <ul class="log-in d-flex align-items-center">
                                    <li><span><i class="fas fa-sign-in-alt"></i></span></li>
                                    <li>
                                        <?php if(is_user_logged_in()) { ?>
                                        <a href="<?php echo esc_url(home_url('my-account')); ?>">My Account</a>
                                        <?php } else { ?>
                                        <a href="<?php echo esc_url(home_url('my-account')); ?>">Login</a>
                                        <?php } ?>
                                    </li>
                                </ul>
                                <ul class="cart-section col-md-3 col-lg-block col-sm-none">
                                    <li><span><i class="fas fa-shopping-cart"></i></span></li>
                                    <li>
                                        <h4>Cart/$0.00</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg py-0">
                        <a class="navbar-brand col-lg-none col-sm-block ms-0 py-0" href="#"><img
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/footer-logo.png"
                                alt="kmg-logo"></a>
                        <div class="d-flex align-items-center me-0">
                            <ul class="cart-section d-lg-none d-block">
                                <li><span><i class="fas fa-shopping-cart"></i></span></li>
                                <li>
                                    <h4>Cart/$0.00</h4>
                                </li>
                            </ul>
                            <div class="navbar-header me-0">
                                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                                wp_nav_menu( array(
                                   'menu'          => 'Main Navigation',
                                   'depth'         => 3,
                                   'container'     => false,
                                   'menu_class'    => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                   'walker'        => new wp_bootstrap_navwalker()
                                ) );
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header> -->

    <header class="custom-header">
        <div class="top-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 align-self-center justify-content-start">
                        <div class="top-left ms-0">
                            <?php if(is_user_logged_in()) { ?>
                                <div class="header-current-point">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/star-icon.png"
                                        class="points-icon">
                                    <span>
                                        <?php echo do_shortcode('[MYCURRENTPOINT]'); ?>
                                    </span>
                                </div>
                            <?php } else { ?>
                                <a href="<?php echo esc_url(home_url('my-account')); ?>">Login for Available Points</a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- <div class="col-md-4 offset-md-8"></div> -->
                    <div class="col-md-6 col-sm-6 align-self-center justify-content-end">
                        <div class="top-right me-0">
                            <ul class="top-nav d-flex">
                                <li><a href="<?php echo esc_url(home_url('about-us')); ?>">About</a></li>
                                <li><a href="<?php echo esc_url(home_url('contact-us')); ?>">Contact</a></li>
                            </ul>
                            <ul class="top-social-icons d-flex align-items-center">
                                <li>
                                    <a href="<?php echo get_theme_mod('facebook_url'); ?>" target="_blank"><i
                                            class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod('instagram_url'); ?>" target="_blank"><i
                                            class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod('twitter_url'); ?>" target="_blank"><i
                                            class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo get_theme_mod('email_address'); ?>"><i
                                            class="fas fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?php echo get_theme_mod('primary_contact_number'); ?>"><i
                                            class="fas fa-phone"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-section">
            <div class="logo-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-lg-block col-sm-none align-self-center justify-content-start">
                            <div class="logo">
                                <a href="<?php echo site_url(); ?>">
                                    <?php the_custom_logo(); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="logo-search">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-block col-sm-none align-self-center justify-content-end">
                            <div class="logo-login">
                                <ul class="log-in d-flex align-items-center">
                                    <li><span><i class="fas fa-sign-in-alt"></i></span></li>
                                    <li>
                                        <?php if(is_user_logged_in()) { ?>
                                            <a href="<?php echo esc_url(home_url('my-account')); ?>">My Account</a>
                                        <?php } else { ?>
                                            <a href="<?php echo esc_url(home_url('my-account')); ?>">Login</a>
                                        <?php } ?>
                                    </li>
                                </ul>
                                <ul class="cart-section col-md-3 col-lg-block col-sm-none">
                                    <li><span><i class="fas fa-shopping-cart"></i></span></li>
                                    <li>
                                        <?php //echo do_shortcode('[woo_cart_button]'); ?>
                                        <?php echo do_shortcode("[woocommerce_cart_icon]"); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg py-0">
                        <a class="navbar-brand col-lg-none col-sm-block ms-0 py-0" href="#">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer-logo.png" alt="kmg-logo">
                        </a>
                        <div class="d-flex align-items-center me-0">
                            <?php // echo do_shortcode("[woocommerce_cart_icon]"); ?>
                            <?php //echo do_shortcode("[woo_cart_but]"); ?>
                            <!-- <ul class="cart-section d-lg-none d-block">
                                <li><span><i class="fas fa-shopping-cart"></i></span></li>
                                <li>
                                    <h4></h4>
                                </li>
                            </ul> -->
                            <div class="navbar-header me-0">
                                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                                // wp_nav_menu( array(
                                //    'menu'          => 'Main Navigation',
                                //    'depth'         => 3,
                                //    'container'     => false,
                                //    'menu_class'    => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                //    'walker'        => new wp_bootstrap_navwalker()
                                // ) );
                            ?>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'orderby' => 'title' ) ); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php 
          if( 'post' == get_post_type() )
            { ?>
    <?php if(get_the_post_thumbnail_url()=='') { ?>
    <section class="custom-inner-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <?php } else { ?>
        <section class="custom-inner-banner"
            style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner-banner.jpg);">
            <?php } ?>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 align-items-center">
                    <div class="cus-inner-banner-wrap">
                        <div class="custom-inner-banner-title">
                            <h2 class="title">
                                <?php
                                if('post' == get_post_type())
                                    {
                                    echo "Our Blogs";
                                    }
                                ?>
                            </h2>
                        </div>
                        <div class="custom-inner-banner-breadcrumb">
                            <nav>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-divider"><i class="fas fa-angle-double-right"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php
                                                if('post' == get_post_type())
                                                {
                                                echo "Blogs";
                                                }
                                        ?>
                                    </li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } else if( 'product' == get_post_type() ){
        if(is_single()){ ?>
            <section class="custom-inner-banner-sb" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/custom-inner-banner.jpg);">
                <div class="container-fluid">
                  <div class="custom-inner-banner-sb-wrap">
                    <div class="row align-items-end">
                      <div class="col-sm-9 col-12">
                        <div class="custom-inner-banner-breadcrumb">
                          <nav>
                            <ol class="breadcrumb custom-breadcrumb">
                              <li class="breadcrumb-item custom-breadcrumb-item">
                                <a href="<?php echo site_url(); ?>">Home</a>
                              </li>
                              <li class="breadcrumb-item custom-breadcrumb-item">
                                <span class="custom-breadcrumb-divider">/</span>
                                <a href="https://kmg-import-220801.mystagingwebsite.com/shop/">Product Category</a></li>
                              <li class="breadcrumb-item custom-breadcrumb-item" aria-current="page">
                                <span class="custom-breadcrumb-divider">/</span>
                                <span class="active">
                                    <?php
                                                if('product' == get_post_type())
                                                {
                                                echo get_the_title();
                                                }
                                        ?>
                                </span>
                              </li>
                            </ol>
                          </nav>
                        </div>
                      </div>
                      <div class="col-sm-3 col-5 d-sm-block d-none">
                        <div class="custom-inner-banner-sb-right">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/custom-inner-banner-right-img.png" alt="Some product images">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

    <?php    }else if(is_archive()){  ?>
        <section class="custom-inner-banner-sb" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/custom-inner-banner.jpg);">
            <div class="container-fluid">
              <div class="custom-inner-banner-sb-wrap">
                <div class="row align-items-end">
                  <div class="col-sm-9 col-12">
                    <div class="custom-inner-banner-breadcrumb">
                      <nav>
                        <div class="custom-inner-banner-sb-content">
                            <?php $shop_page_banner = get_field('shop_banner', 1832); ?>
                          <h2 class="heading"><?php echo $shop_page_banner['a_banner_title']; ?></h2>
                          <p class="text"><?php echo $shop_page_banner['banner_details']; ?></p>
                          <a href="<?php echo esc_url(home_url('wholesale-form')); ?>" class="custom-cta"><?php echo $shop_page_banner['banner_link_text']; ?></a>
                        </div>
                        <ol class="breadcrumb custom-breadcrumb">
                          <li class="breadcrumb-item custom-breadcrumb-item">
                            <a href="<?php echo site_url(); ?>">Home</a>
                          </li>
                          <li class="breadcrumb-item custom-breadcrumb-item" aria-current="page">
                            <span class="custom-breadcrumb-divider">/</span>
                            <span class="active">Product Category</span>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <div class="col-sm-3 col-5 d-sm-block d-none">
                    <div class="custom-inner-banner-sb-right">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/custom-inner-banner-right-img.png" alt="Some product images">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    <?php
    }
    ?>


    <!--  -->
    <?php } else if(!is_front_page()) { ?>

    <?php

    if (is_page( array( 5526, 5504, 3658, 4047 ) ) ) { ?>

         <?php $all_banners = get_field('all_banners');  ?>
  <section class="custom-carousel-banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <?php
        $k=1;
        foreach($all_banners as $each_banners) { ?>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $k-1; ?>" class="<?php if($k == 1){ echo 'active'; } ?>"
          aria-current="<?php if($k == 1){ echo 'true'; } ?>" aria-label="Slide <?php echo $k; ?>"></button>
        <?php $k++;  
          }
        ?>
      </div>
      <div class="carousel-inner">
        <?php
        $j=1;
        foreach($all_banners as $each_banners) { ?>
        <div class="carousel-item <?php if($j == 1){ echo 'active';} ?>">
          <img src="<?php echo get_the_post_thumbnail_url($each_banners); ?>" class="d-block w-100"
            alt="Athena-BF-RDA-3">
          <div class="carousel-caption d-md-block">
            <div class="carousel-banner-heading">
              <?php $before_title = get_field('before_title',$each_banners);
                if($before_title != ''){ ?>
                    <h6 class="carousel-heading"><?php echo $before_title; ?></h6>
                <?php
                } else { echo ''; }
                ?>
              <h3 class="demo"><?php echo get_the_title($each_banners); ?></h3>
              <?php $after_title = get_field('after_title',$each_banners);
                if($after_title != ''){ ?>
              <h4 class="demo"><?php echo $after_title; ?></h4>
              <?php
                } else { echo ''; }
                ?>
            </div>
            <div class="carousel-btn">
                <?php $button1 = get_field('button_1',$each_banners);
                    $button1link = get_field('button_1_link',$each_banners);
                if($button1 != '' && $button1link != '' ){ 
                    echo '<a class="custom-button" href="'. $button1link .'">'. $button1 .'  <span><i class="fas fa-user"></i></span></a>';
                 }else { echo ''; }
                ?>
                <?php $button2 = get_field('button_2',$each_banners);
                    $button2link = get_field('button_2_link',$each_banners);
                if($button2 != '' && $button2link != '' ){ 
                    echo '<a class="custom-button" href="'. $button2link .'">'. $button2 .'</a>';
                 }else { echo ''; }
                ?>
            </div>
          </div>
        </div>
        <?php $j++;
          }
           
        ?>
      </div>
      <!-- Arrows Start -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <!-- Arrows End -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

    <?php // } ?>


    <?php } else { if(get_the_post_thumbnail_url()!='') {?>
    <section class="custom-inner-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

        <?php } else { ?>
        <section class="custom-inner-banner"
            style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner-banner.jpg);">
            <?php } ?>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 align-items-center">
                        <div class="cus-inner-banner-wrap">
                            <div class="custom-inner-banner-title">
                                <h2 class="title">
                                    <?php echo get_the_title(); ?>
                                </h2>
                            </div>
                            <div class="custom-inner-banner-breadcrumb">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                                        <li class="breadcrumb-divider"><i class="fas fa-angle-double-right"></i></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <?php echo get_the_title(); ?>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <?php } } ?>