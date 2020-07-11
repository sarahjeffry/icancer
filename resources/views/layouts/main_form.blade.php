<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>IIUM Medical Centre</title>


    <link rel="stylesheet" href="{{ asset('css\formstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap4.min.css') }}">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<div class="smallnav">
    <table class="tabletitle" style="width: 90%;">
        <tr>
            <td>Data Visualisation</td>
            <!--CLOCK & DATE   <span id="date"></span> -->
            <td class="alignRight"><body onload="startTime()"><span id="clock"></span></td>
        </tr>
    </table>
</div>
@include('layouts.navbar')
<!-- The sidebar -->
<div class="sidebar" align="center">
    <br><br><br>
    <img src="https://i.imgur.com/07FaaV4.png" class="idlogo" alt="ID_picture">
    <br>
    <!--CONSULTANT OR NURSE-->
    <font color="#C8D6E5">Consultant</font>
    <br><br><br>
    <a href="\"> <img src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
    <a href="\patients"> <img src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
    <a class="active" href="#"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
    <a href="\report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Appointment</a>
    <br><br><br><br>
</div>
<p class="watermark">iCancer</p>

<body>


<div class="loginDetails">
{{--    <div class="dropdown" style="float:right;">--}}
{{--        @if (Route::has('login'))--}}
{{--            <button class="dropbtn">Staff_ID</button>--}}
{{--            <div class="dropdown-content">--}}
{{--                <a href=" {{ url('/logout') }}"> Log Out</a>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}

    <div class="loginDetails">
        <div class="dropdown" style="float:right;">
            @if (Route::has('login'))
                <button class="dropbtn">PROFILE</button>
                <div class="dropdown-content">
{{--                    <a href=" {{ url('/') }} "> ID </a>--}}
                    <span style="float: right;">ID</span> <br>
                    <a href=" {{ url('/logout') }}" style="float: right;"> Log Out</a>
                </div>
            @endif
        </div>
    </div>
</div>



@yield('content')

<script src="{{ asset('public\js\script.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
