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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Zip</th>
                <th>Password</th>
</tr>

</thead>

<tbody>

<?php

require_once("connection.php");

$selectquery = "select * from registrationform ";

$query = mysqli_query($conn,$selectquery);

$num = mysqli_fetch_array($query);

while($res = mysqli_fetch_array ($query))

{
    ?>

<tr>
    <td><?php echo $res['id'] ?></td>
    <td><?php echo $res['Firstname'] ?></td>
    <td><?php echo $res['Lastname'] ?></td>
    <td><?php echo $res['Email'] ?></td>
    <td><?php echo $res['Mobile'] ?></td>
    <td><?php echo $res['Address'] ?></td>
    <td><?php echo $res['Zip'] ?></td>
    <td><?php echo $res['Password'] ?></td>

</tr>

</tbody>

<?php

}

?>

</table>

</div>
</div>
</div>




</body>
</html>