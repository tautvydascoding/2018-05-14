<?php



include_once( 'zmogus.php' );

// objekto kurimas
$Monika = new Zmogus();
$Juozas = new Zmogus();

// objekto duomenu keitimas
$Monika->vardas = "Monika";
$Monika->ugis   = 188;
$Juozas->vardas = "Juozulis";
$Juozas->ugis   = 199;
// var_dump( $Monika );        // test

// objekto duomenu isvedimas
echo "Merginos vardas: $Monika->vardas <br />";
echo "Merginos ugis:   $Monika->ugis  <br />";
echo "Vyro vardas: $Juozas->vardas <br />";
echo "Vyro ugis:   $Juozas->ugis  <br />";

$Juozas->einu();  // f-jos isvedimas
