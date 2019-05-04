<div class="modal" id="add_to_open_cours">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
      <div dir="rtl" lang="ar" class="col-md-3 md-in" >
        <h4   > إضافة دورة </h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      {{-- {{dd($data)}} --}}
      <!-- Modal body -->
      <div class="modal-body">
        <div class="col-md-12 compose-right">
      
          <div class="inbox-details-body">
            {!! Form::open(['action' => ['OpenCourseController@store'],'method'=> 'POST','enctype'=> 'multipart/form-data']) !!}
            {{ csrf_field() }}
                    <!-- dropdawnlist-->
                    @if (count($data['courses']) > 0)
                  <div class="row">
                   <div dir="rtl" lang="ar" class="col-md-12 compose-right" > 
                     <div> 
                     <p  style="color:#4CAF50;" ><strong><i>اختر المادة<i><strong></p>
                              <select name="subjectChosen" class="form-control" required  >
                                @foreach ($data['courses'] as $course)
                                <option value="{{$course->id}}">{{ $course->Name }} </option>
                                 @endforeach
                              </select>
                            </div>
                     </div>        
                   </div> <br> 
                   @endif
                     <!-- dropdawnlist-->

                     @if (count($data['trainers']) > 0)
                    <div class="row">
                         <div dir="rtl" lang="ar" class="col-md-12 compose-right" > 
                          <div> 
                          <p  style="color:#4CAF50;" ><strong><i>اختر المدرب<i><strong></p>
                                   <select name="trainerChosen" class="form-control" >
                                     @foreach ($data['trainers'] as $trainer)
                                     <option value="-1">لاحقا</option>
                                     <option value="{{$trainer->user_id}}">{{ $trainer->fullName }} </option>
                                      @endforeach
                                   </select>
                                 </div>
                          </div>        
                        </div> <br> 
                        @endif


             <div class="row">
              <div dir="rtl" lang="ar" class="col-md-12 compose-right" >  
                <p  style="color:#4CAF50;" ><strong><i>تاريخ البداية<i><strong></p>
                <input  dir="rtl" lang="ar" required name="startDate" data-toggle="tooltip"  data-placement="top" title="من الأن وحتى 6 أشهر " id="startdate" required  type="date" class="form-control" min="{{date('Y-m-d')}}" max="{{Carbon\Carbon::now()->addMonths(6)->toDateString()}}"  >
                 </div> 
            </div> 
             <br>

             <div class="row">
              <div dir="rtl" lang="ar" class="col-md-12 compose-right" >
                  <p  style="color:#4CAF50;" ><strong><i> تاريخ النهاية<i><strong></p>
                    <input  dir="rtl" lang="ar" required name="endDate" data-toggle="tooltip"  class="form-control" id="enddate"  type="date"  min="{{Carbon\Carbon::now()->addMonths(2)->toDateString()}}" max="{{Carbon\Carbon::now()->addMonths(6)->toDateString()}}" >
                   </div> 
             </div> 
              <br>

             <div class="row">
             <div dir="rtl" lang="ar" class="col-md-12 compose-right"   >
               <p  style="color:#4CAF50;" ><strong><i> عدد الجلسات<i><strong></p>
                  {!! Form::number('numOfSession' ,null, ['min' => '1' ,'max'=>'30','class' => 'form-control','required']) !!}
              </div>
              </div>
              <br> 

              <div class="row">
                  <div dir="rtl" lang="ar" class="col-md-12 compose-right"   >
                    <p  style="color:#4CAF50;" ><strong><i>علامة اختبار القبول<i><strong></p>
                       {!! Form::number('acceptanceMark' ,null, ['min' => '10' ,'max'=>'80','class' => 'form-control']) !!}
                   </div>
                   </div>
                   <br> 
              
              <div class="row">
              <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >   
              <p  style="color:#4CAF50;" ><strong><i>  الشروط و الوصف<i><strong></p>
                      <textarea dir="rtl" lang="ar" class="form-control" placeholder="الوصف" name="discreption"></textarea>
              </div>
              
            </div>
               <div class="row">
               
                 <div  dir="rtl" lang="ar" class="col-md-12 md-in" >  
                   <p  style="color:#4CAF50;" ><strong><i>  الحالة <i><strong></p></div>
            
                 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" > 
                     <div dir="rtl" lang="ar" class="col-md-12 md-in" >
                        <label class="switch">
                        <input type="checkbox" required name="courseState" data-toggle="toggle" checked>
                        <span class="slider round"></span>
                        </label> 
                 </div>   
   
               </div>
                </div>
               <div class="row">
               <div class="row">
                 <div  dir="rtl" lang="ar" class="col-md-12 md-in" >  <p  style="color:#4CAF50;" ><strong><i>  التسجيل <i><strong></p></div>
               </div>
                  <div  dir="rtl" lang="ar" class="col-md-12 compose-right" > 
                     <div dir="rtl" lang="ar" class="col-md-12 md-in" >
                       <label class="switch">
                       <input type="checkbox" required  name="regiState" checked>
                       <span class="slider round"></span>
                       </label> 
                      </div>        
                </div>
                </div>
                <div dir="rtl" lang="ar" class="col-md-3 md-in" >
                  {!!  Form::submit('حفظ',['class'=>'button','data-dismiss'=> 'model','id'=> 'saveOpenCourseBtn']);  !!}
                  {{-- <button type="submit" class="button" data-dismiss="modal">حفظ</button> --}}
                </div>     
             <br>
             {!! Form::close() !!}
          </div>
        </div>  
      </div>
      <!-- Modal footer -->
      
      <div class="modal-footer">
      </div>
      
    </div>
  </div>
</div>