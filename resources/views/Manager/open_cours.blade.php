@extends('layout.app')
@section('content')
<!--inner block start here-->
<!--inner block start here-->
<div class="inner-block">       
    	 	<div class="col-md-12 compose-right">
				
						<div class="inbox-details-body">           
                       <!-- tabel -->
                       <table class="table table-striped table-hover">
                           <tr>
                              <th>   </th>
                              <th>حالة الدورة</th>
                              <th>حالة التسجيل</th>
                              <th>اسم الدورة</th>
                           </tr>
                           @foreach ($data['open_courses'] as $course)
                           <tr>
                             <th> 
                             <button type="button" onClick="setopenCourseId({{$course->id}})" class="button button2" data-toggle="modal" data-target="#myModal">تعديل</button> 
                              <button class="button button3">حذف</button> </th>
                              @if ($course->courseState == 1)   <td>مفتوحة </td> @else   <td>مغلقة</td>  @endIf
                              @if ($course->registerState == 1)   <td>مفتوحة </td> @else   <td>مغلقة</td>  @endIf
                            
                             <th>{{$course->course->Name}}</th>
                           </tr>
                           @endforeach
                      </table>
                    
                     <!-- tabel -->
                     <div class="row">
                              <div class="row">
                              <div  dir="rtl" lang="ar" class="col-md-12 md-in" ><p  style="color:black;" ><strong><i>لفتح دورة جديدة للتسجيل عليها اضغط على إضافة<i><strong></p></div>
                              </div>
                               <div  dir="rtl" lang="ar" class="col-md-8 md-in" > <button type="button" class="button" data-toggle="modal" data-target="#add_to_open_cours">إضافة</button></div>
                      </div>
                               
						
            </div> <!-- inbox ditail body -->

			  </div>  <!--col md 12 -->

</div> <!-- inner block-->

 <div class="clearfix"> </div> 

<!--inner block end here-->


 @include('model.edit_course')
 @include('model.add_course_to_open')
               
@endsection
<script>
     var token = '{{Session::token()}}';
  </script>