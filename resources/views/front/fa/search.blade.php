@extends('front.fa.layout.master')
@section('content')
    @include('front.fa.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            @if(isset($home))
                <h1>{{$home}}</h1>
            @else
                <h1>{{$vehicle}}</h1>
            @endif
            <ul class="page-breadcrumb">
                <li><a href="{{route('home')}}">خانه</a></li>
                <li>جزئیات جستجو</li>
            </ul>
        </div>
    </section>

    <div class="content-side col-lg-8 col-md-12 col-sm-12">
        <div class="property-list-view m-5">
            @foreach($results as $result)
                @if(isset($home))
                    <div class="property-block-two wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image listimage">
                                    <a href="{{route('product',["Home",$result->slug])}}">
                                        <img src="images/icons/empty.png"
                                             data-src="{{$result->photos->first()->path}}"
                                             alt=""></a></figure>
                                <span class="for">
                                @if($result->sellstatus == 3)
                                        <span>رهن</span>
                                    @elseif($result->sellstatus == 1)
                                        <span>اجاره</span>
                                    @elseif($result->sellstatus == 2)
                                        <span>فروش</span>
                                    @endif
                            </span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span
                                            class="icon fa fa-expand"></span>{{$result->productcompletes[0]->meter}}
                                        متر
                                        مربع
                                    </li>
                                    <li><span class="icon fa fa-bed"></span>{{$result->productcompletes[0]->room}}
                                        اتاق
                                        خواب
                                    </li>
                                    <li><span class="icon fa fa-bath"></span>{{$result->productcompletes[0]->bath}}
                                        سرویس
                                    </li>
                                </ul>
                                <h3><a href="{{route('product',["Home",$result->slug])}}">{{$result->title}}</a></h3>
                                <div class="text">{!! Str::limit($result->description,40) !!}</div>
                            </div>
                            <div class="property-price clearfix">
                                <div class="location"><span
                                        class="icon fa fa-map-marker-alt"></span>{{$result->country}}
                                    - {{$result->city}}</div>
                                <div class="price">{{number_format($result->price)}} €</div>
                            </div>
                        </div>
                    </div>
                @elseif($vehicle)
                    <div class="property-block-two wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image listimage">
                                    <a href="{{route('product',["car",$result->slug])}}">
                                        <img src="images/icons/empty.png"
                                             data-src="{{$result->photos->first()->path}}"
                                             alt=""></a>
                                </figure>
                                <span class="for">
                                @if($result->type == 0)
                                        <span>جدید</span>
                                    @elseif($result->sellstatus == 1)
                                        <span>دست دوم</span>
                                    @endif
                            </span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span>{{$result->brand}}</li>
                                    <li><span class="icon fa fa-city"></span>{{$result->city}}</li>
                                    <li><span class="icon fa fa-calendar"></span>{{$result->year}} </li>
                                </ul>
                                <h3><a href="{{route('product',["car",$result->slug])}}">{{$result->title}}</a></h3>
                                <div class="text">{!! Str::limit($result->description,40) !!}</div>
                            </div>
                            <div class="property-price clearfix">
                                <div class="location"><span
                                        class="icon fa fa-map-marker-alt"></span>{{$result->country}}
                                    - {{$result->city}}</div>
                                <div class="price">{{number_format($result->price)}} €</div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{--        <div>--}}
        {{--            {{$results->links()}}--}}
        {{--        </div>--}}
    </div>
    @if($results->count() < 1)
        <div class="container mb-5">
            <h3 class="alert2 alert-danger text-danger text-center" >متاسفانه موردی یافت نشد!</h3>
        </div>
    @endif
    @include('front.fa.layout.footer')
@endsection
