<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>



    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
body
{
  
background-image: url('e2.webp');
background-repeat: no-repeat;
background-size: cover;

}

.raj{

border: 4px dotted blue; 
width: 600px;
position: relative;
padding:  25px;
font-size: 20px;
text-align: center;

}
.raj:hover{

  background-color: gray;
  color: white;
  border: 6px double blue; 

}


</style>


</head>
<body>
    

<center>
<h1 style="color: red; text-shadow: 3px 3px blue;"> Employee Registration Form</h1>
<br><br>



<form action="" method="post" class="raj" benctype="multipart/form-data">
<br>
<b><i>Employee Name   : </b></i><input Type="text" placeholder="Employee Name" size="27px" name="name"><br><br>


<b><i> Employee ID   : </b></i><input Type="text" placeholder="Employee Aadhar No." size="32px" name="aadhar"><br><br>


<b><i> Employee Phone NO   : </b></i><input Type="text" placeholder="Employee Phone No" size="24px" name="phone"><br><br>


<b><i> Employee Address   : </b></i><input Type="text" placeholder="Employee Address" size="26px" name="address"><br><br>


  <b><i>Upload Photo: </b></i><input type="file" name="upload">

<br><br>

  <label><b><i>Gender :</b></i></label>
  <select name="gender">
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>


  <br><br>

<input type="submit"  class="btn btn-outline-success" name="submit">                            &nbsp;

<input type="reset"  class="btn btn-outline-info">
</form> 


</form>
</center>
<br><br><br><br>
<!--------yaha pr upload wala phle likh rhe hai------------->

<?php

require_once ('connection.php');

if(isset($_POST['submit']))
{

//$upload = $_POST['upload'];
$name = $_POST['name'];
$aadhar= $_POST['aadhar'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];

if (isset($_FILES['upload']['name']) and $_FILES['upload']['error'] == 0) {
       
  $upload = $_FILES['upload']['name'];
  $destination = "./image/" .  $upload;
  move_uploaded_file($_FILES['upload']['tmp_name'], $destination);
  //echo("Image Uploaded Successfuly");
}


$sql = "INSERT INTO employee (	Upload,	Name,	Aadhar,	Phone,	Address,	Gender)  VALUES ('$upload','$name','$aadhar','$phone','$address','$gender')";

if($conn->query($sql) === true)
{
  echo "Data is Inserted.";
}

else{
  $err=mysqli_error($conn);
echo "data is not insert".$err;
}

}


?>








</body>
</html>