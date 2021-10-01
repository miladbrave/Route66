@extends('front.fa.layout.master')
@section('content')
    @include('front.fa.layout.header')
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            <h1>تماس با ما</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">خانه</a></li>
                <li>تماس با ما</li>
            </ul>
        </div>
    </section>
    @if(Session::has('success'))
        <div class="container" id="alert">
            <div class="alert alert-success" style="width: 100%">
                <div>{{ Session('success') }}</div>
            </div>
        </div>
    @endif
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="contact-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <h2>تماس با ما</h2>
                            <ul class="contact-info">
                                <li>
                                    <span class="icon fa fa-map-marker-alt"></span>
                                    <p> قبرس..</p>
                                    <p>ترکیه.. </p>
                                </li>
                                <li>
                                    <span class="icon fa fa-phone-volume"></span>
                                    <p><a href="tel:+874561230">+905338307792 <br> +989141158193</a></p>
                                </li>
                                <li>
                                    <span class="icon fa fa-envelope"></span>
                                    <p><a href="mailto:info@revel.com">info@revel.com</a></p>
                                </li>
                                <li>
                                    <span class="icon fab fa-skype"></span>
                                    <p>Negar</p>
                                </li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="title">ما را دنبال کنید :</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="contact-form">
                                <div class="title">
                                    <h2>ارسال پیام </h2>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{route('sendmessage')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="نام (اجباری)" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="ایمیل">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="تلفن (اجباری)" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" placeholder="پیام (اجباری)" required></textarea>
                                    </div>

                                    {!! NoCaptcha::renderJs() !!}

                                    <div class="col-md-12">
                                        {!! NoCaptcha::display() !!}
                                    </div>
                                    <div class="col-md-6">
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                            <h3 class="text-danger">{{ $errors->first('g-recaptcha-response') }}</h3>
                                        </span>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-two"><span
                                                class="btn-title">ارسال</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <!--End Contact Page Section -->--}}

    <!-- Map Section -->
    {{--    <section class="map-section">--}}
    {{--        <div class="auto-container">--}}
    {{--            <div class="map-outer">--}}
    {{--                <div class="map-canvas"--}}
    {{--                     data-zoom="12"--}}
    {{--                     data-lat="-37.817085"--}}
    {{--                     data-lng="144.955631"--}}
    {{--                     data-type="roadmap"--}}
    {{--                     data-hue="#ffc400"--}}
    {{--                     data-title="Envato"--}}
    {{--                     data-icon-path="/front/images/icons/map-marker.png"--}}
    {{--                     data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <div class="mapouter">
        <div class="gmap_canvas text-center">
            <iframe id="gmap_canvas"
                    src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

        </div>
    </div>
    <!-- End Map Section -->

    @include('front.fa.layout.footer')
@endsection
