@extends('front.tur.layout.master')
@section('content')
    @include('front.tur.layout.header')
    @if(Session::has('success'))
        <div class="container" id="alert">
            <div class="alert alert-success" style="width: 100%">
                <div>{{ Session('success') }}</div>
            </div>
        </div>
    @endif
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            <h1>Bize Ulaşın</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('tur.home')}}">Ana Sayfa</a></li>
                <li>Bize Ulaşın</li>
            </ul>
        </div>
    </section>
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix">
                    <div class="contact-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft text-left" style="direction: ltr">
                            <h2>Bize Ulaşın</h2>
                            <ul class="contact-info">
                                <li>
                                    <p><i class="fa fa-map-marker-alt mr-3 text-dark">
                                        </i> Turky... </p>
                                </li>
                                <li>
                                    <p><a href="tel:+874561230">
                                            <i class="fa fa-phone-volume mr-3 text-dark">
                                            </i> +021 12345678</a>
                                    </p>
                                </li>
                                <li>
                                    <p><a href="mailto:info@revel.com">
                                            <i class="fa fa-envelope mr-3 text-dark">
                                            </i>info@revel.com</a>
                                    </p>
                                </li>
                                <li>
                                    <p><i class=" fab fa-skype mr-3 text-dark">
                                        </i>route 66 </p>
                                </li>
                            </ul>

                            <ul class="social-icon-four">
                                <li class="title">Follow us :</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="contact-form">
                                <div class="title">
                                    <h2 class="text-left">Mesaj gönder</h2>
                                </div>
                                <form method="post" action="{{route('tur.sendmessage')}}" id="contact-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" class="text-left" placeholder="email"
                                                   required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" class="text-left" placeholder="name"
                                                   required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="phone" class="text-left" placeholder="phone">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="description" class="text-left" placeholder="message"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-left">
                                            <button class="theme-btn btn-style-one" type="submit"
                                                    name="submit-form"><span
                                                    class="btn-title">Gönder</span></button>
                                        </div>
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
            <iframe width="1000" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>.mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 1200px;
                }
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 1200px;
                }</style>
        </div>
    </div>
    <!-- End Map Section -->

    @include('front.tur.layout.footer')
@endsection
