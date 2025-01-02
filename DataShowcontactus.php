<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Data Show</title>
</head>
<body>

<div class="raj">

<h1> list of People Who Message us.</h1>

<div class="taj">


<div class="table-responsive">

<table>
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Company_name</th>
        <th>PhoneNo</th>  
        <th>Email</th>
        <th>Message</th>
</tr>
</thead>


<tbody>

<?php



require_once("connection.php");

$selectquery = "select * from contactus ";

$query = mysqli_fetch_array($conn, $selectquery);

$num = mysqli_query($query);

while($res = mysqli_fetch_array($query))

//require_once("connection.php");

//$selectquery = "select * from contactus ";

/*$query = mysqli_query($conn,$selectquery);

$num = mysqli_fetch_array($query);

while($res = mysqli_fetch_array ($query))
*/




{

?>

<tr>

<td> <?php echo $res['id'];?></td>
<td> <?php echo $res['Name'];?></td> 
<td> <?php echo $res['Companyname'];?></td>
<td> <?php echo $res['PhoneNo'];?></td>
<td> <?php echo $res['Email'];?></td>
<td> <?php echo $res['Message'];?></td>

</tr>
<?php


}
?>


</table>
</div>
</div>
</div>

    
</body>
</html>