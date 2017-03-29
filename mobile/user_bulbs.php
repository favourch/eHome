<?php

include './DBCon.php';
$un = $_GET['un'];
$pw = $_GET['pw'];

$mysql_host = 'mysql1002.mochahost.com';
$mysqluser = 'eboxteam';
$mysqlpass = 'bclrcb02813';


if (!mysql_connect($mysql_host, $mysqluser, $mysqlpass) && !mysql_select_db('eboxteam_eHome')) {
    die("Couldn't connect");
} else {
    mysql_select_db('eboxteam_eHome');
    $query = "SELECT lamp.id, lamp.status,lamp.location,lamp.type,lamp.watts,lamp.serial FROM user join lamp_user ON user.id = lamp_user.user_id join lamp ON lamp.id = lamp_user.lamp_id WHERE un='$un' AND pw='$pw'";
    if ($query_run = mysql_query($query)) {
        if (mysql_num_rows($query_run) != NULL) {
            while ($row = mysql_fetch_assoc($query_run)) {
                $output[] = $row;
            }
            print(json_encode($output));
        } else {
            print(json_encode(NULL));
        }
    }
}
?>

