<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>scope</title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">

        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>

    <body>
        <h1 > Isijunk console </h1>

<?php
//UZDUOTIS 1:
// sukurti tris klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu

// 'zmogus'  turi: public ugis, protected svoris, private pinigai
// 'moteris' papildomai turi: estrogenai
// 'vyras'   papildomai turi: testosteronai

// UZDUOTIS 2:
// susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju: ugis, svoris, pinigu skaicius, hormono skaicius
include_once('vyras.php');
include_once('moteris.php');

$Monika = new moteris();
var_dump($Monika);
echo "<br />";

$Tadas = new vyras();
var_dump($Tadas);
echo "<br />";

echo "Monikos ugis: $Monika->ugis <br />";
// echo "Monikos svoris: $Monika->svoris <br />"; negalima preiti, nes protected
// echo "Monikos pinigai: $Monika->pinigai <br />"; negalima prieiti, nes private
echo "Monikos estrogenai: $Monika->estrogenai <br />";

echo "Tado ugis: $Tadas->ugis <br />";
// echo "Tado svoris: $Tadas->svoris <br />"; negalima preiti, nes protected
// echo "Tado pinigai: $Tadas->pinigai <br />"; negalima prieiti, nes private
echo "Tado testoseronai: $Tadas->testosteronai <br />";
// UZDUOTIS 3:
//  atspausdinti visus kintamuosius (NEnaudojant/nesikurti "zmogus"  objekto

?>
<div class="container d-flex justify-content-center">

<div class="row">

  <div class="col-md-4 bg-info m-2 p-2">

<h2>Monikos statistika </h2>
 <?php
$Monika->printStats();
$Monika->printPinigai();
?>
</div>
<div class="col-md-4 bg-info m-2">

 <h2> Tado statistika</h2> <?php
$Tadas->printStats();
$Tadas->printPinigai();
 ?>
</div>
</div>

</div>





        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
