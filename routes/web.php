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

// Route::get('/', function () {
//     //  $p = User::first()->personalInfo;
//     //  $p = personalInfos::where("id","=",461)->first()->user->roles;  // T
//     //  $p = User::where("id","=",1)->first()->roles;  // T
//     // $p = role::where('id','=',1)->first()->users;  // T
//     // $p = role::where('id','=',2)->first()->priviliges; //  T
//     // $p = privilige::where('id','=',1)->first()->roles;  // T
//     // $p = course::where('id','=',8)->first()->opencourse; // T
//     // $p = openCourse::where('id','=',1)->first()->trainer; //T
//     // $p = openCourse::where('id','=',1)->first()->course; //T
//     // $p = course::where('id','=',8)->first()->acceptanceQuestions; // T
//     // $p = acceptance_test_Questions::first()->course; //T
//      dd($p);
//     return view('welcome');
// });

Route::get('/', function () {
    //  return view('welcome');
    return view('index/main');
  });
  Route::get('/index.html', function () {
    //  return view('welcome');
    return view('index/main');
  });
  Route::get('/about.html', function () {
    //  return view('welcome');
    return view('index/about');
  });
  
  Route::get('/gallery.html', function () {
    //  return view('welcome');
    return view('index/gallery');
  });
  
  Route::get('/contact.html', function () {
    //  return view('welcome');
    return view('index/contact');
  });
  
  Route::get('/single.html', function () {
    //  return view('welcome');
    return view('index/single');
  });
  
  Route::get('/single2.html', function () {
    //  return view('welcome');
    return view('index/single2');
  });
  //Route::get('/login.html', function () {
    //  return view('welcome');
    //return view('student/profile_student');
  //});
  //Route::get('/login.html', function () {
    //  return view('welcome');
   // return view('states/profile_states');
  //});
  Route::get('/login.html', function () {
    //  return view('welcome');
    return view('student/profile_student');
  });
  
  
  //Route::post('/profile_student.html', function () {
     // return view('welcome');
    //return view('profile_student');
  //});
  Route::get('/Evaluation of a training course.html', function () {
    //  return view('welcome');
    return view('student/Evaluation of a training course');
  });
  Route::get('/Show_bookmarks.html', function () {
    //  return view('welcome');
    return view('student/Show_bookmarks');
  });
  Route::get('/test.html', function () {
    //  return view('welcome');
    return view('index/test');
  });
  Route::get('/register.html', function () {
    //  return view('welcome');
    return view('index/register');
  });
  
  
  Route::get('/send_mssg_student.html', function () {
    //  return view('welcome');
    return view('student/send_mssg_student');
  });
  Route::get('/Student_ presence.html', function () {
    //  return view('welcome');
    return view('coach/Student_ presence');
  });
  Route::get('/course_Requirements_form.html', function () {
    //  return view('welcome');
    return view('coach/course_Requirements_form');
  });
  Route::get('/Evaluation of student.html', function () {
    //  return view('welcome');
    return view('coach/Evaluation of student');
  });
  Route::get('/input Q to test.html', function () {
    //  return view('welcome');
    return view(' coach/input Q to test ');
  });
  Route::get('/recive_mssg_student.html', function () {
    //  return view('welcome');
    return view('coach/recive_mssg_student ');
  });
  Route::get('/Evaluation_primry.html', function () {
    //  return view('welcome');
    return view('states/Evaluation_primry');
  });
  Route::get('/work_plan.html', function () {
    //  return view('welcome');
    return view('states/work_plan');
  });
  Route::get('/out_side_return.html', function () {
    //  return view('welcome');
    return view('states/out_side_return');
  });
  Route::get('/in_side_return.html', function () {
    //  return view('welcome');
    return view('states/in_side_return');
  });