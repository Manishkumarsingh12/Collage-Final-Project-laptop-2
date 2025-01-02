<?php
if (isset($_POST['addemp'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $name = $_POST['empname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $add = $_POST['eaddress'];
    $salary = $_POST['salary'];
    $doj = $_POST['doj'];
    $dept = $_POST['depart'];
    require_once('connection.php');

    if (isset($_FILES['empimage']['name']) and $_FILES['empimage']['error'] == 0) {
        $expld = explode(".", $_FILES['empimage']['name']);
        $end = end($expld);
        $file_extn = strtolower($end);
        $flname = uniqid();
        $empimg = $flname . "." . $file_extn;
        $destination = "./image/" . $empimg;
        move_uploaded_file($_FILES['empimage']['tmp_name'], $destination);
        //echo("Image Uploaded Successfuly");
    }

    $sql = "INSERT INTO employee(empname,emailid,mobile,address,salary,emp_image,doj,department) VALUES('$name','$email','$mobile','$add','$salary','$empimg','$doj', '$dept')";

    if ($conn->query($sql) === true) {
        $msg = "Data inserted successfully!";
        header("location:addemp.php?msg=$msg");
    } else {
        $err = mysqli_error($conn);
        echo "Some error occures" . $err;
    }
}
