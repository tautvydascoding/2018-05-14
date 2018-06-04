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

        <!-- // UZDUOTIS
        // 1. papildyti faila:  db_functions.php
        // 3. suprogramuoti f-jas:
        // 4. getDoctor($nr)
        // 5. createDoctor($vardas, $pavarde)
        // 6. deleteDoctor($nr)
        // 7. updateDoctor($nr, $vardas, $pavarde)
        // 8. getDoctors($kiekGydytoju)



        // susikurti nauja prjekta ir issivesti daktara is DB naudojant getDoctors() f-ja su while ar foreach -->

<?php

include_once('db_functions.php');

// išvesti visus gydytojus

$visiGydytojaiObjektas = getDoctors();
$gydytojas=mysqli_fetch_assoc($visiGydytojaiObjektas); // paimame

while ($gydytojas ) {
  echo "<h2>". $gydytojas['name'] . $gydytojas['lname']. "</h2>";
  $gydytojas=mysqli_fetch_assoc($visiGydytojaiObjektas); // !!!! be šito bus amžinas ciklas
  echo "<a class='btn btn-danger' href='delete-doctor.php?numeris=". $gydytojas['id']."'> Trinti </a>";
}

//
// $gydytojuSkaicius = mysqli_num_rows($visiGydytojaiObjektas);
// for ($i=0; $i < $gydytojuSkaicius; $i++) {
//   $gydytojas=mysqli_fetch_assoc($visiGydytojaiObjektas);
//   echo "<h2>". $gydytojas['name'] . $gydytojas['lname']. "</h2>";
// }
//
//  ?>




        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
