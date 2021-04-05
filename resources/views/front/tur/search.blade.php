@extends('front.tur.layout.master')
@section('content')
    @include('front.tur.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            @if(isset($home))
                <h1>{{$home}}</h1>
            @else
                <h1>{{$vehicle}}</h1>
            @endif
            <ul class="page-breadcrumb">
                <li><a href="{{route('tur.home')}}">Ana Sayfa</a></li>
                <li>
                    @if(isset($home))
                        Ev detayları
                    @elseif(isset($car))
                        Araç detayları
                    @endif
                </li>
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
                                    <a href="{{route('tur.product',["Home",$result->slug])}}">
                                        <img src="images/icons/empty.png"
                                             data-src="{{$result->photos->first()->path}}"
                                             alt=""></a></figure>
                                <span class="for">
                                    @if($result->sellstatus == 3)
                                        <span>rehin</span>
                                    @elseif($result->sellstatus == 1)
                                        <span>Kira</span>
                                    @elseif($result->sellstatus == 2)
                                        <span>Satmak</span>
                                    @endif
                            </span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span
                                            class="icon fa fa-expand"></span>{{$result->productcompletes[0]->meter}}
                                        Meter
                                    </li>
                                    <li><span class="icon fa fa-bed"></span>{{$result->productcompletes[0]->room}}
                                        Oda
                                    </li>
                                    <li><span class="icon fa fa-bath"></span>{{$result->productcompletes[0]->bath}}
                                        Banyo
                                    </li>
                                </ul>
                                <h3 class="text-left"><a href="{{route('en.product',["Home",$result->slug])}}">{{$result->turtitle}}</a>
                                </h3>
                                <div class="text text-left">{!! Str::limit($result->turdescription,40) !!}</div>
                            </div>
                            <div class="property-price clearfix">
                                <div class="location"><span
                                        class="icon fa fa-map-marker-alt"></span>{{$result->turcountry}}
                                    - {{$result->turcity}}</div>
                                <div class="price">{{number_format($result->price)}} €</div>
                            </div>
                        </div>
                    </div>
                @elseif($vehicle)
                    <div class="property-block-two wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image listimage">
                                    <a href="{{route('tur.product',["car",$result->slug])}}">
                                        <img src="images/icons/empty.png"
                                             data-src="{{$result->photos->first()->path}}"
                                             alt=""></a>
                                </figure>
                                <span class="for">
                                     @if($result->type == 0)
                                        <span>Yeni</span>
                                    @elseif($result->type == 1)
                                        <span>Kullanılmış</span>
                                    @endif
                            </span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span>{{$result->brand}}</li>
                                    <li><span class="icon fa fa-city"></span>{{$result->turcity}}</li>
                                    <li><span class="icon fa fa-calendar"></span>{{$result->year}} </li>
                                </ul>
                                <h3 class="text-left"><a href="{{route('tur.product',["car",$result->slug])}}">{{$result->title}}</a></h3>
                                <div class="text text-left">{!! Str::limit($result->turdescription,40) !!}</div>
                            </div>
                            <div class="property-price clearfix">
                                <div class="location"><span
                                        class="icon fa fa-map-marker-alt"></span>{{$result->turcountry}}
                                    - {{$result->turcity}}</div>
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
        <div class="justify-content-end container" style="padding: 2%;background-color: #c9c9c9;margin-bottom: 2%">
            <h3 class="text-danger text-center">!Maalesef sonuç yok</h3>
        </div>
    @endif

    @include('front.tur.layout.footer')
@endsection
