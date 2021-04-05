@extends('front.en.layout.master')
@section('content')
    <div class="page-wrapper">
        @include('front.en.layout.header')
        <section class="page-title" style="background-image:url(/front/images/background/4.jpg)">
            <div class="auto-container">
                <h1>Error 404</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>error 404</li>
                </ul>
            </div>
        </section>
        <section class="error-section" style="padding: 80px">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h1>4<span>0</span>4</h1>
                </div>
                <div class="text">Not Found</div>
                <h3 style="direction: ltr">Please change your search.</h3>
                <a href="{{route('en.contact')}}" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                <a href="{{route('en.home')}}" class="theme-btn btn-style-one"><span class="btn-title">Home</span></a>
            </div>
        </section>
        @include('front.en.layout.footer')
    </div>
@endsection
