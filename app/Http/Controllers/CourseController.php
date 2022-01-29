<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Course;

class CourseController extends Controller
{
    /*--------------------------------------------------------------------------
    | Course Functions
    |--------------------------------------------------------------------------*/

    //function to view course list
    public function viewCourseList(){
        $data_course = \App\Models\Course::all();

        return view('courseList', ['data_course'=> $data_course]);
    }

    //function to insert into course list
    public function create(Request $request){
        \App\Models\Course::create($request->all());

        return redirect('/courseList')->with('success','New Data Successfully Inserted');
    }

    //function to edit the course list (form)
    public function edit($id){
        $data_course = \App\Models\Course::find($id);

        return view('updateCourseList',['data_course'=>$data_course]); //redirect to the page to update the details
    }

    //function to update course list
    public function update(Request $request,$id){
        $data_course = \App\Models\Course::find($id);
        $data_course -> update($request->all());

        return redirect('/courseList')->with('success','Data Successfully Updated');
    }

    //function to delete from course list
    public function delete($id){
        $data_course = \App\Models\Course::find($id);
        $data_course -> delete($data_course);

        return redirect('/courseList')->with('success','Data Successfully Deleted');
    }
}
