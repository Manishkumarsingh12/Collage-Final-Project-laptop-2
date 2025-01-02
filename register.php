<?php
require_once('connection.php');
require_once('impfuns.php');
if (isset($_POST['regiemp'])) {
    $name = $_POST['empname'];
    $empid = generateRandomNumber(6);;
    $email = $_POST['email'];
    $sql = "SELECT * FROM empregi where emp_email = '$email'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $msg = "Email ID Already Exist Please Login!";
        header("location:registration.php?msg=$msg");
    } else {
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $role = $_POST['role'];
        if ($pass != $cpass) {
            $msg = "Password and Confirm Password Mismatch!";
            header("location:registration.php?msg=$msg");
        } else {
            $hpass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO empregi(emp_id,emp_name,emp_email,pass,role,created_on) VALUES('$empid','$name','$email','$hpass','$role',
now())";
            if ($conn->query($sql) === true) {
                $msg = "registered successfully please login";
                header("location:login.php?msg=$msg");
            } else {
                $err = mysqli_error($conn);
                echo "Error :" . $err;
            }
        }
    }
}
