<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="{{asset('/front/images/icon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/front/images/icon.png')}}"/>
    <title>Route66</title>
    <meta name="keywords" content="Route66,روت 66">
    <meta name="description"
          content="Sale, mortgage and rental of Property and vehicle in Turkey and Cyprus"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="http://www.route66ir.com/"/>
    <meta name="subject" content="Route66,روت 66">
    <meta name="copyright" content="Route66,روت 66">
    <meta name="language" content="En">
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Route66,روت 66"/>
    <meta property="og:description"
          content="Sale, mortgage and rental of Property and vehicle in Turkey and Cyprus"/>
    <meta property="og:url" content="http://www.route66ir.com/"/>
    <meta property="og:site_name" content="Route66"/>

    <link href="{{asset('/front/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/front/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/front/css/owl.carousel.css')}}"  rel="stylesheet" type="text/css">
    <link href="{{asset('/front/images/favicon.png')}}" rel="shortcut icon" type="image/x-icon">
    <link rel="icon" href="{{asset('/front/images/favicon.png')}}" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>

    @yield('style')
</head>

<body>

@yield('content')

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="{{asset('/front/js/jquery.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/front/js/jquery-2.1.1.min.js')}}"></script>--}}
<script src="{{asset('/front/js/popper.min.js')}}"></script>
<script src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/front/js/jquery-ui.js')}}"></script>
<script src="{{asset('/front/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('/front/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/front/js/owl.js')}}"></script>
<script src="{{asset('/front/js/wow.js')}}"></script>
<script src="{{asset('/front/js/isotope.js')}}"></script>
<script src="{{asset('/front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('/front/js/appear.js')}}"></script>
<script src="{{asset('/front/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

@yield('js')

<script type="text/javascript">
    $('#zoom_01').click(function(){
        if(screen.width() < 540){
            $(this).elevateZoom({
                zoomWindowPosition:1,
                zoomWindowOffetx: 5,
                zoomWindowWidth:$(this).width(),
                zoomWindowHeight:$(this).height(),
            });
        }
        else{
            $.removeData($(this), 'elevateZoom');//remove zoom instance from image
            $('.zoomContainer').remove(); // remove zoom container from DOM
            return false;
        }
    });
    setTimeout(function(){
        $.removeData($('img'), 'elevateZoom');
        $('.zoomContainer').remove();
    },1000);
    $("#zoom_01").elevateZoom({
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        zoomWindowPosition: 11,
        lensFadeIn: 500,
        lensFadeOut: 500,
        loadingIcon: 'image/progress.gif'
    });
    $("#zoom_01").bind("click", function (e) {
        var ez = $('#zoom_01').data('elevateZoom');
        $.swipebox(ez.getGalleryList());
        return false;
    });

    window.setTimeout(function () {
        $(".alert").slideUp(700, function () {
            $(this).remove();
        });
    }, 3000);
</script>
</body>
</html>
