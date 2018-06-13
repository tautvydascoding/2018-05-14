<?php




 include_once('Zmogus.php');



 // UZDUOTIS 2:
 // susikurti  objektus: Monika, Tadas, Kestas


 // Objekto kurimas
  $Monika = new Zmogus();




  $Monika->vardas = "Monika";
  $Monika->ugis = 188;
  var_dump($Monika); //testuoti

echo "Merginos vardas: $Monika->vardas <br />";
echo "Merginos ugis: $Monika->ugis <br />";


  // $Tadas = new Zmogus();
  $Tadas = new Zmogus();


  $Tadas->vardas = "Tadas";
  $Tadas->ugis = 191;
  var_dump($Tadas); //testuoti

  echo "Vaikino vardas: $Tadas->vardas <br />";
  echo "Vaikino ugis: $Tadas->ugis <br />";





  // $Kestas = new Zmogus();
