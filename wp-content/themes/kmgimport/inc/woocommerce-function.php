<?php

add_theme_support( 'woocommerce' );


 /* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
 /* ----------------------------------------------------------------------- Single Page Functions ---------------------------------------------------------------------------------------- */ 
 /* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

/* breadcumb remove function */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );



/* custom product gallery function */
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_custom_gallery_product_images', 5);
function woocommerce_custom_gallery_product_images() {
  $product = wc_get_product( get_the_ID() );

  $attachment_ids = $product->get_gallery_image_ids();

  $product_image = wp_get_attachment_image_src( $product->get_image_id() , 'single-post-thumbnail' );
    //print_r($product_image);
  


    if($attachment_ids != ''){
    echo '<div class="col-xl-5 col-lg-6"><div class="ipd-left-wrap row">';
    echo '<div class="col-xl-3 col-lg-3 col-md-4 pe-md-0 order-md-1 order-2"><div id="thumb" class="owl-carousel product-thumb">';
  foreach( $attachment_ids as $attachment_id ) {
         $image_link = wp_get_attachment_url( $attachment_id );

         echo '<div class="item"><div class="ipd-thumb-box"><img src="'.$image_link.'" alt="Image of the product"></div></div>';
    }
    echo '</div></div>';

    echo '<div class="col-xl-9 col-lg-9 col-md-8 ps-md-0 order-md-2 order-1"><div id="slider" class="owl-carousel product-slider">';
  foreach( $attachment_ids as $attachment_id ) {
         $image_link = wp_get_attachment_url( $attachment_id );

         echo '<div class="item"><div class="ipd-image-box"><img src="'.$image_link.'" alt="Image of the product"></div></div>';
    }
    echo '</div></div>';

    echo '</div></div>';
    }
    else{

      echo '<div class="item"><div class="ipd-image-box"><img src="'.$product_image[0].'" alt="Image of the product"></div></div>';

    }

}



/* custom product title function */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_custom_single_title', 5 );
function woocommerce_custom_single_title() {
  $product = wc_get_product( get_the_ID() );

  $title = '';
  $title .= '<div class="ipd-right-wrap"><div class="ipd-heading"><h4>'.$product->get_name().'</h4></div>'; //close div in  custom links function 
  echo $title;
}



/* custom product SKU function */
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sku', 10 );
function woocommerce_template_single_sku() {
  $product = wc_get_product( get_the_ID() );

  $theSKU.= '<div class="sku"><p class="demo">SKU : <span class="demo">' . $product->get_sku() . '</span></p></div>' ;
    echo $theSKU;

}


/* custom product price function */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_custom_template_single_price', 15 );
function woocommerce_custom_template_single_price() {
  $product = wc_get_product( get_the_ID() );
  //print_r($product);
  // $thePrice .= '<div class="ipd-price"><h5>' . $product->get_price_html() . '</h5></div>' ;
  //   echo $thePrice;
  echo '<a class="custom-button" href="#nipv-tablesorter">Available Purchase Options</a>';

}

/* custom product short description function */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_custom_description', 20 );
function woocommerce_custom_description() {
  $product = wc_get_product( get_the_ID() );
  $description = '';
  $description .= '<div class="ipd-desc"><p class="demo">'.$product->short_description.'</p>';
  echo $description;
  //print_r($product);
}

/* custom links function */
add_action( 'woocommerce_single_product_summary', 'woocommerce_custom_links', 25 );
function woocommerce_custom_links() {
  //$product = wc_get_product( get_the_ID() );
  $links = '';
  $links .= '<ul class="desc-links">';
  $links .= '<li><a href="javascript:void(0)">Vape Wholesale Distributor</a></li>';
  $links .= '<li><a href="javascript:void(0)">Vape Supplies</a> </li>';
  $links .= '<li><a href="javascript:void(0)">Pod Mods</a></li>';
  $links .= '<li><a href="javascript:void(0)">Vape Juice Wholesale</a></li>';
  $links .= '</ul>';   //open div in custom product title function
  echo $links;

}

/* romoved single meta function */
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

 ?>

<?php

/* custom social links function */
add_action( 'woocommerce_single_product_summary', 'woocommerce_custom_social_links', 35 );
function woocommerce_custom_social_links() {
  //$product = wc_get_product( get_the_ID() );

  $social_links = '';
  $social_links .= '<div class="ipd-socials d-flex align-items-center">';
  $social_links .= '<span class="demo m-0">Share:</span>';
  $social_links .= '<ul class="list m-0 d-flex">';
  $social_links .= '<li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>';
  $social_links .= '<li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>';
  $social_links .= '<li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>';
  $social_links .= '</ul>';
  $social_links .= '</div>';
  echo $social_links;

}

/* custom tabs function */

/**
 * Customize product data tabs
 */


add_filter( 'woocommerce_product_tabs', 'woo_custom_product_tabs' );
function woo_custom_product_tabs( $tabs ) {

    //Removing tabs

    unset( $tabs['description'] );              // Remove the description tab
    unset( $tabs['reviews'] );               // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab



    //Attribute Description tab
    $tabs['desc_tab'] = array(
        'title'     => __( 'Description', 'woocommerce' ),
        'priority'  => 100,
        'callback'  => 'woo_desc_tab_content'
    );

    // Adds the Additional Information tab
    $tabs['info_tab'] = array(
        'title'     => __( 'Additional Information', 'woocommerce' ),
        'priority'  => 110,
        'callback'  => 'woo_info_tab_content'
    );

    // Adds the Review products tab
    $tabs['review_tab'] = array(
        'title'     => __( 'Review', 'woocommerce' ),
        'priority'  => 120,
        'callback'  => 'woo_review_tab_content'
    );

    // Adds the Disclaimer products tab
    $tabs['disclaimer_tab'] = array(
        'title'     => __( 'Disclaimer', 'woocommerce' ),
        'priority'  => 130,
        'callback'  => 'woo_disclaimer_tab_content'
    );

    return $tabs;

}

// New Tab contents

function woo_desc_tab_content() {
  $product = wc_get_product( get_the_ID() );

    if($product->get_description() != ''){
   
    echo '<div class="tab-content"><div class="tab-pane active" id="description"><div class="ipd-tab-content-wrap"><div class="ipd-heading">';
    echo $product->get_description();
    echo '</div></div></div></div>';
    }else{
        echo '<div class="tab-content"><div class="tab-pane active" id="description"><div class="ipd-tab-content-wrap"><div class="ipd-heading">';
        echo 'No Information Found!';
        echo '</div></div></div></div>';
    }
}
function woo_info_tab_content() {
  $product = wc_get_product( get_the_ID() );

    global $product;

    if($product->list_attributes() != ''){
    echo '<h2>'.$product->list_attributes().'</h2>';
    }else{
        echo '';
    }
    
    //echo '<h2>Additional Information</h2>';
    
}


function woo_review_tab_content() {
  //$product = wc_get_product( get_the_ID() );

        $args = array (
            'post_type' => 'product', 
            'post_ID' =>$product->id,  // Product Id
            'status' => "approve", // Status you can also use 'hold', 'spam', 'trash', 
            'number' => 5  // Number of comment you want to fetch I want latest approved post soi have use 1
            );
        $comments = get_comments($args);


       //  echo "<pre>";
       // print_r($comments);
        
       if ( ! $comments ) echo 'No comments!!';
        
       $html .= '<div class="woocommerce-tabs"><div id="reviews"><ol class="commentlist">';
        
       foreach ( $comments as $comment ) {   
          $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
          $html .= '<li class="review">';
          $html .= get_avatar( $comment, '60' );
          $html .= '<div class="comment-text">';
          if ( $rating ) $html .= wc_get_rating_html( $rating );
          $html .= '<p class="meta"><strong class="woocommerce-review__author">';
          $html .= get_comment_author( $comment );
          $html .= '</strong></p>';
          $html .= '<div class="description">';
          $html .= $comment->comment_content;
          $html .= '</div></div>';
          $html .= '</li>';
       }
        
       $html .= '</ol></div></div>';
        
       echo $html;
   
    //echo '<h2>Review</h2>';
    
}

function woo_disclaimer_tab_content() {
  $product = wc_get_product( get_the_ID() );
    
    echo '<h2>Disclaimer</h2>';
    
}




/* removed upshell function */
 remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );


/**
 * related product function
 */ 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_filter( 'woocommerce_after_single_product_summary', 'jk_related_products_args', 25 );
  function jk_related_products_args( $args ) {
       
    global $post;
    $related = get_posts( 
      array( 
      'category__in' => wp_get_post_categories( $post->ID ), 
      'numberposts'  => 4, 
      'post__not_in' => array( $post->ID ),
      'orderby'      => 'rand',
      'post_type'    => 'product'
      ) 
    );
    if( $related ) { ?>
<section class="newest-items-section inner-product-section custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading">
                    <h3 class="product-section-heading">RElated Products</h3>
                </div>
            </div>
        </div>
        <div class="product-items-wrap">
            <div class="row justify-content-between">
                <?php 
            $i = 0;
            $len = count($related);
              foreach( $related as $post ) {
                setup_postdata($post); 
               
                $all_product = wc_get_product( get_the_ID() );?>

                <div
                    class="custom-col-5 <?php if($i == 0) { echo 'ms-lg-0'; } else if($i == $len - 1) { echo 'me-lg-0'; } else { echo ''; } ?>">
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
                                <li><a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal" product-id="<?php echo get_the_ID($post); ?>">
                                        <span class="demo"><i class="fas fa-search"></i></span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="product-images">
                            <a href="javascript:void(0)">
                                <img src="<?php echo get_the_post_thumbnail_url($post); ?>" class="pr-img"
                                    alt="Product image">
                                <?php
                                $gallery = $all_product->get_gallery_image_ids();
                                $img_atts = wp_get_attachment_image_src( $gallery[0], $default );
                                $img_src = $img_atts[0];
                                        if($img_src != ''){
                        ?>
                                <img src="<?php echo $img_src; ?>" class="pr-img-alt" alt="Product image">
                               <?php } else{ ?>
                               <img src="<?php echo get_the_post_thumbnail_url($post); ?>" class="pr-img-alt" alt="Product image">
                               <?php } ?> 
                            </a>
                        </div>
                        <div class="product-title">
                            <a href="<?php echo get_the_permalink($post); ?>">
                                <h4>
                                    <?php echo get_the_title($post); ?>
                                </h4>
                            </a>
                        </div>
                        <div class="product-price">
                            <?php if($all_product->get_type() == 'simple') { ?>
                            <h5>
                                <?php echo get_woocommerce_currency_symbol().''.$all_product->get_price(); ?>
                            </h5>
                            <?php } elseif($all_product->is_type('variable')) { ?>
                            <h5>
                                <?php echo get_woocommerce_currency_symbol().''.$all_product->get_variation_sale_price( 'min', true ); ?>
                            </h5>
                            <?php } ?>
                        </div>
                        <div class="product-button">
                            <a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal"
                                data-bs-target="#quickViewModal" product-id="<?php echo get_the_ID($post); ?>">Quick
                                View<span class="demo"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>

    </div>
</section>
<?php } 
}


/* removed sidebar function */
 function disable_woo_commerce_sidebar() {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10); 
  }
 add_action('init', 'disable_woo_commerce_sidebar');





/* plus minus button for add to cart quantity */

add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );
  
function bbloomer_display_quantity_plus() {
   echo '<span class="qtyplus plus"><i class="fas fa-plus"></i></span>';
}
  
add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );
  
function bbloomer_display_quantity_minus() {
   echo '<span class="qtyminus minus"><i class="fas fa-minus"></i></span>';
}
  
// -------------
// 2. Trigger update quantity script
  
add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );
  
function bbloomer_add_cart_quantity_plus_minus() {
 
   if ( ! is_product() && ! is_cart() ) return;
    
   wc_enqueue_js( "   
           
      $(document).on( 'click', 'span.plus, span.minus', function() {
  
         var qty = $( this ).parent( '.quantity' ).find( '.qty' );
         var val = parseFloat(qty.val());
         var max = parseFloat(qty.attr( 'max' ));
         var min = parseFloat(qty.attr( 'min' ));
         var step = parseFloat(qty.attr( 'step' ));
 
         if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
               qty.val( max ).change();
            } else {
               qty.val( val + step ).change();
            }
         } else {
            if ( min && ( min >= val ) ) {
               qty.val( min ).change();
            } else if ( val > 1 ) {
               qty.val( val - step ).change();
            }
         }
 
      });
        
   " );
}







 /* ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
 /* --------------------------------------------------------------------------- Archive Page Functions -------------------------------------------------------------------------------------- */ 
 /* ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */



/* breadcumb remove function */
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );


/* Hide Shop title */
add_filter('woocommerce_show_page_title', 'bbloomer_hide_shop_page_title');
 
function bbloomer_hide_shop_page_title($title) {
   if (is_shop()) $title = false;
   return $title;
}


/* custom Shop Coils Links */

add_action( 'wporg_custom_shop_coils_links', 'wpfix_shop_coil_html' );

function wpfix_shop_coil_html() {
    //$product = wc_get_product( get_the_ID() );
   
    echo '<div class="coil-left">
                
               <div class="inner-products-sidebar-heading">
                 <h3>Shop coils</h3>
               </div>
               <ul class="sidebar-nav">
                 <li class="sidebar-nav-item">
                   <a href="javascript:void(0)" class="sidebar-nav-link">
                     <span class="icon"><i class="fas fa-angle-double-right"></i></span>
                     Everything Else
                   </a>
                 </li>
                 <li class="sidebar-nav-item">
                   <a href="javascript:void(0)" class="sidebar-nav-link">
                     <span class="icon"><i class="fas fa-angle-double-right"></i></span>
                     Mesh Coils
                   </a>
                 </li>
                 <li class="sidebar-nav-item">
                   <a href="javascript:void(0)" class="sidebar-nav-link">
                     <span class="icon"><i class="fas fa-angle-double-right"></i></span>
                     Standard Coils
                   </a>
                 </li>
                 <li class="sidebar-nav-item">
                   <a href="javascript:void(0)" class="sidebar-nav-link">
                     <span class="icon"><i class="fas fa-angle-double-right"></i></span>
                     Sub Ohm Coils
                   </a>
                 </li>
                 <li class="sidebar-nav-item">
                   <a href="javascript:void(0)" class="sidebar-nav-link">
                     <span class="icon"><i class="fas fa-angle-double-right"></i></span>
                     Top Coils
                   </a>
                 </li>
               </ul>
             </div>
             <div class="coil-right">
               <div class="coil-right-img">
                 <img src="'. get_theme_file_uri() .'/assets/images/product-inner-page-shop-coils-img.png" alt="Image of a coil">
               </div>
             </div>';
}

/* Talk to a Vaping Wholesale Supplies Expert Today! */

add_action( 'wp_custom_talk_to_vaping_wholesale_expert', 'wpfix_talk_to_expert_html' );

function wpfix_talk_to_expert_html() {
    //$product = wc_get_product( get_the_ID() );
   
    echo '<div class="inner-products-sidebar-heading">
               <h3>Talk to a Vaping Wholesale  Supplies Expert Today!</h3>
             </div>
             <div class="cta-tel-wrap" style="background-image: url('. get_theme_file_uri() . '/assets/images/product-inner-page-left-cta-bg.jpg' .');">
               <a class="tel-link d-flex align-items-center justify-content-between" href="tel:'. get_theme_mod('primary_contact_number') .'">
                 <span class="icon"><i class="fas fa-phone-volume"></i></span>
                 <span class="tel">'. get_theme_mod('primary_contact_number') .'</span>
               </a>
             </div>';
}


/* remove notices function */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );

/* custom social links function */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_custom_grid_style', 10 );
function woocommerce_custom_grid_style() {
    //$product = wc_get_product( get_the_ID() );

    echo '<div class="inner-products-top-nav-left ms-0" style="display: flex; gap: 0 10px;">
                <a href="javascript:void(0)" value="8" class="product-grid">
                  <img src="'. get_theme_file_uri() .'/assets/images/product-inner-page-nav-thumb-1.png" alt="">
                </a>
                <a href="javascript:void(0)" value="12" class="product-grid">
                  <img src="'. get_theme_file_uri() .'/assets/images/product-inner-page-nav-thumb-2.png" alt="">
                </a>
                <a href="javascript:void(0)" value="20" class="product-grid d-xxl-block d-lg-none">
                  <img src="'. get_theme_file_uri() .'/assets/images/product-inner-page-nav-thumb-3.png" alt="">
                </a>
                <a href="javascript:void(0)" value="4" class="product-grid">
                  <img src="'. get_theme_file_uri() .'/assets/images/product-inner-page-nav-thumb-4.png" alt="">
                </a>
              </div>';

}


add_action( 'woocommerce_before_shop_loop', 'woocommerce_custom_product_list_showing', 15 );
function woocommerce_custom_product_list_showing() {
    //$product = wc_get_product( get_the_ID() );

    echo '<div class="inner-products-top-nav-right d-flex align-items-center me-lg-0"><div class="showing d-flex align-items-center"> Showing:'. do_shortcode('[alg_wc_products_per_page]').'</div></div>';

}


/* custom ordering function */

add_filter( 'woocommerce_catalog_orderby', 'misha_remove_default_sorting_options', 30 );

function misha_remove_default_sorting_options( $options ){
    
    
    //unset( $options[ 'popularity' ] ); // Sort by popularity
    unset( $options[ 'menu_order' ] ); // Default sorting
    //unset( $options[ 'rating' ] ); // Sort by average rating
    //unset( $options[ 'date' ] ); // Sort by latest
    //unset( $options[ 'price' ] ); // Sort by price: low to high
    //unset( $options[ 'price-desc' ] ); // Sort by price: high to low
    
    return $options;
    
}


/* remove woocommerce_template_loop_product_link_open function */

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );



/* custom product batch function */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'wpxpc_custom_product_batch', 10 );

function wpxpc_custom_product_batch(){
      
    echo '<div class="product-badge"><span class="demo">new</span></div>';
    
}


/* custom quick action function */
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_quick_action_links', 15 );
function woocommerce_show_quick_action_links(){
    
    
    echo '<div class="product-quick-action">
            <ul class="product-quick-action-list">
              <li><a href="javascript:void(0)">
                  <span class="demo"><i class="fas fa-cart-plus"></i></span>
                </a></li>
              <li><a href="javascript:void(0)">
                  <span class="demo"><i class="fas fa-heart"></i></span>
                </a></li>
              <li><a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal"
                  data-bs-target="#quickViewModal" product-id="'. get_the_ID() .'">
                  <span class="demo"><i class="fas fa-search"></i></span>
                </a></li>
            </ul>
          </div>';
    
}


/* custom product thumbnail function */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_custom_loop_product_thumbnail', 20 );

function woocommerce_custom_loop_product_thumbnail(){
     $product = wc_get_product( get_the_ID() );

        $gallery = $product->get_gallery_image_ids();
        $img_atts = wp_get_attachment_image_src( $gallery[0], $default );
        $img_src = $img_atts[0];
                             
    
    
    echo '<div class="product-images">
            <a href="'. get_the_permalink() .'">
              <img src="'. get_the_post_thumbnail_url() .'" class="pr-img" alt="Product image">
              <img src="'. $img_src .'" class="pr-img-alt" alt="Product image">
            </a>
          </div>';
    
}


/* custom product title function */
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'wc_custom_loop_product_title', 10 );

function wc_custom_loop_product_title(){
     $product = wc_get_product( get_the_ID() );
    
    echo '<div class="product-title"><a href="' . get_the_permalink() . ' "><h4>' . get_the_title() . '</h4></a></div>';
    
}


add_action( 'woocommerce_shop_loop_item_title', 'archive_list_view_custom_description', 15 );
function archive_list_view_custom_description() { 
  

  $product = wc_get_product( get_the_ID() );
  $list_description = '';
  $list_description .= '<div id="list-shortcode">'. wp_trim_words( $product->get_description(), 8) .'</div>';
  echo $list_description;
}



/* custom product price function */
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'wc_custom_loop_product_price', 10 );

function wc_custom_loop_product_price(){
     $product = wc_get_product( get_the_ID() );
    
    echo '<div class="product-price">';
     if($product->get_type() == 'simple') { 
     echo '<h5>'. get_woocommerce_currency_symbol().''.$product->get_price().'</h5>';
      } elseif($product->is_type('variable')) { 
     echo '<h5>'. get_woocommerce_currency_symbol().''.$product->get_variation_sale_price( 'min', true ) .'</h5>';
       } 
    echo '</div>';
    
}


/* custom quick view function */
add_action( 'woocommerce_after_shop_loop_item_title', 'wc_custom_quick_view_product_title', 15 );

function wc_custom_quick_view_product_title(){
     $product = wc_get_product( get_the_ID() );
    
    echo '<div class="product-button">
           <a href="javascript:void(0)" class="pr-button" type="button" data-bs-toggle="modal" data-bs-target="#quickViewModal" product-id="'. get_the_ID() .'">Quick View<span class="demo">
           <i class="fas fa-arrow-right"></i></span></a>
           </div>';
    
}




/* remove add to cart function */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


/* custom category filter */
add_action( 'wporg_selective_category_filter', 'myprefix_custom_category_filter' );

function myprefix_custom_category_filter(){
      
    $selective_category = get_field('selective_category',1832);
            //print_r($selective_category);


    $orderby = 'name';
    $order = 'asc';
    $hide_empty = false ;
    $cat_args = array(
        'orderby'    => $orderby,
        'order'      => $order,
        'hide_empty' => $hide_empty,
    );
     
    $product_categories = get_terms( 'product_cat', $cat_args );
     
    if( !empty($product_categories) ){
        echo '<ul class="sidebar-nav">';
        $i = 0;
        foreach ($product_categories as $key => $category) {


            if( $category->term_id == $selective_category[$i] ){
            //print_r($category);
            echo '<li class="sidebar-nav-item has-sub-nav">';
            echo '<a href="'. get_term_link($category) .'" class="sidebar-nav-link"><span class="icon"><i class="fas fa-angle-double-right"></i></span>';
            echo $category->name;
            echo '</a>';
            echo '<button class="sidebar-nav-toggle"><i class="fas fa-plus"></i></button>';
            echo '<ul class="sidebar-sub-menu">';

            $term_id = $category->term_id;
            $taxonomy_name = 'product_cat';
            $termchildren = get_term_children( $term_id, $taxonomy_name );
            
            foreach ( $termchildren as $child ) {
                $term = get_term_by( 'id', $child, $taxonomy_name ); 
                //print_r($term);
            echo '<li><a href="'. get_term_link( $child ) .'">';
            echo $term->name;
            echo '</a></li>';

             }
            echo '</ul>';
            echo '</li>';
            $i++;
        } }
        echo '</ul>';
    }

    
}



/* ------------------for desktop view-------------------------  */

/*
 * Shortcode for WooCommerce Cart Icon for Menu Item
 */
add_shortcode ('woocommerce_cart_icon', 'woo_cart_icon' );
function woo_cart_icon() {
    ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set variable for Cart URL
        $cart_total = WC()->cart->get_cart_total();
  
        echo '<li><a class="menu-item cart-contents" href="'.$cart_url.'" title="Cart">';
        
        if ( $cart_count > 0 ) {
        
            echo '<span class="cart-contents-count">Cart('.$cart_count.')/'.$cart_total.'</span>';
       
        }
        
        echo '</a></li>';
        
            
    return ob_get_clean();
 
}

/*
 * Filter with AJAX When Cart Contents Update
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_icon_count' );
function woo_cart_icon_count( $fragments ) {
 
    ob_start();
    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
    $cart_total = WC()->cart->get_cart_total();
    //print_r($cart_total);
    
    
    echo '<a class="cart-contents menu-item" href="'.$cart_url.'" title="View Cart">';
    
    if ( $cart_count > 0 ) {
        
        echo '<span class="cart-contents-count">Cart('.$cart_count.')/'.$cart_total.'</span>';
                    
    }
    echo '</a>';
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}

/*
 * Append Cart Icon Particular Menu
 */
add_filter('wp_nav_menu_items','woo_cart_icon_menu', 10, 2);
function woo_cart_icon_menu($menu, $args) {

    if($args->theme_location == 'primary') { // 'primary' is my menu ID
        $cart = do_shortcode("[woocommerce_cart_icon]");
        return $cart . $menu;
    }

    return $menu;
}

/* ------------------for mobile view-------------------------  */

add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but() {
    ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>
        <li><a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
        <?php
        if ( $cart_count > 0 ) {
       ?>
       <ul class="cart-section d-lg-none d-block">
            <li><span class="cart-icon"><i class="fas fa-shopping-cart"></i></span><span class="badge"><?php echo $cart_count; ?></span></li>
        </ul>

           <!--  <span class="cart-contents-count"><?php // echo $cart_count; ?></span> -->
        <?php
        }
        ?>
        </a></li>
        <?php
            
    return ob_get_clean();
 
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_but_count' );
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count( $fragments ) {
 
    ob_start();
    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
    
    ?>
    <a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
    <?php
    if ( $cart_count > 0 ) {
        ?>
        <ul class="cart-section d-lg-none d-block">
            <li><span class="cart-icon"><i class="fas fa-shopping-cart"></i></span><span class="badge"><?php echo $cart_count; ?></span></li>
        </ul>
        <!-- <span class="cart-contents-count"><?php // echo $cart_count; ?></span> -->
        <?php            
    }
        ?></a>
    <?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}





/* front page custom add to cart */


// function ql_woocommerce_ajax_add_to_cart_js() {
//     if (function_exists('is_product') && is_product()) {  
//        wp_enqueue_script('custom_script', get_bloginfo('stylesheet_directory') . '/assets/js/ajax_add_to_cart.js', array('jquery'),'1.0' );
//     }
// }

// add_action('wp_enqueue_scripts', 'ql_woocommerce_ajax_add_to_cart_js');


// add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart'); 
// add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');          
// function ql_woocommerce_ajax_add_to_cart() {  
//     $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
//     $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
//     $variation_id = absint($_POST['variation_id']);
//     $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
//     $product_status = get_post_status($product_id); 
//     if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) { 
//         do_action('ql_woocommerce_ajax_added_to_cart', $product_id);
//             if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) { 
//                 wc_add_to_cart_message(array($product_id => $quantity), true); 
//             } 
//             WC_AJAX :: get_refreshed_fragments(); 
//             } else { 
//                 $data = array( 
//                     'error' => true,
//                     'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));
//                 echo wp_send_json($data);
//             }
//             wp_die();
//         }
