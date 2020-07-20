@extends('layouts.main_form')

@section('content')


<body>
<br>
{{--<span class="titlepage">Choose type of record for {{$patient->Name}}</span>--}}
<span class="titlepage">Choose type of record for </span>
<br><br><br><br>
<center>
    <a href="/form_statdoses"><button type="button" class="formbtn">STAT DOSES</button></a>
    <a href="/form_premedication"><button type="button" class="formbtn">PREMEDICATION</button></a><br>
    <a href="/form_oral"><button type="button" class="formbtn">ORAL</button></a>
    <a href="/form_injection"><button type="button" class="formbtn">INJECTION</button></a><br>
    <a href="/form_infusion"><button type="button" class="formbtn">INFUSION</button></a>
    <a href="/form_procedure"><button type="button" class="formbtn">OPERATION/PROCEDURE</button></a><br>
    <a href="/form_treatment"><button type="button" class="formbtn">TREATMENT CHANGES CHART</button></a>
    <a href="/form_topical"><button type="button" class="formbtn">TOPICAL/RECTAL/INHALATION</button></a>
</center>

<!--<a href="/patients"><button type="button" class="backbtn">⬅</button></a>-->

@endsection
