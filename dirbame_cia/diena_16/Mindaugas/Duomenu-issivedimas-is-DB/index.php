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
        //visu gydytoju isvedimas

        require_once('db_functions-full.php');
        $visiGydytojaiObjektas = getDoctors();

        $gydytojas1 = mysqli_fetch_assoc( $visiGydytojaiObjektas ); //paima tik viena sekancia eilute mysqli_fetch_assoc
        $gydytojas2 = mysqli_fetch_assoc( $visiGydytojaiObjektas );
        $gydytojas3 = mysqli_fetch_assoc( $visiGydytojaiObjektas );
        $gydytojas4 = mysqli_fetch_assoc( $visiGydytojaiObjektas );

        // print_r($visiGydytojaiObjektas); // test
?>
        <h2> <?= $gydytojas1['name']. $gydytojas1['lname'] ;?></h2>
        <h2> <?= $gydytojas2['name']. $gydytojas2['lname'] ;?></h2>
        <h2> <?= $gydytojas3['name']. $gydytojas3['lname'] ;?></h2>
        <h2> <?= $gydytojas4['name']. $gydytojas4['lname'] ;?></h2>

        <?php

        while ($gydytojas = mysqli_fetch_assoc( $visiGydytojaiObjektas )) {
          echo "<h2>" . $gydytojas['name'] . $gydytojas['lname'] . "</h2>";

        }

// ==============arba FOR============
    $gydytojuSkaicius = mysqli_num_rows($visiGydytojaiObjektas);
    for ($i=0; $i < $gydytojuSkaicius ; $i++) {
      $gydytojas = mysqli_fetch_assoc( $visiGydytojaiObjektas );
      echo "<h2>" . $gydytojas['name'] . $gydytojas['lname'] . "</h2>";
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
