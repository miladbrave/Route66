@extends('front.en.layout.master')

@section('content')

    <div class="page-wrapper">
        @include('front.en.layout.header')

        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>A bout us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('en.home')}}">Home</a></li>
                    <li>a bout us</li>
                </ul>
            </div>
        </section>

        <section class="why-choose-us">
            <div class="auto-container">
                <div class="row">
                    <div class="info-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column text-left">
                            <div class="sec-title">
                                <div class="devider"><span></span></div>
                                <h2>Investment consultant
                                </h2>
                                <div class="text">We always choose the best for you
                                </div>
                            </div>
                            <div class="text-box">
                                <p style="font-size: 11px;">
                                    Negar Investment Company, using successful management experiences over many years
                                    (with 30 years of experience), has expanded its activities in the fields of
                                    investment, property and car sales and financial services, and with elite experts
                                    and Persian consultants. بانLanguage has achieved a high position in the field of
                                    international trade. Providing advice for investing in the real estate sector of
                                    Turkey and Cyprus (residential, commercial and office), buying newly built villas
                                    ready for delivery, as well as pre-selling projects under construction, while
                                    carrying out all legal steps of buying property and obtaining ownership documents
                                    and municipal registration, Obtaining a passport and permanent residence in Turkey
                                    and opening a bank account are part of the services of Negar Investment Company.
                                    Therefore, we suggest that you consult with us before taking any action to buy or
                                    sell real estate in Turkey and Cyprus, and now take a big step forward for your
                                    future dreams. Our consultants can accompany you in performing all the above steps
                                    and also offer you the best and most appropriate method and finally guarantee a safe
                                    purchase for you.

                                </p>
                            </div>
                            <div class="row features">
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-rent-1"></span>
                                        <h4><a href="javascript:void(0);">Property</a></h4>
                                        <div class="text">Buying, renting and selling real estate</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-analytics"></span>
                                        <h4><a href="javascript:void(0);">Car</a></h4>
                                        <div class="text">Selling all kinds of cars</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-home-2"></span>
                                        <h4><a href="javascript:void(0);">Consulting</a></h4>
                                        <div class="text">Investment consulting</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-protect"></span>
                                        <h4><a href="javascript:void(0);">Services
                                            </a></h4>
                                        <div class="text">Diversity in service delivery</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box wow fadeInRight">
                            <figure class="image"><img src="images/icons/empty.png"
                                                       data-src="/front/images/resource/image-3.jpg" alt=""></figure>
                            <div class="contact-info">
                                <span class="icon fa fa-phone-volume"></span>
                                <a href="tel:+8236558625" class="number" style="direction: ltr">+905338307792</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fun-facts-section">
            <div class="auto-container">
                <div class="fun-facts">
                    <div class="row clearfix">
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-home"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="{{$products}}">0 </span>
                                </div>
                                <div class="counter-title">Property</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-car"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="{{$cars}}">0 </span>
                                </div>
                                <div class="counter-title">Vehicle</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-smile"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="450">0 </span>
                                </div>
                                <div class="counter-title">Customers</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-trophy"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="60">0 </span>
                                </div>
                                <div class="counter-title">City & country</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="app-section">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column text-left" style="direction: ltr">
                            <div class="sec-title">
                                <div class="devider"><span></span></div>
                                <h2>Property Search</h2>
                                <div class="text">We have a house for every taste
                                </div>
                            </div>
                            <div class="text-box">
                                We have a house for every taste. If you also have your own unique criteria and features
                                in choosing a house, you can contact us and view our projects to make the best choice.
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image-box">
                                <figure class="image wow fadeInRight"><img src="images/icons/empty.png"
                                                                           data-src="/front/images/resource/image-4.jpg"
                                                                           alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('front.en.layout.footer')
    </div>
@endsection
