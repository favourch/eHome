<?php

session_start();
include 'DBCon.php';
$result = mysqli_query($con, "DELETE FROM lamps WHERE id='4' AND status='ON'");
if ($result) {
    echo "Successfully Deleted...";
} else {
    echo "Error....";
}
?>
