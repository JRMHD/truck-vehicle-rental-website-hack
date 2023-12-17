<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 40px;
            border-radius: 10px;
        }

        h2 {
            color: #007bff;
            margin-bottom: 30px;
            font-size: 24px;
            text-align: center;
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
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Reset Password</h2>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button type="submit">Send Password Reset Link</button>
        </form>
    </div>
</div>

</body>
</html>
