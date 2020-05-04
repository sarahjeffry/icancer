<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>IIUM Medical Centre</title>

</head>

<div class="navbar">
    <img src="https://i.imgur.com/DxiSrK9.png" alt="Clinic logo"> <span> &nbsp&nbsp IIUM MEDICAL CENTRE</span>
</div>

<div class="smallnav">
    <table class="tabletitle" style="width: 90%;">
        <tr>
            <td>Data Visualisation</td>
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
    <a class="active" href="#"> <img src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
    <a href="\patients"> <img src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
    <a href="\addRecord"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
    <a href="\report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Report</a>
    <br><br><br><br>
</div>
<p class="watermark">iCancer</p>

</html>
