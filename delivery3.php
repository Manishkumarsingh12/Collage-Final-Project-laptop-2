<!DOCTYPE html>
<head>
</head>
<body><br>
<center><h1  style="font-size: 40px; color: darkorange; text-shadow: 3px 3px blue;  font-family: Georgia, 'Times New Roman', Times, serif; ">Delivery Address</h1></center>

</body>
</html>




<?php

require_once("connection.php");
print_r("Origin :".$_POST['origin']);
if($_POST)
{
    $origin = $_POST['origin'];
    $name = $_POST['name1'];
    $phone = $_POST['phone1'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $sql = "UPDATE  delivery SET Name1='$name',	Phone1='$phone',	Address1='$address1',	Address2='$address2' WHERE Origin ='$origin'";
}


if($conn->query($sql) === TRUE)
{
    echo '<script>alert("you have successfully submitted your Pickup Address.")</script>';
   
}
else{
    echo "data is not update".$conn->error;   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery 3 page</title>


    <link rel="stylesheet" href="css/bootstrap.css">

<!---------------------------------------CSS---------------------------------------->
<style>



body{
background-image: url('dd2.webp');
background-size: cover;
border: 6px double blue;
height: 750px;

}

.raj{
position: absolute;
top: 120px;
background-image: url('');
background-size: cover;
border: 3px solid red;
Height: 450px;
width: 500px;
padding: 77px 70px;
left: 370px;

}

.raj:hover{
background-image: url('ddd5.jpg');
color : darkblue;
border: 3px solid green;
}

.taj{
position: absolute;
left: 200px;
}
.taj:hover{
background-color : royalblue;
color: red;
}
.reset{
position: absolute;
left: 270px;
}
.reset:hover{
background-color : royalblue;
color: red;
}

</style>


</head>


<body>



<form action="delivery4.php" method="post" class="raj">

<input type="hidden" name="origin" value="<?php echo $_POST['origin']; ?>"><br><br>

Name : <input Type="text" placeholder="Name who deliver" size="33px" name="name"><br><br>

Phone No: <input Type="PhoneNo" placeholder="phone Number" size="30px" name="phone"><br><br>

Address 1 : <input Type="text" placeholder="Address 3" size="30px" name="address3"><br><br>

Address 2 : <input Type="text" placeholder="Address 4" size="30px" name="address4"><br><br><br>

<input type="submit" class="taj">

<input type="reset" class="reset">
</form>   
</body>
</html>