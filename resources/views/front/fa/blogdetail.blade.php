@extends('front.fa.layout.master')

@section('content')
    @include('front.fa.layout.header')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
        <div class="auto-container">
            <h1>جزئیات اخبار</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">خانه</a></li>
                <li>جزئیات اخبار</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <!-- News BLock Two -->
                        <div class="news-block-two">
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
                                    <ul class="post-info clearfix">
                                        <li>{{Verta::instance($blog->created_at)}}</li>
                                    </ul>
                                    <h3>{{$blog->titlefa}}</h3>
                                    {!! $blog->textfa !!}
                                </div>
                            </div>
                        </div>

                        <div class="post-share-options clearfix">
                            <div class="pull-right clearfix">
                                <span class="icon fa fa-tags"></span>
                                <ul class="tags">
                                    <li><a href="{{route('list')}}">خانه</a>,</li>
                                    <li><a href="{{route('carlist')}}">خودرو</a>,</li>
                                </ul>
                            </div>
                            <div class="pull-left clearfix">
                                <ul class="social-icon social-icon-colored clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram text-danger"></span></a></li>
                                    <li><a href="#"><span class="fab fa-whatsapp text-success"></span></a></li>
                                    <li><a href="#"><span class="fab fa-telegram text-info"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        <!-- Social Links Widget -->
                        <div class="sidebar-widget social-links-widget">
                            <div class="sidebar-title"><h2>شبکه های اجتماعی</h2></div>
                            <div class="widget-content">
                                <ul class="social-icon-three social-icon-colored">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram text-danger"></span></a></li>
                                    <li><a href="#"><span class="fab fa-whatsapp text-success"></span></a></li>
                                    <li><a href="#"><span class="fab fa-telegram text-info"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h2>پست های اخیر</h2></div>
                            <div class="widget-content">
                                @foreach($blogs as $blog)
                                    <article class="post">
                                        <div class="post-thumb">
                                            <a href="{{route('blogDetail',$blog->id)}}"><img
                                                    src="/front/images/icons/empty.png" style="height: 80px"
                                                    data-src="{{$blog->photo->path}}" alt=""></a></div>
                                        <h3><a href="{{route('blogDetail',$blog->id)}}">{{$blog->titlefa}}</a></h3>
                                        <div class="post-info">{{Verta::instance($blog->created_at)}}</div>
                                    </article>

                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    @include('front.fa.layout.footer')
@endsection

