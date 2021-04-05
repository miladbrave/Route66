@extends('front.fa.layout.master')
@section('content')
    <div class="page-wrapper">
        @include('front.fa.layout.header')
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>مشاوران</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">خانه</a></li>
                    <li>مشاوران ما</li>
                </ul>
            </div>
        </section>
        <section class="agent-detail">
            @if(Session::has('success'))
                <div class="container" id="alert">
                    <div class="alert alert-success" style="width: 100%">
                        <div>{{ Session('success') }}</div>
                    </div>
                </div>
            @endif
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row">
                        <div class="image-column col-lg-4 col-md-6 col-sm-12">
                            <div class="agent-block wow fadeIn">
                                <div class="inner-box">
                                    <div class="image-box">
                                        @if(isset($agent->photo->path))
                                            <figure class="image">
                                                <a href="{{route('agent',$agent->faname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($agent->photo->path)}}"
                                                         alt="{{$agent->faname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('agent',$agent->faname)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/agent-55.jpg"
                                                         alt="{{$agent->faname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="info-box">
                                        <h4 class="name">{{$agent->faname}}</h4>
                                        <ul class="social-links social-icon-colored">
                                            <li><a href="{{$agent->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="{{$agent->telegram}}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$agent->twitter}}"><i
                                                        class="fab fa-instagram text-danger"></i></a></li>
                                            <li><a href="{{$agent->whatsup}}"><i
                                                        class="fab fa-whatsapp text-success"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-column col-lg-8 col-md-6 col-sm-12">
                            <div class="inner-column">
                                <h3>درباره مشاوران</h3>
                                {!! $agent->description !!}
                                <table class="agent-info">
                                    <tr>
                                        <td><strong>شماره تماس: </strong> <a
                                                href="tel:{{$agent->phone}}">{{$agent->phone}}</a></td>
                                        <td><strong>{{$agent->email}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>املاک فروخته
                                                شده: </strong>{{$homes->count()}} </td>
                                        <td><strong> خودرو فروخته
                                                شده: </strong>{{$cars->count()}}
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="agent-properties">
                    <div class="sec-title">
                        <div class="devider"><span></span></div>
                        <h2>لیست ملک های مشاور</h2>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</div>
                    </div>


                    <div class="row">
                        <!-- Content Side -->
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">

                            <ul class="nav nav-pills mb-5 bg-dark" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                       role="tab" aria-controls="pills-home" aria-selected="true">املاک</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                       role="tab" aria-controls="pills-profile" aria-selected="false">خودرو</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <div class="property-list-view">
                                        @foreach($homes as $home)
                                            <div class="property-block-two wow fadeInUp">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image listimage"><a
                                                                href="{{route('product',["Home",$home->slug])}}">
                                                                @if(isset($home->photos->first()->path))
                                                                    <img src="images/icons/empty.png"
                                                                         data-src="{{$home->photos->first()->path}}"
                                                                         alt="">
                                                                @else
                                                                    <img src="images/icons/empty.png"
                                                                         data-src="{{asset('/front/images/resource/house.jpg')}}"
                                                                         alt="">
                                                                @endif
                                                            </a></figure>
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
                                                            <li><span
                                                                    class="icon fa fa-expand"></span>{{$home->productcompletes[0]->meter}}
                                                                متر مربع
                                                            </li>
                                                            <li><span
                                                                    class="icon fa fa-bed"></span>{{$home->productcompletes[0]->room}}
                                                                اتاق خواب
                                                            </li>
                                                            <li><span
                                                                    class="icon fa fa-bath"></span>{{$home->productcompletes[0]->bath}}
                                                                سرویس
                                                            </li>
                                                        </ul>
                                                        <h3>
                                                            <a href="{{route('product',["Home",$home->slug])}}">{{$home->title}}</a>
                                                        </h3>
                                                        <div
                                                            class="text">{!! Str::limit($home->description,40) !!}</div>
                                                    </div>
                                                    <div class="property-price clearfix">
                                                        <div class="location"><span
                                                                class="icon fa fa-map-marker-alt"></span>{{$home->country}}
                                                            - {{$home->city}}</div>
                                                        <div class="price">{{number_format($home->price)}} €</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <div class="content-side">
                                        @foreach($cars as $car)
                                            <div class="property-list-view">
                                                <div class="property-block-two wow fadeInUp">
                                                    <div class="inner-box">
                                                        <div class="image-box">
                                                            <figure class="image listimage">
                                                                <a href="{{route('product',["car",$car->slug])}}">
                                                                    @if(isset($car->photos->first()->path))
                                                                        <img src="images/icons/empty.png"
                                                                             data-src="{{$car->photos->first()->path}}"
                                                                             alt="">
                                                                    @else
                                                                        <img src="images/icons/empty.png"
                                                                             data-src="{{asset('/front/images/resource/house.jpg')}}"
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
                                                                <li><span
                                                                        class="icon fa fa-expand"></span>{{$car->brand}}
                                                                </li>
                                                                <li><span
                                                                        class="icon fa fa-city"></span>{{$car->city}}
                                                                </li>
                                                                <li><span
                                                                        class="icon fa fa-calendar"></span>{{$car->year}}
                                                                </li>
                                                            </ul>
                                                            <h3>
                                                                <a href="{{route('product',["car",$car->slug])}}">{{$car->title}}</a>
                                                            </h3>
                                                            <div
                                                                class="text">{!! Str::limit($car->description,40) !!}</div>
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
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-5">
                            <aside class="sidebar agent-sidebar">
                                <div class="sidebar-widget agent-form-widget">
                                    <div class="agent-form">
                                        <h3>تماس با مشاور</h3>
                                        <form method="post" action="{{route('sendmessage')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="نام">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="ایمیل">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="تلفن">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="description" placeholder="پیام"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-two"><span
                                                        class="btn-title">ارسال</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('front.fa.layout.footer')
    </div>
@endsection
