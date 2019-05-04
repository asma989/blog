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

//script for sticky nav 
 
 $(document).ready(function() {
  var navoffeset=$(".header-main").offset().top;
  $(window).scroll(function(){
   var scrollpos=$(window).scrollTop(); 
   if(scrollpos >=navoffeset){
     $(".header-main").addClass("fixed");
   }else{
     $(".header-main").removeClass("fixed");
   }
  });


});
//script for sticky nav 
// sc
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
 //sc
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
//sc
   //////////////////////////////////////
   if (typeof jQuery.ui != 'undefined') {
    console.log("xxx");
  }
function setCourseId(courseid){
  window.courseId = courseid;
}
function setopenCourseId(courseid){
  window.opencourseId = courseid;
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type:'GET',
    dataType: 'json',
    processData: false,
    url: '/openCourse/'+ window.opencourseId ,
    data: {id:window.opencourseId }
  }) .done(function (msg){
    console.log(msg);
    $("input[name = 'trainerChosen_edit']").val("")
    $("input[name = 'startDate_edit']").val(msg['startDate']);
    $("input[name = 'endDate_edit']").val(msg['endDate']);
    $("input[name = 'numOfSession_edit']").val(msg['sessionNum']);
    $("input[name = 'acceptanceMark_edit']").val(msg['acceptMark']);
    $("input[name = 'courseState_edit']").val(msg['courseState']);
    $("input[name = 'regiState_edit']").val(msg['registerState']);
    $("input[name = 'discreption_edit']").val(msg['conditions']);

  
    $('#myModal').modal('show');

  });
}
//// to edit the course name 
$('.saveCourseNameBtn').on('click',function(){
console.log(token + " "+url+" "+ window.courseId+" "+$('.courseNewName').val() );
let data = new FormData();
data.append('body', $('#courseNewName').val());
// data.append('_method', 'PUT');
data.append('courseId', window.courseId.toString() );
data.append('_token', token.toString() );
// body: $('#courseNewName').val(),courseId:window.courseId.toString(),_token:token.toString()
console.log(JSON.stringify(data));
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type:'POST',
    dataType: 'json',
    processData: false,
    url: url ,
    data: {body: $('#courseNewName').val(),courseId:window.courseId.toString(),_token:token.toString()}
  }) .done(function (msg){
  
      console.log("msg : "+ JSON.stringify(msg));

      if (msg['state'] == 'success'){
        $('#successDiv').text("تم التعديل").show();
        $('#newcourseName_'+ window.courseId).text(msg['msg'].courseNewName);
        console.log( "success");

      }else  if (msg['state'] == 'fail1'){
        $('#failDiv').text(msg['msg'].courseNewName).show();
        console.log( msg['state']);
      
    }else  if (msg['state'] == 'fail2'){
      $('#failDiv').text(msg['msg'].courseNewName).show();
      console.log( "fail2");
    }
      $('#courseNewName').text("");
     });
});


