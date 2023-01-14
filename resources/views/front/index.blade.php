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

            @foreach(SliderActive() as $data)
            <div class="slide" style="background-image:url({{asset($data->image)}})">
                <div class="auto-container">
                    <div class="content">

                        <h3 class="alternate">That Open For You All.</h3>
                        <div class="text alternate">Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born & will give you a completed.</div>
                        <div class="link-box">
                            <a href="{{route('aboutWebsite')}}" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



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
                            @foreach(CategoryHome() as $data)
                            <li class="p-tab-btn active-btn" data-tab="#p-tab-1{{$data->id}}"> {{$data->name}}</li>
                            @endforeach
                        </ul>
                    </div>


                    @foreach(CategoryHome() as $data)
                    <div class="p-tabs-content">

                        <!--Portfolio Tab / Active Tab-->
                        <div class="p-tab {{$loop->first ? ' active-tab' : null}}" id="p-tab-1{{$data->id}}">
                            <div class="content">
                                <div class="services-item-carousel owl-carousel owl-theme">

                                    @foreach(courseHome($data->id) as $row)
                                    <!--Services Block Three-->
                                    <div class="services-block-three">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="blog-single.html"><img src="{{asset($row->image)}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <h2><a href="blog-single.html">{{$row->name}}</a></h2>
                                                <div class="text"> {!! Str::limit($row->notes, 250) !!}</div>

                                                <div class="icon-box">
                                                    <span class="icon flaticon-door-1"></span>
                                                </div>
                                                <a class="explore" href="blog-single.html">Explore More <span class="arrow flaticon-right-arrow-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                    </div>
                    @endforeach
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
                            <img src="{{asset(aboutsActive()->image)}}" alt="" />
                        </div>
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title alternate">
                            <h2>{{aboutsActive()->name}}</h2>
                        </div>
                        <div class="text">
                        {{aboutsActive()->notes}}
                        </div>

                        <a href="{{route('aboutWebsite')}}" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>Read More</a>
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
                    <h2>معرض الصور</h2>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme">

                <!--Gallery Block-->

                @foreach(galleryActive()->photos as $row)

                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('admin/pictures/gallery/'.galleryActive()->id . '/' .  $row->Filename)}}" alt="" />
                            <div class="overlay-box">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



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
                        <h2>Product <span class="theme_color">Items</span></h2>
                    </div>
                    <div class="pull-right">
                        <a href="shop-single.html" class="more-products"><span class="arrow flaticon-right-arrow-2"></span> More Products</a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                <!--Product Block-->

@foreach(ProductActive() as $data)
                <div class="product-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset($data->image)}}" alt="" />

                        </div>
                        <div class="lower-box">
                            <h3><a href="shop-single.html">{{$data->name}}</a></h3>
                            <ul class="product-price">
                                <li>{{$data->price}}</li>
                                <li class="discount">{{($data->price + 200)}}</li>
                            </ul>
                            <div class="buy-btn-box text-center">
                                <a href="shop-single.html" class="theme-btn buy-btn">Product Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

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
                @foreach(previousWorkActive() as $row)
                <div class="feedback-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image-outer">
                                        <div class="image">
                                            <img src="{{asset($row->image)}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">

                                    <h2>{{$row->name}}</h2>
                                    <div class="quote-icon">
                                        <span class="icon flaticon-quote-1"></span>
                                    </div>
                                    <div class="text">
                                        {!! Str::limit($row->notes, 250) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


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


@foreach(blogActive() as $blog)
                <div class="news-block col-lg-4 col-md-6 col-sm-12" >
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{route('blogsDetails',preg_replace('/\s+/', '-',  $blog->name))}}"><img src="{{asset($blog->image)}}" alt="" /></a>

                        </div>
                        <div class="lower-content">

                            <h3><a href="{{route('blogsDetails',preg_replace('/\s+/', '-',  $blog->name))}}">{{$blog->name}}</a></h3>
                            <div class="text">
                                {!! Str::limit($blog->notes, 250) !!}
                            </div>
                            <ul class="post-date">
                                <li>{{date('d')}}th {{date('M')}}, {{date('Y')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach


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
                    <h2>Ads</h2>
                </div>
            </div>
            <div class="row clearfix">

                @foreach(AdsActive() as $ads)
                <!--Certificate Block-->
                <div class="certificate-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{asset($ads->image)}}" alt="" />
                        </div>
                        <div class="text">{{$ads->name}}</div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>
@endsection


@section('js')

@endsection
