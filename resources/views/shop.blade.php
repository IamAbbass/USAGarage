@extends('layouts.website')

@section('title',$title)

@section('content')

    <div class="page-wrapper">
        <section class="page-banner">
            <div class="auto-container">
                <div class="page-title">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="bread-crumb text-right"> <span class="initial-text">You Are Here: </span>
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>{{ $title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="shop-section">
            <div class="auto-container">
                <div class="row clearfix">
                   
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content-side">
                        <div class="wpb_widgetised_column wpb_content_element">
                            <div class="wpb_wrapper">
                                
                                <div id="bunch_conatct_info_sidebar-3"
                                    class="side-bar widget sidebar_widget widget_bunch_conatct_info_sidebar">
                                    <div class="widget cont-info">
                                        <div class="sec-title">
                                            <h3 class="skew-lines">Shop By Category</h3>
                                        </div>
                                        <div class="cont-box">
                                            <ul class="info">
                                                @foreach ($ShopCategories as $ShopCategory)
                                                    <li><a href="/shop?c={{ $ShopCategory->id }}">{{ $ShopCategory->name }}</a></li>
                                                @endforeach                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 content-side">
                        <div class="shop-item-section">
                            <div class="items-sorting">
                                <div class="row clearfix">
                                    <div class="results-column col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                        <h4>
                                            <p class="woocommerce-result-count"> Showing {{ count($products) }} results</p>
                                        </h4>
                                    </div>
                                    {{-- <div class="select-column pull-right col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <form class="woocommerce-ordering" method="get"> <select name="orderby"
                                                    class="orderby">
                                                    <option value="menu_order" selected="selected">Default sorting</option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by newness</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select> <input type="hidden" name="paged" value="1"></form>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="products row clearfix">

                                @if(count($products) == 0)

                                    <p class="text-center text-muted">Sorry, no result found!</p>

                                @endif

                                @foreach ($products as $product)

                                    <div
                                        class="shop-item col-lg-3 col-md-3 col-sm-6 col-xs-12 post-342 product type-product status-publish has-post-thumbnail product_cat-posters first instock sale shipping-taxable purchasable product-type-simple">
                                        <div class="inner-box">
                                            <div class="image"> <a href="/product?p={{ $product->id }}"> <img
                                                        width="300" height="300"
                                                        src="{{ asset('/uploads/'.$product->image) }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt=""
                                                        sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                            <div class="lower-content">
                                                <h3><a href="/product?p={{ $product->id }}">{{ $product->title }}</a></h3> <span
                                                    class="price">
                                                    
                                                    {{-- <del><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">£</span>15.00</span></del> --}}
                                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">AED </span>{{ $product->price }}</span></ins></span>
                                                {{-- <a href="/cart?p={{ $product->id }}" class="theme-btn dark-btn">Add to
                                                    cart</a> --}}
                                            </div>
                                        </div>
                                    </div>                                    
                                @endforeach                                
                                
                            </div>
                            {{-- <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
