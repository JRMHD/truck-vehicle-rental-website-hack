<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

    <title>Hack Solutions Usa Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
        style="margin-top: -25px;">
        <div class="container">
            <a class="navbar-brand text-center" href="{{ route('welcome') }}">
                <img src="images/hack.jpg" alt="" class="navbar-logo" style="max-height: 75px;">
                Hack<span style="color: #4169E1;">Solutions</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/posts') }}" class="nav-link">Our Inventory</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- END nav -->

    <div class="hero-wrap" style="position: relative;">
        <video playsinline autoplay muted loop poster="/images/bg_1.jpg"
            style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
            <source src="/images/carvid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="headline">
                            <span>Discover</span>
                            <span>Effortless</span>
                            <span>Vehicle</span>
                            <span>Rentals</span>
                        </h1>

                        <style>
                            .headline {
                                font-size: 120px;
                                font-weight: 600;
                                /* Use Teko SemiBold 600 */
                                font-family: 'Teko', sans-serif;
                                text-transform: uppercase;
                                color: #ffffff;
                                /* White text color */
                            }

                            .headline span {
                                display: block;
                            }

                            @media (max-width: 768px) {
                                .headline {
                                    font-size: 60px;
                                }
                            }
                        </style>




                        {{-- <h1 class="mb-4 text-effect">Discover <span>Effortless Vehicle Rentals</span></h1> --}}


                        <p style="font-size: 18px;">Experience the convenience of renting a Vehicle with us. We offer
                            top-notch services to make your journey smooth and worry-free.</p>
                        {{-- <a href="https://youtu.be/xh7_uzq7UQE?si=vo97g2sWOmcCMpAf"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Watch Our Rental Process</span>
                            </div>
                        </a>
                        <style>
                            .btn {
                                display: inline-block;
                                margin-right: 16px;
                                text-align: center;
                                text-decoration: none;
                                font-size: 16px;
                                font-weight: 600;
                                padding: 12px 24px;
                                border-radius: 6px;
                                transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                            }

                            .btn-dashboard {
                                background-color: #4169e1;
                                color: #fff;
                            }

                            .btn-dashboard:hover {
                                background-color: #2b77b2;
                                color: #fff;
                            }
                        </style> --}}

                        {{-- <div style="display: flex; justify-content: center;">

                            <a href="{{ route('home') }}" class="btn btn-dashboard">
                                Dashboard
                            </a>

                        </div> --}}

                    </div>
                </div>





                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-5 d-flex">
                    <form action="{{ route('plan.journey') }}" method="POST" class="request-form ftco-animate">
                        @csrf
                        <h2 class="mb-4 text-center">Plan Your Journey</h2>

                        <div class="form-group">
                            <label for="starting_point" class="label">Starting Point?</label>
                            <input type="text" class="form-control" name="starting_point" id="starting_point"
                                placeholder="Your Location">
                        </div>

                        <div class="form-group">
                            <label for="destination" class="label">Your Destination?</label>
                            <input type="text" class="form-control" name="destination" id="destination"
                                placeholder="Your Destination">
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label for="departure_date" class="label">Departure Date</label>
                                <input type="date" class="form-control" name="departure_date" id="departure_date"
                                    placeholder="Date">

                            </div>

                            <div class="form-group">
                                <label for="return_date" class="label">Return Date</label>
                                <input type="date" class="form-control" name="return_date" id="return_date"
                                    placeholder="Date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="preferred_time" class="label">Preferred Time</label>
                            <input type="text" class="form-control" name="preferred_time" id="preferred_time"
                                placeholder="Time">
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfL-VEpAAAAACCgE1lT9L9ESG3uc8OOGh9doE3m"></div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block py-3">Find a Vehicle</button>
                    </form>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>



            </div>
        </div>
    </div>

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />


    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>

    <script>
        $(document).ready(function() {
                    $('.date').datetimepicker({
                        format: 'MM/DD/YYYY',
                        locale: 'en'
                    });
    </script>


    <div class="container my-5">
        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <img src="\images\BoxTruck2.png" class="card-img-top" alt="Saloon">

                    <div class="card-body text-center">
                        <h3 class="card-title h5">BOX TRUCKS</h3>
                        {{-- <p class="text-muted small">chassis cab truck with an enclosed cuboid-shaped cargo area</p> --}}

                        <a href="{{ url('/boxtrucks') }}" class="btn btn-outline-primary rounded-pill mt-3">
                            Browse Inventory
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <img src="\images\Toyota-Sequoia-Capstone-23-1.jpg" class="card-img-top" alt="SUV">

                    <div class="card-body text-center">
                        <h3 class="card-title h5">SUVs</h3>
                        {{-- <p class="text-muted small">Spacious interior with room...</p> --}}

                        <a href="{{ url('/suvs') }}" class="btn btn-outline-primary rounded-pill mt-3">
                            Browse Inventory
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <img src="\images\dims.jpg" class="card-img-top" alt="Luxury">

                    <div class="card-body text-center">
                        <h3 class="card-title h5">SEDANS</h3>
                        {{-- <p class="text-muted small">Premium interiors...</p> --}}

                        <a href="{{ url('/sedans') }}" class="btn btn-outline-primary rounded-pill mt-3">
                            Browse Inventory
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    {{-- <div class="text-center mt-4">

        <p class="lead">
            Discover our top-quality vehicles!
        </p>

        <a href="{{ url('/posts') }}" class="browse-btn">
            Browse Inventory
        </a>

    </div> --}}


    <style>
        .lead {
            font-size: 1.2rem;
        }

        .browse-btn {
            background: royalblue;
            color: white;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);

            padding: 12px 24px;
            display: inline-block;
            border-radius: 30px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;

            transition: all 0.2s ease;
        }

        .browse-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
        }
    </style>


    @include('user.cardisp')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Vehicle Search</h2>
                @guest
                    <p>Please <a href="{{ route('login') }}">log in</a> or <a href="{{ route('register') }}">create
                            an
                            account</a> to submit the form.</p>
                @else
                    <div class="container mt-5">
                        <form action="{{ route('vehicle.form') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="vehicle_type">Vehicle Type</label>
                                    <select name="vehicle_type" id="vehicle_type" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="Truck">Truck</option>
                                        <option value="Van">Van</option>
                                        <option value="Convertible">Convertible</option>
                                    </select>
                                </div>

                                <div class="form-group col">
                                    <label for="price_range">Price Range</label>
                                    <select name="price_range" id="price_range" class="form-control">
                                        <option value="$1 - $50">$1 - $50</option>
                                        <option value="$51 - $100">$51 - $100</option>
                                        <option value="$101 - $200">$101 - $200</option>
                                        <option value="$201 - $300">$201 - $300</option>
                                        <option value="$301 - $400">$301 - $400</option>
                                        <option value="$401 - $500">$401 - $500</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Find Vehicles</button>
                            </div>

                        </form>
                    @endguest
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-center mt-4">Work With Us</h1>
                    <p class="lead text-center">Enter Your Information</p>

                    <form action="{{ url('/work') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" id="state" class="form-control" required>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfL-VEpAAAAACCgE1lT9L9ESG3uc8OOGh9doE3m"></div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>






        {{-- <section class="custom-services-section ftco-section ftco-no-pt ftco-no-pb"
            style="background-color: #f5f5f5;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                        <span class="subheading" style="color: #333;">Our Unique Services</span>
                        <h2 class="mb-2" style="color: #222;">Explore What We Offer</h2>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="icon" style="background-color: #ff9900; color: #fff;"><span
                                            class="flaticon-customer-support"></span></div>
                                    <h3 class="heading mb-0 pl-3">24/7 Assistance</h3>
                                </div>
                                <p>Our dedicated support team is available round-the-clock to assist you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="icon" style="background-color: #0099cc; color: #fff;"><span
                                            class="flaticon-route"></span></div>
                                    <h3 class="heading mb-0 pl-3">Convenient Locations</h3>
                                </div>
                                <p>Find us at multiple locations to serve your travel needs more conveniently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="icon" style="background-color: #ff6699; color: #fff;"><span
                                            class="flaticon-online-booking"></span></div>
                                    <h3 class="heading mb-0 pl-3">Easy Reservations</h3>
                                </div>
                                <p>Make hassle-free reservations online or through our mobile app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                            <div class="media-body py-md-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="icon" style="background-color: #33cc33; color: #fff;"><span
                                            class="flaticon-rent"></span></div>
                                    <h3 class="heading mb-0 pl-3">Wide Vehicle Selection</h3>
                                </div>
                                <p>Choose from a diverse range of vehicles to suit your transportation needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}




        <section class="custom-services-section ftco-section services-section img"
            style="background-image: url(/images/Ge.jpg);">
            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5);"></div>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <span class="subheading" style="color: #fff;">Our Process</span>
                        <h2 class="mb-3" style="color: #fff;">How It Works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2"
                            style="background-color: #333; border-radius: 10px;">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"
                                    style="background-color: #ff9900; color: #fff;"><span
                                        class="flaticon-route"></span>
                                </div>
                                <h3 style="color: #fff;">Choose Destination</h3>
                                <p style="color: #fff;">Select your desired destination for your journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2"
                            style="background-color: #333; border-radius: 10px;">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"
                                    style="background-color: #0099cc; color: #fff;"><span
                                        class="flaticon-select"></span>
                                </div>
                                <h3 style="color: #fff;">Select Term</h3>
                                <p style="color: #fff;">Choose the duration of your rental term.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2"
                            style="background-color: #333; border-radius: 10px;">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"
                                    style="background-color: #ff6699; color: #fff;"><span
                                        class="flaticon-rent"></span>
                                </div>
                                <h3 style="color: #fff;">Choose A Vehicle</h3>
                                <p style="color: #fff;">Select a vehicle that suits your needs and preferences.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services services-2"
                            style="background-color: #333; border-radius: 10px;">
                            <div class="media-body py-md-4 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"
                                    style="background-color: #33cc33; color: #fff;"><span
                                        class="flaticon-review"></span>
                                </div>
                                <h3 style="color: #fff;">Enjoy Your Ride</h3>
                                <p style="color: #fff;">Relax and enjoy your journey with our comfortable vehicles.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-section testimony-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Testimonial</span>
                        <h2 class="mb-3">Satisfied Customers</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/charles2.jpg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">Youll have an amazing experience leasing Vehicles with
                                            Our
                                            company. Our services are top-notch!</p>
                                        <p class="name">Charles Green</p>
                                        <span class="position">CEO HACK SOLUTIONS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/charles.jpeg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">The box trucks offered by this company are exceptional.
                                            They
                                            helped streamline our supply chain operations.</p>
                                        <p class="name">Aaron Alves</p>
                                        <span class="position">Supply Chain Analyst</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">Working with this company's box truck leasing experts has
                                            been a
                                            game-changer for our business.</p>
                                        <p class="name">David Johnson</p>
                                        <span class="position">Logistics Coordinator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">Their box truck leasing solutions have significantly
                                            improved
                                            our
                                            efficiency and cost-effectiveness.</p>
                                        <p class="name">Robert Wilson</p>
                                        <span class="position">Transportation Manager</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/veronica.jpg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">I'm impressed with their dedication and expertise in box
                                            truck
                                            leasing.</p>
                                        <p class="name">Veronica Tateum</p>
                                        <span class="position">Logistics Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section testimony-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Company Team</span>
                        <h2 class="mb-3">Meet Our Team</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/charles2.jpg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">Meet our CEO, Charles Green. He leads the way with
                                            passion
                                            and
                                            expertise.</p>
                                        <p class="name">Charles Green</p>
                                        <span class="position">CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap text-center py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/jrmhd.jpg)">
                                    </div>
                                    <div class="text pt-4">
                                        <p class="mb-4">Meet our Software Engineer, JRMHD (Reagan Mukabana). He's
                                            our
                                            tech wizard!</p>
                                        <p class="name">JRMHD (Reagan Mukabana)</p>
                                        <span class="position">Software Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        {{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(images/about.jpg);">
                    </div>
                    <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                        <div class="heading-section mb-5 pl-md-5">
                            <h2 class="mb-4">About Us</h2>
                            <p>Welcome to Hack Solutions USA</p>

                            <p>We are your reliable partner for all your vehicle leasing needs. With a diverse fleet
                                that
                                includes various
                                vehicle types, we offer flexible leasing options starting at just $19.99 per day.</p>

                            <p>Our mission is to simplify the process of renting a vehicle for your business or personal
                                use. Whether you
                                require a vehicle for moving, transportation, or any other purpose, we have the ideal
                                solution for you.</p>

                            <p>Explore our selection of vehicles and find the one that best suits your needs. Contact us
                                today to begin your
                                leasing journey with Hack Solutions USA.</p>

                            <p><a href="{{ url('/posts') }}" class="btn btn-primary">Search Vehicle</a></p>
                        </div>

                    </div>
                </div>
            </div> --}}
        </section>



        <section class="ftco-section services-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                        {{-- <span class="subheading">Our Leasing Services</span> --}}
                        <h2 class="mb-2">Explore Our Vehicle Leasing Solutions</h2>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="icon"><span class="flaticon-car"></span></div>
                            <div class="media-body py-md-4">
                                <h3 class="heading mb-0">Vehicle Selection</h3>
                                <p>Browse our diversified inventory to meet your business or personal needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="icon"><span class="flaticon-credit-card"></span></div>
                            <div class="media-body py-md-4">
                                <h3 class="heading mb-0">Flexible Payment Plans</h3>
                                <p>Customizable payment plans to fit your budgetary and needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="icon"><span class="flaticon-document"></span></div>
                            <div class="media-body py-md-4">
                                <h3 class="heading mb-0">Lease Agreements</h3>
                                <p>Transparent lease agreements with no hidden fees.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services">
                            <div class="icon"><span class="flaticon-warranty"></span></div>
                            <div class="media-body py-md-4">
                                <h3 class="heading mb-0">Maintenance Included</h3>
                                <p>Comprehensive maintenance services included in your lease.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        {{-- subscribe start --}}

        <form action="{{ route('subscribe.store') }}" method="post" class="bg-white rounded-4 shadow-sm p-4">

            <div class="text-center mb-4">
                <h3 class="text-muted">Subscribe for Offers</h3>
            </div>

            @csrf

            <div class="row g-2">

                <div class="col-6">
                    <input type="text" class="form-control form-control-sm rounded-pill border-0"
                        name="first_name" placeholder="First name">
                </div>

                <div class="col-6">
                    <input type="text" class="form-control form-control-sm rounded-pill border-0" name="last_name"
                        placeholder="Last name">
                </div>

                <div class="col-12 mt-2">
                    <input type="email" class="form-control form-control-sm rounded-pill border-0" name="email"
                        placeholder="Enter email">
                </div>

            </div>
            <div class="g-recaptcha" data-sitekey="6LfL-VEpAAAAACCgE1lT9L9ESG3uc8OOGh9doE3m"></div>
            <button type="submit" class="btn btn-primary btn-sm mt-3 w-100 rounded-pill">
                Subscribe
            </button>

        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        {{-- subscribe end --}}
        @include('footer')
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                    stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                    stroke-miterlimit="10" stroke="#F96D00" />
            </svg></div>



        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

</body>

</html>
