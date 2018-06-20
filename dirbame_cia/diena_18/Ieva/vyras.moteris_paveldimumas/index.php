<?php
include ('vyras.php');

$Petras = new Vyras();


echo "Ūgis: " . $Petras->ugis = '185'. "<br />";
$Petras->printPusryciai();
echo "<br />";
$Petras->setTestosteronas(4200);
$Petras->getTestosteronas();
echo "<br />";
$Petras->setTurtas(1600000);
$Petras->getTurtas();


// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki setTestKiekis
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
