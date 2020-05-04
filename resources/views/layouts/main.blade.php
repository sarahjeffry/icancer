<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>IIUM Medical Centre</title>

    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('css\formstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">


</head>

<style>
    .loginDetails {
        position: fixed;
        top: 10px;
        right: 20px;
        color: white;
        text-decoration: none;
    }

</style>
@include('layouts.navbar')

<body>
<div class="loginDetails">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href=" {{ url('/') }} "> Dashboard </a>
                <a href=" {{ url('/logout') }}"> Log Out</a>
            @else
                <a href=" {{ route('login') }} "> Login </a>
                <a href=" {{ route('register') }} "> Register </a>
            @endauth
        </div>
    @endif
</div>

@yield('content')

<script src="{{ asset('public\js\script.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
