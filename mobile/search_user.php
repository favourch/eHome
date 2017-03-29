<?php

include './DBCon.php';
$un = $_GET['un'];
$pw = $_GET['pw'];

if ($un != NULL) {
    $result = mysqli_query($con, "SELECT * FROM user WHERE un='$un' AND pw='$pw'");
    if ($row = mysqli_fetch_array($result)) {
        print(json_encode($row));
        echo "Successfully Saved...";
    } else {
        print(json_encode(NULL));
    }
}
?>