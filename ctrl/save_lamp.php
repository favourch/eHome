<?php

session_start();
include '../DBCon.php';
$sno = $_POST['sno'];
$loc = $_POST['loc'];
$type = $_POST['type'];
$watts = $_POST['watts'];
$user = $_SESSION['id'];

$result1 = mysqli_query($con, "INSERT INTO lamp(serial, location, type, watts, status) VALUES
        ('" . $sno . "','" . $loc . "','" . $type . "','" . $watts . "','0')");
if ($result1) {
    $result = mysqli_query($con, "SELECT id FROM lamp WHERE serial='$sno'");
    if ($row = mysqli_fetch_array($result)) {
        $lamp_id = $row['id'];
        $result2 = mysqli_query($con, "INSERT INTO lamp_user(user_id, lamp_id) VALUES
        ('" . $user . "','" . $lamp_id . "')");
        if ($result2) {
//            echo "Successfully Saved...";
            header('location:../lamp_manager.php?id=1');
        }
    }
} else {
//        echo "Error....";
    header('location:../lamp_manager.php?id=0');
}
?>
