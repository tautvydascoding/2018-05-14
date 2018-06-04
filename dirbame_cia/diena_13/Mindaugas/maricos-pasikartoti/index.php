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
// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


$visosPrekes = [];
$preke1 = ["fotelis","5.jpg","kazkas apie preke",43.23];
$preke2 = ["balionas","balionas.png","kazkas apie preke",21000.50];
$preke3 = ["stalas","stalas.jpg","kazkas apie preke",128.99];

$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;
var_dump($visosPrekes);
echo "<br />";

echo "<div class='container'><div class='row'>";

for ($i=0; $i < count($visosPrekes) ; $i++) { echo  "<div class='col-md-3 bg-info'>";

  for ($j=0; $j < count($visosPrekes[$i]); $j++) {
    echo
    "<p>" .
     $visosPrekes[$i][$j] .
     "</p>";
  } echo "</div>" ;
}
echo "<div class='row'>";
for ($i=0; $i < count($visosPrekes); $i++) {
  echo "<div class='col-md  m-1 bg-success'>";
  echo "<h2>". $visosPrekes[$i][0]. "</h2>";
  echo "<img src='img/" . $visosPrekes[$i][1] . "' width='200px;'  height='270px;' alt=''  />";
  echo "<p>" .$visosPrekes[$i][2] . "</p>";
  echo "<button class= 'm-1' >" . $visosPrekes[$i][3] . "</button>";

echo "</div>";
}
echo "</div>";
   // 3 budai nuotraukoms
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

























 ?>





        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
