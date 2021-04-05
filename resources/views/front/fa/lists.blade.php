@extends('front.fa.layout.master')

@section('content')
    @include('front.fa.layout.header')

    <div class="page-wrapper">

        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>ملک</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li>ملک</li>
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
                                            <figure class="image listimage"><a href="{{route('product',["Home",$home->slug])}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{$home->photos->first()->path}}"
                                                         alt=""></a></figure>
                                            <span class="for">
                                                 @if($home->sellstatus == 3)
                                                    <span>رهن</span>
                                                @elseif($home->sellstatus == 1)
                                                    <span>اجاره</span>
                                                @elseif($home->sellstatus == 2)
                                                    <span>فروش</span>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="property-info clearfix">
                                                <li><span class="icon fa fa-expand"></span>{{$home->productcompletes[0]->meter}}متر مربع </li>
                                                <li><span class="icon fa fa-bed"></span>{{$home->productcompletes[0]->room}} اتاق خواب</li>
                                                <li><span class="icon fa fa-bath"></span>{{$home->productcompletes[0]->bath}} سرویس</li>
                                            </ul>
                                            <h3><a href="{{route('product',["Home",$home->slug])}}">{{$home->title}}</a></h3>
                                            <div class="text">{!! Str::limit($home->description,40) !!}</div>
                                        </div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span class="icon fa fa-map-marker-alt"></span>{{$home->country}} - {{$home->city}}</div>
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

                    <!--Sidebar Side-->
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
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <section class="clients-section">
            <div class="auto-container">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/1.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/2.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/3.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/4.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/5.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/1.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/2.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/3.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/4.png"
                                                                       alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/front/images/icons/empty.png"
                                                                       data-src="/front/images/clients/5.png"
                                                                       alt=""></a></figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        @include('front.fa.layout.footer')
    </div>

@endsection
