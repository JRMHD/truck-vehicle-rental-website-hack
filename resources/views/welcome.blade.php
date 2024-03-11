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
                    <li class="nav-item"><a href="{{ url('/posts') }}" class="nav-link">Our Inventory</a></li>
                    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Dashboard</a></li>
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
                        </a> --}}
                        {{-- <style>
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





                {{-- <div class="col-lg-2 col"></div>
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
                </div> --}}


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

            {{-- <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <img src="\images\BoxTruck2.png" class="card-img-top" alt="Saloon">

                    <div class="card-body text-center">
                        <h3 class="card-title h5">BOX TRUCKS</h3>


                        <a href="{{ url('/boxtrucks') }}" class="btn btn-outline-primary rounded-pill mt-3">
                            Browse Inventory
                        </a>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <img src="\images\Toyota-Sequoia-Capstone-23-1.jpg" class="card-img-top" alt="SUV">

                    <div class="card-body text-center">
                        <h3 class="card-title h5">SUVs</h3>


                        <a href="{{ url('/suvs') }}" class="btn btn-outline-primary rounded-pill mt-3">
                            Browse Inventory
                        </a>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <img src="\images\dims.jpg" class="card-img-top" alt="Luxury">

                    <div class="card-body text-center">
                        <h3 class="card-title h5">SEDANS</h3>


                        <a href="{{ url('/sedans') }}" class="btn btn-outline-primary rounded-pill mt-3">
                            Browse Inventory
                        </a>
                    </div>
                </div>
            </div> --}}

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


    {{-- <section class="ftco-section testimony-section">
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
        </section> --}}


    {{-- <section class="ftco-section testimony-section">
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

                                    <p class="name">Reagan Mukabana</p>
                                    <span class="position">Software Engineer</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(/images/Gibson.jpg)">
                                </div>
                                <div class="text pt-4">

                                    <p class="name">Gabriel Gibson</p>
                                    <span class="position">Chief Marketing Director</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section> --}}




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










    {{-- subscribe start --}}

    {{-- <form action="{{ route('subscribe.store') }}" method="post" class="bg-white rounded-4 shadow-sm p-4">

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
        @endif --}}

    {{-- subscribe end --}}


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

</body>


</html>
