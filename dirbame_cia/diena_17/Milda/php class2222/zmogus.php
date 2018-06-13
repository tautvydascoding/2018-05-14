<?php



// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

class Zmogus {
  private $ugis = -999;
  private $vardas = "bevardis"; //stringas

  public function manoVardas(){
    echo "vardas: $this->vardas <br />";

    }

    public function _construct($x, $y) {
        $this->vardas = $x;
        $this->ugis = $y;
  }

}
