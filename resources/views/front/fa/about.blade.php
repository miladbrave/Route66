@extends('front.fa.layout.master')
@section('content')
    <div class="page-wrapper">
    @include('front.fa.layout.header')
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>درباره ما</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">خانه</a></li>
                    <li>درباره ما</li>
                </ul>
            </div>
        </section>
        <section class="why-choose-us">
            <div class="auto-container">
                <div class="row">
                    <div class="info-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="devider"><span></span></div>
                                <h2>به سایت مشاور مسکن خوش آمدید</h2>
                                <div class="text">ما همیشه دارایی را به مشتری خود ارائه می دهیم</div>
                            </div>
                            <div class="text-box">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                                    متخصصان را می طلبد تا با نرم افزارها شناخت .</p>
                            </div>
                            <div class="row features">
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-rent-1"></span>
                                        <h4><a href="javascript:void(0);">از دست دادن هزینه</a></h4>
                                        <div class="text">لورم ایپسوم متن ساختگی</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-analytics"></span>
                                        <h4><a href="javascript:void(0);">بازاریابی خوب</a></h4>
                                        <div class="text">لورم ایپسوم متن ساختگی</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-home-2"></span>
                                        <h4><a href="javascript:void(0);">پیدا کردن راحت</a></h4>
                                        <div class="text">لورم ایپسوم متن ساختگی</div>
                                    </div>
                                </div>
                                <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="icon flaticon-protect"></span>
                                        <h4><a href="javascript:void(0);">قابل اعتماد</a></h4>
                                        <div class="text">لورم ایپسوم متن ساختگی</div>
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
                                <a href="tel:+8236558625" class="number" style="direction: ltr">+021 12345678</a>
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
                                <figure class="image"><img src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb.jpg" alt=""></figure>
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
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb-2.jpg" alt=""></figure>
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
                                <figure class="image"><img src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb.jpg" alt=""></figure>
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
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb-2.jpg" alt=""></figure>
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
                                <figure class="image"><img src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb.jpg" alt=""></figure>
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
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/icons/empty.png"
                                                           data-src="/front/images/resource/testi-thumb-2.jpg" alt=""></figure>
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
                </div>
            </div>
        </section>
        @include('front.fa.layout.footer')
    </div>
@endsection
