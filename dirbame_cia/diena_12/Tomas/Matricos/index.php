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
        <h1 > Matricos </h1>


<?php
$visosPrekes =[];
$preke1 = ['Pavadinimas'=>'Plaktukas', 'Aprasymas' => 'tekstas tekstas', 'Kaina' =>12.90, 'Kiekis'=>4];
$preke2 = ['Pavadinimas'=>'Svitrinis popierius', 'Aprasymas' => 'tekstas tekstas', 'Kaina' =>0.4, 'Kiekis'=>151];
$preke3 = ['Pavadinimas'=>'Reples', 'Aprasymas' => 'tekstas tekstas', 'Kaina' =>16.50, 'Kiekis'=>17];

$visosPrekes[0]=$preke1;
$visosPrekes[1]=$preke2;
$visosPrekes[2]=$preke3;
print_r($preke1);
echo "<br />";
print_r($preke2);
echo "<br />";
print_r($preke3);
echo "<br />";
print_r($visosPrekes);
echo "<br />";


// sumazint repliu kiekis
// sumazinti plaktuku kaina 4 arba 33%
// isvesti prekes info i h2
// aprasyma i p
// kaina i mygtuka
// 2
$visosPrekes[0]['Kiekis'] -= 1;
print_r($visosPrekes);

// $visosPrekes[0]['Kaina']*= 0.66;



for ($i=0; $i < count($visosPrekes); $i++) {
    echo "<h2>" . $visosPrekes[$i]["Pavadinimas"] . "</h2>";
    echo "<p>" . $visosPrekes[$i]["Aprasymas"] . "</p>";
    echo "<button>" . $visosPrekes[$i]["Kaina"] . "</button>";


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
