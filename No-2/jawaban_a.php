<?php
$kalimat = "2020-05-01";
$bulan = substr($kalimat,5,2);
$tahun = substr($kalimat,2,2);
$tgl = substr($kalimat,8,2);
echo $bulan."-".$tahun."-".$tgl;
?>