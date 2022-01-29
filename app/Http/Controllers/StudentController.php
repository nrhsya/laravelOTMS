<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;

class StudentController extends Controller
{
    /*--------------------------------------------------------------------------
    | Student Functions
    |--------------------------------------------------------------------------*/

    //function to view student list
    public function viewStudList(){
        $data_student = \App\Models\Student::all();

        return view('studentList', ['data_student'=> $data_student]);
    }

    //function to insert into student list
    public function create(Request $request){
        \App\Models\Student::create($request->all());

        return redirect('/studentList')->with('success','New Data Successfully Inserted');
    }

    //function to edit the student list (form)
    public function edit($id){
        $data_student = \App\Models\Student::find($id);

        return view('updateStudentList',['data_student'=>$data_student]); //redirect to the page to update the details
    }

    //function to update student list
    public function update(Request $request,$id){
        $data_student = \App\Models\Student::find($id);
        $data_student -> update($request->all());

        return redirect('/studentList')->with('success','Data Successfully Updated');
    }

    //function to delete from student list
    public function delete($id){
        $data_student = \App\Models\Student::find($id);
        $data_student -> delete($data_student);

        return redirect('/studentList')->with('success','Data Successfully Deleted');
    }

    //function to calculate total students
    public function calcStud(){
        $data_student = \App\Models\Student::all()
        ->count();

        return view('viewReport', ['data_student'=> $data_student]);
    }

    //function to filter by female
    public function filterGenderFemale(){
        $data_student = \App\Models\Student::all()
        ->where('gender', '=', 'Female');

        return view('studentList', ['data_student'=> $data_student]);
    }

    //function to filter by male
    public function filterGenderMale(){
        $data_student = \App\Models\Student::all()
        ->where('gender', '=', 'Male');

        return view('studentList', ['data_student'=> $data_student]);
    }

    //function to filter by age < 15
    public function filterAgeLess(){
        $data_student = \App\Models\Student::all()
        ->where('age', '<',  15);
        
        return view('studentList', ['data_student'=> $data_student]);
    }

    //function to filter by age > 15
    public function filterAgeMore(){
        $data_student = \App\Models\Student::all()
        ->where('age', '>',  15);
        
        return view('studentList', ['data_student'=> $data_student]);
    }
}
