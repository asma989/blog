<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <div dir="rtl" lang="ar" class="col-md-3 md-in" >
          <h4   > تعديل دورة </h4>
          </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
              <div dir="rtl" lang="ar" class="col-md-8 md-in" > <input  id="courseNewName" name="courseNewName" dir="rtl" lang="ar" type="text"  value="" >  </div> 
              <div  dir="rtl" lang="ar" class="col-md-4 md-in" >اسم الدورة الجديد:</div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <div dir="rtl" lang="ar" class="col-md-3 md-in" >
            {{-- <a href="/course/{{$course->id}}/update"> --}}
          <button type="button" id="saveCourseNameBtn" class="button button2" data-dismiss="modal">حفظ</button>
        {{-- </a> --}}
        </div>  
        </div>
        
      </div>
    </div>
  </div>