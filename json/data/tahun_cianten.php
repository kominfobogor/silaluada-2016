<?php
include ("sambung.php");

$sth = mysql_query("SELECT * FROM `pengujian_sungai` WHERE nama_sungai = 'CIANTEN-hilir'");
$rows = array();
$rows['name'] = 'periode_uji';
while($r = mysql_fetch_array($sth)) {
    $rows['data'][] = $r['periode_uji'];
}



$result = array();
array_push($result,$rows);

print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
