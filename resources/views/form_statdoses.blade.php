@extends('layouts.main')

@section('content')

    <div class="smallnav">
        <table class="tabletitle" style="width: 90%;">
            <tr>
                <td>Drug Prescription</td>
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
        <a class="active" href="#records"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
        <a href="/report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Report</a>
        <br><br><br><br>
    </div>
    <p class="watermark">iCancer</p>

    <body>
    <span class="titlepage">Stat Doses Record</span>
    <br><br>
    <div class="ptdetails">
        <span>Name:  </span> <input type="text" id="fname" class="long_output" disabled>  &nbsp &nbsp &nbsp <span>NRIC/PP:  </span><input type="text" id="NRIC" class="med_output" disabled> &nbsp &nbsp &nbsp <br>
        <span>MRN:  </span> <input type="text" id="MRN" class="med_output" disabled> &nbsp &nbsp &nbsp <span>Room No:  </span> <input type="text" id="roomno" class="short_output" disabled>&nbsp &nbsp &nbsp<span>Height:  </span> <input type="number" step="1" id="height" class="short_output" disabled> m &nbsp &nbsp &nbsp <span>Weight:  </span> <input type="number" id="weight" class="short_output" disabled> Kg &nbsp &nbsp &nbsp <br><br>
        <span>Sex:   </span> <input type="text" id="sex" class="short_output" disabled>&nbsp &nbsp &nbsp <span>Reason:  </span> <input type="text" id="reason" class="short_output" disabled> &nbsp &nbsp &nbsp <span>Allergy:  </span> <input type="text" id="allergy" class="med_output" disabled> &nbsp &nbsp &nbsp
        <span>Cancer:  </span> <input type="text" id="cancer" class="med_output" disabled><br><br>
    </div>

    <div class="filltheform">
        <span>Date prescribed:  </span> <input type="date" class="short_input"> &nbsp &nbsp &nbsp <span>Time:  </span> <input type="time" class="short_input"> &nbsp hours<br><br>
        <span>Drug name:  </span> <input type="text" class="med_input"> &nbsp &nbsp &nbsp <span>Dose:  </span> <input type="number" class="short_input"> &nbsp
        <select class="dropdowns" name="unit">
            <option value="mcg">mcg</option>
            <option value="mg">mg</option>
            <option value="g">g</option>
            <option value="ml">ml</option>
        </select>
        <button type="button" class="savebtn">SAVE</button> &nbsp&nbsp <button type="button" class="cancelbtn" onclick="cancel()">CANCEL</button>
        <a href="/addRecord"><button type="button" class="backbtn">⬅</button></a>
    </div>

@endsection
