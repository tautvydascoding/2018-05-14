<?php

// 1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
//  vardas, pavarde, telefonas, mygtukas 'registruotis'
//
// 2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila
// 3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti
// vartotojo ivestus duomenis
// pvz.: print_r( $GET)

include('db_functions.php');




// prinr_r($_GET);
// prinr_r($_POST);
// prinr_r($_GLOBALS);



$VartotojoVardas = $_GET['vardas'];
$VartotojoPavarde = $_GET['pavarde'];

echo "<h2>". $VartotojoVardas . "</h2>";
echo "<h4>". $VartotojoPavarde . " </h4>";





createDoctor($VartotojoVardas,$VartotojoPavarde);




















































// php neuzsidaro
