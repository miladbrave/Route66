@extends('front.fa.layout.master')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        @include('front.fa.layout.header')

        <div class="container mt-2">
            <div class="owl-carousel">
                @foreach($sliders->where('number',1) as $slide)
                    <div>
                        @if($slide->textfa)
                            <div class="caption wow animate__slideInUp" data-wow-duration="1s">
                                <h1 class="text-white">{{$slide->textfa}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->textfa}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',2) as $slide)
                    <div>
                        @if($slide->textfa)

                            <div class="caption wow animate__fadeInDown" data-wow-duration="1s" data-wow-delay="4s">
                                <h1 class="text-white">{{$slide->textfa}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->textfa}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',3) as $slide)
                    <div>
                        @if($slide->textfa)

                            <div class="caption wow animate__fadeInUpBig" data-wow-duration="1s" data-wow-delay="7s">
                                <h1 class="text-white">{{$slide->textfa}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->textfa}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
                @foreach($sliders->where('number',4) as $slide)
                    <div>
                        @if($slide->textfa)

                            <div class="caption wow animate__backInUp" data-wow-duration="1s" data-wow-delay="10s">
                                <h1 class="text-white">{{$slide->textfa}}</h1>
                            </div>
                        @endif
                        @if(isset($slide->photo->path))
                            <img alt="{{$slide->textfa}}" src="{{$slide->photo->path}}"
                                 style="position: relative;height: 656px;">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <section class="property-search-section style-two">
            <div class="auto-container">
                <div class="property-search-form-two wow fadeInUp">
                    <div class="title"><h5>جستجوی بر اساس خصوصیات</h5></div>
                    <div class="form-inner" style="margin-top: 10px">
                        <div class="property-search-tabs tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#sale" class="tab-btn active-btn">خانه</li>
                                <li data-tab="#rent" class="tab-btn">خودرو</li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="sale">
                                    <div class="property-search-form">
                                        <form method="post" action="{{route('search')}}">
                                            @csrf
                                            <input type="hidden" name="home" value="home">
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <label for="country">کشور</label>
                                                    <select class="custom-select-box" id="country" name="country">
                                                        <option value="">انتخاب کنید</option>
                                                        @foreach($homeCountries as $homecountry)
                                                            <option value="{{$homecountry}}">{{$homecountry}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <label for="country">شهر</label>
                                                    <select class="custom-select-box" id="country" name="city">
                                                        <option value="">انتخاب کنید</option>
                                                        @foreach($homeCities as $homecity)
                                                            <option value="{{$homecity}}">{{$homecity}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <label>نوع ملک </label>
                                                    <select class="custom-select-box" name="type">
                                                        <option value="">انتخاب کنید</option>
                                                        <option value="0">مسکونی</option>
                                                        <option value="1">تجاری</option>
                                                        <option value="2">صنعتی</option>
                                                        <option value="3">آپارتمان</option>
                                                        <option value="4">مجتمع</option>
                                                        <option value="5">ویلایی</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <label for="country">قیمت</label>
                                                    <select class="custom-select-box" id="country" name="price">
                                                        <option value="">انتخاب کنید</option>
                                                        <option value="1">کمتر از 50 هزار یورو</option>
                                                        <option value="2">بین 50 تا 150 هزار یورو</option>
                                                        <option value="3">بین 150 تا 300 هزار یورو</option>
                                                        <option value="4">بین 300 تا 450 هزار یورو</option>
                                                        <option value="5">بین 450 تا 600 هزار یورو</option>
                                                        <option value="6">بیش از 600 هزار یورو</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <label for="country">متراژ</label>
                                                    <select class="custom-select-box" id="country" name="meter">
                                                        <option value="">انتخاب کنید</option>
                                                        <option value="1">کمتر از 100 متر</option>
                                                        <option value="2">بین 100 تا 200 متر</option>
                                                        <option value="3">بین 200 تا 300 متر</option>
                                                        <option value="4">بیشتر از 300 متر</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <label for="country">اتاق</label>
                                                    <select class="custom-select-box" id="country" name="room">
                                                        <option value="">انتخاب کنید</option>
                                                        <option value="1">1 خوابه</option>
                                                        <option value="2">2 خوابه</option>
                                                        <option value="3">3 خوابه</option>
                                                        <option value="4">4 خوابه</option>
                                                        <option value="10">بیشتر از 4 خواب</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-style-three"><span
                                                            class="btn-title">جستجو</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--Tab -->
                                <div class="tab" id="rent">
                                    <div class="property-search-form">
                                        <form method="post" action="{{route('search')}}">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="car" value="car">
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select name="new" id="">
                                                        <option value="">جدید/دست دوم</option>
                                                        <option value="0">جدید</option>
                                                        <option value="1">دست دوم</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select class="custom-select-box" id="country" name="city">
                                                        <option value="">شهر</option>
                                                        @foreach($carcity as $homecity)
                                                            <option value="{{$homecity}}">{{$homecity}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select class="form-control" name="brand">
                                                        <option value="">برند</option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->title}}"
                                                                    style="direction: ltr">{{$brand->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select class="form-control" name="cartype"
                                                            style="direction: ltr">
                                                        <option value="">نوع خودرو</option>
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
                                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                                    <select class="custom-select-box" id="country" name="price">
                                                        <option value="">قیمت</option>
                                                        <option value="1">کمتر از 20 هزار یورو</option>
                                                        <option value="2">بین 20 تا 50 هزار یورو</option>
                                                        <option value="3">بین 50 تا 80 هزار یورو</option>
                                                        <option value="4">بین 80 تا 100 هزار یورو</option>
                                                        <option value="5">بین 100 تا 150 هزار یورو</option>
                                                        <option value="6">بیش از 150 هزار یورو</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-7"></div>
                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-style-three"><span
                                                            class="btn-title">جستجو</span></button>
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
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="devider"><span></span></div>
                                <h2>درباره ما</h2>
                                <div class="text">موسسه مشاوره سرمایه گذاری نگار</div>
                            </div>
                            <div class="text-box">
                                <p style="text-align: justify">
                                    موسسه مشاوره سرمایه گذاری نگار با تكيه بر تجارب و موفقيت هاى مدیریتی و با تمرکز بر
                                    فعالیت
                                    خود در زمینه های سرمایه گذاری، خرید ملک و خودرو در کشورهای ترکیه و قبرس مفتخر است با
                                    همكارى گروه مشاورين متخصص روياى مهاجرت و سرمايه گذارى
                                    شما را به واقعيت تبديل نماید. ما یاری رسان شما در امر سرمایه گذاری و خرید ملک در
                                    ترکیه و قبرس هستیم.
                                </p>
                            </div>
                            <div class="about-block wow fadeInUp">
                                <div class="inner">
                                    <div class="icon flaticon-layers" style="position:absolute;"></div>
                                    <h4> سرمایه گذاری</h4>
                                    <div class="text">ما شما رو در امر سرمایه گذاری یاری خواهیم کرد.
                                    </div>
                                </div>
                            </div>
                            <div class="about-block wow fadeInUp">
                                <div class="inner">
                                    <div class="icon flaticon-bar-chart" style="position:absolute;"></div>
                                    <h4>املاک و خودرو</h4>
                                    <div class="text">اگر قصد به خرید و فروش ملک و یا خودرو خود را در ترکیه و قبرس
                                        دارید با ما تماس بگیرید.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Column -->
                    <div class="feature-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image: url(/front/images/resource/image-1.jpg);">
                            <div class="row no-gutters">
                                <!-- Title Block -->
                                <div class="title-block col-lg-6 col-md-6 wow fadeIn">
                                    <div class="inner-box">
                                        <h3>شرکت <br> سرمایه گذاری نگار</h3>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-insurance"></div>
                                        <h4><a href="javascript:void(0);">سرمایه گذاری</a></h4>
                                        <div class="text">مدیریت سرمایه گذاری</div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 order-2 wow fadeIn" data-wow-delay="800ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-home-2"></div>
                                        <h4><a href="javascript:void(0);">خرید فروش</a></h4>
                                        <div class="text"> املاک و خودرو</div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 wow fadeIn" data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="icon flaticon-maps-and-flags"></div>
                                        <h4><a href="javascript:void(0);">کشور مقصد</a></h4>
                                        <div class="text">ترکیه و قبرس</div>
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
                    <h2>جدیدترین املاک</h2>
                    <div class="text">خانه خود را در شهر خود پیدا کنید</div>
                </div>
                <div class="property-carousel owl-carousel owl-theme">
                    @if(isset($home))
                        @foreach($home->take(5) as $pro)
                            <div class="property-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{route('product',["Home",$pro->slug])}}">
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
                                                <span>رهن</span>
                                            @elseif($pro->sellstatus == 1)
                                                <span>اجاره</span>
                                            @elseif($pro->sellstatus == 2)
                                                <span>فروش</span>
                                            @endif
                                    </span>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="property-info clearfix">
                                            <li><span
                                                    class="icon fa fa-expand"></span>{{$pro->productcompletes[0]->meter}}
                                                متر مربع
                                            </li>
                                            <li><span class="icon fa fa-bed"></span>{{$pro->productcompletes[0]->room}}
                                                اتاق
                                            </li>
                                            <li><span class="icon fa fa-bath"></span>
                                                {{$pro->productcompletes[0]->bath}} سرویس
                                            </li>
                                        </ul>
                                        <h3><a href="{{route('product',["Home",$pro->slug])}}">{{$pro->title}}</a></h3>
                                        <div class="text">{!! Str::limit($pro->description,50) !!}</div>
                                        <div class="property-price clearfix">
                                            <div class="location"><span
                                                    class="icon fa fa-map-marker-alt"></span>{{$pro->country}}
                                                - {{$pro->city}}</div>
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
        <!--End Property Section -->

        {{--        <section class="popular-places-section">--}}
        {{--            <div class="auto-container">--}}
        {{--                <div class="sec-title text-center">--}}
        {{--                    <div class="devider"><span></span></div>--}}
        {{--                    <h2>مکان های معروف</h2>--}}
        {{--                    <div class="text">خانه رویایی خود را در شهر خود پیدا کنید</div>--}}
        {{--                </div>--}}

        {{--                <div class="masonry-items-container clearfix">--}}
        {{--                    <!-- Portfolio Item -->--}}
        {{--                    <div class="popular-item masonry-item small-item">--}}
        {{--                        <div class="image-box">--}}
        {{--                            <figure class="image"><img src="images/icons/empty.png"--}}
        {{--                                                       data-src="/front/images/gallery/1.jpg" alt=""></figure>--}}
        {{--                            <div class="caption-box">--}}
        {{--                                <h4>اپارتمان</h4>--}}
        {{--                                <span>15 ملک</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="overlay-box">--}}
        {{--                                <div class="info-box">--}}
        {{--                                    <h4>اپارتمان</h4>--}}
        {{--                                    <span class="properties">15 ملک</span>--}}
        {{--                                    <a href="images/gallery/1.jpg" class="lightbox-image images-btn">25 عکس <span--}}
        {{--                                            class="fa fa-search"></span></a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!-- Portfolio Item -->--}}
        {{--                    <div class="popular-item masonry-item large-item">--}}
        {{--                        <div class="image-box">--}}
        {{--                            <figure class="image"><img src="images/icons/empty.png"--}}
        {{--                                                       data-src="/front/images/gallery/2.jpg" alt=""></figure>--}}
        {{--                            <div class="caption-box">--}}
        {{--                                <h4>ویلا</h4>--}}
        {{--                                <span>7 ملک</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="overlay-box">--}}
        {{--                                <div class="info-box">--}}
        {{--                                    <h4>ویلا</h4>--}}
        {{--                                    <span class="properties">7 ملک</span>--}}
        {{--                                    <a href="images/gallery/1.jpg" class="lightbox-image images-btn">25 عکس <span--}}
        {{--                                            class="fa fa-search"></span></a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!-- Portfolio Item -->--}}
        {{--                    <div class="popular-item masonry-item small-item">--}}
        {{--                        <div class="image-box">--}}
        {{--                            <figure class="image"><img src="images/icons/empty.png"--}}
        {{--                                                       data-src="/front/images/gallery/3.jpg" alt=""></figure>--}}
        {{--                            <div class="caption-box">--}}
        {{--                                <h4>خانه</h4>--}}
        {{--                                <span>50 ملک</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="overlay-box">--}}
        {{--                                <div class="info-box">--}}
        {{--                                    <h4>خانه</h4>--}}
        {{--                                    <span class="properties">50 ملک</span>--}}
        {{--                                    <a href="images/gallery/1.jpg" class="lightbox-image images-btn">25 عکس <span--}}
        {{--                                            class="fa fa-search"></span></a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!-- Portfolio Item -->--}}
        {{--                    <div class="popular-item masonry-item small-item">--}}
        {{--                        <div class="image-box">--}}
        {{--                            <figure class="image"><img src="images/icons/empty.png"--}}
        {{--                                                       data-src="/front/images/gallery/4.jpg" alt=""></figure>--}}
        {{--                            <div class="caption-box">--}}
        {{--                                <h4>رستوران</h4>--}}
        {{--                                <span>5 ملک</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="overlay-box">--}}
        {{--                                <div class="info-box">--}}
        {{--                                    <h4>رستوران</h4>--}}
        {{--                                    <span class="properties">5 ملک</span>--}}
        {{--                                    <a href="images/gallery/1.jpg" class="lightbox-image images-btn">25 عکس <span--}}
        {{--                                            class="fa fa-search"></span></a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}


        {{--                    <!-- Portfolio Item -->--}}
        {{--                    <div class="popular-item masonry-item small-item">--}}
        {{--                        <div class="image-box">--}}
        {{--                            <figure class="image"><img src="images/icons/empty.png"--}}
        {{--                                                       data-src="/front/images/gallery/5.jpg" alt=""></figure>--}}
        {{--                            <div class="caption-box">--}}
        {{--                                <h4>کافه</h4>--}}
        {{--                                <span>5 ملک</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="overlay-box">--}}
        {{--                                <div class="info-box">--}}
        {{--                                    <h4>کافه</h4>--}}
        {{--                                    <span class="properties">5 ملک</span>--}}
        {{--                                    <a href="images/gallery/1.jpg" class="lightbox-image images-btn">25 عکس <span--}}
        {{--                                            class="fa fa-search"></span></a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!-- Portfolio Item -->--}}
        {{--                    <div class="popular-item masonry-item large-item">--}}
        {{--                        <div class="image-box">--}}
        {{--                            <figure class="image"><img src="images/icons/empty.png"--}}
        {{--                                                       data-src="/front/images/gallery/6.jpg" alt=""></figure>--}}
        {{--                            <div class="caption-box">--}}
        {{--                                <h4>مزرعه</h4>--}}
        {{--                                <span>5 ملک</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="overlay-box">--}}
        {{--                                <div class="info-box">--}}
        {{--                                    <h4>مزرعه</h4>--}}
        {{--                                    <span class="properties">5 ملک</span>--}}
        {{--                                    <a href="images/gallery/1.jpg" class="lightbox-image images-btn">25 عکس <span--}}
        {{--                                            class="fa fa-search"></span></a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}

    <!-- Agents Section -->
        <div class="agents-section">
            <div class="auto-container">
                <div class="sec-title">
                    <div class="devider"><span></span></div>
                    <h2>مشاوران حرفه ای</h2>
                    <div class="text">با مشاوران حرفه ای از املاک دیدن کنید</div>
                </div>
                <div class="agents-carousel owl-carousel owl-theme">
                    @foreach($agents->take(5) as $agent)
                        <div class="agent-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    @if(isset($agent->photo->path))
                                        <figure class="image consult">
                                            <a href="{{route('agent',$agent->faname)}}">
                                                <img src="images/icons/empty.png"
                                                     data-src="{{asset($agent->photo->path)}}"
                                                     alt="{{$agent->faname}}">
                                            </a>
                                        </figure>
                                    @else
                                        <figure class="image consult">
                                            <a href="{{route('agent',$agent->faname)}}">
                                                <img src="images/icons/empty.png"
                                                     data-src="/front/images/resource/agent-55.jpg"
                                                     alt="{{$agent->faname}}">
                                            </a>
                                        </figure>
                                    @endif
                                </div>
                                <div class="info-box">
                                    <h4 class="name"><a href="{{route('agent',$agent->faname)}}">{{$agent->faname}}</a>
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
        <!-- End Agents Section -->
        <section class="property-section" style="background-image: url(/front/images/background/1.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <div class="devider"><span></span></div>
                    <h2>خودرو ها</h2>
                    <div class="text">خودرو خود را در شهر خود پیدا کنید</div>
                </div>
                <div class="property-carousel owl-carousel owl-theme">
                    @if(isset($cars))
                        @foreach($cars as $car)
                            <div class="property-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{route('product',["car",$car->slug])}}">
                                                @if(isset($car->photos->first()->path))
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{$car->photos->first()->path}}" style="height: 300px"
                                                        alt="">
                                                @else
                                                    <img
                                                        src="images/icons/empty.png"
                                                        data-src="{{asset('/front/images/resource/car.jpg')}}"
                                                        style="height: 300px"
                                                        alt="">
                                                @endif
                                            </a></figure>
                                        <span class="for">
                                        @if($car->type == 0)
                                                <span>جدید</span>
                                            @elseif($car->type == 1)
                                                <span>دست دوم</span>
                                            @endif
                                    </span>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="property-info clearfix">
                                            <li><span class="icon fa fa-expand"></span>{{$car->brand}}</li>
                                            <li><span class="icon fa fa-city"></span> {{$car->city}} </li>
                                            <li><span class="icon fa fa-calendar"></span>{{$car->year}} </li>
                                        </ul>
                                        <h3><a href="{{route('product',["car",$car->slug])}}">{{$car->title}}</a></h3>
                                        <div class="text">{!! Str::limit($car->description,50) !!}</div>
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
                    @endif
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>خدمات ما</h2>
                    <div class="text">هر آنچه شما از ما خواستید.</div>
                </div>
                <div class="row">
                    <div class="image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img
                                    src="images/icons/empty.png" data-src="/front/images/resource/image-2.jpg"
                                    alt=""></figure>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house"></span>
                                    <h4><a href="javascript:void(0);">خانه برای فروش</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="javascript:void(0);">خانه برای اجاره</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-architecture-and-city"></span>
                                    <h4><a href="javascript:void(0);">خانه وام دار</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-column col-xl-4 col-lg-6 col-md-6 col-sm-12 order-3">
                        <div class="inner-column">
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-buyer"></span>
                                    <h4><a href="javascript:void();">تطبیق خریدار</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-analytics"></span>
                                    <h4><a href="javascript:void(0);">تجزیه و تحلیل قیمت</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.
                                    </div>
                                </div>
                            </div>
                            <div class="service-block wow fadeInUp">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-3"></span>
                                    <h4><a href="javascript:void(0);">خانه های اجاره ای</a></h4>
                                    <div class="text">در اینجا خانه های زیبایی که برای فروش در دسترس هستند وجود دارد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Action -->
        <section class="call-to-action" style="background-image: url(/front/images/background/2.jpg);"
                 data-stellar-background-ratio="0.5">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <h3 class="text-white">در چند ثانیه خانه خود را انتخاب و بخرید.</h3>
                </div>
            </div>
        </section>
        <!--End Call To Action -->
        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>اخبار و مقاله ما</h2>
                    <div class="text">همه درباره آخرین به روزرسانی ها</div>
                </div>
                <div class="inner-container">
                    <div class="news-carousel owl-carousel owl-theme">
                        @foreach($blogs as $blog)
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        @if(isset($blog->photo->path))
                                            <figure class="image">
                                                <a href="{{route('blogDetail',$blog->id)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="{{asset($blog->photo->path)}}"
                                                         alt="{{$blog->faname}}">
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="image">
                                                <a href="{{route('blogDetail',$blog->id)}}">
                                                    <img src="images/icons/empty.png"
                                                         data-src="/front/images/resource/news-1.jpg"
                                                         alt="{{$blog->faname}}">
                                                </a>
                                            </figure>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{route('blogDetail',$blog->id)}}">{{$blog->titlefa}}</a></h3>
                                        <div class="post-date mt-2 text-left"
                                             style="margin-bottom: 0%!important;">{{Verta::instance($blog->created_at)->format('Y-m-d')}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('front.fa.layout.footer')
    </div>
@endsection
