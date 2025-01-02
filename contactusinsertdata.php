<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us data show</title>

<style>
    body{
        background-size: cover;
        background-attachment: fixed;
        background-image: url('c6.gif');

    }


table, th, td{
    border-collapse: collapse;
    border: 1px solid blue;


}
td{
    border-spacing: 30px;
  
width: 10%;
height: 20%;
padding: 15px;
text-align: center;



}
td:hover{

    background-color: aqua;

}
th:hover{
    background-color: red;

}

</style>

</head>
<body>
    




<?php

require_once("connection.php");




if(isset($_POST['submit']))
{
$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contactus (Name, Company, PhoneNo, Email, Message) VALUES ('$name','$company','$phone','$email','$message')";

if($conn->query($sql) === true)

{
    echo "data insert";
}
else{
    echo"data not insert";
}

}

?>



<?php

require_once("connection.php");

$selectquery = "select * from contactus ";

$query = mysqli_query($conn,$selectquery);

$num = mysqli_fetch_array($query);
if($num>0){
while($res = mysqli_fetch_array ($query))

{
    ?>



<table>
<tr span="2" style="background-color: yellow">
   <th> Id </th>
   <th> Name </th>
   <th> Company </th>
   <th> Phone No.</th>
   <th> Email </th>
   <th> Message </th>
</tr><br><br><br><br><br>

<tr span="2" style="background-color: lightgreen">
    <td><?php echo $res['id'] ?></td>
    <td><?php echo $res['Name'] ?></td>
    <td><?php echo $res['Company'] ?></td>
    <td><?php echo $res['PhoneNo'] ?></td>
    <td><?php echo $res['Email'] ?></td>
    <td><?php echo $res['Message'] ?></td>
    
    

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

<h1 style="position: absolute; left: 470px; color: red; top: -5px; text-shadow: 2px 3px black;"><u> Customer Complain </u></h1>


</body>
</html>