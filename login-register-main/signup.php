
<?php
include "form.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
include "db_connect.php";
$username = $_POST["username"];
$user_email = $_POST["email"];
$user_password = $_POST["password"];
$user_rep_password = $_POST["cpassword"];
// $exists = false;
if(($user_password == $user_rep_password)){
   $sql = "insert into users(username,email,password)values('$username','$user_email','$user_password')";
   $result = mysqli_query($conn,$sql);
   if(!$result){
      die("error".error($result));
   }else 
   {
      echo '<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
      </div>';
   }
}else{
   echo "<script>alert('your password are not same')</script>";
}
}
?>
