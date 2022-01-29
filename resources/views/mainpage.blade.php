@extends('style')
<head>
    <title>OTMS</title>
</head>

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>

        @elseif (session('failed'))
            <div class="alert alert-danger text-center"></div>
        @endif
    </div>
</div><br>

<div class="text-center">
    <div class="rounded p-2" id="customBg">
        <p class="customFont">Welcome to</p>
        <h1 style="text-shadow: 2px 2px #c29161;">Online Tuition Management System</h1>
    </div><br>

    <div class="rounded p-4" style="background: #fbd9b7">
        <h3 style="font-family: Courier New;"><b>An online application that allows tutors to create and manage their <br>
            student's information and modify them. Tutors can also manage the <br>
            courses in the system and modify them.</b>
        </h3>
    </div><br>

    <div class="row text-center rounded p-4" id="customBg">
        <div class="col-4">
            <a class="btn btn-success btn-lg" id="customButton"><b>Manage Students</b><br><br>
                <i class="bi bi-people-fill" style="font-size: 4rem;"></i>
            </a><br><br>
        </div>

        <div class="col-4">
            <a class="btn btn-success btn-lg" id="customButton"><b>Manage Courses</b><br><br>
                <i class="bi bi-pen-fill" style="font-size: 4rem;"></i>
            </a><br><br>
        </div>

        <div class="col-4">
            <a class="btn btn-success btn-lg" id="customButton"><b>Manage Tutors</b><br><br>
                <i class="bi bi-briefcase-fill" style="font-size: 4rem;"></i>
            </a><br><br>
        </div>
    </div>
</div>

@endsection