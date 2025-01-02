<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    
<link rel="stylesheet" href="login.css">

</head>
<body>

<?php

include "connection.php";

if(isset($_POST['submit']))
{
$email = $_POST['email'];

$Password = $_POST['password'];

$email_search = "select * from registrationform where Email='$email' ";

$query = mysqli_query($conn,$email_search);

$email_count = mysqli_num_rows($query);

if($email_count > 0)

{
$email_pass = mysqli_fetch_assoc($query);

$db_pass = $email_pass['Password'];

if($db_pass == $Password)
{
 echo "login successfull";

 header('location:firstpage.php');
}

else
{

  echo "<script>alert('Email / Password doesnot Exist')</script>";
}
}


}

?>

<div class="aaj"> 

<!--login form-->
<header style=" position: absolute;left: 100px; top: 10px; font-size: 40px;"><b><i>Login Form</b></i></header>

<!--do not account-->
<div  style=" position: absolute;left: 70px; top: 190px; font-size: 20px; ">
<span>Don't have account? </span>

<a href="registrationform.php" style="text-decoration: none;" class="step2" >Signup Now</a>

</div>

    <p class="step1">
<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></p>

 
<form action="#" method="post">
<span class="vansh"> Email  &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; </span> <input class="raj" type="email" name="email" placeholder="Email"><br><br>

<span class="tj"> Password : </span> <input type="password" class="taj" name="password" placeholder="Password"><br><br>

<input class="ved" type="submit" name="submit">

</form>
</div>

</body>
</html>