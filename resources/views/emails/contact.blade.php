<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact for Help</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #333;
            padding: 10px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #0088cc;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
            margin-right: 5px;
        }

        span {
            display: inline-block;
            color: #555;
        }
    </style>
</head>

<body>
    <div>
        <h1>Contact for Help</h1>
        <ul>
            <li>
                <strong>Name:</strong>
                <span>{{ $request['name'] }}</span>
            </li>
            <li>
                <strong>Email:</strong>
                <span>{{ $request['email'] }}</span>
            </li>
            <li>
                <strong>Subject:</strong>
                <span>{{ $request['subject'] }}</span>
            </li>
            <li>
                <strong>Message:</strong>
                <span>{{ $request['message'] }}</span>
            </li>
        </ul>
    </div>
</body>

</html>
