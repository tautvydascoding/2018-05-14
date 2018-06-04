<?php

 define('DB_PAVADINIMAS', 'hospital5');
 define('DB_VARTOTOJAS', 'root');
 define('DB_SLAPTAZODIS', 'root');
 define('DB_HOST', 'localhost');

$prisijungimas =  mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

// nustatom mysql'ui   utf8 koduotę
// kad kai jis paims is DB duomenis - neuzkoduotu kazkaip kitaip
mysqli_set_charset($prisijungimas, "utf8"); // !!! utf8 - be bruksnelio


function getPrisijungimas() {
    global $prisijungimas; // paiimama global reiksme

    if ($prisijungimas == true) {
        return $prisijungimas;
    } else {
        echo "ERRROR: nepavyko Prisijungete prie DB:"
                    . mysqli_connect_error() . " <BR />";
        return NULL;
    }
}

// paimam  gydytojo duomenis is DB
function getDoctor( $nr ) {
    // apsauga - ar paduotas skaicius
    if ( !is_numeric($nr) ) {
        return NULL;
    }
    //                                           '$nr'
    $manoSQL = "SELECT * FROM doctors   WHERE id='$nr';   ";
    //  mysqli_query -  ivykdo SQL koda  ( grista mysql Objektas)
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

    // ar radome kazka lenteleje
    if (mysqli_num_rows($rezultatai) > 0 ) {
        // mysqli_fetch_assoc - paima sekancia eilute (ir pavercia i Array)
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    } else {
        echo "ERROR!!!! Gydytojo nr: $nr neradome. Bandykite kita<BR /> "
                . mysqli_error(getPrisijungimas());
        return NULL;
    }
}

// $gydytojas1 = getDoctor(3); // php masyvas
// print_r( $gydytojas1 ) ;

function createDoctor($vardas, $pavarde) {
    $manoSQL = " INSERT INTO doctors
                        VALUES ('', '$vardas', '$pavarde');
               ";

    $arPavyko  = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
    // if ($arPavyko != true) {
    // if (!$arPavyko) {
        echo "ERROR: nepavyko sukurti Gydytojo" . mysqli_error(getPrisijungimas());
    }
}

//reateDoctor("Povilas", "Povilaitis");
// createDoctor("Povilas", "Povilaitis");

function deleteDoctor($nr) {
  $uzkoduotasNR = htmlspecialchars($nr, ENT_QUOTES, 'UTF-8');
  $manoSQL = "DELETE FROM doctors
                      WHERE id='$nr'
                      ";
                      mysqli_query(getPrisijungimas() , $manoSQL);
}
//deleteDoctor(6);
//deleteDoctor(7); // skaicius kur i norim istrint

function editeDoctor($nr, $vardas, $pavarde){
  $manoSQL = "UPDATE doctors SET
                              id = '$nr',
                              name = '$vardas',
                              lname = '$pavarde'
                              WHERE id = '$nr'
                              LIMIT 1
                              ";
  mysqli_query(getPrisijungimas() , $manoSQL);
}
//editeDoctor(5, "Poviliukas", "Povilaitis");

function getDoctors() {
  $manoSQL = "SELECT * FROM doctors";
  $visiGydytojaiObjektas = mysqli_query(getPrisijungimas() , $manoSQL);
  return $visiGydytojaiObjektas;
}

//paiimam visus gydytojus
$visiDaktarai = getDoctors();
//is objekte laikomu VISU gydytoju - paimame SEKANTI!!!!!!!!!!!!!!!!!! Viena!!!!!!!!!!!! gydotja (idedam i masyva)
$Gydytojas1Masyvas = mysqli_fetch_assoc( $visiDaktarai);
print_r($Gydytojas1Masyvas);

$Gydytojas2Masyvas = mysqli_fetch_assoc( $visiDaktarai);
print_r($Gydytojas2Masyvas);






// php neuzsidaro
