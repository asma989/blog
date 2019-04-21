<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--heder end here-->


<?php include("../include/heder_states.blade.php"); ?>
<!--heder end here-->
<link rel="stylesheet" href="css5/list.css" />

<!-- Font Awesome Stylesheet -->
<link rel="stylesheet" href="css5/font-awesome.css" />

<style>
									table {
										border-collapse: collapse;
										width: 100%;
									}
									
									th, td {
										text-align: right;
										padding: 8px;
										
									}
									
									tr:nth-child(even){
										text-align: right;
										background-color: #f2f2f2 ;}
									
									th {
										text-align: right;
										background-color: #4CAF50;
										color: white;
									
									}
									.myfontd {
  border-right: 6px solid #68AE00;
  background-color: rgba(206, 250, 141, 0.712);
	font-family: verdana;
  font-size:150%;
	text-align:center;
 }
 .my {
  background-color: rgba(206, 250, 141, 0.712);
	font-family: verdana;
  font-size:150%;
	text-align:center;
 }
 .myfontc {
	border-right: 6px solid #68AE00;
  border-left: 6px solid #68AE00;
  background-color: rgba(206, 250, 141, 0.712);
	font-family: verdana;
  font-size:150%;
	text-align:center;
 }
</style>
<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	  <h2 dir="rtl" lang="ar"> التقييم الأولي  </h2>
    	 <div class="col-md-4 compose">   	 	

    	 	</div>
			</div>
			<div></div> 
    	    	 
    	 	<div class="col-md-8 compose-right">
				
					 <div class="inbox-details-body">
                        
						<form action ="">
						<p dir="rtl" lang="ar" class="my" >تعبأ البيانات من /مدير الحالة/ وتحددالتدخل المناسب بناء على تقييم الاحتياجات الاجتماعية (استمارة رقم 1 المرفقة)    </p >
             <br>
						 <br>
						 <p dir="rtl" lang="ar" class="myfontd" >توثيق مدير الحالة     </p > 
						 <br>
						 <p dir="rtl" lang="ar" class="my" >ملاحظة :رقم الملف (أدخل نفس رقم ملف التقييم الاجتماعيللفرد الموجود في الاستمارة رقم 1)  </p >

						 <br>
						 <div class="row">
						 <div  dir="rtl" lang="ar" class="col-md-6 md-in" > <input  dir="rtl" lang="ar" type="text"  value="      رقم الملف      :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '    رقم الملف  : ';}"></div> 
						 <div  dir="rtl" lang="ar" class="col-md-6 md-in" >  تاريخ إغلاق  الملف: <input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> <!-- يمكن أن يترك فارغ لانه قد لا يغلق المف فورا -->
						 </div>
						 <div class="row">
						 <div  dir="rtl" lang="ar" class="col-md-6 md-in" ><input  dir="rtl" lang="ar" type="text"  value="      رقم الملف      :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '   رقم الملف   : ';}"></div> 
						 <div  dir="rtl" lang="ar" class="col-md-6 md-in" >  تاريخ  فتح  الملف :  <input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div>
             </div>
						 <br>
                      <!-- ////////////////////////////////////////////-->
											<p dir="rtl" lang="ar" class="myfontd" >تواريخ التحديث     </p > <br> <br>
                      <div>
                        <div id="updata_date">
				                              </div>													
																			<div class="row">
																			<br>
					                               <div  dir="rtl" lang="ar" class="col-md-6 md-in" >  تاريخ   التحديث: <input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> <br>
                                      </div>
																		 <div class="col-md-8 compose-right">
																						<div class="input-group-btn">
																						<br>
																					 <button class="btn btn-success" type="button"  onclick="updata_date();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة  تاريخ تحديث جديد</span> </button>
																					 <br>
																						 </div>
		                                    </div>
	                                   </div>
                                     
																		 <div class="clear"></div>
                             <script>
																		     	var room = 1;
                                          function updata_date() {
																						room++;
                                           var objTo = document.getElementById('updata_date')
                                           var divtest = document.createElement("div");
	                                        divtest.setAttribute("class", "form-group removeclass"+room);
                                         	var rdiv = 'removeclass'+room;
                                        divtest.innerHTML = '<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" >تاريخ  جديد </p ></div><div class="row"><br><div  dir="rtl" lang="ar" class="col-md-6 md-in" >  تاريخ   التحديث: <input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div></div><div class="clear"></div>';
    
                                         objTo.appendChild(divtest)
                                         }	
                             </script>
														         <br><br><br>
														 			   <input  dir="rtl" lang="ar" type="text"  value="     اسم الفرد     :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '    اسم الفرد : ';}"> 
																		 <input  dir="rtl" lang="ar" type="text"  value="       اسم مدير الحالة   :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '    اسم مدير الحالة : ';}"> 


                                  <p dir="rtl" lang="ar" class="myfontd" >  1-الملاحظات المباشرة لمدير الحالة:   </p > <br> 
																	<p dir="rtl" lang="ar" class="myy1" > سلوك الفرد</p > <br> 
																	<br>
                                       <div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
															           <div  dir="rtl" lang="ar" class="col-md-4 md-in" >  عدواني<input  type="radio" name="q6" value="0"> </div>
																         <div  dir="rtl" lang="ar" class="col-md-4 md-in" >  مهارات اجتماعية جيدة<input  type="radio" name="q6" value="0"> </div>
																         <div  dir="rtl" lang="ar" class="col-md-4 md-in" > واثق بنفسه<input  type="radio" name="q6" value="0"> </div>
															       	</div>
																			 <br>
                                       <div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
															           <div  dir="rtl" lang="ar" class="col-md-4 md-in" > منعزل <input  type="radio" name="q6" value="0"> </div>
																         <div  dir="rtl" lang="ar" class="col-md-4 md-in" >  غير مبال  <input  type="radio" name="q6" value="0"> </div>
																         <div  dir="rtl" lang="ar" class="col-md-4 md-in" >  مجامل للبالغين<input  type="radio" name="q6" value="0"> </div>
															       	</div>
																			 <br>
                                       <div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
															           <div  dir="rtl" lang="ar" class="col-md-4 md-in" > منشغل بنفسه <input  type="radio" name="q6" value="0"> </div>
																         <div  dir="rtl" lang="ar" class="col-md-4 md-in" >    سريع الغضب <input  type="radio" name="q6" value="0"> </div>
																         <div  dir="rtl" lang="ar" class="col-md-4 md-in" >   غير قادر على التركيز<input  type="radio" name="q6" value="0"> </div>
															       	</div>
																			 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >        الملاحظات  </div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الملاحظات" name="message"></textarea>
																	 <br>
																	 
																	 <div>
                                        <div id="fields">
          
				                                 </div>
																			<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" > عناصر<p ></div>
				                             <div class="col-md-8 compose-right">
	                                     	<div>
		                                      	<input type="text"  dir="rtl" lang="ar" id="name" name="name[]" value="" placeholder=" الاسم ">
		                                    </div>
	                                   </div>
                                     <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="role" name="role[]" value="" placeholder="   الدور/العلاقة ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="  تفاصيل الاتصال  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
																						<div class="input-group-btn">
                                             
																					 <button class="btn btn-success" type="button"  onclick="fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة عنصر جديد</span> </button>
																					 <br>
																						 </div>
		                                    </div>
	                                   </div>
                                     
																		 <div class="clear"></div>
<script>
																		     	var room = 1;
                                          function fields() {
																						room++;
                                           var objTo = document.getElementById('fields')
                                           var divtest = document.createElement("div");
	                                        divtest.setAttribute("class", "form-group removeclass"+room);
                                         	var rdiv = 'removeclass'+room;
                                        divtest.innerHTML = '<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" >عنصر جديد </p ></div><div class="col-md-8 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="name" name="name[]" value="" placeholder=" الاسم "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="role" name="role[]" value="" placeholder="   الدور /العلاقة:"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="  تفاصيل الاتصال  "></div></div></div><br><div class="clear"></div>';
    
                                         objTo.appendChild(divtest)
                                         }	
</script>
			
			                              <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >        الملاحظات  </div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الملاحظات" name="message"></textarea>
																	 <br>
																	 <p dir="rtl" lang="ar" class="myfontd" >  تفاصيل خطة العمل-اجتماعات لمناقشة الحالة :   </p > <br>  <br>																	 
																		 <div>
                                        <div id="fields_">
          
				                                 </div>
																			<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" > عناصر<p ></div>
																			<div class="row">
																			<br>
					                               <div  dir="rtl" lang="ar" class="col-md-6 md-in" >  تاريخ   الاجتماع: <input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> <br>
                                      </div>
				                             <div class="col-md-8 compose-right">
	                                     	<div>
		                                      	<input type="text"  dir="rtl" lang="ar" id="name" name="name[]" value="" placeholder=" المشاركون ">
		                                    </div>
	                                   </div>
                                     <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="role" name="role[]" value="" placeholder="   الإجراء ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="  الشخص المسؤول   ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="   الإطار الزمني   ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="   النتائج المتوقعة   ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
																						<div class="input-group-btn">
                                             
																					 <button class="btn btn-success" type="button"  onclick="fields_();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة عنصر جديد</span> </button>
																					 <br>
																						 </div>
		                                    </div>
	                                   </div>
                                     <br>
																		 <div class="clear"></div>
<script>
																		     	var room = 1;
                                          function fields_() {
																						room++;
                                           var objTo = document.getElementById('fields_')
                                           var divtest = document.createElement("div");
	                                        divtest.setAttribute("class", "form-group removeclass"+room);
                                         	var rdiv = 'removeclass'+room;
                                        divtest.innerHTML = '<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" >عنصر جديد </p ></div><div class="row"><br><div  dir="rtl" lang="ar" class="col-md-6 md-in" >  تاريخ   الاجتماع: <input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> <br></div><div class="col-md-8 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="name" name="name[]" value="" placeholder=" المشاركون "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="role" name="role[]" value="" placeholder="    الإجراء:"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="   الشخص المسؤول  "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="   الإطار الزمني   "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="contact" name="contact[]" value="" placeholder="   النتائج المتوقعة   "></div></div></div><br><div class="clear"></div>';
																				 objTo.appendChild(divtest)
                                         }	
</script>
                                  

                                 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >        وصف البيئة المحيطة بالفرد *العوامل الخارجية ,الخصائص,الاهتمامات,القدرات,العلاقات الاجتماعية*</div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >       وصف الاحتياجات الأساسية للفرد بناء على رأي مدير الحالة</div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >       وصف الاحتياجات الأساسية للفرد بناء على رأي  الفرد نفسه</div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >       وصف الاحتياجات الأساسية للفرد بناء على رأي  الأسرة الحقيقية أو الأسرة الحاضنة </div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >       المنظمات / الأفراد الذين يدعمون الأسرة </div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >     خلاصة الاحتياجات التي تم تقييمها </div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >        ما هو نوع الدعم المقترح للأسرة </div>
																	 <br>
																	 <textarea dir="rtl" lang="ar"  placeholder="الوصف" name="message"></textarea>
																	 <br>
																	 <p dir="rtl" lang="ar" class="myfontd" >  خطة العمل    </p > <br>  <br>	
																	 <p dir="rtl" lang="ar" class="myfontc" >  الاحتياجات /المشاكل التي يتعين معالجتها:     </p > <br>  <br>
																	 	



                        <input type="submit" value="إرسال " > 
                       </div>  
                       
                        <br>
                        <!--  -->
                               
            </form>
					

             </div> <!-- inbox datealis-->
							
					 </div> <!-- col md 8  -->
					
</div> <!-- inner blok end-->
				</div> <!-- mother grides -->
    	
          <div class="clearfix"> </div>     
  
</div>  <!-- left content-->
	<!--slide bar menu start here-->
<?php include("../include/dashbord_states.blade.php");   ?>

<!--slide bar menu end here-->
</div>
<!--inner block end here-->

	



<script src="public2/js4/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
