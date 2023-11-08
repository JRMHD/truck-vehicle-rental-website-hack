<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I need to Work With Hack Solutions: {{ $data['name'] }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        h1 {
            color: #0088cc;
            font-size: 24px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>I need to Work With Hack Solutions, Am: {{ $data['name'] }}</h1>
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $data['phone_number'] }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{ $data['state'] }}</td>
        </tr>
    </table>
</body>
</html>
