@extends('master')
<head>
    <title>Update Course Details | OTMS</title>
</head>

@section('content')

<h1 class="text-center"><b>Update Course Details</b></h1>

<!-- form to insert data -->
<form action="/courseList/{{$data_course->id}}/update" method="POST">
{{csrf_field()}}
    
    <!-- Course Code -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Course Code</b></label>
        <input name="course_code" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_course->course_code}}">
    </div>
    
    <!-- Course Name -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Course Name</b></label>
        <input name="course_name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_course->course_name}}">
    </div>
    
    <!-- Course Description -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Course Description</b></label>
        <input name="course_desc" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_course->course_desc}}">
    </div>
    
    <!-- Course Credit -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Course Credit Hours</b></label>
        <input name="course_credit" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_course->course_credit}}">
    </div>

    <!-- Learning Hours -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Learning Hours</b></label>
        <input name="learning_hour" type="number" class="form-control" id="exampleFormControlInput1" value="{{$data_course->learning_hour}}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/courseList" class="btn btn-primary">Cancel</a>
</form>

@endsection