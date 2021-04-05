@extends('front.en.layout.master')

@section('content')

    @include('front.en.layout.header')
    <div class="page-wrapper">

        <!--Page Title-->
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Service</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('en.home')}}">Home</a></li>
                    <li>service</li>
                </ul>
            </div>
        </section>

        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Property services</h2>
                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>

                <div class="row">
                    <div class="image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript:void(0);" >
                                    <img
                                        src="/front/images/icons/empty.png"
                                        data-src="/front/images/resource/image-2.jpg" alt=""></a>
                            </figure>
                        </div>
                    </div>

                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house"></span>
                                    <h4><a href="javascript:void(0);">For Sell</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna
                                        aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="javascript:void(0);">Property for rent</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna
                                        aliqua.
                                    </div>
                                </div>
                            </div>

                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-architecture-and-city"></span>
                                    <h4><a href="javascript:void(0);">loan Property</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna
                                        aliqua.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 order-3">
                        <div class="inner-column">
                            <!-- Service Block -->
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-buyer"></span>
                                    <h4><a href="javascript:void(0);">Buyer</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna
                                        aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-analytics"></span>
                                    <h4><a href="javascript:void(0);">Price analysis</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna
                                        aliqua.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-3"></span>
                                    <h4><a href="javascript:void(0);">Property for rent</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet,incididunt ut labore et dolore magna
                                        aliqua.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="call-to-action" style="background-image: url(/front/images/background/2.jpg);"
                 data-stellar-background-ratio="0.5">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="text">Buy or sell your home in minute</div>
                    <h2>Real Estate Agent</h2>
                </div>
            </div>
        </section>
        <section class="agents-section-two alternate">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Meet with our consultants</h2>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
                </div>

                <div class="carousel-outer">
                    <div class="agents-carousel-two owl-carousel owl-theme">
                        @foreach($agents as $agent)
                            <div class="agent-block-two">
                                <div class="row">
                                    <div class="image-column col-lg-5 col-md-12 col-sm-12 order-2">
                                        <div class="image-box">
                                            @if(isset($agent->photo->path))
                                                <figure class="image">
                                                    <a href="{{route('agent',$agent->faname)}}">
                                                        <img src="images/icons/empty.png"
                                                             data-src="{{asset($agent->photo->path)}}"
                                                             alt="{{$agent->faname}}">
                                                    </a>
                                                </figure>
                                            @else
                                                <figure class="image">
                                                    <a href="{{route('agent',$agent->faname)}}">
                                                        <img src="images/icons/empty.png"
                                                             data-src="/front/images/resource/agent-55.jpg"
                                                             alt="{{$agent->faname}}">
                                                    </a>
                                                </figure>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                        <div class="inner-column clearfix">
                                            <h3 class="name text-left">{{$agent->enname}}</h3>
                                            <span class="designation text-left text-success">Consultant - Real Estate</span>
                                            <div class="text text-left">
                                                {!! $agent->endes !!}
                                            </div>
                                            <ul class="contact-info">
                                                <li><span class="icon fa fa-phone-volume"></span><a
                                                        href="#">{{$agent->phone}}</a></li>
                                                <li><span class="icon fa fa-envelope"></span><a
                                                        href="#">{{$agent->email}}</a></li>
                                            </ul>
                                            <ul class="follow-us social-icon-colored">
                                                <li><a href="{{$agent->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="{{$agent->telegram}}"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li><a href="{{$agent->twitter}}"><i
                                                            class="fab fa-instagram text-danger"></i></a></li>
                                                <li><a href="{{$agent->whatsup}}"><i
                                                            class="fab fa-whatsapp text-success"></i></a></li>
                                            </ul>
                                            <div class="btn-box"><a href="{{route('en.agent',$agent->faname)}}"
                                                                    class="theme-btn btn-style-one"><span
                                                        class="btn-title">More</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>

    </div>
    @include('front.en.layout.footer')


@endsection
