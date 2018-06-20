
<?php

include_once('zmogus.php');

class moteris extends zmogus {
    public $estrogenai = "neaiskus skaicius";
    public function printEstrogenai(){
      echo "Moters estrogenai: $this->estrogenai <br />";
    }
    public function setEstrogenai($x){
        $this->estrogenai = $x;
    }
    }
