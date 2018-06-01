<?php
$preke1 = ["Stalas1", "stalas.jpg", "text text text text text text", 120.50];
$preke2 = ["Stalas2", "stalas.jpg", "text text text text text text", 96.60];
$preke3 = ["Stalas3", "stalas.jpg", "text text text text text text", 85.40];
$visosPrekes = [];
$visosPrekes[0]=$preke1;
$visosPrekes[1]=$preke2;
$visosPrekes[2]=$preke3;
// print_r($visosPrekes);
echo "<article class='row'>";
for ($i=0; $i < count($visosPrekes) ; $i++) {
        // echo $visosPrekes[$i][0] . "<br />";
        echo "<div class='col-md-4'><h2>" . $visosPrekes[$i][0] . "<br>" . "</h2></div>";
}
echo "</div>";
  ?>
