<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--heder end here-->


<?php include("../include/header_coach.blade.php"); ?>
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
    	  <h2 dir="rtl" lang="ar"> طلب شراء/ داخلي </h2>
    	 <div class="col-md-4 compose">   	 	

    	 	</div>
			</div>
			<div></div> 
    	    	 
    	 	<div class="col-md-8 compose-right">
				
						<div class="inbox-details-body">
                        
						<form action ="">




                        <input  dir="rtl" lang="ar" type="text"  value="   الرقم  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' الرقم  : ';}"> 
                        <div class="row">

                        <div dir="rtl" lang="ar" class="col-md-8 compose-right" > التاريخ<input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> 
                        </div> 
                        <br>
                        <input  dir="rtl" lang="ar" type="text"  value="   الجهة الطالبة  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' الجهة الطالبة : ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="    الطلب لأجل :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' الطلب لأجل : ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="   بند الموازنة  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '  بند الموازنة: ';}"> 
                        <input  dir="rtl" lang="ar" type="text"  value="   أقصى مدة لتوريد المتطلبات   :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' أقصى مدة لتوريد المتطلبات: ';}"> 
                        <p dir="rtl" lang="ar" >   المطلوب شراء الأصناف المبينة أدناه </p>
                        <br>
                        <!-- ////////////////////////////////////////////-->
                      <div>
                        <div id="requirements_fields">
          
				                              </div>
																			<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" > المتطلبات </p ></div>
				                             <div class="col-md-8 compose-right">
	                                     	<div>
		                                      	<input type="text"  dir="rtl" lang="ar" id="number" name="number[]" value="" placeholder=" الرقم">
		                                    </div>
	                                   </div>
                                     <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Category" name="Category[]" value="" placeholder="  اسم الصنف-البيان">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Quantity" name="Quantity[]" value="" placeholder="  الكمية  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Notes" name="Notes[]" value="" placeholder=" الملاحظات ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder=" سعر تقريبي  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-8 compose-right">
																						<div class="input-group-btn">
                                             
																					 <button class="btn btn-success" type="button"  onclick="requirements_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة متطلب جديد</span> </button>
                                             
																						 </div>
		                                    </div>
	                                   </div>
                                     
																		 <div class="clear"></div>
                                     <script>
																		     	var room = 1;
                                          function requirements_fields() {
																						room++;
                                           var objTo = document.getElementById('requirements_fields')
                                           var divtest = document.createElement("div");
	                                        divtest.setAttribute("class", "form-group removeclass"+room);
                                         	var rdiv = 'removeclass'+room;
                                        divtest.innerHTML = '<div class="col-md-8 compose-right"><p dir="rtl" lang="ar" class="myfontd" >صنف جديد </p ></div><div class="col-md-8 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="number" name="number[]" value="" placeholder=" الرقم"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Category" name="Category[]" value="" placeholder="  اسم الصنف-البيان"></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Quantity" name="Quantity[]" value="" placeholder="  الكمية  "></div></div><div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Notes" name="Notes[]" value="" placeholder=" الملاحظات "></div></div> <div class="col-md-8 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="Approximateprice" name="Approximateprice[]" value="" placeholder=" سعر تقريبي  "></div></div></div><br><div class="clear"></div>';
    
                                         objTo.appendChild(divtest)
                                         }	
																			</script>
                                    
                                   <br>
																	<input  dir="rtl" lang="ar" type="text"  value=" منظم الطلب  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '  منظم الطلب: ';}"> 
                                <input  dir="rtl" lang="ar" type="text"  value=" المسمى الوظيفي :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'المسمى الوظيفي  : ';}">
                        <table> 
                         <tr>
                            
                            <td> خاص مشاريع</td>
                         </tr>
                         <tr>
                           <td>  رأي وتوقيع مدير المشاريع <input  dir="rtl" lang="ar" type="text"  value="    " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '    ';}">   </td>
                           <td>  رأي وتوقيع مدير المشروع  <input  dir="rtl" lang="ar" type="text"  value="    " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '   ';}">  </td>
                         </tr>
                         <tr> 
                         </table>
                         <table>    
                             <td> خاص إداري</td>
                         </tr>
                         <tr>
                           <td>     رأي وتوقيع المدير المالي <input  dir="rtl" lang="ar" type="text"  value="    " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '    ';}">   </td>
                           <td>      قرار آمر المصرف <input  dir="rtl" lang="ar" type="text"  value="    " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '   ';}">  </td>
                           
                            <td>         التاريخ<input  dir="rtl" lang="ar" id="date"  type="date"  value="YYYY-MM-DD"  > </div> 
                           </td>
                         </tr>
                        </table>
                        <br>
                        <input  dir="rtl" lang="ar" type="text"  value="   اسم المورد  :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '   اسم المورد: ';}">

                        <input type="submit" value="إرسال " > 
     </div>  
                       
                        <br>
                        <!--  -->
                               
                        </form>
					


							
							</div>
					
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
  
</div>
	<!--slide bar menu start here-->
<?php include("../include/dashbord_coach.blade.php");   ?>

<!--slide bar menu end here-->
</div>
<!--inner block end here-->

	



<script src="public2/js4/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
