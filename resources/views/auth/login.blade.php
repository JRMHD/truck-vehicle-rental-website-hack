<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .form-container {
            background: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            color: #007bff;
            margin-bottom: 30px;
            font-size: 24px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #495057;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .checkbox-container input {
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
            margin-top: 10px;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
               value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span style="color: red; font-weight: bold;">{{ $message }}</span>
        @enderror

        <label for="password">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password">

        @error('password')
        <span style="color: red; font-weight: bold;">{{ $message }}</span>
        @enderror

        <div class="checkbox-container">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember" style="font-size: 14px;">Remember Me</label>
        </div>

        <button type="submit">Login</button>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" style="font-size: 14px;">Forgot Password</a>
        @endif
    </form>

    <a href="{{ route('register') }}" style="font-size: 16px; color: #555;">Create an Account</a>
</div>

</body>
</html>
