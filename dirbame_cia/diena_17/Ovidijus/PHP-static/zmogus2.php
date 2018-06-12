<?php
class Zmogus2{
  private $ugis = 189;
  private $vardas = "Ovidijus";

  public function manoUgis(){
    $this->ugis;
    echo "Ugis: $this->ugis <br />";
  }
  public function manoVardas(){
    $this->vardas;
    echo "Vardas: $this->vardas<br />";
  }
  public function __construct($x,$y){
    $this->ugis = $x;
    $this->vardas = $y;

  }
}

$Monika = new Zmogus2("Monika", 155);
// var_dump($Monika);//test
$Tadas = new Zmogus2("Tadas", 199);
// var_dump($Tadas);//test
