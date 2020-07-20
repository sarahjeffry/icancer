<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'iCancer') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <style>

        html {
            /*background-image: url("http://ai.imgur.com/HVkwOjV.jpg");*/
            background-color: #1176C6;
            position: fixed;
            top: 0;
            left: 0;
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 14px;
            /* Preserve aspect ratio */
            min-width: 100%;
            min-height: 100%;

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        .label-login {
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: #3d3e47;
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
            box-shadow: 0 0 0 0.2rem ghostwhite;
            transition-duration: 0.4s;
        }

        .login-btn:active {
            box-shadow: 0 5px 3px whitesmoke;
            transform: translateY(4px);
            border: none;
        }

        .label-login {
            margin-top: 20px;
            margin-bottom: 25px;
            text-align: center;
        }

        .loginDetails, .dropdown-select{
            width: 60%;
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            height: 30px;
            border-radius: 10px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            color: black;
            padding-left: 25px;
            margin-top: 8px;
        }

        .loginDetails:focus {
            color: #495057;
            background-color: #fff;
            border-color: #a1cbef;
            outline: 0;
            box-shadow: 0 0 0 3px dodgerblue ;
            /*box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.25);*/
        }

        .dropdown-select{
            width: 90%;
        }

        .dropdown-select:hover {
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: dodgerblue;
            background-color: whitesmoke;
            border: none;
        }

        .dropdown-select:after {
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: dodgerblue;
            background-color: whitesmoke;
            border: none;
            width: 70%;
            padding: 7px 3px;
            border-radius: 20px;
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
<div class="outer-box">
{{--    <div class="card-header">{{ __('Register iCancer') }}</div>--}}
    <h2>Register iCancer</h2>
    <br>
    <form method="POST" action="{{ route('register') }}">
        @csrf
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="loginDetails @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <br>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        <br>

        <div class="form-group row">
            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
            <br>
            <div class="col-md-6">
                <select required class="dropdown-select" name="Role" style="width: 60%;">
                    <option value="Consultant">Consultant</option>
                    <option value="Nurse">Nurse</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="StaffID" class="col-md-4 col-form-label text-md-right">{{ __('Staff ID') }}</label>
            <div class="col-md-6">
                <input id="StaffID" type="text" class="loginDetails @error('StaffID') is-invalid @enderror" name="StaffID" value="{{ old('StaffID') }}" required autocomplete="StaffID">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="loginDetails @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="loginDetails @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            <div class="col-md-6">
                <br>
                <input id="password-confirm" type="password" class="loginDetails" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

            <br>
                <button type="submit" class="login-btn">
                    {{ __('Register') }}
                </button>

    </form>
</div>

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register iCancer') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <select required name="Role" style="width: 120px;">--}}
{{--                                    <option value="Consultant">Consultant</option>--}}
{{--                                    <option value="Nurse">Nurse</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="StaffID" class="col-md-4 col-form-label text-md-right">{{ __('Staff ID') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="StaffID" type="text" class="form-control @error('StaffID') is-invalid @enderror" name="StaffID" value="{{ old('StaffID') }}" required autocomplete="StaffID">--}}

{{--                                @error('name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
</html>
