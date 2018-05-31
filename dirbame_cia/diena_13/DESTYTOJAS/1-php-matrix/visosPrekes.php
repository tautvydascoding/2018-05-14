<?php

// A. sukurti masyva preke1: Antraste, img pavadinimas, prekes aprasymas, kaina
// A. sukurti masyva preke2: Antraste, img pavadinimas, prekes aprasymas, kaina
// A. sukurti masyva preke3: Antraste, img pavadinimas, prekes aprasymas, kaina
//           0          1           2                          3
$preke1 = ["iPhone",  "1.jpg", "Aprasymas 1 aprasyams ...", 333.99];
$preke2 = ["iPhone2", "2.jpg", "Aprasymas 2 aprasyams ...", 433.99];
$preke3 = ["iPhone3", "3.jpg", "Aprasymas 3 aprasyams ...", 555.99];
$preke4 = ["iPhone4", "4.jpg", "Aprasymas 4 aprasyams ...", 777];
// B. i masyva visosPrekes, ideti "preke" masyva
$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;
$visosPrekes[3] = $preke4;
// print_r(  $visosPrekes );  // testuoju ar turiu duomenis

// C. atvaizduodi kiekvienoje eiluteje po 3 prekes
// (naudojant for arba foreach) ir bootstrap dizaina

// TIK prekiu pavadinimai
// for ($i=0; $i < count( $visosPrekes); $i++) {
//     // $i - kelinta preke ;
//     // 0 -  vidinio masyvo stalcius (prekes pavadinimas)
//     echo $visosPrekes[$i][0] . "<br />";
// }






echo "<div class='row'>" ;
            for ($i=0; $i < count( $visosPrekes); $i++) {
                // $i - kelinta preke ;
                // 0 -  vidinio masyvo stalcius (prekes pavadinimas)
                echo "<article class='col-md-4'>";
                    echo "<h2>" . $visosPrekes[$i][0] . "</h2>";
                    printf("<img  src='img/"  . $visosPrekes[$i][1] . "' width='200px' alt=''  />");
                    echo "<p>" . $visosPrekes[$i][2] . "</p>";
                    echo "<a>" . $visosPrekes[$i][3] . "</a>";
                echo "</article>";
            }
echo "</div>";

// D. naudojant du FOR FOR arba FOREACH FOREACH


// 3 budai nuotraukoms
// printf("<img    src='./img/"     . $visosPrekes[$i][1] . "' width='200px' alt=''  />");
// printf("<img src='./img/%s' width='200px' alt=''  />", $visosPrekes[$i][1]);

 ?>
