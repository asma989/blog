@extends('layout.app')
@section('content')

<!--inner block start here-->
<div class="inner-block">       
    	 	<div class="col-md-12 compose-right">
				
						<div class="inbox-details-body">
                     {!! Form::open(['action' => 'CourseController@store','method'=> 'POST','enctype'=> 'multipart/form-data']) !!}
                    
                     <div class="row">     
                               <div  dir="rtl" lang="ar" class="col-md-4 md-in" > <button class="button">إضافة</button></div>
                               <div  dir="rtl" lang="ar" class="col-md-6 md-in" > <input  dir="rtl" lang="ar" type="text" name="new-course" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">  </div> 
                               <div  dir="rtl" lang="ar" class="col-md-2 md-in" >اسم الدورة:</div>
                      </div>
                      {!! Form::close() !!}                  
                       <!-- tabel -->

                       <table class="table table-striped table-hover">
                           <tr>
                              <th>   </th>
                              <th>اسم الدورة</th>
                           </tr>
                           @foreach ($courses as $course)
                           <tr>              
                                  <th>
                                       {!! Form::open(['action' => ['CourseController@destroy',$course->id],'method'=> 'POST']) !!}
                                       {{Form::hidden('_method','DELETE')}}
                                       <a href="/course/{{$course->id}}" >  
                                          <button class="button button3">حذف</button> 
                                       </a>
                                       <button type="button" onClick="setCourseId({{$course->id}})" class="button button2" data-toggle="modal" data-target="#myModal">تعديل</button>
                                      
                                       {!! Form::close() !!}
                                    </th>
                                     
                                  <th id="newcourseName_{{$course->id}}"> {{ $course->Name }} </th>
                          
                           </tr>
                       @endforeach               
                       {{$courses->appends(request()->input())->links() }}
                      </table>
                     <!-- tabel -->
						
            </div> <!-- inbox ditail body -->

			  </div>  <!--col md 12 -->

</div> <!-- inner block-->

 <div class="clearfix"> </div> 

          </div> <!-- mother-grid-inner -->
     </div> <!-- left-content -->
</div> <!-- page-container -->
<!--inner block end here-->


 <!--slide bar menu start here-->
     @include('inc.sidebar')
 <!--slide bar menu end here-->


<!-- The Modal to show edit for add course -->

@include('model.the_model')
<!-- The Modal -->  
<!-- mother grid end here-->                


   @endsection
   <script>
      var token = '{{Session::token()}}';
      var url = '{{route("course_e")}}';
    </script>