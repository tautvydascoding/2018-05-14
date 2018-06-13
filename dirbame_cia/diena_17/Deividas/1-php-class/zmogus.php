<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()'

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
// Atspasudinti varsa ir ugi
// paleisti f-ja 'einu()'

    class zmogus{
      public $ugis = -999; // netikra reiksme rasyti pradzioje kaip -999
      public $vardas = ""; // string
      public function einu(){
        echo "einu einu <br />";
      }
    }
