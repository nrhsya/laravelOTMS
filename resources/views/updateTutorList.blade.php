@extends('master')
<head>
    <title>Update Tutor Details | OTMS</title>
</head>

@section('content')

<h1 class="text-center"><b>Update Tutor List</b></h1>

<!-- form to insert data -->
<form action="/tutorList/{{$data_tutor->id}}/update" method="POST">
{{csrf_field()}}
    
    <!-- Name -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>First Name</b></label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_tutor->name}}">
    </div>
    
    <!-- Username -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
        <input name="username" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_tutor->username}}">
    </div>
    
    <!-- Email -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_tutor->email}}">
    </div>

    <!-- Phone Number -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Phone Number</b></label>
        <input name="phoneNum" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_tutor->phoneNum}}">
    </div>

    <!-- Age -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Age</b></label>
        <input name="age" type="number" class="form-control" id="exampleFormControlInput1" value="{{$data_tutor->age}}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/tutorList" class="btn btn-primary">Cancel</a>
</form>

@endsection