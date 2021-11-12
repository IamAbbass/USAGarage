@extends('layouts.website')

@section('title','About')

@section('content')

    <div class="page-wrapper">
        <header class="main-header fixed-top-header"></header>
        <section class="page-banner" style="background-image:url('../wp-content/uploads/2015/12/page-banner-1.jpg');">
            <div class="auto-container">
                <div class="page-title">
                    <h1>ABOUT US</h1>
                </div>
                <div class="bread-crumb text-right"> <span class="initial-text">You Are Here: </span>
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column col-md-12">
                <section class="tabs-section">
                    <div class="auto-container">
                        <div class="row">
                            <div class="tabs-box clearfix">
                                {{-- <div class="col-md-4 col-sm-6 col-xs-12 buttons-side">
                                    <div class="sec-title">
                                        <h3>what we do on our workspace</h3>
                                    </div>
                                    <ul class="tab-buttons">
                                        @foreach ($GarageServices as $GarageService)
                                            <li class="wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1000ms"
                                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                            <a href="#service145" class="tab-btn clearfix ">
                                            <div class="icon"><span class="{{ $GarageService->icon }}"></span></div>
                                            <h4>{{ $GarageService->name }}</h4>
                                            <p>{{ $GarageService->content }}</p>
                                            </a>
                                            </li>                                            
                                        @endforeach
                                    </ul>
                                </div> --}}
                                <div class="col-md-12 col-sm-12 col-xs-12 tabs-content clearfix">
                                    <div class="tab active-tab" id="service147">
                                        <div class="tab-title">
                                            <h2>Who We Are ?</h2>
                                            {{-- <h3>Customers car quality tests</h3> --}}
                                        </div>
                                        <div class="text">Union Star Auto Garage was established more than ten years ago by industry experts, dedicated to providing the best motor vehicle and customer service available. One of the keys to safe motoring is good vehicle maintenance. It is the best way to ensure that your car is driving in the best possible condition, and it can also save you money in the long run. The people at Union Start Auto Garage have always supported vehicle maintenance with excellent scheduled servicing, but they’ve gone even further. As a Key Customer you are entitled to a range of benefits simply for looking after your car. Benefits that make it easy to keep your car in top condition and give you real peace of mind. Whether it’s a regular service or having someone to call when you break down, the team at Union Start Auto Garage are the ones you can rely on to look after your car thoroughly and professionally. So enjoy the Union Start Auto Garage difference in the knowledge that your car is being cared for by people you can trust.</div>
                                    </div>

                                    <div class="tab active-tab" id="service147">
                                        <div class="tab-title">
                                            <h2>Our Vision</h2>
                                        </div>
                                        <div class="text">To be the automotive service provider of choice in the United Arab Emirates</div>                                        
                                    </div>

                                    <div class="tab active-tab" id="service147">
                                        <div class="tab-title">
                                            <h2>Our Mission</h2>
                                        </div>
                                        <div class="row list clearfix">
                                            <ul class="col-md-12 col-sm-12 col-xs-12">
                                                <li>Provide affordable mechanical services and body repairs at affordable prices.</li>
                                                <li>Provide excellent customer service so that every customer leaves our facility fully satisified.</li>
                                            </ul>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
