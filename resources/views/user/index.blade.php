<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Inventory | Latest Posts</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            0 margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        h2 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            color: #555;
            margin-bottom: 40px;
        }

        .container-fluid {
            max-width: 1200px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .col-md-6 {
            flex: 0 0 48%;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 48%;
            }
        }

        @media (min-width: 992px) {
            .col-md-6 {
                flex: 0 0 31%;
            }
        }

        .card {
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
            margin-bottom: 20px;
        }

        .card img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #e5e5e5;
        }

        .card-body {
            padding: 20px;
            flex: 1;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #2c3e50;
            font-weight: bold;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 15px;
            color: #555;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background: #3498db;
            color: #fff;
            border: none;
        }

        .btn-secondary {
            background: #ffffff;
            color: #3498db;
            border: 1px solid #3498db;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-secondary:hover {
            background-color: #3498db;
            color: #fff;
        }

        .go-home-btn {
            background: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            margin-top: 20px;
            margin-right: 20px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .go-home-btn:hover {
            background-color: #2980b9;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Style for the form */
        .booking-form {
            text-align: center;
        }

        .booking-form label {
            font-size: 16px;
            margin-right: 10px;
        }

        .booking-form input {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }

        /* Style for the buttons */
        .btn-primary,
        .btn-secondary {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background: #3498db;
            color: #fff;
            border: none;
        }

        .btn-secondary {
            background: #ffffff;
            color: #3498db;
            border: 1px solid #3498db;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-secondary:hover {
            background-color: #3498db;
            color: #fff;
        }

        /* Position the phone call button */
        .phone-call-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>

<body>
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
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div>
        <a href="/" class="go-home-btn">Go Home</a>
    </div> --}}

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h2 class="mb-2" style="color: #000;">Explore Our Vehicle Leasing Solutions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row d-flex">
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services text-center">
                                <div class="icon"><span class="flaticon-credit-card"></span></div>
                                <div class="media-body py-md-4">
                                    <h3 class="heading mb-0">Flexible Payment Plans</h3>
                                    <p>Customizable payment plans to fit your budget and needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services text-center">
                                <div class="icon"><span class="flaticon-document"></span></div>
                                <div class="media-body py-md-4">
                                    <h3 class="heading mb-0">Lease Agreements</h3>
                                    <p>Transparent lease agreements with no hidden fees.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services text-center">
                                <div class="icon"><span class="flaticon-warranty"></span></div>
                                <div class="media-body py-md-4">
                                    <h3 class="heading mb-0">Maintenance Included</h3>
                                    <p>Comprehensive maintenance services included in your lease.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


    {{-- @include('user.cardisp') --}}





    <section style="background-color: #f8f9fa;" class="ftco-section">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div>
                    {{-- <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                        <span class="subheading" style="color: #3498db; font-size: 18px;">Latest Posts</span>
                        <h2 class="mb-2"
                            style="color: #2c3e50; font-size: 32px; line-height: 1.4; font-weight: bold;">
                            Explore Our Posts</h2>
                    </div> --}}
                </div>

            </div>
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <p><strong>Price:</strong> ${{ $post->price }}</p>
                                <a href="#" class="btn btn-primary" onclick="openModal()">Book now</a>
                                <a href="{{ url('/contact') }}" class="btn btn-secondary">Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for booking form -->
                    <div id="bookingModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <div class="booking-form">
                                <h2>Book Now</h2>
                                <!-- Booking form -->
                                <form action="{{ route('reservations.store') }}" method="post">
                                    @csrf
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required><br>

                                    <label for="phone">Phone:</label>
                                    <input type="tel" id="phone" name="phone" required><br>

                                    <label for="vehicle_type">Vehicle Type:</label>
                                    <input type="text" id="vehicle_type" name="vehicle_type" required><br>

                                    <button type="submit" class="btn-primary">Submit</button>
                                </form>

                                <!-- Button for Book with Phone Call -->
                                <a href="tel:+18007749450" class="btn-secondary">Book with Phone Call</a>
                            </div>
                        </div>
                    </div>

                @empty
                    {{-- <div class="col-md-12 text-center">
                        <p style="font-size: 18px; color: #555;">No posts available. Contact us for more information
                            at
                            <a href="tel:+18007749450">+1 800 774 9450</a> or
                            <a href="mailto:cgreen@hacksolutionsusa.com">cgreen@hacksolutionsusa.com</a>.
                        </p>
                        <a href="/" class="go-home-btn">Go Home</a>
                    </div> --}}
                @endforelse
            </div>
        </div>
    </section>
    <script>
        // Function to open the modal
        function openModal() {
            document.getElementById('bookingModal').style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('bookingModal').style.display = 'none';
        }
    </script>

    @include('footer')


</body>

</html>
