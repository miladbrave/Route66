@php($products = \App\Product::inRandomOrder(2)->get())
<footer class="main-footer" style="background-image: url(/front/images/background/3.jpg);">
    <div class="auto-container">
        <div class="widgets-section" style="padding: 20px">
            <div class="row">
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-logo text-center">
                                <figure class="image">
                                    <a href="{{route('en.home')}}"><img src="images/icons/empty.png"
{{--                                            data-src="/front/images/logo/r5pn - Copy.png"--}}
                                            data-src=""
                                            alt=""  style="width: 50%;height: 100px"></a></figure>
                            </div>
                            <div class="footer-column col-lg-10 col-md-6 col-sm-12">
                                <hr style="background-color: white;">
                                <span style="direction: ltr;float: left;text-align: left">
                                Investment consulting<br>
                                With more than 30 years of experience<br>
                                Buying and selling properties and cars<br>
                                In Cyprus and Turkey<br>
                                </span>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact us</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li><span class="fa fa-map-marker-alt"></span>Cyprus..</li>
                                        <li style="direction: ltr"><span class="fa fa-phone-volume"></span>+905338307792 <br> +989141158193</li>
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
                            <!--Footer Column-->
                            <div class="footer-widget popular-posts">
                                <h2 class="widget-title">Real Estate</h2>
                                <div class="widget-content">
                                    @foreach($products->take(2) as $product)
                                        <div class="post">
                                            <div class="thumb"><a href="{{route('product',["Home",$product->slug])}}">
                                                    @if(isset($product->photos->first()->path))
                                                    <img src="{{asset($product->photos->first()->path)}}"
                                                         data-src="{{asset($product->photos->first()->path)}}"
                                                         alt="">
                                                        @endif
                                                </a></div>
                                            <h4><a href="{{route('product',["Home",$product->slug])}}">{{$product->entitle}}</a></h4>
                                            <span class="date">{{Verta::instance($product->created_at)}}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">links</h2>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('en.list')}}">Home List</a></li>
                                        <li><a href="{{route('en.carlist')}}">Car List</a></li>
                                        <li><a href="{{route('en.about')}}">About us</a></li>
                                        <li><a href="{{route('en.contact')}}">Contact us </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="copyright-text">
                    <p> <a href="">© 2021 - Route 66</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
