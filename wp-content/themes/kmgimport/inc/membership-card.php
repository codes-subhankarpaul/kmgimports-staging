<?php

/* Gold Membership Card status on User meta */
add_action('show_user_profile', 'usermeta_goldmembership_edit_action');
add_action('edit_user_profile', 'usermeta_goldmembership_edit_action');
function usermeta_goldmembership_edit_action($user) {
  $gold_checked = (isset($user->gold_membership) && $user->gold_membership) ? ' checked="checked"' : '';
?>
    <h3>Membership Cards</h3>
    <div class="gold_membership_div">
        <input name="gold_membership" type="checkbox" id="gold_membership" value="1"<?php echo $gold_checked; ?>>
        <label for="gold_membership">Gold Membership</label>
    </div>
<?php 
}
add_action('personal_options_update', 'usermeta_goldmembership_update_action');
add_action('edit_user_profile_update', 'usermeta_goldmembership_update_action');
function usermeta_goldmembership_update_action($user_id) {
    update_user_meta($user_id, 'gold_membership', isset($_POST['gold_membership']));
    if(isset($_POST['gold_membership']) && $_POST['gold_membership'] == '1')
    {
        $user_info = get_userdata($user_id);
        $user_email = $user_info->user_email;
        $to = $user_email;
        $headers = 'Content-type: text/html; charset=utf-8'."\r\n".'From: KMG Import <mailbox@kmg-import.com>'."\r\n";
        $subject = 'Congratulations! Gold Membership Card activated.';
        $body = '
        <!doctype html>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Gold Membership Card - KMG Import</title>
        </head>
        <body style="font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif">
        <table style="width: 600px;margin: 0 auto;">
        <tbody>
        <tr>
        <th style="border-bottom: 2px solid #f1f1f1;padding-bottom: 20px;"><br><br><img src="https://www.kmg-import.com/wp-content/uploads/2019/04/kmg-logo.jpg" alt="" style="height: 60px;"></th>
        </tr>
        <tr>
        <td style="text-align: center;"><img style="height: 170px;" src="https://www.kmg-import.com/wp-content/uploads/2022/08/Golden-loyalty-card-1-510x322.png" alt=""></td>
        </tr>
        <tr>
        <td>Lorem Ipsum,<br><br>Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet .<br><br>Lorem Ipsum Dolor Ismat!</td>
        </tr>
        <tr>
        <td><br><br><a style="background-color: #e32330;width: 300px;display: block;text-align: center;color: #fff;text-transform: uppercase;text-decoration: navajowhite;padding: 10px 0;margin: 0 auto;" href="javascript:void(0)">Thank You</a></td>
        </tr>
        </tbody>
        </table>
        </body>
        </html>';
        wp_mail( $to, $subject, $body, $headers );
    }
}

/* Silver Membership Card status on User meta */
add_action('show_user_profile', 'usermeta_silvermembership_edit_action');
add_action('edit_user_profile', 'usermeta_silvermembership_edit_action');
function usermeta_silvermembership_edit_action($user) {
  $silver_checked = (isset($user->silver_membership) && $user->silver_membership) ? ' checked="checked"' : '';
?>
    <div class="silver_membership_div">
        <input name="silver_membership" type="checkbox" id="silver_membership" value="1"<?php echo $silver_checked; ?>>
        <label for="silver_membership">Silver Membership</label>
    </div>
<?php 
}
add_action('personal_options_update', 'usermeta_silvermembership_update_action');
add_action('edit_user_profile_update', 'usermeta_silvermembership_update_action');
function usermeta_silvermembership_update_action($user_id) {
    update_user_meta($user_id, 'silver_membership', isset($_POST['silver_membership']));
    if(isset($_POST['silver_membership']) && $_POST['silver_membership'] == '1')
    {
        $user_info = get_userdata($user_id);
        $user_email = $user_info->user_email;
        $to = $user_email;
        $headers = 'Content-type: text/html; charset=utf-8'."\r\n".'From: KMG Import <mailbox@kmg-import.com>'."\r\n";
        $subject = 'Congratulations! Silver Membership Card activated.';
        $body = '
        <!doctype html>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Silver Membership Card - KMG Import</title>
        </head>
        <body style="font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif">
        <table style="width: 600px;margin: 0 auto;">
        <tbody>
        <tr>
        <th style="border-bottom: 2px solid #f1f1f1;padding-bottom: 20px;"><br><br><img src="https://www.kmg-import.com/wp-content/uploads/2019/04/kmg-logo.jpg" alt="" style="height: 60px;"></th>
        </tr>
        <tr>
        <td style="text-align: center;"><img style="height: 170px;" src="https://www.kmg-import.com/wp-content/uploads/2022/08/loyalty-card-2-510x322.png" alt=""></td>
        </tr>
        <tr>
        <td>Lorem Ipsum,<br><br>Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet Lorem Ipsum Dolor Ismat Set Amet .<br><br>Lorem Ipsum Dolor Ismat!</td>
        </tr>
        <tr>
        <td><br><br><a style="background-color: #e32330;width: 300px;display: block;text-align: center;color: #fff;text-transform: uppercase;text-decoration: navajowhite;padding: 10px 0;margin: 0 auto;" href="javascript:void(0)">Thank You</a></td>
        </tr>
        </tbody>
        </table>
        </body>
        </html>';
        wp_mail( $to, $subject, $body, $headers );
    }
}


/* Clear cart when Gold Membership Card is added */
add_filter( 'woocommerce_add_to_cart_validation', 'remove_cart_item_before_add_to_cart_goldcard', 20, 3 );
function remove_cart_item_before_add_to_cart_goldcard( $passed, $product_id, $quantity ) {
    $goldcard_product = array(38245);
    if($product_id == 38245)
    {
        if( ! WC()->cart->is_empty() )
            WC()->cart->empty_cart();
    }
    else
    {
        if( ! WC()->cart->is_empty() )
        {
            foreach(WC()->cart->get_cart() as $cart_item ) {
                $cart_item_ids = array($cart_item['product_id'], $cart_item['variation_id']);
                if( ( is_array($goldcard_product) && array_intersect($goldcard_product, $cart_item_ids) )
                || ( !is_array($goldcard_product) && in_array($goldcard_product, $cart_item_ids) ) ) 
                    WC()->cart->empty_cart();
            }
        }
    }
    return $passed;
}

/* Clear cart when Silver Membership Card is added */
add_filter( 'woocommerce_add_to_cart_validation', 'remove_cart_item_before_add_to_cart_silvercard', 20, 3 );
function remove_cart_item_before_add_to_cart_silvercard( $passed, $product_id, $quantity ) {
    $goldcard_product = array(38264);
    if($product_id == 38264)
    {
        if( ! WC()->cart->is_empty() )
            WC()->cart->empty_cart();
    }
    else
    {
        if( ! WC()->cart->is_empty() )
        {
            foreach(WC()->cart->get_cart() as $cart_item ) {
                $cart_item_ids = array($cart_item['product_id'], $cart_item['variation_id']);
                if( ( is_array($goldcard_product) && array_intersect($goldcard_product, $cart_item_ids) )
                || ( !is_array($goldcard_product) && in_array($goldcard_product, $cart_item_ids) ) ) 
                    WC()->cart->empty_cart();
            }
        }
    }
    return $passed;
}

/* Remove add to cart button if Gold card is already bought */
add_action('woocommerce_single_product_summary', 'remove_goldmembership_add_cart_button', 1 );
function remove_goldmembership_add_cart_button() {
    $gold_product = 38245;
    $user_id = get_current_user_id();
    if ( get_the_id() == $gold_product ) {

        $gold_user_meta = get_user_meta($user_id, 'gold_membership', true);
        $silver_user_meta = get_user_meta($user_id, 'silver_membership', true);
        if($gold_user_meta == 1 || $silver_user_meta == 1)
        {
            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
        }
    }
}

/* Remove add to cart button if Silver card is already bought */
add_action('woocommerce_single_product_summary', 'remove_silvermembership_add_cart_button', 1 );
function remove_silvermembership_add_cart_button() {
    $silver_product = 38264;
    $user_id = get_current_user_id();
    if ( get_the_id() == $silver_product ) {
        $gold_user_meta = get_user_meta($user_id, 'gold_membership', true);
        $silver_user_meta = get_user_meta($user_id, 'silver_membership', true);
        if($gold_user_meta ==1 || $silver_user_meta == 1)
        {
            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
        }
    }
}


$user_id = get_current_user_id();
$gold_user_meta = get_user_meta($user_id, 'gold_membership', true);
$silver_user_meta = get_user_meta($user_id, 'silver_membership', true);
if($silver_user_meta == 1)
{
    add_action( 'woocommerce_review_order_before_payment', 'bbloomer_checkout_radio_choice_silver' );
}
else if($gold_user_meta == 1)
{
    add_action( 'woocommerce_review_order_before_payment', 'bbloomer_checkout_radio_choice' );
}


function bbloomer_checkout_radio_choice_silver() {
   $args = array(
   'type' => 'radio',
   'class' => array( 'form-row-wide', 'update_totals_on_change' ),
   'options' => array(
      '0' => 'Do Not Redeem',
      '10' => 'Reedeem Silver Membership',
   ),
   'default' => 0
   );

   $customer_silver_orders = get_posts( array(
    'numberposts' => -1,
    'meta_key'    => '_customer_user',
    'meta_value'  => get_current_user_id(),
    'post_type'   => wc_get_order_types(),
    'post_status' => array_keys( wc_get_order_statuses() ),
) );


    $monthly_silverusage = 'No';
    $monthly_silver_orders = array();
    foreach ($customer_silver_orders as $eachOrder) {
        if( (date("m-Y", strtotime($eachOrder->post_date)) == date("m-Y")) && ($eachOrder->post_status == 'wc-completed') )
        {
            $monthly_silver_orders[] = [
                'id'    => $eachOrder->ID,
                'date'  => $eachOrder->post_date
            ];

            $silver_order = wc_get_order( $eachOrder->ID );
            foreach( $silver_order->get_coupon_codes() as $coupon_code ) {
                $coupon = new WC_Coupon($coupon_code);

                if($coupon_code == 'silvermember')
                {
                    $monthly_silverusage = 'Yes';
                }
            }
        }
    }
    $user_id = get_current_user_id();
    $silver_user_meta = get_user_meta($user_id, 'silver_membership', true);
    if($monthly_silverusage !="Yes" && $silver_user_meta == 1){
       echo '<div id="checkout-radio">';
       woocommerce_form_field( 'radio_choice_silver', $args, $chosen );
       echo '</div>';
    }
}

function bbloomer_checkout_radio_choice() {
   $args = array(
   'type' => 'radio',
   'class' => array( 'form-row-wide', 'update_totals_on_change' ),
   'options' => array(
      '0' => 'Do Not Redeem',
      '10' => 'Reedeem Gold Membership',
   ),
   'default' => 0
   );

   $customer_orders = get_posts( array(
    'numberposts' => -1,
    'meta_key'    => '_customer_user',
    'meta_value'  => get_current_user_id(),
    'post_type'   => wc_get_order_types(),
    'post_status' => array_keys( wc_get_order_statuses() ),
) );


    $monthly_goldusage = 'No';
    $monthly_orders = array();
    foreach ($customer_orders as $eachOrder) {
        if( (date("m-Y", strtotime($eachOrder->post_date)) == date("m-Y")) && ($eachOrder->post_status == 'wc-completed') )
        {
            $monthly_orders[] = [
                'id'    => $eachOrder->ID,
                'date'  => $eachOrder->post_date
            ];

            $order = wc_get_order( $eachOrder->ID );
            foreach( $order->get_coupon_codes() as $coupon_code ) {
                $coupon = new WC_Coupon($coupon_code);

                if($coupon_code == 'goldmember')
                {
                    $monthly_goldusage = 'Yes';
                }
            }
        }
    }
    $user_id = get_current_user_id();
    $user_meta = get_user_meta($user_id, 'gold_membership', true);
    if($monthly_goldusage !="Yes" && $user_meta == 1){
       echo '<div id="checkout-radio">';
       woocommerce_form_field( 'radio_choice', $args, $chosen );
       echo '</div>';
    }
}


function discount_member() {
    global $woocommerce;
    $coupon_code = 'goldmember';
    $ret = WC()->cart->apply_coupon( $coupon_code );
    print_r($ret);
    exit();
}

add_action('wp_ajax_discount_member', 'discount_member');
add_action('wp_ajax_nopriv_discount_member', 'discount_member');



function discount_member_silver() {
    global $woocommerce;
    $coupon_code = 'silvermember';
    $rets = WC()->cart->apply_coupon( $coupon_code );
    print_r($rets);
    exit();
}

add_action('wp_ajax_discount_member_silver', 'discount_member_silver');
add_action('wp_ajax_nopriv_discount_member_silver', 'discount_member_silver');