<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route to mainpage
Route::get('/', function () {
    return view('mainpage');
});

//Route to restrict access
Route::middleware(['auth', 'backdisabled'])->group(function(){
    //Route to Tutor Main Page
    Route::get('tutorMainpage', function () {
        return view('tutorMainpage');
    });

    //Route to student list page
    Route::get('studentList', function () {
        return view('studentList');
    });

    //Route to course list page
    Route::get('courseList', function () {
        return view('courseList');
    });

    //Route to updateCourseList Page
    Route::get('updateCourseList', function () {
        return view('updateCourseList');
    });

    //Route to updateStudentList Page
    Route::get('updateStudentList', function () {
        return view('updateStudentList');
    });

    //Route to viewReport Page
    Route::get('viewReport', function () {
        return view('viewReport');
    });

    /*--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------*/

    Route::middleware(['adminrestricted:admin@gmail.com'])->group(function(){
        //Route to Admin Main Page
        Route::get('adminMainpage', function () {
            return view('adminMainpage');
        });

        //Route to Tutor List page
        Route::get('tutorList', function () {
            return view('tutorList');
        });

        //Route to updateTutorList Page
        Route::get('updateTutorList', function () {
            return view('updateTutorList');
        });

        //Route to User Report Page
        Route::get('userReport', function () {
            return view('userReport');
        });

        //view
        Route::get('/tutorList','App\Http\Controllers\AdminController@viewTutorList');

        //insert
        Route::post('/tutorList/create', 'App\Http\Controllers\AdminController@create');

        //edit form
        Route::get('/tutorList/{id}/edit','App\Http\Controllers\AdminController@edit');

        //update
        Route::post('/tutorList/{id}/update','App\Http\Controllers\AdminController@update');

        //delete
        Route::get('/tutorList/{id}/delete','App\Http\Controllers\AdminController@delete');

        //total tutor
        Route::get('/userReport','App\Http\Controllers\AdminController@calcTutor');
    });

    /*--------------------------------------------------------------------------
    | Student Routes
    |--------------------------------------------------------------------------*/

    //view
    Route::get('/studentList','App\Http\Controllers\StudentController@viewStudList');

    //insert
    Route::post('/studentList/create', 'App\Http\Controllers\StudentController@create');

    //edit form
    Route::get('/studentList/{id}/edit','App\Http\Controllers\StudentController@edit');

    //update
    Route::post('/studentList/{id}/update','App\Http\Controllers\StudentController@update');

    //delete
    Route::get('/studentList/{id}/delete','App\Http\Controllers\StudentController@delete');

    //total students
    Route::get('/viewReport','App\Http\Controllers\StudentController@calcStud');

    //filter by female
    Route::get('filterGenderMale','App\Http\Controllers\StudentController@filterGenderMale');

    //filter by male
    Route::get('filterGenderFemale','App\Http\Controllers\StudentController@filterGenderFemale');

    //filter by age < 15
    Route::get('filterAgeLess','App\Http\Controllers\StudentController@filterAgeLess');

    //filter by age > 15
    Route::get('filterAgeMore','App\Http\Controllers\StudentController@filterAgeMore');

    /*--------------------------------------------------------------------------
    | Course Routes
    |--------------------------------------------------------------------------*/

    //view
    Route::get('/courseList','App\Http\Controllers\CourseController@viewCourseList');

    //insert
    Route::post('/courseList/create', 'App\Http\Controllers\CourseController@create');

    //edit form
    Route::get('/courseList/{id}/edit','App\Http\Controllers\CourseController@edit');

    //update
    Route::post('/courseList/{id}/update','App\Http\Controllers\CourseController@update');

    //delete
    Route::get('/courseList/{id}/delete','App\Http\Controllers\CourseController@delete');

});

//web authentication
Auth::routes();

//redirect after login and register
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');