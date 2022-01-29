<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class AdminController extends Controller
{
    //function to view tutor list
    public function viewTutorList(){
        $data_tutor = \App\Models\User::all();

        return view('tutorList', ['data_tutor'=> $data_tutor]);
    }

    //function to insert into tutor list
    public function create(Request $request){
        \App\Models\User::create($request->all());

        return redirect('/tutorList')->with('success','New Data Successfully Inserted');
    }

    //function to edit the tutor list (form)
    public function edit($id){
        $data_tutor = \App\Models\User::find($id);

        return view('updateTutorList',['data_tutor'=>$data_tutor]); //redirect to the page to update the details
    }

    //function to update tutor list
    public function update(Request $request,$id){
        $data_tutor = \App\Models\User::find($id);
        $data_tutor -> update($request->all());

        return redirect('/tutorList')->with('success','Data Successfully Updated');
    }

    //function to delete from tutor list
    public function delete($id){
        $data_tutor = \App\Models\User::find($id);
        $data_tutor -> delete($data_tutor);

        return redirect('/tutorList')->with('success','Data Successfully Deleted');
    }

    //function to calculate total tutors
    public function calcTutor(){
        $data_tutor = \App\Models\User::all()
        ->count();

        return view('userReport', ['data_tutor'=> $data_tutor]);
    }
}
