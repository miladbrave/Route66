@extends('front.en.layout.master')
@section('style')
    <style>
        .ui-menu .ui-menu-item-wrapper {
            text-align: end
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="preloader"></div>
        @include('front.en.layout.header')
        <div class="container mt-2">
            <div class="owl-carousel">
                @foreach($sliders->where('number',1) as $slide)
                    <div>
                        @if($slide->texten)
                            <div class="caption wow animate__slideInUp" data-wow-duration="1s">
                                <h1 class="text-white">{{$slide->texten}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texten}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',2) as $slide)
                    <div>
                        @if($slide->texten)
                            <div class="caption wow animate__fadeInDown" data-wow-duration="1s" data-wow-delay="4s">
                                <h1 class="text-white">{{$slide->texten}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texten}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',3) as $slide)
                    <div>
                        @if($slide->texten)

                            <div class="caption wow animate__fadeInUpBig" data-wow-duration="1s" data-wow-delay="7s">
                                <h1 class="text-white">{{$slide->texten}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texten}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',4) as $slide)
                    <div>
                        @if($slide->texten)
                            <div class="caption wow animate__backInUp" data-wow-duration="1s" data-wow-delay="10s">
                                <h1 class="text-white">{{$slide->texten}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texten}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <section class="property-search-section style-two">
            <div class="auto-container">
                <div class="property-search-form-two wow fadeInUp">
                    <div class="title"><h5>Search By</h5></div>
                    <div class="form-inner" style="margin-top: 10px">
                        <div class="property-search-tabs tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#sale" class="tab-btn active-btn">Home</li>
                                <li data-tab="#rent" class="tab-btn">Car</li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="sale">
                                    <div class="property-search-form">
                                        <form method="post" action="{{route('en.search')}}">
                                            @csrf
                                            <input type="hidden" name="home" value="home">
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country" class="">Country</label>
                                                    <select class="custom-select-box" id="country" name="country">
                                                        <option value="">select</option>
                                                        @foreach($homeCountries as $homecountry)
                                                            <option value="{{$homecountry}}">{{$homecountry}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">City</label>
                                                    <select class="custom-select-box" id="country" name="city">
                                                        <option value="">select</option>
                                                        @foreach($homeCities as $homecity)
                                                            <option value="{{$homecity}}">{{$homecity}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label>Property Type</label>
                                                    <select class="custom-select-box" name="type">
                                                        <option value="">select</option>
                                                        <option value="0">Residential property</option>
                                                        <option value="1">Commercial property</option>
                                                        <option value="2">Industrial property</option>
                                                        <option value="3">the apartment</option>
                                                        <option value="4">Residential Tower</option>
                                                        <option value="5">Villa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">price</label>
                                                    <select class="custom-select-box" id="country" name="price">
                                                        <option value="">select</option>
                                                        <option value="1">€ Less than 50,000</option>
                                                        <option value="2">€ 150,000 - 50,000</option>
                                                        <option value="3">€ 300,000 - 150,000</option>
                                                        <option value="4">€ 450,000 - 300,000</option>
                                                        <option value="5">€ 600,000 - 450,000</option>
                                                        <option value="6">€ More than 600,000</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">Area</label>
                                                    <select class="custom-select-box" id="country" name="meter">
                                                        <option value="">select</option>
                                                        <option value="1">Less than 100 Meter</option>
                                                        <option value="2">100-200Meter</option>
                                                        <option value="3">200-300Meters</option>
                                                        <option value="4">More than 300 Meters</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">Room</label>
                                                    <select class="custom-select-box" id="country" name="room">
                                                        <option value="">select</option>
                                                        <option value="1">1 room</option>
                                                        <option value="2">2 rooms</option>
                                                        <option value="3">3 rooms</option>
                                                        <option value="4">4 rooms</option>
                                                        <option value="10">More than 4 rooms</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12 align">
                                                    <button type="submit" class="theme-btn btn-style-three"><span
                                                            class="btn-title">Search</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--Tab -->
                                <div class="tab" id="rent">
                                    <div class="property-search-form">
                                        <form method="post" action="{{route('en.search')}}">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="car" value="car">
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select name="new" id="">
                                                        <option value="">New/Used</option>
                                                        <option value="0">new</option>
                                                        <option value="1">used</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select class="custom-select-box" id="country" name="city">
                                                        <option value="">city</option>
                                                        @foreach($carcity as $homecity)
                                                            <option value="{{$homecity}}">{{$homecity}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select class="form-control" name="brand">
                                                        <option value="">Brand</option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->title}}"
                                                                    style="direction: ltr">{{$brand->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select class="form-control" name="cartype"
                                                            style="direction: ltr">
                                                        <option value="">Car type</option>
                                                        <option value="Sedon">Sedon</option>
                                                        <option value="Coupe">Coupe</option>
                                                        <option value="Suve">Suve</option>
                                                        <option value="Crossover">Crossover</option>
                                                        <option value="Hatchback">Hatchback</option>
                                                        <option value="Hybrid">Hybrid</option>
                                                        <option value="Sport">Sport</option>
                                                        <option value="Pickup Truck">Pickup Truck</option>
                                                        <option value="Minivan">Minivan</option>
                                                        <option value="Luxury">Luxury</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select class="custom-select-box" id="country" name="price">
                                                        <option value="">Price</option>
                                                        <option value="1">€ Less than 20,000</option>
                                                        <option value="2">€ 50,000 - 20,000</option>
                                                        <option value="3">€ 80,000 - 50,000</option>
                                                        <option value="4">€ 100,000 - 80,000</option>
                                                        <option value="5">€ 150,000 - 100,000</option>
                                                        <option value="6">€ More than 150,000</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-7"></div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-style-three"><span
                                                            class="btn-title">search</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="property-search-section container">
            <div class="auto-container">

            </div>
        </section>
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column" style="padding-bottom: 0px">
                            <div class="sec-title">
                                <div class="devider" style="margin-right: 73%"><span></span></div>
                                <h2 class="text-left">About us</h2>
                                <div class="text" style="direction: ltr;text-align: left">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do.
                                </div>
                            </div>
                            <div class="text-box text-left" style="direction: ltr">
                                <p>Lorem ipsum dolor sit amet, consectetur
                                    adipiscinlore magna aliqua.
                                    Lacus suspendisse faucibus interdum posuere lorem..</p>
                            </div>
                            <div class="about-block wow fadeInUp text-left">
                                <div class="inner" style="padding: 0px 0px">
                                    <h4 class="text-left ml-3" style="display: inline-block">sed enim</h4>
                                    <div class="icon flaticon-layers" style="display: inline-block"></div>
                                    <div class="text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tes suspendisse
                                        faucibm.
                                    </div>
                                </div>
                            </div>
                            <div class="about-block wow fadeInUp text-left">
                                <div class="inner" style="padding: 0px 0px">
                                    <h4 class="text-left ml-3" style="display: inline-block">sed enim</h4>
                                    <div class="icon flaticon-bar-chart" style="display: inline-block"></div>
                                    <div class="text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusdisse
                                        fauosuere lorem.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url(/front/images/resource/image-1.jpg);">
                            <div class="row no-gutters">
                                <div class="title-block col-lg-6 col-md-6 wow fadeIn">
                                    <div class="inner-box">
                                        <h3>Lorem <br> Lorem Ipsum</h3>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-insurance"></div>
                                        <h4><a href="javascript:void(0);">Lorem Ipsum</a></h4>
                                        <div class="text">Lorem Ipsum</div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 order-2 wow fadeIn" data-wow-delay="800ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-2"></div>
                                        <h4><a href="javascript:void(0);">Lorem Ipsum</a></h4>
                                        <div class="text">Lorem Ipsum</div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-mortgage"></div>
                                        <h4><a href="javascript:void(0);">Lorem Ipsum</a></h4>
                                        <div class="text">Lorem Ipsum</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="property-section" style="background-image: url(/front/images/background/1.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="devider"><span></span></div>
                    <h2>The latest property</h2>
                    <div class="text">Choose your home</div>
                </div>

                <div class="property-carousel owl-carousel owl-theme">
                    @if(isset($home))
                        @foreach($home as $pro)
                            <div class="property-block text-left">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{route('en.product',["Home",$pro->slug])}}">
                                                @if(isset($pro->photos->first()->path))
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{$pro->photos->first()->path}}" style="height: 300px"
                                                        alt="">
                                                @else
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{asset('/front/images/resource/house.jpg')}}"
                                                        style="height: 300px"
                                                        alt="">
                                                @endif
                                            </a></figure>
                                        <span class="for">
                                        @if($pro->sellstatus == 3)
                                                <span>Mortgage</span>
                                            @elseif($pro->sellstatus == 1)
                                                <span>Rent</span>
                                            @elseif($pro->sellstatus == 2)
                                                <span>Sell</span>
                                            @endif
                                    </span>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="property-info clearfix">
                                            <li><span
                                                    class="icon fa fa-expand"></span>{{$pro->productcompletes[0]->meter}}
                                                Meters
                                            </li>
                                            <li><span class="icon fa fa-bed"></span> Room
                                                {{$pro->productcompletes[0]->room}}</li>
                                            <li><span class="icon fa fa-bath"></span>
                                                Bath {{$pro->productcompletes[0]->bath}}</li>
                                        </ul>
                                        <h3><a href="{{route('en.product',["Home",$pro->slug])}}">{{$pro->entitle}}</a>
                                        </h3>
                                        <div class="text"
                                             style="direction: ltr">{!! Str::limit($pro->endescription,50) !!}</div>
                                        <div class="property-price clearfix">
                                            <div class="location">
                                                <span class="icon fa fa-map-marker-alt"></span>{{$pro->encountry}}
                                                - {{$pro->encity}}</div>
                                            <div class="price">{{number_format($pro->price)}} €</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <div class="agents-section">
            <div class="auto-container">
                <div class="sec-title text-left">
                    <div class="devider"><span></span></div>
                    <h2>Professional consultants</h2>
                    <div class="text">Choose your home with professional consultants</div>
                </div>
                <div class="agents-carousel owl-carousel owl-theme">
                    @foreach($agents as $agent)
                        <div class="agent-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    @if(isset($agent->photo->path))
                                        <figure class="image consult">
                                            <a href="{{route('en.agent',$agent->enname)}}">
                                                <img src="images/icons/empty.png"
                                                     data-src="{{asset($agent->photo->path)}}"
                                                     alt="{{$agent->faname}}">
                                            </a>
                                        </figure>
                                    @else
                                        <figure class="image consult">
                                            <a href="{{route('en.agent',$agent->enname)}}">
                                                <img src="images/icons/empty.png"
                                                     data-src="/front/images/resource/agent-55.jpg"
                                                     alt="{{$agent->faname}}">
                                            </a>
                                        </figure>
                                    @endif
                                </div>
                                <div class="info-box">
                                    <h4 class="name"><a
                                            href="{{route('en.agent',$agent->enname)}}">{{$agent->enname}}</a>
                                    </h4>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="{{$agent->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$agent->telegram}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$agent->twitter}}"><i
                                                    class="fab fa-instagram text-danger"></i></a></li>
                                        <li><a href="{{$agent->whatsup}}"><i
                                                    class="fab fa-whatsapp text-success"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <section class="property-section" style="background-image: url(/front/images/background/1.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="devider"><span></span></div>
                    <h2>Vehicles</h2>
                    <div class="text">Choose your Vehicles</div>
                </div>

                <div class="property-carousel owl-carousel owl-theme">
                    @if(isset($cars))
                        @foreach($cars as $car)
                            <div class="property-block">
                                <div class="inner-box text-left">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{route('en.product',["car",$car->slug])}}">
                                                @if(isset($car->photos->first()->path))
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{$car->photos->first()->path}}" style="height: 300px"
                                                        alt="">
                                                @else
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{asset('/front/images/resource/car.jpg')}}"
                                                        style="height: 300px"
                                                        alt="">
                                                @endif
                                            </a></figure>
                                        <span class="for">
                                        @if($car->type == 0)
                                                <span>New</span>
                                            @elseif($car->type == 1)
                                                <span>Used</span>
                                            @endif
                                    </span>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="property-info clearfix">
                                            <li><span class="icon fa fa-expand"></span>{{$car->brand}}</li>
                                            <li><span class="icon fa fa-city"></span> {{$car->encity}} </li>
                                            <li><span class="icon fa fa-calendar"></span>{{$car->year}} </li>
                                        </ul>
                                        <h3><a href="{{route('en.product',["car",$car->slug])}}">{{$car->title}}</a>
                                        </h3>
                                        <div class="text">{!! Str::limit($car->endescription,40) !!}</div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$car->encountry}}
                                                - {{$car->encity}}</div>
                                            <div class="price">{{number_format($car->price)}} €</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Property services</h2>
                    <div class="text">We are offering the best real estate</div>
                </div>
                <div class="row">
                    <div class="image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img
                                    src="images/icons/empty.png" data-src="/front/images/resource/image-2.jpg"
                                    alt=""></figure>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <!-- Service Block -->
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house"></span>
                                    <h4><a href="javascript:void(0);">For sell</a></h4>
                                    <div class="text">There are beautiful houses for sale here.
                                    </div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="javascript:void(0);">For Rent</a></h4>
                                    <div class="text">There are beautiful houses for sale here.
                                    </div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-architecture-and-city"></span>
                                    <h4><a href="javascript:void(0);">Mortgage</a></h4>
                                    <div class="text">There are beautiful houses for sale here.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 order-3">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-buyer"></span>
                                    <h4><a href="javascript:void(0);">Buyer matching</a></h4>
                                    <div class="text">There are beautiful houses for sale here.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-analytics"></span>
                                    <h4><a href="javascript:void(0);">Price analysis</a></h4>
                                    <div class="text">There are beautiful houses for sale here.
                                    </div>
                                </div>
                            </div>

                            <!-- Service Block -->
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-3"></span>
                                    <h4><a href="javascript:void(0);">sell</a></h4>
                                    <div class="text">There are beautiful houses for sale here.
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
                    <div class="text">Buy or sell your home in seconds.</div>
                </div>
            </div>
        </section>
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Our news and article</h2>
                    <div class="text">Lorem ipsum dolor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
                <div class="inner-container">
                    <div class="news-carousel owl-carousel owl-theme">
                        @foreach($blogs as $blog)
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        @if(isset($blog->photo->path))
                                            <figure class="image">
                                                <a href="{{route('en.blogDetail',$blog->id)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($blog->photo->path)}}"
                                                         alt="{{$blog->faname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('en.blogDetail',$blog->id)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/news-1.jpg"
                                                         alt="{{$blog->enname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{route('en.blogDetail',$blog->id)}}">{{$blog->titleen}}</a></h3>
                                        <div
                                            class="post-date mt-2 text-left">{{Verta::instance($blog->created_at)->format('Y-m-d')}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('front.en.layout.footer')
    </div>
@endsection
