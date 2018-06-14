<?php
/**
 *
 */
class Gyvunas {
    public $svoris = "-99";

    private $pusryciai = "salotos";
    protected $ligos = "sirdies yda";

    public function printPusryciai() {
        // echo "Liga: $this->svoris <br />";
        // echo "Liga: $this->tipas <br />";
        // echo "Liga: $this->ligos <br />";

        echo "pusryciai: $this->pusryciai <br />";
    }
    public function setPusryciai($x){
        $this->pusryciai = $x;
    }
}
