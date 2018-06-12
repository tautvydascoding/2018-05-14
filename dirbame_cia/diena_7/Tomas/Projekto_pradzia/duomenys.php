<?php
define('DB_PAVADINIMAS', 'studija');
define('DB_VARTOTOJAS', 'root');
define('DB_SLAPTAZODIS', 'root');
define('DB_HOST', 'localhost');

 $prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
mysqli_set_charset($prisijungimas, "utf8");

function getPrisijungimas(){
global $prisijungimas;
if ($prisijungimas==true) {
    // echo "Prisijungete prie DB sekmingai! <br />";
    return $prisijungimas;
    }
else {
    echo "ERROR: napavyko prisijungti prie DB:" . mysqli_connect_error() . "<br />";
    return NULL;
}
}

getPrisijungimas();


// paimam darbuotojo duomenis
function getDarbuotoja( $nr ) {
    // apsauga - ar paduotas skaicius
    if ( !is_numeric($nr) ) {
        return NULL;
    }
    //                                           '$nr'
    $manoSQL = "SELECT * FROM darbuotojai   WHERE id='$nr';   ";
    //  mysqli_query -  ivykdo SQL koda  ( grista mysql Objektas)
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

    // ar radome kazka lenteleje
    if (mysqli_num_rows($rezultatai) > 0 ) {
        // mysqli_fetch_assoc - paima sekancia eilute (ir pavercia i Array)
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    }
}
