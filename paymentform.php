<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;background-image: url('p3.png');
background-repeat: no-repeat;
background-size: cover;
height: 800px;

}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 3px solid lightgrey;
  border-radius: 3px;

}
.container:hover{
color: aqua;
  background-color: gray;
  border-color: aqua;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<center>
<h2  style="color: aqua; text-shadow: 3px 3px blue; font-size: 30px;">Fill Details To Pay</h2>
<p></p>
<div class="row" style=" position: absolute; left: 180px;">
  <div class="col-45">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-40">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text"  name="name" placeholder="Full Name">

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="email" placeholder="@example.com">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" name="address" placeholder="Full Address">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" name="city" placeholder="City Name">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text"  name="state" placeholder="State Name">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text"  name="zip" placeholder="Pin Code">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" name="cardname" placeholder="">

            <label for="ccnum">Credit card number</label>
            <input type="text"  name="cardno" placeholder="1111-2222-3333-4444">
           
            <label for="expmonth">Exp Month</label>
            <input type="month" id="expmonth" style="height: 40px;" name="month" placeholder="September" min="2018-03" value="2022-05"><br><br>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="year"  placeholder="2022" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text"  name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
 
</div>
</center>





<!------------------------------php------------------------------>


<?php

require_once ('connection.php');

if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$address= $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cardname = $_POST['cardname'];
$cardno = $_POST['cardno'];
$month = $_POST['month'];
$year = $_POST['year'];
$cvv = $_POST['cvv'];





$sql = "INSERT INTO payment (Name,	Email,	Address,	City,	State,	Zip,	CardName,	CardNo,	Month,	Year,	CVV	)  VALUES ('$name','$email','$address','$city','$state','$zip','$cardname','$cardno','$month','$year','$cvv')";

if($conn->query($sql) === true)
{
  echo '<script>alert("Thanks!  you have successfully submitted your payment.")</script>';
  
}

else{
  $err=mysqli_error($conn);
echo "data is not insert".$conn->error;
}

}


?>











</body>
</html>
