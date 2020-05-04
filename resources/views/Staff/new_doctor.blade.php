@extends('layouts.main')

@section('content')

    <div class="container">
{{--        @if($message = Session::get('success))--}}
{{--            <div class="alert-successs">--}}
{{--                <p> {{$message}} </p>--}}
{{--            </div>--}}
{{--        @endif--}}
        {{--                url('task') or route('task.store')--}}

        <form action="{{route('addStaff.store')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <h3 class="card-header">Insert Staff Details</h3>
            <div class="card-body">
                {{--                            <label class="control-label">ID</label> <input type="text" name="id" class="form-control">--}}
                <label class="control-label">Name:</label> <input type="text" name="name" class="form-control">
                <label class="control-label">NRIC:</label> <input type="text" name="NRIC" class="form-control"><br><br>
                <label class="control-label">Staff ID:</label> <input type="text" name="Staff_ID" class="form-control">
                <label class="control-label">Position:</label> <input type="text" name="Position" class="form-control">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Add Staff">
            </div>
        </form>

        <h3 class="card-header">Staff List</h3>
        <div class="card-body">
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
                                <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Staff ID</th>
                                <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Position</th>
                                <th style="text-align: center; padding: 2px 5px 2px 5px;"scope="col">Action</th>
                            </tr>
                        </thead>
                {{--@foreach ($users as $user)
                            <p>This is user {{ $user->id }}</p>
                        @endforeach--}}

                @foreach($doctors as $detail)
                    <tr class="tablepatient">
                        <th scope="row" style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->id}}</th>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Name}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->NRIC}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Staff_ID}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">{{$detail->Position}}</td>
                        <td style="text-align: center; padding: 2px 5px 2px 5px;">
{{--                               <a href="{{ route('addStaff.edit', $detail->id) }}" class="btn btn-sm btn-warning">EDIT</a>--}}
                            <a href="{{ route('addStaff.edit', $detail->id) }}" class="btn btn-sm btn-primary">
                                <button type="submit" class="btn btn-sm btn-primary">EDIT</button>
                            </a>
                            <form action="{{ route('addStaff.destroy', $detail->id) }}" method="POST">
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
    <br>
@endsection
