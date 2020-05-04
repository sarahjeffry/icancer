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
    <font color="#C8D6E5">Consultant</font>
    <br><br><br>
    <a href="/"> <img src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
    <a href="/add"> <img src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
    <a href="/addRecord"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
    <a class="active" href="#report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Report</a>
    <br><br><br><br>
</div>

<body>
<br>
<span class="titlepage">Title</span>
<br>
<img src="http://icons.iconarchive.com/icons/iconsmind/outline/256/File-Download-icon.png" class="printicon" alt="download" onclick="generatePDF()">
<img src="http://icons.iconarchive.com/icons/iconsmind/outline/256/Printer-icon.png" class="printicon" alt="print" onclick="printicon()">
<br><br><br>
<div id="report">
    <h1>THIS IS REPORT SECTION</h1>
</div>
</body>

@endsection
