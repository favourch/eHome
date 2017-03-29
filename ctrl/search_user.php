<?php

session_start();
include '../DBCon.php';
$un = $_POST['un'];
$pw = $_POST['pw'];

if ($un != NULL) {
    $result = mysqli_query($con, "SELECT * FROM user WHERE un='$un' AND pw='$pw'");
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['un'] = $row['un'];
        $_SESSION['pw'] = $row['pw'];
        $_SESSION['status'] = $row['status'];
//        echo "Successfully Saved...";
        header('location:../home.php');
    } else {
//        echo "Error....";
        header('location:../sign_in.php?id=0');
    }
} else {
    header('location:../sign_in.php');
}
?>
