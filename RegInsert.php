

<?php

require_once ('connection.php');

if(isset($_POST['submit']))
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$password = $_POST['password'];

$sql = "INSERT INTO registrationform (Firstname, Lastname, Email, Mobile, Address, Zip, Password)  VALUES ('$firstname', '$lastname', '$email', '$mobile', '$address', '$zip', '$password')";

if($conn->query($sql) === true)
{
echo "data is insert successsfully";
}

else{
echo "data is not insert";
}

}


?>