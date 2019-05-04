<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
  <title> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <link href="{{ asset('public2/css4/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
  <!-- Custom Theme files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/my.css') }}" rel="stylesheet" />
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> --}}
  <link href="{{ asset('public2/css4/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
  <!--icons-css-->
  <link href="{{ asset('public2/css4/font-awesome.css') }}" rel="stylesheet"> 
  <!--Google Fonts-->
  <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
  <!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
     
            @include('inc.navbar')
         
            @include('inc.sidebar')
          
            @include('inc.masseges')
          
            @yield('content')
   
       </div>
   </div>
   
<!-- including script-->
<!--js-->


{{-- <script src="public2/js4/jquery-2.1.1.min.js"></script>  --}}
<script src="public2/js4/bootstrap.js"> </script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!--scrolling js-->
<script src="public2/js4/jquery.nicescroll.js"></script>
  <script src="public2/js4/scripts.js"></script>
  <!-- script -->
<script src="js/sc_in_add_cours.js"> </script>
  <!--//scrolling js-->
 <!-- script -->
 <!-- including script-->
</body>
</html>

