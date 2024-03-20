<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Feature Vehicles Hack</title>
</head>

<body>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
                <img src="images/hack.jpg" alt="Logo" class="navbar-logo mr-2" style="max-height: 60px;">
                <span><span class="text-royal-blue"></span></span>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('welcome') }}" class="nav__link ">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">Our Inventory</a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Contact Us</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="shape shape__big"></div>
            <div class="shape shape__small"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Choose The Best Box Truck
                    </h1>

                    <h2 class="home__subtitle">
                        Ford Transit
                    </h2>

                    <h3 class="home__elec">
                        <i class="ri-truck-fill"></i> Box Truck
                    </h3>
                </div>
                <img src="images\boxtt1.png" alt="" class="home__img">

                <div class="home__car">
                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-truck-fill"></i>
                        </div>
                        <h2 class="home__car-number">2.5 Tons</h2>
                        <h3 class="home__car-name">CAPACITY</h3>
                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-dashboard-3-line"></i>
                        </div>
                        <h2 class="home__car-number">450</h2>
                        <h3 class="home__car-name">MILEAGE</h3>
                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-truck-fill"></i>
                        </div>
                        <h2 class="home__car-number">Large Cargo</h2>
                        <h3 class="home__car-name">SPACE</h3>
                    </div>
                </div>

                <a href="{{ url('boxtrucks') }}" class="home__button">START</a>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__group">
                    <img src="assets/img/about.png" alt="" class="about__img">

                    <div class="about__card">
                        <h3 class="about__card-title">5,000+</h3>
                        <p class="about__card-description">
                            Vehicles Delivered Nationwide
                        </p>
                    </div>
                </div>

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Vehicles With <br> Cutting-Edge Features
                    </h2>

                    <p class="about__description">
                        Experience the next generation of transportation with our fleet of vehicles.
                        They are equipped with advanced technology and designed to meet the demands of
                        modern logistics. Explore our range of vehicles to find the perfect solution
                        for your business needs.
                    </p>

                    <a href="#" class="button">Learn More</a>
                </div>
            </div>
        </section>


        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Choose Your Electric Car <br> Of The Porsche Brand
            </h2>

            <div class="popular__container container swiper">
                <div class="swiper-wrapper">
                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Porsche</h1>
                        <h3 class="popular__subtitle">Turbo S</h3>

                        <img src="assets/img/popular1.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 Sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 356 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Electric
                            </div>
                        </div>

                        <h3 class="popular__price">$175,900</h3>

                        <button class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Porsche</h1>
                        <h3 class="popular__subtitle">Taycan</h3>

                        <img src="assets/img/popular2.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 Sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 356 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Electric
                            </div>
                        </div>

                        <h3 class="popular__price">$114,900</h3>

                        <button class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Porsche</h1>
                        <h3 class="popular__subtitle">Turbo S Cross</h3>

                        <img src="assets/img/popular3.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 Sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 356 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Electric
                            </div>
                        </div>

                        <h3 class="popular__price">$150,900</h3>

                        <button class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Porsche</h1>
                        <h3 class="popular__subtitle">Boxster 718</h3>

                        <img src="assets/img/popular4.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 Sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 356 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Electric
                            </div>
                        </div>

                        <h3 class="popular__price">$125,900</h3>

                        <button class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Porsche</h1>
                        <h3 class="popular__subtitle">Cayman</h3>

                        <img src="assets/img/popular5.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> 3.7 Sec
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> 356 Km/h
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Electric
                            </div>
                        </div>

                        <h3 class="popular__price">$128,900</h3>

                        <button class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--==================== FEATURES ====================-->
        <section class="features section">
            <h2 class="section__title">
                More Features
            </h2>

            <div class="features__container container grid">
                <div class="features__group">
                    <img src="assets/img/features.png" alt="" class="features__img">

                    <div class="features__card features__card-1">
                        <h3 class="features__card-title">800v</h3>
                        <p class="features__card-description">Turbo <br> Chargin</p>
                        </p>
                    </div>

                    <div class="features__card features__card-2">
                        <h3 class="features__card-title">350</h3>
                        <p class="features__card-description">Km <br> Range</p>
                    </div>

                    <div class="features__card features__card-3">
                        <h3 class="features__card-title">480</h3>
                        <p class="features__card-description">Km <br> Travel</p>
                    </div>
                </div>
            </div>

            <img src="assets/img/map.svg" alt="" class="features__map">
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class="section__title">
                Featured Luxury Cars
            </h2>

            <div class="featured__container container">
                <ul class="featured__filters">
                    <li>
                        <button class="featured__item active-featured" data-filter="all">
                            <span>All</span>
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".tesla">
                            <img src="assets/img/logo3.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".audi">
                            <img src="assets/img/logo2.png" alt="">
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".porsche">
                            <img src="assets/img/logo1.png" alt="">
                        </button>
                    </li>
                </ul>

                <div class="featured__content grid">
                    <article class="featured__card mix tesla">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Tesla</h1>

                        <h3 class="featured__subtitle">Model X</h3>

                        <img src="assets/img/featured1.png" alt="" class="featured__img">

                        <h3 class="featured__price">$98,900</h3>

                        <button class="button featured__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="featured__card mix tesla">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Tesla</h1>

                        <h3 class="featured__subtitle">Model 3</h3>

                        <img src="assets/img/featured2.png" alt="" class="featured__img">

                        <h3 class="featured__price">$45,900</h3>

                        <button class="button featured__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="featured__card mix audi">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Audi</h1>

                        <h3 class="featured__subtitle">E-tron</h3>

                        <img src="assets/img/featured3.png" alt="" class="featured__img">

                        <h3 class="featured__price">$175,900</h3>

                        <button class="button featured__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="featured__card mix porsche">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Porsche</h1>

                        <h3 class="featured__subtitle">Boxster 987</h3>

                        <img src="assets/img/featured4.png" alt="" class="featured__img">

                        <h3 class="featured__price">$126,900</h3>

                        <button class="button featured__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>

                    <article class="featured__card mix porsche">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Porsche</h1>

                        <h3 class="featured__subtitle">Panamera</h3>

                        <img src="assets/img/featured5.png" alt="" class="featured__img">

                        <h3 class="featured__price">$126,900</h3>

                        <button class="button featured__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </button>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== OFFER ====================-->
        <section class="offer section">
            <div class="offer__container container grid">
                <img src="assets/img/offer-bg.png" alt="" class="offer__bg">

                <div class="offer__data">
                    <h2 class="section__title offer__title">
                        Do You Want To Receive <br> Special Offers?
                    </h2>

                    <p class="offer__description">
                        Be the first to receive all the information about our
                        products and new cars by email by subscribing to our
                        mailing list.
                    </p>

                    <a href="#" class="button">
                        Subscribe Now
                    </a>
                </div>

                <img src="assets/img/offer.png" alt="" class="offer__img">
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__content">
                    <img src="assets/img/logo1.png" alt="" class="logos__img">
                </div>

                <div class="logos__content">
                    <img src="assets/img/logo2.png" alt="" class="logos__img">
                </div>

                <div class="logos__content">
                    <img src="assets/img/logo3.png" alt="" class="logos__img">
                </div>

                <div class="logos__content">
                    <img src="assets/img/logo4.png" alt="" class="logos__img">
                </div>

                <div class="logos__content">
                    <img src="assets/img/logo5.png" alt="" class="logos__img">
                </div>

                <div class="logos__content">
                    <img src="assets/img/logo6.png" alt="" class="logos__img">
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>

        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-steering-line"></i> Elecar
                </a>
                <p class="footer__description">
                    We offer the best electric cars of <br>
                    the most recognized brands in <br>
                    the world.
                </p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Company
                </h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">About</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Cars</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">History</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Shop</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Information
                </h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Request a quote</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Find a dealer</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Contact us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Services</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Follow us
                </h3>

                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-line"></i>
                    </a>
                </ul>
            </div>
        </div>

        <span class="footer__copy">
            &#169; Bedimcode. All rigths reserved
        </span>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP JS ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
