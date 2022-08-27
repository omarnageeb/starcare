
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>{{($contactUs[0] -> address)}}</li>
                                        <li><i class="fas fa-envelope"></i>{{($contactUs[0] -> email)}}</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                     <ul class="lang">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="{{Route('index')}}"><img src="{{asset('images/logo/'.$logo[0]->photo)}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->


                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{Route('index')}}">{{__('messages.Home')}}</a></li>
                                            <li><a href="{{Route('aboutUs')}}">{{__('messages.About')}}</a></li>
                                            <li><a href="{{Route('solutions')}}">{{__('messages.Solutions')}}</a>
                                                <ul class="submenu">
                                                <!--
                                                @php
                                                $products = App\Models\addSolutions::all();
                                                @endphp
                                                -->
                                                @foreach($solutions as $addSolutions)
                                                    <li><a href="{{Route('infoSolutions'  , $addSolutions->id)}}">{{$addSolutions->name}}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{Route('news')}}">{{__('messages.news')}}</a></li>
                                            <li><a href="{{Route('contactUs')}}">{{__('messages.Contact')}}</a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="{{route('contactUs')}}" class="btn header-btn">+02 {{($contactUs[0] -> phone)}}</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

