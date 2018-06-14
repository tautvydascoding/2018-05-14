<?php

include_once('zmogus.php');

$Monika = new Zmogus();//objekto kurimas (didelis kintamasis kurio viduje gali buti visko)
$Monika->vardas = "Monika";
$Monika->ugis = 165;


$Tadas = new Zmogus();
$Tadas->vardas = "Tadas";
$Tadas->ugis = 180;

$Kestas = new Zmogus();
$Kestas->vardas = "Kestas";
$Kestas->ugis = 176;

// var_dump($Kestas);
echo "merginos vardas: $Monika->vardas <br>";
echo "merginos vardas: $Monika->ugis <br>";
$Monika->einu();

?><hr><?php

echo "pirmo vaikino vardas: $Tadas->vardas <br>";
echo "pirmo vaikino vardas: $Tadas->ugis <br>";
$Tadas->einu();

?><hr><?php

echo "antro vaikino vardas: $Kestas->vardas <br>";
echo "antro vaikino vardas: $Kestas->ugis <br>";
$Kestas->einu();
