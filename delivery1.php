


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery page</title>

    <link rel="stylesheet" href="css/bootstrap.css">


<style>
  body{
    background-image: url('d3.jpg');
    background-size: cover;
    border: 6px double blue;
    height: 750px;
    
  }

.raj{
position: absolute;
top: 100px;
background-image: url('d2.jpg');
background-size: cover;
border: 3px solid red;
Height: 550px;
width: 500px;
padding: 30px 70px;
left: 360px;
}

.raj:hover{
background-image: url('d6.jpg');
color : blue;
border: 3px solid green;
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


<!-------------------------------header------------------------------------>
<div style=" height : 100px;">

<header style="position: absolute; top: 10px; left: 460px; font-size: 50px; color: darkorange; text-shadow: 2px 2px blue; font-family: Georgia, 'Times New Roman', Times, serif; ">Items Details 


</header>
</div>


<br>



<form class="raj" action="delivery2.php" method="post">

Phone No/ origin : <input type="text" name="origin" size="23px" value="<?php $randNumber = rand();echo $randNumber;?>"><br><br>

Destination : <input type="code" placeholder="Pin Code" name="destination" size="29px" ><br><br>

<label > Shipment Type:</label>
<select  name="shipment">
    <option >Document</option>
    <option>Non-document</option>
  </select>

<br><br>

Weight : <input type="text" size="23px" name="weight">
<select name="kg">
    <option >kg</option>
    <option >gm</option>
  </select>



  <br><br>
<label> Content Type:</label>
<select name="content" >
     <option >Cloths</option>
    <option >Electronic Item</option>
    <option >Furniture</option>
    <option >Gifts</option>
    <option >Pets</option>
    <option >Grocery Items</option>
    <option >Books</option>
    <option >gm</option>
    <option >kg</option>
    <option >gm</option>
    <option >kg</option>
    <option >gm</option>
    <option >kg</option>
    <option >gm</option>
  </select>

<br><br>
  Lenght :  <input type="text" name="lenght" size="32px"><br><br>
  Breath :  <input type="text" name="breath" size="32px"><br><br>
  height(cm) :  <input type="text" name="height" size="28px"><br><br><br>

<input class="taj" type="submit">
<input class="reset" type="reset">
<br><br><br>
</form>


</body>
</html>