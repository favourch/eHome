<?php
 include '../DBCon.php';
 $result = mysqli_query($con, "SELECT * FROM lamp");
    while ($row = mysqli_fetch_array($result)) {
        echo $row['id'];
        if ($row['status']=="1"){
            echo 'ON';
        }else{
            echo 'OFF';
        }
        echo '<br/>';
    }
?>
