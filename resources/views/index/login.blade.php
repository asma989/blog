<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>تسجيل الدخول</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="css2/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="css2/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
        
	 <h1>  </h1>

	<div class="w3layoutscontaineragileits">
	<h2></h2>
		<form action="/profile_student.blade.php" method="post">
			<input  dir="rtl" lang="ar" type="email" Name="Username" placeholder="البريد الالكتروني" required="">
			<input   dir="rtl" lang="ar" type="password" Name="Password" placeholder="كلمة السر" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label dir="rtl" lang="ar"  for="brand1"><span></span>تذكرني</label>
					<a href="#" dir="rtl" lang="ar" >هل نسيت كلمة السر؟</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input   type="submit" value="سجل">
				<p  dir="rtl" lang="ar"> لتسجيل حساب جديد <span>-></span> <a class="w3_play_icon1" href="#small-dialog1"> اضغط هنا</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>سجل هنا </h3>
				<form action="#" method="post">
						<div class="form-sub-w3ls">
							<input  dir="rtl" lang="ar"  placeholder="اسم المستخدم"  type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input   dir="rtl" lang="ar" placeholder="البريد الالكتروني" class="mail" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input  dir="rtl" lang="ar"  placeholder="كلمة السر "  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input   dir="rtl" lang="ar" placeholder="تأكيد كلمة السر "  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					<div class="login-check">
						 <label  class="checkbox"><input type="checkbox" name="checkbox" checked="">أوافق على سياية التسجيل</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="التسجيل">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	

	
	<script type="text/javascript" src="js2/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="js2/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>