@extends('layouts.website')

@section('content')

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.0.2/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.0.2/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <div class="vc_row wpb_row vc_row-fluid">

        {{-- <div class="wpb_column col-md-12">
        <div class="swiffy-slider">
            <ul class="slider-container">
                <li>
                    <h1>HEY HEY</h1>
                    <img src="https://source.unsplash.com/49b9l_29ceA/1600x900" style="max-width: 100%;height: auto;">
                </li>
                <li>
                    <img src="https://source.unsplash.com/nKAglN6HBH8/1600x900" style="max-width: 100%;height: auto;">
                </li>
                <li>
                    <img src="https://source.unsplash.com/E9ZwWcMGzj8/1600x900" style="max-width: 100%;height: auto;">
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
        
    </div> --}}


        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column col-md-12">
                <div class="wpb_revslider_element wpb_content_element main-slider">
                    <div class="forcefullwidth_wrapper_tp_banner" id="rev_slider_1_1_forcefullwidth"
                        style="position:relative;width:100%;height:auto;margin-top:0px;margin-bottom:0px">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                            data-source="gallery"
                            style="margin: 0px auto; background: transparent; padding: 0px; height: 620px; position: absolute; overflow: visible; width: 1519px; left: 0px;">
                            <div id="rev_slider_1_1"
                                class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus"
                                style="max-height: 620px; margin-top: 0px; margin-bottom: 0px; height: 620px;"
                                data-version="5.4.7.3" data-slideactive="rs-2">
                                <ul class="tp-revslider-mainul"
                                    style="visibility: visible; display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300"
                                        data-thumb="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-1-100x50.jpg"
                                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                        data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                                        class="tp-revslider-slidesli"
                                        style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0; background-color: rgba(255, 255, 255, 0);">
                                        <div class="slotholder"
                                            style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                            <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-1.jpg" alt="" title="image-1.jpg" width="1539" height="626" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                            <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                style="background-repeat: no-repeat; background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-1.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-1.jpg">
                                            </div>
                                        </div>
                                        <div class="tp-parallax-wrap"
                                            style="position: absolute; display: block; visibility: hidden; left: 400px; top: 191px; z-index: 5;">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap"
                                                    style="position: absolute; display: block; overflow: visible;">
                                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme"
                                                        id="slide-1-layer-1" data-x="['center','center','center','center']"
                                                        data-hoffset="['22','22','22','22']"
                                                        data-y="['middle','middle','middle','middle']"
                                                        data-voffset="['-80','-80','-80','-80']" data-width="none"
                                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 5; white-space: nowrap; color: rgb(255, 255, 255); visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 900; font-size: 60px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                        <div class="grey-title"
                                                            style="transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 10px 20px; letter-spacing: 2px; font-weight: 900; font-size: 60px;">
                                                            <h2
                                                                style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 300; font-size: 48px;">
                                                                <strong
                                                                    style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 700; font-size: 48px;">THE
                                                                    BEST</strong> CAR REPAIR SERVICE</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-parallax-wrap"
                                            style="position: absolute; display: block; visibility: hidden; left: 514px; top: 309px; z-index: 6;">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap"
                                                    style="position: absolute; display: block; overflow: visible;">
                                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme"
                                                        id="slide-1-layer-2" data-x="['left','left','left','left']"
                                                        data-hoffset="['374','374','374','374']"
                                                        data-y="['top','top','top','top']"
                                                        data-voffset="['309','309','309','309']" data-width="none"
                                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 6; white-space: nowrap; visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 900; font-size: 60px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                        <div class="white-title"
                                                            style="transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 10px 20px; letter-spacing: 2px; font-weight: 900; font-size: 60px;">
                                                            <h2
                                                                style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 300; font-size: 48px;">
                                                                WE REPAIR SINCE 2001</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300"
                                        data-thumb="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-2-100x50.jpg"
                                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                        data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                                        class="tp-revslider-slidesli active-revslide"
                                        style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1; background-color: rgba(255, 255, 255, 0);">
                                        <div class="slotholder"
                                            style="position: absolute; top: 0px; left: 0px; z-index: 0; width: 100%; height: 100%; visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                            <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-2.jpg" alt="" title="image-2.jpg" width="1539" height="626" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                            <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                style="background-repeat: no-repeat; background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-2.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-2.jpg">
                                            </div>
                                        </div>
                                        <div class="tp-parallax-wrap"
                                            style="position: absolute; display: block; visibility: visible; left: 235px; top: 137px; z-index: 7;">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap"
                                                    style="position: absolute; display: block; overflow: visible;">
                                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme"
                                                        id="slide-2-layer-1" data-x="['center','center','center','center']"
                                                        data-hoffset="['-161','-161','-161','-161']"
                                                        data-y="['middle','middle','middle','middle']"
                                                        data-voffset="['-134','-134','-134','-134']" data-width="none"
                                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 7; white-space: nowrap; color: rgb(255, 255, 255); visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 900; font-size: 60px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                        <div class="grey-title"
                                                            style="transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 10px 20px; letter-spacing: 2px; font-weight: 900; font-size: 60px;">
                                                            <h2
                                                                style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 300; font-size: 48px;">
                                                                <strong
                                                                    style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 700; font-size: 48px;">WE
                                                                    HEAR</strong> SMILE AND <strong
                                                                    style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 700; font-size: 48px;">REPAIR</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-parallax-wrap"
                                            style="position: absolute; display: block; visibility: visible; left: 456px; top: 257px; z-index: 8;">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap"
                                                    style="position: absolute; display: block; overflow: visible;">
                                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme"
                                                        id="slide-2-layer-2" data-x="['center','center','center','center']"
                                                        data-hoffset="['45','45','45','45']"
                                                        data-y="['middle','middle','middle','middle']"
                                                        data-voffset="['-14','-14','-14','-14']" data-width="none"
                                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 8; white-space: nowrap; color: rgb(255, 255, 255); visibility: inherit; transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 900; font-size: 60px; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                        <div class="white-title"
                                                            style="transition: none 0s ease 0s; text-align: left; line-height: 60px; border-width: 0px; margin: 0px; padding: 10px 20px; letter-spacing: 2px; font-weight: 900; font-size: 60px;">
                                                            <h2
                                                                style="transition: none 0s ease 0s; text-align: inherit; line-height: 57px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 2px; font-weight: 300; font-size: 48px;">
                                                                OUR GOAL IS SATISFACTION</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300"
                                        data-thumb="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-3-100x50.jpg"
                                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                        data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                                        class="tp-revslider-slidesli" style="width: 100%; height: 100%; overflow: hidden;">
                                        <div class="slotholder"
                                            style="position:absolute; top:0px; left:0px; z-index:0;width:100%;height:100%;">
                                            <!--Runtime Modification - Img tag is Still Available for SEO Goals in Source - <img src="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-3.jpg" alt="" title="image-3.jpg" width="1539" height="626" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg defaultimg" data-no-retina="">-->
                                            <div class="tp-bgimg defaultimg " data-bgcolor="undefined"
                                                style="background-repeat: no-repeat; background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-3.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 0;"
                                                src="https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-3.jpg">
                                            </div>
                                        </div>
                                        <div class="tp-parallax-wrap "
                                            style=" position:absolute;display:block;;visibility:hidden">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme"
                                                        id="slide-3-layer-1" data-x="['left','left','left','left']"
                                                        data-hoffset="['68','68','68','68']"
                                                        data-y="['top','top','top','top']"
                                                        data-voffset="['189','189','189','189']" data-width="none"
                                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 9; white-space: nowrap; visibility: hidden;">
                                                        <div class="grey-title">
                                                            <h2><strong>THE ONLY</strong> CAR REPAIR SERVICE IN YOUR AREA
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-parallax-wrap "
                                            style=" position:absolute;display:block;;visibility:hidden">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme"
                                                        id="slide-3-layer-2" data-x="['left','left','left','left']"
                                                        data-hoffset="['284','284','284','284']"
                                                        data-y="['top','top','top','top']"
                                                        data-voffset="['305','305','305','305']" data-width="none"
                                                        data-height="none" data-whitespace="nowrap" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames="[{&quot;from&quot;:&quot;opacity:0;&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:500,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 10; white-space: nowrap; visibility: hidden;">
                                                        <div class="white-title">
                                                            <h2>WE REPAIR WITH LOVE</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom"
                                    style="visibility: hidden; width: 66.5222%; transform: translate3d(0px, 0px, 0px);">
                                </div>
                                <div class="tp-loader spinner0" style="display: none;">
                                    <div class="dot1"></div>
                                    <div class="dot2"></div>
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                                <div class="tp-leftarrow tparrows hermes  noSwipe"
                                    style="top: 50%; transform: matrix(1, 0, 0, 1, 20, -55); left: 0px;">
                                    <div class="tp-arr-allwrapper">
                                        <div class="tp-arr-imgholder"
                                            style="background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-1-100x50.jpg&quot;);">
                                        </div>
                                        <div class="tp-arr-titleholder">Slide</div>
                                    </div>
                                </div>
                                <div class="tp-rightarrow tparrows hermes  noSwipe"
                                    style="top: 50%; transform: matrix(1, 0, 0, 1, -50, -55); left: 100%;">
                                    <div class="tp-arr-allwrapper">
                                        <div class="tp-arr-imgholder"
                                            style="background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-3-100x50.jpg&quot;);">
                                        </div>
                                        <div class="tp-arr-titleholder">Slide</div>
                                    </div>
                                </div>
                                <div class="tp-bullets ares horizontal nav-pos-hor-center nav-pos-ver-bottom nav-dir-horizontal noSwipe"
                                    style="width: 49px; height: 13px; top: 100%; transform: matrix(1, 0, 0, 1, -25, -33); left: 50%;">
                                    <div class="tp-bullet" style="left: 0px; top: 0px;"><span
                                            class="tp-bullet-title">Slide</span></div>
                                    <div class="tp-bullet selected" style="left: 18px; top: 0px;"><span
                                            class="tp-bullet-title">Slide</span></div>
                                    <div class="tp-bullet" style="left: 36px; top: 0px;"><span
                                            class="tp-bullet-title">Slide</span></div>
                                </div>
                                <div class="tp-thumbs  inner hesperiden nav-pos-hor-center nav-pos-ver-bottom nav-dir-horizontal"
                                    style="max-width: 310px; max-height: 50px; overflow: visible; position: absolute; background: transparent; padding: 5px; top: 100%; transform: matrix(1, 0, 0, 1, -160, -80); left: 50%;">
                                    <div class="tp-thumb-mask"
                                        style="max-width: 310px; max-height: 50px; overflow: hidden; position: relative;">
                                        <div class="tp-thumbs-inner-wrapper"
                                            style="position: relative; width: 310px; height: 50px; left: 0px;">
                                            <div data-liindex="0" data-liref="rs-1" class="tp-thumb"
                                                style="width: 100px; height: 50px; left: 0px; top: 0px;"><span
                                                    class="tp-thumb-image"
                                                    style="background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-1-100x50.jpg&quot;);"></span><span
                                                    class="tp-thumb-title">Slide</span></div>
                                            <div data-liindex="1" data-liref="rs-2" class="tp-thumb selected"
                                                style="width: 100px; height: 50px; left: 105px; top: 0px;"><span
                                                    class="tp-thumb-image"
                                                    style="background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-2-100x50.jpg&quot;);"></span><span
                                                    class="tp-thumb-title">Slide</span></div>
                                            <div data-liindex="2" data-liref="rs-3" class="tp-thumb"
                                                style="width: 100px; height: 50px; left: 210px; top: 0px;"><span
                                                    class="tp-thumb-image"
                                                    style="background-image: url(&quot;https://ourwpdemo.com/carshire/wp-content/uploads/revslider/home/image-3-100x50.jpg&quot;);"></span><span
                                                    class="tp-thumb-title">Slide</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-fullwidth-forcer" style="width: 100%; height: 620px;"></div>
                    </div>
                </div>
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
                                            <p>Union Star Auto Garage was established more than ten years ago by industry experts, dedicated to providing the best motor vehicle and customer service available. One of the keys to safe motoring is good vehicle maintenance. It is the best way to ensure that your car is driving in the best possible condition, and it can also save you money in the long run. The people at Union Start Auto Garage have always supported vehicle maintenance with excellent scheduled servicing, but they’ve gone even further. As a Key Customer you are entitled to a range of benefits simply for looking after your car. Benefits that make it easy to keep your car in top condition and give you real peace of mind. Whether it’s a regular service or having someone to call when you break down, the team at Union Start Auto Garage are the ones you can rely on to look after your car thoroughly and professionally. So enjoy the Union Start Auto Garage difference in the knowledge that your car is being cared for by people you can trust.</p>
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
                                            <div class="text">{{ $GarageService->content }}</div>
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
