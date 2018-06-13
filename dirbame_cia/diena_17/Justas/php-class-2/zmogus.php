<?php

class Zmogus {
    private $ugis = -1;
    private $vardas = "noname";

    public function manoUgis(){
        echo "ugis: $this->ugis <br>";
    }

    public function manoVardas(){
        echo "vardas: $this->vardas <br>";
    }

    public function  __construct($x, $y){
        $this->ugis = $y;
        $this->vardas = $x;
    }
}
