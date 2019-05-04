<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\openCourse;
use App\course;
use App\role;
use App\User;

use App\employer;

class OpenCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users =  User::role('مدرب')->get();
       $trainers = [];
       $i =0 ;
       if ($users != null){
        foreach ($users as $u ) {
            if ($u->employers != null){
            $trainers[$i] =  (object) [
            'user_id' => $u->employers->first()->user_Id,
            'fullName'=> $u->employers->first()->fullName  ];
              $i++;
           }
        }
       }
    //    $hasQuestionTest = [];
    //    $j = 0;
       $courses = course::all();
    //    foreach($courses as $course){
    //        if ($course->acceptanceQuestions != null){
    //         $hasQuestionTest[$j] (object) [
    //             'course_Id' => ,
    //             'courseName' => ,
    //         ]
    //        }
    //    }

        $data = ['open_courses' => openCourse::paginate(10),
                  'courses' => $courses,
                'trainers' => $trainers];
             
        return view('Manager.open_cours')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $messages = [
        "subjectChosen.required" => "الرجاء ملئ حقل المادة",
        "startDate.required" => "الرجاء ملئ حقل تاريخ البداية",
        "numOfSession.required" => "الرجاء ملئ حقل عدد الجلسات",
        "courseState.required" => " الرجاء ملئ حقل حالة الدورة",
        "regiState.required" => "الرجاء ملئ حقل حالة التسجيل ",
        "stadiscreptionrtDate.max" => "تجاوزت 300 محرف لحقل الوصف",
        "numOfSession.max" => "عدد الجلسات بين 1 و 30",
        "numOfSession.min" => "عدد الجلسات بين 1 و 30",
        // "acceptanceMark.max" => "علامة اختبار القبول بين 10 و 80",
        // "acceptanceMark.min" => "علامة اختبار القبول بين 10 و 80",
        "startDate.date" => ' y-m-d الرجاء إدخال تاريخ بالصيغة',
        "endDate.date" => ' y-m-d الرجاء إدخال تاريخ بالصيغة'
        // "startDate.date_format" => ' y-m-d الرجاء إدخال تاريخ بالصيغة',
        // "endDate.date_format" => ' y-m-d الرجاء إدخال تاريخ بالصيغة'
    ];
  
    $validator = Validator::make($request->all(), [
        "subjectChosen" => "required",
        "startDate"=> 'required|date',
        "endDate"=> 'date',
        "numOfSession"=> 'required|min:1|max:30',
        "discreption"=> 'max:300',
        "courseState" => 'required',
        "regiState" => 'required'
        // "acceptanceMark" => 'min:10|max:80'
    ], $messages);

    $course =new openCourse();
    $course->course_Id = $request->input('subjectChosen') ;
    $course->teacher_Id = $request->input('trainerChosen');
    $course->startDate = $request->input('startDate');
    $course->endDate = $request->input('endDate');
    $course->sessionNum = (int) $request->input('numOfSession');
    $course->conditions = $request->input('discreption');
    if ($request->input('regiState') == 'on'){
        $course->registerState = 1;
    }else{
        $course->registerState = 0;
    }
    if ($request->input('courseState') == 'on'){
        $course->courseState = 1;
    }else{
        $course->courseState = 0;
    }
    if ($request->input('acceptanceMark') !=null){
        $course->acceptMark = (int) $request->input('acceptanceMark');
    }else 
    {$course->acceptMark = 0 ;}

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else if ($course->checkIfExist($course) != null){
            return back()->with('error','هذه الدورة موجودة مسبقا');
        }else{
            $course->save();
            return back()->with('success','تمت فتح دورة جديدة'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return openCourse::where("id",'=',$id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
