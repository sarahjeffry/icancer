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
                    <label class="control-label">Name:</label> <input type="text" name="name" style="width: 300px;"> &nbsp;&nbsp;&nbsp;
                    <label class="control-label">NRIC:</label> <input type="text" name="NRIC" style="width: 200px;">&nbsp;&nbsp;&nbsp;
                    <label class="control-label">Sex:</label> <input type="text" name="Sex" style="width: 60px;">&nbsp;<br><br>
                    <label class="control-label">MRN:</label> <input type="text" name="MRN" style="width: 150px;">
                    <label class="control-label">Height:</label> <input type="text" name="Height" style="width: 50px;">&nbsp;
                    <label class="control-label">Weight:</label> <input type="text" name="Weight" style="width: 50px;">
                    <label class="control-label">Cancer Type:</label> <input type="text" name="Cancer" style="width: 90px;">
                    <label class="control-label">BMI:</label> <input type="text" name="BMI" style="width: 50px;">&nbsp;&nbsp;&nbsp;
                    <label class="control-label">Smoking:</label> <input type="text" name="Smoking" style="width: 40px;">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Add">
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

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
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
{{--                            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Action</th>--}}
                        </tr>
                        </thead>
                        <tfoot>
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
{{--                            <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Action</th>--}}
                        </tr>
                        </tfoot>

                        <tbody>
                        <tr>
                            <td>123</td>
                            <td>Tiger Nixon</td>
                            <td>990421-04-2131</td>
                            <td>MZ31233</td>
                            <td>Male</td>
                            <td>1.78</td>
                            <td>65.7</td>
                            <td>21</td>
                            <td>Lung</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Tiger Nixon</td>
                            <td>990421-04-2131</td>
                            <td>MZ31233</td>
                            <td>Male</td>
                            <td>1.78</td>
                            <td>65.7</td>
                            <td>21</td>
                            <td>Lung</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Tiger Nixon</td>
                            <td>990421-04-2131</td>
                            <td>MZ31233</td>
                            <td>Male</td>
                            <td>1.78</td>
                            <td>65.7</td>
                            <td>21</td>
                            <td>Lung</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Tiger Nixon</td>
                            <td>990421-04-2131</td>
                            <td>MZ31233</td>
                            <td>Male</td>
                            <td>1.78</td>
                            <td>65.7</td>
                            <td>21</td>
                            <td>Lung</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Tiger Nixon</td>
                            <td>990421-04-2131</td>
                            <td>MZ31233</td>
                            <td>Male</td>
                            <td>1.78</td>
                            <td>65.7</td>
                            <td>21</td>
                            <td>Lung</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Tiger Nixon</td>
                            <td>990421-04-2131</td>
                            <td>MZ31233</td>
                            <td>Male</td>
                            <td>1.78</td>
                            <td>65.7</td>
                            <td>21</td>
                            <td>Lung</td>
                            <td>Yes</td>
                        </tr>
{{--            <table class="tableDetail">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">ID</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Name</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">NRIC</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">MRN</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Sex</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Height</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Weight</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">BMI</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Cancer Type</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Smoking?</th>--}}
{{--                    <th style="text-align: center; padding: 2px 5px 2px 5px;" scope="col">Action</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}

                {{--@foreach ($users as $user)
                    <p>This is user {{ $user->id }}</p>
                @endforeach--}}
{{--                @foreach($patients as $detail)--}}
{{--                    <tr class="tablepatient">--}}
{{--                        <th scope="row" style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->id}}</th>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Name}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->NRIC}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->MRN}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Sex}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Height}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Weight}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->BMI}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Cancer}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Smoking}}</td>--}}
{{--                        <td style="text-align: center; padding: 2px 5px 2px 5px;">--}}
{{--                            <a href="{{ route('addPatient.edit', $detail->id) }}">--}}
{{--                                <button type="submit" class="btn btn-sm btn-primary">EDIT</button>--}}
{{--                            </a>--}}
{{--                                                        <button type="submit" class="btn btn-sm btn-primary">EDIT</button>--}}
{{--                            <form action="{{ route('addPatient.destroy', $detail->id) }}" method="POST">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('DELETE') }}--}}
{{--                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
            </table>
        </div>
    </div>

    <br><br>
@endsection
