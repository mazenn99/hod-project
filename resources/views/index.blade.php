@extends('template.master')
@section('content')
<!--==========================
  Hero Section
============================-->
<section id="hero" class="clearfix">
    <div class="container">

        <div class="hero-banner">
            <img src="{{asset('site')}}/img/intro-carousel/banner_gb4.png" alt="" class="img-fluid">
        </div>

        <div class="hero-content" >
           <h2>{{trans('home/index.company_name')}}<br>
            <span>{{trans('home/index.tracking_and_management')}} @if(app()->getLocale() == 'en') <br> {{trans('home/index.fleet_management_systems')}} @endif </span></h2>
            <div>
                <a href="#services" class="btn-banner">{{trans('home/index.what_we_serve_to_you')}}</a>
            </div>
        </div>

    </div>
</section><!-- #Hero -->

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp" >
        <div class="container">
            <div class="section-header">
                <h2>{{trans('home/index.get_to_know_us')}}</h2>
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p> --}}
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{asset('site')}}/img/intro-carousel/banner_gb2.png" alt="">
                </div>

                <div class="col-lg-6 content" >
{{--                   <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>--}}
{{--                    <h3>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident</h3>--}}
                    <p class="mt-5 h4">{{trans('home/index.over_view')}} <br><br> {{trans('home/index.over_view_continue')}}</p>

                </div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" >
        <div class="container">
            <div class="section-header">
                <h2>{{trans('home/index.our_service')}}</h2>

            </div>

            <div class="row" >

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fas fa-truck-moving"></i></div>
                        <h4 class="title"><a href="">{{trans('home/index.matching_weights')}}</a></h4>
                        <p class="description">{{trans('home/index.Weights_Matching_Service')}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">{{trans('home/index.Tracking_protection_service')}}</a></h4>
                        <p class="description">{{trans('home/index.Tracking_protection_service_overView')}}</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">{{trans('home/index.integrated_fleet_management_systems')}}</a></h4>
                        <p class="description">{{trans('home/index.Integrated_management_systems')}}</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">{{trans('home/index.operating_card_version')}}</a></h4>
                        <p class="description">{{trans('home/index.Operation_card_service')}} </p>
                    </div>
                </div>

                {{-- <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">Strategy</a></h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
                    </div>
                </div> --}}


                {{-- <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">Analysis</a></h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
                    </div>
                </div> --}}

            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
   {{--  ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Clients</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="{{asset('site')}}/img/clients/client-1.png" alt="">
                <img src="{{asset('site')}}/img/clients/client-2.png" alt="">
                <img src="{{asset('site')}}/img/clients/client-3.png" alt="">
                <img src="{{asset('site')}}/img/clients/client-4.png" alt="">
                <img src="{{asset('site')}}/img/clients/client-5.png" alt="">
                <img src="{{asset('site')}}/img/clients/client-6.png" alt="">
            </div>

        </div>
    </section><!-- #clients -->
    --}}
{{--    <!--==========================--}}
{{--      Our Portfolio Section--}}
{{--    ============================-->--}}
{{--    <section id="portfolio" class="wow fadeInUp">--}}
{{--        <div class="container">--}}
{{--            <div class="section-header">--}}
{{--                <h2>Our Portfolio</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container-fluid">--}}
{{--            <div class="row no-gutters">--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="{{asset('site')}}/img/portfolio/1.jpg" class="portfolio-popup">--}}
{{--                            <img src="{{asset('site')}}/img/portfolio/1.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="{{asset('site')}}/img/portfolio/2.jpg" class="portfolio-popup">--}}
{{--                            <img src="{{asset('site')}}/img/portfolio/2.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="{{asset('site')}}/img/portfolio/3.jpg" class="portfolio-popup">--}}
{{--                            <img src="{{asset('site')}}/img/portfolio/3.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="{{asset('site')}}/img/portfolio/4.jpg" class="portfolio-popup">--}}
{{--                            <img src="{{asset('site')}}/img/portfolio/4.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="{{asset('site')}}/img/portfolio/5.jpg" class="portfolio-popup">--}}
{{--                            <img src="{{asset('site')}}/img/portfolio/5.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="{{asset('site')}}/img/portfolio/6.jpg" class="portfolio-popup">--}}
{{--                            <img src="{{asset('site')}}/img/portfolio/6.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="img/portfolio/7.jpg" class="portfolio-popup">--}}
{{--                            <img src="img/portfolio/7.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="portfolio-item wow fadeInUp">--}}
{{--                        <a href="img/portfolio/8.jpg" class="portfolio-popup">--}}
{{--                            <img src="img/portfolio/8.jpg" alt="">--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- #portfolio -->--}}

    <!--==========================
      Testimonials Section
    ============================-->

    <section id="testimonials" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>{{trans('home/feature.feature_system')}}</h2>
                <p>{{trans('home/feature.feature_system_overview')}}</p>
            </div>
            <div class="owl-carousel testimonials-carousel" style="direction:rtl;transform: translate3d(0, 0px, 0px) !important;" dir="rtl" >

                <div class="testimonial-item">
                    <p><i class="fa fa-shield fa-3x mb-2" aria-hidden="true"></i> <br>
                        {{trans('home/feature.security_topic')}}

                    </p>
                    <h3>{{trans('home/feature.security_title')}}</h3>
{{--                    <h4>CEO &amp; Founder</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-clock-o fa-3x mb-2" aria-hidden="true"></i> <br>
                        {{trans('home/feature.safe_time_topic')}}

                    </p>
                    <h3>{{trans('home/feature.safe_time_title')}}</h3>
                    {{--                    <h4>Marketing</h4>--}}
                </div>

                <div class="testimonial-item" >
                    <p>
                        <i class="fa fa-money fa-3x mb-2" aria-hidden="true"></i> <br>
                        {{trans('home/feature.safe_money_topic')}}

                    </p>
                    <h3>{{trans('home/feature.safe_money_title')}}</h3>
{{--                    <h4>CTO</h4>--}}
                </div>


                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-map-marker fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.live_tracking_topic')}}

                    </p>
                    <h3>{{trans('home/feature.live_tracking_title')}}</h3>
{{--                    <h4>Accounts</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fas fa-gamepad fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.full_control_topic')}}

                    </p>
                    <h3>{{trans('home/feature.full_control_title')}}</h3>
{{--                    <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-globe fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.geographical_fence_topic')}}
                    </p>
                    <h3>{{trans('home/feature.geographical_fence_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-window-minimize fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.memory_topic')}}

                    </p>
                    <h3>{{trans('home/feature.memory_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fas fa-satellite-dish fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.satellite_topic')}}

                    </p>
                    <h3>{{trans('home/feature.satellite_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-camera fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.camera_topic')}}
                    </p>
                    <h3>{{trans('home/feature.camera_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-bell-o fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.notifications_topic')}}

                    </p>
                    <h3>{{trans('home/feature.notifications_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-minus-circle fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.speed_limiting_topic')}}
                    </p>
                    <h3>{{trans('home/feature.speed_limiting_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-microphone fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.microphone_topic')}}
                    </p>
                    <h3>{{trans('home/feature.microphone_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-file-text fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.Multiple_reports_topic')}}
                    </p>
                    <h3>{{trans('home/feature.Multiple_reports_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-language fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.different_language_topic')}}
                    </p>
                    <h3>{{trans('home/feature.different_language_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="fa fa-thumb-tack fa-3x mb-2" aria-hidden="true"></i> <br>

                        {{trans('home/feature.accelerated_growth_topic')}}                    </p>
                    <h3>{{trans('home/feature.accelerated_growth_title')}}</h3>
{{--                                        <h4>Investor</h4>--}}
                </div>

            </div>

{{--            <div class="row">--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.security_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.security_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.safe_money_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.safe_money_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.safe_time_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.safe_time_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.live_tracking_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.live_tracking_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.full_control_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.full_control_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.geographical_fence_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.geographical_fence_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.memory_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.memory_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.satellite_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.satellite_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.camera_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.camera_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.notifications_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.notifications_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.speed_limiting_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.speed_limiting_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.microphone_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.microphone_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.Multiple_reports_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.Multiple_reports_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.different_language_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.different_language_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.accelerated_growth_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.accelerated_growth_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-3 col-md-3 col-sm-12">--}}
{{--                    <div class="card border-light mb-3" style="max-width: 18rem;">--}}
{{--                        <div class="card-header">{{trans('home/feature.Multiple_reports_title')}}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            --}}{{--                            <h5 class="card-title">Light card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                {{trans('home/feature.Multiple_reports_topic')}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                   <!-- <h3 class="cta-title">Get Our Service</h3> -->
                    <p class="cta-text h5">{{trans('home/index.provide')}}</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{route('feature_system_view')}}">{{trans('home/index.contact_us')}}</a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
{{--    <section id="team" class="wow fadeInUp">--}}
{{--        <div class="container">--}}
{{--            <div class="section-header">--}}
{{--                <h2>Our Team</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="member">--}}
{{--                        <div class="pic"><img src="{{asset('site')}}/img/team1.jpg" alt=""></div>--}}
{{--                        <div class="details">--}}
{{--                            <h4>James Smith</h4>--}}
{{--                            <span>Chief Executive Officer</span>--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                                <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                                <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                                <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="member">--}}
{{--                        <div class="pic"><img src="{{asset('site')}}/--}}
{{--                        img/team2.jpg" alt=""></div>--}}
{{--                        <div class="details">--}}
{{--                            <h4>Michell Kellon</h4>--}}
{{--                            <span>Technical Manager</span>--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                                <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                                <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                                <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="member">--}}
{{--                        <div class="pic"><img src="{{asset('site')}}/img/team3.jpg" alt=""></div>--}}
{{--                        <div class="details">--}}
{{--                            <h4>French Lincon</h4>--}}
{{--                            <span>Financial Manager</span>--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                                <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                                <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                                <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="member">--}}
{{--                        <div class="pic"><img src="{{asset('site')}}/img/team4.jpg" alt=""></div>--}}
{{--                        <div class="details">--}}
{{--                            <h4>Amanda Jepson</h4>--}}
{{--                            <span>Accountant</span>--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                                <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                                <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                                <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- #team -->--}}



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp" >
        <div class="container">
            <div class="section-header">
                <h2>{{trans('home/index.pleased_to_serve_you')}}</h2>
                <p>
                    {{trans('home/index.your_service_is_our_priority')}}
                </p>
            </div>

            <div class="row contact-info" >
                <div class="col-lg-5">
                     <!--<div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>MN-12 Lincon Street, NewYork 12356, USA</address>
                    </div>-->
                    <div class="contact-phone" >
                        <i class="ion-ios-telephone-outline" ></i>
                        <h3>{{trans('home/index.via_whatsapp')}}</h3>
                        <p><a href="http://api.whatsapp.com/send?phone=+966508803086">+966508803086</a></p>
                    </div>
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>{{trans('home/index.email')}}</h3>
                        <p><a href="mailto:info@hod.sa">info@hod.sa</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="form">
                            @if(session()->has('success'))
                                <div class="alert alert-success">{{session()->get('success')}}</div>
                            @endif
                            <!-- Form itself -->
                            <form name="sentMessage" action="{{route('send.email')}}" method="POST" class="well" id="contactForm"  novalidate >
                                @csrf
                                <div class="control-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="{{trans('home/index.form_name')}}" id="name" required
                                               data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                        @error('name')
                                            <small class="small text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="email" class="form-control" placeholder="{{trans('home/index.form_email')}}"
                                               id="email" required name="email"
                                               data-validation-required-message="Please enter your email" />
                                        @error('email')
                                        <small class="small text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                             <div class="controls">
			           	 <textarea rows="10" cols="100" class="form-control" name="description"
                           placeholder="{{trans('home/index.form_textarea')}}" id="message" required
                           data-validation-required-message="Please enter your message" minlength="5"
                           data-validation-minlength-message="Min 5 characters"
                           maxlength="999" style="resize:none"></textarea>
                                 @error('description')
                                 <small class="small text-danger">{{$message}}</small>
                                 @enderror
                                    </div>
                                </div>
                                <div id="success"> </div> <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary pull-right">{{trans('home/index.send_button')}}</button><br />
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div class="container mb-4 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.0471607875297!2d46.75202871499953!3d24.690905484134237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f06ae97135a9f%3A0x1c06c3a480e41e88!2sDeyarat%20Co.!5e0!3m2!1sen!2ssa!4v1614109413067!5m2!1sen!2ssa" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </section><!-- #contact -->

</main>
@endsection
