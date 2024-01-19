<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>Your go-to partner for vehicle leasing. Explore our fleet of trucks for personal and business
                        needs.</p>
                    <div class="ftco-footer-social list-unstyled mt-4">
                        <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100039978403586"><span
                                    class="icon-facebook"></span></a></li>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Info</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/about') }}" class="py-2 d-block">About</a></li>
                        <li><a href="{{ url('/contact') }}" class="py-2 d-block">Services</a></li>
                        <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Support</h2>
                    <!-- Add this where you want the links -->
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/contact') }}" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block" data-toggle="modal"
                                data-target="#paymentModal">Payment Options</a></li>
                        <li><a href="{{ url('/contact') }}" class="py-2 d-block">Contact Us</a></li>
                    </ul>

                    <!-- Add this where you want the links -->
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/contact') }}" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block" data-toggle="modal"
                                data-target="#paymentModal">Payment Options</a></li>
                        <li><a href="{{ url('/contact') }}" class="py-2 d-block">Contact Us</a></li>
                    </ul>

                    <!-- Payment Options Modal -->
                    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog"
                        aria-labelledby="paymentModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="paymentModalLabel">Payment Options</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Accepted Payment Methods:</p>
                                    <ul>
                                        <li>Visa</li>
                                        <li>Mastercard</li>
                                        <li>Discover</li>
                                        <li>Amex</li>
                                        <li>Cash App</li>
                                        <li>Zelle</li>
                                    </ul>
                                    <p class="text-danger">No personal or business Cheques!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bootstrap JS (required for modal functionality) -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
                    </script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
                    </script>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Contact</h2>
                    <div class="block-23">
                        <ul>
                            <li>
                                <a href="https://www.google.com/maps?q=901%20Dulaney%20Valley%20Rd%20Ste%20110,%20Towson,%20MD%2021204"
                                    target="_blank">
                                    <span class="icon icon-map-marker"></span>
                                    <span class="text">901 Dulaney Valley Rd Ste 110, Towson, MD 21204</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+18007749450">
                                    <span class="icon icon-phone"></span>
                                    <span class="text">+1 800 774 9450</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:cgreen@hacksolutionsusa.com">
                                    <span class="icon icon-envelope"></span>
                                    <span class="text">cgreen@hacksolutionsusa.com</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-white small">&copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> HACK SOLUTIONS USA. All rights reserved. Developed by <a
                        href="mailto:jrmqhd@gmail.com">JRMHD</a>
                </p>
            </div>
        </div>
    </div>
</footer>
