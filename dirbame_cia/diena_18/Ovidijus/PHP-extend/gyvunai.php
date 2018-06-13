<?php

class Gyvunas
{
  public $svoris = 999;
  private $pusryciai = 'Maistas';
  protected $ligos = 'Infekcija';
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
echo $vilkas->svoris;
// echo $vilkas->ligos;//eroras
// echo $vilkas->pusryciai;//eroras

$vilkas->printLigos();
// $vilkas->printPusryciai();// private
