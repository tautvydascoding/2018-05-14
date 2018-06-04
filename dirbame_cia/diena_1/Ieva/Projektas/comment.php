<?php



print_r($_GET);



$vartotojoVardas=$_GET['name'];

$vartotojoElpastas=$_GET['email'];

$vartotojoKomentaras=$_GET['text'];

echo "<h2> Vardas: " . $vartotojoVardas . " </h2>";
echo "<h3> El.paštas: " . $vartotojoElpastas . "</h3>";
echo "<h3> Komentaras: " . $vartotojoKomentaras . "</h3>";
?>


<!-- <a href= "tel:<?= $vartotojoTelefonas ?>";>
Telefonas: +370 <?= $vartotojoTelefonas ?>;
</a> -->

<!-- taip pat galima su el.pastu padaryti kad iskarto siusti laiska ar skambinti -->
