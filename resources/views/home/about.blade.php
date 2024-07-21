@extends('home.base')
@section('content')
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="{{asset('home/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>{{$pageName}}</span>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a><span>|</span></li>
                            <li>{{$pageName}}</li>
                        </ul>
                        <h1>{{$pageName}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->

    <!-- About Area Start -->
    <div class="about__three section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 lg-mb-30">
                    <div class="about__three-title">
                        <span class="subtitle-three">{{$siteName}}</span>
                        <h2>A BALANCED, PROVEN STRATEGY</h2>
                        <p>
                            Our investment approach at {{$siteName}} is steady and designed for the long-term. Our focus is on strong
                            companies – including household names like Unilever and GlaxoSmithKline – and powerful
                            newcomers – like Amazon and Tesla.
                            <br>
                            We also tap into the growth prospects of emerging markets, including China and Latin America.
                            We don’t restrict our investments to publicly listed equities.<br/>
                            At {{$siteName}} we also consider well managed, high-performing private equity funds.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="about__three-right">
                        <div class="about__three-right-image dark__image">
                            <div class="about__three-right-image-one">
                                <img src="{{asset('home/images/woman2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="about__three-right-content">
                            <div class="about__three-right-content-counter">
                                <h1><span class="counter">24</span>k</h1>
                            </div>
                            <p>clients satisifed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-xl-7 col-lg-6">
                    <div class="about__three-right">
                        <div class="about__three-right-image dark__image">
                            <div class="about__three-right-image-one">
                                <img src="{{asset('home/images/olderwoman.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 lg-mb-30">
                    <div class="about__three-title">
                        <h2>OUR AIMS AT
                            <span class="text-uppercase">{{$siteName}}</span> INVESTMENT TRUST</h2>
                        <p>
                            Launched in 2019 we are the world’s oldest collective investment scheme – and have since grown to become one of the largest.
                            <br>
                            Our aim is to generate long-term growth and income by investing primarily in an international portfolio of listed equities.<br/>
                            We are highly diversified and cautiously managed. Investing with us gives you exposure to over 400 individual companies worldwide.
                        </p>
                        <a class="btn-seven" href="{{url('about')}}">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

@endsection
