<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreative Touch || Your Dose Of Creativity</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="active-dark-mode">
    <main class="page-wrapper">
        {{-- <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="header-left">
                            <p><a href="#">Get the most advanced template
                                    <i class="feather-chevron-right"></i>
                                </a></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="header-right">
                            <div class="address-content">
                                <p>
                                    <i class="feather-map-pin"></i>
                                    <span>Alabama, USA</span>
                                </p>
                                <p>
                                    <i class="feather-phone"></i>
                                    <span><a href="#">+06 58 49 99 56</a></span>
                                </p>
                            </div>
                            <div class="social-icon-wrapper">
                                <ul class="social-icon social-default icon-naked">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- Start Header Area  -->
        <header class="rn-header header-default header-not-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="assets/images/logo/logo.png" alt="Kreative Touch Logo">
                                <img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="Kreative Touch Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">
                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">A propos</a></li>
                                </ul>
                            </nav>
                            <!-- Start Header Btn  -->
                            <div class="header-btn"><a class="btn-default btn-small round" target="_blank" href="#">Parlons de Votre Projet</a></div>
                            <!-- End Header Btn  -->

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->


                            <div id="my_switcher" class="my_switcher">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                            <img class="sun-image" src="assets/images/icons/sun-01.svg" alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="assets/images/icons/vector.svg" alt="Vector Images">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->

        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="assets/images/logo/logo.png" alt="Corporate Logo">
                            <img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Theme Style  -->
        <div>
            <div class="rn-gradient-circle"></div>
            <div class="rn-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->
        <!-- End Seperator Area  -->
        @yield('content')

        <footer class="rn-footer footer-style-default no-border">
            <div class="newsletter-area rn-newsletter-default">
                <div class="container">
                    <div class="row row--0 newsletter-wrapper align-items-center border-top-bottom">
                        <div class="col-lg-4">
                            <div class="newsletter-section-title">
                                <h3 class="title">Stay up to Date</h3>
                                <p class="description">Don't miss the latest Kreative Touch news, update and trend.</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="rn-newsletter mt_md--20 mt_sm--20" action="#">
                                <div class="form-group"><input type="email" placeholder="Email Address"></div>
                                <div class="form-group"><button class="btn-default">Subscribe</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area copyright-style-one no-border">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="copyright-left">
                                <ul class="ft-menu link-hover">
                                    {{-- <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms And Condition</a></li>
                                    <li><a href="#">Contact Us</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="copyright-right text-center text-md-right">
                                <p class="copyright-text">© Kreative Touch 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rn-back-top">
        <i class="feather-arrow-up"></i>
    </div>
  
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/counterup.min.j') }}s"></script>
    <script src="{{ asset('assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.swicher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>