<?php
//delete.php

$user = "exmadministrator";
$pass = "project12";
$db = "tabulation";
 $db_link = mysql_connect("172.16.4.19",$user,$pass) or die ("could not connect to the server\n");
 mysql_select_db($db) or die ("could not select database\n");

$sql="DELETE FROM `ecrd_mst` WHERE `ID`='$_GET[ID]'";
mysql_query($sql);

Header("Location: creditform.php");
?>