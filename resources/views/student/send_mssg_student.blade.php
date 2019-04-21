<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

            <!--header start here-->
						<?php include("../include/header2.blade.php"); ?>
<!--heder end here-->
<link rel="stylesheet" href="css5/list.css" />

<!-- Font Awesome Stylesheet -->
<link rel="stylesheet" href="css5/font-awesome.css" />

<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	  <h2 dir="rtl" lang="ar">إرسال رسالة</h2>
    	 <div class="col-md-4 compose">   	 	

    	 	</div>
			</div>
			<div></div> 
    	    	 
    	 	<div class="col-md-8 compose-right">
				
						<div class="inbox-details-body">
							<div  dir="rtl" lang="ar" class="alert alert-info">
							لطفا أدرج كل التفاصيل اللازمة لإرسال الرسالة
							</div>
						
							<form class="com-mail">
								<input type="text"  dir="rtl" lang="ar" value="إلى :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'إلى';}">
								<input type="text"  dir="rtl" lang="ar" value="الموضوع :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'الموضوع';}">
								
								<textarea rows="6" dir="rtl" lang="ar"   value="الرسالة :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'الرسالة ';}">الرسالة </textarea>
								<div   class="form-group">
									<div  class="btn btn-default btn-file">
										<i  class="fa fa-paperclip"> </i>تحميل ملف 
										<input type="file" name="attachment">
									</div>
								</div>
								<input type="submit" value="إرسال الرسالة" > 
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
  
</div>
	
</div>
<!--inner block end here-->

	

<!--slider menu-->
<?php include("../include/dashbord_coach.blade.php");   ?>

<!--slide bar menu end here-->

<script src="public2/js4/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
