<?php
session_start();
include 'DBCon.php';
//$result = mysqli_query($con, "SELECT status FROM lamps WHERE id='1'");
$result = mysqli_query($con, "SELECT * FROM lamps");
while ($row = mysqli_fetch_array($result)) {
    echo $row['id'];
    echo $row['status'];
    ?>
    <br>
    <?php
}
?>
