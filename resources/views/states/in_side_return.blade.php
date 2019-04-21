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
</style>
<!--inner block start here-->
<div class="inner-block">
     <div class="inbox">
    	  <h2 dir="rtl" lang="ar"> إحالة داخلية </h2>
    	 <div class="col-md-4 compose">   	 	

    	 	</div>
			</div>
			<div></div> 
    	    	 
    	 	 <div class="col-md-8 compose-right">
				
				 <div class="inbox-details-body">
                        
					 <form action ="">




                        <input  dir="rtl" lang="ar" type="text"  value="   الاسم و الكنية  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' الاسم و الكنية  : ';}"> 
                        <div class="row">

                        <div dir="rtl" lang="ar" class="col-md-8 compose-right" > تاريخ الميلاد<input   id="date"  type="date"  value="DD-MM-YYYY"  > </div> 
                        </div> 
                        <br>
                        <input  dir="rtl" lang="ar" type="text"  value="   اسم الأب  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '  اسم الأب : ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="     اسم الأم :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' اسم الأم  : ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="     الوضع الاجتماعي :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '  الوضع الاجتماعي  : ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="    الجنس  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '   الجنس: ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="   رقم الهاتف   :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' رقم الهاتف: ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="    عنوان السكن   :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '  عنوان السكن: ';}"> 

                        <p dir="rtl" lang="ar" >    المسؤول على التفويض *صاحب العلاقة    </p>
                        <div class="row">

                        <div dir="rtl" lang="ar" class="col-md-8 compose-right" > تاريخ الإحالة<input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> 
                        </div> 
                        <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >        الشكوى الحالية حسب توصيف الحالة:  </div>
                        <br>
						<textarea dir="rtl" lang="ar"  placeholder="المعلومات" name="message"></textarea>
						<br>
                        <p dir="rtl" lang="ar" > الخدمات المقدمة من قبل المركز</p>

                        <br>
							<div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
								<div  dir="rtl" lang="ar" class="col-md-4 md-in" > 
								<label class="container1" > قانوني
                                              <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
								</label>   
							</div>
								<div  dir="rtl" lang="ar" class="col-md-4 md-in" >   
								<label class="container1" > صحي
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
							  </label>     
								 </div>
								<div  dir="rtl" lang="ar" class="col-md-4 md-in" >    
								<label class="container1" > تعليمي
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
							  </label> 
								 </div>

							</div> 
						<br>
                        <br>
							<div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
								<div  dir="rtl" lang="ar" class="col-md-6 md-in" >    
								<label class="container1" > تأهيل مهني
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
							  </label>     
								 </div>
								<div  dir="rtl" lang="ar" class="col-md-6 md-in" > 
								<label class="container1" > نفسي
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
							  </label>    
								 </div>

							</div> 
						<br>
                        <p dir="rtl" lang="ar" > الخدمات التي يحتاجها  المستفيد:</p>

                        <br>
                         <div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
                            <div  dir="rtl" lang="ar" class="col-md-3 md-in" >  
														<label class="container1" > إغاثي
                                     <input type="checkbox" checked="checked">
                                     <span class="checkmark"></span>
							              </label> 
														 </div>
                            <div  dir="rtl" lang="ar" class="col-md-3 md-in" >   
														<label class="container1" > صحي
                             <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
							              </label>      
														 </div>
                            <div  dir="rtl" lang="ar" class="col-md-3 md-in" >    
														<label class="container1" > قانوني
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
							             </label> 
														</div>
                            <div  dir="rtl" lang="ar" class="col-md-3 md-in" >   
														<label class="container1" > تعليمي
                               <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
							              </label> 
														 </div>

                         </div> 
                        <br>
                        <br>
                           <div class="row" dir="rtl" lang="ar"  style="background-color:#a2b040;">
                             <div  dir="rtl" lang="ar" class="col-md-4 md-in" >  
														 <label class="container1" > نفسي
                                <input type="checkbox" checked="checked">
                               <span class="checkmark"></span>
							               </label>  
														  </div>
                             <div  dir="rtl" lang="ar" class="col-md-4 md-in" >         
														 <label class="container1" > تأهيل مهني 
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
							               </label> 
														  </div>
                          </div> 
                        <br>

						 <div class="clear"></div>
                         <div  dir="rtl" lang="ar" class="col-md-12 compose-right" >            التوصيات للجهة المحال إاليها:  </div>
                         <br><br>
						 <textarea dir="rtl" lang="ar"  placeholder="التوصيات" name="message"></textarea>
						 <br>
                         <input  dir="rtl" lang="ar" type="text"  value=" مدير الحالة :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' مدير الحالة  : ';}">
                        <input type="submit" value="إرسال " > 
                       </div>         
                     </form>
					


							
				 </div>
					
			 </div>
	 </div>
    	
          <div class="clearfix"> </div>     
  
</div>
	<!--slide bar menu start here-->

<?php include("../include/dashbord_states.blade.php");   ?>
<!--slide bar menu end here-->
</div>
<!--inner block end here-->

	



<script src="public2/js4/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
