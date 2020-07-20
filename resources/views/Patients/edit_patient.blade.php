@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{--                url('task') or route('task.store')--}}
                <form action="{{route('addPatient.update', $patient->id)}}" method="PATCH" class="form-horizontal">
                    {{ csrf_field() }}


                    <div class="card">
                        <div class="card-header">Edit {{ $patient->Name }} Details</div>
                        <br><br>
                        <div class="card-body">
                            {{--                            <label class="control-label">ID</label> <input type="text" name="id" class="form-control">--}}

                            <form action="{{ route('addPatient.update', $patient->id) }}" method="PATCH">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <label class="control-label">Name:</label> <input type="text" name="name" style="width: 300px;" value="{{ $patient->Name }}"> &nbsp;&nbsp;&nbsp;
                                <label class="control-label">NRIC:</label> <input type="text" name="NRIC" style="width: 200px;" value="{{ $patient->NRIC }}">&nbsp;&nbsp;&nbsp;
                                <label class="control-label">Sex:</label> <input type="text" name="Sex" style="width: 60px;" value="{{ $patient->Sex }}"><br><br>
                                <label class="control-label">MRN:</label> <input type="text" name="MRN" style="width: 150px;" value="{{ $patient->MRN }}">
                                <label class="control-label">Height:</label> <input type="text" name="Height" style="width: 50px;" value="{{ $patient->Height }}">&nbsp;
                                <label class="control-label">Weight:</label> <input type="text" name="Weight" style="width: 50px;" value="{{ $patient->Weight }}">
                                <label class="control-label">Cancer Type:</label> <input type="text" name="Cancer" style="width: 90px;" value="{{ $patient->Type }}">
                                <label class="control-label">BMI:</label> <input type="text" name="BMI" style="width: 50px;" value="{{ $patient->BMI }}">&nbsp;&nbsp;&nbsp;
                                <label class="control-label">Smoking:</label> <input type="text" name="Smoking" style="width: 40px;" value=" {{ $patient->Smoking }}">
                                <br><br>

                                <input type="submit" value="UPDATE" class="editbtn"></input>

                            </form>
                        </div>
                    </div>
                </form>
                <br><br>

            </div>
        </div>
    </div>

    <a href="{{route('addPatient.show', $patient->id)}}"><button type="button" class="backbtn">⬅</button></a>

@endsection
