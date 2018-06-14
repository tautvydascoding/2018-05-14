


<?php

include_once('zmogus.php');

class vyras extends zmogus {
    public $testosteronai = "skaicius";

    public function printTestosteronai(){
      echo "Vyro testosteronai: $this->testosteronai <br />";
    }
    public function setTestosteronai($x){
        $this->testosteronai = $x;
    }
}
