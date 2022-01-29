@extends('master')
<head>
    <title>Student List | OTMS</title>
</head>

@section('content')

<h1 class="text-center"><b>Student Lists</b></h1><br>

<div class = "container">
    <!-- to alert the users -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
    {{session('success')}}
    </div>
    @endif
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div class="dropdown">
        <a class="btn btn-warning dropdown-toggle float-end" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <b>Filter By</b>
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="filterGenderMale">Male</a></li>
            <li><a class="dropdown-item" href="filterGenderFemale">Female</a></li>
            <li><a class="dropdown-item" href="filterAgeMore">Age > 15</a></li>
            <li><a class="dropdown-item" href="filterAgeLess">Age < 15</a></li>
        </ul>
    </div><br>

    <table class="table table-hover table-success table-striped" width="100%">
    <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th colspan="2">Update / Delete</th>
    </tr>
    @foreach($data_student as $student)
    <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->username}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->phoneNum}}</td>
            <td>{{$student->email}}</td>
            <td><a href="studentList/{{$student->id}}/edit" class="btn btn-success">Update</a></td>
            <td><a href="studentList/{{$student->id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
    </tr>
    @endforeach
    </table>
</div><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <b>Add Student Details</b>
</button><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Student Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <!-- form to insert data -->
            <form action="/studentList/create" method="POST">
            {{csrf_field()}}
                
                <!-- Name -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Name</b></label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Name">
                </div>
                
                <!-- Username -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
                    <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Username">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Email">
                </div>
                
                <!-- Gender -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Gender</b></label>
                    <select name="gender" class="form-select" aria-label="gender">
                        <option selected>Choose Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Phone Number</b></label>
                    <input name="phoneNum" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Phone Number">
                </div>

                <!-- Age -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Age</b></label>
                    <input name="age" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Age">
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