<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
body{

background-image: url('v2.webp');
background-repeat: no-repeat;
background-size: cover;

}


table, th, td {
  margin: 45px;
  text-align: center;
  padding: 10px;
  border: 4px groove white;
  border-collapse: collapse;
  

}
th{
font-size: 19px;
color: #9A0680	;
background-color: limegreen;
}
th:hover{
background-color: white;
color: red;

}

td{

color: black;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
font-size: large;
background-color: mediumspringgreen;


}
td:hover{
    background-color: white;
    color: blue;
}
}


}
</style>



</head>

<body>


<div style=" height : 100px;">

<header style="position: absolute; top: 10px; left: 460px; font-size: 50px; color: darkorange; text-shadow: 2px 2px blue; font-family: Georgia, 'Times New Roman', Times, serif; ">Vehicle Details 


</header>
</div>


<form action="" >


<div style=" position: absolute; left: 1050px; top: 120px;">
<a href="vahicleform.php" type="button" class="btn btn-outline-success">+ADD MORE</a>
</form>

</div>
<div class="raj">
    <h5><marquee behavior="alternate" style="position: absolute; background-color:aqua; height: 35px; color: #F76E11; top: 80px;"> List of Vehicle who's Deliver </marquee></h5>

    <div class="taj">
<br>
    <div  class="table-responsive">

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Vehicl&nbsp;Type</th>
                <th>Vehicle&nbsp;Model</th>
                <th>Vehicle&nbsp;Company</th>
                <th>Vehicle&nbsp;Name</th>
                <th>Vehicle&nbsp;Registration</th>
                <th>Driver</th>
                <th>Owner</th>
                
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