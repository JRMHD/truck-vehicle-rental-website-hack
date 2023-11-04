<!DOCTYPE html>
<html>
<head>
    <title>A User Is Intrested in working with You</title>
</head>
<body>
    <h1 style="color: #333; font-family: Arial, sans-serif; font-size: 24px; margin-bottom: 10px;">A User Is Intrested in working with You</h1>
    <table style="font-family: Arial, sans-serif; font-size: 16px;">
        <tr>
            <td style="padding: 5px 10px; text-align: right; font-weight: bold;">Name:</td>
            <td style="padding: 5px 10px;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding: 5px 10px; text-align: right; font-weight: bold;">Email:</td>
            <td style="padding: 5px 10px;">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td style="padding: 5px 10px; text-align: right; font-weight: bold;">Phone Number:</td>
            <td style="padding: 5px 10px;">{{ $data['phone_number'] }}</td>
        </tr>
        <tr>
            <td style="padding: 5px 10px; text-align: right; font-weight: bold;">State:</td>
            <td style="padding: 5px 10px;">{{ $data['state'] }}</td>
        </tr>
    </table>
</body>
</html>
