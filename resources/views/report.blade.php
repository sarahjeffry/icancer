@extends('layouts.main')

@section('content')

<div class="smallnav">
    <table class="tabletitle" style="width: 90%;">
        <tr>
            <td>Patients Report</td>
            <!--CLOCK & DATE   <span id="date"></span> -->
            <td class="alignRight"><body onload="startTime()"><span id="clock"></span></td>
        </tr>
    </table>
</div>

<!-- The sidebar -->
<div class="sidebar" align="center">
    <br><br><br>
    <img src="https://i.imgur.com/07FaaV4.png" class="idlogo" alt="ID_picture">
    <br>
    <!--CONSULTANT OR NURSE-->
    <span class="username">Consultant</span>
    <br><br><br>
    <a href="/"> <img alt="sidebar" src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
    <a href="/addPatient"> <img alt="sidebar" src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
    <a href="/addRecord"> <img alt="sidebar" src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
    <a class="active" href="#"> <img alt="sidebar" src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Report</a>
    <br><br><br><br>
</div>

<body>
<br>
<span class="titlepage">List of all Patients in IIUM Medical Centre, Kuantan </span>
<br>
<img src="http://icons.iconarchive.com/icons/iconsmind/outline/256/File-Download-icon.png" class="printicon" alt="download" onclick="generatePDF()">
<img src="http://icons.iconarchive.com/icons/iconsmind/outline/256/Printer-icon.png" class="printicon" alt="print" onclick="printicon()">
<br><br><br>

<div class="card">
{{--    @if($message = Session::get('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <p> {{$message}} </p>--}}
{{--        </div>--}}
{{--    @endif--}}

    <table class="tableDetail">
        <thead>
        <tr>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">ID</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Name</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">NRIC</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">MRN</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Sex</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Height</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Weight</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">BMI</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Cancer Type</th>
            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Smoking?</th>
        </tr>
        </thead>

        {{--@foreach ($users as $user)
            <p>This is user {{ $user->id }}</p>
        @endforeach--}}
        @foreach($patients as $patient)
            <tr class="tablepatient">
                <th scope="row" style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['id']}}</th>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['Name']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['NRIC']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail['MRN']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['Sex']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['Height']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['Weight']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['BMI']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['Cancer']}}</td>
                <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient['Smoking']}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>

@endsection
