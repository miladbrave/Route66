@extends('front.fa.layout.master')
@section('content')
    @include('front.fa.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            <h1>
                @if($home)
                    املاک
                @elseif($car)
                    خودرو
                @endif
            </h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">خانه</a></li>
                <li>
                    @if($home)
                        جزییات املاک
                    @elseif($car)
                        جزییات خودرو
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
                            <h2>{{$product->title}}</h2>
                            <ul class="property-info clearfix">
                                <li><i class="fa fa-expand text-danger"></i>{{$product->productcompletes[0]->meter}}
                                    مترمربع
                                </li>
                                <li><i class="fa fa-bed text-danger"></i> {{$product->productcompletes[0]->room}} اتاق
                                </li>
                                <li><i class="fa fa-bath text-danger"></i>{{$product->productcompletes[0]->bath}} سرویس
                                    بهداشتی
                                </li>
                                <li><span class="fa fa-money-bill-wave text-danger"></span><b
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
                                <div class="sidebar-title text-right"><h2>سایر املاک</h2></div>
                                <div class="widget-content">
                                    @foreach($home->take(4) as $pro)
                                        <article class="post mt-3">
                                            <div class="post-thumb">
                                                <a href="{{route('product',["Home",$pro->slug])}}">
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
                                                            <span>رهن</span>
                                                        @elseif($pro->sellstatus == 1)
                                                            <span>اجاره</span>
                                                        @elseif($pro->sellstatus == 2)
                                                            <span>فروش</span>
                                                        @endif
                                                </span>
                                                </a>
                                            </div>
                                            <h6>
                                                <a href="{{route('product',["Home",$pro->slug])}}">{{$pro->title}}</a>
                                            </h6>
                                            <div class="price">{{number_format($pro->price)}}</div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="property-detail">
                            <hr>
                            <h3>توضیحات ملک</h3>
                            <p style="text-align: justify">{!! $product->description !!}</p>
                            <h4 class="mt-5">آدرس</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>کشور : </strong> {{$product->country}}</td>
                                        <td><strong>منطقه : </strong> {{$product->zone}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>شهر : </strong> {{$product->city}}</td>
                                        <td><strong>آدرس : </strong> {{$product->address}}</td>
                                    </tr>

                                </table>
                            </div>
                            <h4>جزئیات</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>مساحت : </strong> {{$product->productcompletes[0]->meter}} متر مربع
                                        </td>
                                        <td><strong>قیمت : </strong> {{number_format($product->price)}} €</td>
                                    </tr>
                                    <tr>
                                        <td><strong>اتاق ها : </strong> {{$product->productcompletes[0]->room}} اتاق
                                        </td>
                                        <td><strong>سرویس : </strong> {{$product->productcompletes[0]->bath}} سروریس
                                            بهداشتی
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>طبقه : </strong> {{$product->productcompletes[0]->floor}} </td>
                                        <td><strong>سال ساخت : </strong> {{$product->productcompletes[0]->age}} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>سیستم گرمایی/سرمایی
                                                : </strong> {{$product->productcompletes[0]->heating}} </td>
                                        <td><strong>وضعیت ملک : </strong>
                                            @if($product->sellstatus == 3)
                                                <span>رهن</span>
                                            @elseif($product->sellstatus == 1)
                                                <span>اجاره</span>
                                            @elseif($product->sellstatus == 2)
                                                <span>فروش</span>
                                            @endif
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <h4>امکانات</h4>
                            <ul class="features-list clearfix">
                                @foreach($properties->where('language','fa') as $property)
                                    @if($property->id == isset($product->productproperty->where('title',$property->id)->first()->title))
                                        <li>
                                            {{$property->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <h4>سایر املاک مرتبط</h4>
                            <section class="clients-section">
                                <div class="auto-container">
                                    <div class="sponsors-outer">
                                        <ul class="sponsors-carousel owl-carousel owl-theme">
                                            @foreach($home->where('country',$product->country) as $h)
                                                <li class="slide-item">
                                                    <figure class="image-box">
                                                        <a href="{{route('product',["Home",$h->slug])}}">
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
                                                        <a href="{{route('product',["Home",$h->slug])}}">{{$h->title}}</a>
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
                                <div class="sidebar-title"><h2>ویژگی های جستجو</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('search')}}">
                                        @csrf
                                        <div class="row no-gutters">
                                            <input type="hidden" name="home" value="home">
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="country">
                                                    <option value="">کشور</option>
                                                    @foreach($homeCountries as $homecountry)
                                                        <option value="{{$homecountry}}">{{$homecountry}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="city">
                                                    <option value="">شهر</option>
                                                    @foreach($homeCities as $homecity)
                                                        <option value="{{$homecity}}">{{$homecity}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="price">
                                                    <option value="">قیمت</option>
                                                    <option value="1">کمتر از 50 هزار یورو</option>
                                                    <option value="2">بین 50 تا 150 هزار یورو</option>
                                                    <option value="3">بین 150 تا 300 هزار یورو</option>
                                                    <option value="4">بین 300 تا 450 هزار یورو</option>
                                                    <option value="5">بین 450 تا 600 هزار یورو</option>
                                                    <option value="6">بیش از 600 هزار یورو</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="meter">
                                                    <option value="">متراژ</option>
                                                    <option value="1">کمتر از 100 متر</option>
                                                    <option value="2">بین 100 تا 200 متر</option>
                                                    <option value="3">بین 200 تا 300 متر</option>
                                                    <option value="4">بیشتر از 300 متر</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" name="type" id="type">
                                                    <option value="">نوع ملک</option>
                                                    <option value="0">مسکونی</option>
                                                    <option value="1">تجاری</option>
                                                    <option value="2">صنعتی</option>
                                                    <option value="3">آپارتمان</option>
                                                    <option value="4">مجتمع</option>
                                                    <option value="5">ویلایی</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-two"><span
                                                        class="btn-title">جستجو</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- About Agent -->
                            <div class="sidebar-widget about-agent-widget">
                                <div class="sidebar-title"><h2>مشاور</h2></div>
                                <div class="widget-content">
                                    <div class="image-box">
                                        @if(isset($consult->photo->path))
                                            <figure class="image">
                                                <a href="{{route('agent',$consult->faname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($consult->photo->path)}}"
                                                         alt="{{$consult->faname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('agent',$consult->faname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$consult->faname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h3 class="name">{{$consult->faname}}</h3>
                                        <span class="designation">مشاور املاک و مستغلات</span>
                                        <ul class="contact-info">
                                            <li><strong>تلفن:</strong><a href="#">{{$consult->phone}}</a></li>
                                            <li><strong>ایمیل:</strong><a href="#">{{$consult->email}}</a></li>
                                        </ul>
                                        <div class="social-links social-icon-colored">
                                            <strong>شبکه های اجتماعی:</strong>
                                            <a href="{{$consult->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$consult->telegram}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$consult->twitter}}"><i
                                                    class="fab fa-instagram text-danger"></i></a>
                                            <a href="{{$consult->whatsup}}"><i
                                                    class="fab fa-whatsapp text-success"></i></a>
                                        </div>
                                        <div class="btn-box">
                                            <a href="{{route('agent',$consult->faname)}}"
                                               class="theme-btn btn-style-two"><span
                                                    class="btn-title">نمایش پروفایل</span></a>
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
                                <li><span class="icon fa fa-map-marked text-danger"></span><b> {{$car->country}} </b>
                                </li>
                                <li><span class="icon fa fa-city text-danger"></span><b> {{$car->city}} </b></li>
                                <li><span class="icon fa fa-calendar text-danger"></span><b> {{$car->year}} </b></li>
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
                                                     title="{{$car->title}}" alt="{{$car->title}}"/></a>
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
                                <div class="sidebar-title text-right"><h2>سایر خودرو ها</h2></div>
                                <div class="widget-content">
                                    @foreach($cars->take(4) as $othercar)
                                        <article class="post mt-3">
                                            <div class="post-thumb">
                                                <a href="{{route('product',["car",$othercar->slug])}}">
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
                                                            <span>جدید</span>
                                                        @elseif($othercar->type == 1)
                                                            <span>دست دوم</span>
                                                        @endif
                                                </span>
                                                </a>
                                            </div>
{{--                                            <span class="location">{{$car->address}}</span>--}}
                                            <h3><a href="{{route('product',["car",$othercar->slug])}}">{{$othercar->title}}</a>
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
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="property-detail">
                            <hr>
                            <h3>توضیحات خودرو</h3>
                            <p>{!! $car->description !!}</p>
                            <h4 class="mt-5">آدرس</h4>
                            <div class="table-outer">
                                <table class="table table-striped">
                                    <tr>
                                        <td><strong>کشور : </strong><b> {{$car->country}}</b></td>
                                        <td><strong>شهر : </strong><b> {{$car->city}}</b></td>
                                    </tr>
                                    <tr>
                                        <td><strong>مدل : </strong><b> {{$car->year}}</b></td>
                                        <td><strong>قیمت : </strong><b> {{number_format($car->price)}} €</b></td>
                                    </tr>
                                    <tr>
                                        <td><strong>کارکرد : </strong><b> {{$car->kilometer}} km</b></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <h4>امکانات</h4>
                            <ul class="features-list clearfix">
                                @foreach($properties->where('language','fa') as $property)
                                    @if($property->id == isset($car->carproperty->where('title',$property->id)->first()->title))
                                        <li>
                                            {{$property->title}}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <hr>
                            <h4>سایر خودرو های این برند</h4>
                            <section class="clients-section">
                                <div class="auto-container">
                                    <div class="sponsors-outer">
                                        <ul class="sponsors-carousel owl-carousel owl-theme">
                                            @foreach($cars->where('brand',$car->brand) as $car)
                                                <li class="slide-item">
                                                    <figure class="image-box">
                                                        <a href="{{route('product',["car",$car->slug])}}">
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
                                                        <a href="{{route('product',["car",$car->slug])}}">{{$car->title}}</a>
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
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">
                            <div class="sidebar-widget search-properties">
                                <div class="sidebar-title"><h2>ویژگی های جستجو</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('search')}}">
                                        @csrf
                                        <input type="hidden" name="car" value="car">
                                        <div class="row no-gutters">
                                            <div class="form-group">
                                                <select class="custom-select-box" id="new" name="new">
                                                    <option value="">نوع</option>
                                                    <option value="0">جدید</option>
                                                    <option value="1">دست دوم</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="city">
                                                    <option value="">شهر</option>
                                                    @foreach($homeCities as $homecity)
                                                        <option value="{{$homecity}}">{{$homecity}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" id="country" name="price">
                                                    <option value="">قیمت</option>
                                                    <option value="1">کمتر از 20 هزار یورو</option>
                                                    <option value="2">بین 20 تا 50 هزار یورو</option>
                                                    <option value="3">بین 50 تا 80 هزار یورو</option>
                                                    <option value="4">بین 80 تا 100 هزار یورو</option>
                                                    <option value="5">بین 100 تا 150 هزار یورو</option>
                                                    <option value="6">بیش از 150 هزار یورو</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select-box" name="cartype">
                                                    <option value="">نوع خودرو</option>
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
                                                    <option value="">برند</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->title}}"
                                                                style="direction: ltr">{{$brand->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-two"><span
                                                        class="btn-title">جستجو</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget about-agent-widget">
                                <div class="sidebar-title"><h2>مشاور</h2></div>
                                <div class="widget-content">
                                    <div class="image-box">
                                        @if(isset($consult->photo->path))
                                            <figure class="image">
                                                <a href="{{route('agent',$consult->faname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($consult->photo->path)}}"
                                                         alt="{{$consult->faname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('agent',$consult->faname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$consult->faname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h3 class="name">{{$consult->faname}}</h3>
                                        <span class="designation">مشاور املاک و مستغلات</span>
                                        <ul class="contact-info">
                                            <li><strong>تلفن:</strong><a href="">{{$consult->phone}}</a></li>
                                            <li><strong>ایمیل:</strong><a href="">{{$consult->email}}</a></li>
                                        </ul>
                                        <div class="social-links social-icon-colored">
                                            <strong>شبکه های اجتماعی:</strong>
                                            <a href="{{$consult->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$consult->telegram}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$consult->twitter}}"><i
                                                    class="fab fa-instagram text-danger"></i></a>
                                            <a href="{{$consult->whatsup}}"><i
                                                    class="fab fa-whatsapp text-success"></i></a>
                                        </div>
                                        <div class="btn-box">
                                            <a href="{{route('agent',$consult->faname)}}"
                                               class="theme-btn btn-style-two"><span
                                                    class="btn-title">نمایش پروفایل</span></a>
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
    @include('front.fa.layout.footer')
@endsection
