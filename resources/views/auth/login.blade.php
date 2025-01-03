<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #685752;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            display: flex;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 70%;
            max-width: 1000px;
            height: 70%;
        }

        .left {
            background-color: #8EB486;
            color: white;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .left h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }

        .left p {
            margin-top: 10px;
            font-size: 14px;
        }

        .right {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
        }

        .btn {
            background-color: #8EB486;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #997c7070;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .forgot-password a {
            color: #000000;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left Section -->
        <div class="left">
            <img class="img-thumbanil" src="{{Vite::asset('resources\images\farm.jpg') }}" alt="image"
                style="max-width: 200px; margin-bottom: 50px;">
            <h1>AlterKindy Farm</h1>
            <p>"Semua Kebutuhan Peternakan dalam Satu Genggaman."</p>
        </div>

        <!-- Right Section -->
        <div class="right">
            <h2>Hello, Farm Buddies!</h2>
            <p>Where Farming Meets Innovation.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email address" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
