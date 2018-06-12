<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'manoUgis()'
// public f-ja 'manoVardas()'

// UZDUOTIS 2:
// susikurti konstruktoriu
// UZDUOTIS 2.1
// susikurti  objektus: Monika, Tadas

// UZDUOTIS 2.1
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'


    class zmogus{
      private $ugis = -999; // netikra reiksme rasyti pradzioje kaip -999
      private $vardas = "bevardis"; // string
      public function manoVardas(){
        echo "vardas: $this->vardas <br /> ";
      }
      public function __construct($x, $y){
        $this->vardas = $x;
        $this->ugis = $y;
      }
    }
