<?php


// UZDUOTIS 1.0:
// sukurti klase 'Gyvunas' su kintamaisiais:
// public 'svoris', private 'pusryciai', protected 'ligos'
// UZDUOTIS 3
// klaseje 'Gyvunas' sukurti f-jas:
// public printLigos()
// public printPusryciai()

class Gyvunas {

  public $svoris = -999;

  private $pusryciai = "salotos";

  protected $ligos = "angina";


  public function printPusryciai() {
    echo "pusryciams valgo $this->pusryciai";

  }
}
