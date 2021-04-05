@extends('front.fa.layout.master')

@section('content')
    @include('front.fa.layout.header')

    <div class="page-wrapper">
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>خودرو</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li>خودرو</li>
                </ul>
            </div>
        </section>
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        @foreach($cars as $car)
                            <div class="property-list-view">
                                <div class="property-block-two wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image listimage">
                                                <a href="{{route('product',["car",$car->slug])}}">
                                                    @if($car->photos->first()->path)
                                                        <img src="images/icons/empty.png"
                                                             data-src="{{$car->photos->first()->path}}"
                                                             alt="">
                                                    @else
                                                        <img src="images/icons/empty.png" style="height: 107px;"
                                                             data-src="{{asset('/front/images/resource/car.jpg')}}"
                                                             alt="">
                                                    @endif

                                                </a>
                                            </figure>
                                            <span class="for">
                                @if($car->type == 0)
                                                    <span>جدید</span>
                                                @elseif($car->sellstatus == 1)
                                                    <span>دست دوم</span>
                                                @endif
                            </span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span>{{$car->brand}}</li>
                                                <li><span
                                                        class="icon fa fa-city"></span>{{$car->city}}
                                                </li>
                                                <li><span class="icon fa fa-calendar"></span>{{$car->year}} </li>
                                            </ul>
                                            <h3><a href="{{route('product',["car",$car->slug])}}">{{$car->title}}</a>
                                            </h3>
                                            <div class="text">{!! Str::limit($car->description,40) !!}</div>
                                        </div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$car->country}}
                                                - {{$car->city}}</div>
                                            <div class="price">{{number_format($car->price)}} €</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                {{$cars->links()}}
                            </div>
                        @endforeach
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
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        @include('front.fa.layout.footer')
    </div>

@endsection
