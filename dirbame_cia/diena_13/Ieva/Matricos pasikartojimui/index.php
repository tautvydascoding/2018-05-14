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

        <!-- // $('h1').css('color', 'pink'); -->

        <!-- // ============svarbus patarimai===============:
        // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
        // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
        // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
        // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
        // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
        // matricos ilgis daznai skiriasi nuo plocio.
        //  pvz.:
         // for ( i < eiluciuSkaicius)
         //    for ( k < stulpeliuSkaicius)
         // =================// =================// ========


        // UZDUOTIS 2
        // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
        // Antraste, img pavadinimas, kaina, prekes aprasymas

        // A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
        // A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
        // B. i masyva visosPrekes, ideti "preke" masyva
        // C. atvaizduodi kiekvienoje eiluteje po 3 prekes
        // (naudojant for arba foreach) ir bootstrap dizaina
        // D. naudojant du FOR FOR arba FOREACH FOREACH


        // 3 budai nuotraukoms
        // printf("<img    src='./img/"     . $visosPrekes[$i][1] . "' width='200px' alt=''  />");
        // printf("<img src='./img/%s' width='200px' alt=''  />", $visosPrekes[$i][1]); -->

<?php
$visosPrekes=[];
$preke1=["Fotelis", "5.jpg", 99.0, "Lorem ipsum dolor sit amet, consectetur.Lorem ipsum dolor sit amet, consectetur"];
$preke2=["Stalas", "stalas.jpg", 199.0, "Lorem ipsum dolor sit amet, consectetur.Lorem ipsum dolor sit amet, consectetur.Lorem ipsum dolor sit amet, consectetur"];
$preke3=["Fotelis2", "6.png", 89.0, "Lorem ipsum dolor sit amet, consectetur"];
$preke4=["Fotelis2", "6.png", 80.0, "Lorem ipsum dolor sit amet, consectetur"];


$visosPrekes[0]=$preke1;
$visosPrekes[1]=$preke2;
$visosPrekes[2]=$preke3;
$visosPrekes[3]=$preke4;

// print_r($visosPrekes[0]);
// echo "<br/>";
// print_r($visosPrekes[1]);
// echo "<br/>";
// print_r($visosPrekes[2]);
// echo "<br/>";





  echo "<div class='container'> <div class='row'>";

  for ($i=0; $i <count($visosPrekes) ; $i++) {
      echo "<div class='col-md-4 bg-success'> <h2>" .$visosPrekes[$i][0] ."</h2>";
      printf("<img    src='./img/"     . $visosPrekes[$i][1] . "' width='200px' alt='nuotrauka'  />");
      echo "<p>". $visosPrekes[$i][3]. "<p>";
      echo "<button>" .$visosPrekes[$i][2]. "</button>";
      echo "</div>";
        }

  echo "</div>";
  echo "</div>";




 ?>







        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
