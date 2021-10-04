<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT. DKI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xsIcon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/iconmoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/isotope.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

    <link href="//db.onlinewebfonts.com/c/5ab304ade0d4f62d027d12464ca69443?family=Apple+Color+Emoji" rel="stylesheet" type="text/css"/>

    <!-- use only color version -->
    <!-- <link rel='stylesheet' type='text/css' href='assets/css/colors/color-1.css' > -->
    <style>
        .whats-app {
            margin-right: 25px;
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 40px;
            left: unset;
            right: 0;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 20px;
        }

        .no_dropdown::before {
            content: none !important;
        }

    </style>
</head>

<body>
    <a class="whats-app" href="https://api.whatsapp.com/send/?phone=%2B6281260774365&text&app_absent=0" target="_blank">
    <!-- <a class="whats-app" href="https://api.whatsapp.com/send/?phone=%2B6287877515574&text&app_absent=0" target="_blank"> -->
        <i class="fa fa-whatsapp fa-lg my-float"></i>
    </a>
    <div id="preloader">
        <div class="preloader-wrapper">
            <div class="la-ball-clip-rotate-pulse la-2x">
                <div></div>
                <div></div>
            </div>
        </div>
        <a href="" class="cancel-preloader">Cancel Preloader</a>
    </div>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-mixtub.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/navigation.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>