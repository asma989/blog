<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\course;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  //display all courses
  public function index()
  {
      return view('Manager.Add_cours')->with('courses',course::paginate(10));
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
    {
        $messages = [
            "new-course.required" => "الرجاء ملئ حقل الإضافة",
            "new-course.max" => "تجاوزت 50 محرف"
        ];
 
        $validator = Validator::make($request->all(), [
            "new-course" => "required|max:50|string"
           
        ], $messages);
        $course =new course();
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }  else if ($course->checkIfExist($request->input('new-course')) != null){
                return redirect('/course')->with('error','هذه الدورة موجودة مسبقا');
        }
            $course->add_course($request->input('new-course'));
            return redirect('/course')->with('success','تمت إضافة دورة جديدة'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
   // edit course
   public function update(Request $request)
   { 
    //    dd($request);
    //    return true;
       $messages = [
           "courseNewName.required" => "الرجاء ملئ حقل الإضافة",
           "courseNewName.max" => "تجاوزت 50 محرف"
       ];

       $validator = Validator::make($request->all(), [
           "courseNewName" => "required|max:50|string"
       ], $messages);
       $cours =new course();
       return response()->json(['state'=> $request]);
       // case 1 :  the input is empty orlonger than 50 chars
       if ($validator->fails()) {
           // $validator->errors()->toArray()
          
           return response()->json(['state'=>'fail1','msg'=>$validator->errors()->toArray()]);

       // case 2 : the data is already exist
       } else if  ($cours->checkIfExist($request->input('courseNewName')) != null){
           return response()->json(['state'=>'fail2','msg'=>'هذه الدورة موجودة مسبقا' ]);
       }
       else{
           $course->Name = $request['body'];
           $course->save();
           return response()->json(['state'=>'success','msg'=>$request['body']]);
       }
   }

   public function updateCourse(Request $request)
   { 
    //    dd($request);
    //    return true;
       $messages = [
           "courseNewName.required" => "الرجاء ملئ حقل الإضافة",
           "courseNewName.max" => "تجاوزت 50 محرف"
       ];

       $validator = Validator::make($request->all(), [
           "courseNewName" => "required|max:50|string"
       ], $messages);
       $cours =new course();
       return response()->json(['state'=> $request]);
       // case 1 :  the input is empty orlonger than 50 chars
       if ($validator->fails()) {
           // $validator->errors()->toArray()
          
           return response()->json(['state'=>'fail1','msg'=>$validator->errors()->toArray()]);

       // case 2 : the data is already exist
       } else if  ($cours->checkIfExist($request->input('courseNewName')) != null){
           return response()->json(['state'=>'fail2','msg'=>'هذه الدورة موجودة مسبقا' ]);
       }
       else{
           $course->Name = $request['body'];
           $course->save();
           return response()->json(['state'=>'success','msg'=>$request['body']]);
       }
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
   {
       $course  = course::find($id);
       if ( $course != null){
           $course->delete();
       }
      
       return redirect('/course')->with('success','تم حذف الدورة');
   }

 
}


