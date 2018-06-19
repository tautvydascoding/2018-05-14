<?php

class Zmogus {
    public $ugis=-99;
    protected $pusryciai = "salotos";
    private $turtas = "1500000";
    protected $testosteronas = "3000";

    public function getTurtas() {
      echo "Turtas: " . $this->turtas . "<br />";
    }

    public function setTurtas($y) {
      $this->turtas=$y;
    }



}
