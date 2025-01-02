<?php

require_once("connection.php");
?>
<br>  
<?php

print_r("Origin :".$_POST['origin']);
if($_POST)
{ 
    $origin = $_POST['origin'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address3 = $_POST['address3'];
    $address4 = $_POST['address4'];
    $sql = "UPDATE delivery SET Name ='$name',	Phone='$phone',	Address3='$address3',	Address4='$address4' WHERE Origin ='$origin'";
    
    if($conn->query($sql) === TRUE){  
        echo '<script>alert("you have successfully submitted your Delivery Details.")</script>';
  
    }    
    else{
      echo "data is not insert".$conn->error;
    }
}    
?>
  

<?php



    $sql = "SELECT * from delivery where Origin ='$origin' ";

    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0)
{
    while($rowp = mysqli_fetch_array($result))
    {
        $origin = $rowp['Origin'];
        $destination = $rowp['Destination'];
        $shipment = $rowp['Shipment'];
        $weight = $rowp['Weight'];
        $kg = $rowp['Kg'];
        $content = $rowp['Content'];
        $lenght = $rowp['Lenght'];
        $breath = $rowp['Breath'];
        $height = $rowp['Height'];
        $name1 = $rowp['Name1'];
        $phone1 = $rowp['Phone1'];
        $address1 = $rowp['Address1'];
        $address2 = $rowp['Address2'];
        $name = $rowp['Name'];
        $phone = $rowp['Phone'];
        $address3 = $rowp['Address3'];
        $address4 = $rowp['Address4'];


    }
  }

        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>



<div id="content">
<center>
<table class="tb1" style="color: red; background-color: lightgreen;">
    <h2 style="color:blue; background-color: aqua;">Shipment Detail for :<?= $origin ?></h2>
    <hr>
    <tr><th>Origin :</th><td><?= $origin ?> </td><td class="blank"></td><th>Destination :<td><?= $destination ?></td></tr>
        <tr><th>Shipment :</th><td><?= $shipment?> </td><td class="blank"></td><th>Weight:<td><?= $weight ?><<?=$kg?>/td></tr> 
      <tr><th colspan="4"><hr></th></tr>
      <tr><th> Content:</th><td><?= $content?> </td><td class="blank"></td><th>Length :</th><td><?= $lenght ?></td></tr> 
      <tr><th> Breath:</th><td><?= $breath?> </td><td class="blank"></td><th>heigth :</th><td><?= $height ?></td></tr> 
      <tr><th> Name1:</th><td><?= $name1?> </td><td class="blank"></td><th>Phone:</th><td><?= $phone1 ?></td></tr> 
      <tr><th> Address1:</th><td><?= $address1?> </td><td class="blank"></td><th>Address2 :</th><td><?= $address2 ?></td></tr> 
      <tr><th> Name:</th><td><?= $name?> </td><td class="blank"></td><th>Phone:</th><td><?= $phone ?></td></tr> 
      <tr><th> Address3:</th><td><?= $address3?> </td><td class="blank"></td><th>Address4 :</th><td><?= $address4 ?></td></tr> 

</table>
<hr>
    </center>
    <button onclick="createPDF()">Create PDF</button>
    <a type="button"  href="paymentform.php" class="btn btn-outline-dark border border-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Payment
</a>
</div>


<script>
        function createPDF() {
            var pdf = document.getElementById("content");
            var opt = {
                margin: 1,
                filename: '<?php echo $origin ;?>.pdf',
                image: { type: 'jpeg', quality: 1 },
                html2canvas:  { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
            };
            html2pdf().set(opt).from(pdf).save();
        }
    </script>


