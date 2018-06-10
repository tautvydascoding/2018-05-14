<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
         <!--  kad ant ivairiu irenginiu media veiktu   -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- mano failas visada zemiau -->
        <link rel="stylesheet" href="css/master.css">

    </head>

    <body>
        <h1 > Isijunk console </h1>
        <h2></h2>
<!--
        // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)





    // $darbuotojas = ["Povilas", "Povilaitis", 1992];
    // print_r($darbuotojas);
    // echo "<br />";
    //
    // $masina = ["pavadinimas"=> "Opel", "spalva"=> "juoda", "metai" =>2000];
    // print_r($masina);
    //
    // echo "<br/>";
    // echo "masinos metai:" . $masina["metai"];
    //
    // echo "<br/>";
    // foreach ($masina as $stalciausPavadinimas => $stalciausReiksme) {
    //   echo "$stalciausReiksme" . "<br/>";
    // }

    //
    // $masyvasMeniu = ["Home", "About", "Gallery", "Contact", "Blog", "WordPress"];
    // // print_r($masyvasMeniu); testavimui
    //
    //
    // <nav>
    //   <ul>
    //
    //
    //       foreach ($masyvasMeniu as $key => $value) {
    //         echo "<li>" . $value . "</br/>";
    //       }

    //
    //
    //
    //
    //   </ul>
    // </nav>


    // uzduotis 2
    // A. susirasti 6 nuotraukas
    // B. susikurti nuotrauku pavadinimu masyva
    // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
    // <img src='./img/1.jpg' alt=''  /> -->

<?php
    $nuotraukos = ["2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.png", "balionas.png"];
    // print_r($nuotraukos[0]);


    foreach ($nuotraukos as $key => $value) {
      echo "Nuotrauku masyvo stalcius:  $value  <br />";
    }

    for ($i=0; $i<count($nuotraukos); $i++) {
      echo "<img src='images/$nuotraukos[$i]' width='400px' height='auto' />";

    }
  ?>








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
