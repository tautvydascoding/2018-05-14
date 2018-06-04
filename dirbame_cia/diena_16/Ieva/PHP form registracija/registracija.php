
<!-- // 1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
//  vardas, pavarde, telefonas, mygtukas 'registruotis'
//
// 2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila
// 3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti
// vartotojo ivestus duomenis
// pvz.: print_r( $GET) -->



<?php
include('db_functions.php');

print_r($_GET);
$vartotojoVardas=$_GET['vardas'];
$vartotojoPavarde=$_GET['pavarde'];
$vartotojoTelefonas=$_GET['telefonas'];

echo "<h2> Vartotojo vardas: ". $_GET['vardas'] . "</h2>";
echo "<h2> Vartotojo vardas: ". $_GET['pavarde'] . "</h2>";
echo "<h2> Vartotojo telefonas: ".$_GET['telefonas']. "</h2>";



// createDoctor("Tomas", "Tomaitis");
createDoctor($vartotojoVardas, $vartotojoPavarde);
