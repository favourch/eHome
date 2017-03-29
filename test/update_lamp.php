<?php

session_start();
include 'DBCon.php';
$id = $_GET['id'];
$status = $_GET['status'];
$result = mysqli_query($con, "UPDATE lamps SET status='$status' WHERE id='$id'");
if ($result) {
//    echo "Successfully Updated...";
    header('location:./index.php');
} else {
    echo "Error....";
}
?>
