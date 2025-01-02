<?php

require_once("connection.php");

if(isset($_POST['submit']))
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
    $name1 = $_POST['name1'];
    $phone1 = $_POST['phone1'];
    $address1 = $_POST['Address 1'];
    $address2 = $_POST['Address 2'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address3 = $_POST['Address 3'];
    $address4 = $_POST['Address 4'];



    ?>

    <center>
<table class="tb1" style="color: red; background-color: lightgreen;">
<h2 style="color:blue; background-color: aqua;">Shipment Detail for :<?= $origin ?></h2>
<hr>
    <tr><th>Origin :</th><td><?= $origin ?> </td><td class="blank"></td><th>Destination :<td><?= $destination ?></td></tr>
    <tr><th>Shipment :</th><td><?= $shipment?> </td><td class="blank"></td><th>Weight:<td><?= $weight ?><<?=$kg?>/td></tr> 
  <tr><th colspan="4"><hr></th></tr>
  <tr><th> Content:</th><td><?= $content?> </td><td class="blank"></td><th>Length :</th><td><?= $lenght ?></td></tr> 
  <tr><th> Breath:</th><td><?= $breath?> </td><td class="blank"></td><th>heigth :</th><td><?= $height ?></td></tr> 
  <tr><th> Name1:</th><td><?= $name1?> </td><td class="blank"></td><th>Phone:</th><td><?= $phone1 ?></td></tr> 
  <tr><th> Address1:</th><td><?= $address1?> </td><td class="blank"></td><th>Address2 :</th><td><?= $address2 ?></td></tr> 
  <tr><th> Name:</th><td><?= $name?> </td><td class="blank"></td><th>Phone:</th><td><?= $phone ?></td></tr> 
  <tr><th> Address3:</th><td><?= $address3?> </td><td class="blank"></td><th>Address4 :</th><td><?= $address4 ?></td></tr> 


<hr>
</center>
<?php








$sql = "INSERT INTO delivery (Origin, Destination,	Shipment,	Weight, 	Kg, 	Content,  Lenght,	Breath,	Height, 	Name1,	Phone1,	Address 1,	Address 2,	Name,	Phone,	Address 3,	Address 4) VALUES ('$origin', '$destination',	'$shipment',	'$weight',	'$kg',	'$content',	'$lenght',	'$breath',	'$height', 'name1',	'phone1',	'address1',	'address2',	'name',	'phone',	'address3',	 'address4' )";

if($conn->query($sql) === true)
{
echo "data is insert successsfully";
}

else{
echo "data is not insert";
}

}


?>