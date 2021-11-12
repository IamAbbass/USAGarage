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
                                        <div class="vehicle-year">
                                            <div class="thm-spinner ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                data-min-value="1987" data-max-value="2025" data-default-value="2016">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                    style="width: 76.3158%;"></div><span
                                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                                    style="left: 76.3158%;"></span>
                                            </div> <input type="text" name="apt_vehicle_year" id="apt_vehicle_year"
                                                readonly="" class="vehicle-year">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sec-title">
                                            <h3>Vehicle Make</h3>
                                        </div> <select name="apt_vehicle_make" id="apt_vehicle_make" class="select-input"
                                            style="display: none;">
                                            <option value="" selected="selected">Choose...</option>
                                            <option value="General Motors">General Motors</option>
                                            <option value="Land Rover">Land Rover</option>
                                            <option value="Lexus">Lexus</option>
                                            <option value="Lincoln">Lincoln</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="Mercedes - Benz">Mercedes - Benz</option>
                                            <option value="Mercury">Mercury</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Renault">Renault</option>
                                            <option value="Plymouth">Plymouth</option>
                                            <option value="Pontiac Porsche">Pontiac Porsche</option>
                                            <option value="Rover">Rover</option>
                                            <option value="Saab">Saab</option>
                                            <option value="Saleen">Saleen</option>
                                        </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all"
                                            tabindex="0" id="apt_vehicle_make-button" role="combobox" aria-expanded="false"
                                            aria-autocomplete="list" aria-owns="apt_vehicle_make-menu" aria-haspopup="true"
                                            style="width: 370px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span
                                                class="ui-selectmenu-text">Choose...</span></span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sec-title">
                                            <h3>Vehicle Mileage</h3>
                                        </div> <input type="text" name="apt_vehicle_milage" id="apt_vehicle_milage"
                                            placeholder="Vehicle Mileage">
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
                                        </div> <input type="text" name="apt_date" id="apt_date"
                                            class="date-picker hasDatepicker" placeholder="MM/DD/YYYY">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sec-title">
                                            <h3>Appoinment Timeframe</h3>
                                        </div> <select name="apt_timeframe" id="apt_timeframe" class="select-input"
                                            style="display: none;">
                                            <option value="" selected="selected">Choose...</option>
                                            <option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
                                            <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                                            <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                                            <option value="12:00 PM - 01:00 PM">12:00 PM - 01:00 PM</option>
                                            <option value="01:00 PM - 02:00 PM">01:00 PM - 02:00 PM</option>
                                            <option value="02:00 PM - 03:00 PM">02:00 PM - 03:00 PM</option>
                                            <option value="03:00 PM - 04:00 PM">03:00 PM - 04:00 PM</option>
                                            <option value="04:00 PM - 05:00 PM">04:00 PM - 05:00 PM</option>
                                            <option value="05:00 PM - 06:00 PM">05:00 PM - 06:00 PM</option>
                                        </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all"
                                            tabindex="0" id="apt_timeframe-button" role="combobox" aria-expanded="false"
                                            aria-autocomplete="list" aria-owns="apt_timeframe-menu" aria-haspopup="true"
                                            style="width: 570px;"><span class="ui-icon ui-icon-triangle-1-s"></span><span
                                                class="ui-selectmenu-text">Choose...</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle-info clearfix">
                                <div class="sec-title">
                                    <h3 class="skew-lines">Select Services Need</h3>
                                </div>
                                <ul class="special-checkbox">                                    

                                    @foreach ($GarageServices as $GarageService)                                    
                                        <li> <span class="input-checker"> <input type="checkbox"
                                        name="apt_vehicle_services_needed" id="apt_vehicle_services_needed"
                                        value=" Air Conditioning"> </span> {{ $GarageService->name }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="clearfix">
                                <div class="sec-title">
                                    <h3 class="skew-lines">Contact Details</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="form-group"> <input type="text" name="apt_customer_name"
                                                id="apt_customer_name" value="" placeholder="Enter Your Name"></div>
                                        <div class="form-group"> <input type="email" name="apt_customer_email"
                                                id="apt_customer_email" value="" placeholder="Enter Your Email Address">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group"> <input type="text" name="apt_customer_subject"
                                                id="apt_customer_subject" value="" placeholder="Enter a Subject"></div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="form-group"><textarea name="apt_customer_message"
                                                id="apt_customer_message" placeholder="Type Message Here"></textarea></div>
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

@endsection
