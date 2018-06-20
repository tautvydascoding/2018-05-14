<?php

class Gyvunas {
    public $svoris = "-99";
    private $pusryciai = "salotos";
    protected $ligos = "sirdies yda";
}

class Vilkas extends Gyvunas
{
    public $tipas = "bevardis";
};

$simba = new Vilkas();
echo $simba->svoris;



?>


