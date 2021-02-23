@extends('template.master')
@section('content')
<!--==========================
  Hero Section
============================-->
<section id="hero" class="clearfix">
    <div class="container">

        <div class="hero-banner"dir="rtl">
            <img src="{{asset('site')}}/img/intro-carousel/banner.svg" alt="" class="img-fluid">
        </div>

        <div class="hero-content" dir="rtl">
           <h2> دار التطوير<br>
            <span>لأنظمة التتبع و إدارة السطول</span></h2>
            <div>
                <a href="#" class="btn-banner">ماذا نقدم لك؟</a>
            </div>
        </div>

    </div>
</section><!-- #Hero -->

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp" dir="rtl">
        <div class="container">
            <div class="section-header">
                <h2>تعرف علينا</h2>
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</p> -->
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{asset('site')}}/img/about.svg" alt="">
                </div>

                <div class="col-lg-6 content" dir="rtl">
                  <!--  <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2> -->
                   <!-- <h3>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident</h3> -->
                    <p >نحن شركة سعوديه متخصصه في الحلول التقنيه و الذكاء الإصطناعي لأساطيل النقل و المركبات الخاصه و الحكوميه بإدارة نخبه من الكفاءات الوطنيه الطموحه و نحن احد فروع شركة ديارات التجاريه (مساهمه مقفله) الرائده في اعمال الطرق والتقنيات المروريه والأمنيه و الطبيه و الغذائيه منذ عام 1988م</p>
                    
                </div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" dir="rtl">
        <div class="container">
            <div class="section-header">
                <h2>خدماتنا</h2>
              
            </div>

            <div class="row" dir="rtl">

                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-wifi" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">مطابقة الأوزان</a></h4>
                        <p class="description">نقدم خدمة تحميل و وزن الشاحنات لتوفير الوقت على عملائنا و مطابقة أوزان شاحناتهم الفعلي مع الوزن الظاهر في انظمة هيئة النقل دون الحاجه لزياره ميزان شاحنات للمطابقه</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">إصدار كرت التشغيل</a></h4>
                        <p class="description">نقدم خدمة تحميل و وزن الشاحنات لتوفير الوقت على عملائنا و مطابقة أوزان شاحناتهم الفعلي مع الوزن الظاهر في انظمة هيئة النقل دون الحاجه لزياره ميزان شاحنات للمطابقه</p>
                    </div>
                </div>

                {{-- <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">Strategy</a></h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
                    </div>
                </div> --}}

                <div class="col-lg-4">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">أنظمة ادارة الأسطول المتكامله</a></h4>
                        <p class="description">أنظمة التتبع و الإداره للمركبات عن بعد بمميزات عده عن طريق تقنيات الذكاء الإصطناعي التي تمكن المستخدم من اعطاء الأوامر و الإطلاع على البيانات لكامل الأسطول عن طريق النظام مع إمكانية اصدار تقارير مفصله حسب احتياج المستخدم و اضافة تقنيات امنيه تمنع السرقات او التعدي على المركبات بإذن الله</p>
                    </div>
                </div>

                {{-- <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">Analysis</a></h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla.</p>
                    </div>
                </div> --}}

                <div class="col-lg-4">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="">التتبع و الحمايه للسيارات الخاصه</a></h4>
                        <p class="description">خدمة تمكنك من معرفة مكان و سرعة سيارتك و معرفة اوقات و اماكن توقفها بشكل لحظي و توفير خدمات امنيه في حالة السرقه مثل التقاط صوره للسائق و إيقاف تشغيل المحرك عن بعد و التنبيه بحصول حادث لا قدر الله عن طريق تطبيق على هاتفك الذكي</p>
                    </div>
                </div>
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
{{--    <section id="testimonials" class="wow fadeInUp">--}}
{{--        <div class="container">--}}
{{--            <div class="section-header">--}}
{{--                <h2>Testimonials</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>--}}
{{--            </div>--}}
{{--            <div class="owl-carousel testimonials-carousel">--}}

{{--                <div class="testimonial-item">--}}
{{--                    <p>Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore--}}

{{--                    </p>--}}
{{--                    <h3>Mrio James</h3>--}}
{{--                    <h4>CEO &amp; Founder</h4>--}}
{{--                </div>--}}

{{--                <div class="testimonial-item">--}}
{{--                    <p>--}}
{{--                        Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore--}}

{{--                    </p>--}}
{{--                    <h3>Finton Gofnes</h3>--}}
{{--                    <h4>CTO</h4>--}}
{{--                </div>--}}

{{--                <div class="testimonial-item">--}}
{{--                    <p>--}}
{{--                        Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore--}}

{{--                    </p>--}}
{{--                    <h3>Marcus Kell</h3>--}}
{{--                    <h4>Marketing</h4>--}}
{{--                </div>--}}

{{--                <div class="testimonial-item">--}}
{{--                    <p>--}}
{{--                        Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore--}}

{{--                    </p>--}}
{{--                    <h3>Williams Belly</h3>--}}
{{--                    <h4>Accounts</h4>--}}
{{--                </div>--}}

{{--                <div class="testimonial-item">--}}
{{--                    <p>--}}
{{--                        Dolores quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore--}}

{{--                    </p>--}}
{{--                    <h3>Larry Hanson</h3>--}}
{{--                    <h4>Investor</h4>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- #testimonials -->--}}

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row" dir="rtl">
                <div class="col-lg-9 text-center text-lg-left">
                   <!-- <h3 class="cta-title">Get Our Service</h3> -->
                    <p class="cta-text">نقدم لك خدماتنا في اي من مراكز الخدمه المعتمده المنتشره في جميع انحاء المملكه أو ارسال فريق فني لخدمتك في موقعك</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#contact">تواصل معنا</a>
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
    <section id="contact" class="wow fadeInUp" dir="rtl">
        <div class="container">
            <div class="section-header">
                <h2>تسرنا خدمتك</h2>
                <p>خدمتك أولويتنا ونسعد بتواصلك معنا
                </p>
            </div>

            <div class="row contact-info" dir="rtl">
                <div class="col-lg-5">
                     <!--<div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>MN-12 Lincon Street, NewYork 12356, USA</address>
                    </div>-->
                    <div class="contact-phone" dir="rtl">
                        <i class="ion-ios-telephone-outline" dir="rtl"></i>
                        <h3>عن طريق الواتساب  </h3>
                        <p><a href="tel:+155895548855">966508803086+</a></p>
                    </div>
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>البريد الإلكتروني</h3>
                        <p><a href="mailto:info@example.com">info@hod.sa</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="form">

                            <!-- Form itself -->
                            <form name="sentMessage" class="well" id="contactForm"  novalidate dir="rtl">
                                <div class="control-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               placeholder="الإسم" id="name" required
                                               data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="email" class="form-control" placeholder="الإيميل"
                                               id="email" required
                                               data-validation-required-message="Please enter your email" />
                                    </div>
                                </div>

                                <div class="form-group">
                             <div class="controls">
			           	 <textarea rows="10" cols="100" class="form-control"
                           placeholder="اكتب ستفسارك هنا" id="message" required
                           data-validation-required-message="Please enter your message" minlength="5"
                           data-validation-minlength-message="Min 5 characters"
                           maxlength="999" style="resize:none"></textarea>
                                    </div>
                                </div>
                                <div id="success"> </div> <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary pull-right">إرسال</button><br />
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div class="container mb-4 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d387191.33750346623!2d-73.979681!3d40.6974881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1541477355474" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </section><!-- #contact -->

</main>
@endsection
