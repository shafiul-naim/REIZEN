<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">

    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <title>Login Form</title>
</head>
<body>
    <section class="loginform-area">
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="loginBox">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="loginContainer">
                <div class="loginForm">
                    <h2>login form</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="inputBox">
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                    <p class="forget">Don't have an account?<a href="{{ route('register') }}">Register</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>