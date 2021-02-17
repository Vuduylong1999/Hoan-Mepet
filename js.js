$( document ).ready(function() {

//sticky header
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

//owl-carousel
$('.banner-slide').owlCarousel({
  loop:true,
  dots: true,
  nav: true,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: false,
  navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
  items: 1,
})
$('.products-slide').owlCarousel({
  dots: true,
  loop: true,
  margin: 10,
  items: 4,
  dotsEach: 2,
})


//show userform
$('#userlogin').click( function(event) {
  event.preventDefault();
  var userform = document.getElementById("userform");
  userform.className = '';
  userform.classList.add("d-block");
  return false;
} );

$('#closelogin').click( function(event) {
  event.preventDefault();
  var userform = document.getElementById("userform");
  var loginform = document.getElementById("loginform");
  var regform = document.getElementById("regform");
  var forpassform = document.getElementById("forpassform");
  var forpasser=document.getElementById("forpass-error");
  var loger=document.getElementById("login-error");
  var reger=document.getElementById("reg-error");
  userform.className = '';
  regform.classList.remove("d-block");
  forpassform.classList.remove("d-block");
  loginform.reset();
  regform.reset();
  forpassform.reset();
  forpasser.innerHTML = "";
  loger.innerHTML= "";
  reger.innerHTML= "";
  return false;
} );

$('#reg-btn').click( function(event) {
  event.preventDefault();
  var regform = document.getElementById("regform");
  regform.classList.add("d-block");
  return false;
} );

$('#backlogreg-btn').click( function(event) {
  event.preventDefault();
  var loger=document.getElementById("login-error");
  var loginform = document.getElementById("loginform");
  var reger=document.getElementById("reg-error");
  var regform = document.getElementById("regform");
  regform.classList.remove("d-block");
  loger.classList.remove("d-none");
  loginform.reset();
  regform.reset();
  loger.innerHTML= "";
  reger.innerHTML= "";
  return false;
} );

$('#forpass-btn').click( function(event) {
  event.preventDefault();
  var forpassform = document.getElementById("forpassform");
  forpassform.classList.add("d-block");
  return false;
} );

$('#backlogforpass-btn').click( function(event) {
  event.preventDefault();
  var forpassform = document.getElementById("forpassform");
  var loger=document.getElementById("login-error");
  var loginform = document.getElementById("loginform");
  var forpasser=document.getElementById("forpass-error");
  forpassform.classList.remove("d-block");
  forpassform.reset();
  loginform.reset();
  loger.innerHTML= "";
  forpasser.innerHTML= "";
  return false;
} );

function loginvalidate() {
  var name=document.loginform.loguser.value;
  var password=document.loginform.logpass.value;
  var noti=document.getElementById("login-error");
  if (name.length == 0 || password.length == 0)
  {
    noti.innerHTML= "Tên đăng nhập và mật khẩu không được để trống";
    return false;
  }
}

function regvalidate() {
  var name=document.regform.reguser.value;
  var password=document.regform.regpass.value;
  var retype_password=document.regform.retyperegpass.value;
  var email=document.regform.regemail.value;
  var noti=document.getElementById("reg-error");
  if (name.length == 0 || password.length == 0)
  {
    noti.innerHTML= "Tên đăng nhập và mật khẩu không được để trống";
    return false;
  }
  else if (email.length == 0) {
    noti.innerHTML= "Email không được để trống";
    return false;
  }
  else if (password.length <8)
  {
    noti.innerHTML= "Mật khẩu phải bao gồm ít nhất 8 kí tự";
    return false;
  }
  else if (password != retype_password) {
    noti.innerHTML= "Mật khẩu không trùng khớp";
    return false;
  }
}

$('[data-toggle="tooltip"]').tooltip();

/* $(".del-all-cart").click(function(event){
  event.preventDefault();
  $("#cart-table").load("?controller=delallcart");
}); */

$(".del-all-cart").onClick(function(event){
      event.preventDefault();
      $.ajax({  
      type: "POST",  
      url: "../controller/c_del_allcart.php",  
      data: dataString
      });
});
/* function logduplicate() {
  var logdup = new XMLHttpRequest();
  logdup.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("login-error") = this.responseText;
    }
  };
  logdup.open("POST", "", true);
  logdup.send();
}; */

});