<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>IIUM Medical Centre</title>
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('css\login.css') }}">
    <style>

        .navbar {
            font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    </style>
</head>

<div class="navbar">
    <img src="https://i.imgur.com/DxiSrK9.png" alt="Clinic logo"> <span> &nbsp&nbsp IIUM MEDICAL CENTRE</span>

{{--    @guest--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--        </li>--}}
{{--        @if (Route::has('register'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endguest--}}

</div>

{{--<div class="dropdown" style="float:right;">--}}
{{--    <button class="dropbtn">Right</button>--}}
{{--    <div class="dropdown-content">--}}
{{--        <a href="#">--}}
{{--            @if(Auth::check())--}}
{{--                {{auth()->user()->name}}--}}
{{--            @endif--}}
{{--        </a>--}}
{{--        <a href="#">Link 2</a>--}}

{{--        <form action="/logout" method="post">--}}
{{--            @csrf--}}
{{--            <button class="btn btn-danger">Logout</button>--}}
{{--        </form>--}}

{{--</div>--}}

</html>
