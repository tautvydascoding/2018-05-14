<?php

class Zmogus{
    public $ugis=180;
    public $vardas="Tadas";
    public function einu (){
        echo "Einu";
    }

}

$Monika = new Zmogus();
$Monika->ugis=178;
$Monika->vardas="Monika";
echo $Monika->vardas;
// Zmogus.einu();
$Juozas = new Zmogus();
$Juozas->ugis=188;
$Juozas->vardas="Juozulis";
$Juozas->einu();

class Zmogelis {
    private $ugis = 178;
    private $vardas = "";
    public function manoUgis (){
        echo "Dejau";
    }
    public function manoVardas (){
        echo "Begu";
    }

   


}

$Jonelis = new Zmogelis (180,"Jonelis");
echo ("<br>");
print_r($Jonelis);
echo ("<br>");


?>