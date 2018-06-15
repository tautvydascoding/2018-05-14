<?php
/**
 *
 */
 include_once('zmogus.php');
class moteris extends zmogus
{public $estrogenai = 0;
public function printSvoris()
    {
        echo "Svoris:" . $this->svoris;
    }

     public function setSvoris($x){
         $this->svoris += $x;
}
}
