<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Form</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="css/bootstrap.css">


        <style>
      body{

        background-image: url('v3.jpg');
background-repeat: no-repeat;
background-size: cover;
height: 800px;


      }


        .raj{
          font-family: Arial, Helvetica, sans-serif;
          background-image: url('d2.jpg');
background-repeat: no-repeat;
background-size: cover;

border: 2px solid black;
width: 600px;
padding: 25px 25px;

        }
        .raj:hover{

background-image: url('v5.jfif');

        }
        
        </style>      
             
</head>
<body>
<center>
<h1 style="color: red; text-shadow: 3px 3px blue;"> Vehicle Form</h1>
<br>
<form class="raj" action="" method="post" >


<label for="cars"><b><i>Vehicle type:</b></i></label>
  <select name="type" id="cars">
    <option>Cycle</option>
    <option>Car</option>
    <option>Bike</option>
    <option>Bus</option>
    <option>truck</option>
    <option>ship</option>
    <option>Airplane</option>
  </select>
<br><br>

<b><i>Vehicle Company: </b></i><input Type="text" placeholder="Vahicle Company" size="35px" name="company"><br><br>

<b><i>Vehicle Model :</b></i> <input Type="text" placeholder="Vahicle Model" size="38px" name="model"><br><br>


<b><i>Vehicle Name: </b></i><input Type="text" placeholder="Vahicle Name" size="40px" name="name"><br><br>


<b><i>Vehicle Registration Number : </b></i><input Type="text" placeholder="Vahicle TYPE" size="27px" name="registration"><br><br>


<b><i>Vehicle Owner Name  : </b></i><input Type="text" placeholder="Vahicle Owner Name" size="32px" name="upload"><br><br><br>


<label for="cars"><b><i>Choose Driver:</b></i></label>
  <select name="owner" id="cars">
    <option>Mr. Deepak</option>
    <option>Mr. Raju</option>
    <option>Mr. Aman</option>
    <option>Mr. Madan</option>
    <option>Mr. Vinod</option>
    <option>Mr. Chandan</option>
    <option>Mr. Harsh</option>
    <option>Self</option>
  </select>

<br><br>

<input type="submit"  class="btn btn-outline-success" name="submit">&nbsp;&nbsp;&nbsp;

<input type="reset"  class="btn btn-outline-info">
</form> 
</center>



<?php

require_once ('connection.php');

if(isset($_POST['submit']))
{

$type = $_POST['type'];
$company = $_POST['company'];
$model= $_POST['model'];
$name = $_POST['name'];
$registration = $_POST['registration'];
$upload = $_POST['upload'];
$owner = $_POST['owner'];



?>

<center>
<table class="tb1" style="color: red; background-color: lightgreen;">
<h2 style="color:blue; background-color: aqua;">Vehicle Detail for :<?= $registration ?></h2>
<hr><br><br>
<tr><th>Vehicle Type :</th><td><?= $type ?> </td><td class="blank"></td></th></tr>
<tr><th>Vehicle Company Name :</th><td><?= $company?> </td><td class="blank"></td></th></tr> 
<tr><th colspan="4"><hr></th></tr>
<tr><th> Vehicle Model :</th><td><?= $model?> </td><td class="blank"></td></th></tr> 
<tr><th> Vehicle Name :</th><td><?= $name?> </td><td class="blank"></td></th></tr> 
<tr><th> Vehicle Registration Number :</th><td><?= $registration?> </td><td class="blank"></td></th></tr> 
<tr><th> Upload:</th><td><?= $upload?> </td><td class="blank"></td></th></tr> 

<hr>
</center>
<?php






$sql = "INSERT INTO vahicle (Type, Company, Model, Name, Registration, Upload, owner)  VALUES ('$type','$company','$model','$name','$registration','$upload','$owner')";

if($conn->query($sql) === true)
{
  echo '<script>alert("Thanks!  you have successfully submitted your Details.")</script>';
  
}

else{
  $err=mysqli_error($conn);
echo "data is not insert".$err;
}

}


?>






</body>
</html>