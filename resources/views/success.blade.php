<div class="container mt-5">

    <div class="d-flex justify-content-center">

        <div class="text-center" style="max-width: 550px">

            <div class="mb-4">
                <span style="font-size: 60px"><i class="fas fa-check-circle text-success"></i></span>
            </div>

            <h2 class="font-weight-bold" style="font-size: 38px">Booking <span class="text-primary">Successful!</span></h2>

            <p class="text-muted mb-4" style="font-size: 18px">{{ $message }}</p>

            <a href="{{ route('welcome') }}" class="btn btn-primary btn-lg rounded-pill px-4">
                Continue <i class="fas fa-arrow-right ms-3"></i>
            </a>

        </div>

    </div>

</div>
