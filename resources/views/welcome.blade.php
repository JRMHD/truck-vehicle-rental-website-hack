<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

    <title>Hack Solutions USA Homepage</title>
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

    <style>
        #ftco-loader {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loader-container {
            text-align: center;
        }

        .rotate-loader {
            animation: rotate 2s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
                opacity: 0.8;
            }

            to {
                transform: rotate(360deg);
                opacity: 0.4;
            }
        }
    </style>

    <style>
        .rent-button {
            background-color: #003366;
            /* Royal Blue */
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 5px;
            transition: all 0.3s ease;
            position: relative;
        }

        .rent-button:focus {
            outline: none;
            box-shadow: none;
        }

        .rent-button:hover .popup,
        .rent-button:focus .popup {
            display: block;
        }

        .popup {
            display: none;
            position: absolute;
            top: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            z-index: 1;
            text-align: center;
        }

        .popup a {
            display: inline-block;
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px;
            transition: all 0.3s ease;
            border-radius: 5px;
            font-weight: bold;
            background-color: #f0f0f0;
        }

        .popup a:hover {
            background-color: #e0e0e0;
        }
    </style>


    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 8px;
            /* Added for rounded corners */
        }

        /* Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Subscribe Form */
        form {
            display: flex;
            flex-direction: column;
        }

        input,
        button {
            margin-top: 10px;
            padding: 12px;
            /* Increased padding */
            font-size: 16px;
            border: 1px solid #4169e1;
            /* Royal Blue border */
            border-radius: 4px;
            /* Added for rounded corners */
        }

        button {
            background-color: #4169e1;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #2b77b2;
            /* Darker shade on hover */
        }
    </style>
</head>

<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Get your journey started.</p>
            <h1 style="color: #4169e1; font-size: 1.5rem; font-weight:;">Click the button below to rent your vehicle.
            </h1>
            <a href="{{ url('boxtrucks') }}" class="btn btn-primary"
                style="font-size: 1.5rem; font-weight: bold; background-color: #4169e1;">Book Now</a>
        </div>
    </div>






    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
        style="margin-top: -0;">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Explore
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('/posts') }}">Our Inventory</a>
                            <a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ url('Featured') }}">Featured</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>



    <!-- END nav -->

    <div class="hero-wrap" style="position: relative;">
        <video playsinline autoplay muted loop poster="images/handsome-elegant-black-man-car-salon.jpg"
            style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
            <source src="\images\hack trucks.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="headline">
                            <span style="font-weight: bold;">Discover</span>
                            <span style="font-weight: bold;">Effortless</span>
                            <span style="font-weight: bold;">Vehicle</span>
                            <span style="font-weight: bold;">Rentals</span>
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

                        <p style="font-size: 18px;">Experience the convenience of renting a Vehicle with us. We offer
                            top-notch services to make your journey smooth and worry-free.</p>

                        <a href="{{ url('posts') }}" class="start-now-link">
                            <button type="button" class="btn btn-primary btn-block py-3 start-now-btn">Start
                                Now</button>
                            <style>
                                .start-now-link {
                                    display: inline-block;
                                    /* Ensure the anchor behaves like a block element */
                                    text-decoration: none;
                                    /* Remove default underline */
                                }

                                .start-now-btn {
                                    border-radius: 30px;
                                    background-color: royalblue;
                                    color: #fff;
                                    font-weight: bold;
                                    box-shadow: 0 0 20px royalblue;
                                }

                                .start-now-btn:hover {
                                    background-color: #0066cc;
                                    /* Darker shade of royalblue on hover */
                                    box-shadow: 0 0 20px #0066cc;
                                }
                            </style>

                        </a>

                    </div>

                </div>

                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-5 d-flex">
                    <form action="{{ route('plan.journey') }}" method="POST" class="request-form ftco-animate">
                        @csrf
                        <h2 class="mb-4 text-center">Plan Your Journey</h2>

                        <div class="form-group">
                            <label for="pickup_dropoff_location" class="label">Pick-up & Drop-off Location</label>
                            <input type="text" class="form-control" name="pickup_dropoff_location"
                                id="pickup_dropoff_location" placeholder="City or Zip code">
                        </div>

                        <div class="form-group">
                            <label for="pick_up_date" class="label">Pick-up Date</label>
                            <input type="date" class="form-control" name="pick_up_date" id="pick_up_date"
                                placeholder="Date">
                        </div>

                        <div class="form-group">
                            <label for="pick_up_time" class="label">Pick-up Time</label>
                            <input type="time" class="form-control" name="pick_up_time" id="pick_up_time"
                                placeholder="Time">
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LfL-VEpAAAAACCgE1lT9L9ESG3uc8OOGh9doE3m"></div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block py-3">Find a Vehicle</button>
                        </div>
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


    {{-- @include('user.cardisp')   --}}

    {{-- <div class="container mt-5">
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
        </div> --}}

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <button class="rent-button">RENT A VEHICLE NOW
                    <div class="popup">
                        <a href="{{ url('/boxtrucks') }}">Box Trucks</a>
                        <a href="{{ url('/sedans') }}">Sedans</a>
                        <a href="{{ url('/suvs') }}">SUVs</a>
                    </div>
                </button>
            </div>
        </div>
    </div>



    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4" style="color: #4169e1; font-size: 2.5rem; font-weight: bold;">
                        Welcome to Hack Solutions</h2>
                    <p class="section-description" style="font-size: 1.2rem; line-height: 1.6; color: #555;">
                        We understand that having access to the right vehicles at the right time is fundamental for your
                        business.
                    </p>
                    <p class="section-description" style="font-size: 1.2rem; line-height: 1.6; color: #555;">
                        Whether there is an unexpected increase in demand or a seasonal spike, you could find yourself
                        in need of additional rentals to power your business not a problem, we have you covered.
                    </p>
                    <p class="section-description" style="font-size: 1.2rem; line-height: 1.6; color: #555;">
                        Our specialized rental process can increase your productivity.
                    </p>
                    <p class="section-description" style="font-size: 1.2rem; line-height: 1.6; color: #555;">
                        Let Hack be the solution to your vehicle management needs.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="mb-4"
                    style="font-weight: bold; color: royalblue; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 50px;">
                    Featured Vehicles</h2>
                <p class="lead">Explore our curated selection of featured vehicles. Each one is hand-picked for its
                    exceptional quality and performance.</p>
                <a href="{{ url('Featured') }}" class="btn btn-primary btn-lg"
                    style="background-color: royalblue; border-color: royalblue;">View Featured</a>
            </div>
        </div>
    </div>






    <!-- Why Us Section -->


    <style>
        .why-us h2 {
            position: relative;
            margin-bottom: 35px;
            color: #4169e1;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .why-us h2::after {
            content: "";
            width: 120px;
            height: 3px;
            display: inline-block;
            background: #FFC107;
            position: absolute;
            left: 0px;
            right: 0px;
            bottom: -20px;
            margin: 0 auto;
        }

        .why-us .box {
            padding: 50px 30px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.10);
            transition: 0.5s;
            position: relative;
            background-color: #333;
            max-height: 230px;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 10px;
        }

        .why-us .box:hover {
            padding: 30px 30px 70px 30px;
            box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.20);
            background-color: rgba(0, 0, 0, 0.3);
        }

        .why-us .box img {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0;
            transition: all ease 1s;
        }

        .why-us .box:hover img {
            opacity: 1;
        }

        .why-us .box span {
            display: block;
            font-size: 56px;
            font-weight: 700;
            color: #6b6060;
            position: absolute;
            right: 10px;
            top: 0px;
            line-height: normal;
        }

        .why-us .box h4 a {
            font-size: 24px;
            font-weight: 600;
            padding: 0;
            margin: 20px 0;
            color: #dadada;
            text-decoration: none;
        }

        .why-us .box p {
            color: #aaaaaa;
            font-size: 15px;
            margin: 0;
            padding: 0;
        }

        .why-us .box:hover span,
        .why-us .box:hover h4 a,
        .why-us .box:hover p {
            color: #fff;
        }
    </style>


    <section class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mt-5 text-center">Why Choose Our Vehicle Rental Services</h2>
                    <p class="mb-5 text-center">Explore the reasons why our vehicle rental services are the perfect
                        choice for you.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>01</span>
                        <h4><a href="{{ url('/posts') }}"> Wide Range of Vehicles</a></h4>
                        <p>We offer a diverse fleet of vehicles to meet your specific needs, from sedans to trucks and
                            SUVs.</p>
                        <img src="images/group-trucks-parked-line-truck-stop.jpg" alt="Wide Range of Vehicles">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>02</span>
                        <h4><a href="{{ url('/boxtrucks') }}">Flexible Rental Options</a></h4>
                        <p>Choose from various rental durations and plans to fit your schedule and requirements.</p>
                        <img src="images/rental-application-form-financial-concept.jpg" alt="Flexible Rental Options">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>03</span>
                        <h4><a href="{{ url('/suvs') }}"> Quality and Reliability</a></h4>
                        <p>Our vehicles undergo regular maintenance to ensure they are in top-notch condition, providing
                            you a reliable rental experience.</p>
                        <img src="images/group-happy-workmates-showing-thumbs-up.jpg" alt="Quality and Reliability">
                    </div>
                </div>

                <!-- Add three more cards below following a similar structure -->

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>04</span>
                        <h4><a href="{{ url('/sedans') }}"> Convenient Booking Process</a></h4>
                        <p>Our easy and efficient booking system ensures a hassle-free experience for our customers.</p>
                        <img src="images/high-angle-woman-working-laptop.jpg" alt="Convenience">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>05</span>
                        <h4><a href="{{ url('/contact') }}"> Exceptional Customer Service</a></h4>
                        <p>Our dedicated customer service team is always ready to assist you with any inquiries or
                            concerns.</p>
                        <img src="images/customer-care-webpage-interface-word.jpg" alt="Customer Service">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="box">
                        <span>06</span>
                        <h4><a href="{{ url('/boxtrucks') }}"> Competitive Pricing</a></h4>
                        <p>We offer competitive pricing plans to ensure you get the best value for your rental.</p>
                        <img src="images/close-up-business-people-working-with-business-document-discussion-meeting.jpg"
                            alt="Pricing">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Why Us Section -->




    <section class="custom-services-section ftco-section services-section img"
        style="background-image: url(/images/Ge.jpg);">
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5);"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading" style="color: #fff; font-size: 2.5rem; font-weight: bold; ">Our
                        Process</span>
                    <h2 class="mb-3" style="color: #fff;">How It Works</h2>
                </div>



            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2"
                        style="background-color: #333; border-radius: 10px;">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"
                                style="background-color: #ff9900; color: #fff;"><span class="flaticon-route"></span>
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
                                style="background-color: #0099cc; color: #fff;"><span class="flaticon-select"></span>
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
                                style="background-color: #ff6699; color: #fff;"><span class="flaticon-rent"></span>
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
                                style="background-color: #33cc33; color: #fff;"><span class="flaticon-review"></span>
                            </div>
                            <h3 style="color: #fff;">Enjoy Your Ride</h3>
                            <p style="color: #fff;">Relax and enjoy your journey with our comfortable vehicles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <a href="{{ url('/posts') }}" class="btn btn-primary btn-lg px-4 py-3"
                        style="background-color: #4169e1; border-color: #4169e1;">Get Started</a>
                </div>
            </div>
        </div>
    </section>




    @include('footer')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <div class="loader-container">
            <img src="{{ asset('images/hack-lg.ico') }}" alt="Loader Image" class="rotate-loader">
        </div>
    </div>






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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];

            // Show the modal after 3 seconds (adjust the time as needed)
            setTimeout(function() {
                modal.style.display = "block";
            }, 2000);

            // Close the modal when the close button is clicked
            span.onclick = function() {
                modal.style.display = "none";
            };

            // Close the modal when clicking outside the modal
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            };

            // Subscribe form submission
            var subscribeForm = document.getElementById("subscribeForm");
            subscribeForm.addEventListener("", function(event) {
                event.preventDefault();
                // Add logic here to handle the subscription (e.g., send data to a server)
                alert("Thank you for subscribing!");
                modal.style.display = "none";
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rent-button').on('click', function(e) {
                e.stopPropagation();
                $('.popup').toggle();
            });

            $(document).on('click', function(e) {
                if (!$(e.target).closest('.rent-button').length) {
                    $('.popup').hide();
                }
            });
        });
    </script>


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



</body>


</html>
