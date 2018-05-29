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
          echo "mano zinute <br/>";
          echo "mano 2 zinute <br/>" ;

            $vardas = "Petriukas";
            // aukstas Petras isejo
            echo "aukstas $vardas  isejo i lauka <br />";
            // aukstas $vardas isejo
            echo 'aukstas $vardas  isejo i lauka <br />';

            print("kitas budas isvesti i ekrana/faila <br />");
            // die("paskutine zinute kuria isves PHP <br />");
            echo "zinute po die";

            // konstantos
            define("HOMESTRAIPSNIUSK", 6);
            echo "HOMESTRAIPSNIUSK";
            $nr = "999";
// php sujungimas "pirmas tekstas"."antras tekstas"
            echo "gettype($nr)";

            echo "skaiciaus tipas" . gettype($nr) . "<br />";
            if (gettype($nr) == "string") {
              settype($nr, "integer");
              echo "skaiciaus tipas:" . gettype($nr) . "<br />";

              if ($nr !=0 ) {
                $ats=100 / $nr;
              }
            }
            echo "atsakymas" . $ats . "<br />";
            echo "atsakymas:$ats <br />";

            // settype($nr, "integer");
            // echo "skaiciaus tipas:" . gettype($nr) . "<br />";



// str stringo trumpinys, o len length trumpinys (strlen)
            echo "teksto ilgis:" . strlen($nr) . "<br />";






          ?>








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
