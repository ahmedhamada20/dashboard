@extends('front.layouts.master')
@section('title')
   الصفحه الرئيسية
@endsection

@section('css')

@endsection

@section('contact')
    <!--Main Slider-->
    <section class="main-slider margin-top">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image:url({{asset('front/images/main-slider/image-4.jpg')}})">
                <div class="auto-container">
                    <div class="content">
                        <h2 class="alternate">Doors</h2>
                        <h3 class="alternate">That Open For You All.</h3>
                        <div class="text alternate">Must explain to you how all this mistaken idea of denouncing <br> pleasure and praising pain was born & will give you a completed.</div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url({{asset('front/images/main-slider/image-5.jpg')}})">
                <div class="auto-container clearfix">
                    <div class="content alternate">
                        <h2 class="light">Prices</h2>
                        <h3 class="light">We Will Give Lowest Quote.</h3>
                        <div class="text light">Must explain to you how all this mistaken idea of denouncing pleasure and <br> praising pain was born and I will give you a completed.</div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url({{asset('front/images/main-slider/image-6.jpg')}})">
                <div class="auto-container">
                    <div class="content">
                        <h2 class="alternate">Windows</h2>
                        <h3 class="alternate">Available in Wide Range of <span class="theme_color">Colors</span></h3>
                        <div class="text alternate">Must explain to you how all this mistaken idea of denouncing pleasure and <br> praising pain was born and I will give you a completed.</div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Main Slider-->

    <!--Services Section Three-->
    <section class="services-section-three">
        <div class="auto-container">

            <!--Appointment Info Tabs-->
            <div class="appointment-info-tabs wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <!--Window Tabs-->
                <div class="appointment-tabs tabs-box">

                    <!--Tab Btns-->
                    <div class="btns-outer text-center">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="p-tab-btn active-btn" data-tab="#p-tab-1"><span class="icon flaticon-window"></span> Window Types</li>
                            <li class="p-tab-btn" data-tab="#p-tab-2"><span class="icon flaticon-doorway"></span> Door Styles</li>
                            <li class="p-tab-btn" data-tab="#p-tab-3"><span class="icon flaticon-car-parts"></span> Maintenance</li>
                        </ul>
                        <a href="#" class="appointment"><span class="arrow flaticon-right-arrow-2"></span> Make an Appointment</a>
                    </div>

                    <!--Tabs Content-->
                    <div class="p-tabs-content">

                        <!--Portfolio Tab / Active Tab-->
                        <div class="p-tab active-tab" id="p-tab-1">
                            <div class="content">
                                <div class="services-item-carousel owl-carousel owl-theme">

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-4.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Casement</a></h2>
                                                <div class="text">Consequences that are extremely nor of us ever undertakes take a example, of us ever undertakes...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-5.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Sliding Door</a></h2>
                                                <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because is pain circumstances...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-3"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-6.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Tilt & slide</a></h2>
                                                <div class="text">Explain to you how this mistaken idea of denouncinga pleasure and praising pain account of the system...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-2"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-4.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Casement</a></h2>
                                                <div class="text">Consequences that are extremely nor of us ever undertakes take a example, of us ever undertakes...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-5.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Sliding Door</a></h2>
                                                <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because is pain circumstances...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-3"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-6.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Tilt & slide</a></h2>
                                                <div class="text">Explain to you how this mistaken idea of denouncinga pleasure and praising pain account of the system...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-2"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="p-tab" id="p-tab-2">
                            <div class="content">
                                <div class="three-item-carousel owl-carousel owl-theme">

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-5.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Sliding Door</a></h2>
                                                <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because is pain circumstances...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-3"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-4.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Casement</a></h2>
                                                <div class="text">Consequences that are extremely nor of us ever undertakes take a example, of us ever undertakes...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-6.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Tilt & slide</a></h2>
                                                <div class="text">Explain to you how this mistaken idea of denouncinga pleasure and praising pain account of the system...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-2"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-4.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Casement</a></h2>
                                                <div class="text">Consequences that are extremely nor of us ever undertakes take a example, of us ever undertakes...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-5.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Sliding Door</a></h2>
                                                <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because is pain circumstances...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-3"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-6.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Tilt & slide</a></h2>
                                                <div class="text">Explain to you how this mistaken idea of denouncinga pleasure and praising pain account of the system...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-2"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="p-tab" id="p-tab-3">
                            <div class="content">
                                <div class="three-item-carousel owl-carousel owl-theme">

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-4.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Casement</a></h2>
                                                <div class="text">Consequences that are extremely nor of us ever undertakes take a example, of us ever undertakes...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-5.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Sliding Door</a></h2>
                                                <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because is pain circumstances...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-3"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-6.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Tilt & slide</a></h2>
                                                <div class="text">Explain to you how this mistaken idea of denouncinga pleasure and praising pain account of the system...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-2"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-4.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Casement</a></h2>
                                                <div class="text">Consequences that are extremely nor of us ever undertakes take a example, of us ever undertakes...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-5.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Sliding Door</a></h2>
                                                <div class="text">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because is pain circumstances...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-3"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset('front/images/resource/service-6.jpg')}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">Tilt & slide</a></h2>
                                                <div class="text">Explain to you how this mistaken idea of denouncinga pleasure and praising pain account of the system...</div>
                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-2"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End Services Section Three-->

    <!--Fun Facts Section-->
    <div class="fact-counter-section">
        <div class="fact-counter" style="background-image: url({{asset('front/images/background/pattern-3.png')}})">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="6000" data-stop="5">0</span>k
                                <h4 class="counter-title">Windows Installed</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="6000" data-stop="2">0</span>K
                                <h4 class="counter-title">Doors Installed</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="6000" data-stop="57">0</span>
                                <h4 class="counter-title">Expert Team Members</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="8000" data-stop="219">0</span>
                                <h4 class="counter-title">Corporate Partners</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->

    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{asset('front/images/resource/about-1.jpg')}}" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="flaticon-play-arrow"></span></a>
                        </div>
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title alternate">
                            <h2>About <span class="theme_color">Company</span></h2>
                        </div>
                        <div class="text">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue.</div>
                        <ul class="list-style-one">
                            <li>Leader for custom door and window solutions.</li>
                            <li>Quality, performance & value.</li>
                            <li>Providing comfort and protection for your family.</li>
                        </ul>
                        <a href="about.html" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Services Section Two-->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="services-item-carousel-two owl-carousel owl-theme">

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-door-4"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">76 Yrs <br> of Experience</a></h3>
                            <div class="text">Great explorer of the truth, thats master-builder off human happiness.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-award"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">We <br> Care Quality</a></h3>
                            <div class="text">There anyone who loves or pursues or desires to obtain works of itself.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-money"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html"> $50 <br> Million Sales</a></h3>
                            <div class="text">Toil and pain can procure him some great pleasure to take a trivial example.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-labor-man"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">Trained <br> Service Team</a></h3>
                            <div class="text">Who loves or pursues or desires obtain pain off itself, in toil to exercise.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-door-4"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">76 Yrs <br> of Experience</a></h3>
                            <div class="text">Great explorer of the truth, thats master-builder off human happiness.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-award"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">We <br> Care Quality</a></h3>
                            <div class="text">There anyone who loves or pursues or desires to obtain works of itself.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-money"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html"> $50 <br> Million Sales</a></h3>
                            <div class="text">Toil and pain can procure him some great pleasure to take a trivial example.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-labor-man"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">Trained <br> Service Team</a></h3>
                            <div class="text">Who loves or pursues or desires obtain pain off itself, in toil to exercise.</div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Services Section Two-->

    <!--Gallery Section-->
    <section class="gallery-section-two">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title-inner">
                    <h2>Latest From <span class="theme_color">Gallery</span></h2>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme">

                <!--Gallery Block-->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('front/images/gallery/4.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <h3><a href="#">Double Glazed Windows</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Gallery Block-->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('front/images/gallery/5.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <h3><a href="#">Double Glazed Windows</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Gallery Block-->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('front/images/gallery/6.jpg')}}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <h3><a href="#">Double Glazed Windows</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Gallery Section-->

    <!--Items Section-->
    <section class="items-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title alternate">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Recommended <span class="theme_color">Items</span></h2>
                    </div>
                    <div class="pull-right">
                        <a href="shop-single.html" class="more-products"><span class="arrow flaticon-right-arrow-2"></span> More Products</a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                <!--Product Block-->
                <div class="product-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('front/images/resource/products/1.jpg')}}" alt="" />
                            <ul class="options-box">
                                <li><a href="images/resource/products/1.jpg" class="overlay-box lightbox-image" data-fancybox="product-gallery" data-caption=""><span class="icon flaticon-view"></span></a></li>
                                <li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
                                <li><a href="shop-single.html"><span class="icon flaticon-heart"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h3><a href="shop-single.html">Asec-Cockspur</a></h3>
                            <ul class="product-price">
                                <li>$35.00</li>
                                <li class="discount">$45.00</li>
                            </ul>
                            <div class="buy-btn-box text-center">
                                <a href="shop-single.html" class="theme-btn buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Product Block-->
                <div class="product-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('front/images/resource/products/2.jpg')}}" alt="" />
                            <ul class="options-box">
                                <li><a href="images/resource/products/2.jpg" class="overlay-box lightbox-image" data-fancybox="product-gallery" data-caption=""><span class="icon flaticon-view"></span></a></li>
                                <li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
                                <li><a href="shop-single.html"><span class="icon flaticon-heart"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h3><a href="shop-single.html">Asec-Cockspur</a></h3>
                            <ul class="product-price">
                                <li>$35.00</li>
                                <li class="discount">$45.00</li>
                            </ul>
                            <div class="buy-btn-box text-center">
                                <a href="shop-single.html" class="theme-btn buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Product Block-->
                <div class="product-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('front/images/resource/products/3.jpg')}}" alt="" />
                            <ul class="options-box">
                                <li><a href="images/resource/products/3.jpg" class="overlay-box lightbox-image" data-fancybox="product-gallery" data-caption=""><span class="icon flaticon-view"></span></a></li>
                                <li><a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a></li>
                                <li><a href="shop-single.html"><span class="icon flaticon-heart"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h3><a href="shop-single.html">Asec-Cockspur</a></h3>
                            <ul class="product-price">
                                <li>$35.00</li>
                                <li class="discount">$45.00</li>
                            </ul>
                            <div class="buy-btn-box text-center">
                                <a href="shop-single.html" class="theme-btn buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Items Section-->

    <!--Feedback Section Two-->
    <section class="feedback-section-two">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title alternate centered light">
                <div class="title-inner">
                    <h2>Customer <span class="theme_color">Feedback</span></h2>
                </div>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">

                <!--Feedback Block-->
                <div class="feedback-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-outer">
                                        <div class="image">
                                            <img src="{{asset('front/images/resource/feedback-1.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">
                                    <div class="title">Steve Hamilton</div>
                                    <h2>Happiness Window</h2>
                                    <div class="quote-icon">
                                        <span class="icon flaticon-quote-1"></span>
                                    </div>
                                    <div class="text">Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</div>
                                    <div class="location">From California</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Feedback Block-->
                <div class="feedback-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-outer">
                                        <div class="image">
                                            <img src="{{asset('front/images/resource/feedback-1.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">
                                    <div class="title">Steve Hamilton</div>
                                    <h2>Happiness Window</h2>
                                    <div class="quote-icon">
                                        <span class="icon flaticon-quote-1"></span>
                                    </div>
                                    <div class="text">Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</div>
                                    <div class="location">From California</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Feedback Block-->
                <div class="feedback-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-outer">
                                        <div class="image">
                                            <img src="{{asset('front/images/resource/feedback-1.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">
                                    <div class="title">Steve Hamilton</div>
                                    <h2>Happiness Window</h2>
                                    <div class="quote-icon">
                                        <span class="icon flaticon-quote-1"></span>
                                    </div>
                                    <div class="text">Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</div>
                                    <div class="location">From California</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Feedback Section Two-->

    <!--Blog Section-->
    <section class="blog-section alternate">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Latest From <span class="theme_color">Blog</span></h2>
            </div>
            <div class="row clearfix">

                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-single.html"><img src="{{asset('front/images/resource/news-1.jpg')}}" alt="" /></a>
                            <ul class="category">
                                <li><a href="blog-single.html">Installation, </a></li>
                                <li><a href="blog-single.html">Expert</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="author">
                                <div class="author-image"><img src="{{asset('front/images/resource/author-1.jpg')}}" alt="" /></div>
                                Lewis Vivanda
                            </div>
                            <h3><a href="blog-single.html">5 reasons why uPVC is a better fenestration material.</a></h3>
                            <div class="text">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born & complete system.</div>
                            <ul class="post-date">
                                <li>14th August, 2018</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-single.html"><img src="{{asset('front/images/resource/news-2.jpg')}}" alt="" /></a>
                            <ul class="category">
                                <li><a href="blog-single.html">Manufacturing</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="author">
                                <div class="author-image"><img src="{{asset('front/images/resource/author-2.jpg')}}" alt="" /></div>
                                Mark Fletcher
                            </div>
                            <h3><a href="blog-single.html">Shape your dream house with uPVC doors!.</a></h3>
                            <div class="text">Desires to obtain pain of itself, because it is pain, but because occasionally circum-stances occur in which pleasure. </div>
                            <ul class="post-date">
                                <li>21st July, 2018</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-single.html"><img src="{{asset('front/images/resource/news-3.jpg')}}" alt="" /></a>
                            <ul class="category">
                                <li><a href="blog-single.html">Window, </a></li>
                                <li><a href="blog-single.html">Door</a></li>
                                <li><a href="blog-single.html">Style</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <div class="author">
                                <div class="author-image"><img src="{{asset('front/images/resource/author-3.jpg')}}" alt="" /></div>
                                Dellin Swinny
                            </div>
                            <h3><a href="blog-single.html">Budgeting your windows & doors | dream home.</a></h3>
                            <div class="text">Right to find fault with a man who sed chooses to enjoy a pleasure that has no annoying consequences, </div>
                            <ul class="post-date">
                                <li>10th July, 2018</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Blog Section-->

    <!--Certificate Section-->
    <section class="certificate-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title alternate centered">
                <div class="title-inner">
                    <h2>Affiliations & <span class="theme_color">Certification</span></h2>
                </div>
            </div>
            <div class="row clearfix">

                <!--Certificate Block-->
                <div class="certificate-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{asset('front/images/resource/certificate.png')}}" alt="" />
                        </div>
                        <div class="text">Nor again is there anyone who loves or pursues or desires too.</div>
                    </div>
                </div>

                <!--Certificate Block-->
                <div class="certificate-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{asset('front/images/resource/certificate.png')}}" alt="" />
                        </div>
                        <div class="text"> Idea of denouncing pleasure praising pain was born  system expound.</div>
                    </div>
                </div>

                <!--Certificate Block-->
                <div class="certificate-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{asset('front/images/resource/certificate.png')}}" alt="" />
                        </div>
                        <div class="text">Give you a complete account of that system expound actual.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('js')

@endsection
