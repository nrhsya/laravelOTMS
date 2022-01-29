@extends('master')
<head>
    <title>Update Student Details | OTMS</title>
</head>

@section('content')

<h1 class="text-center"><b>Update Student List</b></h1><br>

<!-- form to insert data -->
<form action="/studentList/{{$data_student->id}}/update" method="POST">
{{csrf_field()}}
    
    <!-- Name -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>First Name</b></label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_student->name}}">
    </div>
    
    <!-- Username -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
        <input name="username" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_student->username}}">
    </div>
    
    <!-- Email -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_student->email}}">
    </div>
    
    <!-- Gender -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Gender</b></label>
        <select name="gender" class="form-select" aria-label="gender">
            <option selected>Choose Gender</option>
            <option value="Male" @if($data_student->gender=='Male') selected @endif>Male</option>
            <option value="Female" @if($data_student->gender=='Female') selected @endif>Female</option>
        </select>
    </div>

    <!-- Phone Number -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Phone Number</b></label>
        <input name="phoneNum" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_student->phoneNum}}">
    </div>

    <!-- Age -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Age</b></label>
        <input name="age" type="number" class="form-control" id="exampleFormControlInput1" value="{{$data_student->age}}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/studentList" class="btn btn-primary">Cancel</a>
</form>

@endsection