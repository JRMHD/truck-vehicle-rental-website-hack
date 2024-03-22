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
                <img src="images/hack.jpg" alt="Logo" class="navbar-logo mr-2" style="max-height: 40px;">
                <span><span class="text-royal-blue"></span></span>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('welcome') }}" class="nav__link ">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/posts') }}" class="nav__link">Our Inventory</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/about') }}" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ url('/contact') }}" class="nav__link">Contact Us</a>
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
                <img src="images\hino268.png" alt="" class="home__img">

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
                Choose Your Vehicle <br> From Our Popular Models
            </h2>

            <div class="popular__container container swiper">
                <div class="swiper-wrapper">
                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Box Trucks</h1>
                        <h3 class="popular__subtitle">Heavy-duty Haulers</h3>

                        <img src="images\boxtt1.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> High Payload Capacity
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> Reliable Performance
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Diesel Powered
                            </div>
                        </div>

                        <a href="{{ url('/boxtrucks') }}" class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </a>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">SUVs</h1>
                        <h3 class="popular__subtitle">Adventure Seekers</h3>

                        <img src="images\suvfeatured.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> Off-road Capabilities
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> Spacious Interior
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Gasoline Powered
                            </div>
                        </div>

                        <a href="{{ url('/suvs') }}" class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </a>
                    </article>

                    <article class="popular__card swiper-slide">
                        <div class="shape shape__smaller"></div>

                        <h1 class="popular__title">Sedans</h1>
                        <h3 class="popular__subtitle">Smooth and Stylish</h3>

                        <img src="images\sedansfeatured.png" alt="" class="popular__img">

                        <div class="popular__data">
                            <div class="popular__data-group">
                                <i class="ri-dashboard-3-line"></i> Comfortable Ride
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-funds-box-line"></i> Fuel Efficient
                            </div>
                            <div class="popular__data-group">
                                <i class="ri-charging-pile-2-line"></i> Various Engine Options
                            </div>
                        </div>

                        <a href="{{ url('/sedans') }}" class="button popular__button">
                            <i class="ri-shopping-bag-2-line"></i>
                        </a>
                    </article>

                    <!-- Additional articles for Sedans can be added similarly -->

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>



        <!--==================== FEATURES ====================-->
        <section class="features section">
            <h2 class="section__title">
                Box Trucks Features
            </h2>

            <div class="features__container container grid">
                <div class="features__group">
                    <img src="images\boxtt1.png" alt="" class="features__img">

                    <div class="features__card features__card-1">
                        <h3 class="features__card-title">Heavy-duty</h3>
                        <p class="features__card-description">Designed for <br> Commercial Use</p>
                    </div>

                    <div class="features__card features__card-2">
                        <h3 class="features__card-title">High Payload</h3>
                        <p class="features__card-description">Capacity <br> 10,000 kg</p>
                    </div>

                    <div class="features__card features__card-3">
                        <h3 class="features__card-title">Durability</h3>
                        <p class="features__card-description">Long-lasting <br> Performance</p>
                    </div>
                </div>
            </div>

            <img src="assets/img/map.svg" alt="" class="features__map">
        </section>


        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class="section__title">
                Featured Affordable Sedans and SUVs
            </h2>

            <div class="featured__container container">
                <ul class="featured__filters">
                    <li>
                        <button class="featured__item active-featured" data-filter="all">
                            <span>All</span>
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".sedans">
                            Affordable Sedans
                        </button>
                    </li>
                    <li>
                        <button class="featured__item" data-filter=".suvs">
                            Cheap SUVs
                        </button>
                    </li>
                </ul>

                <div class="featured__content grid">
                    <article class="featured__card mix sedans">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Affordable Sedans</h1>

                        <h3 class="featured__subtitle">Toyota Corolla</h3>

                        <img src="images\corola ft.png" alt="" class="featured__img">

                        <a href="{{ url('/sedans') }}" class="button featured__button">
                            <span>More Info</span>
                        </a>
                    </article>

                    <article class="featured__card mix sedans">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Affordable Sedans</h1>

                        <h3 class="featured__subtitle">Honda Civic</h3>

                        <img src="images\civic ft.png" alt="" class="featured__img">

                        <a href="{{ url('/sedans') }}" class="button featured__button">
                            <span>More Info</span>
                        </a>
                    </article>

                    <article class="featured__card mix suvs">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Cheap SUVs</h1>

                        <h3 class="featured__subtitle">Toyota RAV4</h3>

                        <img src="images\rav4ft.png" alt="" class="featured__img">

                        <a href="{{ url('/suvs') }}" class="button featured__button">
                            <span>More Info</span>
                        </a>
                    </article>

                    <article class="featured__card mix suvs">
                        <div class="shape shape__smaller"></div>

                        <h1 class="featured__title">Cheap SUVs</h1>

                        <h3 class="featured__subtitle">Nissan Rogue</h3>

                        <img src="images\nissanrogueft.png" alt="" class="featured__img">

                        <a href="{{ url('/suvs') }}" class="button featured__button">
                            <span>More Info</span>
                        </a>
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

                    <a href="tel:+18007749450" class="button">
                        Call Now: +1 800 774 9450
                    </a>
                </div>

                <img src="images\boxtt1.png" alt="" class="offer__img">
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




    <footer class="footer section">
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>

        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="/" class="footer__logo">
                    <img src="images/hack.jpg" alt="Hack Solutions USA" class="footer__logo-img"
                        style="max-width: 100px;">
                </a>
                <p class="footer__description">
                    Your go-to partner for vehicle rentals.

                </p>
                <p class="footer__description">
                    Explore our fleet for your personal and business needs.
                </p>
            </div>


            <div class="footer__content">
                <h3 class="footer__title">
                    About Us
                </h3>

                <ul class="footer__links">
                    <li>
                        <a href="{{ url('/about') }}" class="footer__link">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/home') }}" class="footer__link">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Privacy & Cookies Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Support
                </h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">FAQ</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link" data-toggle="modal"
                            data-target="#paymentModal">Payment Options</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="footer__link">Contact Us</a>
                    </li>
                </ul>

                <!-- Payment Options Modal -->
                <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog"
                    aria-labelledby="paymentModalLabel" aria-hidden="true">
                    <!-- Modal content here -->
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Contact
                </h3>

                <div class="block-23">
                    <ul>
                        <li>
                            <a href="#" style="color: white;">
                                <span class="icon icon-map-marker"></span>
                                <span class="text">901 Dulaney Valley Rd Ste 110, Towson, MD 21204</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+18007749450" style="color: white;">
                                <span class="icon icon-phone"></span>
                                <span class="text">+1 800 774 9450</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:cgreen@hacksolutionsusa.com" style="color: white;">
                                <span class="icon icon-envelope"></span>
                                <span class="text">cgreen@hacksolutionsusa.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <span class="footer__copy">
            &copy; Hack Solutions USA. All rights reserved. Developed by <a href="https://jrmhd.tech" target="_blank"
                rel="noopener noreferrer">JMRHD</a>
        </span>

    </footer>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65f9629ca0c6737bd1226b1e/1hpb2id61/jrmhd';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

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
