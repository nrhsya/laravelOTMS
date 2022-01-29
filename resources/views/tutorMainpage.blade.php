@extends('master')

<head>
    <title>Tutor Homepage | OTMS</title>
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
            <script>alert("!!! ONLY ADMINS CAN ACCESS THIS PAGE !!!")</script>
            {{ __('!!! ONLY ADMIN CAN ACCESS THE ADMIN PAGE !!!') }}
        </div>
        @endif

        <div class="alert alert-success text-center" role="alert">
            {{ __('You have successfully logged in !') }}
        </div>
    </div>
</div><br>

<div id="customAlert" class="alert alert-success text-center">
    <h3 class="text-center">Welcome Back <b style="font-style: italic;">{{ Auth::user()->name }}</b></h3>
</div><br><br>

<div class="row text-center">
    <div class="col-4">
        <h3><b>Student List</b></h3><br>
        <a class="btn btn-success btn-lg" id="customButton" href="/studentList"><b>Student List</b></a><br><br>
        <p>View a list of students<br>enrolled in this tuition</p>
    </div>

    <div class="col-4">
        <h3><b>Course List</b></h3><br>
        <a class="btn btn-success btn-lg" id="customButton" href="/courseList"><b>Course List</b></a><br><br>
        <p>View a list of all <br>available courses in <br>this tuition.</p>
    </div>

    <div class="col-4">
        <h3><b>Report</b></h3><br>
        <a class="btn btn-success btn-lg" id="customButton" href="/viewReport"><b>View Report</b></a><br><br>
        <p>Summarize all the <br>information through <br>the report</p>
    </div>
</div>

@endsection