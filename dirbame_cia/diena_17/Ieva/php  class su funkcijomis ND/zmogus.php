<?php

// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()'

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
// Atspasudinti varda ir ugi
// paleisti f-ja 'einu()


// class Zmogus {
//     public $vardas = "zmogaus vardas";
//     public $ugis = "-666";
//
//     public function einu() {
//           echo "$this->vardas eina  greitai <br />";
//     }
// }

// UZDUOTIS 1:
// sukurti  klase: 'zmogus1'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'manoUgis()'
// public f-ja 'manoVardas()'
// * kintamojo paemimas f-je:    $this->vardas

class Zmogus {
  private $vardas = "vardenis";
  private $ugis = "-999";

  public function manoVardas() {
    $this->vardas;
  }

  public function manoUgis() {
    $this->ugis;
  }
}

// UZDUOTIS 2:
// susikurti konstruktoriu
// UZDUOTIS 2.1
// susikurti  objektus: Monika, Tadas

// UZDUOTIS 2.1
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'
