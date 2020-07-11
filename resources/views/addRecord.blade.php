@extends('layouts.main')

@section('content')

<div class="smallnav">
    <table class="tabletitle" style="width: 90%;">
        <tr>
            <td>Add Patients Record</td>
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
    <font color="#C8D6E5">Consultant</font>
    <br><br><br>
    <div class="sides">
        <a href="/home"> <img src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
        <a href="/patient"> <img src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
        <a class="active" href="addRecord"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
        <a href="/report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Appointment</a>
    </div>
    <br><br><br><br>
</div>
<p class="watermark">iCancer</p>

<body>
<br>
<span class="titlepage">Choose type of record</span>
<br><br><br><br>
<center>
    <a href="/form_statdoses"><button type="button" class="formbtn">STAT DOSES</button></a>
    <a href="/form_statdoses"><button type="button" class="formbtn">PREMEDICATION</button></a><br>
    <a href="/form_statdoses"><button type="button" class="formbtn">ORAL</button></a>
    <a href="/form_statdoses"><button type="button" class="formbtn">INJECTION</button></a><br>
    <a href="/form_statdoses"><button type="button" class="formbtn">INFUSION</button></a>
    <a href="/form_statdoses"><button type="button" class="formbtn">OPERATION/PROCEDURE</button></a><br>
    <a href="/form_statdoses"><button type="button" class="formbtn">TREATMENT CHANGES CHART</button></a>
    <a href="/form_statdoses"><button type="button" class="formbtn">TOPICAL/RECTAL/INHALATION</button></a>
</center>

<!--<a href="/patients"><button type="button" class="backbtn">⬅</button></a>-->

@endsection
