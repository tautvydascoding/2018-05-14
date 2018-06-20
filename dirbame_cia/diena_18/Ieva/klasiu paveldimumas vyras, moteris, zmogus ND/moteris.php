<?php
include ('zmogus.php');

class Moteris extends Zmogus {
    public $estrogenai = "3450";

    public function printSvoris($x) {
      $motersSvoris = $this->svoris = $x;
      echo "Moters svoris: ". $motersSvoris . " kg <br />";
    }


}
