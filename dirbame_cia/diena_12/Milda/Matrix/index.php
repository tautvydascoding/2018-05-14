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

<!--

        $visosPrekes=[];
        $preke1=["Plaktukas", "Lorem ipsum dolor sit amete", 12.90, 4];
        $preke2=["Popierius", "Lorem ipsum dolor sit amete", 0.4, 151];
        $preke3=["Reples", "Lorem ipsum dolor sit amete", 2.3, 18];

        //isvesti prekes pavadinima i h2, prekes aprasyma i p, kaina i mygtuka//

        $visosPrekes[0]=$preke1;
        $visosPrekes[1]=$preke2;
        $visosPrekes[2]=$preke3;

        // testuojame masyvus ar turime juose duomenu:
        print_r($preke1);
        echo("<br/>");
        print_r($preke2);
        echo("<br/>");
        print_r($preke3);
        echo("<br/>");

        //$visosPrekes[0][2]-=4;

        $visosPrekes[0][2]=$visosPrekes[0][2]*0.66;
        print_r($visosPrekes);
        echo "plaktuko kaina:" . $visosPrekes[0][2] . "<br/>";
        //sumažinti plaktukų kainą 4 eur arba 33 procentais

        for ($i=0; $i < count($visosPrekes) ; $i++) {
          echo "<h2>" . $visosPrekes [$i][0]. "</h2>";
          echo "<p>" . $visosPrekes [$i][1]. "</p>";
          echo "<button>" . $visosPrekes [$i][2]. "</button>"; -->
        }
  <?php
        // / =================svarbus patarimai===================:
        // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
        // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
        // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
        // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
        // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
        // matricos ilgis daznai skiriasi nuo plocio.
        //  pvz.:
         // for ( i < eiluciuSkaicius)
         //    for ( k < stulpeliuSkaicius)
         // =================// =================// ========

             // UZDUOTIS 1.0
             // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
             // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
             // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
             // D. sukurti masyva 'visiDarbuotojai'
             // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
  $visiDarbuotojai=[];
  $darbuotojas1=["Jonas", "Jonaitis", 1980, "Inspektorius"];
  $darbuotojas2=["Ona", "Onute", 1980, "sekretore"];
  $darbuotojas3=["Kestas", "Kerta", 2001, "pavaduotojas"];

  $visiDarbuotojai[0]=$darbuotojas1;
  $visiDarbuotojai[1]=$darbuotojas2;
  $visiDarbuotojai[2]=$darbuotojas3;

// testuojame masyvus ar turime juose duomenu:
    print_r($darbuotojas1);
    echo("<br/>");
    print_r($darbuotojas2);
    echo("<br/>");
    print_r($darbuotojas3);
    echo("<br/>");


             // UZDUOTIS 1.1
             // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

for ($i=0; $i < count($darbuotojas1); $i++) {
echo $darbuotojas1[$i];
}

             // UZDUOTIS 1.2
             // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo $visiDarbuotojai[$i][0];
}

             // UZDUOTIS 1.3
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
             for ($i=0; $i < count($visiDarbuotojai); $i++) {
               echo $visiDarbuotojai[$i][0];
               echo $visiDarbuotojai[$i][1];
               echo $visiDarbuotojai[$i][2];
              echo $visiDarbuotojai[$i][3];
              echo "<br />";
             }



             // UZDUOTIS 1.4
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

for ($i=0; $i < count($visiDarbuotojai); $i++) {
  for ($j=0; $j < count($visiDarbuotojai[$i]); $j++) {
      echo"<p>" .$visiDarbuotojai [$i][$j]. "</p>";
  }
}
































         ?>

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js" type="text/javascript"> </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>

    </body>
</html>
