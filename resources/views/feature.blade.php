<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="<?php if(app()->getLocale() == 'en') echo 'ltr'; else echo 'rtl';?>">
<head>
    <meta charset="utf-8">
    <title>{{trans('home/header.title')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="house of development , hod , {{trans('home/header.title')}}">
    <meta content="" name="{{__('home/index.over_view')}}">
    <meta content="Author" name="aaysha1420@gmail.com">
    <!-- Favicons -->
    <link href="{{asset('site')}}/img/fav-logo.png" rel="icon">
    <link href="{{asset('site')}}/img/logo_company.png" rel="apple-touch-icon" sizes="16x16">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS File -->
    @if(app()->getLocale() == 'en')
        <link href="{{asset('site')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    @else
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
@endif
<!-- Libraries CSS Files -->
    <link href="{{asset('site')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('site')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('site')}}/css/style.css" rel="stylesheet">
</head>

<body id="body">
<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">
                    {{--                    <span>--}}
                    {{--                        <i class="fa fa-star-half-o" aria-hidden="true"> </i> --}}
                    {{--                    </span>--}}
                    <img src="{{asset('site/img/logo_company.png')}}" alt="">
                </a></h1>
        </div>


        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{route('home')}}">{{trans('home/header.home')}}</a></li>
                <li><a href="{{route('home')}}">{{trans('home/header.about')}}</a></li>
                <li><a href="{{route('home')}}">{{trans('home/header.service')}}</a></li>
                <li><a href="{{route('home')}}">{{trans('home/header.feature_system')}}</a></li>
                {{--                <li><a href="#portfolio">Portfolio</a></li>--}}
                {{--                <li><a href="#team">Our Team</a></li>--}}
                <li><a href="{{route('home')}}">{{trans('home/header.contact')}}</a></li>
                <li><a href="http://gps.hod.sa/">{{trans('home/header.login')}}</a></li>
                <li class="menu-has-children"><a href="">{{trans('home/header.language')}}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li><a rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

    <!--==========================
  Hero Section
============================-->
    <section id="hero" class="clearfix">
        <div class="container">

            <div class="hero-banner">
                <img src="{{asset('site')}}/img/intro-carousel/banner_gb4.png" alt="" class="img-fluid">
            </div>

            <div class="hero-content">
                <h2>{{trans('home/index.company_name')}}<br>
                    <span>{{trans('home/index.tracking_and_management')}} @if(app()->getLocale() == 'en')
                            <br> {{trans('home/index.fleet_management_systems')}} @endif </span></h2>
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
        <section id="about" class="wow fadeInUp">
            <div class="container">
{{--                <div class="section-header">--}}
{{--                    <h2>{{trans('home/feature.feature_system')}}</h2>--}}
{{--                    <p style="font-size:20px;">{{trans('home/feature.feature_system_overview')}}</p>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    --}}{{--                    <div class="col-lg-6 about-img">--}}
{{--                    --}}{{--                        <img src="{{asset('site')}}/img/intro-carousel/banner_gb2.png" alt="">--}}
{{--                    --}}{{--                    </div>--}}

{{--                    <div class="col-lg-12 content">--}}
{{--                        --}}{{--                   <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>--}}
{{--                        --}}{{--                    <h3>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident</h3>--}}
{{--                        --}}{{--                        <p class="mt-5 h4">{{trans('home/index.over_view')}}--}}
{{--                        --}}{{--                            <br><br> {{trans('home/index.over_view_continue')}}</p>--}}
{{--                        <hr class="mb-5">--}}
{{--                        <ul class="feature-checklist">--}}
{{--                            <li><i class="fa fa-shield" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.security_title')}} :           </span> {{trans('home/feature.security_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-money" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.safe_money_title')}} :         </span> {{trans('home/feature.safe_money_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.safe_time_title')}} :          </span> {{trans('home/feature.safe_time_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.live_tracking_title')}} :      </span> {{trans('home/feature.live_tracking_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fas fa-gamepad"></i>--}}
{{--                                <span>{{trans('home/feature.full_control_title')}} :       </span> {{trans('home/feature.full_control_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-globe" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.geographical_fence_title')}} : </span> {{trans('home/feature.geographical_fence_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-window-minimize" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.memory_title')}} :             </span> {{trans('home/feature.memory_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-bolt" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.satellite_title')}} :          </span> {{trans('home/feature.satellite_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-camera" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.camera_title')}} :             </span> {{trans('home/feature.camera_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-bell-o" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.notifications_title')}} :      </span> {{trans('home/feature.notifications_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-minus-circle" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.speed_limiting_title')}} :     </span> {{trans('home/feature.speed_limiting_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-microphone" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.microphone_title')}} :         </span> {{trans('home/feature.microphone_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-file-text" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.Multiple_reports_title')}} :   </span> {{trans('home/feature.Multiple_reports_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fa fa-language" aria-hidden="true"></i>--}}
{{--                                <span>{{trans('home/feature.different_language_title')}} : </span> {{trans('home/feature.different_language_topic')}}--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-thumb-tack" aria-hidden="true"></i><span>{{trans('home/feature.tracks_saving_title')}} :      </span> {{trans('home/feature.tracks_saving_topic')}}--}}
{{--                            </li>--}}
{{--                            <li><i class="fas fa-layer-group"></i>--}}
{{--                                <span>{{trans('home/feature.accelerated_growth_title')}} : </span> {{trans('home/feature.accelerated_growth_topic')}}--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
                <!--==========================
      Contact Section
    ============================-->
                <section id="contact" class="wow fadeInUp">
                    <div class="container">
                        <div class="section-header">
                            <h2>{{trans('home/feature.service_intelligent')}}</h2>
                            <p>
                                {{trans('home/feature.happy_serve_you')}}
                            </p>
                        </div>

                        <div class="row contact-info">
                            <div class="col-lg-12">
                                <div class="container">
                                    <div class="form">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">{{session()->get('success')}}</div>
                                        @endif
                                    <!-- Form itself -->
                                        <form name="sentMessage" action="{{route('ask.price')}}" method="POST"
                                              class="well" id="contactForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="control-group">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                           placeholder="{{trans('home/feature.company_name_or_individual')}}"
                                                           id="name" required
                                                           data-validation-required-message="{{trans('home/feature.company_name_or_individual')}}"/>
                                                    <p class="help-block"></p>
                                                    @error('name')
                                                    <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="number" class="form-control"
                                                           placeholder="{{trans('home/feature.vehicle_number')}}"
                                                           id="number" required name="number"
                                                           data-validation-required-message="{{trans('home/feature.vehicle_number')}}"/>
                                                    @error('number')
                                                    <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control"
                                                           placeholder="{{trans('home/feature.city')}}"
                                                           id="city" required name="city"
                                                           data-validation-required-message="{{trans('home/feature.city')}}"/>
                                                    @error('city')
                                                    <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="tel" class="form-control"
                                                           placeholder="{{trans('home/feature.phone_number')}}"
                                                           id="city" required name="phone"
                                                           data-validation-required-message="{{trans('home/feature.phone_number')}}"/>
                                                    @error('phone')
                                                    <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control"
                                                           placeholder="{{trans('home/feature.position_or_job')}}"
                                                           id="job" required name="job"
                                                           data-validation-required-message="{{trans('home/feature.position_or_job')}}"/>
                                                    @error('job')
                                                    <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
{{--                                                    <label for="image">{{trans('home/feature.Commercial_Register')}}</label>--}}
                                                    <input type="file" class="form-control"
                                                           placeholder="{{trans('home/feature.Commercial_Register')}}"
                                                           id="image" required name="image"
                                                           data-validation-required-message="{{trans('home/feature.Commercial_Register')}}"/>
                                                    <small class="small">{{trans('home/feature.Commercial_Register')}}</small>
                                                    @error('image')
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
                                            <div id="success"></div> <!-- For success/fail messages -->
                                            <button type="submit"
                                                    class="btn btn-primary pull-right">{{trans('home/index.send_button')}}</button>
                                            <br/>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </section><!-- #contact -->
            </div>
        </section><!-- #about -->
    </main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; {{trans('home/index.copyright')}} <strong> {{trans('home/index.copyright_company')}}</strong>
        </div>
        <div class="credits">
            Desgin By <a href="mailto:aayahsa1420@gmail.com">@aysha</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript  -->
<script src="{{asset('site')}}/lib/jquery/jquery.min.js"></script>
<script src="{{asset('site')}}/lib/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('site')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('site')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('site')}}/lib/superfish/hoverIntent.js"></script>
<script src="{{asset('site')}}/lib/superfish/superfish.min.js"></script>
<script src="{{asset('site')}}/lib/wow/wow.min.js"></script>
<script src="{{asset('site')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('site')}}/lib/magnific-popup/magnific-popup.min.js"></script>
<script src="{{asset('site')}}/lib/sticky/sticky.js"></script>
<script src="{{asset('site')}}/contact/jqBootstrapValidation.js"></script>
<script src="{{asset('site')}}/contact/contact_me.js"></script>
<script src="{{asset('site')}}/js/main.js"></script>

</body>
</html>

