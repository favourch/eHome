<?php

$host = 'mysql1002.mochahost.com';
$uname = 'eboxteam';
$pwd = 'bclrcb02813';
$db = "eboxteam_eHome";

$con = mysql_connect($host, $uname, $pwd) or die("connection failed");
mysql_select_db($db, $con) or die("db selection failed");

$id = $_REQUEST['id'];
$status = $_REQUEST['status'];
$user_id= $_REQUEST['on_user'];

$flag['code'] = 0;

if ($r = mysql_query("update eboxteam_eHome.lamp set status=$status where id=$id", $con) && $r = mysql_query("INSERT INTO lamp_history(lamp_id, ontime, onuser) VALUES('" . $id . "', now(), '" . $on_user . "')", $con)) {
    $flag['code'] = 1;
}

print(json_encode($flag));
mysql_close($con);
?>
