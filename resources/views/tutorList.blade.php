@extends('master')
<head>
    <title>Tutor List | OTMS</title>
</head>

@section('content')

<h1 class="text-center"><b>Tutor Lists</b></h1><br>

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
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Age</th>
        <th colspan="2">Update / Delete</th>
    </tr>
    @foreach($data_tutor as $tutor)
    <tr>
        <td>{{$tutor->name}}</td>
        <td>{{$tutor->phoneNum}}</td>
        <td>{{$tutor->email}}</td>
        <td>{{$tutor->age}}</td>
        <td><a href="tutorList/{{$tutor->id}}/edit" class="btn btn-success">Update</a></td>
        <td><a href="tutorList/{{$tutor->id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
    </tr>
    @endforeach
    </table>
</div><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <b>Add Tutor Details</b>
</button><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Tutor Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <!-- form to insert data -->
            <form action="/tutorList/create" method="POST">
            {{csrf_field()}}
                
                <!-- Name -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Name</b></label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                </div>
                
                <!-- Username -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
                    <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Username">
                </div>

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Phone Number</b></label>
                    <input name="phoneNum" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone Number">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                </div>

                <!-- Age -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Age</b></label>
                    <input name="age" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Age">
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Password</b></label>
                    <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password">
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