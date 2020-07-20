@extends('layouts.main_form')

@section('content')

    <div class="smallnav">
        <table class="tabletitle" style="width: 90%;">
            <tr>
                <td>Drug Prescription</td>
            </tr>
        </table>
    </div>

    <body>
    <span class="titlepage">Stat Doses Record</span>
    <br><br>
{{--    <form action="{{route('addTreatment.store')}}" method="POST" class="form-horizontal">--}}
    <form>
        {{ csrf_field() }}
{{--    <div class="ptdetails">--}}
{{--        <span>Name:  </span> <input type="text" value="{{ $patient->Name }}" id="fname" class="long_output" disabled>  &nbsp &nbsp &nbsp <span>NRIC/PP:  </span><input type="text" id="NRIC" class="med_output" disabled> &nbsp &nbsp &nbsp <br>--}}
{{--        <span>MRN:  </span> <input type="text" id="MRN" value="{{ $patient->MRN }}" class="med_output" disabled> &nbsp &nbsp &nbsp <span>Room No:  </span> <input type="text" id="roomno" class="short_output" disabled>&nbsp &nbsp &nbsp<span>Height:  </span> <input type="number" step="1" id="height" class="short_output" disabled> m &nbsp &nbsp &nbsp <span>Weight:  </span> <input type="number" id="weight" class="short_output" disabled> Kg &nbsp &nbsp &nbsp <br><br>--}}
{{--        <span>Sex:   </span> <input type="text" id="sex" value="{{ $patient->Sex }}" class="short_output" disabled>&nbsp &nbsp &nbsp <span>Reason:  </span> <input type="text" id="reason" class="short_output" disabled> &nbsp &nbsp &nbsp <span>Allergy:  </span> <input type="text" id="allergy" class="med_output" disabled> &nbsp &nbsp &nbsp--}}
{{--        <span>Cancer:  </span> <input type="text" value="{{ $patient->Type }}" id="cancer" class="med_output" disabled><br><br>--}}
{{--    </div>--}}

        <div class="ptdetails">
            <span>Name:  </span> <input type="text" value="Sabariah binti Ishak" id="fname" class="long_output" disabled>  &nbsp &nbsp &nbsp <span>NRIC/PP:  </span><input type="text" id="NRIC" value="920401-10-3244" class="med_output" disabled> &nbsp &nbsp &nbsp <br><br>
            <span>MRN:  </span> <input type="text" id="MRN" value="FM34223" class="med_output" disabled> &nbsp &nbsp &nbsp <span>Room No:  </span> <input type="text" id="roomno" value="B5-34" class="short_output" disabled>&nbsp &nbsp &nbsp<span>Height:  </span> <input type="number" step="1" id="height" value="1.65" class="short_output" disabled> m &nbsp &nbsp &nbsp <span>Weight:  </span> <input type="number" id="weight" value="54.6" class="short_output" disabled> Kg &nbsp &nbsp &nbsp <br><br>
            <span>Sex:   </span> <input type="text" id="sex" value="Female" class="short_output" disabled>&nbsp &nbsp &nbsp <span>Reason:  </span> <input type="text" id="reason" value="W" class="short_output" disabled> &nbsp &nbsp &nbsp <span>Allergy:  </span> <input type="text" value="G6PD" id="allergy" class="med_output" disabled> &nbsp &nbsp &nbsp
            <span>Cancer:  </span> <input type="text" value="Breast" id="cancer" class="med_output" disabled><br><br>
        </div>

    <div class="filltheform">
        <span>Date prescribed:  </span> <input required type="date" class="short_input"> &nbsp &nbsp &nbsp <span>Time:  </span> <input type="time" class="short_input"> &nbsp hours<br><br>
        <span>Drug name:  </span> <input required type="text" class="med_input"> &nbsp &nbsp &nbsp <span>Dose:  </span> <input type="number" class="short_input"> &nbsp
        <select required class="dropdowns" name="unit">
            <option value="mcg">mcg</option>
            <option value="mg">mg</option>
            <option value="g">g</option>
            <option value="ml">ml</option>
        </select>
        <button type="button" class="savebtn">SAVE</button> &nbsp&nbsp <button type="button" class="cancelbtn" onclick="cancel()">CANCEL</button>
        <a href="/addRecord"><button type="button" class="backbtn">⬅</button></a>
    </div>
    </form>
@endsection
