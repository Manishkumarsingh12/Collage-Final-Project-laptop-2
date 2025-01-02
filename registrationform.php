<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="registration.css">

</head>
<body>
    

<form action="" method="post" >


<div class="ved">
    
<a class="ved0" href="registrationform.php">Registration Form </a>&nbsp;&nbsp;&nbsp;
<a class="ved2" href="Login.php">Login</a>

</div>

<div class="raj">  


<form action="" method="post">

<div style=" position: absolute; left: 90px; top: 60px;" > <span style=" position: absolute; left: 1px; top: -30px;" > <b><i>Name : </b></i></span>
<input type="text" name="firstname" placeholder="First Name"size="22">
<input type="text" name="lastname" placeholder="Last Name" size="22" ><br><br><br>

<span style=" position: absolute; left: 1px; top: 45px;" > <b><i>  Email : </b></i></span> <input type="email" name="email" placeholder="Email" size="50"><br><br>
<br>
<span style=" position: absolute; left: 1px; top: 105px;" > <br><b><i>Mobile No : </b></i></span><input type="Mobile" name="mobile"  placeholder="+91 - " size="50"><br><br>

<span style=" position: absolute; left: 1px; top: 205px;" ><b><i>Address : </b></i></span><br><input type="text" name="address"  placeholder="Enter Address" size="50px"><br><br>


 <b><i>Zip :</b></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <b><i>Password : </b></i><br><input type="zip" name="zip" placeholder="zip code"  size="10">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="password" name="password" placeholder="Password"  size="30">


<br><br><br>

<center>
<input  class="taj"  type="submit" name="submit">
<input  class="aaj" type="reset">
</center>

</form>
</div>

<!-----------------------------------------------------php work------------------------------------------------------------------>



<?php

require_once("connection.php");

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM registrationform where Email = '$email'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $msg = "Email ID Already Exist Please Login!";
        echo "<script>alert('Email Id Already Exist')</script>";
       // header("location:registration.php?msg=$msg");
    } else {
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $password = $_POST['password'];

$sql = "INSERT INTO registrationform (Firstname, Lastname, Email, Mobile, Address, Zip, Password) VALUES ('$firstname', '$lastname', '$email', '$mobile', '$address', '$zip', '$password')";

if($conn->query($sql) === true)
{
    echo "data is insert successsfully";
    header('location:Login.php');
}
else{
    echo "data is not insert";
}
}
}

?>

</body>
</html>