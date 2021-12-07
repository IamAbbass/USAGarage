@extends('layouts.website')

@section('title', 'Get A Quote')

@section('content')

    <div class="page-wrapper">
        <header class="main-header fixed-top-header"></header>
        <section class="page-banner">
            <div class="auto-container">
                <div class="page-title">
                    <h1>Get A Quote</h1>
                </div>
                <div class="bread-crumb text-right"> <span class="initial-text">You Are Here: </span>
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>Get A Quote</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column col-md-12">
                <section id="appointment-content">
                    <div class="auto-container">
                        <div class="title-box">
                            <h3>Get A Quotes</h3>
                            <h4 class="theme-color">Take a look at our quality features</h4>
                        </div> <br>
                        <p>We Provide huge number of services which are mentioned below.</p>
                        <div id="apt_message"></div>
                        <form role="form" id="appointment_form" method="post"
                            action="https://ourwpdemo.com/carshire/wp-admin/admin-ajax.php?action=_bunch_ajax_callback&amp;subaction=appointment_form_submit"
                            name="appointment_form">
                            <div class="vehicle-info clearfix">
                                <div class="sec-title">
                                    <h3 class="skew-lines">Vehicle Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="sec-title">
                                            <h3>Vehicle Year</h3>
                                        </div>
                                        <input type="text"  placeholder="Vehicle Mileage">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sec-title">
                                            <h3>Vehicle Make</h3>
                                        </div> <input type="text"class="vehicle-year">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sec-title">
                                            <h3>Vehicle Mileage</h3>
                                        </div> <input type="text" placeholder="Vehicle Mileage">
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle-info clearfix">
                                <div class="sec-title">
                                    <h3 class="skew-lines">Appoinment Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sec-title">
                                            <h3>Appoinment Date</h3>
                                        </div> 
                                        <input type="date" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sec-title">
                                            <h3>Appoinment Timeframe</h3>
                                        </div> 
                                        <input type="time" />
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle-info clearfix">
                                <div class="sec-title">
                                    <h3 class="skew-lines">Select Services Need</h3>
                                </div>
                                <ul>                                    

                                    @foreach ($GarageServices as $GarageService)                                    
                                        <li><label><span class="input-checker"> <input type="checkbox" value="{{ $GarageService->name }}"> </span> {{ $GarageService->name }}</label></li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="clearfix">
                                <div class="sec-title">
                                    <h3 class="skew-lines">Contact Details</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="form-group"> <input type="text" placeholder="Enter Your Name"></div>
                                        <div class="form-group"> <input type="email" placeholder="Enter Your Email Address">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group"> <input type="text" placeholder="Enter a Subject"></div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="form-group"><textarea placeholder="Type Message Here"></textarea></div>
                                    </div>
                                </div>
                                <div class="form-group"> <input type="hidden" name="receiver_email" id="receiver_email"
                                        value="amirkhan0617@gmail.com"> <button type="submit" name="submit-form"
                                        class="theme-btn dark-btn hvr-bounce-to-right"><span class="fa fa-envelope"></span>
                                        Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column col-md-12"></div>
        </div>
        <p></p>
        <section class="contact-options"></section>
        <footer class="main-footer"></footer>
    </div>

    <style>
        #appointment-content input[type="text"]{
            color: black !important;
        }
    </style>

@endsection
