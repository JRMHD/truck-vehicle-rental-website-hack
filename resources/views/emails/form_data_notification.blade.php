<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Notification</title>
    <style>
        /* Add your modern styling here */
    </style>
</head>

<body>
    <div>
        <h2>Form Data Notification</h2>
        <p>Hello,</p>
        <p>The following user has submitted their form data:</p>
        <ul>
            <li><strong>Name:</strong> {{ $userName }}</li>
            <li><strong>Email:</strong> {{ $userEmail }}</li>
            <li><strong>MC Number:</strong> {{ $mcNumber }}</li>
            <li><strong>DOT:</strong> {{ $dot }}</li>
            <li><strong>Additional Information:</strong> {{ $additionalInfo }}</li>
        </ul>
    </div>
</body>

</html>
