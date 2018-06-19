<?php
 include_once ('gyvunas.php');

 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas' -->
// UZDUOTIS 1.2
 // klase 'Vilkas' paveldi klase 'Gyvunas' -->

class Vilkas extends Gyvunas {
    public $tipas= "pilkas";

    public function printLigos(){
      echo "Vilkas serga: ". $this->ligos;
    }
}
