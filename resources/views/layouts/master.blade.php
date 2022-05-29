<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Nous sommes une agence de communication globale qui œuvre dans le
    secteur du numérique en s’axant sur plusieurs secteurs de la communication comme le
    design graphique, la photographie, le marketing digital et bien d’autres secteurs.">
    <meta name="keywords" content="design,graphic,branding,studio,web design,web,seo,kreative,kreative touch">
    <meta property="og:title" content="Kreative Touch" />
	<meta property="og:image" content="{{ asset("assets/favicons/apple-touch-icon.png") }}">
    <meta name="p:domain_verify" content="a6ef94874b5c80ae5cd2ebfdfa1c0f38"/>

    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("assets/favicons/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("assets/favicons/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/favicons/favicon-16x16.png") }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-grid.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    <title>Kreative Touch || Your Dose Of Creativity</title>
</head>

<body class="webpage">
    <div class="animsition">
        <header class="header header--secondary header--absolute __js_fixed-header header--height">
            <div class="header__container container container--size-large">
                <a class="header__logo logo">
                    <img src="{{ asset("assets/img/logo-black.png") }}"  alt="">
                </a>
                <div class="header__mobile mobile-canvas">
                    <nav class="mobile-canvas__nav navigation">
                        <ul class="navigation__list">
                            <li class="navigation__item navigation__item--current">
                                <a class="navigation__link" href="{{ route("home") }}">Accueil<span class="navigation__link-icon">
                                </a>
                            </li>
                            <li class="navigation__item">
                                <a class="navigation__link animsition-link" href="#">A Propos de nous<span
                                        class="navigation__link-icon">
                                </a>
                            </li>
                            <li class="navigation__item">
                                <a class="navigation__link animsition-link" href="#">Projets
                                </a>
                            </li>
                           
                            <li class="navigation__item">
                                <a class="navigation__link animsition-link" href="#">Contact<span
                                        class="navigation__link-icon">
                                        <svg width="12" height="13">
                                            <use xlink:href="#link-arrow"></use>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-canvas__phone" href="tel:+243970840127">+ 243 970 840 127</a>
                </div>
                <button class="header__menu-toggle menu-toggle" type="button">
                    <span class="menu-toggle__line"></span>
                    <span class="visually-hidden">Menu toggle</span>
                </button>
            </div>
        </header>
        <main>
            @yield('content')
        <footer class="footer __js_fixed-footer">
            <div class="footer__container container container--size-large">
                <div class="footer__grid">
                    <a class="footer__logo">
                        <svg width="59" height="242">
                            <use xlink:href="#vertical-logo"></use>
                        </svg>
                    </a>
                    <div class="footer__phone">
                        <a href="tel:+243970840127">+ 243 970 840 127</a>
                    </div>
                    <div class="footer__menu">
                        <div class="footer__title">Liens Utiles</div>
                        <ul class="footer__menu-list">
                            {{-- <li class="footer__menu-item footer__menu-item--current">
                                <a class="footer__menu-link">Home</a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="about-us.html">Pages</a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="blog-masonry.html">Blog</a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="contact.html">Contact</a>
                            </li>
                            <li class="footer__menu-item">
                                <a class="footer__menu-link" href="projects-masonry.html">Portfolio</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="footer__menu">
                        <div class="footer__title">Suivez-nous</div>
                        <ul class="footer__menu-list">
                            <li class="footer__menu-item">
                                <a href="https://www.instagram.com/kreative__touch/" target="_blank">Instagram</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="https://www.linkedin.com/company/kreative-touch-comms/" target="_blank">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="footer__feedback">
                        <div class="footer__title">Sign up to our newsletter</div>
                        <form class="footer__feedback-form" action="#" method="post">
                            <label class="footer__feedback-field field">
                                <input type="email" name="email">
                                <span class="field__hint">E-mail</span>
                            </label>
                            <button class="footer__feedback-send arrow-btn arrow-btn--size-large" type="button">
                                <svg width="75" height="75">
                                    <use xlink:href="#link-arrow"></use>
                                </svg>
                            </button>
                        </form>
                    </div> --}}
                    <div class="footer__bottom">
                        <div class="footer__copyright">© Kreative Touch 2022</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset("assets/js/libs/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/jquery.fancybox.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/animsition.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/aos.js") }}"></script>
    <script src="{{ asset("assets/js/libs/swiper-bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/jquery.easy_number_animate.js") }}"></script>
    <script src="{{ asset("assets/js/libs/jquery.marquee.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/packery.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/packery-mode.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/libs/jquery.pagepiling.js") }}"></script>
    <script src="{{ asset("assets/js/libs/simpleParallax.min.js") }}"></script>

    <script src="{{ asset("assets/js/main.js") }}"></script>
</body>

</html>