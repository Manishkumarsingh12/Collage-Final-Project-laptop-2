<!DOCTYPE html>
<head>
</head>
<body><br>
<center><h1  style="font-size: 40px; color: darkorange; text-shadow: 3px 3px blue;  font-family: Georgia, 'Times New Roman', Times, serif; ">Pickup Address</h1></center>

</body>
</html>
   





<?php

require_once("connection.php");
print_r("\n Origin :".$_POST['origin']);
if($_POST)
{  
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $shipment = $_POST['shipment'];
    $weight = $_POST['weight'];
    $kg = $_POST['kg'];
    $content = $_POST['content'];
    $lenght = $_POST['lenght'];
    $breath = $_POST['breath'];
    $height = $_POST['height'];
   $sql = "INSERT INTO delivery  (Origin,	Destination,	Shipment,	Weight,	Kg, Content, Lenght,	Breath,	Height) VALUES ('$origin', '$destination',	'$shipment',	'$weight',	'$kg',	'$content',	'$lenght',	'$breath',	'$height')";
   
  

if($conn->query($sql) === TRUE)
{
  echo '<script>alert(" you have successfully Fill the Item Details.")</script>';
  
   // echo " \n data is insert successsfully"; 
    // redirect("delivery2.php"); 
}
else{
    echo "data is not insert"; 
    // redirect("delivery1.php");  
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Second page</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <!---------------------------------------CSS---------------------------------------->
<style>



body{
    background-image: url('dd2.webp');
    background-size: cover;
    border: 6px double red;
    height: 750px;
    
  }

.raj{
position: absolute;
top: 120px;
background-image: url('dd8.jpg');
background-size: cover;
border: 3px solid blue;
Height: 450px;
width: 500px;
padding: 65px 70px;
left: 370px;

}

.raj:hover{
background-image: url('dd7.webp');
color : darkblue;
border: 3px solid #F8B400;
}

.taj{
  position: absolute;
  left: 180px;
}
.taj:hover{
  background-color : royalblue;
  color: red;
}
.reset{
  position: absolute;
left: 250px;
}
.reset:hover{
  background-color : royalblue;
  color: red;
}






</style>

</head>
<body>

<!----------------------------------------html form-------------------------->

<form class="raj"  action="delivery3.php" method="post">


<input type="hidden" name="origin" value="<?php echo $_POST['origin']; ?>"><br><br>

Name : <input Type="text" placeholder="Enter Full Name" size="33" name="name1"><br><br>

Phone No: <input Type="PhoneNo" placeholder="phone Number" size="30" name="phone1"><br><br>

Address 1 : <input Type="text" placeholder="Address 1" size="30" name="address1"><br><br>

Address 2 : <input Type="text" placeholder="Address 2" size="30" name="address2"><br><br><br>

<input type="submit" class="taj">

<input class="reset" type="reset">

</form>

    
</body>
</html>