<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{asset('assets/user/images/favicon/5.png')}}" type="image/x-icon">
    <title>On-demand last-mile delivery</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('assets/user/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{asset('assets/user/css/animate.min.css')}}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/vendors/feather-icon.css')}}">

    <!-- Plugin CSS file with desired skin css -->
    <link rel="stylesheet" href="{{asset('assets/user/css/vendors/ion.rangeSlider.min.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/vendors/slick/slick-theme.css')}}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/font-style.css')}}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/user/css/style.css')}}">
</head>

<body class="theme-color-3 dark">


    @include('site.includes.header')

    @yield('content')

    @include('site.includes.footer')

   

    <!-- latest jquery-->
    <script src="{{asset('assets/user/js/jquery-3.6.0.min.js')}}"></script>

    <!-- jquery ui-->
    <script src="{{asset('assets/user/js/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/user/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/user/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/user/js/bootstrap/popper.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{asset('assets/user/js/feather/feather.min.js')}}"></script>
    <script src="{{asset('assets/user/js/feather/feather-icon.js')}}"></script>
    <!-- Lazyload Js -->
    <script src="{{asset('assets/user/js/lazysizes.min.js')}}"></script>

    <!-- Slick js-->
    <script src="{{asset('assets/user/js/slick/slick.js')}}"></script>
    <script src="{{asset('assets/user/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/user/js/custom-slick-animated.js')}}"></script>
    <script src="{{asset('assets/user/js/slick/custom_slick.js')}}"></script>

    <!-- Range slider js -->
    <script src="{{asset('assets/user/js/ion.rangeSlider.min.js')}}"></script>

    <!-- Auto Height Js -->
    <script src="{{asset('assets/user/js/auto-height.js')}}"></script>

    <!-- Lazyload Js -->
    <script src="{{asset('assets/user/js/lazysizes.min.js')}}"></script>

    <!-- Quantity js -->
    <script src="{{asset('assets/user/js/quantity-2.js')}}"></script>

    <!-- Fly Cart Js -->
    <script src="{{asset('assets/user/js/fly-cart.js')}}"></script>

    <!-- Timer Js -->
    <script src="{{asset('assets/user/js/timer1.js')}}"></script>
    <script src="{{asset('assets/user/js/timer2.js')}}"></script>

    <!-- Copy clipboard Js -->
    <script src="{{asset('assets/user/js/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/user/js/copy-clipboard.js')}}"></script>

    <!-- WOW js -->
    <script src="{{asset('assets/user/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/user/js/custom-wow.js')}}"></script>

    <!-- script js -->
    <script src="{{asset('assets/user/js/script.js')}}"></script>

</body>

</html>