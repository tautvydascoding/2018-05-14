<?php
include_once('zmogus.php');

class moteris extends zmogus {
  public $estrogenai = 3550;
  public function printStats(){
    echo "ugis: $this->ugis <br />";
    echo "svoris: $this->svoris <br />";
    echo "estrogenai: $this->estrogenai <br />";
    // echo "pinigai: $this->pinigai <br />"; negalima nes private
  }
}
