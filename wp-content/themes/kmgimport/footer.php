<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage kmgimport
 */

?>
<section class="contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 pe-0">
                <div class="contact-us-left">
                    <div class="contact-us-left-content">
                        <div class="custom-heading cus-no-border">
                            <h3 class="product-section-heading">CONTACT US</h3>
                        </div>
                        <ul>
                            <li class="icons-content">
                                <a href="<?php echo get_theme_mod('kmg_address_link'); ?>">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <?php echo get_theme_mod('kmg_address'); ?>
                                </a>
                            </li>
                            <li class="icons-content">
                                <a href="mailto:<?php echo get_theme_mod('email_address'); ?>">
                                    <span><i class="fas fa-envelope"></i></span>
                                    <?php echo get_theme_mod('email_address'); ?>
                                </a>
                            </li>
                            <li class="icons-content">
                                <a href="tel:<?php echo get_theme_mod('primary_contact_number'); ?>">
                                    <span><i class="fas fa-phone-volume"></i></span>
                                    <?php echo get_theme_mod('primary_contact_number'); ?>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-0">
                <div class="contact-us-right">
                    <div class="contact-us-right-logo">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer-logo.png" alt="footer-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
	<div class="footer-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="footer-1">
						<div class="footer-header">
							<h3>Customer Service</h3>
						</div>
						<?php
							wp_nav_menu( array(
								'menu'          => 'Customer Service',
								'depth'         => 3,
								'container'     => false,
								'menu_class'    => 'footer-1-text',
						        'link_before'	=> '<span><i class="fas fa-angle-double-right"></i></span>',
							) );
                        ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="footer-2">
						<div class="footer-header">
							<h3>Quick Link</h3>
						</div>
						<?php
							wp_nav_menu( array(
								'menu'          => 'Quick Links',
								'depth'         => 3,
								'container'     => false,
								'menu_class'    => 'footer-2-text',
						        'link_before'	=> '<span><i class="fas fa-angle-double-right"></i></span>',
							) );
                        ?>
					</div>
				</div>
				<div class="col-lg-4  col-md-12 col-sm-12">
					<div class="footer-3 ms-xl-5">
						<div class="footer-header">
							<h3>Find us on Google Maps</h3>
						</div>
						<?php echo get_theme_mod('google_map_iframe'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 align-self-center justify-content-start">
						<div class="copyright-left">
							<h4>Copyright <?php echo date('Y', strtotime('now')); ?> © <a href="<?php echo site_url(); ?>">KMG Imports</a></h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 align-self-center justify-content-end">
						<div class="copyright-right">
							<ul class="copyright-icons">
								<li>
									<a href="<?php echo get_theme_mod('facebook_url'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="<?php echo get_theme_mod('instagram_url'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="<?php echo get_theme_mod('twitter_url'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="mailto:<?php echo get_theme_mod('email_address'); ?>"><i class="fas fa-envelope"></i></a>
								</li>
								<li>
									<a href="<?php echo get_theme_mod('youtube_url'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Modal -->
<div class="modal qv-modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered qv-modal-dialog">
        <div class="modal-content qv-modal-content">
            <div class="container" id="product_quickview_content">
                <!-- <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="modal-body qv-modal-body">
                            <div id="quick-view-owl" class="owl-carousel owl-theme">
                                <div class="item qv-product-image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/newest-items1.jpg" alt="">
                                </div>
                                <div class="item qv-product-image">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ni_hover1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="qv-modal-right">
                            <div class="modal-header qv-modal-close-wrap">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="qv-modal-heading mb-md-3 mb-2">
                                <h4>ASPIRE BP80 REPLACEMENT Pod</h4>
                            </div>
                            <div class="qv-modal-price mb-md-3 mb-2">
                                <h5>$2.36</h5>
                            </div>
                            <div class="qv-modal-desc mb-md-3 mb-2">
                                <p class="demo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus soluta earum eum rerum, non sint
                                    excepturi similique accusamus id molestias, praesentium tempore eaque odit itaque magnam, cumque enim
                                    possimus dolorum?
                                </p>
                            </div>
                            <div class="qv-modal-add">
                                <form action="">
                                    <input type="number" class="quantity" step="1" min="1" max="10" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                                    <input type="button" class="custom-button" value="Add to cart">
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function() {
		jQuery(".product-button .pr-button, .product-quick-action-list li .pr-button").click(function() {
			var product_id = jQuery(this).attr('product-id');
			console.log(product_id);
			jQuery.ajax({
				url: '<?php echo admin_url('admin-ajax.php');?>',
				dataType: "json",
				data: {
						'action':'product_quickview',
						product_id: product_id,
					},
				success:function(result) {
					console.log(result);
					jQuery( "#product_quickview_content" ).html( result.html );
				}           
			});
		});
	});
	jQuery(window).on('load', function() {
		jQuery(".quickview-options-text").click(function() {
			alert('hello');
		});
	});

	jQuery(window).load(function() {
		jQuery("#quickview-product-variations").change(function() {
			var selectedCountry = jQuery(this).val();
        	alert("You have selected the country - " + selectedCountry);
			alert(jQuery(this).text);
			var var_id = jQuery(this).attr("id");
			alert(jQuery(this).attr("product-id"))
			var product_id = jQuery(this).attr("product-id");
			var variation_name = jQuery(this).attr('variation');
			var variation_id = jQuery(this).attr('variation-id');
			var sku_id = jQuery(this).attr('sku-id');
			var regular_price = jQuery(this).attr('regular-price');
			alert("id: "+var_id+" variation name: "+variation_name+" variation id: "+variation_id+" sku id: "+sku_id+" regular price: "+regular_price+" product id: "+product_id);
		});
	});
</script>

</body>
</html>