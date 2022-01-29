@extends('master')
<head>
    <title>Course List | OTMS</title>
</head>

@section('content')

<h1 class="text-center"><b>Course Lists</b></h1><br>

<div class = "container">
    <!-- to alert the users -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
    {{session('success')}}
    </div>
    @endif
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-hover table-success table-striped" width="100%">
    <tr>
        <th>Course Code</th>
        <th>Course Name</th>
        <th>Course Description</th>
        <th>Course Credit</th>
        <th>Learning Hours</th>
        <th colspan="2">Update / Delete</th>
    </tr>
    @foreach($data_course as $course)
    <tr>
        <td>{{$course->course_code}}</td>
        <td>{{$course->course_name}}</td>
        <td>{{$course->course_desc}}</td>
        <td>{{$course->course_credit}}</td>
        <td>{{$course->learning_hour}}</td>
        <td><a href="courseList/{{$course->id}}/edit" class="btn btn-success">Update</a></td>
        <td><a href="courseList/{{$course->id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
    </tr>
    @endforeach
    </table>
</div><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <b>Add Course Details</b>
</button><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Course Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <!-- form to insert data -->
            <form action="/courseList/create" method="POST">
            {{csrf_field()}}
                
                <!-- Course Code -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Course Code</b></label>
                    <input name="course_code" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course Code">
                </div>
                
                <!-- Course Name -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Course Name</b></label>
                    <input name="course_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course Name">
                </div>

                <!-- Course Description -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Course Description</b></label>
                    <input name="course_desc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course Description">
                </div>

                <!-- Course Credit Hours -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Course Credit Hours</b></label>
                    <input name="course_credit" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course Credit Hours">
                </div>

                <!-- Learning Hours -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Learning Hours</b></label>
                    <input name="learning_hour" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Learning Hours">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

@endsection