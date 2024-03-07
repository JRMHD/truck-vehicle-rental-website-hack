<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <title>SUVs</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Topbar Start -->
    {{-- <div style="background-color: royalblue; color: white; padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0"> --}}
    {{-- <div class="d-inline-flex align-items-center">
                        <a style="text-decoration: none; color: white;" href="tel:+1 800 774 9450">
                            <i class="fa fa-phone-alt mr-2"></i>+1 800 774 9450
                        </a>
                        <span style="color: white;">|</span>
                        <a style="text-decoration: none; color: white;" href="mailto:cgreen@hacksolutionsusa.com">
                            <i class="fa fa-envelope mr-2"></i>cgreen@hacksolutionsusa.com
                        </a>
                    </div> --}}
    {{-- <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                        <a class="btn btn-primary" href="{{ route('welcome') }}"
                            style="background-color: white !important; color: black !important; font-weight: bold !important;">
                            Home</a>
                    </div>
                </div> --}}



    {{-- <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a style="text-decoration: none; color: white; padding: 0 5px;"
                            href="https://www.facebook.com/profile.php?id=100039978403586">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a style="text-decoration: none; color: white; padding: 0 5px;" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a style="text-decoration: none; color: white; padding: 0 5px;" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a style="text-decoration: none; color: white; padding: 0 5px;" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a style="text-decoration: none; color: white; padding: 0 5px;" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}" style="font-weight: 700; color: white;">
                Go Home<span style="font-weight: 700;"> </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        {{-- <a href="{{ route('welcome') }}" class="nav-link">Home</a> --}}
                    </li>
                    {{-- <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li> --}}
                    <li class="nav-item"><a href="{{ url('/sedans') }}" class="nav-link">Sedans</a></li>
                    <li class="nav-item"><a href="{{ url('/boxtrucks') }}" class="nav-link">BoxTrucks</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px">
                    <option selected>Pickup Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px">
                    <option selected>Drop Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                        data-target="#date" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="time mb-3" id="time" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                        data-target="#time" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px">
                    <option selected>Select A Car</option>
                    <option value="1">Car 1</option>
                    <option value="2">Car 1</option>
                    <option value="3">Car 1</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px">
                    Search
                </button>
            </div>
        </div>
    </div>
    <!-- Search End --> --}}

    <!-- Page Header Start -->
    <div
        style="background-image: url('/images/banner-chevrolet-suvs.jpg'); background-size: cover; background-position: center; height: 300px; display: flex; align-items: center; justify-content: center;">
        {{-- <div style="text-align: center;">
            <h1 style="font-size: 50px; color: #fff; font-weight: bold; margin-bottom: 20px;">SUVs Listing</h1>
            <div style="display: flex; align-items: center; font-size: 18px;">
                <a href="welcome" style="color: #fff; margin-right: 10px;">Home</a>
                <div style="color: #ccc; margin-right: 10px;">/</div>
                <div style="color: #000000;">SUVs</div>
            </div>
        </div> --}}
    </div>
    <!-- Page Header End -->

    <style>
        .card-img-top:hover {
            transform: scale(1.1);
            /* Adjust the scale factor for the desired zoom level */
            transition: transform 0.3s ease;
            /* Add a smooth transition effect */
        }
    </style>

    <!-- Rent A Box Truck Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container pt-5 pb-3">
            <h1 class="display-6 text-uppercase text-center mb-5"
                style="color: #4169e1; font-size: 2.5rem; font-weight: bold;">SUVs</h1>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rent-item border-0 shadow">
                        <img class="card-img-top img-fluid mb-4" src="\images\Mazda CX-5.jpg" alt="Box Truck 1" />
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-4">Mazda CX-5</h4>
                            {{-- <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>Year: Varies</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>Transmission: AUTO</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>Mileage: custom</span>
                                </div>
                            </div> --}}

                            <!-- Rent Now Button with Modal Trigger -->
                            <button type="button" class="btn btn-sm" style="background-color: royalblue; color: white;"
                                data-toggle="modal" data-target="#rentNowModalMazda">
                                Rent Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Rent Now Modal for Mazda CX-5 -->
                <div class="modal fade" id="rentNowModalMazda" tabindex="-1" role="dialog"
                    aria-labelledby="rentNowModalLabelMazda" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rentNowModalLabelMazda">Rent Now - Enter Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Rent Now Form -->
                                <form action="{{ route('rent.submission') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Type</label>
                                        <input type="text" class="form-control" id="vehicle_type"
                                            name="vehicle_type" value="Mazda CX-5">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rent-item border-0 shadow">
                        <img class="card-img-top img-fluid mb-4" src="\images\Hyundai-Tucson-Active-1-scaled.jpg"
                            alt="Box Truck 1" />
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-4">Hyundai Tucson</h4>
                            {{-- <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>Year: Varies</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>Transmission: AUTO</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>Mileage: custom</span>
                                </div>
                            </div> --}}

                            <!-- Rent Now Button with Modal Trigger -->
                            <button type="button" class="btn btn-sm"
                                style="background-color: royalblue; color: white;" data-toggle="modal"
                                data-target="#rentNowModalHyundai">
                                Rent Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Rent Now Modal for Hyundai Tucson -->
                <div class="modal fade" id="rentNowModalHyundai" tabindex="-1" role="dialog"
                    aria-labelledby="rentNowModalLabelHyundai" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rentNowModalLabelHyundai">Rent Now - Enter Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Rent Now Form -->
                                <form action="{{ route('rent.submission') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Type</label>
                                        <input type="text" class="form-control" id="vehicle_type"
                                            name="vehicle_type" value="Hyundai Tucson">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rent-item border-0 shadow">
                        <img class="card-img-top img-fluid mb-4" src="\images\JDPA_2020 Nissan Rogue Sport SL.jpg"
                            alt="Nissan Rogue Sport" />
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-4">Nissan Rogue Sport</h4>
                            {{-- <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>Year: Varies</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>Transmission: AUTO</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>Mileage: custom</span>
                                </div>
                            </div> --}}

                            <!-- Rent Now Button with Modal Trigger -->
                            <button type="button" class="btn btn-sm"
                                style="background-color: royalblue; color: white;" data-toggle="modal"
                                data-target="#rentNowModalNissan">
                                Rent Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Rent Now Modal for Nissan Rogue Sport -->
                <div class="modal fade" id="rentNowModalNissan" tabindex="-1" role="dialog"
                    aria-labelledby="rentNowModalLabelNissan" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rentNowModalLabelNissan">Rent Now - Enter Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Rent Now Form -->
                                <form action="{{ route('rent.submission') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Type</label>
                                        <input type="text" class="form-control" id="vehicle_type"
                                            name="vehicle_type" value="Nissan Rogue Sport">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rent-item border-0 shadow">
                        <img class="card-img-top img-fluid mb-4" src="\images\2024-Subaru-Forester-Sport-front.jpg"
                            alt="Subaru Forester" />
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-4">Subaru Forester</h4>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>Year: Varies</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>Transmission: AUTO</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>Mileage: custom</span>
                                </div>
                            </div>

                            <!-- Rent Now Button with Modal Trigger -->
                            <button type="button" class="btn btn-sm"
                                style="background-color: royalblue; color: white;" data-toggle="modal"
                                data-target="#rentNowModalSubaru">
                                Rent Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Rent Now Modal for Subaru Forester -->
                <div class="modal fade" id="rentNowModalSubaru" tabindex="-1" role="dialog"
                    aria-labelledby="rentNowModalLabelSubaru" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rentNowModalLabelSubaru">Rent Now - Enter Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Rent Now Form -->
                                <form action="{{ route('rent.submission') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Type</label>
                                        <input type="text" class="form-control" id="vehicle_type"
                                            name="vehicle_type" value="Subaru Forester">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rent-item border-0 shadow">
                        <img class="card-img-top img-fluid mb-4" src="\images\chevrolet-equinox-ogi.jpg"
                            alt="Chevrolet Equinox" />
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-4">Chevrolet Equinox</h4>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>Year: Varies</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>Transmission: AUTO</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>Mileage: custom</span>
                                </div>
                            </div>

                            <!-- Rent Now Button with Modal Trigger -->
                            <button type="button" class="btn btn-sm"
                                style="background-color: royalblue; color: white;" data-toggle="modal"
                                data-target="#rentNowModalEquinox">
                                Rent Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Rent Now Modal for Chevrolet Equinox -->
                <div class="modal fade" id="rentNowModalEquinox" tabindex="-1" role="dialog"
                    aria-labelledby="rentNowModalLabelEquinox" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rentNowModalLabelEquinox">Rent Now - Enter Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Rent Now Form -->
                                <form action="{{ route('rent.submission') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Type</label>
                                        <input type="text" class="form-control" id="vehicle_type"
                                            name="vehicle_type" value="Chevrolet Equinox">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card rent-item border-0 shadow">
                        <img class="card-img-top img-fluid mb-4" src="\images\kia_sorento-hybrid_4dr-suv.jpg"
                            alt="Kia Sorento" />
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-4">Kia Sorento</h4>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>Year: Varies</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>Transmission: AUTO</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>Mileage: custom</span>
                                </div>
                            </div>

                            <!-- Rent Now Button with Modal Trigger -->
                            <button type="button" class="btn btn-sm"
                                style="background-color: royalblue; color: white;" data-toggle="modal"
                                data-target="#rentNowModalSorento">
                                Rent Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Rent Now Modal for Kia Sorento -->
                <div class="modal fade" id="rentNowModalSorento" tabindex="-1" role="dialog"
                    aria-labelledby="rentNowModalLabelSorento" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="rentNowModalLabelSorento">Rent Now - Enter Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Rent Now Form -->
                                <form action="{{ route('rent.submission') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Type</label>
                                        <input type="text" class="form-control" id="vehicle_type"
                                            name="vehicle_type" value="Kia Sorento">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}



                <!-- Add similar card structures for other box trucks -->
            </div>
        </div>
    </div>
    <!-- Rent A Box Truck End -->



    {{-- <!-- Modern Banner Start -->
    <div class="container-fluid py-5 bg-dark">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Left Section -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-lg bg-primary text-white p-5">
                        <h3 class="text-uppercase mb-4">
                            Explore a Variety of Vehicles
                        </h3>
                        <p class="mb-4">
                            Discover a wide range of vehicles for every need. Whether you're looking for a sedan, SUV,
                            or a powerful truck, we've got you covered.
                        </p>
                        <a class="btn btn-light py-2 px-4" href="{{ route('posts.index') }}">Explore Now</a>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg bg-secondary text-white p-5">
                        <h3 class="text-uppercase mb-4">
                            Find Your Perfect Ride
                        </h3>
                        <p class="mb-4">
                            Browse our diverse collection of vehicles and find the one that suits your style and
                            requirements. Start your journey with us.
                        </p>
                        <a class="btn btn-light py-2 px-4" href="{{ route('posts.index') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modern Banner End --> --}}


    @include('footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
