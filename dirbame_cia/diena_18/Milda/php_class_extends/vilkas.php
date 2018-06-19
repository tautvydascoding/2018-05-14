<?php

 include_once('gyvunas.php');






$Vilkas = new Gyvunas();


$Vilkas->svoris = 20;
// $Vilkas->pusryciai = "mesa"; privaciu reiksmiu neiseina pasiekti
$Vilkas->ligos = "skaudapilva";
var_dump($Vilkas);


echo "gyvuno svoris:$Vilkas->svoris <br />" ;
echo "gyvuno svoris:$Vilkas->pusryciai <br />" ;
echo "gyvuno ligos:$Vilkas->ligos <br />";
