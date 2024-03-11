<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">


    <title>Contact Us</title>
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

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
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
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/posts') }}" class="nav-link">Our Inventory</a></li>
                    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('images/concentrated-call-center-operator-communicating-with-client.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html"> <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span> 901 Dulaney Valley Rd Towson, MD 21204</p>
                        </div>
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel://1234567920">+1 800 774 9450</a></p>
                        </div>
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Click To Email:</span> <a
                                    href="mailto:cgreen@hacksolutionusa.com">cgreen@hacksolutionsusa.com</a></p>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">Have additional questions? <br>Do not hesitate to send us a message
                    </h2>
                    <form id="contact-form" action="{{ route('contact.send1') }}" method="POST"
                        class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name='name' class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name='email' class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name='subject' class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfL-VEpAAAAACCgE1lT9L9ESG3uc8OOGh9doE3m"></div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>





                </div>
            </div> --}}



            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">Have additional questions? <br>Do not hesitate to send us a message
                    </h2>
                    <form action="{{ route('submitForm') }}" method="post" id="contact-form"
                        class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name='name' class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name='email' class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name='subject' class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfL-VEpAAAAACCgE1lT9L9ESG3uc8OOGh9doE3m"></div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>






            <div class="col-md-10">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3082.775642834673!2d-76.599924!3d39.4065816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c80fab631dabff%3A0x563dd23744af50e2!2s901%20Dulaney%20Valley%20Rd%20%23110%2C%20Towson%2C%20MD%2021204%2C%20USA!5e0!3m2!1sen!2ske!4v1695204197524!5m2!1sen!2ske"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>
        </div>
    </section>

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


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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

</body>

</html>
