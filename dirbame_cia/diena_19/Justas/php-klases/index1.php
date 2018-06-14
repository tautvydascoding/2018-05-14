<?php

require_once('zmogus.php');
require_once('vyras.php');
require_once('moteris.php');


$Monika = new Moteris();
$Tadas = new Vyras();

$Tadas->ugis = 180;
$Monika->ugis = 165;

echo "Vyro ugis:  $Tadas->ugis cm <br>";
echo "Moters ugis:  $Monika->ugis cm <br><br>";

echo "Vyro harmonu skaicius: $Tadas->testosteronai <br>";
echo "Moters harmonu skaicius: $Monika->estrogenai <br><br>";

$Tadas-> vyroSvoris(80);
$Monika-> motersSvoris(60);

$Tadas-> vyroPinigai();
$Monika-> motersPinigai();
