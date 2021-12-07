@extends('layouts.website')

@section('title', $product->title)

@section('content')

    <div class="page-wrapper">



        <!-- Main Header -->

        <header class="main-header fixed-top-header">



            <!--Header Lower-->



        </header>

        <!--End Main Header -->
        <!--Page Title-->
        <section class="page-banner">

            <div class="auto-container">

                <div class="page-title">
                    <h1> {{ $product->title }}</h1>
                </div>

                <div class="bread-crumb text-right">

                    <span class="initial-text">You Are Here: </span>

                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li><a bhref="/shop">Shop</ahref=>
                        </li>
                        <li>{{ $product->title }}</li>
                    </ul>
                </div>

            </div>

        </section>
        <!--End Page Title-->

        <!--Shop Single Section-->
        <section class="shop-single-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- sidebar area -->

                    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                        <div class="shop-single">
                            <div class="product-details">


                                <div id="product-334"
                                    class="post-334 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts first instock shipping-taxable purchasable product-type-simple">
                                    <div class="basic-details">
                                        <div class="row clearfix">
                                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                <figure class="image-box">
                                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                                        data-columns="4"
                                                        style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                                        <figure class="woocommerce-product-gallery__wrapper">
                                                            <div data-thumb="{{ asset('/uploads/'.$product->image) }}"
                                                                class="woocommerce-product-gallery__image"><a
                                                                    href="{{ asset('/uploads/'.$product->image) }}"><img
                                                                        width="600" height="600"
                                                                        src="{{ asset('/uploads/'.$product->image) }}"
                                                                        class="wp-post-image" alt="" title="T_7_front"
                                                                        data-caption=""
                                                                        data-src="{{ asset('/uploads/'.$product->image) }}"
                                                                        data-large_image="{{ asset('/uploads/'.$product->image) }}"
                                                                        data-large_image_width="1000"
                                                                        data-large_image_height="1000"
                                                                        sizes="(max-width: 600px) 100vw, 600px"></a></div>
                                                            <div data-thumb="" class="woocommerce-product-gallery__image"><a
                                                                    href=""></a></div>
                                                        </figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="info-column col-md-6 col-sm-6 col-xs-12">


                                                <div class="inner-column">
                                                    <h4 itemprop="name" class="product_title entry-title">{{ $product->title }}</h4>
                                                    <div class="text">
                                                        <div class="woocommerce-product-details__short-description">
                                                            <p>{{ $product->note }}</p>

                                                            <p><strong>Brand: </strong> {{ $product->brand }}</p>
                                                            <p><strong>Years: </strong> {{ $product->years }}</p>
                                                            <p><strong>Price: </strong> AED {{ $product->price }}</p>

                                                        </div>
                                                    </div>

                                                    <div class="other-options clearfix">


                                                        <form class="cart" action="/cart">
                                                            {{-- <div class="quantity">
                                                                <label class="screen-reader-text"
                                                                    for="quantity_618e19700406e">Quantity</label>
                                                                <input type="number" id="quantity_618e19700406e"
                                                                    class="input-text qty text" step="1" min="1" max=""
                                                                    name="quantity" value="1" title="Qty" size="4"
                                                                    pattern="[0-9]*" inputmode="numeric" aria-labelledby="">
                                                            </div> --}}

                                                            {{-- <button type="submit" name="add-to-cart" value="334"
                                                                class="theme-btn btn-style-one add-to-cart">Add to
                                                                cart</button> --}}

                                                        </form>


                                                    </div>
                                                </div>

                                            </div><!-- .summary -->
                                        </div>
                                    </div>


                                </div><!-- #product-334 -->

                            </div>
                        </div>

                    </div>

                    <!-- sidebar area -->
                </div>
            </div>
        </section>





    </div>

@endsection
