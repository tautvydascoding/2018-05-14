<?php
include_once('gyvunas.php');
class Vilkas extends Gyvunas
{
    public $tipas='suniniai';
    public function printLigos(){
    echo "liga: $this->ligos <br />";


}

}
