@extends('master')

<head>
    <title>Report | OTMS</title>
</head>
@section('content')

<center>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <h1>Total Number of Students</h1>
    <table class="table table-hover table-success table-striped text-center" width="100%">
        <tr>
            <th>Total Number of Students</th>
        </tr><br><br>

        <tr>
            <td>{{$data_student}}</td>
        </tr>
    </table>

</div>
</center>

@endsection