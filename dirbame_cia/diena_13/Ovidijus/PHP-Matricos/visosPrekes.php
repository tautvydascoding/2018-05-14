<?php

$preke1 = ["iPhone", "1.jpg", "Aprasymas 1aprasymas aprasymas......", 333.99 ];
$preke2 = ["iPhone2", "2.jpg", "Aprasymas 2aprasymas aprasymas......", 433.99 ];
$preke3 = ["iPhone3", "3.jpg", "Aprasymas 3aprasymas aprasymas......", 555.99 ];
$preke4 = ["iPhone4", "4.jpg", "Aprasymas 4aprasymas aprasymas......", 777 ];

$visosPrekes[0] = $preke1;
$visosPrekes[1] = $preke2;
$visosPrekes[2] = $preke3;
$visosPrekes[3] = $preke4;

// print_r($visosPrekes); // patikrinimas

echo "<div class='row'>";

for ($i=0; $i < count($visosPrekes); $i++) {
  //$1 - kelinta preke  , 0 - vidinio masyvo
  echo "<article class='col-md-4'>";
  echo "<h2>" . $visosPrekes[$i][0] . "</h2>"; // susukureme "h2"
  printf("<img src='img/" . $visosPrekes[$i][1] . "' width='200px' alt=''/ >' );
  echo "<p>" . $visosPrekes[$i][2] . "</p>";
  echo "<a>" . $visosPrekes[$i][3] . "</a>";
  echo "</article>";
}

echo "</div>";


 ?>
