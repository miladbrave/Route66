@extends('front.en.layout.master')
@section('content')
    @include('front.en.layout.header')
    <div class="page-wrapper">
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Vehicle</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('en.home')}}">Home</a></li>
                    <li>Vehicle</li>
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
                                                <a href="{{route('en.product',["car",$car->slug])}}">
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
                                                    <span>New</span>
                                                @elseif($car->type == 1)
                                                    <span>Used</span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span>{{$car->brand}}</li>
                                                <li><span
                                                        class="icon fa fa-city"></span>{{$car->encity}}
                                                </li>
                                                <li><span class="icon fa fa-calendar"></span>{{$car->year}} </li>
                                            </ul>
                                            <h3 class="text-left"><a href="{{route('en.product',["car",$car->slug])}}">{{$car->title}}</a></h3>
                                            <div class="text text-left">{!! Str::limit($car->endescription,40) !!}</div>
                                        </div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$car->encountry}}
                                                - {{$car->encity}}</div>
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
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        @include('front.en.layout.footer')
    </div>

@endsection
