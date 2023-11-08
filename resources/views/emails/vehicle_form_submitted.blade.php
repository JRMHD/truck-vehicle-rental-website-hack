<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HACK SOLUTIONS USA CLIENT</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        h2 {
            color: #007BFF;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>HACK SOLUTIONS USA CLIENT</h1>
    </header>
    <section>
        <h2>A User is Looking for a Vehicle with bellow Details</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Vehicle Type:</strong> {{ $data['vehicle_type'] }}</p>
        <p><strong>Price Range:</strong> {{ $data['price_range'] }}</p>
    </section>
</body>

</html>
