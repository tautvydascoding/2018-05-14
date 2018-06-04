<?php

print_r($_GET);
print_r($_POST);
// print_r($GLOBALS);

// $GLOBALS['TAUTVYDAS'] = "slaptazodis"; bet ka galima isidegti
$vartotojoVardas = $_GET['Vardas'];
$vartotojoPavarde = $_GET['Pavarde'];
echo "<h2> $vartotojoVardas $vartotojoPavarde </h2>";
$vartotojoTelefonas = $_GET['Telefonas'];
echo "<h4> $vartotojoTelefonas </h4>";
?>
<a href="tel:<?= $vartotojoTelefonas?>"></a>
