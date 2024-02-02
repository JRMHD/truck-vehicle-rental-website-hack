<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Choose Your Vehicle</h2>
            </div>
        </div>
        <div class="row">
            <!-- Vehicle Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rent-item border-0 shadow">
                    <img class="card-img-top img-fluid mb-4" src="images/bx1.jpg" alt="Box Truck 26ft">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase mb-4">Box Truck 26ft</h4>

                        <!-- Rent Now Button with Modal Trigger -->
                        <button type="button" class="btn btn-sm" style="background-color: royalblue; color: white;"
                            data-toggle="modal" data-target="#rentNowModal">
                            Rent Now
                        </button>

                        <!-- Details Button -->
                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Rent Now Modal -->
            <div class="modal fade" id="rentNowModal" tabindex="-1" role="dialog" aria-labelledby="rentNowModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rentNowModalLabel">Rent Now - Enter Details</h5>
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
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Your Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="vehicle_type">Vehicle Type</label>
                                    <input type="text" class="form-control" id="vehicle_type" name="vehicle_type"
                                        value="Box Truck 26ft">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>




            <!-- Vehicle Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rent-item border-0 shadow">
                    <img class="card-img-top img-fluid mb-4" src="images/bx2.jpg" alt="Box Truck 24ft">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase mb-4">Box Truck 24ft</h4>

                        <!-- Rent Now Button with Modal Trigger -->
                        <button type="button" class="btn btn-sm" style="background-color: royalblue; color: white;"
                            data-toggle="modal" data-target="#rentNowModal2">
                            Rent Now
                        </button>

                        <!-- Details Button -->
                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Rent Now Modal for Box Truck 24ft -->
            <div class="modal fade" id="rentNowModal2" tabindex="-1" role="dialog"
                aria-labelledby="rentNowModalLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rentNowModalLabel2">Rent Now - Enter Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Rent Now Form -->
                            <form action="{{ route('rent.submission') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name2">Your Name</label>
                                    <input type="text" class="form-control" id="name2" name="name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email2">Your Email</label>
                                    <input type="email" class="form-control" id="email2" name="email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="phone2">Your Phone Number</label>
                                    <input type="tel" class="form-control" id="phone2" name="phone"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="vehicle_type2">Vehicle Type</label>
                                    <input type="text" class="form-control" id="vehicle_type2"
                                        name="vehicle_type" value="Box Truck 24ft">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


            <!-- Vehicle Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rent-item border-0 shadow">
                    <img class="card-img-top img-fluid mb-4" src="images/bx3.jpg" alt="Box Truck 20ft">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase mb-4">Box Truck 20ft</h4>

                        <!-- Rent Now Button with Modal Trigger -->
                        <button type="button" class="btn btn-sm" style="background-color: royalblue; color: white;"
                            data-toggle="modal" data-target="#rentNowModal3">
                            Rent Now
                        </button>

                        <!-- Details Button -->
                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Rent Now Modal for Box Truck 20ft -->
            <div class="modal fade" id="rentNowModal3" tabindex="-1" role="dialog"
                aria-labelledby="rentNowModalLabel3" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rentNowModalLabel3">Rent Now - Enter Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Rent Now Form -->
                            <form action="{{ route('rent.submission') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name3">Your Name</label>
                                    <input type="text" class="form-control" id="name3" name="name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email3">Your Email</label>
                                    <input type="email" class="form-control" id="email3" name="email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="phone3">Your Phone Number</label>
                                    <input type="tel" class="form-control" id="phone3" name="phone"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="vehicle_type3">Vehicle Type</label>
                                    <input type="text" class="form-control" id="vehicle_type3"
                                        name="vehicle_type" value="Box Truck 20ft">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>



            <!-- Vehicle Card 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rent-item border-0 shadow">
                    <img class="card-img-top img-fluid mb-4" src="images/16ft.jpg" alt="Box Truck 16ft">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase mb-4">Box Truck 16ft</h4>

                        <!-- Rent Now Button with Modal Trigger -->
                        <button type="button" class="btn btn-sm" style="background-color: royalblue; color: white;"
                            data-toggle="modal" data-target="#rentNowModal4">
                            Rent Now
                        </button>

                        <!-- Details Button -->
                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Rent Now Modal for Box Truck 16ft -->
            <div class="modal fade" id="rentNowModal4" tabindex="-1" role="dialog"
                aria-labelledby="rentNowModalLabel4" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rentNowModalLabel4">Rent Now - Enter Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Rent Now Form -->
                            <form action="{{ route('rent.submission') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name4">Your Name</label>
                                    <input type="text" class="form-control" id="name4" name="name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email4">Your Email</label>
                                    <input type="email" class="form-control" id="email4" name="email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="phone4">Your Phone Number</label>
                                    <input type="tel" class="form-control" id="phone4" name="phone"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="vehicle_type4">Vehicle Type</label>
                                    <input type="text" class="form-control" id="vehicle_type4"
                                        name="vehicle_type" value="Box Truck 16ft">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


            <!-- Vehicle Card 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rent-item border-0 shadow">
                    <img class="card-img-top img-fluid mb-4" src="images/14ft.jpg" alt="Box Truck 14ft">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase mb-4">Box Truck 14ft</h4>

                        <!-- Rent Now Button with Modal Trigger -->
                        <button type="button" class="btn btn-sm" style="background-color: royalblue; color: white;"
                            data-toggle="modal" data-target="#rentNowModal5">
                            Rent Now
                        </button>

                        <!-- Details Button -->
                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Rent Now Modal for Box Truck 14ft -->
            <div class="modal fade" id="rentNowModal5" tabindex="-1" role="dialog"
                aria-labelledby="rentNowModalLabel5" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="rentNowModalLabel5">Rent Now - Enter Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Rent Now Form -->
                            <form action="{{ route('rent.submission') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name5">Your Name</label>
                                    <input type="text" class="form-control" id="name5" name="name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="email5">Your Email</label>
                                    <input type="email" class="form-control" id="email5" name="email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="phone5">Your Phone Number</label>
                                    <input type="tel" class="form-control" id="phone5" name="phone"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="vehicle_type5">Vehicle Type</label>
                                    <input type="text" class="form-control" id="vehicle_type5"
                                        name="vehicle_type" value="Box Truck 14ft">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


            {{-- <!-- Vehicle Card 6 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/sedans.jpg" class="card-img-top" alt="Sedans">
                    <div class="card-body">
                        <h5 class="card-title">Sedans</h5>
                        <p class="card-text">Luxurious sedans for your comfortable travel experience.</p>
                        <p class="card-text"><strong>Price:</strong> $19.99/Day</p>
                        <!-- Button to open the booking modal -->
                        <button class="btn btn-dark" data-toggle="modal" data-target="#bookingModal">Book
                            now</button>

                        <!-- Booking modal -->
                        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog"
                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel">Book Now</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Booking form -->
                                        <form action="{{ route('store.booking') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="vehicleType">Vehicle Type:</label>
                                                <input type="text" class="form-control" id="vehicleType"
                                                    name="vehicle_type" placeholder="Enter the vehicle type" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="email" placeholder="Enter your email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="tel" class="form-control" id="phone"
                                                    name="phone" placeholder="Enter your phone number" required>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Buttons within the modal footer -->
                                        <a href="tel:+18007749450" class="btn btn-outline-dark ml-2">Book with Phone
                                            Call</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>



            <!-- Vehicle Card 7 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/suv.jpg" class="card-img-top" alt="SUVs">
                    <div class="card-body">
                        <h5 class="card-title">SUVs</h5>
                        <p class="card-text">Explore the outdoors with our comfortable and spacious SUVs.</p>
                        <p class="card-text"><strong>Price:</strong> $19.99/Day</p>
                        <!-- Button to open the booking modal -->
                        <button class="btn btn-dark" data-toggle="modal" data-target="#bookingModal">Book
                            now</button>

                        <!-- Booking modal -->
                        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog"
                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel">Book Now</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Booking form -->
                                        <form action="{{ route('store.booking') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="vehicleType">Vehicle Type:</label>
                                                <input type="text" class="form-control" id="vehicleType"
                                                    name="vehicle_type" placeholder="Enter the vehicle type" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="email" placeholder="Enter your email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="tel" class="form-control" id="phone"
                                                    name="phone" placeholder="Enter your phone number" required>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Buttons within the modal footer -->
                                        <a href="tel:+18007749450" class="btn btn-outline-dark ml-2">Book with Phone
                                            Call</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>



            <!-- Vehicle Card 8 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/lexus.jpg" class="card-img-top" alt="Lexus Sedans">
                    <div class="card-body">
                        <h5 class="card-title">Lexus Sedans</h5>
                        <p class="card-text">Experience luxury with our premium Lexus sedans.</p>
                        <p class="card-text"><strong>Price:</strong> $25.99/Day</p>
                        <!-- Button to open the booking modal -->
                        <button class="btn btn-dark" data-toggle="modal" data-target="#bookingModal">Book
                            now</button>

                        <!-- Booking modal -->
                        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog"
                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel">Book Now</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Booking form -->
                                        <form action="{{ route('store.booking') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="vehicleType">Vehicle Type:</label>
                                                <input type="text" class="form-control" id="vehicleType"
                                                    name="vehicle_type" placeholder="Enter the vehicle type" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="email" placeholder="Enter your email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="tel" class="form-control" id="phone"
                                                    name="phone" placeholder="Enter your phone number" required>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Buttons within the modal footer -->
                                        <a href="tel:+18007749450" class="btn btn-outline-dark ml-2">Book with Phone
                                            Call</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('/contact') }}" class="btn btn-outline-dark ml-2">Details</a>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and jQuery scripts (ensure you have them included in your project) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

 --}}


            {{-- <div class="text-center mt-4">

                <p class="lead">
                    Discover our top-quality vehicles!
                </p>

                <a href="{{ url('/posts') }}" class="browse-btn">
                    Browse Inventory
                </a>

            </div>


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
            </style> --}}






            {{-- <!-- Contact Section -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h2 class="section-heading mb-4">Can't find what you're looking for?</h2>
                    <p class="mb-4">Contact us for personalized assistance. We're here to help!</p>
                    <div class="btn-group" role="group">
                        <a href="tel:+18007749450" class="btn btn-dark">Call us</a>
                        <a href="mailto:cgreen@hacksolutionusa.com" class="btn btn-outline-dark">Email us</a>
                    </div>
                </div>
            </div>
            <!-- End Contact Section --> --}}

        </div>
    </div>
</section>
