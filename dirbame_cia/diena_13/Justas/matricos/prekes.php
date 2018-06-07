<?php //masyvas visosms prekems
$visosPrekes = [];

//pirmos prekes masyvas
$preke1 = ["Kreslas1",
 "1.jpg",
  "Lorem ipsum dolor sit amet, consectetur adu",
   200.90
        ];
//antos prekes masyvas
$preke2 = ["Kreslas2",
 "2.jpg",
  " elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu",
   100.90
        ];
//trecios prekes masyvas
$preke3 = ["Kreslas3",
 "3.jpg",
  "Lorem ipsum dolor sit ",
   300.90
        ];

    $visosPrekes[0] = $preke1;

    $visosPrekes[1] = $preke2;

    $visosPrekes[2] = $preke3;



    echo "<div class=\"row\">";
        for ($i=0; $i < count($visosPrekes); $i++) {
            echo "<article class='col-md-4'>";
                echo "<h2>" . $visosPrekes[$i][0] . "</h2>";
                // printf("<img  src='..img/" . $visosPrekes[$i][1] . "' width='200px'>")
                echo "<p>" . $visosPrekes[$i][2] . "</p>";
                echo "<a>" . $visosPrekes[$i][3] . "</a>";
            echo " </article>";
        }
    echo "</div>";






 ?>
