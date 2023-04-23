<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage burbank_ps
 */

get_header();
?>

<section class="custom-banner">
    <div class="container-fluid">
        <div class="row">
            <?php $hero_section = get_field('hero_section'); ?>
            <div class="col-lg-9 p-0">
                <div class="main-cutom-banner">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $hero_section['background_image']; ?>" class="d-block w-100" alt="main-banner">
                                <div class="carousel-caption custom-banner-caption">
                                    <h2><?php echo $hero_section['text']; ?></h2>
                                    <h4><?php echo $hero_section['secondary_text']; ?></h4>
                                    <a class="custom-button" href="<?php echo $hero_section['button_link']; ?>"><?php echo $hero_section['button_text']; ?></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <ul class="items">
                    <li class="side-banner">
                        <div class="side-banner-content">
                            <h5><?php echo $hero_section['text_top_right']; ?></h5>
                            <a class="custom-button" href="<?php echo $hero_section['button_link_top_right']; ?>"><?php echo $hero_section['button_text_top_right']; ?></a>
                        </div>
                        <div class="side-img">
                            <img class="img-fluid" src="<?php echo $hero_section['background_image_top_right']; ?>" alt="side-banner">
                        </div>
                    </li>
                    <li class="side-banner">
                        <div class="side-banner-content">
                            <h5><?php echo $hero_section['text_middle_right']; ?></h5>
                            <a class="custom-button" href="<?php echo $hero_section['button_link_middle_right']; ?>"><?php echo $hero_section['button_text_middle_right']; ?></a>
                        </div>
                        <div class="side-img">
                            <img class="img-fluid" src="<?php echo $hero_section['background_image_middle_right']; ?>" alt="side-banner">
                        </div>
                    </li>
                    <li class="side-banner">
                        <div class="side-banner-content">
                            <h5><?php echo $hero_section['text_bottom_right']; ?></h5>
                            <a class="custom-button" href="<?php echo $hero_section['button_link_bottom_right']; ?>"><?php echo $hero_section['button_text_bottom_right']; ?></a>
                        </div>
                        <div class="side-img">
                            <img class="img-fluid" src="<?php echo $hero_section['background_image_bottom_right']; ?>" alt="side-banner">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="newest-items-section custom-pad pb-0">
    <div class="container-fluid">
        <?php $newest_items = get_field('newest_items'); ?>
        <div class="row">
            <div class="col-12">
                <div class="custom-heading">
                    <h3 class="product-section-heading"><?php echo $newest_items['title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="product-items-wrap">
            <div class="row justify-content-between">
                <?php
                    $c=1;
                    $mslg0 = array(1,6,11,16,21,26);
                    $melg0 = array(5,10,15,20,25);
                    $new_query = new WP_Query(        
                        array(
                            'showposts' => $newest_items['no_of_new_arrivals'],
                            'post_type' => 'product',
                            'order' => 'DESC',
                            'product_cat'  => 'new-arrivals'
                        )
                    );
                    while ( $new_query->have_posts() ) : $new_query->the_post();
                        $product = wc_get_product( get_the_ID() );
                ?>
                <div class="custom-col-5 <?php if(in_array($c, $mslg0)) { echo 'ms-lg-0'; } else if(in_array($c, $melg0)) { echo 'me-lg-0'; } ?> ">
                    <div class="product-item-box">
                        <div class="product-badge">
                            <span class="demo">new</span>
                        </div>
                        <div class="product-quick-action">
                            <ul class="product-quick-action-list">
                                <li><a href="javascript:void(0)">
                                        <span class="demo"><i class="fas fa-cart-plus"></i></span>
                                    </a></li>
                                <li><a href="javascript:void(0)">
                                        <span class="demo"><i class="fas fa-heart"></i></span>
                                    </a></li>
                                <li>
                                    <a href="javascript:void(0)" class="pr-button product-modal-btn" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo get_the_ID(); ?>">
                                        <span class="demo"><i class="fas fa-search"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-images">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="pr-img" alt="Product image">
                                <?php
                                    $gallery = $product->get_gallery_image_ids();
                                    $img_atts = wp_get_attachment_image_src( $gallery[0], $default );
                                    $img_src = $img_atts[0];
                                    if($img_src != ''){
                                ?>
                                <img src="<?php echo $img_src; ?>" class="pr-img" alt="Product image">
                                <?php } else{ ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="pr-img-alt" alt="Product image">
                                <?php } ?> 
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <h4><?php echo get_the_title(); ?></h4>
                            </a>
                        </div>
                        <div class="product-price">
                            <?php if($product->get_type() == 'simple') { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$product->get_price(); ?></h5>
                            <?php } elseif($product->is_type('variable')) { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$product->get_variation_sale_price( 'min', true ); ?></h5>
                            <?php } ?>
                        </div>
                        <div class="product-button">
                            <a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo get_the_ID(); ?>">Quick View<span class="demo"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <?php
                    $c++;
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
    <div class="custom-offer-banner1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <ul class="ni-banner-wrap">
              <?php $all_deals = get_field('deals_section'); ?>
              <?php for( $b=1; $b<=4; $b++ ){
              ?>  
              <li class="ni-banner">
                <a href="<?php echo $all_deals['deal_box_button_link_'.$b]; ?>"><img class="img-fluid" src="<?php echo $all_deals['deal_box_image_'.$b]; ?>" alt="DEALS">
                <?php  if( $all_deals['deal_box_text_'.$b] != '' && $all_deals['deal_box_button_text_'.$b] != '' ){ ?>
                  <div class="list-banner-content">
                    <h5><?php echo $all_deals['deal_box_text_'.$b]; ?></h5>
                    <p><u><?php echo $all_deals['deal_box_button_text_'.$b]; ?></u></p>
                  </div>
                <?php  } else { echo ''; } ?>
                </a>
              </li>
              <?php } ?>  
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="newest-items-section featured-items-section custom-pad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading">
                    <?php $featured = get_field('fatured_section'); ?>
                    <h3 class="product-section-heading"><?php echo $featured['title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="product-items-wrap">
            <div class="row justify-content-between">
            
                <?php $all_featured = $featured['featured_items'];
                $i = 0;
                $len = count($all_featured);
                foreach ($all_featured as $each_featured) { 
                     $all_product = wc_get_product( $each_featured );
                     // echo '<pre>';
                     // print_r($all_product);
                     // echo '</pre>';
                    ?> 
                <div class="custom-col-5 <?php if($i == 0) { echo 'ms-lg-0'; } else if($i == $len - 1) { echo 'me-lg-0'; } else { echo ''; } ?>">
                    <div class="product-item-box">
                        <div class="product-badge">
                            <span class="demo">new</span>
                        </div>
                        <div class="product-quick-action">
                            <ul class="product-quick-action-list">
                                <li><a href="javascript:void(0)">
                                        <span class="demo"><i class="fas fa-cart-plus"></i></span>
                                    </a></li>
                                <li><a href="javascript:void(0)">
                                        <span class="demo"><i class="fas fa-heart"></i></span>
                                    </a></li>
                                <li><a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo $each_featured; ?>">
                                        <span class="demo"><i class="fas fa-search"></i></span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="product-images">
                            <a href="javascript:void(0)">
                                <img src="<?php echo get_the_post_thumbnail_url($each_featured); ?>" class="pr-img" alt="Product image">
                                <?php
                                    $gallery = $all_product->get_gallery_image_ids();
                                    $img_atts = wp_get_attachment_image_src( $gallery[0], $default );
                                    $img_src = $img_atts[0];
                                    if($img_src != ''){
                                ?>

                                <img src="<?php echo $img_src; ?>" class="pr-img-alt" alt="Product image">
                                <?php } else{ ?>
                                <img src="<?php echo get_the_post_thumbnail_url($each_featured); ?>" class="pr-img-alt" alt="Product image">
                               <?php } ?> 
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="<?php echo get_the_permalink($each_featured); ?>">
                                <h4><?php echo get_the_title($each_featured); ?></h4>
                            </a>
                        </div>
                        <div class="product-price">
                            <?php if($all_product->get_type() == 'simple') { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$all_product->get_price(); ?></h5>
                            <?php } elseif($all_product->is_type('variable')) { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$all_product->get_variation_sale_price( 'min', true ); ?></h5>
                            <?php } ?>
                        </div>
                        <div class="product-button">
                            <a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo $each_featured; ?>">Quick View<span class="demo"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <?php 
                      $i++; }
                 ?>
            </div>
        </div>
    </div>
    <div class="fi-offer-banner1">
        <div class="container-fluid">
            <div class="row">
                <?php $featured_banners = $featured['banners'];
                for( $c=1; $c<=2; $c++ ){
                ?>
                <div class="col-lg-6">
                    <div class="fi-offer-img-wrap">
                        <img class="img-fluid" src="<?php echo $featured_banners['image_'.$c]; ?>">
                        <div class="list-banner-content">
                            <h4><?php echo $featured_banners['title_'.$c]; ?></h4>
                            <?php if($featured_banners['detail_'.$c] != '' ){ ?>
                            <p> <?php echo $featured_banners['detail_'.$c]; ?> </p>
                            <?php } else { echo ''; } ?>
                            <a href="<?php echo $featured_banners['button_link_'.$c]; ?>" class="custom-button"><?php echo $featured_banners['button_text_'.$c]; ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- duplicate -->
<section class="newest-items-section bestseller-items-section custom-pad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading">
                    <?php $best_seller = get_field('best_seller_section'); ?>
                    <h3 class="product-section-heading"><?php echo $best_seller['section_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="bsp-products-wrap">

            <div class="row">
                <div class="col-xl-3">
                    <div class="bsp-left-image-wrap d-flex flex-column">
                        <?php for( $c=1; $c<=2; $c++ ){ ?>
                        <div class="bsp-left-img-1">
                            <img src="<?php echo $best_seller['image_'.$c]; ?>" alt="Bestseller items">
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="product-items-wrap">
                        <div class="row justify-content-between">
                            <!-- main  -->

                            <?php
                                $k=1;
                                $best_mslg0 = array(1,5,9,13,17,21);
                                $best_melg0 = array(4,8,12,16,20,24);
                                $query  = new WP_Query(        
                                    array(
                                        'showposts' => $best_seller['no_of_best_sellings'],
                                        'post_type' => 'product',
                                        'order' => 'DESC',
                                        'post_status' => 'publish',
                                        'ignore_sticky_posts' => 1,
                                        'meta_key' => 'total_sales',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'DESC',
                                    )
                                );
                                while ( $query ->have_posts() ) : $query ->the_post();
                                    $product = wc_get_product( get_the_ID() );

                                    // echo '<pre>';
                                    // print_r($product);
                                    // echo '</pre>';      
                            ?>

                            <div class="custom-col-5 <?php if(in_array($k, $best_mslg0)) { echo 'ms-lg-0'; } else if(in_array($k, $best_melg0)) { echo 'me-lg-0'; } ?>">
                                <div class="product-item-box">
                                    <div class="product-badge">
                                        <span class="demo">new</span>
                                    </div>
                                    <div class="product-quick-action">
                                        <ul class="product-quick-action-list">
                                            <li><a href="javascript:void(0)">
                                                    <span class="demo"><i class="fas fa-cart-plus"></i></span>
                                                </a></li>
                                            <li><a href="javascript:void(0)">
                                                    <span class="demo"><i class="fas fa-heart"></i></span>
                                                </a></li>
                                            <li><a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo get_the_ID(); ?>">
                                                    <span class="demo"><i class="fas fa-search"></i></span>
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="product-images">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="pr-img" alt="Product image">
                                            <?php
                                                $gallery = $product->get_gallery_image_ids();
                                                $img_atts = wp_get_attachment_image_src( $gallery[0], $default );
                                                $img_src = $img_atts[0];
                                                 if($img_src != ''){
                                            ?>
                                            <img src="<?php echo $img_src; ?>" class="pr-img-alt" alt="Product image">
                                            <?php } else{ ?>
                                               <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="pr-img-alt" alt="Product image">
                                            <?php } ?> 
                                        </a>
                                    </div>
                                    <div class="product-title">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <h4><?php echo get_the_title(); ?></h4>
                                        </a>
                                    </div>
                                    <div class="product-price">
                                        <?php if($product->get_type() == 'simple') { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$product->get_price(); ?></h5>
                                    <?php } elseif($product->is_type('variable')) { ?>
                                        <h5><?php echo get_woocommerce_currency_symbol().''.$product->get_variation_sale_price( 'min', true ); ?></h5>
                                    <?php } ?>
                                    </div>
                                    <div class="product-button">
                                        <a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo get_the_ID(); ?>">Quick View<span class="demo"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $k++;
                                endwhile;
                                wp_reset_query();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bsp-banner-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bsp-banner-bottom-wap" style="background-image: url(<?php echo $best_seller['banner_image']; ?>);">
                        <div class="list-banner-content">
                            <h4><?php echo $best_seller['banner_title']; ?></h4>
                            <a href="<?php echo $best_seller['banner_button_link']; ?>" class="custom-button"><?php echo $best_seller['banner_button_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- duplicate  -->
<section class="newest-items-section deal-of-the-day-section custom-pad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading">
                     <?php $deal_of_day = get_field('deal_of_the_day'); ?>
                    <h3 class="product-section-heading"><?php echo $deal_of_day['deal_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="product-items-wrap">
            <div class="row justify-content-between">
                <?php $all_deals_day = $deal_of_day['all_deals'];

                $i = 0;
                $len = count($all_deals_day);
                foreach ($all_deals_day as $each_deals_day) {
                    $all_of_product = wc_get_product( $each_deals_day );
                    
                    // echo "<pre>";
                    // print_r($each_deals_day);
                    // echo "</pre>";

                ?>
                <!-- main  -->
                <div class="custom-col-5 <?php if($i == 0) { echo 'ms-lg-0'; } else if($i == $len - 1) { echo 'me-lg-0'; } else { echo ''; } ?>">
                    <div class="product-item-box">
                        <div class="product-badge">
                            <span class="demo">new</span>
                        </div>
                        <div class="product-quick-action">
                            <ul class="product-quick-action-list">
                                <li><a href="javascript:void(0)">
                                        <span class="demo"><i class="fas fa-cart-plus"></i></span>
                                    </a></li>
                                <li><a href="javascript:void(0)">
                                        <span class="demo"><i class="fas fa-heart"></i></span>
                                    </a></li>
                                <li><a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo $each_deals_day; ?>">
                                        <span class="demo"><i class="fas fa-search"></i></span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="product-images">
                            <a href="<?php echo get_the_permalink($each_deals_day); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($each_deals_day); ?>" class="pr-img" alt="Product image">
                                <?php
                                    $gallery1 = $all_of_product->get_gallery_image_ids();
                                    $img_atts1 = wp_get_attachment_image_src( $gallery1[0], $default );
                                    $img_src1 = $img_atts1[0];
                                    if($img_src1 != ''){
                                ?>
                                <img src="<?php echo $img_src1; ?>" class="pr-img-alt" alt="Product image">
                                <?php } else{ ?>
                               <img src="<?php echo get_the_post_thumbnail_url($each_deals_day); ?>" class="pr-img-alt" alt="Product image">
                               <?php } ?>
                            </a>
                        </div>
                        <div class="product-timings">
                            <?php
                                $waiting_day = 1637210196;
                                $time_left = $waiting_day - time();

                                $days = floor($time_left / (60*60*24));
                                $time_left %= (60 * 60 * 24);

                                $hours = floor($time_left / (60 * 60));
                                $time_left %= (60 * 60);

                                $min = floor($time_left / 60);
                                $time_left %= 60;

                                $sec = $time_left;

                                //echo "Remaing time: $days days and $hours hours and $min min and $sec sec left";

                            ?>
                            <ul class="hour-mins">
                                <li class="time-box">
                                    <h4><?php echo $days; ?></h4>
                                    <h5>Day</h5>
                                </li>
                                <li class="time-box">
                                    <h4><?php echo $hours; ?></h4>
                                    <h5>Hrs</h5>
                                </li>
                                <li class="time-box">
                                    <h4><?php echo $min; ?></h4>
                                    <h5>Min</h5>
                                </li>
                                <li class="time-box">
                                    <h4><?php echo $sec; ?></h4>
                                    <h5>Sec</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="product-reviews">
                            <ul class="review-star">
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                                <li><span><i class="fas fa-star"></i></span></li>
                            </ul>
                            <ul class="review-persons">
                                <li>(Reviews 30)</li>
                            </ul>
                        </div>
                        <div class="product-title">
                            <a href="<?php echo get_the_permalink($each_deals_day); ?>">
                                <h4><?php echo get_the_title($each_deals_day); ?></h4>
                            </a>
                        </div>
                        <div class="product-price">
                            <?php if($all_of_product->get_type() == 'simple') { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$all_of_product->get_price(); ?></h5>
                            <?php } elseif($all_of_product->is_type('variable')) { ?>
                                <h5><?php echo get_woocommerce_currency_symbol().''.$all_of_product->get_variation_sale_price( 'min', true ); ?></h5>
                            <?php } ?>
                        </div>
                        <div class="product-button">
                            <a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="<?php echo $each_deals_day; ?>">Quick View<span class="demo"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
    </div>
</section>


<section class="faq custom-pad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading">
                    <?php $faq_section = get_field('faq_section');  ?>
                    <h3 class="product-section-heading"><?php echo $faq_section['faq_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="faq-accordion">
                    <div class="accordion" id="accordionExample">
                        <?php 
                        $all_faq = $faq_section['all_faq'];
                        $i=1;
                        foreach ($all_faq as $each_faq) {
                        ?>

                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button <?php if($i!= 1){ echo 'collapsed';}?>"  type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo get_the_title($each_faq); ?>
                                </button>
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php  if($i == 1){ echo 'show';} ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span>
                                        <?php
                                          $post1 = get_post($each_faq); 
                                          $content1 = apply_filters('the_content', $post1->post_content);
                                          echo $content1;
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="faq-bottom">
                    <ul class="bottom-text">
                        <?php $bottom_links = get_field('bottom_links');
                          for ($i=0; $i<=4 ; $i++) { 
                        ?>
                        <li><a href="<?php echo $bottom_links['b_link_'.$i]; ?>"> <?php echo $bottom_links['b_title_'.$i]; ?> </a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();