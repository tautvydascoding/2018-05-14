<?php

include_once('interfaceZ.php');

class KlaseA implements Z {

  protected $svoris = 100;

  public function setSvoris($svoris){
    $this->svoris = $svoris;
  }
  public function getSvoris(){
    return $this->svoris;
  }

}
