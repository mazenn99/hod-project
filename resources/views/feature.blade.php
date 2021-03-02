@extends('template.master')
@section('title' , 'Feature system')
@section('content')
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
                            <h2>{{trans('home/feature.happy_serve_you')}}</h2>
                            <p>
                                {{trans('home/index.your_service_is_our_priority')}}
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
@endsection
