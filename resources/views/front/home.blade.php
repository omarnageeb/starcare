
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
                                    <p data-animation="fadeInLeft" data-delay=".4s">{{__('messages.Welcome to Star Care')}}</p>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s" >{{$addSlider -> description}}</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="{{Route('aboutUs')}}" class="btn hero-btn">{{__('messages.About Us')}}</a>
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


        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="{{asset('images/services/'.$services[0]->photo)}}" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><a href="#">{{$services[0] -> title}}</a></h4>
                                    <p>{{$services[0] -> details}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="{{asset('images/services/'.$services[1]->photo)}}" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><a href="#">{{$services[1] -> title}}</a></h4>
                                    <p>{{$services[1] -> details}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <!-- Back -->
                            <div class="single-profile-back-last">
                                <h2>{{$aboutUs[0] -> title}}</h2>
                                <p>{{$aboutUs[0] -> description}}</p>
                                <a href="{{route('aboutUs')}}">{{__('messages.View profile')}} »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7" data-aos="zoom-out-left">
                        <div class="trusted-img">
                            <img src="{{asset('images/aboutClients/'.$aboutClient[0]->photo)}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5" data-aos="zoom-out-right">
                        <div class="trusted-caption">
                           <h2>{{$aboutClient[0] -> title}}</h2>
                           <p>{{$aboutClient[0] -> details}}</p>
                            <a href="#ClientPart" class="btn trusted-btn">{{__('messages.Our clients')}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- We Trusted End-->



        <!-- services Area Start-->
        <div class="services-area ">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>{{__('messages.Our Solutions')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($solutions as $addSolutions)
                    <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in">
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
                <div class="row justify-content-center">
                    <div class="room-btn pt-50">
                        <a href="{{Route('solutions')}}" class="border-btn">{{__('messages.More Solutions')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- services Area End-->




        <!-- Testimonial Start -->
        <div class="testimonial-area fix" id="ClientPart">
            <div class="container">

               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            @foreach($clients as $addClients)
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{asset('images/clients/'.$addClients->photo)}}" class="ani-btn " alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>{{$addClients -> description}} </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <!-- Single Testimonial -->

                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <div class="recent-area news section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>{{__('messages.Our News')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">



                    @foreach($news as $addNews)
                    <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="{{asset('images/news/'.$addNews->photo)}}" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>{{$addNews -> name}}</span>
                                <h4><a href="{{Route('infoNews', $addNews -> id)}}">{{$addNews -> details}}</a></h4>
                                <p>{{$addNews -> date}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Recent Area End-->



            <div class="mainslider testimonial-area partnersArea">
               <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>{{__('messages.Our Partners')}}</h2>
                        </div>
                    </div>
                </div>

                   <div class="slickslider slider-active:hover">
                   @foreach($partners as $addPartners)
                       <div class="item "><img src="{{asset('images/partners/'.$addPartners->photo)}}" class="ani-btn " alt=""></div>
                   @endforeach

                   </div>
               </div>
           </div>






    </main>


@endsection
