<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title> @yield('title','CarRent | rent a car ')</title>

    <!--=== Bootstrap CSS ===-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="{{ asset('css/plugins/vegas.min.css')}}" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('css/plugins/slicknav.min.css')}}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('css/plugins/owl.carousel.min.css')}}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('css/plugins/gijgo.css')}}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('css/reset.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>



    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> maroc, meknes
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +212 6 11 11 11 11
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> lun-ven 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->


                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="{{ url('/home') }}" class="logo">
                            <img src="{{asset('img/logo.svg')}}" alt="logo">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="{{ url('/home') }}">Accueil</a>

                                </li>
                                <li><a href="#">About</a></li>

                                <li><a href="#">services</a>

                                </li>

                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->


    @yield('content')




    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            {{-- <h2>About Us</h2> --}}
                            <div class="widget-body">
                                <a href="{{ url('/home') }}" class="logo">
                                    <img src="{{asset('img/logo.svg')}}" alt="logo">

                                </a>
                                <p>
                                    Trouvez et réservez une location de voiture dans plus de 60 000 emplacements dans le
                                    monde.</p>

                                <div class="newsletter-area">
                                    <form action="">
                                        <input type="email" placeholder="Abonner Notre Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->


                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>contact</h2>
                            <div class="widget-body">


                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> maroc, meknes</li>
                                    <li><i class="fa fa-mobile"></i> +212 6 11 11 11 11</li>
                                    <li><i class="fa fa-envelope"></i> ESTM@edu.umi.ac.ma</li>
                                </ul>
                                <a href="https://www.google.com/maps/place/Higher+School+of+Technology/@33.8573711,-5.5799945,15z/data=!4m5!3m4!1s0x0:0x227685e2846b5a39!8m2!3d33.8573711!4d-5.5799945"
                                    class="map-show" target="_blank">Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <i class="" aria-hidden="true"></i> <a href="" target="_blank"></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src={{ asset("js/app.js") }}></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src={{ asset("js/jquery-migrate.min.js") }}></script>
    <!--=== Popper Min Js ===-->
    <!--=== Bootstrap Min Js ===-->
    <!--=== Gijgo Min Js ===-->
    <script src={{ asset("js/main.js") }}></script>
    <script src={{ asset("js/plugins/gijgo.js") }}></script>
    <!--=== Vegas Min Js ===-->
    <script src={{ asset("js/plugins/vegas.min.js") }}></script>
    <!--=== Isotope Min Js ===-->
    <script src={{ asset("js/plugins/isotope.min.js") }}></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src={{ asset("js/plugins/owl.carousel.min.js") }}></script>
    <!--=== Waypoint Min Js ===-->
    <script src={{ asset("js/plugins/waypoints.min.js") }}></script>
    <!--=== CounTotop Min Js ===-->
    <script src={{ asset("js/plugins/counterup.min.js") }}></script>
    <!--=== YtPlayer Min Js ===-->
    <script src={{ asset("js/plugins/mb.YTPlayer.js") }}></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src={{ asset("js/plugins/magnific-popup.min.js") }}></script>
    <!--=== Slicknav Min Js ===-->
    <script src={{ asset("js/plugins/slicknav.min.js") }}></script>


    <!--=== Mian Js ===-->


</body>

</html>
