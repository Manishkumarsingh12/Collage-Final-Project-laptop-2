<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td{
            text-align:left;
            padding-left:15px;
            padding-right:15px;
        }
        .blank{
            width:200px;
        }
    </style>
</head>
<body>
<?php

require_once 'connection.php';
?>

<?php

if(isset($_GET['pname']))
{
    $kw = $_GET['pname'];

    $sql = "SELECT * from delivery where Name like '%$kw%' or Content like '%$kw%' ";

    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
{
    while($rowp = mysqli_fetch_array($result))
    {
        $origin = $rowp['Origin'];
        $destination = $rowp['Destination'];
        $shipment = $rowp['Shipment'];
        $weight = $rowp['Weight'];
        $kg = $rowp['Kg'];
        $content = $rowp['Content'];
        $lenght = $rowp['Lenght'];
        $breath = $rowp['Breath'];
        $height = $rowp['Height'];
        $name1 = $rowp['Name1'];
        $phone1 = $rowp['Phone1'];
        $address1 = $rowp['Address 1'];
        $address2 = $rowp['Address 2'];
        $name = $rowp['Name'];
        $phone = $rowp['Phone'];
        $address3 = $rowp['Address 3'];
        $address4 = $rowp['Address 4'];




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

    }
}
{
    $err=mysqli_error($conn);
    echo "".$err;
}
}

?>

<div class="search">
</form>
</div>

</body>
</html>