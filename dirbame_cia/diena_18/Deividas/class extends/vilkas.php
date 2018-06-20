

<?php
include_once('gyvunas.php');

class Vilkas extends Gyvunas{
  public $tipas = "bevardis";

  public function printLigos(){
    echo "Liga: $this->ligos <br /> ";
    
  }
}
