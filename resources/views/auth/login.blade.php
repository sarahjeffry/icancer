<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>IIUM Medical Centre</title>


    <style>

        html {
            /*background-image: url("http://ai.imgur.com/HVkwOjV.jpg");*/
            background-color: #1176C6;
            position: fixed;
            top: 0;
            left: 0;
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* Preserve aspect ratio */
            min-width: 100%;
            min-height: 100%;

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        label{
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .login-btn
        {
            margin-top: 25px;
            padding: 12px 30px 10px 30px;
            background-color: royalblue;
            color: white;
            border-radius: 40px;
            font-size: 15px;
            border: 1px solid royalblue;
        }

        .login-btn:hover
        {
            margin-top: 25px;
            padding: 12px 30px 10px 30px;
            background-color: royalblue;
            color: white;
            border-radius: 40px;
            font-size: 15px;
            border: 1px solid royalblue;
            box-shadow: 0 0 0 0.2rem darkgrey;
            transition-duration: 0.4s;
        }

        .login-btn:active {
            box-shadow: 0 5px 3px darkgrey;
            transform: translateY(4px);
        }

        .label-login {
            margin-top: 20px;
            margin-bottom: 25px;
            text-align: center;
        }

        .loginDetails {
            width: 60%;
            height: 30px;
            border-radius: 30px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            color: black;
            padding-left: 25px;
            margin-top: 8px;
        }

        .label-login {
            font-family: -apple-system;
            color: #3d3e47;
        }

        .loginDetails:focus {
            color: #495057;
            background-color: #fff;
            border-color: #a1cbef;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.25);
        }

        a {
            text-decoration: none;
            font-size: small;
        }

        .outer-box {
            background-color: lightsteelblue;
            /*opacity: 0.85;*/
            padding-top: 20px;
            margin: 0 auto;
            padding-bottom: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 450px;
            border-radius: 25px;
            text-align: center;

        }
    </style>

</head>

{{--<div class="nav">--}}
{{--    <img src="https://i.imgur.com/DxiSrK9.png" alt="Clinic logo"> <span> &nbsp&nbsp IIUM MEDICAL CENTRE</span>--}}
{{--</div>--}}

    <div class="outer-box">

{{--                <div class="card-header">{{ __('Logins') }}</div>--}}

{{--                <div class="backgrounds">--}}

{{--                <center><img src="http://icons.iconarchive.com/icons/mahm0udwally/all-flat/128/User-icon.png"/> </center>--}}
                <center><img src="https://i.imgur.com/DxiSrK9.png" width="25%" height="25%" alt="Clinic logo">
                    <br>
                    <H2 style="font-family: Helvetica;"> &nbsp&nbsp IIUM MEDICAL CENTRE</H2>
                </center>
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
                            <br>
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

                        <div class="form-check" style="text-align: center;">
                            <input class="label-login" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label-login" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group row mb-0" style="text-align: center;">
                                <button type="submit" class="login-btn">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a style="justify-items: center;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>

                    </form>
{{--                </div>--}}

    </div>
</html>
