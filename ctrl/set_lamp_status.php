<?php

session_start();
if ($_SESSION != NULL) {
    include '../DBCon.php';
    if ($_GET != NULL) {
        $id = $_GET["id"];
        $status = $_GET["status"];
        $user = $_SESSION['id'];
        $result = mysqli_query($con, "UPDATE lamp SET status='$status' WHERE id='$id'");
        if ($result) {
            if ($status == "1") {
                $result1 = mysqli_query($con, "INSERT INTO lamp_history(lamp_id, ontime, onuser) VALUES('" . $id . "', now(), '" . $user . "')");
                if ($result1) {
//                    echo "Successfully Saved...";
                    header('location:../home.php');
                }
            } elseif ($status == "0") {
                $result2 = mysqli_query($con, "UPDATE lamp_history SET offtime=now(), offuser='$user' WHERE lamp_id='$id' ORDER BY id DESC LIMIT 1");
                if ($result2) {
//                    echo "Successfully Saved...";
                    header('location:../home.php');
                }
            }
        }
    }
}
?>
