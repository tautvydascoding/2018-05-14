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



            // $visosPrekes = [];
            //
            // $preke1 = ["Plaktukas", "t anim id est laborum.", 12.90, 4];
            //
            // $preke2 = ["Svitrinis", "Lorem ipsum dd est laborum.", 0.4, 151];
            //
            // $preke3 = ["Reples", "Lorem ipsum .", 16.50, 18];
            //
            // $visosPrekes[0] = $preke1;
            // $visosPrekes[1] = $preke2;
            // $visosPrekes[2] = $preke3;
            //
            // //test ar yra duomenu
            // // print_r($preke1);
            // // echo "<br>";
            // // print_r($preke2);
            // // echo "<br>";
            // // print_r($preke3);
            // // echo "<br>";
            // // print_r($visosPrekes);
            //
            // //sumazinama reliu kaina 1
            // $visosPrekes[2][2]--;
            // echo "<br>";
            // print_r("dabar repliu kaina: " . $visosPrekes[2][2]);
            //
            //
            // //sumazinti plaktuko kaina 4 eur
            // $visosPrekes[0][2] -= 4;
            // echo "<br>";
            // print_r("dabar plaktuko kaina: " . $visosPrekes[0][2]);
            //
            //
            // //2. isvesti prekes informacija
            // for ($i=0; $i < count($visosPrekes); $i++) {
            //     echo "<h2>" . $visosPrekes[$i][0] . "</h2>";
            //     echo "<p>" . $visosPrekes[$i][1] . "</p>";
            //     echo "<button>" . $visosPrekes[$i][2] . "</button>";
            // }


            // $darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
            // $darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
            // $darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
            //
            //
            //
            // $visiDarbuotojai = [];
            // print_r($darbuotojas1);
            // echo "<br>";
            // print_r($darbuotojas2);
            // echo "<br>";
            // print_r($darbuotojas3);
            // echo "<br>";
            // print_r($visiDarbuotojai);
            //
            //
            // $visiDarbuotojai[0] = $darbuotojas1;
            // $visiDarbuotojai[1] = $darbuotojas2;
            // $visiDarbuotojai[2] = $darbuotojas3;
            // echo "<br>";
            // print_r($visiDarbuotojai);
            // echo "<br>";
            //
            // for ($i=0; $i < count($darbuotojas1) ; $i++) {
            //     echo "pirmo darbuotojo info: " . $darbuotojas1[$i] . "<br>";
            // }
            //
            //
            // echo "<br>";
            // for ($i=0; $i < count($visiDarbuotojai); $i++) {
            //     echo "visu darbuotoju vardai: " . $visiDarbuotojai[$i][0] . "<br>";
            // }
            //
            //
            // echo "<br>";
            // for ($i=0; $i < count($visiDarbuotojai); $i++) {
            //     echo "visa info apie visus: " . $visiDarbuotojai[$i][0] . "<br>";
            //     echo "visa info apie visus: " . $visiDarbuotojai[$i][1] . "<br>";
            //     echo "visa info apie visus: " . $visiDarbuotojai[$i][2] . "<br>";
            //     echo "visa info apie visus: " . $visiDarbuotojai[$i][3] . "<br>";
            // }
            //
            // echo "<br>";
            // for ($i=0; $i < count($visiDarbuotojai); $i++) {
            //     for ($x=0; $x < count($visiDarbuotojai[$i]); $x++) {
            //         echo "visu daruotoju info: " . $visiDarbuotojai[$i][$x] . "<br>";
            //     }
            // }
            //

            //=============

            $visosPrekes = [];

            include('prekes/preke1.php');

            $visosPrekes[0] = $preke;
            print_r($visosPrekes);//test ar yra duomenu


         ?>









        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
