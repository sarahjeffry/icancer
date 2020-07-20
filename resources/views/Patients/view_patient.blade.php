@extends('layouts.main_patient')

@section('content')

    <table style="border: none;">
        {{--            url('task') or route('task.store')--}}
        <td class="Left">
            <h3 class="card-header">Details of {{$patient->Name}}</h3>
                <table class="viewtable">
                    <tr>
                        <th>Name:</th>
                        <td>{{$patient->Name}}</td>
                    </tr>
                    <tr>
                        <th>NRIC:</th>
                        <td>{{$patient->NRIC}}</td>
                    </tr>
                    <tr>
                        <th>MRN:</th>
                        <td>{{$patient->MRN}}</td>
                    </tr>
                    <tr>
                        <th>Sex:</th>
                        <td>{{$patient->Sex}}</td>
                    </tr>
                    <tr>
                        <th>Height:</th>
                        <td>{{$patient->Height}}</td>
                    </tr>
                    <tr>
                        <th>Weight:</th>
                        <td>{{$patient->Weight}}</td>
                    </tr>
                    <tr>
                        <th>Cancer Type:</th>
                        <td>{{$patient->Type}}</td>
                    </tr>
                    <tr>
                        <th>Smoking:</th>
                        <td>{{$patient->Smoking}}</td>
                    </tr>
                </table>
        </td>
            <br>

        <td class="Right" style="padding-left: 60px;">
            <h3 class="card-header">Treatment Record</h3>

                <table class="viewtable">
                    <tr>
                        <th>Name:</th>
                        <td>{{$patient->Name}}</td>
                    </tr>
                    <tr>
                        <th>NRIC:</th>
                        <td>{{$patient->NRIC}}</td>
                    </tr>
                    <tr>
                        <th>MRN:</th>
                        <td>{{$patient->MRN}}</td>
                    </tr>
                    <tr>
                        <th>Sex:</th>
                        <td>{{$patient->Sex}}</td>
                    </tr>
                    <tr>
                        <th>Height:</th>
                        <td>{{$patient->Height}}</td>
                    </tr>
                    <tr>
                        <th>Weight:</th>
                        <td>{{$patient->Weight}}</td>
                    </tr>
                    <tr>
                        <th>Cancer Type:</th>
                        <td>{{$patient->Type}}</td>
                    </tr>
                    <tr>
                        <th>Smoking:</th>
                        <td>{{$patient->Smoking}}</td>
                    </tr>
                </table>
        </td>
                <a href="/patients"><button type="button" class="backbtn">⬅</button></a>
    </table>
    <br>

    <a href="{{ route('addTreatment.index', $patient->id) }}">
        <button type="submit" class="AddNewbtn">Add Treatment Record</button>
    </a>

@endsection
