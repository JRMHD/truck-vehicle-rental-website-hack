@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link rel="icon" href="hack-lg.ico" type="image/x-icon">
            <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

            {{-- <title>Hack Solutions Usa Homepage</title> --}}
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

            <section class="custom-search-section ftco-section ftco-no-pb ftco-no-pt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-search-wrap ftco-animate mb-5">
                                <form action="#" class="custom-search-form">
                                    <div class="row">
                                        <div class="col-lg align-items-end">
                                            <div class="form-group">
                                                <label for="#">Vehicle Type</label>
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Select Type</option>
                                                            <option value="">SUV</option>
                                                            <option value="">Sedan</option>
                                                            <option value="">Truck</option>
                                                            <option value="">Van</option>
                                                            <option value="">Convertible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg align-items-end">
                                            <div class="form-group">
                                                <label for="#">Price Range</label>
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">$1 - $50</option>
                                                            <option value="">$51 - $100</option>
                                                            <option value="">$101 - $200</option>
                                                            <option value="">$201 - $300</option>
                                                            <option value="">$301 - $400</option>
                                                            <option value="">$401 - $500</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg align-self-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <input type="submit" value="Find Vehicles"
                                                        class="form-control btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            @include('user.cardisp')

            <section class="custom-services-section ftco-section services-section img"
                style="background-image: url(images/24ft.jpg);">
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
                                    <p style="color: #fff;">Relax and enjoy your journey with our comfortable vehicles.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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

    </div>
@endsection
