<?php
// definisikan konstanta
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$sk11 = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari jari ' .$jari. ' adalah : ' . $luas;
echo '<br/>keliling nya : ' .$sk11;
?>
<hr/>
<?php
echo 'Nama databasenya : ' .DBNAME;
echo '<br/> lokasi nya ada di ' .DBSERVER;
?>