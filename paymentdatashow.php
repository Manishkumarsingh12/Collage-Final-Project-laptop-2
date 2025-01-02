<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details Data Show</title>

<style>

body{

    
background-image: url('p1.jfif');
background-repeat: no-repeat;
background-size: cover;

}

table, th, td {
  border: 1px solid red;
  border-collapse: collapse;
  text-align: center;
  padding: 10px 15px 10px;
}
th {
  background-color: yellow;
}
td {
  background-color: #96D4D4;
}


</style>

</head>
<body>
<center>

<h1 style="text-shadow: 2px 2px blue; color: red;"> Payment Details.</h1>

<p style="text-shadow: 2px 2px yellow; color: aqua; font-size: 30px;">list of customer who pay. (भुगतान करने वाले ग्राहकों की सूची) </p>

</center>

<div class="table-responsive">

<table>
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>  
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Card Name</th>
        <th>Card No</th>
        <th>Month</th>  
        <th>Year</th>
        <th>CVV</th>
</tr>
</thead>




<?php

require_once("connection.php");

$selectquery = "select * from payment ";

$query = mysqli_query($conn,$selectquery);

$num = mysqli_fetch_array($query);
if($num>0){
while($res = mysqli_fetch_array ($query))

{
    ?>

<tbody>

<tr>

<td> <?php echo $res['id'];?></td>
<td> <?php echo $res['Name'];?></td> 
<td> <?php echo $res['Email'];?></td>
<td> <?php echo $res['Address'];?></td>
<td> <?php echo $res['City'];?></td>
<td> <?php echo $res['State'];?></td>
<td> <?php echo $res['Zip'];?></td>
<td> <?php echo $res['CardName'];?></td> 
<td> <?php echo $res['CardNo'];?></td>
<td> <?php echo $res['Month'];?></td>
<td> <?php echo $res['Year'];?></td>
<td> <?php echo $res['CVV'];?></td>

</tr>
 

</tbody>

<?php

}
}else{
  
  echo "data is not insert".$conn->error;
}
?>

</table>

</div>
</div>
</div>




</body>
</html>