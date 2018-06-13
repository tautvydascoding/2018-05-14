<?php
/**
 *
 */
class zmogus
{   private $vardas ='nevardas';
    private $ugis = 0;
    public function manoVardas()
    {
        echo " Mano vardas yra $this->vardas <br />";
    }
    public function manoUgis()
    {
        echo "Mano ugis yra $this->ugis <br />";

    }


    public function __construct($x,$y)
    {
$this->vardas=$x;
$this->ugis=$y;

    }
}



// kintamojo paemimas f-joje $this->vardas;
