<?php
// UZDUOTIS 1:
// sukurti tris klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu

// 'zmogus'  turi: public ugis, protected svoris, private pinigai
// 'moteris' papildomai turi: estrogenai
// 'vyras'   papildomai turi: testosteronai

// UZDUOTIS 2:
// susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju: ugis, svoris, pinigu skaicius, hormono skaicius


// UZDUOTIS 3:
//  atspausdinti visus kintamuosius (NEnaudojant/nesikurti "zmogus"  objekto


include_once('vyras.php');
include_once('moteris.php');

$Tadas = new vyras();
$Monika = new moteris();
//echo $Tadas->ugis   . "<br />";
//echo $Tadas->svoris   . "<br />";
//echo $Tadas->testosteronai   . "<br />";
$Tadas->setSvoris("80");
$Tadas->setUgis("1.90");
$Tadas->setTestosteronai("999");

$Tadas->printSvoris();
$Tadas->printUgis();
$Tadas->printTestosteronai();


//echo $Monika->ugis   . "<br />";
//echo $Monika->svoris   . "<br />";
//echo $Monika->estrogenai   . "<br />";
$Monika->setSvoris("120");
$Monika->setUgis("1.50");
$Monika->setEstrogenai("100");

$Monika->printSvoris();
$Monika->printUgis();
$Monika->printEstrogenai();
