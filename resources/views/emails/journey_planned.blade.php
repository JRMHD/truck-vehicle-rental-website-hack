<!DOCTYPE html>
<html>

<head>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
            margin: 8px 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>A User Just Planned A Journey with the bellow Details </h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Starting Point:</strong> {{ $data['starting_point'] }}</p>
        <p><strong>Destination:</strong> {{ $data['destination'] }}</p>
        <p><strong>Departure Date:</strong> {{ $data['departure_date'] }}</p>
        <p><strong>Return Date:</strong> {{ $data['return_date'] }}</p>
        <p><strong>Preferred Time:</strong> {{ $data['preferred_time'] }}</p>
    </div>
</body>

</html>
