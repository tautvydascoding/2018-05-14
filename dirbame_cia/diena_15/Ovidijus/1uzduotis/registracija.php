<?php

print_r($_GET);
print_r($_POST);

// print_r($GLOBALS);
//
// $GLOBALS["OVIDIJUS"] = "slaptazodis";

$vartotojoVardas = $_GET["vardas"];
$vartotojoPavarde = $_GET["pavarde"];
$vartotojoElPastas = $_GET["elpastas"];
$vartotojoTelefonas = $_GET["telefonas"];

echo "<h2> $vartotojoVardas $vartotojoPavarde </h2>";
echo "<h3> $vartotojoElPastas $vartotojoTelefonas </h3>";
