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
$darbuotojas = ["Povilas", "Povilaitis", 1990];
print_r( $darbuotojas);
echo "<br />";

//kitas isvedimo budas
//count($x) suskaiciuoja masyvo ilgi
for ($i=0; $i <count( $darbuotojas) ; $i++) {
  echo " stalciaus ingo: $darbuotojas[$i]  <br />";
}
//asociatyvus
$masina = ["pavadinimas" => "Opel",
          "metai" => 2000,
          "spalva" => "raudona"
        ];
print_r($masina);
//masyvas stalciaus pavadinimas
echo "masinos metai:" . $masina["metai"] . "<br />";

// manoMasyvas nebutinas- staciaus pavadinimas
// foreach ($masyvas as $stalciauspavadinimas => $konkreciamestalciujeidetaReiksme) {
//  echo $konkreciamestalciujeidetaReiksme . "<br />" // code...
// }


$meniu = ["home","about", "gallery", "contact", "blog"];
foreach ($meniu as $key => $value) {
echo "meniu pavadinimai:" . $value . "<br />";  // code...
}

 ?>

<nav>
  <ul>
    <?php
    //atspaudiname 4 meniu punktus
    for ($i=0; $i < count($meniu) ; $i++) { //count dedame, kad automatiskai nurod
     echo "<li>" .
     $meniu[$i] .
     "</li>";  // code...
    }
     ?>
  </ul>
</nav>







        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
