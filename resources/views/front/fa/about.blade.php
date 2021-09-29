@extends('front.fa.layout.master')
@section('content')
    <div class="page-wrapper">
        @include('front.fa.layout.header')
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>درباره ما</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li>درباره ما</li>
                </ul>
            </div>
        </section>
        <section class="why-choose-us">
            <div class="auto-container">
                <div class="row">
                    <div class="info-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column" style="padding: 0px">
                            <div class="sec-title">
                                <div class="devider"><span></span></div>
                                <h2> مشاور سرمایه گذاری نگار</h2>
                                <div class="text">ما همیشه بهترین برا برای شما انتخاب می کنیم</div>
                            </div>
                            <div class="text-box">
                                <p style="text-align: justify;font-size: 13px">
                                    شرکت سرمایه گذاری نگار با بهره گیری از تجارب موفق مدیریتی در طول سالیان متمادی
                                    (با 30 سال تجربه)
                                    فعالیت خود را در
                                    زمینه‌های سرمایه گذاری، خرید و فروش ملک و خودرو و خدمات مالی گسترش داده و با در دست
                                    داشتن
                                    کارشناسان نخبه و مشاوران فارسی ‌زبان به جایگاه والایی در زمینه تجارت بین المللی دست
                                    پیدا کرده است.
                                    ارائه مشاوره جهت سرمایه‌گذاری در بخش املاک ترکیه و قبرس (مسکونی،تجاری و اداری)، خرید
                                    خانه‌های ویلایی به صورت نوساز و آماده تحویل و همچنین پیش فروش پروژه‌های درحال ساخت،
                                    ضمن انجام تمام مراحل قانونی خرید ملک و دریافت سند مالکیت و ثبت شهرداری، دریافت
                                    پاسپورت و اقامت دائم ترکیه و افتتاح حساب بانکی، بخشی از خدمات شرکت سرمایه گذاری نگار می‌باشد.
                                    بنابراین پیشنهاد می‌کنیم قبل از هر گونه اقدام جهت خرید  فروش ملک و خودرو در ترکیه و قبرس با ما
                                    مشورت نمایید و هم اکنون گامی بلند برای رویاهای آینده خود بردارید.
                                    مشاوران ما می توانند در انجام تمامی اقدامات فوق شما را همراهی نموده و همچنین به شما
                                    بهترین و مناسب‌ترین روش را پیشنهاد داده و در نهایت خرید امنی را برای شما تضمین
                                    نمایند.
                                </p>
                            </div>
                            <div class="row features">
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-rent-1"></span>
                                        <h4><a href="javascript:void(0);">ملک</a></h4>
                                        <div class="text">خرید، اجاره و فروش املاک</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-analytics"></span>
                                        <h4><a href="javascript:void(0);">خودرو</a></h4>
                                        <div class="text">فروش انواع خودرو ها</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-home-2"></span>
                                        <h4><a href="javascript:void(0);">مشاوره</a></h4>
                                        <div class="text">مشاوره در امور سرمایه گذاری</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-value"></span>
                                        <h4><a href="javascript:void(0);">خدمات</a></h4>
                                        <div class="text">تنوع در ارایه خدمات</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box wow fadeInRight">
                            <figure class="image"><img src="images/icons/empty.png"
                                                       data-src="/front/images/resource/image-3.jpg" alt=""></figure>
                            <div class="contact-info">
                                <span class="icon fa fa-phone-volume"></span>
                                <a href="tel:+8236558625" class="number" style="direction: ltr">+905338307792</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fun-facts-section">
            <div class="auto-container">
                <div class="fun-facts">
                    <div class="row clearfix">
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-home"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="856">0 </span>
                                </div>
                                <div class="counter-title">پروژه کامل</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-key"></span></div>
                                <div class="count-outer count-box">
                                    +<span class="count-text" data-speed="2000" data-stop="99">0 </span>
                                </div>
                                <div class="counter-title">املاک فروخته شده</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-smile"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="450">0 </span>
                                </div>
                                <div class="counter-title">مشتریان</div>
                            </div>
                        </div>
                        <div class="column count-box col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="content">
                                <div class="icon-box"><span class="fa fa-trophy"></span></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="120">0 </span>
                                </div>
                                <div class="counter-title">جوایز برنده شد</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="devider"><span></span></div>
                    <h2>آنچه مشتریان ما می گوید</h2>
                    <div class="text">خانه رویایی خود را در شهر خود پیدا کنید</div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img class="imagecustomer" src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb.jpg" alt="">
                                </figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">خریدار ملک</span>
                                <h4 class="name">سعید محمودی</h4>
                                <div class="text">
                                    با تشکر از مجموعه نگار که بهترین را برای من انتخاب کردند.
                                </div>

                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img class="imagecustomer" src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb-2.jpg" alt="">
                                </figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">خرید ملک</span>
                                <h4 class="name">ستاره جعفری</h4>
                                <div class="text">
                                    ممنون بابت مشاوره و کمکتون تو خرید خانه دلخواهم!
                                </div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img class="imagecustomer" src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb.jpg" alt="">
                                </figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">خرید خودرو</span>
                                <h4 class="name">سعید محمودی</h4>
                                <div class="text">سلام.تو کشور خارجی نمی دونستم چجوری میشه خودرو تهیه کرد تا با شرکت شما آشنا شدم...
                                </div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img class="imagecustomer" src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb-2.jpg" alt="">
                                </figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">لورم ایپسوم</span>
                                <h4 class="name">ستاره جعفری</h4>
                                <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است.
                                </div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img class="imagecustomer" src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb.jpg" alt="">
                                </figure>
                            </div>
                            <div class="content-box">
                                <span class="designation">لورم ایپسوم</span>
                                <h4 class="name">سعید محمودی</h4>
                                <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است.
                                </div>
                                <div class="rating"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="testimonial-block">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="image-box">--}}
{{--                                <figure class="image"><img src="images/icons/empty.png"--}}
{{--                                                           data-src="/front/images/resource/testi-thumb-2.jpg" alt="">--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <div class="content-box">--}}
{{--                                <span class="designation">لورم ایپسوم</span>--}}
{{--                                <h4 class="name">ستاره جعفری</h4>--}}
{{--                                <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده--}}
{{--                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم--}}
{{--                                    است.--}}
{{--                                </div>--}}
{{--                                <div class="rating"><span class="fa fa-star"></span><span--}}
{{--                                        class="fa fa-star"></span><span class="fa fa-star"></span><span--}}
{{--                                        class="fa fa-star"></span><span class="fa fa-star"></span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        @include('front.fa.layout.footer')
    </div>
@endsection
