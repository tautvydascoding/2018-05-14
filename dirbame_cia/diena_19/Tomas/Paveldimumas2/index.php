<?php
include_once('zmogus.php');
include_once('vyras.php');
$Tadas = new vyras();
$Tadas->ugis = 199;
$Tadas->testosteronai = 8600;
  // $Tadas->svoris = 85;
$Tadas->pinigai = 2500;

include_once('moteris.php');
$Monika = new moteris();
$Monika->ugis = 170;
$Monika->estrogenai = 3550;
// $Monika->svoris = 55;
$Monika->pinigai = 3000;

echo "Ugis: $Tadas->ugis <br />";
echo "Testosteronu skaicius: $Tadas->testosteronai <br />";
// $Tadas->printSvoris();


echo "Ugis: $Monika->ugis <br />";
echo "Estrogenu skaicius: $Monika->estrogenai <br />";
$Monika->setSvoris(+55);
// $Monika->printSvoris();
echo "Monikos svoris:" . $Monika->printSvoris() . "<br />";
