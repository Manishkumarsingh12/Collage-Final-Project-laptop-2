<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page </title>

<link rel="stylesheet" href="css/bootstrap.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="firstpage.css">


</head>
<body>


<div class="raj">

 <!--LOGO-->   
    <img src="logo1.jpg" width="150px" height="70px">



<!-- Dropdown botton -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="btn-group">
  <button class="btn btn-outline-dark border border-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Delivery
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="delivery1.php">Item details</a></li>
    <li><a class="dropdown-item" href="delivery2.php">Pickup</a></li>
    <li><a class="dropdown-item" href="delivery3.php">Delivery</a></li>
    <li><a class="dropdown-item" href="delivery4.php">Downlord details</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-outline-dark border border-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Payment
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="paymentform.php">Payment</a></li>
    <li><a class="dropdown-item" href="paymentdatashow.php">Payment Details</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-outline-dark border border-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Product
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
    <li><a class="dropdown-item" href="productpage.php?pname=Gift">Gift</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Cloths">Cloths</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Electrpnic Item">Electronic Item</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Furniture">Furniture</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Pets">Pets</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Grocery Items">Grocery Items</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Books">Books</a></li>
    <li><a class="dropdown-item" href="productpage.php?pname=Cloths">Cloths</a></li>
    
  </ul>
</div>



<div class="btn-group">
  <button class="btn btn-outline-dark border border-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Employee 
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="employeedetail.php">Employee Details</a></li>
    <li><a class="dropdown-item" href="employeeform.php">Add Employee</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-outline-dark border border-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Tour
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="map.php">Map</a></li>
    <li><a class="dropdown-item" href="vahicledetail.php">Vehical Details</a></li>
    <li><a class="dropdown-item" href="vahicleform.php">Add Vehicle</a></li>
  </ul>
</div>

<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a type="button" class="btn btn-outline-primary" href="registrationform.php" >SignIN</a>
<a type="button" class="btn btn-outline-primary"  href="logout.php">SignOut</a>
</span>


</div>


<!----------------------------------------------second Menu-----------------------------------------------u-->



<nav class="navbar navbar-light bg-light" style=" border: 1px solid gray;">
  <div class="container-fluid" >
    <form action="searchpage.php"   method="post" class="d-flex">
      <input style=" border-radius: 25px;" name="search"  class="form-control me-2  rounded-right " type="search" placeholder="Search ....." aria-label="Search" size="50px">
      
      <button style=" border-radius: 25px;" name="btnsearch"   class="btn btn-outline-success me-2  rounded-left " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom" type="submit">&nbsp;Search&nbsp;</button></form>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="btn btn-outline-secondary  me-2 border border-light" onClick="return alert('You are Already Home Page.')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click on Home bottom"  type="button"  href="firstpage.php" >Home</a>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="btn btn-sm btn-outline-secondary  border border-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click on about us bottom" type="button" href="Aboutus.php"> About us</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="btn btn-outline-secondary me-2  border border-light"   data-bs-toggle="tooltip" data-bs-placement="bottom" title="click on contact us bottom" href="contactus.php" type="button">Contact Us</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="btn btn-sm btn-outline-secondary  border border-light "  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click on blog Bottom"  href="blogpage.php" type="button">Blog</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      

      <a type="button" href="contactusinsertdata.php" class="btn btn-primary">
  Notifications <span class="badge badge-light">4</span>
</a>







    </form>
  </div>
</nav>





<!----------------------------------------------carsoul------------------------------------------------>



<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="ab2.jpg" height="300px";  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="blog4.gif" height="300px"; class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img  src="p4.gif" height="300px"; class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


















</body>
</html>