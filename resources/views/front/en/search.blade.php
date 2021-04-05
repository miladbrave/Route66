@extends('front.en.layout.master')
@section('content')
    @include('front.en.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            @if(isset($home))
                <h1>{{$home}}</h1>
            @else
                <h1>{{$vehicle}}</h1>
            @endif
            <ul class="page-breadcrumb">
                <li><a href="{{route('en.home')}}">Home</a></li>
                <li>
                    @if(isset($home))
                        Properties detail
                    @elseif(isset($car))
                        Vehicle details
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
                                    <a href="{{route('en.product',["Home",$result->slug])}}">
                                        <img src="images/icons/empty.png"
                                             data-src="{{$result->photos->first()->path}}"
                                             alt=""></a></figure>
                                <span class="for">
                                     @if($result->sellstatus == 3)
                                        <span>Mortgage</span>
                                    @elseif($result->sellstatus == 1)
                                        <span>Rent</span>
                                    @elseif($result->sellstatus == 2)
                                        <span>Sell</span>
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
                                        Room
                                    </li>
                                    <li><span class="icon fa fa-bath"></span>{{$result->productcompletes[0]->bath}}
                                        Bath
                                    </li>
                                </ul>
                                <h3 class="text-left"><a href="{{route('en.product',["Home",$result->slug])}}">{{$result->entitle}}</a>
                                </h3>
                                <div class="text text-left" style="direction: ltr">{!! Str::limit($result->endescription,50) !!}</div>
                            </div>
                            <div class="property-price clearfix">
                                <div class="location"><span
                                        class="icon fa fa-map-marker-alt"></span>{{$result->encountry}}
                                    - {{$result->encity}}</div>
                                <div class="price">{{number_format($result->price)}} €</div>
                            </div>
                        </div>
                    </div>
                @elseif($vehicle)
                    <div class="property-block-two wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image listimage">
                                    <a href="{{route('en.product',["car",$result->slug])}}">
                                        <img src="images/icons/empty.png"
                                             data-src="{{$result->photos->first()->path}}"
                                             alt=""></a>
                                </figure>
                                <span class="for">
                                @if($result->type == 0)
                                        <span>New</span>
                                    @elseif($result->sellstatus == 1)
                                        <span> Userd</span>
                                    @endif
                            </span>
                            </div>
                            <div class="lower-content">
                                <ul class="property-info clearfix">
                                    <li><span class="icon fa fa-expand"></span>{{$result->brand}}</li>
                                    <li><span class="icon fa fa-city"></span>{{$result->encity}}</li>
                                    <li><span class="icon fa fa-calendar"></span>{{$result->year}} </li>
                                </ul>
                                <h3 class="text-left"><a href="{{route('en.product',["car",$result->slug])}}">{{$result->title}}</a></h3>
                                <div class="text text-left">{!! Str::limit($result->endescription,40) !!}</div>
                            </div>
                            <div class="property-price clearfix">
                                <div class="location"><span
                                        class="icon fa fa-map-marker-alt"></span>{{$result->encountry}}
                                    - {{$result->encity}}</div>
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
        <div class="justify-content-end container mb-5" >
            <h3 class="text-danger text-center alert2 alert-danger">!Sorry there is not any result</h3>
        </div>
    @endif

    @include('front.en.layout.footer')
@endsection
