<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>star care </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/slick-theme.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">


            @if(app()->getLocale() == 'en')
               <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
                @else
                <link rel="stylesheet" href="{{asset('assets/front/css/rtlStyle.css')}}">
            @endif
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
   </head>

   <body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('images/logo/'.$logo[0]->photo)}}" alt="">
                </div>
            </div>
        </div>
    </div>
   <!-- Preloader Start -->


    @include('front.includes.header')


    @yield('content')


    @include('front.includes.footer')
	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->



        <script src="{{asset('assets/front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('assets/front/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.slicknav.min.js')}}"></script>
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/front/js/gijgo.min.js')}}"></script>
        <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/front/js/animated.headline.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/front/js/contact.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.form.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/front/js/mail-script.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/front/js/plugins.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
          AOS.init();
        </script>

    </body>
</html>
