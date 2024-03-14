<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

    <title>Dashboard {{ Auth::user()->name }}</title>
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
        .card:hover img {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .hover-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .hover-button {
            opacity: 1;
        }

        .form-container {
            display: none;
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .form-group label {
            font-weight: 500;
        }

        .custom-file-label::after {
            content: "Browse";
        }
    </style>

</head>

<body>





    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
                <img src="images/hack.jpg" alt="Logo" class="navbar-logo mr-2" style="max-height: 40px;">
                <span>Hack<span class="text-royal-blue">Solutions</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/posts') }}" class="nav-link">Our Inventory</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/hack.jpg" alt="Profile Picture"
                                class="profile-picture-navbar rounded-circle mr-2" style="width: 30px; height: 30px;">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item d-flex align-items-center mb-0">
                                <i class="fas fa-envelope mr-2"></i>
                                {{ Auth::user()->email }}
                            </div>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow rounded-lg p-4">
                    <h4 class="text-center mb-4">Have You Submitted Your Documents?</h4>
                    <p class="text-center mb-4">To proceed, please ensure you have submitted your driving license, MC
                        number, and DOT number.</p>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="text-center">
                        <button id="showFormBtn" class="btn btn-primary submit-btn"
                            style="background-color: #4169e1;">Submit Documents</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container" id="formContainer">
                    <h3 class="text-center mb-4">Vehicle Rental Registration</h3>
                    <p class="text-muted mb-4">Please provide the required information and upload your driver's license
                        to complete the registration process.</p>
                    <form action="{{ route('document-submission.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="mc_number">MC Number</label>
                            <input type="text" class="form-control" id="mc_number" name="mc_number"
                                placeholder="Enter your MC Number">
                        </div>
                        <div class="form-group">
                            <label for="dot">DOT</label>
                            <input type="text" class="form-control" id="dot" name="dot"
                                placeholder="Enter your DOT">
                        </div>
                        <div class="form-group">
                            <label for="driver_license">Driver's License</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="driver_license"
                                    name="driver_license" accept=".pdf,image/*">
                                <label class="custom-file-label" for="driver_license">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="additional_info">Additional Information (Optional)</label>
                            <textarea class="form-control" id="additional_info" name="additional_info" rows="3"
                                placeholder="Enter any additional information (optional)"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary ml-2" id="hideFormBtn">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



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

        <div class="container my-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow h-100">
                        <div class="position-relative">
                            <img src="\images\BoxTruck2.png" class="card-img-top" alt="Box Trucks">
                            <a href="{{ url('/boxtrucks') }}" class="btn btn-primary hover-button">BOOK NOW</a>
                        </div>

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
                        <div class="position-relative">
                            <img src="\images\Toyota-Sequoia-Capstone-23-1.jpg" class="card-img-top" alt="SUV">
                            <a href="{{ url('/suvs') }}" class="btn btn-primary hover-button">BOOK NOW</a>
                        </div>

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
                        <div class="position-relative">
                            <img src="\images\dims.jpg" class="card-img-top" alt="Luxury">
                            <a href="{{ url('/sedans') }}" class="btn btn-primary hover-button">BOOK NOW</a>
                        </div>

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

        {{-- @include('user.cardisp') --}}


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

        <script>
            document.getElementById('showFormBtn').addEventListener('click', function() {
                document.getElementById('formContainer').style.display = 'block';
            });

            document.getElementById('hideFormBtn').addEventListener('click', function() {
                document.getElementById('formContainer').style.display = 'none';
            });
        </script>

        <script>
            // Custom file input
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass('selected').html(fileName);
            });
        </script>

</body>

</html>
