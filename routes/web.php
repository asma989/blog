<?php
use App\personalInfos;
use App\User;
use App\role;
use App\privilige;
use App\course;
use App\openCourse;
use App\acceptance_test_Questions;
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

Route::get('/', function () {
    //  $p = User::first()->personalInfo;
    //  $p = personalInfos::where("id","=",461)->first()->user->roles;  // T
    //  $p = User::where("id","=",1)->first()->roles;  // T
    // $p = role::where('id','=',1)->first()->users;  // T
    // $p = role::where('id','=',2)->first()->priviliges; //  T
    // $p = privilige::where('id','=',1)->first()->roles;  // T
    // $p = course::where('id','=',8)->first()->opencourse; // T
    // $p = openCourse::where('id','=',1)->first()->trainer; //T
    // $p = openCourse::where('id','=',1)->first()->course; //T
    // $p = course::where('id','=',8)->first()->acceptanceQuestions; // T
    // $p = acceptance_test_Questions::first()->course; //T
     dd($p);
    return view('welcome');
});
