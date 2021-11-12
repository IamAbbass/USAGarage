@extends('layouts.website')

@section('title', 'Services')

@section('content')

    <div class="page-wrapper">
        <section class="page-banner" style="background-image:url('../wp-content/uploads/2015/12/page-banner-1.jpg');">
            <div class="auto-container">
                <div class="page-title">
                    <h1>Our Services</h1>
                </div>
                <div class="bread-crumb text-right"> <span class="initial-text">You Are Here: </span>
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </section>
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

                                <article class="col-md-4 col-sm-12 col-xs-12 post wow fadeInUp animated" data-wow-delay="0ms"
                                    data-wow-duration="1000ms"
                                    style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                    <div class="inner">
                                        <div class="icon"><span class="{{ $GarageService->icon }}"></span></div>
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

@endsection
