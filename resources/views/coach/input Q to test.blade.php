<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--heder end here-->
<?php include("../include/header_coach.blade.php"); ?>
<meta charset="utf-8" />
<!-- Font Awesome Stylesheet -->
<link rel="stylesheet" href="css5/font-awesome.css" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link href="css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Including Open Sans Condensed from Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
<title>حساب المدرب</title>

<!--heder end here-->
<style>

 .myfontd {
  border-right: 6px solid #68AE00;
  background-color: rgba(206, 250, 141, 0.712);
	font-family: verdana;
  font-size:150%;
	text-align:center;
 }
   .table-striped>tbody>tr:nth-child(odd)>td, 
   .table-striped>tbody>tr:nth-child(odd)>th {
   background-color: rgb(233, 149, 71);
   text-align: right;
   }

   .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color:#537b35;
  text-align: right;
   }
   /*the container must be positioned relative:*/
  .custom-select {
  position: relative;
  font-family: Arial;
  }

  .custom-select select {
  display: none; /*hide original SELECT element:*/
  }

  .select-selected {
  background-color:#537b35;
  }

  /*style the arrow inside the select element:*/
  .select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
  }

 /*point the arrow upwards when the select box is open (active):*/
 .select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
 }

 /*style the items (options), including the selected item:*/
 .select-items div,.select-selected {
  color: #fff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
 }

 /*style items (options):*/
 .select-items {
  position: absolute;
  background-color:#537b35;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
 }

 /*hide the items when the select box is closed:*/
 .select-hide {
  display: none;
 }

 .select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
 }
</style>
<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	  <h2 dir="rtl" lang="ar">   وضع اختبار تحديد المستوى  </h2>
    	 <div class="col-md-12 compose-right">   	 	

    	 	</div>
			</div>
			<div>

            </div> 
                 
    	 	<div class="col-md-12 compose-right">
				
						<div class="inbox-details-body">
                                       <!-- dropdawnlist-->
						<form action ="">												 
                  <div class="container">
                  <div class="row">
                     <div class="col">                          
		                   <div class="custom-select" style="width:200px;">
                              <select>
                                 <option dir="rtl" lang="ar" value="0">اختر المادة</option>
                                   <option value="1">انكليزي1</option>
                                   <option value="2">انكليزي2</option>
                                   <option value="3">انكليزي3</option>
                                   <option value="5">icdl</option>
                             </select>
                           </div>
                     
                      </div>
                         <br>
                         <br>
                         <br>
                     <div class="col">
                                            <!-- dropdawnlist-->
		          <div class="custom-select" style="width:200px;">
                   <select>
                    <option dir="rtl" lang="ar" value="0">اختر المستوى</option>
                    <option value="1">أول</option>
                    <option value="2">ثاني</option>
                    <option value="3">ثالث</option>
                    <option value="4">لايوجد</option>
                   
                  </select>
                  </div>
                     </div>
                     </div>
										 <br> 
<!-- start input Q  -->

<div>
                        <div id="requirements_fields">
          
				                              </div>
																			<div class="col-md-9 compose-right"><p dir="rtl" lang="ar" class="myfontd" > ملاحظة :الرجاء ادخال ثلاث اختيارات لكل سؤال  </p ></div>
																			<br>
				                             <div class="col-md-9 compose-right">
	                                     	<div>
		                                      	<input type="text"  dir="rtl" lang="ar" id="َQ" name="Q[]" value="" placeholder=" ادخل السؤال">
		                                    </div>
	                                   </div>
                                     <div class="col-md-9 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="c1" name="c1[]" value="" placeholder="ادخل الاختيار الأول">
		                                    </div>
	                                   </div>
																		 <div class="col-md-9 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="c2" name="c2[]" value="" placeholder="  ادخل الاختيار الثاني  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-9 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="c3" name="c3[]" value="" placeholder=" ادخل الاختيار الثالث ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-9 compose-right">
	                                     	<div >
		                                      	<input type="text"  dir="rtl" lang="ar" id="toption" name="toption[]" value="" placeholder="   ادخل لاختيار الصحيح  ">
		                                    </div>
	                                   </div>
																		 <div class="col-md-9 compose-right">
																						<div class="input-group-btn">
                                             
																					 <button class="btn btn-success" type="button"  onclick="requirements_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true">أنقر لإضافة سؤال جديد</span> </button>
                                             
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
                                        divtest.innerHTML = '<div class="col-md-9 compose-right"><p dir="rtl" lang="ar" class="myfontd" >سؤال جديد </p ></div><br><div class="col-md-9 compose-right"><div><input type="text"  dir="rtl" lang="ar" id="Q" name="Q[]" value="" placeholder=" ادخل السؤال"></div></div><div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="c1" name="c1[]" value="" placeholder="   ادخل الاختيار الأول"></div></div><div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="c2" name="Quantity[]" value="" placeholder="  ادخل الاختيار الثاني  "></div></div><div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="c3" name="c3[]" value="" placeholder=" ادخل الاختيار الثالث "></div></div> <div class="col-md-9 compose-right"><div ><input type="text"  dir="rtl" lang="ar" id="toption" name="toption[]" value="" placeholder="  ادخل الاختيار الصحيح  "></div></div></div><br><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true">انقر لإزالة السؤال</span> </button></div><div class="clear"></div>';
    
                                        objTo.appendChild(divtest)
                                          }
                                     function remove_education_fields(rid) {
	                                      $('.removeclass'+rid).remove();
                                         }
</script>
                                    
                                   <br>
																	 <input type="submit" value=" حفظ" > 
                                   </form>

  <br /><br />
 <!-- end input Q -->
                         </div>
			</div>
					</div>
          
               

    	
          <div class="clearfix"> </div>     

         </div>
         
	
</div>
</div>
<!--inner block end here-->

	

<!--slide bar menu start here-->
<?php include("../include/dashbord_coach.blade.php");   ?>
<!--slide bar menu end here-->

<script src="public2/js4/bootstrap.js"> </script>
<script>
 var x, i, j, selElmnt, a, b, c;
 /*look for any elements with the class "custom-select":*/
 x = document.getElementsByClassName("custom-select");
 for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
 }
 function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
 }
 /*if the user clicks anywhere outside the select box,
 then close all select boxes:*/
 document.addEventListener("click", closeAllSelect);
</script>
<!-- mother grid end here-->
</body>
</html>


                      
						
