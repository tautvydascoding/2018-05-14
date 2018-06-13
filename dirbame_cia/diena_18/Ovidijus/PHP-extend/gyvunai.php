<?php

class Gyvunas
{
  public $svoris = 999;
  private $pusryciai = 'Maistas';
  protected $ligos = 'Infekcija';

  public function printPusryciai(){
    echo $this->pusryciai;
  }
}

class Vilkas extends Gyvunas
{
  public $tipas = 'pilkas';

  public function printLigos(){
    echo $this->ligos;
  }
  // public function printPusryciai(){
  //   echo $this->pusryciai;
  // } // private todel neduoda
}

$vilkas = new Vilkas();
echo $vilkas->svoris.<br />;
// echo $vilkas->ligos;//eroras
echo $vilkas->printPusryciai();

$vilkas->printLigos() ;
// $vilkas->printPusryciai();// private
