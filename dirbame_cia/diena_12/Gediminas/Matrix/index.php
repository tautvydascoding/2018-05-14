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

            $visiDarbuotojai = [];

            $darbuotojas1 = [ "Jonas", "Jonaitis", 1980, "Inspektorius"];
            $darbuotojas2 = [ "Ona", "Onute", 1980, "Sekretore"];
            $darbuotojas3 = [ "Kestutis", "Kerta", 2000, "Pavaduotojas"];

            $visiDarbuotojai[0] = $darbuotojas1;
            $visiDarbuotojai[1] = $darbuotojas2;
            $visiDarbuotojai[2] = $darbuotojas3;
            print_r($darbuotojas1);
            echo "<br  />";
            print_r($darbuotojas2);
            echo "<br  />";
            print_r($darbuotojas3);
            echo "<br  />";

            // for ( $i=0; $i < count($darbuotojas1); i++) {
            //     echo "<h2>" . $darbuotojas1[$i] . "</h2>";
            //     echo "<p>" . $darbuotojas1[$i] . "</p>";
            //     echo "<p>" . $darbuotojas1[$i] . "</p>";
            //
            // }

            for ($i=0; $i < count($darbuotojas1); $i++) {
                echo "<h2>" . $darbuotojas1[$i] . "</h2>";
                // echo "<p>" . $darbuotojas1[$i] . "</p>";
                // echo "<p>" . $darbuotojas1[$i] . "</p>";

            for ($i=0; $i < count($visiDarbuotojai); $i++) {
                echo "<h2>" . $visiDarbuotojai[$i][0] . "</h2>";
                // code...
            }

                // code...
            }
                // code...

         ?>






        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
