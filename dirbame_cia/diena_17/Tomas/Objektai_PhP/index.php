<?php

include_once('zmogus.php');

$Monika = new zmogus(); // NOTE: objekto kurimas
$Juozas = new zmogus(); // NOTE: objekto kurimas
 // var_dump($Monika); // NOTE: test
$Monika->vardas = "Monika";
$Juozas->vardas = "Juozas";
$Monika->ugis = 188;
$Juozas->ugis = 199;

echo "Merginos vardas: $Monika->vardas <br />";
echo "Merginos ugis cm: $Monika->ugis <br />";
echo "Vyro vardas : $Juozas->vardas <br />";
echo "Vyro ugis cm: $Juozas->ugis <br />";
$Juozas->einu();
