<?php

include('db_functions-full.php');

print_r($_GET);

// print_r($GLOBALS); cia yra duomenu baze

$vartotojoVardas=$_GET['vardas'];
$vartotojoPavarde=$_GET['pavarde'];
echo "<h2> Vardas, Pavarde: " . $vartotojoVardas . " ".  $vartotojoPavarde. "</h2>";

createDoctor($vartotojoVardas, $vartotojoPavarde);
