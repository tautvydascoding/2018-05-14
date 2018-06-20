<?php
/**
 *
 */
class zmogus {
    public $ugis = 5000;
    protected $svoris = -99;
    private $pinigai = 0;

    public function printSvoris(){
      echo "svoris: $this->svoris <br />";
    }
    public function setSvoris($x){
        $this->svoris = $x;
    }
    public function printUgis(){
      echo "ugis: $this->ugis <br />";
    }
    public function setUgis($x){
        $this->ugis = $x;
    }
  }
