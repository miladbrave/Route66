@extends('front.tur.layout.master')
@section('content')
    @include('front.tur.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            <h1>
                @if($home)
                    Ev
                @elseif($car)
                    Araba
                @endif
            </h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('tur.home')}}">Ana Sayfa</a></li>
                <li>
                    @if($home)
                        Özellikler detay
                    @elseif($car)
                        Araç detayları
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
                            <h2>{{$product->turtitle}}</h2>
                            <ul class="property-info clearfix">
                                <li><i class="fa fa-expand text-danger"></i> {{$product->productcompletes[0]->meter}}
                                    Meter
                                </li>
                                <li><i class="fa fa-bed text-danger"></i> {{$product->productcompletes[0]->room}} Oda
                                </li>
                                <li><i class="fa fa-bath text-danger"></i> {{$product->productcompletes[0]->bath}} Banyo
                                </li>
                                <li><span class="icon fa fa-money-bill-wave text-danger"></span><b
                                        class="price"> {{number_format($product->price)}} € </b></li>
                            </ul>
                            <hr>
                            <div class="pro">
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
                            </div>
                        </div>
                        <hr>
                        <div class="price-column col-lg-3 col-md-12 col-sm-12">
                            <div class="sidebar-widget recent-properties">
                                <div class="sidebar-title"><h2>Diğer projeler</h2></div>
                                <div class="widget-content">
                                    @foreach($home->take(4) as $otherproduct)
                                        <article class="post mt-3">
                                            <div class="post-thumb">
                                                <a href="{{route('tur.product',["Home",$otherproduct->slug])}}">
                                                    @if(isset($otherproduct->photos->first()->path))
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{$otherproduct->photos->first()->path}}" alt="">
                                                    @else
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{asset('/front/images/resource/house.jpg')}}"
                                                             alt="">
                                                    @endif

                                                    <span class="status">
                                                        @if($otherproduct->sellstatus == 3)
                                                            <span>rehin</span>
                                                        @elseif($otherproduct->sellstatus == 1)
                                                            <span>Kira</span>
                                                        @elseif($otherproduct->sellstatus == 2)
                                                            <span>Satmak</span>
                                                        @endif
                                                </span>
                                                </a>
                                            </div>
                                            <h6>
                                                <a href="{{route('tur.product',["Home",$otherproduct->slug])}}">{{$otherproduct->turtitle}}</a>
                                            </h6>
                                            <div class="price">{{number_format($otherproduct->price)}} €</div>
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
                            <h3>Açıklama</h3>
                            <p>{!! $product->turdescription !!}</p>
                            <h4 class="mt-5">adres</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>şehir : </strong> {{$product->turcity}}</td>
                                        <td><strong>Ülke : </strong> {{$product->turcountry}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>adres : </strong> {{$product->turaddress}}</td>
                                        <td><strong>Bölge : </strong> {{$product->turzone}}</td>
                                    </tr>
                                </table>
                            </div>
                            <h4>Detaylar</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>Alan : </strong> {{$product->productcompletes[0]->meter}}Meter</td>
                                        <td><strong>Zemin : </strong> {{$product->productcompletes[0]->floor}} </td>

                                    </tr>
                                    <tr>
                                        <td><strong>oda : </strong> {{$product->productcompletes[0]->room}}</td>
                                        <td><strong>Banyo : </strong> {{$product->productcompletes[0]->bath}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fiyat : </strong> {{number_format($product->price)}}€</td>
                                        <td><strong>Yıl : </strong> {{$product->productcompletes[0]->age}} </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>Situation : </strong>
                                            @if($product->sellstatus == 3)
                                                <span>rehin</span>
                                            @elseif($product->sellstatus == 1)
                                                <span>Kira</span>
                                            @elseif($product->sellstatus == 2)
                                                <span>Satmak</span>
                                            @endif
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <h4>Tesisler</h4>
                            <ul class="features-list clearfix">
                                @foreach($properties->where('language','tur') as $property)
                                    @if($property->id == isset($product->productproperty->where('title',$property->id)->first()->title))
                                        <li class="text-left float-left">
                                            {{$property->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <h4>Ülkedeki diğer proje</h4>
                            <section class="clients-section">
                                <div class="auto-container">
                                    <div class="sponsors-outer">
                                        <ul class="sponsors-carousel owl-carousel owl-theme">
                                            @foreach($home->where('turcountry',$product->turcountry) as $h)
                                                <li class="slide-item">
                                                    <figure class="image-box">
                                                        <a href="{{route('tur.product',["Home",$h->slug])}}">
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
                                                        <a href="{{route('tur.product',["Home",$h->slug])}}">{{$h->turtitle}}</a>
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
                                <div class="sidebar-title text-left"><h2>Ara</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('tur.search')}}">
                                        @csrf
                                        <div class="row no-gutters">
                                            <input type="hidden" name="home" value="home">
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="country">
                                                    <option value="">Ülke</option>
                                                    @foreach($homeCountries as $homecountry)
                                                        <option value="{{$homecountry}}">{{$homecountry}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="city">
                                                    <option value="">şehir</option>
                                                    @foreach($homeCities as $homecity)
                                                        <option value="{{$homecity}}">{{$homecity}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="price">
                                                    <option value="">Fiat</option>
                                                    <option value="1">50.000 Euro'dan az</option>
                                                    <option value="2">€ 150,000 - 50,000</option>
                                                    <option value="3">€ 300,000 - 150,000</option>
                                                    <option value="4">€ 450,000 - 300,000</option>
                                                    <option value="5">€ 600,000 - 450,000</option>
                                                    <option value="6">600.000 Euro'dan fazla</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="meter">
                                                    <option value="">Alan</option>
                                                    <option value="1">100 metreden az</option>
                                                    <option value="2">100-200Meter</option>
                                                    <option value="3">200-300Meters</option>
                                                    <option value="4">300 metreden fazla</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" name="type" id="type">
                                                    <option value="">Emlak Tipi</option>
                                                    <option value="0">Konut mülkiyeti</option>
                                                    <option value="1">Ticari mal</option>
                                                    <option value="2">Sınai mülkiyet</option>
                                                    <option value="3">apartman</option>
                                                    <option value="4">Konut Kulesi</option>
                                                    <option value="5">Villa</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-two"><span
                                                        class="btn-title">arama</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget about-agent-widget">
                                <div class="sidebar-title text-left"><h2>Acent</h2></div>
                                <div class="widget-content">
                                    <div class="image-box">
                                        @if(isset($consult->photo->path))
                                            <figure class="image">
                                                <a href="{{route('tur.agent',$consult->turname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($consult->photo->path)}}"
                                                         alt="{{$consult->turname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('tur.agent',$consult->turname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$consult->turname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h3 class="name text-left">{{$consult->turname}}</h3>
                                        <span class="designation text-left">Acent</span>
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
                                            <a href="{{route('tur.agent',$consult->turname)}}"
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
                                <li><span class="icon fa fa-city text-danger"></span><b> {{$car->turcity}} </b></li>
                                <li><span class="icon fa fa-calendar text-danger"></span><b> {{$car->year}} </b></li>
                                <li><span class="icon fa fa-map-marked text-danger"></span><b> {{$car->turcountry}}</b></li>
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
                                                     title="{{$car->title}}" alt="{{$car->turtitle}}"/></a>
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
                                <div class="sidebar-title"><h2>Diğer araç</h2></div>
                                <div class="widget-content">
                                    @foreach($cars->take(4) as $othercar)
                                        <article class="post mt-3">
                                            <div class="post-thumb">
                                                <a href="{{route('tur.product',["car",$othercar->slug])}}">
                                                    <img src="images/icons/empty.png" style="height: 107px;"
                                                         data-src="{{$othercar->photos->first()->path}}" alt="">
                                                    <span class="status">
                                                       @if($othercar->type == 0)
                                                            <span>Yeni</span>
                                                        @elseif($othercar->type == 1)
                                                            <span>Kullanılmış </span>
                                                        @endif
                                                    </span>
                                                </a>
                                            </div>
                                            <span class="location">{{$othercar->turaddress}}</span>
                                            <h3>
                                                <a href="{{route('tur.product',["car",$othercar->slug])}}">{{$othercar->title}}</a>
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
                            <h3>Açıklama</h3>
                            <p>{!! $car->turdescription !!}</p>
                            <h4 class="mt-5">Adres</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>şehir : </strong><b> {{$car->encity}}</b></td>
                                        <td><strong>Ülke : </strong><b> {{$car->encountry}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Yıl : </strong><b> {{$car->year}}</b></td>
                                        <td><strong>fiat : </strong><b> {{number_format($car->price)}}€</b></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>K/m : </strong><b> {{$car->kilometer}}</b></td>
                                    </tr>
                                </table>
                            </div>
                            <h4>Özellikleri</h4>
                            <ul class="features-list clearfix">
                                @foreach($properties->where('language','tur') as $property)
                                    @if($property->id == isset($car->carproperty->where('title',$property->id)->first()->title))
                                        <li class="float-left">
                                            {{$property->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <h4>Bu markada</h4>
                            <section class="clients-section">
                                <div class="auto-container">
                                    <div class="sponsors-outer">
                                        <ul class="sponsors-carousel owl-carousel owl-theme">
                                            @foreach($cars->where('brand',$car->brand) as $car)
                                                <li class="slide-item">
                                                    <figure class="image-box">
                                                        <a href="#">
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
                                                        <a href="{{route('tur.product',["car",$car->slug])}}">{{$car->title}}</a>
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
                                <div class="sidebar-title"><h2>Ara</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('tur.search')}}">
                                        @csrf
                                        <div class="row no-gutters">
                                            <input type="hidden" name="car" value="car">
                                            <div class="form-group">
                                                <select class="custom-select-box" name="new" id="new">
                                                    <option value="">Yeni/kullanılmış</option>
                                                    <option value="0">Yeni</option>
                                                    <option value="1">kullanılmış</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="city">
                                                    <option value="">şehir</option>
                                                    @foreach($homeCities as $homecity)
                                                        <option value="{{$homecity}}">{{$homecity}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="price">
                                                    <option value="">Fiat</option>
                                                    <option value="1">20.000 Euro'dan az</option>
                                                    <option value="2">€ 50,000 - 20,000</option>
                                                    <option value="3">€ 80,000 - 50,000</option>
                                                    <option value="4">€ 100,000 - 80,000</option>
                                                    <option value="5">€ 150,000 - 100,000</option>
                                                    <option value="6">150.000 Euro'dan fazla</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" name="cartype">
                                                    <option value="">Araba tipi</option>
                                                    <option value="1">Sedon</option>
                                                    <option value="2">Coupe</option>
                                                    <option value="3">Suve</option>
                                                    <option value="4">Crossover</option>
                                                    <option value="5">Hatchback</option>
                                                    <option value="6">Hybrid</option>
                                                    <option value="7">Sport</option>
                                                    <option value="8">Pickup Truck</option>
                                                    <option value="9">Minivan</option>
                                                    <option value="10">Luxury</option>
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
                                                        class="btn-title">arama</span></button>
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
                                                <a href="{{route('tur.agent',$consult->turname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($consult->photo->path)}}"
                                                         alt="{{$consult->turname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('tur.agent',$consult->turname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$consult->turname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h3 class="name">{{$consult->turname}}</h3>
                                        <span class="designation">Agent</span>
                                        <ul class="contact-info" style="direction: ltr">
                                            <li><strong>Phone:</strong><a href="#">{{$consult->phone}}</a></li>
                                            <li><strong>Email:</strong><a href="#">{{$consult->email}}</a></li>
                                        </ul>
                                        <div class="social-links social-icon-colored" style="direction: ltr">
                                            <strong>Sosyal network:</strong>
                                            <a href="{{$consult->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$consult->telegram}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$consult->twitter}}"><i class="fab fa-instagram text-danger"></i></a>
                                            <a href="{{$consult->whatsup}}"><i class="fab fa-whatsapp text-success"></i></a>
                                        </div>
                                        <div class="btn-box">
                                            <a href="{{route('tur.agent',$consult->turname)}}"
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
    @include('front.tur.layout.footer')

@endsection
