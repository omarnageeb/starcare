
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
                            <h2>{{__('messages.Contact Us')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider Area End-->

         <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">



                <div class="row">

                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.89549093248!2d31.44337469193706!3d30.032468600630963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583c1380cba7ef%3A0xd541260e9e06978d!2z2YXYr9mK2YbYqSDZhti12LHYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1659196925724!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </form>
                    </div>




                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>{{($contactUs[0] -> address)}}</h3>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>{{($contactUs[0] -> phone)}}</h3>

                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>{{($contactUs[0] -> email)}}</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->







</main>


@endsection
