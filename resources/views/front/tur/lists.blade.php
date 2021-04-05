@extends('front.tur.layout.master')
@section('content')
    @include('front.tur.layout.header')
    <div class="page-wrapper">
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Emlak</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('tur.home')}}">Ana Sayfa</a></li>
                    <li>Emlak</li>
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
                                            <figure class="image listimage"><a href="{{route('tur.product',["Home",$home->slug])}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{$home->photos->first()->path}}"
                                                         alt=""></a></figure>
                                            <span class="for">
                                                  @if($home->sellstatus == 3)
                                                    <span>rehin</span>
                                                @elseif($home->sellstatus == 1)
                                                    <span>Kira</span>
                                                @elseif($home->sellstatus == 2)
                                                    <span>Satmak</span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span>{{$home->productcompletes[0]->meter}} Metre </li>
                                                <li><span class="icon fa fa-bed"></span>{{$home->productcompletes[0]->room}} Oda</li>
                                                <li><span class="icon fa fa-bath"></span>{{$home->productcompletes[0]->bath}} Service</li>
                                            </ul>
                                            <h3 class="text-left"><a href="{{route('tur.product',["Home",$home->slug])}}">{{$home->turtitle}}</a></h3>
                                            <div class="text text-left">{!! Str::limit($home->endescription,40) !!}</div>
                                        </div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span class="icon fa fa-map-marker-alt"></span>{{$home->turcountry}} - {{$home->turcity}}</div>
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
                                <div class="sidebar-title"><h2>Ara</h2></div>
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
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        @include('front.tur.layout.footer')
    </div>

@endsection
