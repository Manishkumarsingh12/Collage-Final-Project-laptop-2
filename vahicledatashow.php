<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data show in database</title>

<?php



?>

</head>
<body>
    
<div class="raj">
    <h1>List of candidate who's Register </h1>

    <div class="taj">

    <div  class="table-responsive">

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Vehicle Type</th>
                <th>Vehicle Model</th>
                <th>Vehicle Company</th>
                <th>Vehicle Name</th>
                <th>Vehicle Registration</th>
                <th>owner</th>
                <th>Upload</th>
                
</tr>

</thead>

<tbody>

<?php

require_once("connection.php");

$selectquery = "select * from vahicle ";

$query = mysqli_query($conn,$selectquery);

$num = mysqli_fetch_array($query);
if($num>0){
while($res = mysqli_fetch_array ($query))

{
    ?>

<tr>
    <td><?php echo $res['id'] ?></td>
    <td><?php echo $res['Type'] ?></td>
    <td><?php echo $res['Company'] ?></td>
    <td><?php echo $res['Model'] ?></td>
    <td><?php echo $res['Name'] ?></td>
    <td><?php echo $res['Registration'] ?></td>
    <td><?php echo $res['owner'] ?></td>
    <td><?php echo $res['Upload'] ?></td>
    

</tr>

</tbody>

<?php

}
}else{
    $err=mysqli_error($conn);
    echo "Error ".$err;
}
?>

</table>

</div>
</div>
</div>




</body>
</html>