
<?php

include_once('gyvunas.php');

class Vilkas extends Gyvunas {
    public $tipas = "bespalvis";

    public function printLigos() {
        echo "svoris: $this->svoris <br />";
        echo "tipas: $this->tipas <br />";
        echo "Liga: $this->ligos <br />";

        // echo "Liga: $this->pusryciai <br />";
    }
}
