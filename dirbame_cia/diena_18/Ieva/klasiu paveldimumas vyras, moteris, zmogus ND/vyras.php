<?php
include ('zmogus.php');

class Vyras extends Zmogus {
    public $testosteronas = "9980";

    public function printSvoris($z) {
      $vyroSvoris = $this->svoris = $z;
      echo "Vyro svoris:" . $vyroSvoris . " kg <br />";
    }

    }
