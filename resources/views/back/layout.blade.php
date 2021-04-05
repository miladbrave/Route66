<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ریول - سایت مسکن املاک | داشبورد</title>
    <!-- Stylesheets -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('/back/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/back/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/back/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/back/images/favicon.png')}}" type="image/x-icon" rel="shortcut icon">
    <link href="{{asset('/back/css/dropzone/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('/back/images/favicon.png')}}" type="image/x-icon" rel="icon">
    <link href="{{asset('/back/css/select2/select2.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

</head>

<body>

<?php
use App\Car;use App\Cosult;use App\Message;use App\Product;
$products = Product::all()->count();
$cars = Car::all()->count();
$messages = Message::all()->count();
$consulut = Cosult::all()->count();
?>

<div class="page-wrapper">
    <header class="main-header">
        <div class="main-box clearfix">
            <div class="logo-box">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="/front/images/logo/c2.png" alt="" title="" style="width: 150%">
                    </a>
                </div>
            </div>
            <div class="upper-right">
                <ul class="clearfix">
                    <li class="nav-toggler">
                        <button class="toggler-btn nav-btn"><span class="bar bar-one"></span><span
                                class="bar bar-two"></span><span class="bar bar-three"></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    @include('back.sidebar')

    <div class="dashboard">
        <div class="container-fluid">
            <div class="content-area">
                <div class="dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-12"><h4>داشبورد</h4></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li><a href="../index.html">خانه</a></li>
                                        <li class="active">داشبورد</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="ui-item">
                                <div class="left">
                                    <h4>{{$products}}</h4>
                                    <p>لیست خانه ها</p>
                                </div>
                                <div class="right">
                                    <i class="la la-home"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="ui-item">
                                <div class="left">
                                    <h4>{{$cars}}</h4>
                                    <p>لیست خودرو ها</p>
                                </div>
                                <div class="right">
                                    <i class="la la-car"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="ui-item">
                                <div class="left">
                                    <h4>{{$messages}}</h4>
                                    <p>پیام ها</p>
                                </div>
                                <div class="right">
                                    <i class="la la-comments-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="ui-item">
                                <div class="left">
                                    <h4>{{$consulut}}</h4>
                                    <p>مشاورین</p>
                                </div>
                                <div class="right">
                                    <i class="la la-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')
                </div>
            </div>

            @if(Route::is('dashboard'))
                <div class="text-center">
                    <img src="/front/images/logo/r4.jpg" alt="">
                </div>
            @endif
            <p class="copyright-text">© 2019 <a href="rtl-theme.com/user-profile/davod_taheri/">i7v.ir</a>
                تمامی حقوق محفوظ است.</p>
        </div>
    </div>
</div>


<script src="{{asset('/back/js/jquery.js')}}"></script>
<script src="{{asset('/back/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/back/js/popper.min.js')}}"></script>
<script src="{{asset('/back/js/jquery-ui.js')}}"></script>
<script src="{{asset('/back/js/wow.js')}}"></script>
<script src="{{asset('/back/js/dropzone.js')}}"></script>
<script src="{{asset('/back/js/appear.js')}}"></script>
<script src="{{asset('/back/js/script.js')}}"></script>
<script src="{{asset('/back/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('/front/js/wow.js')}}"></script>

@yield('js')

<script>
    new WOW().init();

    $(".select2").select2();
    window.setTimeout(function () {
        $(".alert").slideUp(700, function () {
            $(this).remove();
        });
    }, 3000);

    $('#exampleModal').modal('hide');
</script>

</body>
</html>
