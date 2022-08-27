
@extends('front.layout.app')

@section('title','solution')


@section('content')







<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/front/img/hero/contact_hero.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{__('messages.About')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider Area End-->

        <!-- We Trusted Start-->
        <div class="we-trusted-area aboutUsPage ">
            <div class="container">
                <div class="row d-flex align-items-end">
                    @foreach($aboutUs as $addAboutUs)
                    <div class="col-xl-4 col-lg-4">
                        <div class="trusted-img">
                            <img src="{{asset('images/aboutUs/'.$addAboutUs->photo)}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-5">
                        <div class="aboutContent">
                            <h2>{{$addAboutUs -> title}}</h2>
                           <p>{{$addAboutUs -> description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- We Trusted End-->







</main>


@endsection
