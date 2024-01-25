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
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/26ft.jpg" class="card-img-top" alt="Box Truck 26ft">
                    <div class="card-body">
                        <h5 class="card-title">Box Truck 26ft</h5>
                        <p class="card-text">Spacious and powerful. Ideal for large cargo transport.</p>
                        <p class="card-text"><strong>Price:</strong> $749/week</p>

                        <!-- Button to open the booking modal -->
                        <button class="btn btn-dark" data-toggle="modal" data-target="#bookingModal">Book now</button>

                        <!-- Booking modal -->
                        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog"
                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel">Book Now</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter your email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Enter your phone number" required>
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





            <!-- Vehicle Card 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/24ft.jpg" class="card-img-top" alt="Box Truck 24ft">
                    <div class="card-body">
                        <h5 class="card-title">Box Truck 24ft</h5>
                        <p class="card-text">Versatile and reliable. Perfect for various transportation needs.</p>
                        <p class="card-text"><strong>Price:</strong> $709/week</p>
                        <!-- Button to open the booking modal -->
                        <button class="btn btn-dark" data-toggle="modal" data-target="#bookingModal">Book now</button>

                        <!-- Booking modal -->
                        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog"
                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel">Book Now</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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



            <!-- Vehicle Card 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/20ft.jpg" class="card-img-top" alt="Box Truck 20ft">
                    <div class="card-body">
                        <h5 class="card-title">Box Truck 20ft</h5>
                        <p class="card-text">Compact and fuel-efficient. Suitable for small to medium-sized loads.</p>
                        <p class="card-text"><strong>Price:</strong> $399/week</p>
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



            <!-- Vehicle Card 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/16ft.jpg" class="card-img-top" alt="Box Truck 16ft">
                    <div class="card-body">
                        <h5 class="card-title">Box Truck 16ft</h5>
                        <p class="card-text">Compact and maneuverable. Suitable for various transport needs.</p>
                        <p class="card-text"><strong>Price:</strong> $349/week</p>
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



            <!-- Vehicle Card 5 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-0">
                    <img src="images/14ft.jpg" class="card-img-top" alt="Box Truck 14ft">
                    <div class="card-body">
                        <h5 class="card-title">Box Truck 14ft</h5>
                        <p class="card-text">An affordable option for your transportation needs. Reliable and
                            efficient.
                        </p>
                        <p class="card-text"><strong>Price:</strong> $299/week</p>
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



            <!-- Vehicle Card 6 -->
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
