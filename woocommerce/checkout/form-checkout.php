<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
// if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
//  echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
//  return;
// }

?>
<!-- <div class="data-bg" data-bg="theme-dark"></div> -->
<div class="data-bg" data-bg="theme-light-bg"></div>
<div class="checkout-container container">


    <!-- start: cart_nav in_page -->
    <div class="cart_nav in_page">

        <div class="btn payment-back flex" data-animatea="animated fadeInUp">
            <a href="<?php echo get_option('home'); ?>/cart" class="button button-secondary" target="">
                <span class="hvr-back"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 7.5L9.72414 0.999998M2 7.5L9.72414 14M2 7.5L18 7.5" stroke="#FF5F00" stroke-width="2"></path>
                    </svg>
                </span>
                back
            </a>
        </div>
        
        <ul>
            <li class="cart_del_circle">
                <div class="circle"><span>1</span></div>
            </li>
            <li class="cart_del_text"><a href="<?php echo get_option('home'); ?>/cart">Cart & Delivery</a></li>
            <li>
                <?php include (TEMPLATEPATH . '/images/vouchers/svg/chevron_right.svg'); ?>
            </li>
            <li class="cart_pay_circle">
                <div class="circle"><span>2</span></div>
            </li>
            <li class="cart_pay_text">Payment</li>
        </ul>
    </div>
    <div class="mobile_heading_cart">
        <h2>your cart</h2>
    </div>
    <div class="mobile_cart_info">
        <div class="items"><?php echo WC()->cart->get_cart_contents_count(); ?> Items</div>
        <div class="value"><?php echo WC()->cart->get_total();  ?></div>
    </div>
    <!-- end: cart_nav in_page -->





    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
        <h1>PAYMENT</h1>
        <div class="checkout-details">
            <!-- start: left-col -->
            <div class="left-col">
                <div class="section">
                    <!--  <h2>Billing Details</h2> -->
                    <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                    <div class="col2-set" id="customer_details">
                        <div class="col-1">
                            <?php //do_action( 'woocommerce_checkout_billing' ); ?>
                            <div class="woocommerce-billing-fields">

                                <h3>Order Confirmation Details</h3>
                                <p>We need to capture your details so we can share the confirmation of your purchase with you</p>
                                <div class="billinfo">Personal Details</div>
                                <div class="frm_forms">
                                    <div class="flex_row">
                                        <div class="frm_none_container frm_form_field" id="billing_first_name_field" data-priority="10">
                                            <label for="billing_first_name" class="">First name</label>
                                            <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="First Name" value="" autocomplete="given-name">
                                        </div>
                                        <div class="frm_none_container frm_form_field" id="billing_last_name_field" data-priority="20">
                                            <label for="billing_last_name" class="">Last name</label>
                                            <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Last Name" value="" autocomplete="family-name">
                                        </div>
                                    </div>

                                    <div class="billinfo lower">Contact Details</div>
                                    <div class="cart-page">
                                        <div class="left-cart">
                                            <div class="cart_radios on_checkoutpage">
                                                <div class="delivery-option active">
                                                    <input type="radio" id="delivery_email" name="main_delivery_option" value="Email" checked="">
                                                    <label for="delivery_email">Email</label>
                                                    <input type="radio" id="delivery_sms" name="main_delivery_option" value="SMS">
                                                    <label for="delivery_sms">SMS</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex_row">
                                    <div class="frm_none_container frm_form_field" id="billing_email_field" data-priority="">
                                        <label for="billing_email" class="">Email Address</label>
                                        <input type="text" class="input-text " name="billing_email" id="billing_email" placeholder="Email Address" value="">
                                    </div>
                                    <div class="frm_none_container frm_form_field" id="billing_phone_field" data-priority="" style="display: none">
                                        <label for="billing_phone" class="">Phone</label>
                                        <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Phone" value="">
                                    </div>
                                     </div>
                                    <p class="form-row form-row-wide" id="billing_peach_field" data-priority="">
                                        <span class="woocommerce-input-wrapper"><input type="hidden" class="input-hidden " name="billing_peach" id="billing_peach" value="dontsave"></span>
                                    </p>
                                </div>

                                </div>
                            </div>
                        </div>
                        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
                    </div>
                    <div class="section">
                        <h2>Payment Method</h2>
                        Your personal data will be used to process your order, support your experiece throughout this website, and for other purposes described in our <a target="_blank" href="https://www.pepkor.co.za/wp-content/uploads/2021/04/Privacy-Statement.pdf">privacy policy</a>
                        <div id="order_review" class="woocommerce-checkout-review-order">
                        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                    </div>
                </div>
            </div>
            <!-- end: left-col -->
            <!-- start: right-col-outer -->
            <div class="right-col-outer">
                <div class="right-col">


                    <div class="order-validation">
                        <ul id="validation-messages"></ul>
                    </div> 


                    <h3>Order Summary</h3>

                    <div class="summary-content">
                        <div class="summary-totals">
                            <div class="summary-total-sub">
                                <span>Subtotal</span>
                                <span>R<?php echo WC()->cart->subtotal; ?></span>
                            </div>
                            <div class="summary-total-discount">
                                <span>Discount</span>
                                <span>R<?php echo WC()->cart->get_discount_total(); ?></span>
                            </div>
                        </div>
                        <div class="sum-total">
                            <span>Total: </span>
                            <span>R
                                <?php echo WC()->cart->total; ?></span>
                        </div>
                        <!-- start: style_checkboxes -->
                        <div class="style_checkboxes">
                            <div class="chk_item">
<!--                                <input id="delivery-details" type="checkbox" /><label for="delivery-details">I confirm my delivery details are correct</label></div>-->
                            <div class="chk_item"> <input id="terms" type="checkbox" /> <label for="terms">I accept the <a target="_blank" href="https://www.1voucher.co.za/terms-conditions">Terms & Conditions</a></label> </div>
                             <div class="chk_item"> <input id="marketing" type="checkbox" /> <label for="marketing">Sign up for the latest 1Voucher deals</label> </div>
                        </div>
                        <!-- end: style_checkboxes -->
                        <a class="button button-primary" id="complete-order" href="javascript:void(0);">Complete Order</a>
                        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                    </div>
                </div>
            </div>
            <!-- end: right-col-outer -->
        </div>
    </form>
</div>
<div class="container" style="display: none">
    <!-- start: buyvouchers-outer -->
    <div class="buyvouchers-outer">
        <!-- start: buyvouchers-left -->
        <div class="buyvouchers-left">
            <strong>buy a 1foryou voucher</strong>
            <h2>Follow these 3 easy steps to purchase and redeem a 1foryou voucher online.</h2>
        </div>
        <!-- end: buyvouchers-left -->
        <!-- start: buyvouchers-right -->
        <div class="buyvouchers-right">
            <!-- start : buyvouchers -->
            <div class="buyvouchers">
                <ul class="buyvouchers_tabs">
                    <li class="buyvouchers_tabs_voucher voucherchosen"><span> </span><strong>Voucher</strong></li>
                    <li class="buyvouchers_tabs_voucher voucherchosen"><span></span><strong> Amount</strong></li>
                    <li class="buyvouchers_tabs_payment active"><span>3</span><strong>Payment Type</strong></li>
                </ul>
                <div class="buyvouchers_step2">
                    <div class="steps-text">Step 3</div>
                    <h3>Select your payment type</h3>
                    <!--                    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="-->
                    <?php //echo esc_url( wc_get_checkout_url() ); ?>
                    <!--" enctype="multipart/form-data">-->
                    <div id="order_review" class="woocommerce-checkout-review-order">
                        <!--                            -->
                        <?php //do_action( 'woocommerce_checkout_order_review' ); ?>
                    </div>
                    <a href="javascript:window.history.back();" class="goback back_payment">Back</a>
                    <!--                        -->
                    <?php //do_action( 'woocommerce_checkout_after_order_review' ); ?>
                    <!--                    </form>-->
                </div>
            </div>
            <!-- end : buyvouchers -->
        </div>
        <!-- end : buyvouchers-right -->
    </div>
    <!-- end: buyvouchers-outer -->
</div>
</div>
<div class="data-bg" data-bg="theme-light-bg"></div>
<style>
    .footer {
    width: 100%;
    float: left;
}

/*  .buyvouchers {
    padding: 30px;
}

.buyvouchers .buyvouchers_tabs {
    margin: 0 0 40px !important;
    padding: 0;
}

.buyvouchers .buyvouchers_tabs li {
    background: none;
    display: inline-block;
    margin: 0;
    padding: 4px 10px;
    list-style: none !important;
}

.buyvouchers .buyvouchers_tabs .active {
    border: 1px solid red;
}

.buyvouchers .buyvouchers_step_field {
    margin: 0 0 15px;
} */

</style>
<script type="text/javascript">
jQuery(document).ready(function() {

    jQuery('.delivery-option input').on('click', function() {
        if (jQuery('#delivery_sms').is(':checked')) {
            jQuery('#billing_email_field').hide();
            jQuery('#billing_phone_field').show();
        }
        if (jQuery('#delivery_email').is(':checked')) {
            jQuery('#billing_email_field').show();
            jQuery('#billing_phone_field').hide();
        }
    });

    jQuery('#complete-order').on('click', function() {
        var FirstName = jQuery('#billing_first_name');
        var LastName = jQuery('#billing_last_name');
        var EmailAddress = jQuery('#billing_email');
         var Phone = jQuery('#billing_phone');
        // var DeliveryDetails = jQuery('#delivery-details');
        var Terms = jQuery('#terms');

        valid = false;

        jQuery('#validation-messages').html('');

        if (jQuery(FirstName).val() === "") {
            jQuery('.order-validation').fadeIn(200);
            jQuery(FirstName).addClass('invalid');
            jQuery(FirstName).parent().addClass('invalid-message');
            jQuery(FirstName).parent().attr('data-message','Error: Please enter a valid name');
        }else {
            jQuery(FirstName).removeClass('invalid');
            jQuery(FirstName).parent().removeClass('invalid-message');
            valid = true;
        }

        if (jQuery(LastName).val() === "") {
            jQuery('.order-validation').fadeIn(200);
            jQuery(LastName).addClass('invalid');
            jQuery(LastName).parent().addClass('invalid-message');
            jQuery(LastName).parent().attr('data-message','Error: Please enter a valid last name');
        }else {
            jQuery(LastName).removeClass('invalid');
            jQuery(LastName).parent().removeClass('invalid-message');
            valid = true;
        }

        jQuery('.delivery-option input').on('click', function() {
            if (jQuery('#delivery_sms').is(':checked')) {
                jQuery('#billing_email_field').hide();
                jQuery('#billing_phone_field').show();
            }
            if (jQuery('#delivery_email').is(':checked')) {
                jQuery('#billing_email_field').show();
                jQuery('#billing_phone_field').hide();
            }
        });
        if (jQuery('#delivery_sms').is(':checked')) {
            console.log($(Phone).val().length)
            if ($(Phone).val().length == 0 || $(Phone).val().length !== 10) {

                if($(Phone).val().length == 0 || $(Phone).val().length !== 10) {
                    // $('.sms-validation').text('Please make sure your phone number has 10 numbers');
                    $(Phone).addClass('invalid');
                    $(Phone).parent().attr('data-message', 'Error: Please make sure your phone number has 10 numbers');
                    $(Phone).parent().addClass('invalid-message');
                    valid = false;
                } else {
                    jQuery('.order-validation').fadeIn(200);
                    jQuery(Phone).addClass('invalid');
                    jQuery(Phone).parent().addClass('invalid-message');
                    jQuery(Phone).parent().attr('data-message','Error: Please enter a valid phone number');
                valid = false;
                }
            }else {
                jQuery(Phone).removeClass('invalid');
                jQuery(Phone).parent().removeClass('invalid-message');
                valid = true;
            }
        }
        if (jQuery('#delivery_email').is(':checked')) {
            if (jQuery(EmailAddress).val() === "") {
                jQuery('.order-validation').fadeIn(200);
                jQuery(EmailAddress).addClass('invalid');
                jQuery(EmailAddress).parent().addClass('invalid-message');
                jQuery(EmailAddress).parent().attr('data-message','Error: Please enter a valid email address');
                valid = false;
            }else {
                jQuery(EmailAddress).removeClass('invalid');
                jQuery(EmailAddress).parent().removeClass('invalid-message');
                valid = true;
            }
        }





        // if (!$(DeliveryDetails).is(":checked")) {
        //     jQuery('.order-validation').fadeIn(200);
        //     jQuery('#validation-messages').append('<li>Please accept delivery details</li>');
        //     valid = false;
        // }

        if (!$(Terms).is(":checked")) {
            jQuery('.order-validation').fadeIn(200);
            jQuery('#validation-messages').append('<li>Please accept Terms</li>');
            valid = false;
        }

        console.log(valid);

        if (jQuery('#validation-messages').html() == '' && valid == true) {
            jQuery('.order-validation').fadeOut(200);
            jQuery('#place_order').click();
            jQuery('.right-col').addClass('loading-next');
        } else {

        }



    });
});
</script>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>