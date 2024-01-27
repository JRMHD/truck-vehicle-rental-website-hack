<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }

        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            padding: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>New Booking Request</h1>
        </header>

        <section>
            <p>Hi there,</p>
            <p>We've received a new booking request with the following details:</p>

            <ul>
                <li><strong>Name:</strong> {{ $details['name'] }}</li>
                <li><strong>Email:</strong> {{ $details['email'] }}</li>
                <li><strong>Phone:</strong> {{ $details['phone'] }}</li>
                <li><strong>Vehicle Type:</strong> {{ $details['vehicle_type'] }}</li>
            </ul>

            <p>We appreciate your business!</p>
        </section>

        <footer>
            &copy; {{ date('Y') }} HACK SOLUTIONS USA
        </footer>
    </div>
</body>

</html>
