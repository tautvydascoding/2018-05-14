<?php



print_r($_GET);

print_r($GLOBALS);

$vartotojoVardas=$_GET['vardas'];
$vartotojoPavarde=$_GET['pavarde'];
$vartotojoTelefonas=$_GET['telefonas'];
$vartotojoElpastas=$_GET['El.pastas'];
echo "<h2> Vardas, Pavarde: " . $vartotojoVardas . " ".  $vartotojoPavarde. "</h2>";
echo "<h3> Telefonas: " . $vartotojoTelefonas . "</h3>";
echo "<h3> El.pastas: " . $vartotojoElpastas . "</h3>";
?>


<a href= "tel:<?= $vartotojoTelefonas ?>";>
Telefonas: +370 <?= $vartotojoTelefonas ?>;
</a>

<!-- taip pat galima su el.pastu padaryti kad iskarto siusti laiska ar skambinti -->
