<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>IIUM Medical Centre</title>


    <style>

        html {
            background-image: url("http://ai.imgur.com/HVkwOjV.jpg");
            position: fixed;
            top: 0;
            left: 0;

            /* Preserve aspect ratio */
            min-width: 100%;
            min-height: 100%;

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .login-btn
        {
            margin-top: 25px;
            width: 70%;
            height: 35px;
            padding: 10px;
            background-color: royalblue;
            color: white;
            border-radius: 10px;
        }

        .label-login {
            margin-top: 20px;
            margin-bottom: 25px;
            text-align: center;
        }

        .loginDetails {
            width: 60%;
            height: 30px;

            border-radius: 5px;
            border: 1px solid dimgray;
            background-color: whitesmoke;
            color: black;
            padding-left: 15px;
            margin: auto;
        }

        .loginDetails:focus {
            border: 2px solid dodgerblue;
            background-color: whitesmoke;
            border-radius: 5px;
        }

        .outer-box {
            background-color: ghostwhite;
            opacity: 0.85;
            padding-top: 20px;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 450px;
            height: 480px;
            border-radius: 25px;
            text-align: center;

        }

        /* Style the navigation bar */
        .nav {
            width: 100%;
            display: flex;
            align-items:center;
            background-color: #1176C6;
            font-family: calibri;
            font-size: 35px;
            color: white;
            position: fixed;
            padding-left: 130px;
            top: 0;
            left: 0;
            height: 70px;
        }

        .nav img {
            width: 50px;
            height: 54px;
        }
    </style>

</head>

<div class="nav">
    <img src="https://i.imgur.com/DxiSrK9.png" alt="Clinic logo"> <span> &nbsp&nbsp IIUM MEDICAL CENTRE</span>
</div>

    <div class="outer-box">
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Logins') }}</div>--}}

{{--                <div class="backgrounds">--}}

                <center><img src="http://icons.iconarchive.com/icons/mahm0udwally/all-flat/128/User-icon.png"/> </center>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" >
                            <label for="email" class="label-login">{{ __('E-mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="loginDetails @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <br>
                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <br><br>
                            <label for="password" class="label-login">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="loginDetails @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <br>
                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check" style="text-align: center;">
                                    <input class="label-login" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="label-login" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="text-align: center;">
                                <button type="submit" class="login-btn">
                                    {{ __('Login') }}
                                </button>
                                <br><br>
                                @if (Route::has('password.request'))
                                    <a style="justify-items: center;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
{{--                </div>--}}
            </div>
        </div>
    </div>
</html>
