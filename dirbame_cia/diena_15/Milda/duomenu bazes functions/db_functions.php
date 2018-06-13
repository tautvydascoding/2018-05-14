<?php

 define('DB_PAVADINIMAS', 'hospital5');
 define('DB_VARTOTOJAS', 'root');
 define('DB_SLAPTAZODIS', 'root');
 define('DB_HOST', 'localhost');

$prisijungimas =  mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

// NUSTATOM MYSQL'UI UTF8 KODUOTE, KAD KAI JIS PAIMS IS DB DUOMENIS  - NEUZKODUOTU KAZKAIP KITAIP
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
$manoSQL="INSET INTO doctors
            VALUES('', '$vardas, $pavarde') ";


mysqli_query(getPrisijungimas(), $manoSQL);



// ENT_QUOTES kad uzkoduotu ir dvigubas kabutes
$uzkoduotasVardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
$uzkoduotaPavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');






$arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
        if ($arPavyko ==false) {
            if ($arPavyko != true) {
              if ($arPavyko) {
                echo "ERROR:nepavyko sukurti gydytojo" . mysqli_error(getPrisijungimas());
            } else {
              echo "pavyko";
            }

}

// createDoctor("Povilas", "Povilaitis");



function deleteDoctor($nr) {
$manoSQL = "Delete From doctors
              WHERE id='$uzkoduotasNR'
                ";
                LIMIT=1
                mysqli_query(getPrisijungimas(), $manoSQL);
}

deleteDoctor(6);
deleteDoctor(7);



mysqli_query(getPrisijungimas(), $manoSQL);
}
function getDoctors () {
$manoSQL = "SELECT * FROM doctors";
$visigydytojaiObjektas = mysqli_query(getPrisijungimas(), $manoSQL);
return $visigydytojaiObjektas;

}



// paimam visus gydytojus
$visiDaktarai = getDoctors();
// is objekte laikomu Visugydytoju - paimame sekanti VIENA gydytoja (idedam i masyva)
$gydytojas1Masyvas = mysqli_fetch_assoc($visiDaktarai);

print_r($gydytojas1Masyvas);


// php neuzsidaro
