<?php
include_once('interfaceZ.php');
/**
 *
 */
class A implements Z
{
    //==================
    private $svoris = 100;
    //==================
    public function getSvoris(){
        echo "pradinis svoris: $this->svoris <br>";
    }
    //================
    public function setSvoris($x){
        $naujasSvoris = $this->svoris = $x;
        echo "dabar svoris $naujasSvoris <br>";
    }
    //=================
}
