@extends('front.en.layout.master')
@section('content')
    @include('front.en.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            <h1>
                @if($home)
                    Home
                @elseif($car)
                    Vehicle
                @endif
            </h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('en.home')}}">Home</a></li>
                <li>
                    @if($home)
                        Properties detail
                    @elseif($car)
                        Vehicle details
                    @endif
                </li>
            </ul>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            @if($home)
                <div class="property-info-box">
                    <div class="row">
                        <div class="about-property col-lg-9 col-md-12 col-sm-12">
                            <h2>{{$product->entitle}}</h2>
                            <ul class="property-info clearfix">
                                <li><i class="fa fa-expand text-danger"></i> {{$product->productcompletes[0]->meter}}
                                    Meter
                                </li>
                                <li><i class="fa fa-bed text-danger"></i> {{$product->productcompletes[0]->room}} Room
                                </li>
                                <li><i class="fa fa-bath text-danger"></i> {{$product->productcompletes[0]->bath}} Bath
                                </li>
                                <li><span class="icon fa fa-money-bill-wave text-danger"></span><b
                                        class="price"> {{number_format($product->price)}} € </b></li>
                            </ul>
                            <hr>
                            <div class="pro">
                                @if(isset($product->photos->first()->path))
                                    <div class="image">
                                        <img class="img-responsive" itemprop="image" id="zoom_01"
                                             src="{{$product->photos->first()->path}}"
                                             title="{{$product->title}}"
                                             alt="{{$product->title}}"
                                             data-zoom-image="{{$product->photos->first()->path}}"/>
                                    </div>
                                    <div class="image-additional row" id="gallery_01">
                                        @foreach($product->photos as $photo)
                                            <a class="thumbnail col-xs-5" href="#"
                                               data-zoom-image="{{$photo->path}}"
                                               data-image="{{$photo->path}}" title="test">
                                                <img src="{{$photo->path}}" style="height: 80px"
                                                     title="{{$product->title}}" alt="{{$product->title}}"/></a>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="image">
                                        <img class="img-responsive" itemprop="image" id="zoom_01"
                                             src="{{asset('/front/images/resource/house.jpg')}}"
                                             title="{{$product->title}}"
                                             alt="{{$product->title}}"
                                             data-zoom-image="{{asset('/front/images/resource/house.jpg')}}"/>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <hr>
                        <div class="price-column col-lg-3 col-md-12 col-sm-12">
                            <div class="sidebar-widget recent-properties">
                                <div class="sidebar-title"><h2>Other Projects</h2></div>
                                <div class="widget-content">
                                    @foreach($home->take(4) as $pro)
                                        <article class="post mt-3">
                                            <div class="post-thumb">
                                                <a href="{{route('en.product',["Home",$product->slug])}}">
                                                    @if(isset($pro->photos->first()->path))
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{$pro->photos->first()->path}}" alt="">
                                                    @else
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{asset('/front/images/resource/house.jpg')}}"
                                                             alt="">
                                                    @endif
                                                    <span class="status">
                                                        @if($pro->sellstatus == 3)
                                                            <span>Mortgage</span>
                                                        @elseif($pro->sellstatus == 1)
                                                            <span>Rent</span>
                                                        @elseif($pro->sellstatus == 2)
                                                            <span>Sell</span>
                                                        @endif
                                                </span>
                                                </a>
                                            </div>
                                            <h6>
                                                <a href="{{route('en.product',["Home",$pro->slug])}}">{{$pro->entitle}}</a>
                                            </h6>
                                            <div class="price">{{number_format($pro->price)}} €</div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12 text-left">
                        <div class="property-detail">
                            <hr>
                            <h3>Description</h3>
                            <p>{!! $product->endescription !!}</p>
                            <h4 class="mt-5">address</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>Country : </strong> {{$product->encountry}}</td>
                                        <td><strong>City : </strong> {{$product->encity}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address : </strong> {{$product->enaddress}}</td>
                                        <td><strong>: Zone</strong> {{$product->enzone}}</td>
                                    </tr>
                                </table>
                            </div>
                            <h4>Details</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>Area : </strong> {{$product->meter}}Meter</td>
                                        <td><strong>Situation : </strong>
                                            @if($product->sellstatus == 3)
                                                <span>Mortgage</span>
                                            @elseif($product->sellstatus == 1)
                                                <span>Rent</span>
                                            @elseif($product->sellstatus == 2)
                                                <span>Sell</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Room : </strong> {{$product->productcompletes[0]->room}}</td>
                                        <td><strong>Bath : </strong> {{$product->productcompletes[0]->bath}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Floor : </strong> {{$product->productcompletes[0]->floor}} </td>
                                        <td><strong>Year : </strong> {{$product->productcompletes[0]->age}} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>: Air condition</strong> {{$product->productcompletes[0]->heating}}
                                        </td>
                                        <td><strong>Price : </strong> {{number_format($product->price)}}€</td>
                                    </tr>

                                </table>
                            </div>
                            <h4>Facilities</h4>
                            <ul class="features-list clearfix">
                                @foreach($properties->where('language','en') as $property)
                                    @if($property->id == isset($product->productproperty->where('title',$property->id)->first()->title))
                                        <li class="text-left float-left">
                                            {{$property->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <h4>Other projects in this country</h4>
                            <section class="clients-section">
                                <div class="auto-container">
                                    <div class="sponsors-outer">
                                        <ul class="sponsors-carousel owl-carousel owl-theme">
                                            @foreach($home->where('encountry',$product->encountry) as $h)
                                                <li class="slide-item">
                                                    <figure class="image-box">
                                                        <a href="{{route('en.product',["Home",$h->slug])}}">
                                                            @if(isset($h->photos->first()->path))
                                                                <img src="images/icons/empty.png" style="height: 107px;"
                                                                     data-src="{{$h->photos->first()->path}}" alt="">
                                                            @else
                                                                <img src="images/icons/empty.png" style="height: 107px;"
                                                                     data-src="{{asset('/front/images/resource/house.jpg')}}"
                                                                     alt="">
                                                            @endif
                                                        </a>
                                                    </figure>
                                                    <h6 class="mt-3">
                                                        <a href="{{route('en.product',["Home",$h->slug])}}">{{$h->entitle}}</a>
                                                    </h6>
                                                    <div class="price">{{number_format($h->price)}} €</div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <hr>
                        </div>
                    </div>
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">
                            <div class="sidebar-widget search-properties">
                                <div class="sidebar-title"><h2>Search</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('en.search')}}">
                                        @csrf
                                        <input type="hidden" name="home" value="home">
                                        <div class="row no-gutters">
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="country">
                                                    <option value="">Country</option>
                                                    @foreach($homeCountries as $homecountry)
                                                        <option value="{{$homecountry}}">{{$homecountry}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="city">
                                                    <option value="">City</option>
                                                    @foreach($homeCities as $homecity)
                                                        <option value="{{$homecity}}">{{$homecity}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="price">
                                                    <option value="">Price</option>
                                                    <option value="1">€ Less than 50,000</option>
                                                    <option value="2">€ 150,000 - 50,000</option>
                                                    <option value="3">€ 300,000 - 150,000</option>
                                                    <option value="4">€ 450,000 - 300,000</option>
                                                    <option value="5">€ 600,000 - 450,000</option>
                                                    <option value="6">€ More than 600,000</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="meter">
                                                    <option value="">Area</option>
                                                    <option value="1">Less than 100 Meter</option>
                                                    <option value="2">100-200Meter</option>
                                                    <option value="3">200-300Meters</option>
                                                    <option value="4">More than 300 Meters</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" name="type" id="type">
                                                    <option value="">Property Type</option>
                                                    <option value="0">Residential property</option>
                                                    <option value="1">Commercial property</option>
                                                    <option value="2">Industrial property</option>
                                                    <option value="3">the apartment</option>
                                                    <option value="4">Residential Tower</option>
                                                    <option value="5">Villa</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-two"><span
                                                        class="btn-title">search</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget about-agent-widget">
                                <div class="sidebar-title text-left"><h2>Agent</h2></div>
                                <div class="widget-content">
                                    <div class="image-box">
                                        @if(isset($consult->photo->path))
                                            <figure class="image">
                                                <a href="{{route('en.agent',$consult->enname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($consult->photo->path)}}"
                                                         alt="{{$consult->enname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('en.agent',$consult->enname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$consult->enname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h3 class="name text-left">{{$consult->enname}}</h3>
                                        <span class="designation text-left">Agent</span>
                                        <ul class="contact-info" style="direction: ltr">
                                            <li class="text-left"><strong>Phone:</strong><a
                                                    href="#">{{$consult->phone}}</a></li>
                                            <li class="text-left"><strong>Email:</strong><a
                                                    href="#">{{$consult->email}}</a></li>
                                        </ul>
                                        <div class="social-links social-icon-colored text-left" style="direction: ltr">
                                            <strong>Social network:</strong>
                                            <a href="{{$consult->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$consult->telegram}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$consult->twitter}}"><i
                                                    class="fab fa-instagram text-danger"></i></a>
                                            <a href="{{$consult->whatsup}}"><i
                                                    class="fab fa-whatsapp text-success"></i></a>
                                        </div>
                                        <div class="btn-box">
                                            <a href="{{route('en.agent',$consult->enname)}}"
                                               class="theme-btn btn-style-two"><span
                                                    class="btn-title">Profile</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            @elseif($car)
                <div class="property-info-box">
                    <div class="row">
                        <div class="about-property col-lg-9 col-md-12 col-sm-12">
                            <h2>{{$car->title}}</h2>
                            <ul class="property-info clearfix mb-3">
                                <li><span class="icon fa fa-expand text-danger"></span><b> {{$car->brand}} </b></li>
                                <li><span class="icon fa fa-city text-danger"></span><b> {{$car->encity}} </b></li>
                                <li><span class="icon fa fa-calendar text-danger"></span><b> {{$car->year}} </b></li>
                                <li><span class="icon fa fa-map-marked text-danger"></span><b> {{$car->encountry}} </b>
                                </li>
                                <li><span class="icon fa fa-money-bill-wave text-danger"></span><b
                                        class="price"> {{number_format($car->price)}} € </b></li>
                            </ul>
                            <hr>
                            <div class="pro">
                                @if(isset($car->photos->first()->path))
                                    <div class="image">
                                        <img class="img-responsive" itemprop="image" id="zoom_01"
                                             src="{{$car->photos->first()->path}}"
                                             title="{{$car->title}}"
                                             alt="{{$car->title}}"
                                             data-zoom-image="{{$car->photos->first()->path}}"/>
                                    </div>
                                    <div class="image-additional row" id="gallery_01">
                                        @foreach($car->photos as $photo)
                                            <a class="thumbnail col-xs-5" href="#"
                                               data-zoom-image="{{$photo->path}}"
                                               data-image="{{$photo->path}}" title="test">
                                                <img src="{{$photo->path}}" style="height: 80px"
                                                     title="{{$car->title}}" alt="{{$car->entitle}}"/></a>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="image">
                                        <img class="img-responsive" itemprop="image" id="zoom_01"
                                             src="{{asset('/front/images/resource/car.jpg')}}"
                                             title="{{$product->title}}"
                                             alt="{{$product->title}}"
                                             data-zoom-image="{{asset('/front/images/resource/car.jpg')}}"/>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="price-column col-lg-3 col-md-12 col-sm-12">
                            <div class="sidebar-widget recent-properties">
                                <div class="sidebar-title"><h2>Other vehicle</h2></div>
                                <div class="widget-content">
                                    @foreach($cars->take(4) as $othercar)
                                        <article class="post mt-3">
                                            <div class="post-thumb">
                                                <a href="{{route('en.product',["car",$othercar->slug])}}">
                                                    @if(isset($othercar->photos->first()->path))
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{$othercar->photos->first()->path}}" alt="">
                                                    @else
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{asset('/front/images/resource/car.jpg')}}"
                                                             alt="">
                                                    @endif
                                                    <span class="status">
                                                       @if($othercar->type == 0)
                                                            <span>New</span>
                                                        @elseif($othercar->type == 1)
                                                            <span>Used </span>
                                                        @endif
                                                </span>
                                                </a>
                                            </div>
                                            <span class="location">{{$othercar->enaddress}}</span>
                                            <h3>
                                                <a href="{{route('en.product',["car",$othercar->slug])}}">{{$othercar->title}}</a>
                                            </h3>
                                            <div class="price">{{number_format($othercar->price)}}</div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12 text-left">
                        <div class="property-detail">
                            <hr>
                            <h3>Descrition</h3>
                            <p>{!! $car->endescription !!}</p>
                            <h4 class="mt-5">Address</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>city : </strong><b> {{$car->encity}}</b></td>
                                        <td><strong>Country : </strong><b> {{$car->encountry}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Price : </strong><b> {{number_format($car->price)}}€ </b></td>
                                        <td><strong>Year : </strong><b> {{$car->year}}</b></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>K/m : </strong><b> {{$car->kilometer}}</b></td>
                                    </tr>
                                </table>
                            </div>
                            <h4>Properties</h4>
                            <ul class="features-list clearfix">
                                @foreach($properties->where('language','en') as $property)
                                    @if($property->id == isset($car->carproperty->where('title',$property->id)->first()->title))
                                        <li class="float-left">
                                            {{$property->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <h4>In this brand</h4>
                            <section class="clients-section">
                                <div class="auto-container">
                                    <div class="sponsors-outer">
                                        <ul class="sponsors-carousel owl-carousel owl-theme">
                                            @foreach($cars->where('brand',$car->brand) as $car)
                                                <li class="slide-item">
                                                    <figure class="image-box">
                                                        <a href="{{route('en.product',["car",$car->slug])}}">
                                                            @if(isset($car->photos->first()->path))
                                                                <img src="images/icons/empty.png" style="height: 107px;"
                                                                     data-src="{{$car->photos->first()->path}}" alt="">
                                                            @else
                                                                <img src="images/icons/empty.png" style="height: 107px;"
                                                                     data-src="{{asset('/front/images/resource/car.jpg')}}"
                                                                     alt="">
                                                            @endif
                                                        </a>
                                                    </figure>
                                                    <h3 class="mt-3">
                                                        <a href="{{route('en.product',["car",$car->slug])}}">{{$car->title}}</a>
                                                    </h3>
                                                    <div>{{number_format($car->price)}} €</div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <hr>
                        </div>
                    </div>


                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 text-left">
                        <aside class="sidebar default-sidebar">
                            <div class="sidebar-widget search-properties">
                                <div class="sidebar-title"><h2>Search</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('en.search')}}">
                                        @csrf
                                        <input type="hidden" name="car" value="car">
                                        <div class="row no-gutters">
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="new">
                                                    <option value="">type</option>
                                                    <option value="0">New</option>
                                                    <option value="1">Used</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="city">
                                                    <option value="">City</option>
                                                    @foreach($homeCities as $homecity)
                                                        <option value="{{$homecity}}">{{$homecity}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
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
                                            <div class="form-group">
                                                <select class="custom-select-box" name="cartype">
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
                                            <div class="form-group">
                                                <select class="custom-select-box" name="brand">
                                                    <option value="">Brand</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->title}}"
                                                                style="direction: ltr">{{$brand->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-two"><span
                                                        class="btn-title">search</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="sidebar-widget about-agent-widget">
                                <div class="sidebar-title"><h2>Agent</h2></div>
                                <div class="widget-content">
                                    <div class="image-box">
                                        @if(isset($consult->photo->path))
                                            <figure class="image">
                                                <a href="{{route('en.agent',$consult->enname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($consult->photo->path)}}"
                                                         alt="{{$consult->enname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('en.agent',$consult->enname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$consult->enname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h3 class="name">{{$consult->enname}}</h3>
                                        <span class="designation">Agent</span>
                                        <ul class="contact-info" style="direction: ltr">
                                            <li><strong>Phone:</strong><a href="#">{{$consult->phone}}</a></li>
                                            <li><strong>Email:</strong><a href="#">{{$consult->email}}</a></li>
                                        </ul>
                                        <div class="social-links social-icon-colored" style="direction: ltr">
                                            <strong>Social network:</strong>
                                            <a href="{{$consult->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$consult->telegram}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$consult->twitter}}"><i
                                                    class="fab fa-instagram text-danger"></i></a>
                                            <a href="{{$consult->whatsup}}"><i
                                                    class="fab fa-whatsapp text-success"></i></a>
                                        </div>
                                        <div class="btn-box">
                                            <a href="{{route('en.agent',$consult->enname)}}"
                                               class="theme-btn btn-style-two"><span
                                                    class="btn-title">Profile</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @include('front.en.layout.footer')

@endsection
