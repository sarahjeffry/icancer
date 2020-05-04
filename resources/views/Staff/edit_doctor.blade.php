@extends('layouts.main')

@section('content')

    @if(count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
    @endif

    <form method="POST" action=" {{action('DoctorController@update, $id)}} ">
        {{csrf_field()}}

        <input type="hidden" name="_method" class="form-control" value="PATCH"/>
        <label class="control-label">Name:</label>
        <input type="text" name="Name" class="form-control" value="{{$doctor->Name}}">
        <label class="control-label">NRIC:</label>
        <input type="text" name="NRIC" class="form-control" value="{{$doctor->NRIC}}">
        <label class="control-label">Staff ID:</label>
        <br><br>
        <input type="text" name="Staff_ID" class="form-control" value="{{$doctor->Staff_ID}}">
        <label class="control-label">Position:</label>
        <input type="text" name="Position" class="form-control" value="{{$doctor->Position}}">
        <br><br>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit"/>
        </div>
    </form>

@endsection
