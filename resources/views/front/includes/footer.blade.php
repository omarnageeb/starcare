

    <!-- Request Back Start -->
    <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="request-content">
                            <h3>{{__('messages.Have project in mind')}}</h3>
                            <p>{{__('messages.star care provides a full range of hardware IT products')}}
                              </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <!-- Contact form Start -->
                        <div class="form-wrapper">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12">
                                        <a href="contact.html"><button type="button" class="send-btn">{{__('messages.Contact Us')}}</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>     <!-- Contact form End -->
                </div>
            </div>
        </div>
        <!-- Request Back End -->



<footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                   <a href="{{Route('index')}}"><img src="{{asset('images/logo/'.$logo[0]->photo)}}" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>{{__('messages.star care is one of Egypt’s leading Cisco technology')}}</p>
                                </div>
                             </div>
                             <!-- social -->
                             <div class="footer-social">
                                 <a href="#"><i class="fab fa-facebook-square"></i></a>
                                 <a href="#"><i class="fab fa-twitter-square"></i></a>
                                 <a href="#"><i class="fab fa-linkedin"></i></a>
                                 <a href="#"><i class="fab fa-pinterest-square"></i></a>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('messages.links')}}</h4>
                                <ul>
                                    <li><a href="{{Route('index')}}">{{__('messages.Home')}}</a></li>
                                    <li><a href="{{Route('aboutUs')}}">{{__('messages.About')}}</a></li>
                                    <li><a href="{{Route('solutions')}}">{{__('messages.Solutions')}}</a></li>
                                    <li><a href="{{Route('news')}}">{{__('messages.news')}}</a></li>
                                    <li><a href="{{Route('contactUs')}}">{{__('messages.Contact')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('messages.Solutions')}}</h4>
                                <ul>
                                    <!--
                                    @php
                                    $products = App\Models\addSolutions::all();
                                    @endphp
                                    -->
                                    @foreach($solutions as $addSolutions)
                                        <li><a href="{{Route('infoSolutions'  , $addSolutions->id)}}">{{$addSolutions->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('messages.Contact')}}</h4>
                                <ul>

                                 <li><a href="#">{{($contactUs[0] -> phone)}}</a></li>
                                 <li><a href="#">{{($contactUs[0] -> email)}}</a></li>
                                 <li><a href="#">{{($contactUs[0] -> address)}}</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   {{__('messages.Copyright')}} &copy;<script>document.write(new Date().getFullYear());</script> {{__('messages.All rights reserved')}} </a>
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
