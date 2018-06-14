<?php

include_once('gyvunas.php');

class Vilkas extends Gyvunas {
  public $tipas = "pilkas";

  public function printLigos() {
    echo "Gyvunas serga... $this->ligos";
  }

}

// UZDUOTIS 1.2
// klase 'Vilkas' paveldi klase 'Gyvunas'
 // UZDUOTIS 2.0:
// sukurti vilko objekta ir
// pabandyti isvesti visa info apie Vilka:
// ugis, ligos, pusryciai

$vilkaspilkas = new Vilkas ();

$vilkaspilkas-> svoris = 90; // idejimas i objekta
$vilkaspilkas-> pusryciai = "zuikis";
$vilkaspilkas-> printLigos("sloga");

echo "<h2> Vilko svoris:  $vilkaspilkas->svoris kg </h2> <br />";
echo "<h2> Vilko pusryciai:  $vilkaspilkas->pusryciai </h2> <br />";
echo "<h2> Vilko tipas:  $vilkaspilkas->tipas </h2> <br />";
