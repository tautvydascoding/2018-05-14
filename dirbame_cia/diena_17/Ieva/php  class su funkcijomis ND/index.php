<?php

include ('zmogus.php');

$Monika = new Zmogus();
$Petras = new Zmogus();

$Monika -> vardas = "Monika";
$Monika -> ugis = "170";

$Petras -> vardas = "Petras";
$Petras -> ugis = "210";

echo "<h3> Vardas " . $Monika -> vardas . " , ūgis ". $Monika -> ugis. " cm </h3>";
$Monika->einu();

echo "<h3> Vardas " . $Petras -> vardas . " , ūgis ". $Petras -> ugis. " cm </h3>";
$Petras->einu();
