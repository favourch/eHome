<?php

session_start();
include '../DBCon.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$un = $_POST['un'];
$pw = $_POST['pw'];

$result = mysqli_query($con, "INSERT INTO user(fname, lname, address, mobile, email, username, password, status) VALUES
        ('" . $fname . "','" . $lname . "','" . $address . "','" . $mobile . "','" . $email . "',
                '" . $un . "','" . $pw . "','3')");
if ($result) {
//        echo "Successfully Saved...";
    header('location:../sign_up.php?id=1');
} else {
//        echo "Error....";
    header('location:../sign_up.php?id=0');
}
?>
