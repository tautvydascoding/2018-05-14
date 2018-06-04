<?php
include("db_functions.php");

print_r($_GET);
print_r($_POST);

// print_r($GLOBALS);
//
// $GLOBALS["OVIDIJUS"] = "slaptazodis";

$vartotojoVardas = $_GET["vardas"];
$vartotojoPavarde = $_GET["pavarde"];
$vartotojoTelefonas = $_GET["telefonas"];


function createDoctor($Vardas, $Pavarde) {

    $uzkoduotasVardas =  htmlspecialchars( $Vardas, ENT_QUOTES, 'UTF-8' );
    $uzkoduotasPavarde = htmlspecialchars( $Pavarde, ENT_QUOTES, 'UTF-8' );

    $manoSQL = " INSERT INTO doctors
                        VALUES ('', '$uzkoduotasVardas', '$uzkoduotasPavarde');
               ";

    $arPavyko  = mysqli_query(getPrisijungimas(), $manoSQL);

    if ($arPavyko == false) {
        echo "ERROR: nepavyko sukurti Gydytojo" . mysqli_error(getPrisijungimas());
    }
}
createDoctor($vartotojoVardas , $vartotojoPavarde);
