@extends('layouts.website')

@section('title','Cart')


@section('content')


    <div class="page-wrapper">



        <!-- Main Header -->

        <header class="main-header fixed-top-header">



            <!--Header Lower-->



        </header>

        <!--End Main Header -->


        <!-- Page Banner -->

        <section class="page-banner">

            <div class="auto-container">

                <div class="page-title">
                    <h1> Cart</h1>
                </div>

                <div class="bread-crumb text-right">

                    <span class="initial-text">You Are Here: </span>

                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>

            </div>

        </section>

        <!-- Sidebar Page -->

        <div class="sidebar-page">

            <div class="auto-container">

                <div class="row clearfix">


                    {{-- <div class="woocommerce">
                        <p class="cart-empty">Your cart is currently empty.</p>
                        <p class="return-to-shop">
                            <a class="button wc-backward" href="/shop">
                                Return to shop </a>
                        </p>
                    </div> --}}

                    <!-- sidebar area -->


                    <!-- sidebar area -->


                    <!-- Side Bar -->

                    <!-- Left Content -->

                    <section class="left-content  col-lg-12 col-md-12 col-sm-12 col-xs-12">


                        <!-- blog post item -->

                        <div class="woocommerce">
                            <form class="woocommerce-cart-form" action="/" method="post">

                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Preview</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="woocommerce-cart-form__cart-item cart_item">

                                            <td class="product-thumbnail">
                                                <a href="/shop"><img
                                                        width="300" height="300"
                                                        src="https://www.discountautoparts.com/product_images/products/D0114-R248342_1.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt=""
                                                        srcset="https://www.discountautoparts.com/product_images/products/D0114-R248342_1.jpg 300w, https://ourwpdemo.com/carshire/wp-content/uploads/2013/06/T_7_front-150x150.jpg 150w, https://ourwpdemo.com/carshire/wp-content/uploads/2013/06/T_7_front-768x768.jpg 768w, https://ourwpdemo.com/carshire/wp-content/uploads/2013/06/T_7_front-80x80.jpg 80w, https://ourwpdemo.com/carshire/wp-content/uploads/2013/06/T_7_front-600x600.jpg 600w, https://ourwpdemo.com/carshire/wp-content/uploads/2013/06/T_7_front-100x100.jpg 100w, https://ourwpdemo.com/carshire/wp-content/uploads/2013/06/T_7_front.jpg 1000w"
                                                        sizes="(max-width: 300px) 100vw, 300px"></a>
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a href="/shop">Happy
                                                    Ninja</a>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">AED </span>18.00</span>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <label class="screen-reader-text"
                                                        for="quantity_618e1986c529d">Quantity</label>
                                                    <input type="number" id="quantity_618e1986c529d"
                                                        class="input-text qty text" step="1" min="0" max=""
                                                        name="cart[2f2b265625d76a6704b08093c652fd79][qty]" value="1"
                                                        title="Qty" size="4" pattern="[0-9]*" inputmode="numeric"
                                                        aria-labelledby="">
                                                </div>
                                            </td>

                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">AED </span>18.00</span>
                                            </td>

                                            <td class="product-remove">
                                                <a href="https://ourwpdemo.com/carshire/cart/?remove_item=2f2b265625d76a6704b08093c652fd79&amp;_wpnonce=ad8336d116"
                                                    class="remove" aria-label="Remove this item"
                                                    data-product_id="334" data-product_sku="">×</a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="6" class="actions">

                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label> <input type="text"
                                                        name="coupon_code" class="input-text" id="coupon_code" value=""
                                                        placeholder="Coupon code"> <input type="submit"
                                                        class="button" name="apply_coupon" value="Apply coupon">
                                                </div>

                                                <input type="submit" class="button" name="update_cart"
                                                    value="Update cart" disabled="">


                                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="ad8336d116"><input
                                                    type="hidden" name="_wp_http_referer" value="/carshire/cart/">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                                <div class="cart_shipping col-md-4 pull-left">
                                </div>
                                <div class="cart_totals col-md-4 pull-right ">


                                    <h2>Cart Totals</h2>

                                    <table cellspacing="0">

                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">AED </span>18.00</span>
                                                </td>
                                            </tr>





                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">AED </span>18.00</span></strong>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>


                                    <div class="wc-proceed-to-checkout">


                                        <a href="/checkout"
                                            class="checkout-button button alt wc-forward">
                                            Proceed to checkout</a>

                                    </div>


                                </div>
                            </div>

                        </div>



                        <div itemscope="" itemtype="https://schema.org/Comment" id="comments"
                            class="post-comments comment-area clearfix">


                            <!-- Comment Form -->

                            <div class="comment-form wow fadeInUp animated" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

                                <!-- Heading -->




                            </div>

                        </div><!-- #comments -->

                        <!-- end comments -->



                        <!-- Pagination -->

                    </section>

                    <!-- sidebar area -->


                    <!-- sidebar area -->


                    <!-- sidebar area -->

                </div>

            </div>

        </div>
    </div>
@endsection
