@extends('layouts.website')

@section('title', 'Contact Us')

@section('content')

    <div class="page-wrapper">
        <section class="page-banner" style="background-image:url('../wp-content/uploads/2015/12/page-banner-1.jpg');">
            <div class="auto-container">
                <div class="page-title">
                    <h1>Contact Us</h1>
                </div>
                <div class="bread-crumb text-right"> <span class="initial-text">You Are Here: </span>
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="vc_row wpb_row vc_row-fluid padding_top">
            <div class="container">
                <div class="wpb_column col-md-8">
                    <div class="contact-form">
                        <div class="sec-title">
                            <h3 class="skew-lines">Leave a Message</h3>
                        </div>
                        <div class="msg-text">Fill out all required fields to send a message. Please don´t spam, thank you!</div>
                        <div role="form" class="wpcf7" id="wpcf7-f362-p8-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="https://ourwpdemo.com/carshire/contact-style-one/#wpcf7-f362-p8-o1" method="post"
                                class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;"> <input type="hidden" name="_wpcf7" value="362"> <input
                                        type="hidden" name="_wpcf7_version" value="5.0.3"> <input type="hidden"
                                        name="_wpcf7_locale" value="en_US"> <input type="hidden" name="_wpcf7_unit_tag"
                                        value="wpcf7-f362-p8-o1"> <input type="hidden" name="_wpcf7_container_post"
                                        value="8"></div>
                                <div class="row clearfix">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="form-group"><label class="form-label">Name</label><span
                                                class="wpcf7-form-control-wrap text-35"><input type="text" name="text-35"
                                                    value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Name"></span></div>
                                        <div class="form-group"><label class="form-label">Email</label><span
                                                class="wpcf7-form-control-wrap email-264"><input type="email"
                                                    name="email-264" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Email Address"></span></div>
                                        <div class="clearfix"></div>
                                        <div class="form-group"><label class="form-label">Phone</label><span
                                                class="wpcf7-form-control-wrap text-34"><input type="text" name="text-34"
                                                    value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter a Subject"></span></div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="form-group"><label class="form-label">Message</label><span
                                                class="wpcf7-form-control-wrap textarea-51"><textarea name="textarea-51"
                                                    cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Type Message Here"></textarea></span></div>
                                    </div>
                                </div>
                                <div class="form-group text-right"><input type="submit" value="Send Message"
                                        class="wpcf7-form-control wpcf7-submit theme-btn dark-btn hvr-bounce-to-right"><span
                                        class="ajax-loader"></span></div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-md-4">
                    <div class="wpb_widgetised_column wpb_content_element">
                        <div class="wpb_wrapper">
                            
                            <div id="bunch_conatct_info_sidebar-3"
                                class="side-bar widget sidebar_widget widget_bunch_conatct_info_sidebar">
                                <div class="widget cont-info">
                                    <div class="sec-title">
                                        <h3 class="skew-lines">company info</h3>
                                    </div>
                                    <div class="cont-box">
                                        <div class="text">If you are in the middle of something and you don’t want
                                            to miss that important call.</div>
                                        <ul class="info">
                                            <li><strong>Phone</strong> <a href="#">+971 (04) 257 9984</a></li>
                                            <li><strong>Address</strong> <a href="#">13 Street 2 - 
                                                <br/>Al Qusais Industrial Area
                                                <br/>
                                                Al Qusais Industrial Area 1,
                                                <br/>
                                                Dubai, UAE</a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p></p>
        <section class="contact-options"></section>
    </div>


@endsection
