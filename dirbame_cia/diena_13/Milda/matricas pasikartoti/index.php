<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>matrix</title>
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

// / UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas
// / A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
// // A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
// // A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
$visosPrekes=[];
$preke1[0]=["Dviratis","28.jpg", 200, "Lorem ipsum dolor sit amet"];
$preke2[1]=["Riedlente","riedlente.jpg", 105, "Lorem ipsum dolor sit amet"];
$preke3[2]=["Paspirtukas","15.jpg", 99, "Lorem ipsum dolor sit amet"];


// testuojame masyvus ar turime juose duomenu:
// print_r($preke1);
// echo("<br/>");
// print_r($preke2);
// echo("<br/>");
// print_r($preke3);
// echo("<br/>");

// / B. i masyva visosPrekes, ideti "preke" masyva
$visosPrekes[0]=$preke1;
$visosPrekes[1]=$preke2;
$visosPrekes[2]=$preke3;


// C. atvaizduodi kiekvienoje eiluteje po 3 prekes
?>




for ($i=0; $i < count($visosPrekes) ; $i++) {
  echo $visosPrekes[$i][0] . "<br/>";
  echo $visosPrekes[$i][1] . "<br/>";
  echo $visosPrekes[$i][2] . "<br/>";
echo "<br />";
}







// (naudojant for arba foreach) ir bootstrap dizaina
// D. naudojant du FOR FOR arba FOREACH FOREACH












?>



















        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>

</html>
