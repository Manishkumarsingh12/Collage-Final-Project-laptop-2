<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>

<link rel="stylesheet" href="css/bootstrap.css">

<style>

table th, td{
    border: 4px groove white;
    border-spacing: 30px;
    padding-left: 15px;
    padding-right: 20px;
    color: black;
    background-color:#ffcccc;
    font-family:  Sans-serif;
    
}

th:hover{
    background-color: white;
    color: red;
}
}

}
</style>

</head>
<body>


<div style=" height : 100px;">

<header style="position: absolute; top: 10px; left: 430px; font-size: 50px; color: darkorange; text-shadow: 2px 2px blue; font-family: Georgia, 'Times New Roman', Times, serif; "><u>Employee's Details</u> 


</header>
</div>


<form action="" >

<div style=" position: absolute; left: 1050px; top: 120px;">
<a href="employeeform.php" type="button" class="btn btn-outline-dark">+ADD MORE</a>
</form>

</div>
<div class="raj">
    <h5><marquee behavior="slice" style="position: absolute; background-color:aqua; height: 35px; color: #F76E11; top: 80px;"> List of employee who,s work in our courier Company. </marquee></h5>

    <div class="taj">
<br>
    <div  class="table-responsive">
    <center>
        <br><br>
    <table >
        
        <thead>
            <tr class="w3-table-all">
                <th>id</th>
                <th>Employee&nbsp;Photo</th>
                <th>Employee&nbsp;Name</th>
                <th>Employee&nbsp;Aadhar</th>
                <th>Employee&nbsp;Phone</th>
                <th>Employee&nbsp;Address</th>
                <th>Gender</th>
                
                
</tr>

</thead>

<tbody>
</center>

<?php

require_once("connection.php");

$selectquery = "select * from employee ";

$query = mysqli_query($conn,$selectquery);

$num = mysqli_fetch_array($query);
if($num>0){
while($res = mysqli_fetch_array ($query))

{
    ?>

<tr>
    <td><?php echo $res['id'] ?></td>
    <td><img src="./image/<?php echo $res['Upload'] ?>"width="150px" height="80px"></td>
    <td><?php echo $res['Name'] ?></td>
    <td><?php echo $res['Aadhar'] ?></td>
    <td><?php echo $res['Phone'] ?></td>
    <td><?php echo $res['Address'] ?></td>
    <td><?php echo $res['Gender'] ?></td>
    
    

</tr>

</tbody>

<?php

}
}else{
    $err=mysqli_error($conn);
    echo "Error ".$conn->error;
}
?>

</table>

</div>
</div>
</div>


    
</body>
</html>