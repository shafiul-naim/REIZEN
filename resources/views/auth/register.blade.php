<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">


    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <title>Registration Form</title>
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
                    <h2>registration form</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="inputBox">
                            <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBox">
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                    <p class="forget">Already have an account?<a href="{{ route('login') }}">Log In</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>