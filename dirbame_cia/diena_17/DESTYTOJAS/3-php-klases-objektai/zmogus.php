<?php



class Zmogus {
    private $vardas = "bevardis";
    private $ugis = -999;

    public function manoVardas(){
        echo "vardas: $this->vardas <br />";
    }

    public function __construct($x, $y) {
        $this->vardas = $x;
        $this->ugis = $y;
    }
}


//
