<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>php</title>
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
        include_once("db_functions.php");

        function  getDoctors() {
            $manoSQL = "SELECT * FROM doctors";
            $visiGydytojaiObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
            return $visiGydytojaiObjektas;
        }

       // paimam visus gydytojus
       $visiDaktarai =   getDoctors();
       // is objekte laikomu VISU gydytoju - paimame SEKANTI VIENA gydytoja (idedam i masyva)

        // $gydytojas1Masyvas = mysqli_fetch_assoc(   $visiDaktarai   );
        // $gydytojas2Masyvas = mysqli_fetch_assoc(   $visiDaktarai   );
        // $gydytojas3Masyvas = mysqli_fetch_assoc(   $visiDaktarai   );
        // $gydytojas4Masyvas = mysqli_fetch_assoc(   $visiDaktarai   );

// gydytoju skaicius su for ciklu
          $gydytojuSkaicius = mysqli_num_rows($visiDaktarai);
            for ($i=0; $i < $gydytojuSkaicius ; $i++) {
              $gydytojas = mysqli_fetch_assoc(   $visiDaktarai   );
              echo "<h2>" . $gydytojas['name'] . " " . $gydytojas['lname'] . "</h2>";
            }

         ?>

      <!-- <h2><?= $gydytojas1Masyvas['name'] . " " . $gydytojas1Masyvas['lname']; ?> </h2>
      <h2><?= $gydytojas2Masyvas['name'] . " " . $gydytojas2Masyvas['lname']; ?> </h2>
      <h2><?= $gydytojas3Masyvas['name'] . " " . $gydytojas3Masyvas['lname']; ?> </h2>
      <h2><?= $gydytojas4Masyvas['name'] . " " . $gydytojas4Masyvas['lname']; ?> </h2>
       -->
      <?php
// gydytoju skaicius su while ciklu
      $gydytojas = mysqli_fetch_assoc($visiDaktarai);
      while ($gydytojas) {
        echo "<h2>" . $gydytojas['name'] . " " . $gydytojas['lname'] . "</h2>";
        $gydytojas = mysqli_fetch_assoc($visiDaktarai);// !!!! jei nepadesi, bus amzinas ciklas
      };

 ?>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
