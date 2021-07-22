<?php 

include('includes/header.php');  
//include('config/db.php'); 
include('includes/footer.php');

?>
<nav class="navbar bg-dark navbar-dark-grey navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#" style = "text-align:center">INNO-TECH</a>
  <button class = "btn btn-primary" style="margin-right: 0;" onclick="signup()" id="signInBtn">signup</button>
  <button class = "btn btn-primary" style="margin-right: 0;display:none" onclick="signin()" id="signUpBtn">sign in</button>
</nav>
<div class = "card-body col-sm-12 mt-5"  style="text-align: center;" action='loginProcess.php' method='post'>  
<div class = "form-group"  id="signIn" style = "text-align:center;">
      <input type="email" class="form-control" placeholder="email@example.com">
      <input type="password" class="form-control" placeholder="password" style = "margin-top:25px;">
      <div style="text-align:center">
      <input type = "checkbox" style = "margin-top:10px" onclick="submit()"><a style="color: #ffffff;"> &nbsp I agree to the <a href = "#" >terms and condition</a></a><br>
      <button name="signin" class = "btn btn-primary" style="align-items:center; margin-top: 20px;  display:none" id = "sub">login</button>
      </div>
</div>

<div class = "form-group" style = "margin-top:10%;display:none" id="signUp"  method='post'>
  <form method="post" action="signup.php" >
      <input type="name" class="form-control" placeholder="john nyoni" name="name">
      <input type="email" class="form-control" placeholder="email@example.com" style = "margin-top:25px;" name="email">
      <input type="password" class="form-control" placeholder="password" style = "margin-top:25px;" name="password">
      <input type="text" class="form-control" placeholder="Your business" style = "margin-top:25px;" name="business">
      <div style="text-align:center">
      <input type = "checkbox" style = "margin-top:10px" onclick="submit()" id ="checkbx"><a style="color: #ffffff;"> &nbsp I agree to the <a href = "#" >terms and condition</a></a><br>
      <button name="signup" class = "btn btn-primary" style="align-items:center; margin-top: 20px;" id = "sub">signup</button>
  </form>
 </div>
</div>
</div>
<script>


  function signup(){
    var signup = document.getElementById("signUp");
 var signin = document.getElementById("signIn");
 var InBtn = document.getElementById("signInBtn");
 var UpBtn = document.getElementById("signUpBtn");

    signin.style.display="none";
    signup.style.display="block";
    InBtn.style.display="none";
    UpBtn.style.display="block";
  };
  function signin(){
     var signup = document.getElementById("signUp");
 var signin = document.getElementById("signIn");
 var InBtn = document.getElementById("signInBtn");
 var UpBtn = document.getElementById("signUpBtn");
   signin.style.display="block";
   signup.style.display="none";
   InBtn.style.display="block";
   UpBtn.style.display="none";
 };
 function submit(){
   var check_btn = document.getElementById("checkbx")
   var sub_btn =  document.getElementById("sub");

   sub_btn.style.display = "block";


 }
</script>