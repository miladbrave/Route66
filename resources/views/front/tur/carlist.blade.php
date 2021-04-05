@extends('front.tur.layout.master')
@section('content')
    @include('front.tur.layout.header')
    <div class="page-wrapper">
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Araba</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('tur.home')}}">Ana Sayfa</a></li>
                    <li>Araba</li>
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
                                                <a href="{{route('tur.product',["car",$car->slug])}}">
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
                                                    <span>Yeni</span>
                                                @elseif($car->type == 1)
                                                    <span>Kullanılmış</span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span>{{$car->brand}}</li>
                                                <li><span class="icon fa fa-city"></span>{{$car->turcity}}</li>
                                                <li><span class="icon fa fa-calendar"></span>{{$car->year}} </li>
                                            </ul>
                                            <h3 class="text-left"><a href="{{route('tur.product',["car",$car->slug])}}">{{$car->title}}</a></h3>
                                            <div class="text text-left" style="direction: ltr">{!! Str::limit($car->turdescription,40) !!}</div>
                                        </div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$car->turcountry}}
                                                - {{$car->turcity}}</div>
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
                                <div class="sidebar-title text-left"><h2>Arama</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('tur.search')}}">
                                        @csrf
                                        <input type="hidden" name="car" value="car">
                                        <div class="row no-gutters">
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
                                                <select class="custom-select-box" id="country" name="kind">
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
        @include('front.tur.layout.footer')
    </div>
@endsection
