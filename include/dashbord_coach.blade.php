<!--slider menu-->
<div class="sidebar-menu">
	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			<!--<img id="logo" src="" alt="Logo"/>--> 
	</a> </div>		  
	<div class="menu">
		<ul id="menu" >
			<li id="menu-home" ><a href="index.html"><i class="fa fa-home fa-fw,center" aria-hidden="true"></i><span>العودة للرئيسية </span></a></li>
		 <!--<li><a href="grids.html"><i class="fa fa-cogs"></i><span>Components</span></span></a>--> 
				
			</li>
			<li id="menu-comunicacao" ><a href="Student_ presence.html"><i class="fa fa-book nav_icon"></i><span> أخذ حضور الطلاب </span></span></a>
				
			</li>
				<li><a href="Evaluation of student.html"><i class="fa fa-cog fa-spin fa-3x fa-fw,center"></i><span>وضع تقييمات الطلاب</span></a></li>
            <li id="menu-academico" ><a href="input Q to test.html"><i class="fa fa-pencil fa-fw,center" ></i><span>وضع  أختبار تحديد المستوى </span></span></a>
            <li id="menu-academico" ><a href="course_Requirements_form.html"><i class="fa fa-camera-retro"></i><span>ملئ  استمارة متطلبات الدورة </span></span></a>
       
			</li>
		</ul>
	</div>
</div>
<div class="clearfix"> </div>
</div>

<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="public2/js4/jquery.nicescroll.js"></script>
		<script src="public2/js4/scripts.js"></script>
		<!--//scrolling js-->