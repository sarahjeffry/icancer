@extends('layouts.main_patient')

@section('content')

    <div class="container">
{{--            url('task') or route('task.store')--}}
        <form action="{{route('addPatient.store')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card">
                <h3 class="card-header">Insert Patient Details</h3>
                <div class="card-body">
{{--            <label class="control-label">ID</label> <input type="text" name="id" style="width: 50px;">--}}
                    <label class="control-label">Name:</label> <input type="text" required name="name" style="width: 300px;" > &nbsp;&nbsp;&nbsp;
                    <label class="control-label">NRIC:</label> <input type="text" required name="NRIC" style="width: 200px;">&nbsp;&nbsp;&nbsp;
                    <label class="control-label">Sex:</label> <input type="text" required name="Sex" style="width: 60px;">&nbsp;<br><br>
                    <label class="control-label">MRN:</label> <input type="text" required name="MRN" style="width: 150px;">
                    <label class="control-label">Height:</label> <input type="text" required name="Height" style="width: 50px;">&nbsp;
                    <label class="control-label">Weight:</label> <input type="text" required name="Weight" style="width: 50px;">
                    <label class="control-label">Cancer Type:</label> <input type="text" required name="Type" style="width: 90px;">
                    <label class="control-label">BMI:</label> <input type="text" required name="BMI" style="width: 50px;">&nbsp;&nbsp;&nbsp;
                    <label class="control-label">Smoking:</label> <input type="text" required name="Smoking" style="width: 40px;">
                    <br><br>
                    <input type="submit" class="AddNewbtn" value="Add">
                </div>
            </div>
        </form>


        <div class="card">
            <h3 class="card-header">Patient List</h3>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

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
                        <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col" colspan="2">Action</th>
                    </tr>
                </thead>

                            {{--@foreach ($users as $user)
                                <p>This is user {{ $user->id }}</p>
                            @endforeach--}}
                @foreach($patients as $patient)
                    <tr class="">
                        <th scope="row" style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->id}}</th>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->Name}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->NRIC}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->MRN}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->Sex}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->Height}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->Weight}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->BMI}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->Type}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$patient->Smoking}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">
                            <a href="{{ route('addPatient.edit', $patient->id) }}">
                                <button type="submit" class="editbtn">EDIT</button>
                            </a>
                        </td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">
                            <form action="{{ route('addPatient.destroy', $patient->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="deletebtn">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </div>

    <br><br>
@endsection
