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

        <!-- // 2) sukurti matrica:
        // Tomas, 1981, Buhalteris
        // Ona 1980 Programuotoja
        // Petras, 1975, Direktorius
        // 2.1) atspausdinti su FOR ciklu
        // 2.2) atspausdinti su FOR FOR ciklu
        // 2.3) atspausdinti su FOREACH -->

<?php

$darbuotojai=[];
$darbuotojas1=["Tomas", 1981, "Buhalteris"];
$darbuotojas2=["Ona", 1980, "Programuotoja"];
$darbuotojas3=["Petras", 1975, "Direktorius"];

$darbuotojai[0]=$darbuotojas1;
$darbuotojai[1]=$darbuotojas2;
$darbuotojai[2]=$darbuotojas3;




for ($i=0; $i <count($darbuotojai) ; $i++) {
  echo $darbuotojai[$i][0];
  echo $darbuotojai[$i][1];
  echo $darbuotojai[$i][2];
}

for ($i=0; $i<count($darbuotojai); $i++) {
  echo "<p>". $darbuotojai[$i][0]. "</p>";
    echo "<p>". $darbuotojai[$i][1]. "</p>";
      echo "<p>". $darbuotojai[$i][2]. "</p>";
}


echo "su for for ciklu";
for ($i=0; $i<count($darbuotojai); $i++) {
  for($j=0; $j<count($darbuotojai); $j++) {
    echo "<p>". $darbuotojai[$i][$j]. "</p>";
  }
}

echo "su foreach ciklu";
foreach ($darbuotojai as $key => $value) {
  echo $value[0]  ."<br />";
  echo $value[1] ."<br />";
  echo $value[2] ."<br />";
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
