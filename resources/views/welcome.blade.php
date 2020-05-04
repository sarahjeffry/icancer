@extends('layouts.main')
@section('content')


    <h1>THIS IS DASHBOARD</h1>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Demographic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Correlation</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Trends</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <h3>Demographic</h3>
            <p>Image 1</p>
        </div>
        <div class="tab-pane container fade" id="menu1">
            <h3>Correlation</h3>
            <p>Image 2</p>
        </div>
        <div class="tab-pane container fade" id="menu2">
            <h3>Trends</h3>
            <p>Image 3</p>
        </div>
    </div>

@endsection
