<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--heder end here-->
<title>حساب المدرب</title>
<?php include("../include/header_coach.blade.php"); ?>
<meta charset="utf-8" />
<!-- Font Awesome Stylesheet -->
<link rel="stylesheet" href="css5/font-awesome.css" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link href="css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Including Open Sans Condensed from Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />


<!--heder end here-->
  <style>
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
    	  <h2 dir="rtl" lang="ar">جدول حضور الطلاب </h2>
    	 <div class="col-md-12 compose-right">   	 	

    	 	</div>
			</div>
			<div>

            </div> 
                 
    	 	<div class="col-md-12 compose-right">
				
						<div class="inbox-details-body">
            <form action ="">	          
                                            <!-- dropdawnlist-->
                  <div class="container">
                  <div class="row">
                     <div class="col">                          
		                   <div class="custom-select" style="width:200px;">
                              <select>
                                 <option dir="rtl" lang="ar" value="0">اختر المادة</option>
                                   <option value="1">انكليزي1</option>
                                   <option value="2">انكليزي2</option>
                                   <option value="3">انكليزي3</option>
                                    <option value="4">فوتوشوب</option>
                                   <option value="5">icdl</option>
                                   <option value="6">حلاقة رجالية</option>
                                   <option value="7">حلاقة نسائية </option>
                                   <option value="8">المحاسبة </option>
                                  <option value="9">الأمين</option>
                             </select>
                           </div>
                     
                      </div>
                         <br>
                         <br>
                     <div class="col">
                                            <!-- dropdawnlist-->
		          <div class="custom-select" style="width:200px;">
                   <select>
                    <option dir="rtl" lang="ar" value="0">اختر الوقت</option>
                    <option value="1">10:00_12:00</option>
                    <option value="2">10:00_12:30</option>
                    <option value="3">1:00_3:00</option>
                    <option value="4">3:00_5:00</option>
                    <option value="5">4:00_6:00</option>
                    <option value="6">5:00_6:30</option>
                    <option value="7">2:00_4:00 </option>
                  </select>
                  </div>
                     </div>
                     </div>
                         <br>
							<!-- tabel -->

 <table class="table table-striped table-hover">
  <tr>
      <th>الخميس </th>
      <th>الأربعاء </th>
      <th>الثلاثاء </th>
      <th>الإثنين </th>
      <th>الاحد </th>
      <th>السبت </th>
      <th dir="rtl" lang="ar" > الطلاب/الأيام</th>
  </tr>
  <tr>
      <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2"> موجود</label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2"> موجود</label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th dir="rtl" lang="ar" >اسم الطالب</th>
  </tr>
  <tr>
  <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2"> موجود</label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2"> موجود</label>
           </div>
       </th>
       <th>  
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="tableMaterialCheck2">
           <label class="form-check-label" for="tableMaterialCheck2">موجود </label>
           </div>
       </th>
       <th dir="rtl" lang="ar" > سناء السكران</th>
  </tr>  
</table>
<input type="submit" value=" حفظ" > 
 </form>
<br /><br />
<!-- tabel -->
						
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


                      
						
