@extends('master')

<head>
    <title>Admin Homepage | OTMS</title>
</head>
@section('content')

<div class="container">
    <div class="row justify-content-center">

        @if (session('status'))
            <div role="alert">
                {{ session('status') }}
            </div>

        @elseif (session('failed'))
        <div class="alert alert-danger text-center">
            {{ __('!!! ADMIN ONLY !!!') }}
        </div>
        @endif
    </div>
</div><br>

<div id="customAlert" class="alert alert-success text-center">
    <h3 class="text-center">Welcome Back <b style="font-style: italic;">{{ Auth::user()->name }}</b></h3>
</div><br><br>

<div class="row text-center">
    <div class="col-6">
        <h3><b>Tutor List</b></h3><br>
        <a class="btn btn-success btn-lg" id="customButton" href="/tutorList"><b>Tutor List</b></a><br><br>
        <p>View a list of tutors<br>registered into the system</p>
    </div>

    <div class="col-6">
        <h3><b>Report</b></h3><br>
        <a class="btn btn-success btn-lg" id="customButton" href="/userReport"><b>View Report</b></a><br><br>
        <p>Summarize all the <br>information through <br>the report</p>
    </div>
</div>

@endsection