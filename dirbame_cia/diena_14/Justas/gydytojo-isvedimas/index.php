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

            require_once('db_functions.php');
            // $gydytojas1 = getDoctor(3);
            // $gydytojas2 = getDoctor(1);
            // $gydytojas3 = getDoctor(2);
            //
            // if ($gydytojas1 != NULL) {
            //     // print_r($gydytojas1);
            //     echo "<h2> Nr.  $gydytojas1[id] </h2>";
            //     echo "<h3> $gydytojas1[name] $gydytojas1[lname] <h3>";
            //
            //     echo "<h2> Nr. $gydytojas2[id] </h2>";
            //     echo "<h3> $gydytojas2[name] $gydytojas2[lname] <h3>";
            //
            //     echo "<h2> Nr. $gydytojas3[id] </h2>";
            //     echo "<h3> $gydytojas3[name] $gydytojas3[lname] <h3>";
            // }

            // include('gydytojas.php');
            include('pacientas.php')
        ?>











        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
