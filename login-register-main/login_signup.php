<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
include "db_connect.php";
$username = $POST["username"];
$user_email = $POST["email"];
$user_password = $POST["password"];
$user_rep_password = $post["cpassword"];
$exists = false;
if(($user_password == $user_rep_password) && $exists == false){
   $sql = "insert into user(Username,Email_id,user_password)values('$username','$user_email','$user_password')";
   $result = mysqli_quary($conn,$sql);
   if($result){
      die("error".error($result));
   }
}
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name = "lemil" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name = " lpassword" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="signup" method = "POST">
               <div class="field">
                     <input type="text" placeholder="Username" name="username"required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Email Address" name= "email" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" name = "cpassword" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>