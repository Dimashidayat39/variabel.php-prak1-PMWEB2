<?php 
// define variabel 
$nama = 'dimas' ;
$umur = 19;
$berat = 75.00;

// menampilkan nilai variabel
echo "nama saya $nama, saya berumur" . $umur . "dan memiliki berat badan" . $berat . "kg";

echo "<br />";
echo "<br />";

//define variabel constant
define('PHI', 3.14);
define('DBNAME', 'inventori');
define('DBSERVER', 'localhost');

echo "PHI = " . PHI;

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari ' .
$jari . ' : ' . $luas;
echo '<br />kelilingnya : ' . $kll;

echo "<hr>";

echo "nama databasenya : " . DBNAME;
echo "<br>lokasi databasenya ada di : " . DBSERVER;