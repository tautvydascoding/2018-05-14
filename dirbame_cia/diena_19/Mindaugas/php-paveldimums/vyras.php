<?php
include_once('zmogus.php');

class vyras extends zmogus {
  public $testosteronai = 8600;
  public $ugis = 179; // galima skirti
  public function printStats(){
    echo "ugis: $this->ugis <br />";
    echo "svoris: $this->svoris <br />";
    echo "testoseronai: $this->testosteronai <br />";
  }
}
