<?php



include_once( 'zmogus.php' );

// ("Monika L.",  165) - nukeliauja i konstruktoriu
$Monika = new Zmogus("Monika L.",  165);
$Petras = new Zmogus("Petrusevicius P.",  155);
$Antanas = new Zmogus("Antanai tis L.",  200);

// var_dump($Monika); // test

$Monika->manoVardas();
$Petras->manoVardas();
$Antanas->manoVardas();

echo $Monika->vardas;
