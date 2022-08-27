
@extends('front.layout.app')

@section('title','solution')


@section('content')







<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/front/img/hero/Industries_hero.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{__('messages.Our News')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">


                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    @foreach($news as $addNews)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('images/news/'.$addNews->photo)}}" alt="">
                                <a href="{{Route('infoNews', [app()->getLocale(), $addNews -> id])}}" class="blog_item_date">
                                    <h3>{{$addNews -> date}}</h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{Route('infoNews', $addNews -> id)}}">
                                    <h2>{{$addNews -> name}}</h2>
                                </a>
                                <p>{{$addNews -> details}}</p>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>




                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                    <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">{{__('messages.Recent Post')}}</h3>
                            @foreach($news as $addNews)
                            <div class="media post_item">
                                <img src="{{asset('images/news/'.$addNews->photo)}}" alt="post">
                                <div class="media-body">
                                    <a href="{{Route('infoNews', $addNews -> id)}}">
                                        <h3>{{$addNews -> name}}</h3>
                                    </a>
                                    <p>{{$addNews -> date}}</p>
                                </div>
                            </div>
                            @endforeach

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>







</main>


@endsection
