@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{--                url('task') or route('task.store')--}}
                <form action="{{route('addPatient.update', $detail->MRN)}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}


                    <div class="card">
                        <div class="card-header">Edit {{ $detail->Name }} Details</div>
                        <div class="card-body">
                            {{--                            <label class="control-label">ID</label> <input type="text" name="id" class="form-control">--}}
                            <label class="control-label">Name</label> <input type="text" name="name" class="form-control"> &nbsp;&nbsp;&nbsp;
                            <label class="control-label">NRIC</label> <input type="text" name="NRIC" class="form-control">&nbsp;&nbsp;&nbsp;
                            <label class="control-label">MRN</label> <input type="text" name="MRN" class="form-control">&nbsp;&nbsp;&nbsp;
                            <label class="control-label">Sex</label> <input type="text" name="Sex" class="form-control">
                            <label class="control-label">Smoking</label> <input type="text" name="Smoking" class="form-control"><br>
                            <label class="control-label">Height</label> <input type="text" name="Height" class="form-control">&nbsp;&nbsp;&nbsp;
                            <label class="control-label">Weight</label> <input type="text" name="Weight" class="form-control">&nbsp;&nbsp;&nbsp;
                            <label class="control-label">BMI</label> <input type="text" name="BMI" class="form-control">&nbsp;&nbsp;&nbsp;
                            <label class="control-label">Cancer Type</label> <input type="text" name="Cancer" class="form-control"><br>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
                <br><br>

            </div>
        </div>
    </div>

@endsection
