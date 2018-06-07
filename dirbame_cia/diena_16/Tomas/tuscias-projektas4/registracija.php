<?php
print_r($_GET);
print_r($_POST);
$vartotojoVardas = $_GET['Vardas'];
$vartotojoPavarde = $_GET['Pavarde'];
echo "<h2> $vartotojoVardas $vartotojoPavarde </h2>";

include('db_functions.php');
createDoctor($vartotojoVardas, $vartotojoPavarde);
// die surasti klaidai
