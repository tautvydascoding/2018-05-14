<?php

 // UZDUOTIS 1.0:
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'

 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas',

  // UZDUOTIS 2.0:
 // sukurti vilko objekta ir
 // pabandyti isvesti visa info apie Vilka:
 // svoris, ligos, pusryciai

 // UZDUOTIS 3
 // klaseje 'Gyvunas' sukurti f-jas:
 // printLigos()

    class Gyvunas{
      public $svoris = -999; // netikra reiksme rasyti pradzioje kaip -999
      private $pusryciai = "salotos";
      protected $ligos = "sirdies yda"; // string
      public function printPusryciai(){
        echo "Pusryciai: $this->pusryciai <br />";
      }
      }
