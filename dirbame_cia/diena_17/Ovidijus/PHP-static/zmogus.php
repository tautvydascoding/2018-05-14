<?php
class Zmogus{
  public $ugis = 189;
  public $vardas = "Ovidijus";
  public function einu(){
    echo "einu einu <br/>";
  }
}

$Monika = new Zmogus();
$Monika->ugis = 160;
$Monika->vardas = "Monika";


$Tadas = new Zmogus();
$Tadas->ugis = 190;
$Tadas->vardas = "Tadas";


$Kestas = new Zmogus();
$Kestas->ugis = 180;
$Kestas->vardas = "Kestas";
