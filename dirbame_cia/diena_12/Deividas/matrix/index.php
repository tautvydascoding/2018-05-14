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
            $visosPrekes = [];
          $prekes1 = ["Plaktukas", "Lorem ipsum dolor sit amet, consectetur adipisicing elit", "12.90","4"];
          $prekes2 = ["Svitrinis", "Lorem ipsum dolor sit amet, consectetur adipisicing elit", "0.4","151"];
          $prekes3 = ["Reples", "Lorem ipsum dolor sit amet, consectetur adipisicing elit", "16.5","18"];
          $visosPrekes[0] = $prekes1;
          $visosPrekes[1] = $prekes2;
          $visosPrekes[2] = $prekes3;
          //testuojam ar viskas gerai - ar turime duomenu
          //print_r($prekes1);
          //echo "<br />";
          //print_r($prekes2);
            //echo "<br />";
          //print_r($prekes3);
            //echo "<br />";
          //print_r($visosPrekes);
            //echo "<br />";


          //1.
          //sumazinti repliu kieki
          //trys budai
          $visosPrekes[2][3] -= 1;
          //$visosPrekes[2][3]-- 1;
          //$visosPrekes[2][3] = $visosPrekes[2][3] - 1;


          //sumazinti plaktuku kaina 4eu arba 33 proc
          $visosPrekes[0][2] -= 4 ;



          //uzduotis 2.
          //ivesti prekes info:
          for ($i=0; $i < count($visosPrekes); $i++) {
            echo "<h2>" . $visosPrekes[$i][0] . "</h2>";
            echo "<p>" . $visosPrekes[$i][1] . "</p>";
            echo "<button>" . $visosPrekes[$i][2] . "</button>";
            // code...
          }
          //pavadinimas i <h2></h2>
          //aprasymas i p
          //kaina i mygtuka
          



         ?>








        <!--  // =================svarbus patarimai===================:
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
             // UZDUOTIS 1.1
             // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
             // UZDUOTIS 1.2
             // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
             // UZDUOTIS 1.3
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
             // UZDUOTIS 1.4
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)


            // UZDUOTIS 2
            // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
            // Antraste, img pavadinimas, kaina, prekes aprasymas

            // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
            // B. i masyva visosPrekes, ideti "preke" masyva
            // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


               // 3 budai nuotraukoms
                // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
                // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
   -->



























        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- MANO JS failas pats zemiausias -->
        <script type="text/javascript" src="main.js" >  </script>
    </body>
</html>
