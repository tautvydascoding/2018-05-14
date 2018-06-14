<?php

include_once('zmogus.php');

$Monika = new Zmogus("Monika L.", 165);
$Maryte = new Zmogus("Maryte", 180);
$Kazys = new Zmogus("Kazys", 170);
// $Monika->vardas = "Monika";
// $Monika->ugis = 160;

// var_dump($Monika);
$Monika->manoVardas();
$Maryte->manoVardas();
$Kazys->manoVardas();
