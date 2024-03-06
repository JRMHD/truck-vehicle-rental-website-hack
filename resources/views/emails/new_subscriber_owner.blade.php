<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscriber Notification</title>
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            color: #333;
        }

        p {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Subscriber Notification</h1>
        <p>Hello,</p>
        <p>A new user has subscribed to receive newsletters. Here are the details:</p>
        <ul>
            <li><strong>Name:</strong> {{ $newSubscriber->first_name }}</li>
            <li><strong>Email:</strong> {{ $newSubscriber->email }}</li>
        </ul>
        <p>The details have been saved to the database and can be used for marketing purposes.</p>
        <p>Thank you!</p>
    </div>
</body>

</html>
