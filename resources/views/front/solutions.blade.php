
@extends('front.layout.app')

@section('title','solution')


@section('content')







<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/front/img/hero/services_hero.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{__('messages.Our Solutions')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- services Area Start-->
    <div class="services-area ">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
            @foreach($solutions as $addSolutions)
                <div class="col-xl-4 col-lg-4 col-md-6">
                   <a href="{{Route('infoSolutions'  , $addSolutions -> id)}}"> <div class="single-services text-center mb-30">
                        <div class="services-icon">
                              <img src="{{asset('images/solutions/'.$addSolutions->icon)}}">
                        </div>
                        <div class="services-caption">

                            <h4>{{$addSolutions -> name}}</h4>
                            <p>{{$addSolutions -> details}}</p>
                        </div>
                    </div></a>
                </div>
             @endforeach
            </div>
            <!-- button -->

        </div>
    </div>
    <!-- services Area End-->







</main>


@endsection
