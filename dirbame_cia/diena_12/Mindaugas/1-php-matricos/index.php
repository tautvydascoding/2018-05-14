<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>scope</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>

    <body>
        <h1 > Isijunk console </h1>


<?php
//masyvo kurimas
  $visosprekes = [];
    $preke1 = ["Plaktukas", "tureti kazko njau, Zadina mano vaizduote be reikalo bus", 12.90, 4];

    $preke2 = ["Svitrinis", "tureti kazko njau, Zadina mano vaizduote be reikalo bus", 0.40, 151];

    $preke3 = ["Reples", "tureti kazko njau, Zadina mano vaizduote be reikalo bus", 16.30, 18];

//issivesti prekes pavadinima i h2
//aprasyma i p
//kaina isvesti i mygtuka

//sumazinti repliu kieki
//sumadinti plaktuku kaina 4 arba 33%

$visosprekes[0] = $preke1; //juos idejome ir daugiau nebenaudojame
$visosprekes[1] = $preke2;
$visosprekes[2] = $preke3;
//testuojam ar viskas gerai
print_r( $visosprekes);

echo "<br />";
//sumazinti repliu kieki
$visosprekes[2][3] -= 1; //arba $x--; arba $x = $x - 1;

print_r(  $visosprekes[2]);
echo "<br />";

//sumazinti plaktuku kaina
$visosprekes[0][2] *= 0.66;

echo "Plaktukas kaina:" . $visosprekes[0][2] . "<br />";

print_r( $visosprekes[0]);

for ($i=0; $i < count($visosprekes); $i++) {
   echo "<h2>" . $visosprekes[$i][0]  . "</h2>";// code...
   echo "<p>" . $visosprekes[$i][1]  . "</p>";
   echo "<button>" . $visosprekes[$i][2]  . "</button>";
}
//uzduotis2
$visiDarbuotojai = [];

$darbuotojas1 = ["Jonas", "Jonaitais", 1980, "Inspektorius"];
$darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];

$visiDarbuotojai[0] = $darbuotojas1;
$visiDarbuotojai[1] = $darbuotojas2;
$visiDarbuotojai[2] = $darbuotojas3;

print_r( $visiDarbuotojai);
//isvesti visa info apie pirma darbuojoja
for ($i=0; $i < count($visiDarbuotojai[0]); $i++) {
  echo "<p>" .
    $visiDarbuotojai[0][$i] .
  "</p>";// code...
}
//isvesti visu darbuotoju vardus
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo  $visiDarbuotojai[$i][0]. "<br />"
;// code...
}
//isvesti visa infomacija apie visus darbuotojus
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo     $visiDarbuotojai[$i][0] . "\\". $visiDarbuotojai[$i][1] . "\\" . $visiDarbuotojai[$i][2] ." <br />" ;// code...
}

//isvedame visa informacija apie kiekviena darbuotoja  su 2 for

for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
  //konkretaus darbuotojo darbu isvedima
  for ($j=0; $j < count($visiDarbuotojai[$i]) ; $j++) {
    echo $visiDarbuotojai[$i][$j] . "<br />";
  }
  echo "<br />";
}






 ?>





        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
