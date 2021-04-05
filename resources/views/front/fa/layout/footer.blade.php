@php($products = \App\Product::inRandomOrder(2)->get())
<footer class="main-footer" style="background-image: url(/front/images/background/3.jpg);">
    <div class="auto-container">
        <div class="widgets-section" style="padding: 20px">
            <div class="row">
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-logo">
                                <figure class="image text-center">
                                    <a href="{{route('home')}}" style="align-content: center">
                                        <img src="images/icons/empty.png"
                                               data-src="/front/images/logo/r5pn - Copy.png"
                                                   style="width: 50%;height: 100px;"
                                        >
                                    </a>
                                </figure>
                            </div>
                            <div class="footer-column col-lg-10 col-md-6 col-sm-12">
                                <hr style="background-color: white;">
                                <span>شرکت ما...</span>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">ارتباط با ما</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li><span class="fa fa-map-marker-alt"></span>قبرس</li>
                                        <li><span class="fa fa-phone-volume"></span>02112345678 - 02112345678</li>
                                        <li><span class="fa fa-envelope"></span><a href="mailto:info@revel.com">info@revel.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget popular-posts">
                                <h2 class="widget-title">املاک</h2>
                                <div class="widget-content">
                                    @foreach($products as $product)
                                        <div class="post">
                                            <div class="thumb"><a href="{{route('product',["Home",$product->slug])}}">
                                                    @if(isset($product->photos->first()->path))

                                                    <img src="{{asset($product->photos->first()->path)}}"
                                                         data-src="{{asset($product->photos->first()->path)}}"
                                                         alt="">
                                                        @endif
                                                </a></div>
                                            <h4><a href="{{route('product',["Home",$product->slug])}}">{{$product->title}}</a></h4>
                                            <span class="date">{{Verta::instance($product->created_at)}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">لینک ها</h2>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="{{route('home')}}">خانه</a></li>
                                        <li><a href="{{route('list')}}">املاک</a></li>
                                        <li><a href="{{route('carlist')}}">خودرو ها</a></li>
                                        <li><a href="{{route('about')}}">درباره ما</a></li>
                                        <li><a href="{{route('contact')}}">ارتباط با ما</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="copyright-text">
                    <p> <a href="http://i7v.ir/">© 2021 - Route 66</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
