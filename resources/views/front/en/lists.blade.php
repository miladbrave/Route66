@extends('front.en.layout.master')
@section('content')
    @include('front.en.layout.header')
    <div class="page-wrapper">
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Property</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('en.home')}}">Home</a></li>
                    <li>Property</li>
                </ul>
            </div>
        </section>
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="property-list-view">
                            @foreach($homes as $home)
                                <div class="property-block-two wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image listimage"><a href="{{route('en.product',["Home",$home->slug])}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{$home->photos->first()->path}}"
                                                         alt=""></a></figure>
                                            <span class="for">
                                                 @if($home->sellstatus == 3)
                                                    <span>Mortgage</span>
                                                @elseif($home->sellstatus == 1)
                                                    <span>Rent</span>
                                                @elseif($home->sellstatus == 2)
                                                    <span>Sell</span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span>{{$home->productcompletes[0]->meter}} Meter </li>
                                                <li><span class="icon fa fa-bed"></span>{{$home->productcompletes[0]->room}} Room</li>
                                                <li><span class="icon fa fa-bath"></span>{{$home->productcompletes[0]->bath}} Service</li>
                                            </ul>
                                            <h3 class="text-left"><a href="{{route('en.product',["Home",$home->slug])}}">{{$home->entitle}}</a></h3>
                                            <div class="text text-left" style="direction: ltr">{!! Str::limit($home->endescription,50) !!}</div>
                                        </div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span class="icon fa fa-map-marker-alt"></span>{{$home->encountry}} - {{$home->encity}}</div>
                                            <div class="price">{{number_format($home->price)}} €</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            {{$homes->links()}}
                        </div>
                    </div>
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">
                            <div class="sidebar-widget search-properties">
                                <div class="sidebar-title text-left"><h2>Search</h2></div>
                                <div class="property-search-form style-four">
                                    <form method="post" action="{{route('en.search')}}">
                                        @csrf
                                        <div class="row no-gutters">
                                            <input type="hidden" name="home" value="home">
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
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        @include('front.en.layout.footer')
    </div>

@endsection
