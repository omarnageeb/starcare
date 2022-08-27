
@extends('front.layout.app')

@section('title','start care')


@section('content')




    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
            @foreach($slider as $addSlider)
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('images/slider/'.$addSlider->photo)}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Welcome to Star Care</p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s" >{{$addSlider -> description_en}}</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="about.html" class="btn hero-btn">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- slider Area End-->






    </main>


@endsection
