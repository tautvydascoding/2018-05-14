<?php
include_once('Z.php');
class A implements Z{
        public $svoris = 100;
         public function setSvoris($svoris){
        $this->svoris=$svoris;
    }

       public function getSvoris(){
return $this->svoris;
   }
}
