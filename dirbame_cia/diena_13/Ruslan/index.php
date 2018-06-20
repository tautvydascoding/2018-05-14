<?php

// UZDUOTIS 1.0
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
     $preke1 = ['Plaktukas','1.jpg','loremipsum',55];
    //  print_r ($darbuotojas1);
     // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
     $preke2 = ['Pompa','2.jpg','loremipsum',89];
     // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
     $preke33 = ['Torseras','3.jpg','loremipsum',158];
    
     // D. sukurti masyva 'visiDarbuotojai'
     $visosprekes[0] = $darbuotojas1;
     $visosprekes[1] = $darbuotojas2;
     $visosprekes[2] = $darbuotojas3;
  

    //  print_r($visiDarbuotojai);


     echo "<br>";
     echo "<br>";
     echo count($visiDarbuotojai[0]);
     echo "<br>";
     echo "<br>";
     // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
     // UZDUOTIS 1.1
     // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
    //  $lenght = count($visiDarbuotojai[0]);
    // //  echo $lenght;
    //  for ($i=0;$i<count($visiDarbuotojai[0]);$i++){
    //      echo ($visiDarbuotojai[0][$i] . '<br>');
    //  }

    //  echo "<br>";
    //  echo "<br>";
    //  // UZDUOTIS 1.2
    //  // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
    //  for ($i=0;$i<count($visiDarbuotojai);$i++){
    //     echo ($visiDarbuotojai[$i][0] . '<br>');
    // }
    // echo "<br>";
    // echo "<br>";
     // UZDUOTIS 1.3
    //  // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
    //  for ($i=0;$i<count($visiDarbuotojai);$i++){
    //     echo ($visiDarbuotojai[$i][0] . ' ' . $visiDarbuotojai[$i][1] . ' ' . $visiDarbuotojai[$i][2] . ' ' . $visiDarbuotojai[$i][3] . '<br>' );
    // }
    // echo "<br>";
    // echo "<br>";
     // UZDUOTIS 1.4
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
     for ($i=0;$i<count($visiDarbuotojai);$i++){
         echo ("div class='row'");
         for ($x=0;$x<count($visiDarbuotojai[$i]);$x++){
             
        echo ($visiDarbuotojai[$i][$x].' ') ;
     }
     echo "<br>";
    }
    echo "<br>";
    echo "<br>";


    // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);


// $prekes = ["pavadinimas"=>"Plaktukas","aprasymas"=>"Lorem ipsum","kaina"=>150,"kiekis"=>15];

// $preke1 = ["reples","lorem ipsum",16.50,18];
// $preke2 = ["Svytrinis","lorem ipsum",2.54,98];
// $preke3 = ["plaktukas","lorem ipsum",18.39,42];

// $VisosPrekes[0] = $preke1;
// $VisosPrekes[1] = $preke2;
// $VisosPrekes[3] = $preke3;

// print_r($VisosPrekes);
// echo ("<br>");
// print ($VisosPrekes[0][3]);
// $VisosPrekes[0][3] -=1;
// echo ("<br> Repliu kaina " . $VisosPrekes[0][3] . " Eur")
// $visosPrekes[0][3]--; Arba tokiu budu sumazinti.
// print $visosPrekes[0][3]

?>