@extends('layouts.website')

@section('content')

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.0.2/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.0.2/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">



    <div class="vc_row wpb_row vc_row-fluid">

        <div class="wpb_column col-md-12">
            <div class="swiffy-slider">
                <ul class="slider-container">
                    <li>
                        <img src="https://source.unsplash.com/49b9l_29ceA/1600x400" style="max-width: 100%;height: auto;">
                    </li>
                    <li>
                        <img src="https://source.unsplash.com/nKAglN6HBH8/1600x400" style="max-width: 100%;height: auto;">
                    </li>
                    <li>
                        <img src="https://source.unsplash.com/49b9l_29ceA/1600x400" style="max-width: 100%;height: auto;">
                    </li>
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

                <div class="slider-indicators">
                    <button class="active"></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </div>

        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column col-md-12">
                <section class="featured-services column-view">
                    <div class="auto-container">
                        <div class="wpb_column col-md-12">
                            <section class="why-us" style="background: transparent !important;">
                                <div class="auto-container">
                                    <div class="row clearfix">
                                        <div class="text-content">
                                            <div class="title-box">
                                                <h3>Our Services</h3>
                                            </div>
                                            <div class="text">
                                                {{-- <p>Our most popular service is our Virtual Receptionist. We know that sometimes
                                                it’s difficult to get to the phone if you are in the middle of something and
                                                you don’t want to miss that important call that could be the start of an
                                                exciting new business opportunity, so let us answer it for you.</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="row clearfix">
                            <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight animated"
                                data-wow-delay="0ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <div class="inner-box">
                                    <figure class="image"> <a href="#"><img width="369" height="230"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-1.jpg"
                                                class="attachment-carshire1 size-carshire1 wp-post-image" alt=""
                                                srcset="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-1.jpg 369w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-1-300x187.jpg 300w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-1-268x167.jpg 268w"
                                                sizes="(max-width: 369px) 100vw, 369px"></a>
                                        {{-- <figcaption class="price"><sup>$</sup>89</figcaption> --}}
                                    </figure>
                                    <div class="post-content clearfix">
                                        <h3 class="skew-lines">CAR/BIKE REPAIR</h3>
                                        <div class="text-center"><a href="/quote" class="theme-btn btn-style-one"><span
                                                    class="fa fa-angle-right"></span>GET A QUOTE</a> </div>
                                    </div>
                                    <div class="overlay-box">
                                        <h3 class="skew-lines">CAR/BIKE REPAIR</h3>
                                        <div class="text">
                                            <p>Our most popular service is our Virtual Receptionist. We know that
                                                sometimes it’s difficult to get to the phone if you are in the middle of
                                                something and you don’t want to miss that important.</p> <br> <a
                                                href="/quote" class="theme-btn dark-btn style-two"><span
                                                    class="fa fa-angle-right"></span> GET A QUOTE</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight animated"
                                data-wow-delay="0ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <div class="inner-box">
                                    <figure class="image"> <a href="#"><img width="369" height="230"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-3.jpg"
                                                class="attachment-carshire1 size-carshire1 wp-post-image" alt=""
                                                srcset="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-3.jpg 369w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-3-300x187.jpg 300w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-3-268x167.jpg 268w"
                                                sizes="(max-width: 369px) 100vw, 369px"></a>
                                        {{-- <figcaption class="price"><sup>$</sup>29</figcaption> --}}
                                    </figure>
                                    <div class="post-content clearfix">
                                        <h3 class="skew-lines">Car/BIKE Modification</h3>
                                        <div class="text-center"><a href="/quote" class="theme-btn btn-style-one"><span
                                                    class="fa fa-angle-right"></span>GET A QUOTE</a> </div>
                                    </div>
                                    <div class="overlay-box">
                                        <h3 class="skew-lines">Car/BIKE Modification</h3>
                                        <div class="text">
                                            <p>Our most popular service is our Virtual Receptionist. We know that
                                                sometimes it’s difficult to get to the phone if you are in the middle of
                                                something and you don’t want to miss that important.</p> <br> <a
                                                href="/quote" class="theme-btn dark-btn style-two"><span
                                                    class="fa fa-angle-right"></span> GET A QUOTE</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight animated"
                                data-wow-delay="0ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <div class="inner-box">
                                    <figure class="image"> <a href="#"><img width="369" height="230"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2.jpg"
                                                class="attachment-carshire1 size-carshire1 wp-post-image" alt=""
                                                srcset="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2.jpg 369w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2-300x187.jpg 300w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2-268x167.jpg 268w"
                                                sizes="(max-width: 369px) 100vw, 369px"></a>
                                        {{-- <figcaption class="price"><sup>$</sup>59</figcaption> --}}
                                    </figure>
                                    <div class="post-content clearfix">
                                        <h3 class="skew-lines">CAR/BIKE INSPECTION</h3>
                                        <div class="text-center"><a href="/quote" class="theme-btn btn-style-one"><span
                                                    class="fa fa-angle-right"></span>GET A QUOTE</a> </div>
                                    </div>
                                    <div class="overlay-box">
                                        <h3 class="skew-lines">CAR/BIKE INSPECTION</h3>
                                        <div class="text">
                                            <p>Our most popular service is our Virtual Receptionist. We know that
                                                sometimes it’s difficult to get to the phone if you are in the middle of
                                                something and you don’t want to miss that important.</p> <br> <a
                                                href="/quote" class="theme-btn dark-btn style-two"><span
                                                    class="fa fa-angle-right"></span> GET A QUOTE</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight animated"
                                data-wow-delay="0ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <div class="inner-box">
                                    <figure class="image"> <a href="#"><img width="369" height="230"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2.jpg"
                                                class="attachment-carshire1 size-carshire1 wp-post-image" alt=""
                                                srcset="https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2.jpg 369w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2-300x187.jpg 300w, https://ourwpdemo.com/carshire/wp-content/uploads/2015/12/post-image-2-268x167.jpg 268w"
                                                sizes="(max-width: 369px) 100vw, 369px"></a>
                                        {{-- <figcaption class="price"><sup>$</sup>59</figcaption> --}}
                                    </figure>
                                    <div class="post-content clearfix">
                                        <h3 class="skew-lines">VINTAGE CAR/BIKE RESTORATION</h3>
                                        <div class="text-center"><a href="/quote" class="theme-btn btn-style-one"><span
                                                    class="fa fa-angle-right"></span>GET A QUOTE</a> </div>
                                    </div>
                                    <div class="overlay-box">
                                        <h3 class="skew-lines">CUSTOM CAR REPAIR</h3>
                                        <div class="text">
                                            <p>Our most popular service is our Virtual Receptionist. We know that
                                                sometimes it’s difficult to get to the phone if you are in the middle of
                                                something and you don’t want to miss that important.</p> <br> <a
                                                href="/quote" class="theme-btn dark-btn style-two"><span
                                                    class="fa fa-angle-right"></span> GET A QUOTE</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="container">

            
            

            <div class="vc_row wpb_row vc_row-fluid">
                <div class="container">
                    <div class="wpb_column col-md-12">
                        <section class="why-us">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <div class="text-content">
                                        <div class="title-box">
                                            <h3>Why you should choose us?</h3>
                                            <h4 class="theme-color">Take a look at our quality features</h4>
                                        </div>
                                        <div class="text">
                                            <p>Union Star Auto Garage was established more than ten years ago by industry
                                                experts, dedicated to providing the best motor vehicle and customer service
                                                available. One of the keys to safe motoring is good vehicle maintenance. It
                                                is the best way to ensure that your car is driving in the best possible
                                                condition, and it can also save you money in the long run. The people at
                                                Union Start Auto Garage have always supported vehicle maintenance with
                                                excellent scheduled servicing, but they’ve gone even further. As a Key
                                                Customer you are entitled to a range of benefits simply for looking after
                                                your car. Benefits that make it easy to keep your car in top condition and
                                                give you real peace of mind. Whether it’s a regular service or having
                                                someone to call when you break down, the team at Union Start Auto Garage are
                                                the ones you can rely on to look after your car thoroughly and
                                                professionally. So enjoy the Union Start Auto Garage difference in the
                                                knowledge that your car is being cared for by people you can trust.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="wpb_column col-md-12">
                <section class="why-us">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="text-content">
                                <div class="title-box">
                                    <h3>Our Services</h3>
                                    <h4 class="theme-color">We provide huge number of services which are mentioned
                                        below.</h4>
                                </div>
                                <div class="text">
                                    {{-- <p>Our most popular service is our Virtual Receptionist. We know that sometimes
                                    it’s difficult to get to the phone if you are in the middle of something and
                                    you don’t want to miss that important call that could be the start of an
                                    exciting new business opportunity, so let us answer it for you.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column col-md-12">
                    <section class="services-section ">
                        <div class="auto-container">
                            <div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3>OUR SERVICES</h3>
                            </div>
                            <div class="row clearfix">

                                @foreach ($GarageServices as $GarageService)

                                    <article class="col-md-4 col-sm-12 col-xs-12 post wow fadeInUp animated"
                                        data-wow-delay="0ms" data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                        <div class="inner">
                                            <div class="icon"><span class="{{ $GarageService->icon }}"></span>
                                            </div>
                                            <h3 class="post-title">{{ $GarageService->name }}</h3>
                                            {{-- <div class="text">{{ $GarageService->content }}</div> --}}
                                        </div>
                                    </article>

                                @endforeach


                            </div>
                        </div>
                    </section>
                </div>
            </div>


        </div>
    </div>

@endsection
