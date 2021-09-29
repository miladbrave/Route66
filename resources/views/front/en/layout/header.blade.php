<!-- Main Header-->
<header class="main-header header-style-one">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix row">
                <div class="top-right col-md-6">
                    <div class="row mobile-header">
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <ul class="contact-list clearfix">
                                <li style="direction: ltr"><i class="fa fa-phone-volume"></i> +905338307792 | +989141158193</li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:admin@revel.com">admin@revel.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 d-flex justify-content-start">
                            <select name="" class="language form-control">
                                <option value="en">English</option>
                                <option value="fa">فارسی</option>
                                <option value="tr">Türkçe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="top-left col-md-6 d-flex justify-content-end">
                    <ul class="social-icon-one clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-whatsapp"></span></a></li>
                    </ul>
                    <ul class="login-signup">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="auto-container">
            <div class="main-box clearfix row">
                <div class="logo-outer d-flex text-right col-md-3 col-sm-6 col-xs-6 pull-left">
                    <div class="logo">
                        <a href="{{route('en.home')}}">
                            <img src="/front/images/icons/empty.png"
                                 data-src="/front/images/logo/r5pn.png" alt="" title="">
                        </a>
                    </div>
                </div>
                <div class="d-flex col-md-2 col-sm-6 col-xs-6  second">
                    <a href="{{route('en.home')}}">
{{--                        <img src="/front/images/icons/empty.png"--}}
{{--                             data-src="/front/images/logo/c2.png" alt="" title="">--}}
                    </a>
                </div>
                <div class="nav-outer clearfix col-md-7 justify-content-center d-flex">
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <nav class="main-menu navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li id="contact"><a href="{{route('en.contact')}}">Contact us</a></li>
                                <li id="about"><a href="{{route('en.about')}}">About us</a></li>
                                <li id="carestate"><a href="{{route('en.carlist')}}">Cars List</a></li>
                                <li id="homeestate"><a href="{{route('en.list')}}">Homes List</a></li>
                                <li id="service"><a href="{{route('en.service')}}">Service</a></li>
                                <li id="home"><a href="{{route('en.home')}}">Home</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container clearfix">
            <div class="logo pull-right">
                <a href="index.html" title=""><img src="images/icons/empty.png" data-src="images/logo-small.svg" alt=""
                                                   title=""></a>
            </div>
            <div class="nav-outer pull-left">
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix"></ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/icons/empty.png" data-src="images/logo.svg"
                                                            alt="" title=""></a></div>
            <ul class="navigation clearfix"></ul>
        </nav>
    </div>
</header>

@section('js')
    <script>
        let url = window.location.href;
        $('#blog #home #about #service #estate #contact').removeClass('current')
        if (url.search('blog') > 0) {
            $('#blog').addClass('current');
        }
        if (url.search('') > 0) {
            $('#home').addClass('current');
        }
        if (url.search('about') > 0) {
            $('#about').addClass('current');
        }
        if (url.search('service') > 0) {
            $('#service').addClass('current');
        }
        if (url.search('estate') > 0) {
            $('#estate').addClass('current');
        }
        if (url.search('contact') > 0) {
            $('#contact').addClass('current');
        }
        if (url.search('HomesList') > 0) {
            $('#homeestate').addClass('current');
        }
    </script>
@endsection
