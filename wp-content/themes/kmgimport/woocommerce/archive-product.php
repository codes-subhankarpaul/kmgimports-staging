<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">


	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	// do_action( 'woocommerce_archive_description' );
	?>
</header>

<section class="inner-products-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="inner-products-sidebar-wrap">
					<div class="inner-products-sidebar-nav m-0">
						<div class="inner-products-sidebar-heading">
							<h3>Products Categories</h3>
						</div>

						<?php 
                                    do_action( 'wporg_selective_category_filter' );
					        //print_r($selective_category);

					        ?>
						<!-- <ul class="sidebar-nav">

							<li class="sidebar-nav-item has-sub-nav">
								<a href="javascript:void(0)" class="sidebar-nav-link">
									<span class="icon"><i class="fas fa-angle-double-right"></i></span>
									Accessories
								</a>
								<button class="sidebar-nav-toggle"><i class="fas fa-plus"></i></button>
								<ul class="sidebar-sub-menu">
									<li><a href="javascript:void(0)">Batteries</a></li>
									<li><a href="javascript:void(0)">Bottles</a></li>
									<li><a href="javascript:void(0)">Building Necessities</a></li>
									<li><a href="javascript:void(0)">Chargers</a></li>
									<li><a href="javascript:void(0)">Drip Tips & Caps</a></li>
									<li><a href="javascript:void(0)">Fidget Spinners</a></li>
									<li><a href="javascript:void(0)">Miscellaneous Accessories</a></li>
									<li><a href="javascript:void(0)">Replacement Coils and Pods</a></li>
									<li><a href="javascript:void(0)">Wholesale Replacement Glass</a></li>
								</ul>
							</li>
							<li class="sidebar-nav-item has-sub-nav">
								<a href="javascript:void(0)" class="sidebar-nav-link">
									<span class="icon"><i class="fas fa-angle-double-right"></i></span>
									Atomizers and Tanks
								</a>
								<button class="sidebar-nav-toggle"><i class="fas fa-plus"></i></button>
								<ul class="sidebar-sub-menu">
									<li><a href="javascript:void(0)">Batteries</a></li>
									<li><a href="javascript:void(0)">Bottles</a></li>
									<li><a href="javascript:void(0)">Building Necessities</a></li>
									<li><a href="javascript:void(0)">Chargers</a></li>
									<li><a href="javascript:void(0)">Drip Tips & Caps</a></li>
									<li><a href="javascript:void(0)">Fidget Spinners</a></li>
									<li><a href="javascript:void(0)">Miscellaneous Accessories</a></li>
									<li><a href="javascript:void(0)">Replacement Coils and Pods</a></li>
									<li><a href="javascript:void(0)">Wholesale Replacement Glass</a></li>
								</ul>
							</li>
							<li class="sidebar-nav-item">
								<a href="javascript:void(0)" class="sidebar-nav-link">
									<span class="icon"><i class="fas fa-angle-double-right"></i></span>
									Blowout
								</a>
							</li>
							<li class="sidebar-nav-item has-sub-nav">
								<a href="javascript:void(0)" class="sidebar-nav-link">
									<span class="icon"><i class="fas fa-angle-double-right"></i></span>
									Brands
								</a>
								<button class="sidebar-nav-toggle"><i class="fas fa-plus"></i></button>
								<ul class="sidebar-sub-menu">
									<li><a href="javascript:void(0)">Batteries</a></li>
									<li><a href="javascript:void(0)">Bottles</a></li>
									<li><a href="javascript:void(0)">Building Necessities</a></li>
									<li><a href="javascript:void(0)">Chargers</a></li>
									<li><a href="javascript:void(0)">Drip Tips & Caps</a></li>
									<li><a href="javascript:void(0)">Fidget Spinners</a></li>
									<li><a href="javascript:void(0)">Miscellaneous Accessories</a></li>
									<li><a href="javascript:void(0)">Replacement Coils and Pods</a></li>
									<li><a href="javascript:void(0)">Wholesale Replacement Glass</a></li>
								</ul>
							</li>
							<li class="sidebar-nav-item has-sub-nav">
								<a href="javascript:void(0)" class="sidebar-nav-link">
									<span class="icon"><i class="fas fa-angle-double-right"></i></span>
									Devices
								</a>
								<button class="sidebar-nav-toggle"><i class="fas fa-plus"></i></button>
								<ul class="sidebar-sub-menu">
									<li><a href="javascript:void(0)">Batteries</a></li>
									<li><a href="javascript:void(0)">Bottles</a></li>
									<li><a href="javascript:void(0)">Building Necessities</a></li>
									<li><a href="javascript:void(0)">Chargers</a></li>
									<li><a href="javascript:void(0)">Drip Tips & Caps</a></li>
									<li><a href="javascript:void(0)">Fidget Spinners</a></li>
									<li><a href="javascript:void(0)">Miscellaneous Accessories</a></li>
									<li><a href="javascript:void(0)">Replacement Coils and Pods</a></li>
									<li><a href="javascript:void(0)">Wholesale Replacement Glass</a></li>
								</ul>
							</li>
						</ul> -->
					</div>
					<div class="inner-products-sidebar-coil m-0 d-flex align-items-center">
						<?php
					/**
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked wpfix_shop_coil_html - 10
					 */
					do_action( 'wporg_custom_shop_coils_links' );
				?>
					</div>
					<div class="inner-products-sidebar-cta m-0">
						<?php
					/**
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked wpfix_shop_coil_html - 10
					 */
					do_action( 'wp_custom_talk_to_vaping_wholesale_expert' );
				?>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="inner-products-top-nav">
					<div class="inner-products-top-nav-wrap d-flex align-items-center">
						<?php
						if ( woocommerce_product_loop() ) {

							/**
							 * Hook: woocommerce_before_shop_loop.
							 *
							 * @hooked woocommerce_output_all_notices - 10
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
						    ?>

					</div>
				</div>
				<div class="newest-items-section ipd-items-section">

              <div class="product-items-wrap product-items-v-16">
                <!-- <div class="row justify-content-between"> -->

                	<?php
					    $i = 0;
					    $len = count($product);
					    ?>

					<?php

					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();

							/**
							 * Hook: woocommerce_shop_loop.
							 */
							do_action( 'woocommerce_shop_loop' );

							wc_get_template_part( 'content', 'product' );
						}
					}

					woocommerce_product_loop_end();

					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}

				/**
				 * Hook: woocommerce_after_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );

				/**
				 * Hook: woocommerce_sidebar.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );


				?>
				<!-- </div> -->
                
              </div>
          </div>
			</div>
		</div>
	</div>
</section>
<?php


get_footer( 'shop' );