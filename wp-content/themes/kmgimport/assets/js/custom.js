// JavaScript Document
jQuery('#quick-view-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
});
jQuery('#slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
});

jQuery( document ).ready(function() {
    jQuery(".navbar-nav .menu-item-has-children").children(".nav-link").removeAttr("data-bs-toggle").removeAttr("aria-haspopup");
});

jQuery(document).ready(function(){
    jQuery(window).scroll(function() {
       if(jQuery(this).scrollTop() > 225 ) {
       jQuery("header.custom-header").addClass("fixed-top");
      } else {
       jQuery("header.custom-header").removeClass("fixed-top");
      }
    });

    jQuery('.pr-button').click(function(){
        const productName = jQuery(this).parent().siblings(".product-title").find('h4').html();
        const productPrice = jQuery(this).parent().siblings(".product-price").find('h5').html();
        jQuery('.qv-modal-heading h4').html(productName);
        jQuery('.qv-modal-price h5').html(productPrice);
    });
});

// product inner
jQuery( document ).ready(function() {
    jQuery('.product-grid').click( function(){ 
        let gridVal = jQuery(this).attr("value");
        // jQuery('.showing-select').val(gridVal).trigger('change');
        jQuery(".product-items-wrap").removeClass(function (index, className){return (className.match (/(^|\s)product-items-v-\S+/g) || []).join(' ');}).addClass(`product-items-v-${gridVal}`);
    });
    jQuery('.showing-select').change(function(){
        let showingVal = jQuery(".showing-select").val()
        let current = 0,
        numToShow = jQuery(".showing-select").val(),
        colDiv = jQuery('.product-items-wrap .custom-col-5'),
        numOfcolDiv = jQuery('.product-items-wrap .custom-col-5').children().length
        let startIndex = current * numToShow;   
        if (startIndex > numOfcolDiv) {         
            startIndex = 0;
            current = 0;
        } else if (current < 0) {               
            current = Math.floor(numOfcolDiv / numToShow);
            startIndex = current * numToShow;
        } else {
            colDiv.hide()                                   
                .slice(startIndex, startIndex + numToShow) 
                .show();                                   
        }
    });
    // sb 24-09-22
    jQuery('.woocommerce .products .product').each(function(){

        jQuery(this).find(".product-item-box > div").slice(3,7).wrapAll('<div class="product-content-wrap"></div')
    })
    // sb 24-09-22
});

jQuery( document ).ready(function() {
    jQuery(".sidebar-nav-toggle").click(function() {
        jQuery(this).siblings(".sidebar-sub-menu").slideToggle(400)
        jQuery(this).children().toggleClass("fa-plus fa-minus")
    })
 
        if (window.matchMedia('(max-width: 991.98px)').matches) {
            jQuery(".product-items-wrap").removeClass(function (index, className){return (className.match (/(^|\s)product-items-v-\S+/g) || []).join(' ');}).addClass("product-items-v-12");
        } else {
            jQuery(".product-items-wrap").trigger("reset")
        }
});


jQuery( document ).ready(function() {
      jQuery(".ipd-tabs-wrap ul").removeClass('tabs');
      jQuery(".ipd-tabs-wrap ul").addClass('nav nav-tabs ipd-tabs');

      //jQuery(".ipd-tabs-wrap ul li").removeClass('description_tab');
      jQuery(".ipd-tabs-wrap ul li").addClass('nav-item ipd-nav-item');

      jQuery(".ipd-tabs-wrap ul li a").addClass('nav-link');


      jQuery('.ipd-heading h2').replaceWith(function () {
          return "<h4>" + jQuery(this).html() + "</h4>";
        });

      jQuery(".ipd-heading ul").removeClass('nav nav-tabs ipd-tabs');
      jQuery(".ipd-heading ul").addClass('ipd-tab-list');

      jQuery('ul.ipd-tab-list li').prepend('<span class="icon"><i class="far fa-check-square"></i></span>');


      jQuery('.ipd-heading').each(function(i, v) {
            jQuery(v).contents().eq(1).wrap('<div class="ipd-desc"><p class="demo"></p></div>')
        });

      jQuery('.woocommerce-ordering').wrapAll('<div class="sort"></div>');
      jQuery('.woocommerce-ordering .orderby').addClass('form-select form-select-sm');

      jQuery('.quantity').wrapAll('<div class="quantity d-flex m-0></div>');
      jQuery('.quantity').addClass('qty');
      jQuery('quantity').prepend('<span class="icon"><i class="far fa-check-square"></i></span>');

      
      
      jQuery('.ipd-desc form').wrapAll('<div class="ipd-cta d-flex align-items-center"></div>');
      jQuery('.ipd-desc form').addClass('d-flex align-items-center m-0');
      jQuery('.ipd-desc .ipd-cta').append('<div class="ipd-wishlist m-0"><span class="demo"><i class="fas fa-heart"></i></span></div>');
      // jQuery('.ipd-desc .ipd-cta').each(function(i, v) {
      //       jQuery(v).contents().eq(1).wrap('<div class="ipd-wishlist m-0"><span class="demo"><i class="fas fa-heart"></i></span></div>')
      //   });


      jQuery('.single_variation_wrap .woocommerce-variation-add-to-cart').addClass('d-flex align-items-center');
      jQuery('.single_add_to_cart_button').removeClass('button alt');
      jQuery('.single_add_to_cart_button').addClass('ipd-card-btn custom-button m-0');
      jQuery('.single_add_to_cart_button').prepend('<span class="demo"><i class="fas fa-cart-plus"></i></span>');


      jQuery('.ipd-cta form').append('<div class="demo"></div>');


      jQuery('.woocommerce-pagination').wrapAll('<div class="product-page-pagination mt-3"></div>');
      jQuery('.woocommerce-pagination ul').addClass('pagination justify-content-center');
      jQuery('.woocommerce-pagination ul li').addClass('page-item m-0');
      jQuery('.woocommerce-pagination ul li a').addClass('page-link');


      jQuery('.ipd-items-section .product-items-wrap ul.products').addClass('row justify-content-between');
      jQuery('.ipd-items-section .product-items-wrap ul li.product').addClass('custom-col-5');


      jQuery('.ipd-items-section ul').removeClass('justify-content-between');


      //jQuery('.cus-all-css .cus-block p').children().wrapAll('<div class="term-condition-part"></div>');
      
      jQuery('.blog-content div.pagination ul.cus-page a.page-numbers').addClass('page-link');
      //jQuery('.blog-content div.pagination ul.cus-page a.page-numbers').addClass('page-item');
      //jQuery('.blog-content div.pagination ul.cus-page a.page-numbers').wrapAll('<div class="term-condition-part"></div>');



});

jQuery(document).ready(function () {
	jQuery("#pum-39838 .pum-content button").addClass('custom-button');
});


