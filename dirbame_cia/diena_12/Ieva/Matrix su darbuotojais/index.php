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
        //
        //
        $visiDarbuotojai=[];
        $darbuotojas1=["Jonas", "Jonaitis", 1980, "Inspektorius"];
        $darbuotojas2=["Ona", "Onute", 1980, "Sekretore"];
        $darbuotojas3=["Kestas", "Kerta", 2001, "Pavaduotojas"];

        $visiDarbuotojai[0]=$darbuotojas1;
        $visiDarbuotojai[1]=$darbuotojas2;
        $visiDarbuotojai[2]=$darbuotojas3;

        // print_r($visiDarbuotojai[0]);
        // echo "</br/>";
        // print_r($visiDarbuotojai[1]);
        // echo "</br/>";
        // print_r($visiDarbuotojai[2]);
        // echo "</br/>";
        //
        //
        //
        //
        // for ($i=0; $i <count($darbuotojas1) ; $i++) {
        //   echo $darbuotojas1[$i];
        // }
        //
        echo "</br/>";
        echo "1.2 uzduotis. isvesti visu darbuotoju vardus";
        echo "</br/>";
        for ($i=0; $i < count($visiDarbuotojai); $i++) {
            echo $visiDarbuotojai[$i][0];
            echo "</br/>";

            }
        //
        //   echo "1.3 uzduotis. isvesti kiekvieno darbuotojo informacija";
        //   for ($i=0; $i < count($visiDarbuotojai); $i++) {
        //       echo "<p>". $visiDarbuotojai[$i][0]. "</p>";
        //       echo "<p>". $visiDarbuotojai[$i][1]. "</p>";
        //       echo "<p>". $visiDarbuotojai[$i][2]. "</p>";
        //       echo "<p>". $visiDarbuotojai[$i][3]. "</p>";
        //
        //       }
        //
        //
        //     echo "1.4 uzduotis. isvesti visa informacija apie darbuotojus naudojant du FOR ciklus" ;
        //     for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
        //         for ($j=0; $j < count($visiDarbuotojai[$i]); $j++) {
        //           echo "<p>". $visiDarbuotojai[$i][$j]. "</p>";
        //         }
        //     }
        //
        //     foreach ($visiDarbuotojai as $key => $value) {
        //       echo $value[0] . "<br />";
        //       echo $value[1] . "<br />";
        //       echo $value[2] . "<br />";
        //       echo $value[3] . "<br />";
        //     }


// $visosPrekes=[];
// $preke1=["Dviratis", "", "Lorem ipsum dolor sit amet, consectetur", 99.0];
// $preke2=["Paspirtukas", "", "Lorem ipsum dolor sit amet, consectetur", 53.0];
// $preke3=["Paspirtukas", "", "Lorem ipsum dolor sit amet, consectetur", 53.0];

         ?>




        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
