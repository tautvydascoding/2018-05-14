<?php
 // UZDUOTIS 1.0:
 /* sukurti klase 'Gyvunas' su kintamaisiais:
public 'svoris', private 'pusryciai', protected 'ligos' */

class Gyvunas {
    public $svoris=-99;
    private $pusryciai = "zuikis";
    protected $ligos = "sloga";

    public function printPusryciai(){
      echo  "Vilko pusryciai: " . $this->pusryciai. "<br />";
    }

    public function setPusryciai($x) {
      $this->pusryciai = $x;
    }

}
