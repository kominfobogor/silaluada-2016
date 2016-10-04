<?php
include ("sambung.php");

$sth = mysql_query("SELECT temperature FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows = array();
$rows['name'] = 'Temperatur';
while($r = mysql_fetch_array($sth)) {
    $rows['data'][] = $r['temperature'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='temperature'");
$rows1 = array();
$rows1['name'] = 'Baku Mutu Temperature';
while($r = mysql_fetch_array($sth)) {
    $rows1['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT tds FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows2 = array();
$rows2['name'] = 'TDS';
while($r = mysql_fetch_array($sth)) {
    $rows2['data'][] = $r['tds'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='tds'");
$rows3 = array();
$rows3['name'] = 'Baku Mutu TDS';
while($r = mysql_fetch_array($sth)) {
    $rows3['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT tss FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows4 = array();
$rows4['name'] = 'TSS';
while($r = mysql_fetch_array($sth)) {
    $rows4['data'][] = $r['tss'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='tss'");
$rows5 = array();
$rows5['name'] = 'Baku Mutu TSS';
while($r = mysql_fetch_array($sth)) {
    $rows5['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT debit FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows6 = array();
$rows6['name'] = 'Debit';
while($r = mysql_fetch_array($sth)) {
    $rows6['data'][] = $r['debit'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='debit'");
$rows7 = array();
$rows7['name'] = 'Baku Mutu Debit';
while($r = mysql_fetch_array($sth)) {
    $rows7['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT ph FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows8 = array();
$rows8['name'] = 'PH';
while($r = mysql_fetch_array($sth)) {
    $rows8['data'][] = $r['ph'];
}


$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='ph-atas'");
$rows9 = array();
$rows9['name'] = 'Baku Mutu PH-Atas';
while($r = mysql_fetch_array($sth)) {
    $rows9['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='ph-bawah'");
$rows10 = array();
$rows10['name'] = 'Baku Mutu PH-Bawah';
while($r = mysql_fetch_array($sth)) {
    $rows10['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT bod FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows11 = array();
$rows11['name'] = 'BOD';
while($r = mysql_fetch_array($sth)) {
    $rows11['data'][] = $r['bod'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='bod'");
$rows12 = array();
$rows12['name'] = 'Baku Mutu BOD';
while($r = mysql_fetch_array($sth)) {
    $rows12['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT cod FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows13 = array();
$rows13['name'] = 'COD';
while($r = mysql_fetch_array($sth)) {
    $rows13['data'][] = $r['cod'];
}


$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='cod'");
$rows14 = array();
$rows14['name'] = 'Baku Mutu COD';
while($r = mysql_fetch_array($sth)) {
    $rows14['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT do FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows15 = array();
$rows15['name'] = 'DO';
while($r = mysql_fetch_array($sth)) {
    $rows15['data'][] = $r['do'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='do'");
$rows16 = array();
$rows16['name'] = 'Baku Mutu DO';
while($r = mysql_fetch_array($sth)) {
    $rows16['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT 	total_phospate_po4 FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows17 = array();
$rows17['name'] = 'Total Phospate Po4';
while($r = mysql_fetch_array($sth)) {
    $rows17['data'][] = $r['total_phospate_po4'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='total_phospate_po4'");
$rows18 = array();
$rows18['name'] = 'Baku Mutu Total Phospate Po4';
while($r = mysql_fetch_array($sth)) {
    $rows18['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT 	nitrate_no3 FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows19 = array();
$rows19['name'] = 'nitrate_no3';
while($r = mysql_fetch_array($sth)) {
    $rows19['data'][] = $r['nitrate_no3'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='nitrate_no3'");
$rows20 = array();
$rows20['name'] = 'Baku Mutu nitrate_no3';
while($r = mysql_fetch_array($sth)) {
    $rows20['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT 	arsenic_as FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows21 = array();
$rows21['name'] = 'arsenic_as';
while($r = mysql_fetch_array($sth)) {
    $rows21['data'][] = $r['arsenic_as'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='arsenic_as'");
$rows22 = array();
$rows22['name'] = 'Baku Mutu arsenic_as';
while($r = mysql_fetch_array($sth)) {
    $rows22['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	cobalt_co FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows23 = array();
$rows23['name'] = 'cobalt_co';
while($r = mysql_fetch_array($sth)) {
    $rows23['data'][] = $r['cobalt_co'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='cobalt_co'");
$rows24 = array();
$rows24['name'] = 'Baku Mutu cobalt_co';
while($r = mysql_fetch_array($sth)) {
    $rows24['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	boron_b FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows25 = array();
$rows25['name'] = 'boron_b';
while($r = mysql_fetch_array($sth)) {
    $rows25['data'][] = $r['boron_b'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='boron_b'");
$rows26 = array();
$rows26['name'] = 'Baku Mutu boron_b';
while($r = mysql_fetch_array($sth)) {
    $rows26['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT 	selenium_se FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows27 = array();
$rows27['name'] = 'selenium_se';
while($r = mysql_fetch_array($sth)) {
    $rows27['data'][] = $r['selenium_se'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='selenium_se'");
$rows28 = array();
$rows28['name'] = 'Baku Mutu selenium_se';
while($r = mysql_fetch_array($sth)) {
    $rows28['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	cadmium_cd FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows29 = array();
$rows29['name'] = 'cadmium_cd';
while($r = mysql_fetch_array($sth)) {
    $rows29['data'][] = $r['cadmium_cd'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='cadmium_cd'");
$rows30 = array();
$rows30['name'] = 'Baku Mutu cadmium_cd';
while($r = mysql_fetch_array($sth)) {
    $rows30['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	chrom_hexavalen_cr6 FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows31 = array();
$rows31['name'] = 'chrom_hexavalen_cr6';
while($r = mysql_fetch_array($sth)) {
    $rows31['data'][] = $r['chrom_hexavalen_cr6'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='chrom_hexavalen_cr6'");
$rows32 = array();
$rows32['name'] = 'Baku Mutu chrom_hexavalen_cr6';
while($r = mysql_fetch_array($sth)) {
    $rows32['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	copper_cu FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows33 = array();
$rows33['name'] = 'copper_cu';
while($r = mysql_fetch_array($sth)) {
    $rows33['data'][] = $r['copper_cu'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='copper_cu'");
$rows34 = array();
$rows34['name'] = 'Baku Mutu copper_cu';
while($r = mysql_fetch_array($sth)) {
    $rows34['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT 	lead_pb FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows35 = array();
$rows35['name'] = 'lead_pb';
while($r = mysql_fetch_array($sth)) {
    $rows35['data'][] = $r['lead_pb'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='lead_pb'");
$rows36 = array();
$rows36['name'] = 'Baku Mutu lead_pb';
while($r = mysql_fetch_array($sth)) {
    $rows36['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	mercury_hg FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows37 = array();
$rows37['name'] = 'mercury_hg';
while($r = mysql_fetch_array($sth)) {
    $rows37['data'][] = $r['mercury_hg'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='mercury_hg'");
$rows38 = array();
$rows38['name'] = 'Baku Mutu mercury_hg';
while($r = mysql_fetch_array($sth)) {
    $rows38['data'][] = $r['baku_mutu'];
}

$sth = mysql_query("SELECT 	zinc_zn FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows39 = array();
$rows39['name'] = 'zinc_zn';
while($r = mysql_fetch_array($sth)) {
    $rows39['data'][] = $r['zinc_zn'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='zinc_zn'");
$rows40 = array();
$rows40['name'] = 'Baku Mutu zinc_zn';
while($r = mysql_fetch_array($sth)) {
    $rows40['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	cyanide_cn FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows41 = array();
$rows41['name'] = 'cyanide_cn';
while($r = mysql_fetch_array($sth)) {
    $rows41['data'][] = $r['cyanide_cn'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='cyanide_cn'");
$rows42 = array();
$rows42['name'] = 'Baku Mutu cyanide_cn';
while($r = mysql_fetch_array($sth)) {
    $rows42['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	flouride_f FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows43 = array();
$rows43['name'] = 'flouride_f';
while($r = mysql_fetch_array($sth)) {
    $rows43['data'][] = $r['flouride_f'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='flouride_f'");
$rows44 = array();
$rows44['name'] = 'Baku Mutu flouride_f';
while($r = mysql_fetch_array($sth)) {
    $rows44['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	nitrite_no2 FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows45 = array();
$rows45['name'] = 'nitrite_no2';
while($r = mysql_fetch_array($sth)) {
    $rows45['data'][] = $r['nitrite_no2'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='nitrite_no2'");
$rows46 = array();
$rows46['name'] = 'Baku Mutu nitrite_no2';
while($r = mysql_fetch_array($sth)) {
    $rows46['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	free_chlorine_cl2 FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows47 = array();
$rows47['name'] = 'free_chlorine_cl2';
while($r = mysql_fetch_array($sth)) {
    $rows47['data'][] = $r['free_chlorine_cl2'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='free_chlorine_cl2'");
$rows48 = array();
$rows48['name'] = 'Baku Mutu free_chlorine_cl2';
while($r = mysql_fetch_array($sth)) {
    $rows48['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	sulfide_h2s FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows49 = array();
$rows49['name'] = 'sulfide_h2s';
while($r = mysql_fetch_array($sth)) {
    $rows49['data'][] = $r['sulfide_h2s'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='sulfide_h2s'");
$rows50 = array();
$rows50['name'] = 'Baku Mutu sulfide_h2s';
while($r = mysql_fetch_array($sth)) {
    $rows50['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	ammonia FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows51 = array();
$rows51['name'] = 'ammonia';
while($r = mysql_fetch_array($sth)) {
    $rows51['data'][] = $r['ammonia'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='ammonia'");
$rows52 = array();
$rows52['name'] = 'Baku Mutu ammonia';
while($r = mysql_fetch_array($sth)) {
    $rows52['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	chloride_cl FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows53 = array();
$rows53['name'] = 'chloride_cl';
while($r = mysql_fetch_array($sth)) {
    $rows53['data'][] = $r['chloride_cl'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='chloride_cl'");
$rows54 = array();
$rows54['name'] = 'Baku Mutu chloride_cl';
while($r = mysql_fetch_array($sth)) {
    $rows54['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	iron_fe FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows55 = array();
$rows55['name'] = 'iron_fe';
while($r = mysql_fetch_array($sth)) {
    $rows55['data'][] = $r['iron_fe'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='iron_fe'");
$rows56 = array();
$rows56['name'] = 'Baku Mutu iron_fe';
while($r = mysql_fetch_array($sth)) {
    $rows56['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	manganese_mn FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows57 = array();
$rows57['name'] = 'manganese_mn';
while($r = mysql_fetch_array($sth)) {
    $rows57['data'][] = $r['manganese_mn'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='manganese_mn'");
$rows58 = array();
$rows58['name'] = 'Baku Mutu manganese_mn';
while($r = mysql_fetch_array($sth)) {
    $rows58['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	barium_ba FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows59 = array();
$rows59['name'] = 'barium_ba';
while($r = mysql_fetch_array($sth)) {
    $rows59['data'][] = $r['barium_ba'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='barium_ba'");
$rows60 = array();
$rows60['name'] = 'Baku Mutu barium_ba';
while($r = mysql_fetch_array($sth)) {
    $rows60['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	sulfat FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows61 = array();
$rows61['name'] = 'sulfat';
while($r = mysql_fetch_array($sth)) {
    $rows61['data'][] = $r['sulfat'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='sulfat'");
$rows62 = array();
$rows62['name'] = 'Baku Mutu sulfat';
while($r = mysql_fetch_array($sth)) {
    $rows62['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	fecal_coliform FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows63 = array();
$rows63['name'] = 'fecal_coliform';
while($r = mysql_fetch_array($sth)) {
    $rows63['data'][] = $r['fecal_coliform'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='fecal_coliform'");
$rows64 = array();
$rows64['name'] = 'Baku Mutu fecal_coliform';
while($r = mysql_fetch_array($sth)) {
    $rows64['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	total_coliform FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows65 = array();
$rows65['name'] = 'total_coliform';
while($r = mysql_fetch_array($sth)) {
    $rows65['data'][] = $r['total_coliform'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='total_coliform'");
$rows66 = array();
$rows66['name'] = 'Baku Mutu total_coliform';
while($r = mysql_fetch_array($sth)) {
    $rows66['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	oil_fat FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows67 = array();
$rows67['name'] = 'oil_fat';
while($r = mysql_fetch_array($sth)) {
    $rows67['data'][] = $r['oil_fat'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='oil_fat'");
$rows68 = array();
$rows68['name'] = 'Baku Mutu oil_fat';
while($r = mysql_fetch_array($sth)) {
    $rows68['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	detergent_mbas FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows69 = array();
$rows69['name'] = 'detergent_mbas';
while($r = mysql_fetch_array($sth)) {
    $rows69['data'][] = $r['detergent_mbas'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='detergent_mbas'");
$rows70 = array();
$rows70['name'] = 'Baku Mutu detergent_mbas';
while($r = mysql_fetch_array($sth)) {
    $rows70['data'][] = $r['baku_mutu'];
}
$sth = mysql_query("SELECT 	phenol FROM `pengujian_situ` WHERE nama_situ = 'situ anggalena-outle'");
$rows71 = array();
$rows71['name'] = 'phenol';
while($r = mysql_fetch_array($sth)) {
    $rows71['data'][] = $r['phenol'];
}

$sth = mysql_query("SELECT baku_mutu FROM baku_mutu WHERE parameter='phenol'");
$rows72 = array();
$rows72['name'] = 'Baku Mutu phenol';
while($r = mysql_fetch_array($sth)) {
    $rows72['data'][] = $r['baku_mutu'];
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
array_push($result,$rows36);
array_push($result,$rows37);
array_push($result,$rows38);
array_push($result,$rows39);
array_push($result,$rows40);
array_push($result,$rows41);
array_push($result,$rows42);
array_push($result,$rows43);
array_push($result,$rows44);
array_push($result,$rows45);
array_push($result,$rows46);
array_push($result,$rows47);
array_push($result,$rows48);
array_push($result,$rows49);
array_push($result,$rows50);
array_push($result,$rows51);
array_push($result,$rows52);
array_push($result,$rows53);
array_push($result,$rows54);
array_push($result,$rows55);
array_push($result,$rows56);
array_push($result,$rows57);
array_push($result,$rows58);
array_push($result,$rows59);
array_push($result,$rows60);
array_push($result,$rows61);
array_push($result,$rows62);
array_push($result,$rows63);
array_push($result,$rows64);
array_push($result,$rows65);
array_push($result,$rows66);
array_push($result,$rows67);
array_push($result,$rows68);
array_push($result,$rows69);
array_push($result,$rows70);
array_push($result,$rows71);
array_push($result,$rows72);

print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
