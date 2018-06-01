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

      require_once('db_prisijungimas_gydytojo paemimas.php');
      $gydytojas1 = getDoctor(3);
      $gydytojas2 = getDoctor(2);

      // print_r($gydytojas1);

      if ($gydytojas1 != NULL) {
        echo "<h2> Nr:" . $gydytojas1['id'] . "</h2>";
        $vardPav = "<h3>" .$gydytojas1['name'] . " " . $gydytojas1['lname'] ."</h3>";
        echo $vardPav;
      }

 ?>

<h2> NR: <?php echo $gydytojas1['id']; ?> </h2>
<h3> Vardas, pavarde <?php echo $gydytojas1['name']." ". $gydytojas1['lname']; ?> </h3>

<h2> NR: <?php echo $gydytojas2['id']; ?> </h2>
<h3> NR: <?php echo $gydytojas2['name']." ". $gydytojas2['lname']; ?> </h3>

    <!-- // sukurti funkcija pacientams ir atvaizduoti ekrane -->

<?php

$pacientas1 = getPatient(2);

if ($pacientas1 !=NULL) {
  echo "<h2> Paciento Nr:" . $pacientas1['id']. "</h2>";

  $pacientoVardas = "<h3>" . $pacientas1['name']. " " . $pacientas1['lname'] ."</h3>";
  echo $pacientoVardas;
}

$pacientas2 = getPatient(4);

if ($pacientas2 !=NULL) {
  echo "<h2> Paciento Nr:" . $pacientas2['id']. "</h2>";

  $pacientoVardas = "<h3>" . $pacientas2['name']. " " . $pacientas2['lname'] ."</h3>";
  echo $pacientoVardas;
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
