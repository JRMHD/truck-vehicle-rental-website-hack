<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Posts | Your Website Name</title>
    <!-- Add your favicon links here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
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
    </style>
</head>

<body>
    <section style="background-color: #f8f9fa;" class="ftco-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading" style="color: #3498db; font-size: 18px;">Latest Posts</span>
                    <h2 class="mb-2" style="color: #2c3e50; font-size: 32px; line-height: 1.4; font-weight: bold;">
                        Explore Our Posts</h2>
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
                                <a href="tel:+18007749450" class="btn btn-primary">Book now</a>
                                <a href="{{ url('/contact') }}" class="btn btn-secondary">Details</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <p style="font-size: 18px; color: #555;">No posts available. Contact us for more information
                            at
                            <a href="tel:+18007749450">+1 800 774 9450</a> or
                            <a href="mailto:info@example.com">info@example.com</a>.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</body>

</html>
