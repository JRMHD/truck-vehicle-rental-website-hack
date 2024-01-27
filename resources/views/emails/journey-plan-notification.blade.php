<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Journey Plan Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
            line-height: 1.6;
        }

        strong {
            color: #007bff;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .thank-you {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="images/hack.jpg" alt="Hacksolutionsusa" class="logo">
        <h2>New Journey Plan Submission</h2>

        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <p><strong>Pick-up & Drop-off Location:</strong> {{ $details['pickup_dropoff_location'] }}</p>
        <p><strong>Pick-up Date:</strong> {{ $details['pick_up_date'] }}</p>
        <p><strong>Pick-up Time:</strong> {{ $details['pick_up_time'] }}</p>

        <!-- Add other details as needed -->

        <p class="thank-you">Kindly Get Back to the User, Thanks.</p>
    </div>
</body>

</html>
