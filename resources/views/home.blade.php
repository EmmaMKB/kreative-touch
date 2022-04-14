@extends('layouts.master')

@section('content')
<section class="hero">
    <div class="hero__bg __js_parallax">
        <img src="{{ asset("assets/img/picture/home/hero.jpg") }}" width="1920" height="1080" alt="">
    </div>
    <div class="hero__container container container--size-large">
        <header class="hero__header">
            <div class="container container--size-large">
                <h1 class="hero__title">Votre dose <span>de Kréativité</span>
                </h1>
                <a class="hero__more arrow-link" href="about-us.html">
                    <span class="arrow-link__text">A propos de nous</span>
                    <span class="arrow-link__icon">
                        <svg width="75" height="75">
                            <use xlink:href="#link-arrow"></use>
                        </svg>
                    </span>
                </a>
            </div>
        </header>
        <div class="hero__content">
            <div class="hero__vertical vertical-logo">
                <div class="vertical-logo__layer vertical-logo__layer--yellow">
                    <svg width="59" height="242">
                        <use xlink:href="#vertical-logo"></use>
                    </svg>
                </div>
                <div class="vertical-logo__layer vertical-logo__layer--black">
                    <img src="{{ asset("assets/img/logo-white-vertical.png") }}"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="features__container container container--size-large">
        <div class="row">
            <div class="col-12 col-md-0 col-lg-4"></div>
            <div class="col-12 col-md-12 col-lg-8">
                <div class="features__description" data-aos="fade-up">Nous sommes une agence de communication globale qui œuvre dans le
                    secteur du numérique en s’axant sur plusieurs secteurs de la communication comme le
                    design graphique, la photographie, le marketing digital et bien d’autres secteurs.</div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 col-md-8 col-lg-5">
                <a class="features__card features__card--size-large feature-card" href="#"
                    data-aos="fade-up">
                    <span class="feature-card__image">
                        <img src="{{ asset("assets/img/picture/home/feature-1.jpg") }}" width="810" height="529" alt="questions">
                    </span>
                    <span class="feature-card__caption">We ask right
                        <br>questions
                    </span>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-7">
                <div class="features__text" data-aos="fade-up">In the design process, they create both
                    functional and beautiful things. The team possesses unique individuality and strong
                    qualifications and can easily translate something so abstract and visionary into a
                    digital experience. They always put the clients first no matter how complicated the
                    tasks are”.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-5 d-flex">
                        <a class="features__card features__card--size-small feature-card feature-card--mobile-same-size"
                            href="#" data-aos="fade-up">
                            <span class="feature-card__image">
                                <img src="{{ asset("assets/img/picture/home/feature-3.jpg") }}" width="410" height="490"
                                    alt="Concept">
                            </span>
                            <span class="feature-card__caption">We achieve the
                                <br>goal
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-7">
                        <a class="features__card features__card--size-middle feature-card feature-card--mobile-same-size"
                            href="#" data-aos="fade-up">
                            <span class="feature-card__image">
                                <img src="{{ asset("assets/img/picture/home/feature-2.jpg") }}" width="616" height="529"
                                    alt="Goal">
                            </span>
                            <span class="feature-card__caption">We develop
                                <br>a concept
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<section class="our-services">
    <div class="our-services__container container container--size-large">
        <header class="our-services__header our-services__header--large" data-aos="fade-up">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 col-xxl-3" data-aos="fade-up">
                    <h2 class="our-services__title our-services__title--upper">Nos Services</h2>
                </div>
                <div class="col-12 col-md-12 col-xl-5 col-xxl-6 order-md-1 order-xl-0" data-aos="fade-up">
                    <div class="our-services__short">Nous avons travaillé avec un large éventail de clients 
                        pour appliquer les principes fondamentaux du design, à savoir l'élégance, 
                        la simplicité et l'efficacité.</div>
                </div>
                <div class="col-12 col-md-auto col-xl-2 col-xxl-3 ml-auto text-md-right" data-aos="fade-up">
                    <a class="our-services__more our-services__more--negative-top arrow-link--white arrow-link"
                        href="#">
                        <span class="arrow-link__text">Tous nos services</span>
                        <span class="arrow-link__icon">
                            <svg width="75" height="75">
                                <use xlink:href="#link-arrow"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </header>
        <div class="our-services__accordion accordion">
            <div class="accordion__item" data-aos="fade-up">
                <button class="accordion__item-header" type="button">
                    <span class="row align-items-md-center">
                        <span class="accordion__item-title col-11 col-md-5">Design Graphique</span>
                        {{-- <span class="accordion__item-short col-11 col-md-6">Our intelligent digital strategy
                            and a pragmatic and thoughtful approach to solving business calls deliver a
                            successful framework for both you and your audience.</span> --}}
                    </span>
                </button>
                {{-- <div class="accordion__item-body">
                    <div class="row">
                        <div class="accordion__item-left col-12 col-md-6 col-lg-5">
                            <img src="{{ asset("assets/img/picture/home/accordion-large.jpg") }}" width="810" height="530"
                                alt="Concept">
                        </div>
                        <div class="accordion__item-right col-12 col-md-6 col-lg-7">
                            <img src="{{ asset("assets/img/picture/home/accordion-small.jpg") }}" width="348" height="287"
                                alt="Concept">
                            <div class="accordion__item-text">In the design process, they create both
                                functional and beautiful things. The team possesses unique individuality and
                                strong qualifications and can easily translate something so abstract and
                                visionary into a digital experience. They always put the clients first no
                                matter how complicated the tasks are.</div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="accordion__item" data-aos="fade-up">
                <button class="accordion__item-header" type="button">
                    <span class="row align-items-md-center">
                        <span class="accordion__item-title col-11 col-md-5">Branding</span>
                        {{-- <span class="accordion__item-short col-11 col-md-6">We make our customers ' products
                            valuable in the eyes of customers. To do this, we analyze and study people,
                            build long-term strategies for interacting with them, develop creative ideas and
                            create a bright design.</span> --}}
                    </span>
                </button>
                {{-- <div class="accordion__item-body">
                    <div class="row">
                        <div class="accordion__item-left col-12 col-md-6 col-lg-5">
                            <img src="{{ asset("assets/img/picture/home/accordion-large.jpg") }}" width="810" height="530"
                                alt="Concept">
                        </div>
                        <div class="accordion__item-right col-12 col-md-6 col-lg-7">
                            <img src="{{ asset("assets/img/picture/home/accordion-small.jpg") }}" width="348" height="287"
                                alt="Concept">
                            <div class="accordion__item-text">In the design process, they create both
                                functional and beautiful things. The team possesses unique individuality and
                                strong qualifications and can easily translate something so abstract and
                                visionary into a digital experience. They always put the clients first no
                                matter how complicated the tasks are.</div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="accordion__item" data-aos="fade-up">
                <button class="accordion__item-header" type="button">
                    <span class="row align-items-md-center">
                        <span class="accordion__item-title col-11 col-md-5">Web Design</span>
                        {{-- <span class="accordion__item-short col-11 col-md-6">Our intelligent digital strategy
                            and a pragmatic and thoughtful approach to solving business calls deliver a
                            successful framework for both you and your audience.</span> --}}
                    </span>
                </button>
                {{-- <div class="accordion__item-body">
                    <div class="row">
                        <div class="accordion__item-left col-12 col-md-6 col-lg-5">
                            <img src="{{ asset("assets/img/picture/home/accordion-large.jpg") }}" width="810" height="530"
                                alt="Concept">
                        </div>
                        <div class="accordion__item-right col-12 col-md-6 col-lg-7">
                            <img src="{{ asset("assets/img/picture/home/accordion-small.jpg") }}" width="348" height="287"
                                alt="Concept">
                            <div class="accordion__item-text">In the design process, they create both
                                functional and beautiful things. The team possesses unique individuality and
                                strong qualifications and can easily translate something so abstract and
                                visionary into a digital experience. They always put the clients first no
                                matter how complicated the tasks are.</div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="accordion__item" data-aos="fade-up">
                <button class="accordion__item-header" type="button">
                    <span class="row align-items-md-center">
                        <span class="accordion__item-title col-11 col-md-5">Print</span>
                        {{-- <span class="accordion__item-short col-11 col-md-6">Our intelligent digital strategy
                            and a pragmatic and thoughtful approach to solving business calls deliver a
                            successful framework for both you and your audience.</span> --}}
                    </span>
                </button>
                {{-- <div class="accordion__item-body">
                    <div class="row">
                        <div class="accordion__item-left col-12 col-md-6 col-lg-5">
                            <img src="{{ asset("assets/img/picture/home/accordion-large.jpg") }}" width="810" height="530"
                                alt="Concept">
                        </div>
                        <div class="accordion__item-right col-12 col-md-6 col-lg-7">
                            <img src="{{ asset("assets/img/picture/home/accordion-small.jpg") }}" width="348" height="287"
                                alt="Concept">
                            <div class="accordion__item-text">In the design process, they create both
                                functional and beautiful things. The team possesses unique individuality and
                                strong qualifications and can easily translate something so abstract and
                                visionary into a digital experience. They always put the clients first no
                                matter how complicated the tasks are.</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
{{-- <section class="works">
    <div class="works__container container container--size-large">
        <header class="works__header">
            <div class="row">
                <div class="col-8" data-aos="fade-up">
                    <h2 class="works__title">
                        <span>Look what</span>We do
                    </h2>
                </div>
                <div class="col-4 text-md-right" data-aos="fade-up">
                    <a class="works__more arrow-link--white arrow-link" href="projects-masonry.html">
                        <span class="arrow-link__text">View all</span>
                        <span class="arrow-link__icon">
                            <svg width="75" height="75">
                                <use xlink:href="#link-arrow"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </header>
        <div class="works__carousel carousel swiper-container __js_carousel" data-aos="fade-up">
            <div class="carousel__navigation">
                <button class="carousel__btn carousel__btn--prev" type="button">Prev</button>
                <button class="carousel__btn carousel__btn--next" type="button">Next</button>
            </div>
            <div class="swiper-wrapper">
                <a class="carousel__item carousel-card swiper-slide" href="single-project.html">
                    <img src="{{ asset("assets/img/picture/carousel/1.jpg") }}" width="662" height="510" alt="Desk Issue 0.1">
                    <span class="carousel-card__bottom">
                        <span class="carousel-card__title">Desk Issue 0.1</span>
                        <span class="carousel-card__icon">
                            <svg width="29" height="29">
                                <use xlink:href="#link-arrow"></use>
                            </svg>
                        </span>
                    </span>
                </a>
                <a class="carousel__item carousel-card swiper-slide" href="single-project.html">
                    <img src="{{ asset("assets/img/picture/carousel/2.jpg") }}" width="662" height="510" alt="Desk Issue 0.1">
                    <span class="carousel-card__bottom">
                        <span class="carousel-card__title">Desk Issue 0.1</span>
                        <span class="carousel-card__icon">
                            <svg width="29" height="29">
                                <use xlink:href="#link-arrow"></use>
                            </svg>
                        </span>
                    </span>
                </a>
                <a class="carousel__item carousel-card swiper-slide" href="single-project.html">
                    <img src="{{ asset("assets/img/picture/carousel/3.jpg") }}" width="662" height="510" alt="Desk Issue 0.1">
                    <span class="carousel-card__bottom">
                        <span class="carousel-card__title">Desk Issue 0.1</span>
                        <span class="carousel-card__icon">
                            <svg width="29" height="29">
                                <use xlink:href="#link-arrow"></use>
                            </svg>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section> --}}
<section class="contact-section">
    <div class="contact-section__container container container--size-large">
        <div class="row">
            <div class="contact-section__main col-12 col-lg">
                <h2 class="contact-section__title" data-aos="fade-up">Contact</h2>
                <address class="contact-section__address" data-aos="fade-up">34, Av. Ruwe, Q/ Lido.</address>
                <div class="contact-section__link" data-aos="fade-up">
                    <a href="tel:+243970840127">+ 243 970 840 127</a>
                </div>
                <div class="contact-section__link" data-aos="fade-up">
                    <a
                        href="mailto:sales@kreativetouch.agency"><span>sales@kreativetouch.agency</span></a>
                </div>
                <ul class="contact-section__social" data-aos="fade-up">
                    <li>
                        <a href="https://www.instagram.com/kreative__touch/" target="_blank">Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/kreative-touch-comms/" target="_blank">LinkedIn</a>
                    </li>
                </ul>
            </div>
            <div class="contact-section__aside col-12 col-lg" data-aos="fade-up">
                <div class="discuss-project discuss-project--no-padding col-12">
                    <div class="discuss-project__wrapper" data-aos="fade-up">
                        <div class="discuss-project__title" data-aos="fade-up">Vous avez un projet ?</div>
                        <form action="" method="">
                            <div class="row justify-content-between gx-0">
                                <div class="col-12" data-aos="fade-up">
                                    <label class="discuss-project__field field">
                                        <input type="text" name="name">
                                        <span class="field__hint">Name</span>
                                    </label>
                                </div>
                                <div class="col-12" data-aos="fade-up">
                                    <label class="discuss-project__field field">
                                        <input type="email" name="email">
                                        <span class="field__hint">Email</span>
                                    </label>
                                </div>
                                <div class="col-12" data-aos="fade-up">
                                    <label
                                        class="discuss-project__field discuss-project__field--textarea field">
                                        <textarea name="message" required></textarea>
                                        <span class="field__hint">Message</span>
                                    </label>
                                </div>
                                <div class="discuss-project__bottom col-12">
                                    <button class="discuss-project__send btn--theme-black btn" type="submit"
                                        data-aos="fade-up">
                                        <span class="btn__text">Submit</span>
                                        <span class="btn__icon">
                                            <svg width="19" height="19">
                                                <use xlink:href="#link-arrow"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection