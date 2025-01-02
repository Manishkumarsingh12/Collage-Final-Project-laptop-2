
<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "project";

$conn = new mysqli($hostname, $user, $pass, $dbname);

if ($conn)
{
   // echo "Data Connected";
}
else{

    echo "Not Connected";

}

?>