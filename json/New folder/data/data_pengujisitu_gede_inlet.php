<?php
include ("sambung.php");

$sth = mysql_query("SELECT temperature FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows = array();
$rows['name'] = 'Temperatur';
while($r = mysql_fetch_array($sth)) {
    $rows['data'][] = $r['temperature'];
}

$sth = mysql_query("SELECT tds FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows1 = array();
$rows1['name'] = 'TDS';
while($r = mysql_fetch_array($sth)) {
    $rows1['data'][] = $r['tds'];
}

$sth = mysql_query("SELECT tss FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows2 = array();
$rows2['name'] = 'TSS';
while($r = mysql_fetch_array($sth)) {
    $rows2['data'][] = $r['tss'];
}

$sth = mysql_query("SELECT debit FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows3 = array();
$rows3['name'] = 'Debit';
while($r = mysql_fetch_array($sth)) {
    $rows3['data'][] = $r['debit'];
}

$sth = mysql_query("SELECT ph FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows4 = array();
$rows4['name'] = 'PH';
while($r = mysql_fetch_array($sth)) {
    $rows4['data'][] = $r['ph'];
}
$sth = mysql_query("SELECT bod FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows5 = array();
$rows5['name'] = 'BOD';
while($r = mysql_fetch_array($sth)) {
    $rows5['data'][] = $r['bod'];
}

$sth = mysql_query("SELECT cod FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows6 = array();
$rows6['name'] = 'COD';
while($r = mysql_fetch_array($sth)) {
    $rows6['data'][] = $r['cod'];
}

$sth = mysql_query("SELECT do FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows7 = array();
$rows7['name'] = 'DO';
while($r = mysql_fetch_array($sth)) {
    $rows7['data'][] = $r['do'];
}

$sth = mysql_query("SELECT 	total_phospate_po4 FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows8 = array();
$rows8['name'] = 'Total Phospate Po4';
while($r = mysql_fetch_array($sth)) {
    $rows8['data'][] = $r['total_phospate_po4'];
}

$sth = mysql_query("SELECT 	nitrate_no3 FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows9 = array();
$rows9['name'] = 'nitrate_no3';
while($r = mysql_fetch_array($sth)) {
    $rows9['data'][] = $r['nitrate_no3'];
}

$sth = mysql_query("SELECT 	arsenic_as FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows10 = array();
$rows10['name'] = 'arsenic_as';
while($r = mysql_fetch_array($sth)) {
    $rows10['data'][] = $r['arsenic_as'];
}
$sth = mysql_query("SELECT 	cobalt_co FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows11 = array();
$rows11['name'] = 'cobalt_co';
while($r = mysql_fetch_array($sth)) {
    $rows11['data'][] = $r['cobalt_co'];
}
$sth = mysql_query("SELECT 	boron_b FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows12 = array();
$rows12['name'] = 'boron_b';
while($r = mysql_fetch_array($sth)) {
    $rows12['data'][] = $r['boron_b'];
}
$sth = mysql_query("SELECT 	selenium_se FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows13 = array();
$rows13['name'] = 'selenium_se';
while($r = mysql_fetch_array($sth)) {
    $rows13['data'][] = $r['selenium_se'];
}
$sth = mysql_query("SELECT 	cadmium_cd FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows14 = array();
$rows14['name'] = 'cadmium_cd';
while($r = mysql_fetch_array($sth)) {
    $rows14['data'][] = $r['cadmium_cd'];
}
$sth = mysql_query("SELECT 	chrom_hexavalen_cr6 FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows15 = array();
$rows15['name'] = 'chrom_hexavalen_cr6';
while($r = mysql_fetch_array($sth)) {
    $rows15['data'][] = $r['chrom_hexavalen_cr6'];
}
$sth = mysql_query("SELECT 	copper_cu FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows16 = array();
$rows16['name'] = 'copper_cu';
while($r = mysql_fetch_array($sth)) {
    $rows16['data'][] = $r['copper_cu'];
}

$sth = mysql_query("SELECT 	lead_pb FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows17 = array();
$rows17['name'] = 'lead_pb';
while($r = mysql_fetch_array($sth)) {
    $rows17['data'][] = $r['lead_pb'];
}
$sth = mysql_query("SELECT 	mercury_hg FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows18 = array();
$rows18['name'] = 'mercury_hg';
while($r = mysql_fetch_array($sth)) {
    $rows18['data'][] = $r['mercury_hg'];
}
$sth = mysql_query("SELECT 	zinc_zn FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows19 = array();
$rows19['name'] = 'zinc_zn';
while($r = mysql_fetch_array($sth)) {
    $rows19['data'][] = $r['zinc_zn'];
}
$sth = mysql_query("SELECT 	cyanide_cn FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows20 = array();
$rows20['name'] = 'cyanide_cn';
while($r = mysql_fetch_array($sth)) {
    $rows20['data'][] = $r['cyanide_cn'];
}
$sth = mysql_query("SELECT 	flouride_f FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows21 = array();
$rows21['name'] = 'flouride_f';
while($r = mysql_fetch_array($sth)) {
    $rows21['data'][] = $r['flouride_f'];
}
$sth = mysql_query("SELECT 	nitrite_no2 FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows22 = array();
$rows22['name'] = 'nitrite_no2';
while($r = mysql_fetch_array($sth)) {
    $rows22['data'][] = $r['nitrite_no2'];
}
$sth = mysql_query("SELECT 	free_chlorine_cl2 FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows23 = array();
$rows23['name'] = 'free_chlorine_cl2';
while($r = mysql_fetch_array($sth)) {
    $rows23['data'][] = $r['free_chlorine_cl2'];
}
$sth = mysql_query("SELECT 	sulfide_h2s FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows24 = array();
$rows24['name'] = 'sulfide_h2s';
while($r = mysql_fetch_array($sth)) {
    $rows24['data'][] = $r['sulfide_h2s'];
}
$sth = mysql_query("SELECT 	ammonia FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows25 = array();
$rows25['name'] = 'ammonia';
while($r = mysql_fetch_array($sth)) {
    $rows25['data'][] = $r['ammonia'];
}
$sth = mysql_query("SELECT 	chloride_cl FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows26 = array();
$rows26['name'] = 'chloride_cl';
while($r = mysql_fetch_array($sth)) {
    $rows26['data'][] = $r['chloride_cl'];
}
$sth = mysql_query("SELECT 	iron_fe FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows27 = array();
$rows27['name'] = 'iron_fe';
while($r = mysql_fetch_array($sth)) {
    $rows27['data'][] = $r['iron_fe'];
}
$sth = mysql_query("SELECT 	manganese_mn FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows28 = array();
$rows28['name'] = 'manganese_mn';
while($r = mysql_fetch_array($sth)) {
    $rows28['data'][] = $r['manganese_mn'];
}
$sth = mysql_query("SELECT 	barium_ba FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows29 = array();
$rows29['name'] = 'barium_ba';
while($r = mysql_fetch_array($sth)) {
    $rows29['data'][] = $r['barium_ba'];
}
$sth = mysql_query("SELECT 	sulfat FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows30 = array();
$rows30['name'] = 'sulfat';
while($r = mysql_fetch_array($sth)) {
    $rows30['data'][] = $r['sulfat'];
}
$sth = mysql_query("SELECT 	fecal_coliform FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows31 = array();
$rows31['name'] = 'fecal_coliform';
while($r = mysql_fetch_array($sth)) {
    $rows31['data'][] = $r['fecal_coliform'];
}
$sth = mysql_query("SELECT 	total_coliform FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows32 = array();
$rows32['name'] = 'total_coliform';
while($r = mysql_fetch_array($sth)) {
    $rows32['data'][] = $r['total_coliform'];
}
$sth = mysql_query("SELECT 	oil_fat FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows33 = array();
$rows33['name'] = 'oil_fat';
while($r = mysql_fetch_array($sth)) {
    $rows33['data'][] = $r['oil_fat'];
}
$sth = mysql_query("SELECT 	detergent_mbas FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows34 = array();
$rows34['name'] = 'detergent_mbas';
while($r = mysql_fetch_array($sth)) {
    $rows34['data'][] = $r['detergent_mbas'];
}
$sth = mysql_query("SELECT 	phenol FROM `pengujian_situ` WHERE nama_situ = 'Situ Gede-Inlet'");
$rows35 = array();
$rows35['name'] = 'phenol';
while($r = mysql_fetch_array($sth)) {
    $rows35['data'][] = $r['phenol'];
}

$result = array();
array_push($result,$rows);

array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);
array_push($result,$rows5);
array_push($result,$rows6);
array_push($result,$rows7);
array_push($result,$rows8);
array_push($result,$rows9);
array_push($result,$rows10);
array_push($result,$rows11);
array_push($result,$rows12);
array_push($result,$rows13);
array_push($result,$rows14);
array_push($result,$rows15);
array_push($result,$rows16);
array_push($result,$rows17);
array_push($result,$rows18);
array_push($result,$rows19);
array_push($result,$rows20);
array_push($result,$rows21);
array_push($result,$rows22);
array_push($result,$rows23);
array_push($result,$rows24);
array_push($result,$rows25);
array_push($result,$rows26);
array_push($result,$rows27);
array_push($result,$rows28);
array_push($result,$rows29);
array_push($result,$rows30);
array_push($result,$rows31);
array_push($result,$rows32);
array_push($result,$rows33);
array_push($result,$rows34);
array_push($result,$rows35);

print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
