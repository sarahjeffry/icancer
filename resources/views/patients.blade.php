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
    <a href="/"> <img src="https://i.imgur.com/rpW1zxn.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Visualisation</a>
    <a class="active" href="#patients"> <img src="https://i.imgur.com/fKXQ4Bi.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Patients</a>
    <a href="/addRecord"> <img src="https://i.imgur.com/aOTh4sZ.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Forms</a>
    <a href="/report"> <img src="https://i.imgur.com/OMvyX1Y.png" class="icons" >&nbsp &nbsp &nbsp &nbsp Report</a>
    <br><br><br><br>
</div>


<body>
<br>
<span class="titlepage">LIST OF CANCER PATIENTS</span>
<span style="color:grey;"> &nbsp &nbsp &nbspSort by: </span>
<br><br>
<!--<div class="tablepatient" >
    <table>
        <tr>
            <th>NAME</th>
            <th>NRIC</th>
            <th>MRN</th>
            <th>ROOM NO</th>
            <th>HEIGHT</th>
            <th>WEIGHT</th>
            <th>SEX</th>
        </tr>
        <tr>
            <td>Muhammad Ali</td>
            <td>870301-10-2101</td>
            <td>AZ43231</td>
            <td>3B-25</td>
            <td>170.4</td>
            <td>70.0</td>
            <td>M</td>
            <td><a href="\Patients-2"><button type="button" class="viewdetailsbtn">View details</button></a></td>
        </tr>
        <tr>
            <td>Raihanah</td>
            <td>991231-14-2314</td>
            <td>AH33232</td>
            <td>3B-30</td>
            <td>162.7</td>
            <td>53.0</td>
            <td>F</td>
            <td><a href="\Patients-2"><button type="button" class="viewdetailsbtn">View details</button></a></td>
        </tr>
        <tr>
            <td>Sumayyah</td>
            <td>640405-06-3216</td>
            <td>BC22132</td>
            <td>3A-15 </td>
            <td>154.2</td>
            <td>49.5</td>
            <td>F</td>
            <td><a href="\Patients-2"><button type="button" class="viewdetailsbtn">View details</button></a></td>
        </tr>
        <tr>
            <td>Fatimah Zahrah</td>
            <td>880505-11-0312</td>
            <td>BA21365</td>
            <td>3B-04</td>
            <td>168.0</td>
            <td>64.0</td>
            <td>F</td>
            <td><a href="\Patients-2"><button type="button" class="viewdetailsbtn">View details</button></a></td>
        </tr>
        <tr>
            <td>Zakwan Ahmad</td>
            <td>901020-03-0303</td>
            <td>BE43222</td>
            <td>3A-16</td>
            <td>159.4</td>
            <td>50.3</td>
            <td>M</td>
            <td><a href="\Patients-2"><button type="button" class="viewdetailsbtn">View details</button></a></td>
        </tr>
    </table>
</div> -->

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
