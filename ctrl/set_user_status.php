<?php

session_start();
if ($_SESSION != NULL) {
    include '../DBCon.php';
    if ($_SESSION['status'] == "1") {
        if ($_GET != NULL) {
            $id = $_GET["id"];
            $status = $_GET["status"];
            $result = mysqli_query($con, "UPDATE user SET status='$status' WHERE id='$id'");
            if ($result) {
//                echo "Successfully Saved...";
                header('location:../admin_panel.php');
            }
        }
    }
}
?>
