
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
                            <h2>{{$solutions[0]['name']}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- services Area Start-->
    <div class="services-area solutionsDetails">
        <div class="container">
            <!-- section tittle -->

            <div class="row">
                <div class="col-md-6">
                        <img src="{{asset('images/solutions/'.$solutions[0]['photo'])}}">
                </div>
                <div class="col-md-6">
                    <h2>{{$solutions[0]['name']}}</h2>
                    <p>{{$solutions[0]['details']}}</p>
                </div>
            </div>
            <!-- button -->

        </div>
    </div>
    <!-- services Area End-->







</main>


@endsection
