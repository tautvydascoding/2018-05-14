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
//         $visosPrekes = [];
//
//         $preke1 = ["Plaktukas" , "Lorem ipsum dolor sit amet, consectetur adipisicing elit" , 12.90 , 4];
//         $preke2 = ["Svytrinis" , "Lorem ipsum dolor sit amet, consectetur adipisicing elit" , 0.40 , 151];
//         $preke3 = ["Reples" , "Lorem ipsum dolor sit amet, consectetur adipisicing elit" , 16.50 , 18];
//
//         $visosPrekes[0] = $preke1;
//         $visosPrekes[1] = $preke2;
//         $visosPrekes[2] = $preke3;
//
// // printinimas i console
//         // print_r($preke1);
//         // echo "<br />";
//         // print_r($preke2);
//         // echo "<br />";
//         // print_r($preke3);
//         // echo "<br />";
//         // print_r($visosPrekes);
//
//         // sumazinti repliu kieki: trys budai.
//         $visosPrekes[2][3] -= 1;
//         // $visosPrekes[2][3]--;
//         // $visosPrekes[2][3] = $visosPrekes[2][3] - 1;
//
//         // print_r($visosPrekes);
//
// // sumazinti plaktuku kaina 4 arba 33%
//
//         // $visosPrekes[0][2] -= 4;
//
//         $visosPrekes[0][2] *= 0.66;
//
//         // echo "plaktumo kaina: " . $visosPrekes[0][2] . "<br />";
//
// //isvedimas
//         for ($i=0; $i < count($visosPrekes) ; $i++) {
//
//           echo "<h2>" . $visosPrekes[$i][0] . "</h2>";
//           echo "<p>" . $visosPrekes[$i][1] . "</p>";
//           echo "<button>" . $visosPrekes[$i][2] . "</button>";
//
//         }

          //
          // $darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
          // $darbuotojas2 = ["Ona", "Onute", 1980, "sekretore"];
          // $darbuotojas3 = ["Kestas", "Kerta", 2001, "pavaduotojas"];
          //
          // $visiDarbuotojai[0] = $darbuotojas1;
          // $visiDarbuotojai[1] = $darbuotojas2;
          // $visiDarbuotojai[2] = $darbuotojas3;
          //
          // // print_r($visiDarbuotojai);
          //
          //
          // //info apie viena darbuotoja
          // for ($i=0; $i <count($darbuotojas1) ; $i++) {
          //   echo "Info apie dabuotoja1: " . $darbuotojas1[$i] . "<br />";
          // }
          //
          // echo "<br />";
          //
          // //isveda darbuotoju vardus
          // for ($i=0; $i < count($visiDarbuotojai); $i++) {
          //   echo "Darbuotoju vardai: " . $visiDarbuotojai[$i][0] . "<br />";
          // }
          //
          // echo "<br />";
          //
          // //visu darbuotoju duomenys is eiles su vienu for
          // for ($i=0; $i < count($visiDarbuotojai); $i++) {
          //   echo "Darbuotojo vardas: " . $visiDarbuotojai[$i][0] . "<br />";
          //   echo "Darbuotoj pavarde: " . $visiDarbuotojai[$i][1] . "<br />";
          //   echo "Darbuotojo gim. metai: " . $visiDarbuotojai[$i][2] . "<br />";
          //   echo "Darbuotojo pareigos: " . $visiDarbuotojai[$i][3] . "<br />";
          // }
          //
          // echo "<br />";
          //
          // //visu darbuotoju duomenys is eiles su dviem for
          // for ($i=0; $i < count($visiDarbuotojai); $i++) {
          //   //konkretaus darbuotojo duomenys: vardas, pavarde, metai, pareigos.
          //   for ($j=0; $j < count($visiDarbuotojai[$i]); $j++) {
          //     echo $visiDarbuotojai[$i][$j] . "<br />";
          //   }
          //   echo "<br />";
          // }

         ?>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
