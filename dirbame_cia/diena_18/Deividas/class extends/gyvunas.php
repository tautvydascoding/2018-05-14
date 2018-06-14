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
 // ugis, ligos, pusryciai

 // UZDUOTIS 3
 // klaseje 'Gyvunas' sukurti f-jas:
 // printLigos()

    class Gyvunas{
      public $svoris = -999; // netikra reiksme rasyti pradzioje kaip -999
      private $pusryciai = "bevardis";
      protected $ligos = "bevardis"; // string
      public function printLigos(){
        echo 'Ligos:', $ligos;

      }
      printLigos();
      }
        class Vilkas extends Gyvunas{
          public $tipas = "bevardis";
        }
