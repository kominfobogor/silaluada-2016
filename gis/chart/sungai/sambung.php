<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("bplhkotabogor", $con);
?>