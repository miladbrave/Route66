@extends('front.tur.layout.master')
@section('style')
    <style>
        .ui-menu .ui-menu-item-wrapper {
            text-align: end
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="preloader"></div>
        @include('front.tur.layout.header')
        <div class="container mt-2">
            <div class="owl-carousel">
                @foreach($sliders->where('number',1) as $slide)
                    <div>
                        @if($slide->texttur)
                            <div class="caption wow animate__slideInUp" data-wow-duration="1s">
                                <h1 class="text-white">{{$slide->texttur}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texttur}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',2) as $slide)
                    <div>
                        @if($slide->texttur)
                            <div class="caption wow animate__fadeInDown" data-wow-duration="1s" data-wow-delay="4s">
                                <h1 class="text-white">{{$slide->texttur}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texttur}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',3) as $slide)
                    <div>
                        @if($slide->texttur)

                            <div class="caption wow animate__fadeInUpBig" data-wow-duration="1s" data-wow-delay="7s">
                                <h1 class="text-white">{{$slide->texttur}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texttur}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',4) as $slide)
                    <div>
                        @if($slide->texttur)
                            <div class="caption wow animate__backInUp" data-wow-duration="1s" data-wow-delay="10s">
                                <h1 class="text-white">{{$slide->texttur}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->texttur}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <section class="property-search-section style-two">
            <div class="auto-container">
                <div class="property-search-form-two wow fadeInUp">
                    <div class="title"><h5>Arama Ölçütü</h5></div>
                    <div class="form-inner" style="margin-top: 10px">
                        <div class="property-search-tabs tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#sale" class="tab-btn active-btn">Ev</li>
                                <li data-tab="#rent" class="tab-btn">Araba</li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="sale">
                                    <div class="property-search-form">
                                        <form method="post" action="{{route('tur.search')}}">
                                            @csrf
                                            <input type="hidden" name="home" value="home">
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country" class="">Ülke</label>
                                                    <select class="custom-select-box" id="country" name="country">
                                                        <option value="">seç</option>
                                                        @foreach($homeCountries as $homecountry)
                                                            <option value="{{$homecountry}}">{{$homecountry}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">şehir</label>
                                                    <select class="custom-select-box" id="country" name="city">
                                                        <option value="">seç</option>
                                                        @foreach($homeCities as $homecity)
                                                            <option value="{{$homecity}}">{{$homecity}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label>Emlak Tipi</label>
                                                    <select class="custom-select-box" name="type">
                                                        <option value="">seç</option>
                                                        <option value="0">Konut mülkiyeti</option>
                                                        <option value="1">Ticari mal</option>
                                                        <option value="2">Sınai mülkiyet</option>
                                                        <option value="3">apartman</option>
                                                        <option value="4">Konut Kulesi</option>
                                                        <option value="5">Villa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">fiyat</label>
                                                    <select class="custom-select-box" id="country" name="price">
                                                        <option value="">seç</option>
                                                        <option value="1">50.000 Euro'dan az</option>
                                                        <option value="2">€ 150,000 - 50,000</option>
                                                        <option value="3">€ 300,000 - 150,000</option>
                                                        <option value="4">€ 450,000 - 300,000</option>
                                                        <option value="5">€ 600,000 - 450,000</option>
                                                        <option value="6">600.000 Euro'dan fazla</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">Alan</label>
                                                    <select class="custom-select-box" id="country" name="meter">
                                                        <option value="">seç</option>
                                                        <option value="1">100 metreden az</option>
                                                        <option value="2">100-200Meter</option>
                                                        <option value="3">200-300Meters</option>
                                                        <option value="4">300 metreden fazla</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <label for="country">Oda</label>
                                                    <select class="custom-select-box" id="country" name="room">
                                                        <option value="">seç</option>
                                                        <option value="1">1 oda</option>
                                                        <option value="2">2 oda</option>
                                                        <option value="3">3 oda</option>
                                                        <option value="4">4 oda</option>
                                                        <option value="10">4 odadan fazla</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12 align">
                                                    <button type="submit" class="theme-btn btn-style-three"><span
                                                            class="btn-title">Arama</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--Tab -->
                                <div class="tab" id="rent">
                                    <div class="property-search-form">
                                        <form method="post" action="{{route('tur.search')}}">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="car" value="car">
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select name="new" id="">
                                                        <option value="">Yeni/kullanılmış</option>
                                                        <option value="0">Yeni</option>
                                                        <option value="1">kullanılmış</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select class="custom-select-box" id="country" name="city">
                                                        <option value="">şehir</option>
                                                        @foreach($carcity as $homecity)
                                                            <option value="{{$homecity}}">{{$homecity}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select class="form-control" name="brand">
                                                        <option value="">Marka</option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->title}}"
                                                                    style="direction: ltr">{{$brand->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
                                                    <select class="form-control" name="cartype"
                                                            style="direction: ltr">
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
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12 align">
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
                                                <div class="col-md-7"></div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-style-three"><span
                                                            class="btn-title">Ara</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="property-search-section container">
            <div class="auto-container">

            </div>
        </section>
        <section class="about-section">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column" style="padding-bottom: 0px">
                            <div class="sec-title text-left">
                                <div class="devider"><span></span></div>
                                <h2>Şirket Bilgisi</h2>
                                <div class="text" style="direction: ltr;text-align: left">Negar Yatırım Danışmanlık
                                    Enstitüsü
                                </div>
                            </div>
                            <div class="text-box">
                                <p style="direction: ltr;text-align: left">Yönetimsel deneyimlere ve başarılara dayanan,
                                    Türkiye ve Kıbrıs'ta yatırım, gayrimenkul ve araba satın alma alanındaki
                                    faaliyetlerine odaklanan Negar Yatırım Danışmanlık Enstitüsü, bir grup iş birliği
                                    ile göçmenlik ve yatırım hayalinizi gerçeğe dönüştürmekten gurur duyar. uzman
                                    danışmanlar dönüştürmek. Türkiye ve Kıbrıs'ta yatırım yapmanıza ve mülk satın
                                    almanıza yardımcı oluyoruz.
                                </p>
                            </div>
                            <div class="about-block wow fadeInUp text-left">
                                <div class="inner" style="padding: 0px 0px">
                                    <h4 class="ml-3" style="display: inline-block">yatırım</h4>
                                    <div class="icon flaticon-layers" style="display: inline-block"></div>
                                    <div class="text">Yatırım yapmanıza yardımcı olacağız.
                                    </div>
                                </div>
                            </div>
                            <div class="about-block wow fadeInUp text-left">
                                <div class="inner" style="padding: 0px 0px">
                                    <h4 class="ml-3" style="display: inline-block">emlak ve arabalar</h4>
                                    <div class="icon flaticon-bar-chart" style="display: inline-block"></div>
                                    <div class="text">Türkiye ve Kıbrıs'ta mülkünüzü veya arabanızı almayı veya satmayı planlıyorsanız bizimle iletişime geçin.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url(/front/images/resource/image-1.jpg);">
                            <div class="row no-gutters">
                                <div class="title-block col-lg-6 col-md-6 wow fadeIn">
                                    <div class="inner-box">
                                        <h3>Şirket <br>Yatırımcı</h3>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-insurance"></div>
                                        <h4><a href="javascript:void(0);">Yatırım</a></h4>
                                        <div class="text">Yatırım Yönetimi</div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 order-2 wow fadeIn" data-wow-delay="800ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-2"></div>
                                        <h4><a href="javascript:void(0);">Hedef Ülke</a></h4>
                                        <div class="text">Türkiye ve Kıbrıs</div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-mortgage"></div>
                                        <h4><a href="javascript:void(0);">Al ve sat</a></h4>
                                        <div class="text">emlak ve arabalar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="property-section" style="background-image: url(/front/images/background/1.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="devider"><span></span></div>
                    <h2>En son mülk</h2>
                    <div class="text">Evinizi seçin</div>
                </div>
                <div class="property-carousel owl-carousel owl-theme">
                    @if(isset($home))
                        @foreach($home->take(5) as $pro)
                            <div class="property-block text-left">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{route('tur.product',["Home",$pro->slug])}}">
                                                @if(isset($pro->photos->first()->path))
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{$pro->photos->first()->path}}" style="height: 300px"
                                                        alt="">
                                                @else
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{asset('/front/images/resource/house.jpg')}}"
                                                        style="height: 300px"
                                                        alt="">
                                                @endif
                                            </a></figure>
                                        <span class="for">
                                        @if($pro->sellstatus == 3)
                                                <span>rehin</span>
                                            @elseif($pro->sellstatus == 1)
                                                <span>Kira</span>
                                            @elseif($pro->sellstatus == 2)
                                                <span>Satmak</span>
                                            @endif
                                    </span>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="property-info clearfix">
                                            <li><span
                                                    class="icon fa fa-expand"></span>{{$pro->productcompletes[0]->meter}}
                                                Meters
                                            </li>
                                            <li><span class="icon fa fa-bed"></span> Oda
                                                {{$pro->productcompletes[0]->room}}</li>
                                            <li><span class="icon fa fa-bath"></span>
                                                Banyo {{$pro->productcompletes[0]->bath}}</li>
                                        </ul>
                                        <h3>
                                            <a href="{{route('tur.product',["Home",$pro->slug])}}">{{$pro->turtitle}}</a>
                                        </h3>
                                        <div class="text"
                                             style="direction: ltr">{!! Str::limit($pro->turdescription,40) !!}</div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$pro->turcountry}}
                                                - {{$pro->turcity}}</div>
                                            <div class="price">{{number_format($pro->price)}} €</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <div class="agents-section">
            <div class="auto-container">
                <div class="sec-title text-left">
                    <div class="devider"><span></span></div>
                    <h2>Profesyonel danışmanlar</h2>
                    <div class="text">Profesyonel danışmanlarla evinizi seçin</div>
                </div>
                <div class="agents-carousel owl-carousel owl-theme">
                    @foreach($agents->take(5) as $agent)
                        <div class="agent-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    @if(isset($agent->photo->path))
                                        <figure class="image consult">
                                            <a href="{{route('tur.agent',$agent->turname)}}">
                                                <img src="images/icons/empty.png"
                                                     data-src="{{asset($agent->photo->path)}}"
                                                     alt="{{$agent->turname}}">
                                            </a>
                                        </figure>
                                    @else
                                        <figure class="image consult">
                                            <a href="{{route('tur.agent',$agent->turname)}}">
                                                <img src="images/icons/empty.png"
                                                     data-src="/front/images/resource/agent-55.jpg"
                                                     alt="{{$agent->turname}}">
                                            </a>
                                        </figure>
                                    @endif
                                </div>
                                <div class="info-box">
                                    <h4 class="name"><a
                                            href="{{route('tur.agent',$agent->turname)}}">{{$agent->turname}}</a>
                                    </h4>
                                    <ul class="social-links social-icon-colored">
                                        <li><a href="{{$agent->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$agent->telegram}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$agent->twitter}}"><i
                                                    class="fab fa-instagram text-danger"></i></a></li>
                                        <li><a href="{{$agent->whatsup}}"><i
                                                    class="fab fa-whatsapp text-success"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <section class="property-section" style="background-image: url(/front/images/background/1.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="devider"><span></span></div>
                    <h2>Araçlar</h2>
                    <div class="text">Araçlarınızı seçin</div>
                </div>
                <div class="property-carousel owl-carousel owl-theme">
                    @if(isset($cars))
                        @foreach($cars as $car)
                            <div class="property-block">
                                <div class="inner-box text-left">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{route('tur.product',["car",$car->slug])}}"><img
                                                    src="images/icons/empty.png"
                                                    data-src="{{$car->photos->first()->path}}" style="height: 300px"
                                                    alt=""></a></figure>
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
                                            <li><span class="icon fa fa-city"></span> {{$car->turcity}} </li>
                                            <li><span class="icon fa fa-calendar"></span>{{$car->year}} </li>
                                        </ul>
                                        <h3><a href="{{route('tur.product',["car",$car->slug])}}">{{$car->title}}</a>
                                        </h3>
                                        <div class="text">{!! Str::limit($car->turdescription,40) !!}</div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$car->turcountry}}
                                                - {{$car->turcity}}</div>
                                            <div class="price">{{number_format($car->price)}} €</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Mülkiyet Hizmetleri</h2>
                    <div class="text">Sizin için en iyisini sunuyoruz</div>
                </div>
                <div class="row">
                    <div class="image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img
                                    src="images/icons/empty.png" data-src="/front/images/resource/image-2.jpg"
                                    alt=""></figure>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 text-left">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house"></span>
                                    <h4><a href="javascript:void(0);">Satılık</a></h4>
                                    <div class="text">Burada satılık güzel evler var.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="javascript:void(0);">kiralık</a></h4>
                                    <div class="text">Burada satılık güzel evler var.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-architecture-and-city"></span>
                                    <h4><a href="javascript:void(0);">İpotek</a></h4>
                                    <div class="text">Burada satılık güzel evler var.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 order-3 text-left">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-buyer"></span>
                                    <h4><a href="javascript:void(0);">alıcı eşleştirme</a></h4>
                                    <div class="text">Burada satılık güzel evler var.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-analytics"></span>
                                    <h4><a href="javascript:void(0);">Fiyat analizi</a></h4>
                                    <div class="text">Burada satılık güzel evler var.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-3"></span>
                                    <h4><a href="javascript:void(0);">satmak</a></h4>
                                    <div class="text">Burada satılık güzel evler var.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-to-action" style="background-image: url(/front/images/background/2.jpg);"
                 data-stellar-background-ratio="0.5">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="text">En sevdiğiniz evi birkaç dakika içinde seçin ve satın alın</div>
                </div>
            </div>
        </section>
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>Haberlerimiz ve makalemiz</h2>
                    <div class="text">Lorem ipsum dolor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
                <div class="inner-container">
                    <div class="news-carousel owl-carousel owl-theme">
                        @foreach($blogs as $blog)
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        @if(isset($blog->photo->path))
                                            <figure class="image">
                                                <a href="{{route('tur.blogDetail',$blog->id)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($blog->photo->path)}}"
                                                         alt="{{$blog->turname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('tur.blogDetail',$blog->id)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/news-1.jpg"
                                                         alt="{{$blog->turname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{route('tur.blogDetail',$blog->id)}}">{{$blog->titletur}}</a></h3>
                                        <div
                                            class="post-date  mt-2 text-left">{{Verta::instance($blog->created_at)->format('Y-m-d')}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('front.tur.layout.footer')

    </div>
@endsection
