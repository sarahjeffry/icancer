@extends('layouts.main')

@section('content')

    <div class="container">
{{--            url('task') or route('task.store')--}}
        <form action="{{route('addPatient.store')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card">
                <h3 class="card-header">Insert Patient Details</h3>
                <div class="card-body">
{{--            <label class="control-label">ID</label> <input type="text" name="id" class="form-control">--}}
                    <label class="control-label">Name:</label> <input type="text" name="name" class="form-control"> &nbsp;&nbsp;&nbsp;
                    <label class="control-label">NRIC:</label> <input type="text" name="NRIC" class="form-control">&nbsp;&nbsp;&nbsp;
                    <label class="control-label">Sex:</label> <input type="text" name="Sex" class="form-control">&nbsp;<br>&nbsp;<br>
                    <label class="control-label">MRN:</label> <input type="text" name="MRN" class="form-control">
                    <label class="control-label">Height:</label> <input type="text" name="Height" class="form-control">&nbsp;&nbsp;
                    <label class="control-label">Weight:</label> <input type="text" name="Weight" class="form-control">&nbsp;<br><br>
                    <label class="control-label">Cancer Type:</label> <input type="text" name="Cancer" class="form-control">
                    <label class="control-label">BMI:</label> <input type="text" name="BMI" class="form-control">&nbsp;&nbsp;&nbsp;
                    <label class="control-label">Smoking:</label> <input type="text" name="Smoking" class="form-control">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>
            </div>
        </form>
        <br><br>

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
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">ID</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Name</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">NRIC</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">MRN</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Sex</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Height</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Weight</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">BMI</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Cancer Type</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Smoking?</th>
                        <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Action</th>
                    </tr>
                </thead>

                            {{--@foreach ($users as $user)
                                <p>This is user {{ $user->id }}</p>
                            @endforeach--}}
                @foreach($patients as $detail)
                    <tr class="tablepatient">
                        <th scope="row" style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->id}}</th>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Name}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->NRIC}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->MRN}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Sex}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Height}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Weight}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->BMI}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Cancer}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Smoking}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">
                            <a href="{{ route('addPatient.edit', $detail->id) }}" class="btn btn-sm btn-primary">
                                <button type="submit" class="btn btn-sm btn-primary">EDIT</button>
                            </a>
{{--                            <button type="submit" class="btn btn-sm btn-primary">EDIT</button>--}}
                            <form action="{{ route('addPatient.destroy', $detail->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <br><br>
@endsection
