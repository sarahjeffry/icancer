@extends('.layouts.main')

@section('content')
<div class="smallnav">
    <table class="tabletitle" style="width: 90%;">
        <tr>
            <td>Patients</td>
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
    <div class="sides">
        <a href="/home"> <img src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
        <a class="active" href="#patients"> <img src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
        <a href="/addRecord"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
        <a href="/report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Appointment</a>
    </div>
    <br><br><br><br>
</div>


<body>
<br>
<span class="titlepage">LIST OF CANCER PATIENTS</span>
<span style="color:grey;"> &nbsp &nbsp &nbspSort by: </span>
<br><br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Created by</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($tasks as $task)
        <tr>
            <th scope="row">{{$task->user->id}}</th>
            <td>{{$task->name}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->user->name}}</td>
            <td>
                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                <br>
                <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection
