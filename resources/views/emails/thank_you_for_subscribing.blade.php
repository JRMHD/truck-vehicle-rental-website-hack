<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        p {
            margin-bottom: 15px;
        }

        button {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #3498db;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #2b77b2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Thank You for Subscribing</h1>
        <p>Hello {{ $newSubscriber->first_name }},</p>
        <p>Thank you for subscribing to our newsletters! We appreciate your interest.</p>
        <p>Stay tuned for exciting updates and offers.</p>
        <p>Best regards,</p>
        <p>The Hack Solutions Team</p>
        <a href="https://hacksolutionsusa.com/" target="_blank">
            <button>Visit Our Website</button>
        </a>
    </div>
</body>

</html>
