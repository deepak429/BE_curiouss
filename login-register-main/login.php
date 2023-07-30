<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
<link rel="stylesheet" href="">
</head>
<body>
<?php 
include "form.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   include "db_connect.php";
   $username = $_POST["username"];
   $user_email = $_POST["lemil"];
   $user_password = $_POST["lpassword"];

   $sqls = "select * from users where email = '$user_email' AND password= '$user_password'";
   $result = mysqli_query($conn,$sqls);
   $num = mysqli_num_rows($result);

   if($num==1){
      echo "<script>alert('your are login')</script>";
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $user_email;
      header("location:../index.html");
   }else{
      echo "<script>alert('you are not a member')</script>";
   }

}
?>

</body>
</html>
