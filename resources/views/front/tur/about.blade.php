@extends('front.tur.layout.master')
@section('content')
    <div class="page-wrapper">
        @include('front.tur.layout.header')
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Şirket Bilgisi</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('tur.home')}}">Ana Sayfa</a></li>
                    <li>Şirket Bilgisi</li>
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
                                <h2>Web sitemize hoşgeldiniz
                                </h2>
                                <div class="text">Lorem ipsum dolor sid tempor magna aliqua
                                </div>
                            </div>
                            <div class="text-box">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="row features">
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-rent-1"></span>
                                        <h4><a href="javascript:void(0);">Cost</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-analytics"></span>
                                        <h4><a href="javascript:void(0);">Lorem Ipsum</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-home-2"></span>
                                        <h4><a href="javascript:void(0);">Lorem Ipsum</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-protect"></span>
                                        <h4><a href="javascript:void(0);">Lorem Ipsum
                                            </a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur</div>
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
                                <a href="tel:+8236558625" class="number" style="direction: ltr">+021 12345678</a>
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
                                <div class="counter-title">Emlak</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-car"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="{{$cars}}">0 </span>
                                </div>
                                <div class="counter-title">Araç</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-smile"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="450">0 </span>
                                </div>
                                <div class="counter-title">Müşteriler</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-trophy"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="60">0 </span>
                                </div>
                                <div class="counter-title">Şehir ve ülke </div>
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
                                <h2>Emlak Arama</h2>
                                <div class="text">Emek ve üzüntü, bazı önemli şeyler eiusmod  elit, sed Kreuzberg ve canlılığını oturmak
                                </div>
                            </div>
                            <div class="text-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
        @include('front.tur.layout.footer')
    </div>
@endsection
