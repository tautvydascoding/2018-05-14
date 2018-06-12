<?php



print_r($_GET);



$vartotojoVardas=$_GET['name'];

$vartotojoElpastas=$_GET['email'];

$vartotojoKomentaras=$_GET['text'];

echo "<h4> Vartotojo vardas: " . $vartotojoVardas . " </h4>";
echo "<h4> Vartotojo el.paštas: " . $vartotojoElpastas . "</h4>";
echo "<h4> Komentaras: " . $vartotojoKomentaras . "</h4>";
